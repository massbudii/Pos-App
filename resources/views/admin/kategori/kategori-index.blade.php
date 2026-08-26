@extends('layouts.app')
@section('title', 'Kategori Produk')

@section('content')
    <div class="space-y-5">

        {{-- 1. BREADCRUMB (Menunjukkan sedang berada di menu mana) --}}
        <div class="flex items-center justify-between">
            <ul class="m-0 p-0 list-none flex items-center space-x-2 text-sm font-medium text-slate-500 dark:text-slate-400">
                <li class="inline-block">
                    <a href="{{ route('dashboard') }}" class="text-primary-500 hover:underline">Dashboard</a>
                </li>
                <li>/</li>
                <li class="inline-block">Master Data</li>
                <li>/</li>
                <li class="inline-block text-slate-800 dark:text-white font-semibold">Kategori Produk</li>
            </ul>
        </div>

        {{-- 2. HEADER HALAMAN & TOMBOL TAMBAH --}}
        <div class="flex flex-wrap justify-between items-center gap-4">
            <div>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white">Kategori Produk</h3>
                <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">
                    Kelola pengelompokan jenis produk untuk memudahkan transaksi penjualan dan manajemen stok.
                </p>
            </div>
            <div>
                <button data-bs-toggle="modal" data-bs-target="#modalTambahKategori"
                    class="btn btn-primary inline-flex items-center justify-center space-x-2 py-2.5 px-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-150">
                    <iconify-icon icon="heroicons-outline:plus" class="text-lg"></iconify-icon>
                    <span>Tambah Kategori</span>
                </button>
            </div>
        </div>

        {{-- 3. CARD KHUSUS INFORMASI (INFO BOX / CALLOUT DENGAN BORDER & SHADOW BIRU) --}}
        <div class="bg-blue-50/70 dark:bg-slate-800 p-4 rounded-xl"
             style="border: 1.5px solid #bfdbfe; border-left: 5px solid #3b82f6; box-shadow: 0 4px 18px -2px rgba(59, 130, 246, 0.25);">
            <div class="flex items-start space-x-3">
                <iconify-icon icon="heroicons-outline:information-circle" class="text-blue-600 text-2xl flex-shrink-0 mt-0.5"></iconify-icon>
                <div class="text-sm text-slate-700 dark:text-slate-300">
                    <strong class="font-semibold text-slate-900 dark:text-white">Petunjuk Pengelolaan Kategori:</strong>
                    Gunakan kategori untuk mengelompokkan produk Anda. Kategori yang berstatus <span class="text-success-600 font-semibold">Aktif</span> akan tampil di modul Kasir (POS) dan Pembuatan Produk baru. Jika kategori dinonaktifkan, produk di dalamnya tidak akan terhapus tetapi disembunyikan dari pilihan transaksi kasir.
                </div>
            </div>
        </div>

        {{-- 4. CARD TABEL DATA KATEGORI (STYLE ASLI ADVANCED TABLE DASHCODE) --}}
        <div class="card">
            <header class="card-header border-b border-slate-100 dark:border-slate-700 pb-5">
                <h4 class="card-title text-slate-900 dark:text-white font-bold">Daftar Kategori</h4>
            </header>
            <div class="card-body px-6 pb-6">
                <div class="overflow-x-auto -mx-6 dashcode-data-table">
                    <span class="col-span-8 hidden"></span>
                    <span class="col-span-4 hidden"></span>
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700 data-table">
                                <thead class="bg-white dark:bg-slate-800 border-b-2 border-slate-100 dark:border-slate-700">
                                    <tr>
                                        <th scope="col" class="table-th w-16 !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">NO</th>
                                        <th scope="col" class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">KODE KATEGORI</th>
                                        <th scope="col" class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">NAMA KATEGORI</th>
                                        <th scope="col" class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">DESKRIPSI</th>
                                        <th scope="col" class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">STATUS</th>
                                        <th scope="col" class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">AKSI</th>
                                    </tr>
                                </thead>

                                @foreach ( $kategori as $item )
                                     <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                    {{-- Baris Data 1 --}}
                                    <tr>
                                        <td class="table-td font-medium">{{ $loop->iteration }}</td>
                                        <td class="table-td font-semibold text-slate-800 dark:text-slate-200">
                                            {{ $item->kode_kategori }}
                                        </td>
                                        <td class="table-td font-medium text-slate-900 dark:text-white">
                                             {{ $item->nama_kategori }}
                                        </td>
                                        <td class="table-td text-slate-500 dark:text-slate-400 text-sm">
                                             {{ $item->deskripsi }}
                                        </td>
                                        <td class="table-td">
                                            <div class="inline-block px-3 py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500 font-semibold text-xs capitalize">
                                                  {{ $item->status }}
                                            </div>
                                        </td>
                                        <td class="table-td">
                                            <div class="flex space-x-2 rtl:space-x-reverse items-center">
                                                {{-- Tombol Nonaktifkan (Saklar OFF) --}}
                                                <button class="action-btn text-slate-500 hover:text-danger-500" type="button" title="Nonaktifkan Kategori (Matikan)">
                                                    <iconify-icon icon="heroicons:power"></iconify-icon>
                                                </button>
                                                {{-- Tombol Edit (Biru) --}}
                                                <button class="action-btn text-primary-500 hover:text-primary-600" type="button" data-bs-toggle="modal" data-bs-target="#modalEditKategori" title="Edit Kategori">
                                                    <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                </button>
                                                {{-- Tombol Hapus --}}
                                                <button class="action-btn text-danger-500" type="button" title="Hapus Kategori">
                                                    <iconify-icon icon="heroicons:trash"></iconify-icon>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- ========================================== --}}
    {{-- MODAL 1: FORM TAMBAH KATEGORI (DASHCODE NATIVE) --}}
    {{-- ========================================== --}}
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="modalTambahKategori" tabindex="-1" aria-labelledby="modalTambahKategoriLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
            <div class="modal-content border-none shadow-2xl relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded-md outline-none text-current">

                {{-- Modal Header --}}
                <div class="flex items-center justify-between p-5 border-b border-slate-100 dark:border-slate-700">
                    <h5 class="text-xl font-medium text-slate-900 dark:text-white" id="modalTambahKategoriLabel">
                        Tambah Kategori Baru
                    </h5>
                    <button type="button" class="text-slate-400 hover:text-slate-600 dark:hover:text-white text-xl p-1" data-bs-dismiss="modal" aria-label="Close">
                        <iconify-icon icon="line-md:close"></iconify-icon>
                    </button>
                </div>

                {{-- Modal Form Body --}}
                <form action="{{ route('admin.kategori.store.proses') }}" method="POST">
                    @csrf
                    <div class="p-6 space-y-4">
                        {{-- Input Kode Kategori --}}
                        <div class="input-area">
                            <label class="form-label">Kode Kategori <span class="text-danger-500">*</span></label>
                            <input type="text" name="kode_kategori" class="form-control" placeholder="Contoh: KTG-001">
                        </div>

                        {{-- Input Nama Kategori --}}
                        <div class="input-area">
                            <label class="form-label">Nama Kategori <span class="text-danger-500">*</span></label>
                            <input type="text" name="nama_kategori" class="form-control" placeholder="Contoh: Makanan Ringan">
                        </div>

                        {{-- Input Deskripsi --}}
                        <div class="input-area">
                            <label class="form-label">Deskripsi <span class="text-danger-500">*</span></label>
                            <textarea name="deskripsi" rows="3" class="form-control" placeholder="Tuliskan keterangan singkat mengenai kategori ini..."></textarea>
                        </div>

                        {{-- Input Status --}}
                        <div class="input-area">
                            <label class="form-label">Status Kategori</label>
                            <select name="status" class="form-control">
                                <option value="">--Silahkan Dipilih--</option>
                                <option value="aktif">Aktif</option>
                                <option value="nonaktif">Nonaktif</option>
                            </select>
                        </div>
                    </div>

                    {{-- Modal Footer --}}
                    <div class="flex items-center justify-end p-4 border-t border-slate-100 dark:border-slate-700 space-x-3">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Simpan Kategori
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    {{-- ========================================== --}}
    {{-- MODAL 2: FORM EDIT KATEGORI (DASHCODE NATIVE) --}}
    {{-- ========================================== --}}
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="modalEditKategori" tabindex="-1" aria-labelledby="modalEditKategoriLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
            <div class="modal-content border-none shadow-2xl relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded-md outline-none text-current">

                {{-- Modal Header --}}
                <div class="flex items-center justify-between p-5 border-b border-slate-100 dark:border-slate-700">
                    <h5 class="text-xl font-medium text-slate-900 dark:text-white" id="modalEditKategoriLabel">
                        Edit Kategori
                    </h5>
                    <button type="button" class="text-slate-400 hover:text-slate-600 dark:hover:text-white text-xl p-1" data-bs-dismiss="modal" aria-label="Close">
                        <iconify-icon icon="line-md:close"></iconify-icon>
                    </button>
                </div>

                {{-- Modal Form Body --}}
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="p-6 space-y-4">
                        {{-- Input Kode Kategori --}}
                        <div class="input-area">
                            <label class="form-label">Kode Kategori <span class="text-danger-500">*</span></label>
                            <input type="text" name="kode_kategori" value="KTG-001" class="form-control">
                        </div>

                        {{-- Input Nama Kategori --}}
                        <div class="input-area">
                            <label class="form-label">Nama Kategori <span class="text-danger-500">*</span></label>
                            <input type="text" name="nama_kategori" value="Makanan & Snack" class="form-control">
                        </div>

                        {{-- Input Deskripsi --}}
                        <div class="input-area">
                            <label class="form-label">Deskripsi <span class="text-danger-500">*</span></label>
                            <textarea name="deskripsi" rows="3" class="form-control">Aneka Makanan Ringan, Camilan, Dan Bakery</textarea>
                        </div>

                        {{-- Input Status --}}
                        <div class="input-area">
                            <label class="form-label">Status Kategori</label>
                            <select name="status" class="form-control">
                                <option value="" selected>--Silahkan Piih--</option>
                                <option value="aktif" selected>Aktif</option>
                                <option value="nonaktif">Nonaktif</option>
                            </select>
                        </div>
                    </div>

                    {{-- Modal Footer --}}
                    <div class="flex items-center justify-end p-4 border-t border-slate-100 dark:border-slate-700 space-x-3">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-warning text-white">
                            Update Perubahan
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
