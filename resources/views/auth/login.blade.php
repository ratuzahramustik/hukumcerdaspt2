<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #5E1B1E; /* Dark red background */
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            gap: 50px; /* Memberi jarak antara ilustrasi dan login-box */
            padding: 0 20px;
        }
        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
            position: absolute;
            top: 30px;
            left: 50px;
        }
        .illustration {
            width: 45%; /* Mengurangi ukuran agar form lebih fokus */
            text-align: center;
        }
        .illustration img {
            max-width: 100%;
            height: auto;
            border-radius: 15px; /* Menambahkan efek border radius pada gambar */
        }
        .login-box {
            width: 100%;
            max-width: 400px; /* Mengatur ukuran maksimal */
            background-color: #A03A3B; /* Lighter red box */
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            color: white;
            box-sizing: border-box;
        }
        .login-box h2 {
            margin-bottom: 20px;
            font-size: 28px;
            text-align: center;
        }
        .login-box label {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
        }
        .login-box input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border-radius: 8px;
            border: none;
            box-sizing: border-box;
            font-size: 16px;
        }
        .login-box button {
            width: 100%;
            padding: 12px;
            background-color: #D6C3A5; /* Beige button */
            color: black;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-box button:hover {
            background-color: #c7b59c;
        }
        .input-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #5E1B1E;
        }
        .input-group {
            position: relative;
        }
        /* Membuat link dalam button tidak berpengaruh pada style */
        .login-box a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>

    <div class="logo">Hukum Cerdas</div>

    <div class="container">
        <div class="illustration">
            <img src="assets/img/law_login.png" alt="Law Illustration"> <!-- Path to your image -->
        </div>
        <div class="login-box">
            <h2>Masuk ke akun anda</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email">Username atau email</label>
                <input type="text" id="email" name="email" placeholder="Masukan Email atau Username anda" required>

                <label for="password">Password</label>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Masukan sandi anda" required>
                    <span class="input-icon">&#128065;</span> <!-- Eye icon -->
                </div>

                <button type="submit">Masuk</button>
            </form>
        </div>
    </div>

</body>
</html>
