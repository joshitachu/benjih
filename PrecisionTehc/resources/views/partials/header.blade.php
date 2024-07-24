<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precision Tech Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

        body {
            font-family: "Poppins", sans-serif;
            background-color: #121212;
            color: #f2f2f2;
            padding-top: 100px;
            margin: 0;
        }

        .container {
            max-width: 1050px;
            width: 90%;
            margin: auto;
        }

        .navbar {
            width: 100%;
            background: #121212;
            padding: 1rem 0;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu-items {
            display: flex;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        .menu-items li {
            list-style: none;
            margin: 0 10px; /* Add margin between menu items */
        }

        .menu-items a {
            text-decoration: none;
            color: #f2f2f2;
            font-weight: 500;
            font-size: 1.2rem;
            padding: 0.7rem;
            transition: color 0.3s ease;
        }

        .menu-items a:hover {
            color: #ff4500;
        }

        .logo {
            flex: 1;
            text-align: center;
        }

        .logo img {
            height: 80px; /* Increased height for larger logo */
        }

        .cart-icon {
            font-size: 1.5rem;
            color: #f2f2f2;
            padding: 0.7rem;
            cursor: pointer;
        }

        @media screen and (max-width: 767px) {
            .hamburger-lines {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                width: 30px;
                height: 21px;
                cursor: pointer;
            }

            .hamburger-lines .line {
                width: 100%;
                height: 3px;
                background: #f2f2f2;
                transition: transform 0.3s ease;
            }

            .menu-items {
                display: none;
                flex-direction: column;
                width: 100%;
                background: #121212;
                position: absolute;
                top: 70px;
                left: 0;
                text-align: center;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .nav-container input[type="checkbox"]:checked ~ .menu-items {
                display: flex;
            }

            .nav-container input[type="checkbox"]:checked ~ .hamburger-lines .line1 {
                transform: rotate(45deg) translateY(9px);
            }

            .nav-container input[type="checkbox"]:checked ~ .hamburger-lines .line2 {
                opacity: 0;
            }

            .nav-container input[type="checkbox"]:checked ~ .hamburger-lines .line3 {
                transform: rotate(-45deg) translateY(-9px);
            }

            .menu-items li {
                margin: 10px 0; /* Add vertical margin between menu items on mobile */
            }

            .cart-icon {
                padding: 1rem 0;
                font-size: 1.5rem;
                color: #f2f2f2;
            }
        }

        @media screen and (min-width: 768px) {
            .menu-items {
                display: flex !important;
            }

            .hamburger-lines {
                display: none;
            }
        }

        .checkbox {
            display: none;
        }
    </style>
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="container nav-container">
                <input type="checkbox" id="menu-toggle" class="checkbox">
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <div class="logo">
                    <img src="{{ asset('img/this the 1.png') }}" alt="Precision Tech Logo">
                </div>
                <ul class="menu-items">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/diensten">Services</a></li>
                    <li><a href="/products">Producten</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/cart" class="cart-icon"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        document.querySelector('.hamburger-lines').addEventListener('click', function() {
            document.getElementById('menu-toggle').checked = !document.getElementById('menu-toggle').checked;
        });
    </script>
</body>
</html>
