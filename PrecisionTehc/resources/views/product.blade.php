<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tracker->name }}</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
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

        .product-detail {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            background-color: #1e1e1e;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            padding: 20px;
            box-sizing: border-box;
        }

        .product-image-wrapper {
            flex: 1 1 45%;
            max-width: 45%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-info {
            flex: 1 1 45%;
            max-width: 45%;
            padding: 0 20px;
            box-sizing: border-box;
        }

        h1 {
            font-size: 2em;
            margin: 20px 0;
            color: #ffffff;
        }

        .price {
            font-size: 1.5em;
            color: #ff5722;
            margin-bottom: 20px;
        }

        .product-info p.description {
            color: #cccccc;
            font-size: 0.9em;
            line-height: 1.4em;
            margin-bottom: 10px;
        }

        .subjects {
            margin-bottom: 20px;
        }

        .subjects strong {
            display: block;
            margin-bottom: 10px;
        }

        .subjects ul {
            list-style: none;
            padding: 0;
        }

        .subjects li {
            display: inline-block;
            margin-right: 10px;
            padding: 5px 10px;
            background-color: #333;
            border-radius: 5px;
        }

        .add-to-cart-btn {
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
        }

        .add-to-cart-btn:hover {
            background-color: #e64a19;
        }

        .back-to-list {
            display: inline-block;
            margin-top: 20px;
            color: #ff5722;
            text-decoration: none;
            font-size: 1em;
        }

        .back-to-list:hover {
            text-decoration: underline;
        }

        .collapsible {
            background-color: #333;
            color: #ff5722;
            cursor: pointer;
            padding: 10px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 1.2em;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .active, .collapsible:hover {
            background-color: #444;
        }

        .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #1e1e1e;
            border-radius: 0 0 5px 5px;
        }

        .content p {
            margin: 10px 0;
        }

        @media (max-width: 768px) {
            .product-detail {
                flex-direction: column;
                align-items: center;
            }

            .product-image-wrapper, .product-info {
                flex: 1 1 100%;
                max-width: 100%;
                padding: 0;
            }

            .product-info {
                padding: 20px 0 0 0;
            }

            h1 {
                font-size: 1.75em;
            }

            .add-to-cart-btn {
                font-size: 0.9em;
                padding: 8px 16px;
            }

            .back-to-list {
                font-size: 0.9em;
            }

            .collapsible {
                font-size: 1em;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 1.5em;
            }

            .add-to-cart-btn {
                font-size: 0.8em;
                padding: 6px 12px;
            }

            .back-to-list {
                font-size: 0.8em;
            }

            .collapsible {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    @include("partials.header")

    <div class="containerr">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="product-detail">
            <div class="product-image-wrapper">
                <img src="{{ asset('img/' . $tracker->name . '.png') }}" alt="{{ $tracker->name }}" class="product-image">
            </div>
            <div class="product-info">
                <h1>{{ $tracker->name }}</h1>
                <p class="price">€{{ $tracker->price }}</p>
                <p class="description">{{ $tracker->description }}</p>
                <div class="subjects">
                    <strong>Subjects:</strong>
                    <ul>
                        @foreach($tracker->subjects as $subject)
                            <li>{{ $subject }}</li>
                        @endforeach
                    </ul>
                </div>
                <button class="collapsible">Additional Information</button>
                <div class="content">
                    <p>{{ $tracker->additional_information }}</p>
                    <p><strong>Dimensions:</strong> {{ $tracker->dimensions }}</p>
                    <p><strong>Weight:</strong> {{ $tracker->weight }} g</p>
                    <p><strong>Battery:</strong> {{ $tracker->battery }}</p>
                    <p><strong>Resistance:</strong> {{ $tracker->resistance }}</p>
                    @if($tracker->voltage)
                        <p><strong>Voltage:</strong> {{ $tracker->voltage }}</p>
                    @endif
                    @if($tracker->power_consumption)
                        <p><strong>Power Consumption:</strong> {{ $tracker->power_consumption }}</p>
                    @endif
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $tracker->id }}">
                    <button type="submit" class="add-to-cart-btn">Add to Cart</button>
                </form>
                <a href="{{ route('products.index') }}" class="back-to-list">Back to List</a>
            </div>
        </div>
    </div>

    @include("partials.footer")

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var coll = document.getElementsByClassName("collapsible");
            for (var i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            }
        });
    </script>
</body>
</html>
