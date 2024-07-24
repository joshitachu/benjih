<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precision Tech Solutions</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");


        body {
            font-family: "Poppins", sans-serif;
            background-color: #121212;
            color: #f2f2f2;
        }

        .containerr {
            max-width: 1050px;
            width: 90%;
            margin: auto;
        }

      
        .logo img {
            height: 50px;
        }

        .hero-section {
            text-align: center;
            padding: 100px 20px;
            background: url('img/WhatsApp Image 2024-07-16 at 15.11.15 (2).jpeg') no-repeat center center/cover;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .hero-section h1,
        .hero-section p,
        .hero-section img {
            position: relative;
            z-index: 2;
        }

        .hero-section h1 {
            font-size: 3rem;
            color: #fff;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.5rem;
            color: #ff4500;
        }

        .content-section {
            padding: 50px 20px;
        }

        .content-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .content-section .card {
            background: #1e1e1e;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            color: #f2f2f2;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .content-section .card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .content-section .card p {
            font-size: 1rem;
            margin-bottom: 10px;
        }

        
    </style>
</head>
<body>
  @include("partials.header")
    <div class="body">
        <div class="hero-section">
            <div class="containerr">
                <h1>Precision Tech Solutions</h1>
                <p>For all your tracking solutions</p>
                <img src="img/this the 1.png" alt="Precision Tech Solutions Logo">
            </div>
        </div>
        <section class="content-section">
            <div class="containerr">
                <h2>Our Services</h2>
                <div class="card">
                    <h3>GPS Track and Trace Systeem</h3>
                    <p>Real-time voertuigvolgsysteem voor het bijhouden en snel terughalen van gestolen voertuigen.</p>
                </div>
                <div class="card">
                    <h3>Startblokkering</h3>
                    <p>Technologie die voorkomt dat voertuigen zonder toestemming kunnen starten, ter voorkoming van diefstal.</p>
                </div>
                <div class="card">
                    <h3>G-Force Hi-Tech Monitoring Systeem</h3>
                    <p>Gedetailleerd rijgedrag monitoringsysteem dat helpt bij het bevorderen van veiliger rijgedrag en het verlagen van onderhoudskosten.</p>
                </div>
            </div>
        </section>
        <section class="content-section">
            <div class="containerr">
                <h2>Our Proposition</h2>
                <div class="card">
                    <h3>Diefstalpreventie</h3>
                    <p>Vermindert risico's en kosten door snelle opsporing en terughalen van gestolen voertuigen.</p>
                </div>
                <div class="card">
                    <h3>Rijgedrag Monitoren</h3>
                    <p>Inzicht in rijgedrag van bestuurders om schade en onderhoudskosten te minimaliseren.</p>
                </div>
                <div class="card">
                    <h3>Data Analyse</h3>
                    <p>Gegevens worden geanalyseerd en overzichtelijk weergegeven in een gebruiksvriendelijke app.</p>
                </div>
            </div>
        </section>
    </div>

   

@include("partials.footer")

</body>
</html>
