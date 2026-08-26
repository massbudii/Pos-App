@extends('layouts.app')
@section('title', 'Kategori Produk')

@section('content')
    <div class="space-y-5">

        {{-- 1. BREADCRUMB --}}
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

        {{-- 3. CARD KHUSUS INFORMASI (INFO BOX BLUE CALLOUT) --}}
        <div class="bg-blue-50/70 dark:bg-slate-800 p-4 rounded-xl"
            style="border: 1.5px solid #bfdbfe; border-left: 5px solid #3b82f6; box-shadow: 0 4px 18px -2px rgba(59, 130, 246, 0.25);">
            <div class="flex items-start space-x-3">
                <iconify-icon icon="heroicons-outline:information-circle"
                    class="text-blue-600 text-2xl flex-shrink-0 mt-0.5"></iconify-icon>
                <div class="text-sm text-slate-700 dark:text-slate-300">
                    <strong class="font-semibold text-slate-900 dark:text-white">Petunjuk Pengelolaan Kategori:</strong>
                    Gunakan kategori untuk mengelompokkan produk Anda. Kategori yang berstatus <span
                        class="text-success-600 font-semibold">Aktif</span> akan tampil di modul Kasir (POS) dan Pembuatan
                    Produk baru. Jika kategori dinonaktifkan, produk di dalamnya tidak akan terhapus tetapi disembunyikan
                    dari pilihan transaksi kasir.
                </div>
            </div>
        </div>

        {{-- 4. CARD TABEL DATA KATEGORI --}}
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
                                        <th scope="col" class="table-th w-16 !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">
                                            NO
                                        </th>
                                        <th scope="col" class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">
                                            KODE KATEGORI
                                        </th>
                                        <th scope="col" class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">
                                            NAMA KATEGORI
                                        </th>
                                        <th scope="col" class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">
                                            DESKRIPSI
                                        </th>
                                        <th scope="col" class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">
                                            STATUS
                                        </th>
                                        <th scope="col" class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">
                                            AKSI
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                    @foreach ($kategori as $item)
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
                                                @if ($item->status === 'aktif')
                                                    <div class="inline-block px-3 py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500 font-semibold text-xs capitalize">
                                                        Aktif
                                                    </div>
                                                @else
                                                    <div class="inline-block px-3 py-1 rounded-[999px] bg-opacity-25 text-slate-500 bg-slate-500 font-semibold text-xs capitalize">
                                                        Nonaktif
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="table-td">
                                                <div class="flex space-x-2 rtl:space-x-reverse items-center">

                                                    {{-- 1. TOMBOL UBAH STATUS (PATCH) --}}
                                                    @if ($item->status === 'aktif')
                                                        <form action="{{ route('admin.kategori.nonaktifkan.proses', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="action-btn text-slate-500 hover:text-danger-500" title="Nonaktifkan Kategori">
                                                                <iconify-icon icon="heroicons:power"></iconify-icon>
                                                            </button>
                                                        </form>
                                                    @else
                                                        <form action="{{ route('admin.kategori.aktifkan.proses', $item->id) }}" method="POST" class="inline">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="action-btn text-slate-400 hover:text-success-500" title="Aktifkan Kategori">
                                                                <iconify-icon icon="heroicons:bolt"></iconify-icon>
                                                            </button>
                                                        </form>
                                                    @endif

                                                    {{-- 2. TOMBOL EDIT (MEMBUKA MODAL PER ID) --}}
                                                    <button class="action-btn text-primary-500 hover:text-primary-600" type="button"
                                                        data-bs-toggle="modal" data-bs-target="#modalEditKategori{{ $item->id }}" title="Edit Kategori">
                                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                    </button>

                                                    {{-- 3. TOMBOL HAPUS (MEMBUKA MODAL KONFIRMASI) --}}
                                                    <button class="action-btn text-danger-500 hover:text-danger-600" type="button"
                                                        data-bs-toggle="modal" data-bs-target="#modalHapusKategori{{ $item->id }}" title="Hapus Kategori">
                                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                                    </button>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- ========================================== --}}
    {{-- MODAL 1: FORM TAMBAH KATEGORI BARU        --}}
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
                            <input type="text" name="kode_kategori"
                                class="form-control @error('kode_kategori') !border-danger-500 @enderror"
                                placeholder="Contoh: KTG-001" value="{{ old('kode_kategori') }}">
                            @error('kode_kategori')
                                <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Input Nama Kategori --}}
                        <div class="input-area">
                            <label class="form-label">Nama Kategori <span class="text-danger-500">*</span></label>
                            <input type="text" name="nama_kategori"
                                class="form-control @error('nama_kategori') !border-danger-500 @enderror"
                                placeholder="Contoh: Makanan Ringan" value="{{ old('nama_kategori') }}">
                            @error('nama_kategori')
                                <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Input Deskripsi --}}
                        <div class="input-area">
                            <label class="form-label">Deskripsi <span class="text-danger-500">*</span></label>
                            <textarea name="deskripsi" rows="3"
                                class="form-control @error('deskripsi') !border-danger-500 @enderror"
                                placeholder="Tuliskan keterangan singkat mengenai kategori ini...">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Input Status --}}
                        <div class="input-area">
                            <label class="form-label">Status Kategori <span class="text-danger-500">*</span></label>
                            <select name="status" class="form-control @error('status') !border-danger-500 @enderror">
                                <option value="">--Silahkan Dipilih--</option>
                                <option value="aktif" {{ old('status', 'aktif') === 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="nonaktif" {{ old('status') === 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                            </select>
                            @error('status')
                                <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                            @enderror
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
    {{-- MODAL 2: FORM EDIT KATEGORI (PER ID ITEM) --}}
    {{-- ========================================== --}}
    @foreach ($kategori as $item)
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
            id="modalEditKategori{{ $item->id }}" tabindex="-1" aria-labelledby="modalEditKategoriLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                <div class="modal-content border-none shadow-2xl relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded-md outline-none text-current">

                    {{-- Modal Header --}}
                    <div class="flex items-center justify-between p-5 border-b border-slate-100 dark:border-slate-700">
                        <h5 class="text-xl font-medium text-slate-900 dark:text-white" id="modalEditKategoriLabel{{ $item->id }}">
                            Edit Kategori: {{ $item->nama_kategori }}
                        </h5>
                        <button type="button" class="text-slate-400 hover:text-slate-600 dark:hover:text-white text-xl p-1" data-bs-dismiss="modal" aria-label="Close">
                            <iconify-icon icon="line-md:close"></iconify-icon>
                        </button>
                    </div>

                    {{-- Modal Form Body --}}
                    <form action="{{ route('admin.kategori.update.proses', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="p-6 space-y-4">

                            {{-- Input Kode Kategori --}}
                            <div class="input-area">
                                <label class="form-label">Kode Kategori <span class="text-danger-500">*</span></label>
                                <input type="text" name="kode_kategori" value="{{ old('kode_kategori', $item->kode_kategori) }}" class="form-control" required>
                            </div>

                            {{-- Input Nama Kategori --}}
                            <div class="input-area">
                                <label class="form-label">Nama Kategori <span class="text-danger-500">*</span></label>
                                <input type="text" name="nama_kategori" value="{{ old('nama_kategori', $item->nama_kategori) }}" class="form-control" required>
                            </div>

                            {{-- Input Deskripsi --}}
                            <div class="input-area">
                                <label class="form-label">Deskripsi <span class="text-danger-500">*</span></label>
                                <textarea name="deskripsi" rows="3" class="form-control" required>{{ old('deskripsi', $item->deskripsi) }}</textarea>
                            </div>

                            {{-- Input Status --}}
                            <div class="input-area">
                                <label class="form-label">Status Kategori <span class="text-danger-500">*</span></label>
                                <select name="status" class="form-control" required>
                                    <option value="aktif" {{ old('status', $item->status) === 'aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option value="nonaktif" {{ old('status', $item->status) === 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
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
    @endforeach

    {{-- ========================================== --}}
    {{-- MODAL 3: KONFIRMASI HAPUS (PER ID ITEM)   --}}
    {{-- ========================================== --}}
    @foreach ($kategori as $item)
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
            id="modalHapusKategori{{ $item->id }}" tabindex="-1" aria-labelledby="modalHapusKategoriLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                <div class="modal-content border-none shadow-2xl relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded-md outline-none text-current">

                    <form action="{{ route('admin.kategori.proses.hapus', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="p-6 text-center">
                            <iconify-icon icon="heroicons-outline:exclamation-triangle" class="text-6xl text-danger-500 mx-auto mb-4"></iconify-icon>
                            <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Hapus Kategori?</h4>
                            <p class="text-sm text-slate-500 dark:text-slate-400 mb-6">
                                Apakah Anda yakin ingin menghapus kategori <strong>"{{ $item->nama_kategori }}"</strong>? Data yang dihapus tidak dapat dikembalikan.
                            </p>
                            <div class="flex justify-center space-x-3">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Batal
                                </button>
                                <button type="submit" class="btn btn-danger">
                                    Ya, Hapus Data
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    @endforeach

    {{-- SCRIPT: BUKA OTOMATIS MODAL TAMBAH JIKA ADA ERROR VALIDASI --}}
    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var modalTambah = new bootstrap.Modal(document.getElementById('modalTambahKategori'));
                modalTambah.show();
            });
        </script>
    @endif

@endsection
