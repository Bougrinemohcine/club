<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 400px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
        }

        .card img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .card h2 {
            margin-bottom: 10px;
        }

        .card p {
            margin-bottom: 5px;
        }

        .btn3 {
            display: inline-block;
            padding: 12px 24px;
            background: #4DD4BF;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            position: relative;
            overflow: hidden;
            text-decoration: none; /* Add this line */
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
    </style>
</head>
<body>
    <h1>Bonjour adherent</h1>
    <a href="{{ route('home') }}" class="btn3"> <span class="btn-icon3"></span></a>
    <div class="card" style="">
        <img src="user_pic.jpg" alt="User Picture">
        <div class="container">
            <h2>{{ $userName }} {{ $userPrenom }}</h2>
            <p><strong>Ville:</strong> {{ $userville }}</p>
            <p><strong>CIN:</strong> {{ $usercin }}</p>
            <p><strong>Carte:</strong> {{ $usercarte }}</p>
            <p><strong>Email:</strong> {{ $useremail }}</p>
        </div>
    </div>
</body>
</html>
