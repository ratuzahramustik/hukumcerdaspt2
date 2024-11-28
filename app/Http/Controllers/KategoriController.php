<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return view('infoHukum.index', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('infoHukum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kategori' => 'required',
            'tanggal' => 'required|date',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        Kategori::create($validated);

        return redirect()->route('hukum')->with('success', 'Kategori created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('infoHukum.edit', compact('kategori'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $validated = $request->validate([
            'kategori' => 'required',
            'tanggal' => 'required|date',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $kategori->update($validated);

        return redirect()->route('kategori.katpidana')->with('success', 'Kategori updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        return redirect()->back()->with('success', 'Kategori deleted successfully.');
    }

    public function show()
    {
        // Mengambil semua kategori yang berlabel 'pidana'
        $hukum = Kategori::all(); // or you could use Kategori::get()

        // Pastikan view yang dipanggil adalah view yang tepat
        return view('infoHukum.hukum', compact('hukum'));  // Mengirim data ke view
    }

    public function showPidana()
    {
        // Mengambil semua kategori yang berlabel 'pidana'
        $pidanaPosts = Kategori::where('kategori', 'pidana')->get();

        // Pastikan view yang dipanggil adalah view yang tepat
        return view('kategori.katpidana', compact('pidanaPosts'));  // Mengirim data ke view
    }

    public function showDeskPidana($id)
    {
        // Mengambil satu kategori dengan ID yang diberikan
        $pidanaPost = Kategori::find($id); // Mengambil kategori dengan ID tertentu

        // Pastikan view yang dipanggil adalah view yang tepat
        return view('deskripsi.deskpidana', compact('pidanaPost'));  // Mengirim data ke view
    }

    public function showPerdata()
    {
        // Mengambil semua kategori yang berlabel 'pidana'
        $perdataPosts = Kategori::where('kategori', 'perdata')->get();

        // Pastikan view yang dipanggil adalah view yang tepat
        return view('kategori.katperdata', compact('perdataPosts'));  // Mengirim data ke view
    }

    public function showDeskPerdata($id)
    {
        // Mengambil semua kategori yang berlabel 'pidana'
        $perdataPosts = Kategori::find($id);

        // Pastikan view yang dipanggil adalah view yang tepat
        return view('deskripsi.deskperdata', compact('perdataPosts'));  // Mengirim data ke view
    }

    public function showPajak()
    {
        // Mengambil semua kategori yang berlabel 'pidana'
        $pajakPosts = Kategori::where('kategori', 'Pajak & Keuangan')->get();

        // Pastikan view yang dipanggil adalah view yang tepat
        return view('kategori.katpajak', compact('pajakPosts'));  // Mengirim data ke view
    }

    public function showDeskPajak($id)
    {
        // Mengambil semua kategori yang berlabel 'pidana'
        $pajakPosts = Kategori::find($id);

        // Pastikan view yang dipanggil adalah view yang tepat
        return view('deskripsi.deskpajak', compact('pajakPosts'));  // Mengirim data ke view
    }

    public function showKerja()
    {
        // Mengambil semua kategori yang berlabel 'pidana'
        $kerjaPosts = Kategori::where('kategori', 'Ketenagakerjaan')->get();

        // Pastikan view yang dipanggil adalah view yang tepat
        return view('kategori.katkerja', compact('kerjaPosts'));  // Mengirim data ke view
    }

    public function showDeskKerja($id)
    {
        // Mengambil semua kategori yang berlabel 'pidana'
        $kerjaPosts = Kategori::find($id);

        // Pastikan view yang dipanggil adalah view yang tepat
        return view('deskripsi.deskkerja', compact('kerjaPosts'));  // Mengirim data ke view
    }

    public function showHam()
    {
        // Mengambil semua kategori yang berlabel 'pidana'
        $hamPosts = Kategori::where('kategori', 'Hak asasi manusia')->get();

        // Pastikan view yang dipanggil adalah view yang tepat
        return view('kategori.katham', compact('hamPosts'));  // Mengirim data ke view
    }

    public function showDeskHam($id)
    {
        // Mengambil semua kategori yang berlabel 'pidana'
        $hamPosts = Kategori::find($id);

        // Pastikan view yang dipanggil adalah view yang tepat
        return view('deskripsi.deskham', compact('hamPosts'));  // Mengirim data ke view
    }
}
