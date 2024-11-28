@extends('navbar')

@section('content')
<div class="profile-container">
    @if($user)
        <!-- Profile Details -->
        <div class="profile-details">
            <div class="profile-box">
                <h3>User Profile</h3>
                <p><strong>Name:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Password:</strong> ******</p> <!-- Hidden for security -->
                <p><strong>Telephone:</strong> {{ $user->telephone }}</p>
                <p><strong>Place of Birth:</strong> {{ $user->tempat_lahir }}</p>
                <p><strong>Date of Birth:</strong> {{ $user->tanggal_lahir->format('F d, Y') }}</p>
                <p><strong>Gender:</strong> {{ $user->jenis_kelamin }}</p>
                <p><strong>Religion:</strong> {{ $user->agama }}</p>
            </div>
        </div>
    @else
        <p>User not found.</p>
    @endif
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        class="btn-add-category">Logout</a>
</div>
@endsection

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #691a20;
        color: #f5f5f5;
        display: flex;
        justify-content: center;
        padding-top: 20px;
    }

    .profile-container {
        width: 80%;
        padding: 20px;
    }

    .profile-details {
        display: flex;
        justify-content: center;
        flex-direction: column;
        gap: 20px;
    }

    .profile-box {
        background-color: #a6826d;
        padding: 20px;
        border-radius: 10px;
        color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s;
    }

    .profile-box:hover {
        transform: scale(1.02);
    }

    .profile-box h3 {
        margin-bottom: 15px;
        font-size: 24px;
        text-align: center;
        color: #fff;
    }

    .profile-box p {
        margin: 8px 0;
        font-size: 16px;
        border-bottom: 1px solid #fff;
        padding-bottom: 5px;
    }

    .btn-add-category {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        color: white;
        background-color: #f44336; /* Warna merah */
        border: none;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-top: 30px;
    }

    .btn-add-category:hover {
        background-color: #d32f2f; /* Warna merah lebih gelap saat hover */
    }

    .btn-add-category:active {
        background-color: #c62828; /* Warna merah lebih gelap saat ditekan */
    }
</style>