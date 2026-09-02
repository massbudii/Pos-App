<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Halaman Utama / Landing Page Toko E-Commerce
     */
    public function index()
    {
        // Ambil data kategori aktif untuk menu
        $kategoris = Kategori::where('status', 'aktif')->get();

        return view('store.index', compact('kategoris'));
    }
}

