@extends('navbar')

@section('content')
    <h1>Edit Kategori: {{ $kategori->judul }}</h1>

    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Kategori:</label>
        <select name="kategori" required>
            <option value="Pidana" {{ $kategori->kategori == 'Pidana' ? 'selected' : '' }}>Pidana</option>
            <option value="Perdata" {{ $kategori->kategori == 'Perdata' ? 'selected' : '' }}>Perdata</option>
            <option value="Pajak & Keuangan" {{ $kategori->kategori == 'Pajak & Keuangan' ? 'selected' : '' }}>Pajak & Keuangan</option>
            <option value="Ketenagakerjaan" {{ $kategori->kategori == 'Ketenagakerjaan' ? 'selected' : '' }}>Ketenagakerjaan</option>
            <option value="Hak asasi manusia" {{ $kategori->kategori == 'Hak asasi manusia' ? 'selected' : '' }}>Hak asasi manusia</option>
        </select>

        <label>Tanggal:</label>
        <input type="date" name="tanggal" value="{{ $kategori->tanggal }}" required>

        <label>Judul:</label>
        <input type="text" name="judul" value="{{ $kategori->judul }}" required>

        <label>Deskripsi:</label>
        <textarea name="deskripsi" required>{{ $kategori->deskripsi }}</textarea>

        <button type="submit">Update</button>
    </form>
@endsection
