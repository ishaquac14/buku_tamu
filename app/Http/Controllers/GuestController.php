<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::all();
        return view('pages.guest.index', compact('guests'));
    }

    public function create()
    {
        $users = User::all();
        return view('pages.guest.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'asal_perusahaan' => 'required|string|max:255',
            'no_hp_tamu' => 'required|numeric',
            'nama_pic' => 'required|integer',
            'departemen' => 'required|string|max:255',
            'tujuan_lokasi' => 'required|string|max:255',
            'kartu' => 'required|string|max:255',
            'tujuan' => 'required|string|max:255',
            'image' => 'required|string',
        ]);

        Guest::create($validatedData);

        return redirect()->route('guest.index')->with('success', 'Guest created successfully');
    }

    public function edit($id)
    {
        $guest = Guest::findOrFail($id);
        $users = User::all();
        return view('pages.guest.edit', compact('guest', 'users'));
    }

    public function update(Request $request, $id)
    {
        $guest = Guest::findOrFail($id);

        $validatedData = $request->validate([
            'nik' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'asal_perusahaan' => 'required|string|max:255',
            'no_hp_tamu' => 'required|numeric',
            'nama_pic' => 'required|integer',
            'departemen' => 'required|string|max:255',
            'tujuan_lokasi' => 'required|string|max:255',
            'kartu' => 'required|string|max:255',
            'tujuan' => 'required|string|max:255',
            'image' => 'required|string',
        ]);

        $guest->update($validatedData);

        return redirect()->route('guest.index')->with('success', 'Guest updated successfully');
    }

    public function destroy($id)
    {
        $guest = Guest::findOrFail($id);
        $guest->delete();

        return redirect()->route('guest.index')->with('success', 'Guest deleted successfully');
    }

    public function show($id)
    {
        $guest = Guest::findOrFail($id);
        return view('pages.guest.detail', compact('guest'));
    }

    public function downloadPdf($id)
    {
        $guest = Guest::findOrFail($id);
        $pdf = Pdf::loadView('pages.guest.pdf', compact('guest'));
        return $pdf->download('guest_details_' . $guest->nama . '.pdf');
    }

    public function savePhoto(Request $request)
    {
        $data_uri = $request->input('image');
        $file_name = 'guest_' . time() . '.png';

        // Decode base64 string
        $data = explode(',', $data_uri)[1];
        $data = base64_decode($data);

        // Save the file
        Storage::disk('public')->put('guest_photos/' . $file_name, $data);

        // Return the file path
        return response()->json(['file_path' => Storage::url('guest_photos/' . $file_name)]);
    }
}
