<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Precision Tech Solutions</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            color: #333;
            background-color: #000;
        }
        
       

        .header-image {
            width: 100%;
            height: 100px;
            background: url('your-header-image-url') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

      

        .contentt {
            color: white;
            max-width: 1200px;
            margin: 0 auto;
        }
        .content h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        .content h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        .content p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .content ul {
            margin: 1rem 0;
            padding: 0 1rem;
        }

        .content ul li {
            margin-bottom: 0.5rem;
        }

        .section-title {
            font-size: 1.5rem;
            margin-top: 2rem;
            margin-bottom: 1rem;
            text-align: center;
            color: #ff4500;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 2rem 0;
        }

        .image-container img {
            width: 30%;
            height: auto;
            margin: 1rem;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    @include("partials.header")

    <div class="header-image">
        <h1>About Us</h1>
    </div>

    <div class="contentt">
        <h2>Precision Tech Solutions (PTS)</h2>
        <p><strong>Slogan:</strong> For all your tracking solutions</p>
        <p><strong>Kernactiviteiten:</strong> Installeren van geavanceerde GPS-volgsystemen in auto's.</p>
        <p><strong>Doelgroep:</strong> Auto- & Leasebedrijven</p>

        <div class="section-title">Aanbod</div>
        <ul>
            <li><strong>GPS Track and Trace Systeem:</strong> Real-time voertuigvolgsysteem voor het bijhouden en snel terughalen van gestolen voertuigen.</li>
            <li><strong>Startblokkering:</strong> Technologie die voorkomt dat voertuigen zonder toestemming kunnen starten, ter voorkoming van diefstal.</li>
            <li><strong>G-Force Hi-Tech Monitoring Systeem:</strong> Gedetailleerd rijgedrag monitoringsysteem dat helpt bij het bevorderen van veiliger rijgedrag en het verlagen van onderhoudskosten.</li>
        </ul>

        <div class="section-title">Propositie</div>
        <ul>
            <li>Diefstalpreventie: Vermindert risico's en kosten door snelle opsporing en terughalen van gestolen voertuigen.</li>
            <li>Rijgedrag Monitoren: Inzicht in rijgedrag van bestuurders om schade en onderhoudskosten te minimaliseren.</li>
            <li>Data Analyse: Gegevens worden geanalyseerd en overzichtelijk weergegeven in een gebruiksvriendelijke app.</li>
        </ul>

        <div class="section-title">Missie</div>
        <p>Verbeteren van de veiligheid, efficiëntie en kostenbeheersing van voertuigen voor leasebedrijven door middel van geavanceerde technologieën en oplossingen.</p>

        <div class="image-container">
            <img src="img/WhatsApp Image 2024-07-16 at 15.11.15 (1).jpeg" alt="Image 1">
            <img src="img/WhatsApp Image 2024-07-16 at 15.11.15 (1).jpeg" alt="Image 2">
            <img src="img/WhatsApp Image 2024-07-16 at 15.11.15 (1).jpeg" alt="Image 3">
        </div>
    </div>
    
    @include("partials.footer")
</body>
</html>
