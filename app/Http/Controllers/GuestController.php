<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('pages.guest.index');
    }

    public function create()
    {
        return view('pages.guest.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirimkan dari form
        $request->validate([
            'nik' => 'required|string',
            'nama' => 'required|string',
            'asal_perusahaan' => 'required|string',
            'nama_pic' => 'required|string',
            'departemen' => 'required|string',
            'tujuan_lokasi' => 'required|string',
            'tujuan' => 'required|string',
        ]);

        // Simpan data ke dalam database atau lakukan tindakan sesuai kebutuhan
        $guest = new Guest();
        $guest->nik = $request->nik;
        $guest->nama = $request->nama;
        $guest->asal_perusahaan = $request->asal_perusahaan;
        $guest->nama_pic = $request->nama_pic;
        $guest->departemen = $request->departemen;
        $guest->tujuan_lokasi = $request->tujuan_lokasi;
        $guest->tujuan = $request->tujuan;
        $guest->save();

        // Jika berhasil disimpan, redirect atau kembalikan response sesuai kebutuhan
        if ($guest->save()) {
            // Redirect dengan pesan sukses
            return redirect()->route('welcome')->with('success', 'Data tamu berhasil disimpan.');
        } else {
            // Redirect dengan pesan error
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data tamu. Silakan coba lagi.');
        }
    }
}
