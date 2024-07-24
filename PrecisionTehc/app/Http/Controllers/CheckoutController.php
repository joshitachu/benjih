<?php

namespace App\Http\Controllers;

use App\Mail\MyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Mollie\Laravel\Facades\Mollie;


class CheckoutController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart')->with('error', 'Your cart is empty!');
        }

        $total = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        return view('checkout', compact('cart', 'total'));
    }

    public function process(Request $request)
    {


        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefoon' => 'required|string|max:15',
            'address' => 'required|string|max:500',
            'total' => 'required|numeric',
        ]);

        // Send the email

        return $this->mollie($request);
    }

    public function mollie(Request $request)
    {
        $formattedPrice = number_format((float)$request->total, 2, '.', '');

        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => $formattedPrice // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            "description" => "Order for " . $request->name,
            "redirectUrl" => route('checkout.success'),
            "webhookUrl" => route('checkout.webhook'),
            "metadata" => [
                "order_id" => time(),
            ],
        ]);

        // Store the payment ID in the session
        Session::put('paymentId', $payment->id);
        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function success(Request $request)
    {
        $paymentId = Session::get('paymentId');
        $payment = Mollie::api()->payments->get($paymentId);

        if ($payment->isPaid()) {
            // Save payment details to the database
            // Implement your Payment model and save the payment details

            // Clear the cart
            Session::forget('cart');
            Session::forget('paymentId');

            return view('success');
        } else {
            return redirect()->route('checkout.cancel');
        }
    }

    public function cancel()
    {
        Session::forget('cart');

        return view('error');
    }

    public function webhook(Request $request)
    {
        $paymentId = $request->id;
        $payment = Mollie::api()->payments->get($paymentId);

        if ($payment->isPaid()) {
            // Handle webhook payment update
        }
    }
}
