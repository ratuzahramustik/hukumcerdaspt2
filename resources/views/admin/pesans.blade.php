@extends('navbar')

@section('content')

<div class="container">
    <div class="card">
        <h2>Pesan dari Pengguna</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Tanggal Kirim</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $message)
                    <tr>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->message }}</td>
                        <td>{{ $message->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Tidak ada pesan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #691a20;
        color: white;
    }

    .container {
        max-width: 900px;
        margin: 150px auto;
        /* Menambahkan margin-top 100px untuk menurunkan posisi card */
        padding: 40px 20px;
        background-color: #a34949;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card {
        background-color: #a34949;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #ecf0f1;
        margin-bottom: 20px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .table th,
    .table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #7f8c8d;
    }

    .table th {
        background-color: #cbb699;
        color: white;
    }

    .table td {
        background-color:  #a34949;
        color: #ecf0f1;
    }

    .table tr:hover {
        background-color: #cbb699;
        cursor: pointer;
    }

    /* Responsiveness */
    @media screen and (max-width: 768px) {
        .container {
            padding: 10px;
        }

        .table th,
        .table td {
            padding: 10px;
        }
    }
</style>