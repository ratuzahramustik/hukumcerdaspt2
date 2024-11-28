<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
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
        .create-box {
            width: 500px;
            background-color: #A03A3B; /* Lighter red box */
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            color: white;
        }
        .create-box h2 {
            margin-bottom: 20px;
            font-size: 32px;
            text-align: center;
        }
        .create-box form {
            display: flex;
            flex-wrap: wrap;
            gap: 20px 10px; /* Adding space between columns and rows */
        }
        .create-box form .form-group {
            flex: 1 1 45%; /* Adjusting the width to roughly 50% for each input field */
            padding: 0 10px; /* Adding padding inside the columns */
        }
        .create-box label {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
        }
        .create-box input, .create-box select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px; /* Adding margin between inputs */
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 16px;
            box-sizing: border-box; /* Ensure padding does not affect width */
        }
        .create-box button {
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
        .create-box button:hover {
            background-color: #c7b59c;
        }
        /* Ensure full-width input fields in smaller screens */
        @media (max-width: 768px) {
            .create-box form .form-group {
                flex: 1 1 100%;
                padding: 0;
            }
        }
    </style>
</head>
<body>

    <div class="logo">Hukum Cerdas</div>

    <div class="container">
        <div class="create-box">
            <h2>Create User</h2>
            <form method="POST" action="{{ route('users.store') }}">
                @csrf

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
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
                    <input type="text" id="telephone" name="telephone" value="{{ old('telephone') }}" placeholder="Telephone" required>
                </div>

                <div class="form-group">
                    <label for="tempat_lahir">Place of Birth</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="Place of Birth" required>
                </div>

                <div class="form-group">
                    <label for="tanggal_lahir">Date of Birth</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Gender</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        <option value="Laki laki" {{ old('jenis_kelamin') == 'Laki laki' ? 'selected' : '' }}>Laki laki</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="agama">Religion</label>
                    <select id="agama" name="agama" required>
                        <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                        <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                        <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                        <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                        <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="role">Role</label>
                    <select id="role" name="role" required>
                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                    </select>
                </div>

                <button type="submit">Create</button>
            </form>
        </div>
    </div>

</body>
</html>
