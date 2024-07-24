<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trackers</title>
    <link rel="stylesheet" href="styles.css">

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

        h1 {
            font-size: 2.5em;
            text-align: center;
            margin-bottom: 40px;
            color: #ffffff;
        }

        .product-list {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .product-item {
            background-color: #1e1e1e;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            margin: 15px;
            padding: 20px;
            width: calc(33.333% - 30px);
            box-sizing: border-box;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.7);
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            display: block;
            margin: 0 auto 20px;
        }

        h2 {
            font-size: 1.5em;
            margin: 10px 0;
            color: #ffffff;
        }

        p {
            color: #cccccc;
            font-size: 1em;
            line-height: 1.5em;
            margin-bottom: 20px;
        }

        .view-details-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff5722;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .view-details-btn:hover {
            background-color: #e64a19;
        }

        @media (max-width: 768px) {
            .product-item {
                width: calc(50% - 30px);
            }
        }

        @media (max-width: 480px) {
            .product-item {
                width: calc(100% - 30px);
            }

            .product-image {
                height: 150px;
            }
        }
    </style>
</head>
<body>
    @include("partials.header")

    <div class="containerr">
        <h1>Trackers</h1>
        <ul class="product-list">
            @foreach($trackers as $tracker)
                <li class="product-item">
                    <img src="img/{{ $tracker->name }}.png" alt="{{ $tracker->name }}" class="product-image">
                    <h2>{{ $tracker->name }} - €{{ $tracker->price }}</h2>
                    <p>{{ Str::limit($tracker->description, 150) }}</p>
                    <a href="{{ route('product.show', $tracker->id) }}" class="view-details-btn">View Details</a>
                </li>
            @endforeach
        </ul>
    </div>

    @include("partials.footer")
</body>
</html>
