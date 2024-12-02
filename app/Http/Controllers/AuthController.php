<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Barryvdh\DomPDF\Facade\PDF;

class AuthController extends Controller
{
    public function showregisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed'],
            'telephone' => 'required|string|max:15',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Perempuan,Laki laki',
            'agama' => 'required|in:Islam,Kristen,Katolik,Hindu,Buddha,Konghucu',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telephone' => $request->telephone,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir, // Make sure this is included
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'role' => 'user',
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }


    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showProfile()
    {
        $user = Auth::user();
        $user->tanggal_lahir = \Carbon\Carbon::parse($user->tanggal_lahir)->format('F d, Y');

        return view('profile', compact('user'));
    }


    public function generatePdf()
    {
        $data = [
            'nama' => '.....',
            'tempat_lahir' => '.....',
            'tanggal_lahir' => '.....',
            'alamat' => '.....',
            'no_ktp' => '.....',
            'kota' => '.....',
            'tanggal' => now()->format('d F Y')
        ];

        $pdf = PDF::loadView('suratPernyataan', $data);
        return $pdf->download('Surat_Keterangan_Tidak_Pernah_Dipidana.pdf');
    }


    public function exportPdf()
    {
        $data = [
            'nama' => '.....',
            'jabatan' => '.....',
            'perusahaan' => '.....',
            'alamat' => '.....',
            'tempat' => '.....',
            'tanggal' => '.....'
        ];

        $pdf = Pdf::loadView('surat_pernyataandaftarhitam', $data);
        return $pdf->download('Surat_Pernyataan_Daftar_Hitam.pdf');
    }
}
