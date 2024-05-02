<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            margin: 0;
            background-image: url('{{ asset("imgs/ddddd.jpeg") }}');
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            height: 100vh;
            width: 100vw;
            position: relative; /* Set position to relative */
        }

        .btn3 {
            position: absolute;
            top: 20px; /* Adjust as needed */
            right: 20px; /* Adjust as needed */
            display: inline-block;
            padding: 12px 24px;
            background: #4DD4BF;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            overflow: hidden;
            text-decoration: none;
            z-index: 999; /* Ensure button appears above other content */
        }

        .btn-icon3 {
            display: block;
            width: 32px;
            height: 32px;
            background-image: url('wp-content/uploads/sites/185/2021/10/change/ec3.png');
            background-size: cover;
            background-size: 35px ;
            background-repeat: no-repeat;
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
        }

        .btn3::before {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.2);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .btn3:hover::before {
            opacity: 1;
        }

        .container {
            height: 100vh;
            width: 100vw;
            max-height: 600px;
            max-width: 1200px;
            min-height: 600px;
            min-width: 1100px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin: 0 auto;
        }

        .panel {
            height: 350px;
            width: 250px; /* Adjusted width */
            position: relative;
        }

        .panel:hover .card {
            filter: blur(1.5px);
        }

        .panel:hover .card1 {
            background-size: 215% 135%;
        }

        .panel:hover .card2 {
            background-size: 115% 115%;
        }

        .panel:hover .card3 {
            background-size: 155% 115%;
        }

        .panel:hover .title {
            color: rgba(255, 255, 255, 0.2);
        }

        .panel:hover .border {
            border: 1px solid rgba(255, 255, 255, 1);
        }

        .panel:hover .slide {
            bottom: 0px;
        }

        .panel:hover .ring:before,
        .panel:hover .ring:after {
            transform: translateX(-50%) translateY(-50%) rotate(310deg);
        }

        .ring,
        .card,
        .border,
        .slide,
        .line {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .ring {
            color: #fffbf1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            font-size: 170px;
        }

        .card {
            background: #f0ead6;
            position: relative;
            transition: all 1s;
            height: 350px; /* Adjusted height */
            width: 250px; /* Adjusted width */
            border: 1px solid rgba(255, 255, 255, 1);
        }

        .card1 {
            background-image: url("https://assets.codepen.io/489403/brazil.jpg");
            background-repeat: no-repeat;
            background-size: 200% 120%;
        }

        .card2 {
            background-image: url("https://assets.codepen.io/489403/belize.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        .card3 {
            background-image: url("https://assets.codepen.io/489403/egypt.jpg");
            background-repeat: no-repeat;
            background-size: 140% 100%;
        }

        .ring:before,
        .ring:after {
            content: "";
            padding: 0.7em 0.4em;
            position: absolute;
            left: 50%;
            width: 115%;
            top: 50%;
            display: block;
            border: 5px solid #50c9c3;
            border-radius: 50%;
            transition: transform 1s;
            transform: translateX(-50%) translateY(-50%) rotate(50deg);
        }

        .ring:before {
            border-color: rgb(235, 235, 235) rgb(235, 235, 235) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
            z-index: -1;
        }

        .ring:after {
            border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgb(235, 235, 235) rgb(235, 235, 235);
        }

        p {
            text-align: center;
            position: absolute;
            font-family: "Playfair Display";
        }

        .title {
            font-size: 36px;
            font-weight: 700;
            transition: all 1s;
            top: 0;
        }

        .para {
            bottom: 0;
            font-size: 16px;
            font-family: "Raleway";
            padding: 20px;
            margin: 0;
            text-align: center;
        }

        .border {
            position: absolute;
            border: 1px solid rgba(255, 255, 255, 0.5);
            height: 260px;
            width: 180px;
            transition: border 1s;
            overflow: hidden;
        }

        .slide {
            height: 260px;
            width: 180px;
            position: absolute;
            border: 1px solid black;
            bottom: -270px;
            background: rgba(0, 0, 0, 0.5);
            transition: bottom 1s;
            flex-direction: column;
        }

        .fa-plane {
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="container">
        <a href="{{ route('logout') }}" style="background-color: rgb(0, 255, 234);width:8px;height:15px;border-radius:10%" class="btn3"><span class="btn-icon3"><i class="fas fa-sign-out-alt"></i></span></a>
        <div class="panel">
            <div class="ring">
                <div class="card card2"></div>
                <div class="border">
                    <p class="title">Bonjour {{ $userPrenom }}</p>
                    <div class="slide">
                        <h6 class="para">{{ $userName }} {{ $userPrenom }}</h6>
                        <div class="line">
                            <h6 class="para">Ville</h6>
                            <h6 class="para">{{ $userville }}</h6>
                        </div>
                        <div class="line">
                            <h6 class="para">CIN</h6>
                            <h6 class="para">{{ $usercin }}</h6>
                        </div>
                        <div class="line">
                            <h6 class="para">Carte</h6>
                            <h6 class="para">{{ $usercarte }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
