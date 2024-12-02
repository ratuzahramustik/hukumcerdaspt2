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
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($messages as $message)
            <tr class="message-row">
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td class="message-content">{{ $message->message }}</td>
                <td class="message-date">{{ $message->created_at->format('d-m-Y H:i') }}</td>
                <td>
                    <form action="{{ route('pesans.destroy', $message->id) }}" method="POST"
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Tidak ada pesan.</td>
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
        background-color: #a34949;
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

        .table th,
        .table td {
            font-size: 14px;
        }

        /* Responsif pada kolom pesan agar dapat menyesuaikan lebar */
        .table td:nth-child(3) {
            word-wrap: break-word;
            white-space: normal;
            max-width: 200px;
        }

        /* Pastikan kolom tanggal tetap sejajar dengan pesan */
        .table td:nth-child(4) {
            word-wrap: break-word;
            white-space: normal;
            max-width: 150px;
        }
    }

    /* Tombol Hapus */
    .btn-danger {
        background-color: #e74c3c;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 15px;
        font-size: 14px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-danger:hover {
        background-color: #c0392b;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        transform: translateY(-2px);
    }

    .btn-danger:active {
        background-color: #a93226;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        transform: translateY(1px);
    }

    .btn-danger:focus {
        outline: none;
        box-shadow: 0 0 3px 2px rgba(231, 76, 60, 0.5);
    }
</style>
