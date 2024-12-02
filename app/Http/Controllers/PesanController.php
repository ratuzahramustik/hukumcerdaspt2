<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    // Fungsi untuk menampilkan pesan yang diterima
    public function index()
    {
        // Mengambil semua pesan dari database
        $messages = Pesan::all();
        return view('admin.pesans', compact('messages')); // Menampilkan pesan di admin/pesans.blade.php
    }

    // Fungsi untuk menyimpan pesan yang dikirim pengguna
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Simpan pesan ke database
        Pesan::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Mengarahkan kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan Anda telah terkirim!');

    }

    public function destroy($id)
    {
        // Cari pesan berdasarkan ID
        $message = Pesan::findOrFail($id);

        // Hapus pesan
        $message->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.pesans')->with('success', 'Pesan berhasil dihapus.');
    }

}
