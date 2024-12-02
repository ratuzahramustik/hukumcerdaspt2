<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hukum Cerdas</title>
    <style>
        /* Resetting default margins */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #5E1B1E;
            /* Dark red background */
        }

        /* Container styling for layout */
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100vh;
            padding: 0 50px;
            position: relative;
            overflow: hidden;
            /* Ensures no overflow from container */
        }

        /* Logo styling */
        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
            margin-left: 10px;
        }

        /* Main content styling */
        .main-content {
            color: white;
            max-width: 50%;
        }

        .main-content h1 {
            font-size: 56px;
            margin: 0;
        }

        .main-content p {
            font-size: 24px;
            margin-top: 10px;
        }

        /* Button styling */
        .button-container {
            display: flex;
            gap: 20px;
        }

        .button-container .btn {
            background-color: #D6C3A5;
            /* Beige button color */
            border: none;
            padding: 10px 20px;
            color: black;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button-container .btn:hover {
            background-color: #c7b59c;
            /* Darker beige on hover */
        }

        /* Remove blue outline on link inside buttons */
        .button-container .btn a {
            text-decoration: none;
            color: inherit;
            display: block;
            width: 100%;
            height: 100%;
        }

        .button-container .btn a:focus {
            outline: none;
        }

        /* Illustration section styling */
        .illustration {
            position: absolute;
            right: 0;
            top: 0;
            width: 50%;
            height: 100%;
            background-color: #5E1B1E;
            /* Darker red background */
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            /* Ensures no overflow from illustration */
        }

        .illustration img {
            width: 70%;
            /* Adjusts size within the circle */
            height: auto;
            border-radius: 50%;
            /* Makes the image circular */
            object-fit: cover;
            /* Ensures image covers area within the circle */
        }

        /* Welcome text styling */
        .welcome-text {
            background-color: white;
            color: #138145;
            /* Green text color */
            padding: 10px 20px;
            border-radius: 20px;
            display: inline-block;
            font-size: 24px;
            margin-top: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Main content area -->
        <div class="main-content">
            <div class="logo">Hukum Cerdas</div>
            <div class="welcome-text">Selamat Datang!</div>
            <h1>Hukum Cerdas</h1>
            <p>Solusi Hukum dengan Mudah dan Cepat</p>
            <div class="button-container">
                @if (!Auth::check())
                    <a href="{{ route('register') }}"> <button class="btn">Register</button></a>
                    <a href="{{ route('login') }}"> <button class="btn">Login</button></a>
                @else
                    <button class="btn"><a href="{{ route('dashboard') }}">Dashboard</a></button>
                @endif
            </div>
        </div>

        <!-- Illustration area -->
        <div class="illustration">
            <img src="assets/img/law_beranda.jpg" alt="Illustration of law"> <!-- Replace with correct image path -->
        </div>
    </div>

</body>

</html>
