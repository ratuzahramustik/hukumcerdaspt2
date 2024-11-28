@extends('navbar')

@section('content')
    <h1>Create New Kategori</h1>

    <form action="{{ route('kategori.store') }}" method="POST" class="create-form">
        @csrf
        <label for="kategori">Kategori:</label>
        <select name="kategori" id="kategori" required>
            <option value="Pidana">Pidana</option>
            <option value="Perdata">Perdata</option>
            <option value="Pajak & Keuangan">Pajak & Keuangan</option>
            <option value="Ketenagakerjaan">Ketenagakerjaan</option>
            <option value="Hak asasi manusia">Hak asasi manusia</option>
        </select>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" required>

        <label for="judul">Judul:</label>
        <input type="text" name="judul" id="judul" required>

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi" required></textarea>

        <button type="submit">Create</button>
    </form>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #5b1b1b;
            color: white;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #D6C3A5;
            margin-top: 20px;
        }

        .create-form {
            width: 50%;
            margin: 20px auto;
            background-color: #D6C3A5;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .create-form label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
            color: #5b1b1b;
        }

        .create-form input, .create-form select, .create-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .create-form textarea {
            height: 150px;
            resize: none;
        }

        .create-form button {
            background-color: #5b1b1b;
            color: #D6C3A5;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        .create-form button:hover {
            background-color: #813636;
        }

        @media (max-width: 768px) {
            .create-form {
                width: 80%;
            }
        }

        @media (max-width: 480px) {
            .create-form {
                width: 100%;
            }
        }
    </style>
@endsection
