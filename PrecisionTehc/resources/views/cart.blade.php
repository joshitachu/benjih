<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            background-color: #121212;
            color: #fff;
            line-height: 1.6;
        }

        .containerr {
            width: 90%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px 0;
            padding-bottom: 200px;
        }

        .empty {
            text-align: center;
        }

        h2 {
            font-size: 2em;
            margin: 20px 0;
            color: #ffffff;
            text-align: center;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #333;
            text-align: center;
        }

        table th {
            background-color: #1e1e1e;
        }

        .cart-actions {
            text-align: center;
            margin-top: 20px;
        }

        .cart-actions .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff5722;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            cursor: pointer;
            font-size: 1em;
            margin: 5px;
        }

        .cart-actions .btn:hover {
            background-color: #e64a19;
        }

        .form-inline {
            display: inline-block;
        }

        .product-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            h2 {
                font-size: 1.75em;
            }

            table th, table td {
                font-size: 0.9em;
                padding: 8px;
            }

            .cart-actions .btn {
                font-size: 0.9em;
                padding: 8px 16px;
            }
        }

        @media (max-width: 480px) {
            h2 {
                font-size: 1.5em;
            }

            table th, table td {
                font-size: 0.8em;
                padding: 6px;
            }

            .cart-actions .btn {
                font-size: 0.8em;
                padding: 6px 12px;
                margin: 5px 0;
            }

            .product-image {
                width: 40px;
                height: 40px;
            }
        }
    </style>
</head>
<body>

@include("partials.header")
    <div class="containerr">
        <h2>Your Cart</h2>
        @if($cart)
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $item)
                            <tr>
                                <td><img src="{{ asset('img/' . $item['name'] . '.png') }}" alt="{{ $item['name'] }}" class="product-image"></td>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>€{{ $item['price'] }}</td>
                                <td>€{{ $item['price'] * $item['quantity'] }}</td>
                                <td>
                                    <form class="form-inline" action="{{ route('cart.update', $item['id']) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="action" value="increase">
                                        <button type="submit" class="btn">+</button>
                                    </form>
                                    <form class="form-inline" action="{{ route('cart.update', $item['id']) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="action" value="decrease">
                                        <button type="submit" class="btn">-</button>
                                    </form>
                                    <form class="form-inline" action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
           
            <div class="cart-actions">
                <a href="{{ route('products.index') }}" class="btn">Continue Shopping</a>
                <a href="{{ route('checkout.index') }}" class="btn">Proceed to Checkout</a>
            </div>
        @else
            <div class="empty">
                <p>Your cart is empty.</p>
            </div>
            <div class="cart-actions">
                <a href="{{ route('products.index') }}" class="btn">Continue Shopping</a>
            </div>
        @endif
    </div>

    @include("partials.footer")

</body>
</html>
