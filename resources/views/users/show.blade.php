@extends('navbar')

@section('content')
<h1 class="text-center">User Details</h1>

<div class="user-details-container">
    @if(session('success'))
        <div class="alert alert-success" id="success-alert">
            <span class="alert-icon">✔</span> {{ session('success') }}
        </div>
    @endif

    <div class="user-details">
        <div class="user-item">
            <strong>Name:</strong>
            <p>{{ $user->name }}</p>
        </div>

        <div class="user-item">
            <strong>Email:</strong>
            <p>{{ $user->email }}</p>
        </div>

        <div class="user-item">
            <strong>Telephone:</strong>
            <p>{{ $user->telephone }}</p>
        </div>

        <div class="user-item">
            <strong>Place of Birth:</strong>
            <p>{{ $user->tempat_lahir }}</p>
        </div>

        <div class="user-item">
            <strong>Jenis Kelamin:</strong>
            <p>{{ $user->jenis_kelamin }}</p>
        </div>

        <div class="user-item">
            <strong>Agama:</strong>
            <p>{{ $user->agama }}</p>
        </div>

        <div class="user-item">
            <strong>Created At:</strong>
            <p>{{ $user->created_at->format('d M Y') }}</p>
        </div>

        <div class="user-actions">
            <a href="{{ route('users.index') }}" class="btn btn-back">Back to List</a>
        </div>
    </div>
</div>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #5b1b1b;
        color: white;
        margin: 0;
        padding: 0;
    }

    .user-details-container {
        width: 60%;
        margin: 40px auto;
        background-color: #A03A3B;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    h1 {
        text-align: center;
        color: #D6C3A5;
        margin-top: 20px;
    }

    .user-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .user-item {
        width: 45%;
        margin-bottom: 20px;
    }

    .user-item strong {
        display: block;
        color: #D6C3A5;
        font-size: 16px;
    }

    .user-item p {
        margin: 5px 0;
        font-size: 16px;
    }

    .btn {
        text-decoration: none;
        padding: 8px 16px;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        margin-right: 10px;
        display: inline-block;
    }

    .btn-edit {
        background-color: #FFE700;
        color: black;
        text-decoration: none;
    }

    .btn-edit:hover {
        background-color: #FF9800;
    }

    .btn-delete {
        background-color: #DC3545;
        color: white;
        border: none;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }

    .btn-back {
        background-color: #4CC9FE;
        color: white;
    }

    .btn-back:hover {
        background-color: #608BC1;
    }

    .alert {
        padding: 10px 20px;
        border-radius: 5px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        background-color: #28a745;
        color: white;
        font-size: 16px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .alert-icon {
        font-weight: bold;
        margin-right: 10px;
    }

    @media (max-width: 768px) {
        .user-details-container {
            width: 80%;
        }

        .user-item {
            width: 100%; /* Full width for smaller screens */
        }
    }

    @media (max-width: 480px) {
        .user-details-container {
            width: 100%;
        }
    }
</style>

@endsection
