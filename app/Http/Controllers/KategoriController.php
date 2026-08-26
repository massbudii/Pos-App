<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(Request $request)
    {

        $query = Kategori::query(); //Ambil terukur & bersyarat (disaring dulu lewat database, diambil bertahap per 10 data).
        //urutkan data terbaru dan pagination 10 data
       $kategori = $query->latest()->paginate(10)->withQueryString();
        return view('admin.kategori.kategori-index', compact('kategori'));
    }

    public function ProsesTambah(Request $request)
    {
        $validasi = $request->validate([
            'kode_kategori' => 'required|string|max:20|unique:kategoris,kode_kategori',
            'nama_kategori' => 'required|string|max:20|unique:kategoris,nama_kategori',
            'deskripsi' => 'required|string|max:255',
            'status' => 'required|in:aktif,nonaktif',
        ],
        [
            'kode_kategori.required' => 'Kode kategori wajib diisi.',
            'kode_kategori.max'      => 'Kode kategori maksimal 20 karakter.',
            'kode_kategori.unique'   => 'Kode kategori ini sudah terdaftar di sistem.',
            'nama_kategori.required' => 'Nama kategori wajib diisi.',
            'nama_kategori.max'      => 'Nama kategori maksimal 100 karakter.',
            'nama_kategori.unique'   => 'Nama kategori ini sudah ada di sistem.',
            'deskripsi.max'          => 'Deskripsi tidak boleh melebihi 255 karakter.',
            'deskripsi.required'     => 'Deskripsi tidak boleh kosong.',
            'status.required'        => 'Status kategori wajib dipilih.',
            'status.in'              => 'Status harus bernilai aktif atau nonaktif.',
        ]);

        Kategori::create($validasi);
        return redirect()->route('admin.kategori.index')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function ProsesUpdate(Request $request, string $id)
    {
        $kategori = Kategori::findOrFail($id);
         $validasi = $request->validate([
            'kode_kategori' => 'required|string|max:20|unique:kategoris,kode_kategori,' . $id,
            'nama_kategori' => 'required|string|max:20|unique:kategoris,nama_kategori,'  . $id,
            'deskripsi' => 'required|string|max:255',
            'status' => 'required|in:aktif,nonaktif',
        ],
        [
            'kode_kategori.required' => 'Kode kategori wajib diisi.',
            'kode_kategori.max'      => 'Kode kategori maksimal 20 karakter.',
            'kode_kategori.unique'   => 'Kode kategori ini sudah terdaftar di sistem.',
            'nama_kategori.required' => 'Nama kategori wajib diisi.',
            'nama_kategori.max'      => 'Nama kategori maksimal 100 karakter.',
            'nama_kategori.unique'   => 'Nama kategori ini sudah ada di sistem.',
            'deskripsi.max'          => 'Deskripsi tidak boleh melebihi 255 karakter.',
            'deskripsi.required'     => 'Deskripsi tidak boleh kosong.',
            'status.required'        => 'Status kategori wajib dipilih.',
            'status.in'              => 'Status harus bernilai aktif atau nonaktif.',
        ]);

        $kategori->update($validasi);
        return redirect()->route('admin.kategori.index')->with('sukses', 'Data berhasil diupdate');
    }

    public function hapus(string $id)
    {
        $kategori =  Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('admin.kategori.index')->with('sukses', 'Data berhasil dihapus');
    
    }
}
