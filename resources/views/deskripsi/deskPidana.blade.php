@extends('navbar')

@section('content')
    <!-- Menampilkan deskripsi dari post pidana -->
    <div class="content-container">
        <h2>{{ $pidanaPost->judul }}</h2> <!-- Menampilkan judul -->
        <p>{{ $pidanaPost->deskripsi }}</p> <!-- Menampilkan deskripsi -->
    </div>
@endsection

<style>
    /* Global Styling */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Body Styling */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
        padding: 20px;
        margin-top: 80px; /* Memberikan ruang agar navbar tidak menutupi konten */
    }

    /* Styling untuk konten utama */
    .content-container {
        background-color: #fff;
        padding: 40px;
        margin-top: 20px;
        border-radius: 8px;
        max-width: 800px;
        width: 100%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px; /* Memberikan ruang di bawah konten */
    }

    /* Styling untuk judul */
    h2 {
        font-size: 32px;
        font-weight: bold;
        color: #691a20;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Styling untuk deskripsi dan teks paragraf */
    p {
        font-size: 18px;
        line-height: 2.5; /* Menambah jarak antar baris dalam paragraf */
        color: #555;
        text-align: left;
        margin-bottom: 30px; /* Memberikan jarak bawah antar paragraf */
        text-indent: 50px; /* Memberikan indentasi pada setiap paragraf */
    }


    /* Styling untuk navbar */
    .navbar {
        width: 100%;
        background-color: #4CAF50;
        padding: 15px;
        position: fixed;
        top: 0;
        left: 0;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 1000; 
    }

    .navbar a:hover {
        background-color: #45a049;
        color: white;
        padding: 8px 16px;
        border-radius: 5px;
    }


    /* Responsiveness */
    @media (max-width: 768px) {
        body {
            padding: 10px;
            margin-top: 70px; /* Mengurangi jarak pada perangkat kecil */
        }

        .content-container {
            padding: 20px;
        }

        h2 {
            font-size: 28px;
        }

        p {
            font-size: 16px;
        }

        .navbar a {
            font-size: 16px;
        }
    }
</style>
