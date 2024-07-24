<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Tracker;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);

        // Calculate total price of all items in the cart
        $total = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        return view('cart', compact('cart', 'total'));
    }

    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Tracker::find($productId);

        if (is_null($product)) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $cart = Session::get('cart', []);
        $itemFound = false;

        foreach ($cart as &$item) {
            if ($item['id'] == $product->id) {
                $item['quantity']++;
                $itemFound = true;
                break;
            }
        }

        if (!$itemFound) {
            $cart[] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'description' => $product->description,
                'category' => $product->category,
                'quantity' => 1
            ];
        }

        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Item added to cart successfully!');
    }

    public function update(Request $request, $id)
    {
        $cart = Session::get('cart', []);
        foreach ($cart as &$item) {
            if ($item['id'] == $id) {
                if ($request->input('action') == 'increase') {
                    $item['quantity']++;
                } elseif ($request->input('action') == 'decrease') {
                    $item['quantity']--;
                    if ($item['quantity'] < 1) {
                        $item['quantity'] = 1;
                    }
                }
                break;
            }
        }
        Session::put('cart', $cart);

        return redirect()->route('cart')->with('success', 'Cart updated successfully!');
    }

    public function remove($id)
    {
        $cart = Session::get('cart', []);

        foreach ($cart as $key => $item) {
            if ($item['id'] == $id) {
                unset($cart[$key]);
                break;
            }
        }

        Session::put('cart', array_values($cart));

        return redirect()->route('cart.index')->with('success', 'Item removed from cart successfully!');
    }
}

