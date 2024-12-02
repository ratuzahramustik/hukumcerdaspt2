<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Hukum Cerdas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #ffffff;
            min-height: 100vh;
            margin: 0;
            background-color: #691a20;
        }

        /* Navbar */
        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #691a20;
            padding: 15px 30px;
            color: white;
            position: fixed;
            top: 0;
            z-index: 10;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .navbar ul li {
            position: relative;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        .navbar ul li:hover a {
            color: #D6C3A5;
        }

        /* Dropdown Styling */
        .navbar ul li .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #813636;
            padding: 10px;
            border-radius: 5px;
            z-index: 1;
        }

        .navbar ul li:hover .dropdown {
            display: block;
        }

        .dropdown a {
            display: block;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
        }

        .dropdown a:hover {
            background-color: #5b1b1b;
            color: #D6C3A5;
            border-radius: 5px;
        }

        .user-icon {
            font-size: 20px;
        }

        /* Main Content */
        .content {
            margin-top: 100px;
            width: 100%;
            padding: 20px;
            text-align: center;
        }

        /* Mobile Menu Button */
        .navbar-toggle {
            display: none;
        }

        /* Responsive Navbar */
        @media (max-width: 768px) {
            .navbar ul {
                flex-direction: column;
                gap: 15px;
                background-color: #691a20;
                position: absolute;
                width: 100%;
                left: 0;
                top: 60px;
                padding: 15px;
                display: none;
            }

            .navbar ul.show {
                display: flex;
            }

            .navbar-toggle {
                display: block;
                cursor: pointer;
                font-size: 24px;
                color: white;
            }

            .user-icon {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">Hukum Cerdas</div>
        <i class="fas fa-bars navbar-toggle" onclick="toggleNavbar()"></i> <!-- Mobile menu toggle -->
        <ul id="navbar-menu">
            <li><a href="{{ route('dashboard') }}">Home</a></li>
            <li><a href="{{ route('info') }}">Info</a></li>
            <li><a href="{{ route('hukum') }}">Hukum</a></li>
            <li>
                <a href="{{ route('solusi') }}">Solusi</a>
                <!-- Dropdown Menu for Solusi -->
                <div class="dropdown">
                    <a href="{{route('konsultasi')}}">Konsultasi</a>
                </div>
            </li>
            @if (Auth::user() && Auth::user()->role === 'admin')
                <li><a href="{{ route('admin.pesans') }}">Q&A</a></li>
            @else
                <li><a href="{{ route('question') }}">Q&A</a></li>
            @endif
            <li><a href="{{ route('pro') }}">Pro Bono</a></li>
            @if (Auth::user() && Auth::user()->role === 'admin')
                <li><a href="{{route('users.index')}}">User</a></li>
            @endif
            <li><a href="{{ route('profile.show') }}"><i class="fas fa-user user-icon"></i></a></li> <!-- User icon -->
        </ul>
    </div>

    @yield('content')

    <script>
        // Toggle navbar on mobile
        function toggleNavbar() {
            const navbarMenu = document.getElementById('navbar-menu');
            navbarMenu.classList.toggle('show');
        }
    </script>
</body>

</html>
