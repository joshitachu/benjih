<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
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
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 0;
        }

        h2 {
            font-size: 2em;
            margin: 20px 0;
            color: #ffffff;
            text-align: center;
        }

        .checkout-containerr {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .billing-details, .order-summary {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
            box-sizing: border-box;
        }

        .billing-details {
            flex: 1 1 60%;
            max-width: 60%;
        }

        .order-summary {
            flex: 1 1 35%;
            max-width: 35%;
        }

        .checkout-form label {
            display: block;
            margin-bottom: 10px;
            color: #fff;
        }

        .checkout-form input, .checkout-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #333;
            border-radius: 5px;
            background-color: #2b2b2b;
            color: #fff;
        }

        .btn {
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
            width: 100%;
            text-align: center;
        }

        .btn:hover {
            background-color: #e64a19;
        }

        .order-summary h3 {
            margin-top: 0;
            color: #fff;
        }

        .order-summary table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .order-summary table, .order-summary th, .order-summary td {
            border: 1px solid #333;
        }

        .order-summary th, .order-summary td {
            padding: 10px;
            text-align: left;
        }

        .order-summary .total {
            font-weight: 600;
            font-size: 1.2em;
        }

        @media (max-width: 768px) {
            .billing-details, .order-summary {
                flex: 1 1 100%;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    @include("partials.header")
    <div class="containerr">
        <h2>Checkout</h2>
        <div class="checkout-containerr">
            <div class="billing-details">
                <h3>Verzend Informatie</h3>
                <form action="{{ route('checkout.proces') }}" method="POST" class="checkout-form">
                    @csrf
                    <label for="first_name">Naam:</label>
                    <input type="text" name="first_name" id="first_name" required>
                    <label for="last_name">Achternaam:</label>
                    <input type="text" name="last_name" id="last_name" required>
                    <label for="company_name">Bedrijfsnaam (Niet verplicht):</label>
                    <input type="text" name="company_name" id="company_name">
                  
                    <label for="address">Straanaam + Huisnummer</label>
                    <input type="text" name="address" id="address" required>
                    <input type="text" name="address2" id="address2" placeholder="Appartament, suite etc ">
                    <label for="city">Stad:</label>
                    <input type="text" name="city" id="city" required>
                    <label for="state">Provincie:</label>
                    <input type="text" name="state" id="state" required>
                    <label for="zip">Postocde:</label>
                    <input type="text" name="zip" id="zip" required>
                    <label for="phone">Telefoon Nummer:</label>
                    <input type="text" name="phone" id="phone" required>
                    <label for="email">Email address:</label>
                    <input type="email" name="email" id="email" required>
                  
            </div>
            <div class="order-summary">
                <h3>Your order</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Totaal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $item)
                            <tr>
                                <td>{{ $item['name'] }} × {{ $item['quantity'] }}</td>
                                <td>€{{ $item['price'] * $item['quantity'] }}</td>
                            </tr>
                        @endforeach
                       
                       
                        <tr class="total">
                            <td>Totaal</td>
                            <td>€{{ $total }}</td>
                        </tr>
                    </tbody>
                </table>
                
                  
                    <button type="submit" class="btn">Betalen</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    @include("partials.footer")
</body>
</html>
