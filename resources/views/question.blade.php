@extends('navbar')

@section('content')

<div class="container">
    <!-- Success Message -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        <button type="button" class="close-alert" onclick="this.parentElement.style.display='none';"></button>
    </div>
@endif

    <div class="card">
        <div class="card-header">
            <h2>Kirim Pesan</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('message.send') }}" method="POST">
                @csrf
                <!-- Nama -->
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                </div>

                <!-- Pesan -->
                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit" class="btn-submit">Kirim Pesan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #F5F5F5;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 90%;
        max-width: 600px;
        margin: 40px auto;
        padding: 20px;
    }

    .card {
        background-color:  #D6C3A5;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 70px;
    }

    .card-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .card-header h2 {
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-group label {
        font-size: 16px;
        font-weight: bold;
        color: #333;
        margin-bottom: 8px;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group textarea {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border: 1px solid #dcdcdc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .form-group input[type="text"]:focus,
    .form-group input[type="email"]:focus,
    .form-group textarea:focus {
        border-color: #d2691e;
        outline: none;
        box-shadow: 0 0 5px rgba(210, 105, 30, 0.5);
    }

    .form-group textarea {
        resize: vertical;
    }

    .btn-submit {
        padding: 12px;
        background-color: #a34949;
        color: white;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-submit:hover {
        background-color: #a0522d;
    }
</style>
