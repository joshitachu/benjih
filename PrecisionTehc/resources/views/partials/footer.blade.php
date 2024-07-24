<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            
        }
        footer {
            background-color: #000000;
            color: #fff;
            padding: 2rem 1rem;
            text-align: left;
        }
        footer .footer-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        footer .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }
        footer .footer-column {
            text-align: left;
        }
        footer .footer-column h3 {
            margin-bottom: 1rem;
            font-size: 1.2rem;
            text-transform: uppercase;
        }
        footer .footer-column p,
        footer .footer-column a {
            font-size: 0.9rem;
            color: #fff;
            margin-bottom: 0.5rem;
            display: block;
        }
        footer .footer-column a:hover {
            color: #d70000;
        }
        footer .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        footer .social-icons i {
            font-size: 1.5rem;
            color: #fff;
            transition: color 0.3s;
        }
        footer .social-icons i:hover {
            color: #d70000;
        }
        footer .subscribe input[type="email"] {
            padding: 0.5rem;
            width: calc(100% - 110px);
            border: none;
            border-radius: 3px 0 0 3px;
        }
        footer .subscribe button {
            padding: 0.5rem;
            background-color:#333;
            color: #fff;
            border: none;
            border-radius: 0 3px 3px 0;
            cursor: pointer;
        }
        footer .subscribe button:hover {
            background-color: #c50000;
        }
    </style>
</head>
<body>
    <footer>
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>KoraCleaning</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
               
                <div class="footer-column">
                    <a href="/contact">Contact</a>
                    <a href="/faq">FAQ</a>
                    <a href="/help">Help</a>
                    <a href="/privacy">Privacy</a>
                    <a href="/AlgemeneVW">Algemene Voorwaarden</a>
                </div>
                <div class="footer-column subscribe">
                    <input type="email" placeholder="E-mail">
                    <button>VERZENDEN</button>
                    <p><strong>BTWNummer:</strong> NL005044702B60</p>
                    <p><strong>Kvk:</strong> 93809743</p>


                </div>
            </div>
        </div>
    </footer>

</body>
</html>
