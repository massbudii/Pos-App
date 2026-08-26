<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(Request $request)
    {

        $query = Kategori::query(); //Ambil terukur & bersyarat (disaring dulu lewat database, diambil bertahap per 10 data).

        //fitur pencarian kata kunci
        if($request->filled('search')){
            $keyword = $request->search;
            $query->where(function ($q) use ($keyword) {
                $q->where('nama_kategori', 'like', "%{$keyword}%")
                    ->orWhere('kode_kategori', 'like', "%{$keyword}%")
                    ->orWhere('deskripsi', 'like', "%{keyeord}%");
            });

        }

        //urutkan data terbaru dan pagination 10 data
        $kategori = $query->latest()->paginate(10)->withQueryString();
        return view('admin.kategori.kategori-index', compact('kategori'));



    }
}
