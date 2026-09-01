<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $data = Supplier::query();
        $supplier =$data->latest()->paginate(10)->withQueryString();
        return view('admin.supplier.supplier-index', compact('supplier'));
    }

    public function ProsesTambah(Request $request)
    {

        $validasi = $request->validate([
        'kode_supplier' => 'required|max:20|unique:suppliers,kode_supplier',
        'nama_supplier' => 'required|max:100|unique:suppliers,nama_supplier',
        'nama_kontak'   => 'required|max:100|string',
        'no_telpon'     => 'required|max:20|string',
        'alamat'        => 'required|max:100|string',
        'deskripsi'     => 'required|string',
        'status'        =>  'required|in:aktif,nonaktif',
        ],
        [
            'kode_supplier.required' => 'Kode supplier wajib diisi.',
            'kode_supplier.max'      => 'Kode supplier maksimal 20 karakter.',
            'kode_supplier.unique'   => 'Kode supplier ini sudah terdaftar di sistem.',
            'nama_supplier.required' => 'Nama supplier wajib diisi.',
            'nama_supplier.max'      => 'Nama supplier maksimal 100 karakter.',
            'nama_supplier.unique'   => 'Nama supplier ini sudah ada di sistem.',
            'nama_kontak.required'   => 'Nama kontak wajib diisi.',
            'nama_kontak.max'        => 'Nama kontak maksimal 100 karakter.',
            'no_telpon.required'     => 'Nomor telepon wajib diisi.',
            'no_telpon.max'          => 'Nomor telepon maksimal 20 karakter.',
            'alamat.required'        => 'Alamat wajib diisi.',
            'alamat.max'             => 'Alamat maksimal 100 karakter.',
            'deskripsi.required'     => 'Deskripsi wajib diisi.',
            'status.required'        => 'Status supplier wajib dipilih.',
            'status.in'              => 'Status harus bernilai aktif atau nonaktif.',
        ]);

        Supplier::create($validasi);
        return redirect()->route('admin.supplier.index')->with('sukses', 'Supplier berhasil ditambahkan');
    }

    public function ProsesUpdate(Request $request, string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $validasi = $request->validate([
        'kode_supplier' => 'required|max:20|unique:suppliers,kode_supplier,' .$id,
        'nama_supplier' => 'required|max:100|unique:suppliers,nama_supplier,' .$id,
        'nama_kontak'   => 'required|max:100|string',
        'no_telpon'     => 'required|max:20|string',
        'alamat'        => 'required|max:100|string',
        'deskripsi'     => 'required|string',
        'status'        =>  'required|in:aktif,nonaktif',
        ],[
        'kode_supplier.required' => 'Kode supplier wajib diisi.',
        'kode_supplier.max'      => 'Kode supplier maksimal 20 karakter.',
        'kode_supplier.unique'   => 'Kode supplier ini sudah terdaftar di sistem.',
        'nama_supplier.required' => 'Nama supplier wajib diisi.',
        'nama_supplier.max'      => 'Nama supplier maksimal 100 karakter.',
        'nama_supplier.unique'   => 'Nama supplier ini sudah ada di sistem.',
        'nama_kontak.required'   => 'Nama kontak wajib diisi.',
        'nama_kontak.max'        => 'Nama kontak maksimal 100 karakter.',
        'no_telpon.required'     => 'Nomor telepon wajib diisi.',
        'no_telpon.max'          => 'Nomor telepon maksimal 20 karakter.',
        'alamat.required'        => 'Alamat wajib diisi.',
        'alamat.max'             => 'Alamat maksimal 100 karakter.',
        'deskripsi.required'     => 'Deskripsi wajib diisi.',
        'status.required'        => 'Status supplier wajib dipilih.',
        'status.in'              => 'Status harus bernilai aktif atau nonaktif.',
        ]);

        $supplier->update($validasi);
         return redirect()->route('admin.supplier.index')->with('sukses', 'Supplier berhasil diupdate');
    }

    public function ProsesDelete(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return redirect()->route('admin.supplier.index')->with('sukses', 'Supplier berhasil dihapus');
    }

    public function ProsesAktifkan(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->update(['status' => 'aktif']);
        return redirect()->route('admin.supplier.index')->with('sukses', 'Supplier berhasil diaktifkan');
    }

    public function ProsesNonaktifkan(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->update(['status' => 'nonaktif']);
        return redirect()->route('admin.supplier.index')->with('sukses', 'Supplier berhasil dinonaktifkan');
    }

}
