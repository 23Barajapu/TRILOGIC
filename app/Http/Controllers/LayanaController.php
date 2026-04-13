<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayanaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = Layanan::all();
        return view('admin.pages.layanan.index', ['title' => 'Data Layanan', 'layanans' => $layanans]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.layanan.create', ['title' => 'Tambah Layanan']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('layanan', 'public');
        }

        Layanan::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $gambarPath,
        ]);
        return redirect()->route('admin.layanan')->with('success', 'Layanan berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('admin.pages.layanan.edit', ['title' => 'Edit Layanan', 'layanan' => $layanan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $layanan = Layanan::findOrFail($id);

        $gambarPath = $layanan->gambar;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('layanan', 'public');
        }

        $layanan->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $gambarPath,
        ]);
        return redirect()->route('admin.layanan')->with('success', 'Layanan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->delete();
        return redirect()->route('admin.layanan')->with('success', 'Layanan berhasil dihapus');
    }
}
