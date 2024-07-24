<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precision Tech Solutions</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            color: #333;
            background-color: #000;
            
        }
        
       
        .sectionn {
            position: relative;
            text-align: center;
            color: white;
            margin: 0.5rem 0;
        }
        
        .sectionn img {
            width: 80%;
            height: auto;
            display: block;
            margin: 0.5rem auto;
        }
        
        .sectionn .text-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;
            padding: 0;
            width: 90%;
            max-width: 500px;
        }

        .sectionn h1 {
            font-size: 1.2rem;
            margin: 0.3rem 0;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 0.3rem;
        }
        
        .sectionn p {
            font-size: 0.8rem;
            margin: 0.3rem 0;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 0.3rem;
        }

        .sectionn a {
            display: inline-block;
            padding: 0.3rem 1rem;
            border: 2px solid white;
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 0.7rem;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .info-section {
            text-align: center;
            margin: 0.5rem 1rem;
            color: white;
        }

        .info-section h1 {
            font-size: 1.2rem;
            color: #fff;
        }

        .info-section p {
            font-size: 0.8rem;
            color: #ccc;
            margin: 0.3rem 0;
        }
    </style>
</head>
<body>
   @include("partials.header")

    <div class="sectionn">
        <img src="img/WhatsApp Image 2024-07-16 at 15.11.14.jpeg" alt="Precision Tech Solutions">
        <div class="text-container">
            <h1>Precision Tech Solutions (PTS)</h1>
            <p>Slogan: For all your tracking solutions</p>
        </div>
    </div>
    
    <div class="sectionn">
        <img src="img/WhatsApp Image 2024-07-16 at 15.11.15 (2).jpeg" alt="GPS Track and Trace System">
        <div class="text-container">
            <h1>GPS Track and Trace Systeem</h1>
            <p>Real-time voertuigvolgsysteem voor het bijhouden en snel terughalen van gestolen voertuigen.</p>
            <a href="#">Learn More</a>
        </div>
    </div>

    <div class="sectionn">
        <img src="img/WhatsApp Image 2024-07-16 at 15.11.15.jpeg" alt="Startblokkering">
        <div class="text-container">
            <h1>Startblokkering</h1>
            <p>Technologie die voorkomt dat voertuigen zonder toestemming kunnen starten, ter voorkoming van diefstal.</p>
            <a href="#">Learn More</a>
        </div>
    </div>

    <div class="sectionn">
        <img src="img/WhatsApp Image 2024-07-16 at 15.11.16.jpeg" alt="G-Force Hi-Tech Monitoring System">
        <div class="text-container">
            <h1>G-Force Hi-Tech Monitoring Systeem</h1>
            <p>Gedetailleerd rijgedrag monitoringsysteem dat helpt bij het bevorderen van veiliger rijgedrag en het verlagen van onderhoudskosten.</p>
            <a href="#">Learn More</a>
        </div>
    </div>

    <div class="info-section">
        <h1>Onze Propositie</h1>
        <p>Diefstalpreventie: Vermindert risico's en kosten door snelle opsporing en terughalen van gestolen voertuigen.</p>
    </div>

    @include("partials.footer")


</body>
</html>
