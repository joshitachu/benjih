<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

     

        .containerr {
            max-width: 1050px;
            width: 90%;
            margin: auto;
            background-color: #1e1e1e;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 2rem;
        }

        h1 {
            text-align: center;
            width: 100%;
            margin-bottom: 30px;
            font-size: 2rem;
            color: #fff;
        }

        .form-section,
        .contact-details {
            width: 100%;
            padding: 0 20px;
        }

        .contact-details h2,
        .form-section h2 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #ff4500;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-align: center;
        }

        .contact-details p {
            margin: 10px 0;
            line-height: 1.6;
            color: #f2f2f2;
            text-align: center;
        }

        .contact-details p strong {
            display: block;
            margin-top: 10px;
            color: #ff4500;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"],
        textarea,
        select {
            padding: 15px;
            font-size: 1rem;
            background-color: #333;
            border: 1px solid #444;
            border-radius: 5px;
            color: #f2f2f2;
            margin-bottom: 15px;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }

        input[type="text"]:focus,
        textarea:focus,
        select:focus {
            border-color: #ff4500;
            outline: none;
            background-color: #444;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: url('data:image/svg+xml;charset=US-ASCII,<svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10"><path fill="none" stroke="%23f2f2f2" stroke-width="2" d="M1 1l6 6 6-6"/></svg>') no-repeat right 10px center;
            background-size: 10px 10px;
        }

        .map-container {
            width: 90%;
            max-width: 1050px;
            margin: 2rem auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .map-container iframe {
            width: 100%;
            height: 450px;
            border: 0;
        }

        @media screen and (max-width: 767px) {
            .containerr {
                padding: 20px;
            }

            .contact-details,
            .form-section {
                padding: 0;
            }

            .map-container iframe {
                height: 300px;
            }
        }
    </style>
</head>

<body>
    @include("partials.header")

    <div class="containerr">
        <h1>Contact Us</h1>

        <div class="contact-details">
            <h2>Contact Details</h2>
            <p>
                <strong>Email:</strong>
                PrecisionTechSolutions@gmail.com
            </p>
            <p>
                <strong>Phone:</strong>
                80829424
            </p>
            <p>
                <strong>Address:</strong>
                Leemansplein 435<br>
                2521 EJ
            </p>
        </div>
    </div>

    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.5222642289526!2d6.7700794157543725!3d52.21220697975737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b81ecdf0a8235b%3A0x70f0ed7e8351c19c!2sLeemansplein%20435%2C%207521%20XH%20Enschede%2C%20Netherlands!5e0!3m2!1sen!2sus!4v1618256451829!5m2!1sen!2sus"
            allowfullscreen="" loading="lazy"></iframe>
    </div>

    @include("partials.footer")


</body>

</html>
