<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #5E1B1E; /* Dark red background */
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100vh;
            padding: 0 50px;
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
            width: 50%;
            text-align: center;
        }
        .illustration img {
            max-width: 80%;
        }
        .register-box {
            width: 500px;
            background-color: #A03A3B; /* Lighter red box */
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            color: white;
            margin-right: 60px;
        }
        .register-box h2 {
            margin-bottom: 20px;
            font-size: 32px;
            text-align: center;
        }
        .register-box form {
            display: flex;
            flex-wrap: wrap;
            gap: 20px 10px; /* Adding space between columns and rows */
        }
        .register-box form .form-group {
            flex: 1 1 45%; /* Adjusting the width to roughly 50% for each input field */
            padding: 0 10px; /* Adding padding inside the columns */
        }
        .register-box label {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
        }
        .register-box input, .register-box select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px; /* Adding margin between inputs */
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 16px;
            box-sizing: border-box; /* Ensure padding does not affect width */
        }
        .register-box button {
            width: 100%;
            padding: 10px;
            background-color: #D6C3A5; /* Beige button */
            color: black;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .register-box button:hover {
            background-color: #c7b59c;
        }
        /* Ensure full-width input fields in smaller screens */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                text-align: center;
            }
            .illustration {
                width: 100%;
            }
            .register-box {
                width: 100%;
                margin-top: 20px;
            }
            .register-box form .form-group {
                flex: 1 1 100%;
                padding: 0;
            }
        }
    </style>
</head>
<body>

    <div class="logo">Hukum Cerdas</div>

    <div class="container">
        <div class="illustration">
            <img src="assets/img/law_login.png" alt="Law Illustration"> <!-- Path to your image -->
        </div>
        <div class="register-box">
            <h2>Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                </div>

                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input type="text" id="telephone" name="telephone" placeholder="Telephone" required>
                </div>

                <div class="form-group">
                    <label for="tempat_lahir">Place of Birth</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Place of Birth" required>
                </div>

                <div class="form-group">
                    <label for="tanggal_lahir">Date of Birth</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Gender</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="Perempuan">Perempuan</option>
                        <option value="Laki laki">Laki laki</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="agama">Religion</label>
                    <select id="agama" name="agama" required>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>

                <button type="submit">Register</button>
            </form>
        </div>
    </div>

</body>
</html>
