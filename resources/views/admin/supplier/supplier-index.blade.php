@extends('layouts.app')
@section('title', 'Supplier')
@section('content')

    <div class="space-y-5">

        {{-- 1. BREADCRUMB (Menunjukkan sedang berada di menu mana) --}}
        <div class="flex items-center justify-between">
            <ul class="m-0 p-0 list-none flex items-center space-x-2 text-sm font-medium text-slate-500 dark:text-slate-400">
                <li class="inline-block">
                    <a href="#" class="text-primary-500 hover:underline">Dashboard</a>
                </li>
                <li>/</li>
                <li class="inline-block">Master Data</li>
                <li>/</li>
                <li class="inline-block text-slate-800 dark:text-white font-semibold">Supplier</li>
            </ul>
        </div>

        {{-- 2. HEADER HALAMAN & TOMBOL TAMBAH --}}
        <div class="flex flex-wrap justify-between items-center gap-4">
            <div>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white">Supplier</h3>
                <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">
                    Kelola pengelompokan jenis supplier untuk memudahkan transaksi penjualan dan manajemen stok.
                </p>
            </div>
            <div>
                <button data-bs-toggle="modal" data-bs-target="#modalTambahSupplier"
                    class="btn btn-primary inline-flex items-center justify-center space-x-2 py-2.5 px-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-150">
                    <iconify-icon icon="heroicons-outline:plus" class="text-lg"></iconify-icon>
                    <span>Tambah Supplier</span>
                </button>
            </div>
        </div>

        {{-- 3. CARD KHUSUS INFORMASI (INFO BOX / CALLOUT DENGAN BORDER & SHADOW BIRU) --}}
        <div class="bg-blue-50/70 dark:bg-slate-800 p-4 rounded-xl"
            style="border: 1.5px solid #bfdbfe; border-left: 5px solid #3b82f6; box-shadow: 0 4px 18px -2px rgba(59, 130, 246, 0.25);">
            <div class="flex items-start space-x-3">
                <iconify-icon icon="heroicons-outline:information-circle"
                    class="text-blue-600 text-2xl flex-shrink-0 mt-0.5"></iconify-icon>
                <div class="text-sm text-slate-700 dark:text-slate-300">
                    <strong class="font-semibold text-slate-900 dark:text-white">Petunjuk Manajemen Supplier:</strong>
                    Pastikan informasi kontak PIC, nomor WhatsApp, dan alamat gudang supplier tercatat dengan benar. Jika
                    kerja sama dengan pemasok telah berakhir, Anda dapat mengubah statusnya menjadi <span
                        class="text-slate-500 font-semibold">Nonaktif</span> tanpa menghapus riwayat transaksi pembelian
                    lama.
                </div>
            </div>
        </div>

        {{-- 4. CARD TABEL DATA SUPPLIER (STYLE ASLI ADVANCED TABLE DASHCODE) --}}
        <div class="card border border-slate-200 dark:border-slate-700 shadow-sm">
            <header class="card-header border-b border-slate-100 dark:border-slate-700 pb-5">
                <h4 class="card-title text-slate-900 dark:text-white font-bold">Daftar Supplier</h4>
            </header>
            <div class="card-body px-6 pb-6">
                <div class="overflow-x-auto -mx-6 dashcode-data-table">
                    <span class="col-span-8 hidden"></span>
                    <span class="col-span-4 hidden"></span>
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden">
                            <table
                                class="min-w-full divide-y divide-slate-200 table-fixed dark:divide-slate-700 data-table border border-slate-200 dark:border-slate-700">
                                <thead class="bg-white dark:bg-slate-800 border-b border-slate-200 dark:border-slate-700">
                                    <tr>
                                        <th scope="col"
                                            class="table-th w-16 !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">
                                            NO</th>
                                        <th scope="col"
                                            class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">
                                            KODE SUPPLIER</th>
                                            <th scope="col"
                                            class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">
                                            NAMA SUPPLIER</th>
                                        <th scope="col"
                                            class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">
                                            NAMA KONTAK</th>
                                        <th scope="col"
                                            class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">
                                            NO TELEPON</th>
                                        <th scope="col"
                                            class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">
                                            ALAMAT</th>
                                        <th scope="col"
                                            class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">
                                            DESKRIPSI</th>
                                             <th scope="col"
                                            class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">
                                            STATUS</th>
                                        <th scope="col"
                                            class="table-th !text-slate-800 dark:!text-slate-200 font-bold text-xs tracking-wider">
                                            AKSI</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                    {{-- Baris Data 1 --}}
                                    @foreach ($supplier as $item)
                                        <tr>

                                            <td class="table-td font-semibold text-slate-800 dark:text-slate-200">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="table-td font-medium text-slate-900 dark:text-white">
                                                {{ $item->kode_supplier }}
                                            </td>
                                             <td class="table-td font-medium text-slate-900 dark:text-white">
                                                {{ $item->nama_supplier }}
                                            </td>
                                            <td class="table-td text-slate-500 dark:text-slate-400 text-sm">
                                                {{ $item->nama_kontak }}
                                            </td>
                                            <td class="table-td text-slate-500 dark:text-slate-400 text-sm">
                                                {{ $item->no_telpon }}
                                            </td>
                                            <td class="table-td text-slate-500 dark:text-slate-400 text-sm">
                                                {{ $item->alamat }}
                                            </td>
                                            <td class="table-td text-slate-500 dark:text-slate-400 text-sm">
                                                {{ $item->deskripsi }}
                                            </td>
                                            <td class="table-td">
                                                @if ($item->status === 'aktif')
                                                    <div
                                                        class="inline-block px-3 py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500 font-semibold text-xs capitalize">
                                                        Aktif
                                                    </div>
                                                @else
                                                    <div
                                                        class="inline-block px-3 py-1 rounded-[999px] bg-opacity-25 text-slate-500 bg-slate-500 font-semibold text-xs capitalize">
                                                        Nonaktif
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="table-td">
                                                <div class="flex space-x-2 rtl:space-x-reverse items-center">
                                                    {{-- Tombol Nonaktifkan (Saklar OFF) --}}
                                                    <button type="button"
                                                        class="action-btn text-slate-500 hover:text-danger-500"
                                                        title="Nonaktifkan Kategori">
                                                        <iconify-icon icon="heroicons:power"></iconify-icon>
                                                    </button>



                                                    {{-- Tombol Edit (Biru) --}}
                                                    <button class="action-btn text-primary-500 hover:text-primary-600"
                                                        type="button" data-bs-toggle="modal"
                                                        data-bs-target="#modalEditKategori{{ $item->id }}" title="Edit Kategori">
                                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                    </button>

                                                    {{-- Tombol Hapus --}}
                                                    <button class="action-btn text-danger-500" type="button"
                                                        data-bs-toggle="modal" data-bs-target="#modalHapusKategori"
                                                        title="Hapus Kategori">
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
    {{-- MODAL 1: FORM TAMBAH SUPPLIER (2 KOLOM UX)  --}}
    {{-- ========================================== --}}
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="modalTambahSupplier" tabindex="-1" aria-labelledby="modalTambahSupplierLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-2xl relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded-md outline-none text-current">

                {{-- Modal Header --}}
                <div class="flex items-center justify-between p-5 border-b border-slate-100 dark:border-slate-700">
                    <h5 class="text-xl font-medium text-slate-900 dark:text-white" id="modalTambahSupplierLabel">
                        Tambah Supplier Baru
                    </h5>
                    <button type="button" class="text-slate-400 hover:text-slate-600 dark:hover:text-white text-xl p-1"
                        data-bs-dismiss="modal" aria-label="Close">
                        <iconify-icon icon="line-md:close"></iconify-icon>
                    </button>
                </div>

                {{-- Modal Form Body (Grid 2 Kolom) --}}
                <form action="{{ route('admin.supplier.store.proses') }}" method="POST">
                    @csrf
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                            {{-- 1. Kode Supplier --}}
                            <div class="input-area">
                                <label class="form-label">Kode Supplier <span class="text-danger-500">*</span></label>
                                <input type="text" name="kode_supplier"
                                    class="form-control @error('kode_supplier') !border-danger-500 @enderror"
                                    placeholder="Contoh: SUP-001" value="{{ old('kode_supplier') }}">
                                @error('kode_supplier')
                                    <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- 2. Nama Supplier --}}
                            <div class="input-area">
                                <label class="form-label">Nama Supplier <span class="text-danger-500">*</span></label>
                                <input type="text" name="nama_supplier"
                                    class="form-control @error('nama_supplier') !border-danger-500 @enderror"
                                    placeholder="Contoh: PT Sumber Pangan" value="{{ old('nama_supplier') }}">
                                @error('nama_supplier')
                                    <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- 3. Nama Kontak (PIC) --}}
                            <div class="input-area">
                                <label class="form-label">Nama Kontak (PIC) <span class="text-danger-500">*</span></label>
                                <input type="text" name="nama_kontak"
                                    class="form-control @error('nama_kontak') !border-danger-500 @enderror"
                                    placeholder="Contoh: Budi Santoso" value="{{ old('nama_kontak') }}">
                                @error('nama_kontak')
                                    <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- 4. No Telepon --}}
                            <div class="input-area">
                                <label class="form-label">No Telepon <span class="text-danger-500">*</span></label>
                                <input type="text" name="no_telpon"
                                    class="form-control @error('no_telpon') !border-danger-500 @enderror"
                                    placeholder="Contoh: 08123456789" value="{{ old('no_telpon') }}">
                                @error('no_telpon')
                                    <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- 5. Alamat (Kiri) --}}
                            <div class="input-area">
                                <label class="form-label">Alamat Lengkap <span class="text-danger-500">*</span></label>
                                <textarea name="alamat" rows="3"
                                    class="form-control @error('alamat') !border-danger-500 @enderror"
                                    placeholder="Contoh: Jl. Sudirman No. 12, Jakarta">{{ old('alamat') }}</textarea>
                                @error('alamat')
                                    <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- 6. Deskripsi (Kanan) --}}
                            <div class="input-area">
                                <label class="form-label">Deskripsi <span class="text-danger-500">*</span></label>
                                <textarea name="deskripsi" rows="3"
                                    class="form-control @error('deskripsi') !border-danger-500 @enderror"
                                    placeholder="Tuliskan keterangan singkat mengenai supplier ini...">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- 7. Status Supplier (Paling Akhir Full Span) --}}
                            <div class="input-area md:col-span-2">
                                <label class="form-label">Status Supplier <span class="text-danger-500">*</span></label>
                                <select name="status" class="form-control @error('status') !border-danger-500 @enderror">
                                    <option value="" {{ old('status') == '' ? 'selected' : '' }}>--Silahkan Dipilih--</option>
                                    <option value="aktif" {{ old('status') === 'aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option value="nonaktif" {{ old('status') === 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                                </select>
                                @error('status')
                                    <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                                @enderror
                            </div>

                        </div>
                    </div>

                    {{-- Modal Footer --}}
                    <div class="flex items-center justify-end p-4 border-t border-slate-100 dark:border-slate-700 space-x-3">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Simpan Supplier
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    {{-- ========================================== --}}
    {{-- MODAL 2: FORM EDIT SUPPLIER (2 KOLOM UX)   --}}
    {{-- ========================================== --}}
    @foreach ($supplier as $item)
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
            id="modalEditKategori{{ $item->id }}" tabindex="-1" aria-labelledby="modalEditKategoriLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered relative w-auto pointer-events-none">
                <div
                    class="modal-content border-none shadow-2xl relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded-md outline-none text-current">

                    {{-- Modal Header --}}
                    <div class="flex items-center justify-between p-5 border-b border-slate-100 dark:border-slate-700">
                        <h5 class="text-xl font-medium text-slate-900 dark:text-white" id="modalEditKategoriLabel{{ $item->id }}">
                            Edit Supplier ({{ $item->nama_supplier }})
                        </h5>
                        <button type="button" class="text-slate-400 hover:text-slate-600 dark:hover:text-white text-xl p-1"
                            data-bs-dismiss="modal" aria-label="Close">
                            <iconify-icon icon="line-md:close"></iconify-icon>
                        </button>
                    </div>

                    {{-- Modal Form Body (Grid 2 Kolom) --}}
                    <form action="{{ route('admin.supplier.update.proses', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                                {{-- 1. Kode Supplier --}}
                                <div class="input-area">
                                    <label class="form-label">Kode Supplier <span class="text-danger-500">*</span></label>
                                    <input type="text" name="kode_supplier" class="form-control @error('kode_supplier') !border-danger-500 @enderror"
                                        placeholder="Contoh: SUP-001" value="{{ old('kode_supplier', $item->kode_supplier) }}">
                                    @error('kode_supplier')
                                        <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- 2. Nama Supplier --}}
                                <div class="input-area">
                                    <label class="form-label">Nama Supplier <span class="text-danger-500">*</span></label>
                                    <input type="text" name="nama_supplier" class="form-control @error('nama_supplier') !border-danger-500 @enderror"
                                        placeholder="Contoh: PT Sumber Pangan" value="{{ old('nama_supplier', $item->nama_supplier) }}">
                                    @error('nama_supplier')
                                        <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- 3. Nama Kontak (PIC) --}}
                                <div class="input-area">
                                    <label class="form-label">Nama Kontak (PIC) <span class="text-danger-500">*</span></label>
                                    <input type="text" name="nama_kontak" class="form-control @error('nama_kontak') !border-danger-500 @enderror"
                                        placeholder="Contoh: Budi Santoso" value="{{ old('nama_kontak', $item->nama_kontak) }}">
                                    @error('nama_kontak')
                                        <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- 4. No Telepon --}}
                                <div class="input-area">
                                    <label class="form-label">No Telepon <span class="text-danger-500">*</span></label>
                                    <input type="text" name="no_telpon" class="form-control @error('no_telpon') !border-danger-500 @enderror"
                                        placeholder="Contoh: 08123456789" value="{{ old('no_telpon', $item->no_telpon) }}">
                                    @error('no_telpon')
                                        <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- 5. Alamat (Kiri) --}}
                                <div class="input-area">
                                    <label class="form-label">Alamat Lengkap <span class="text-danger-500">*</span></label>
                                    <textarea name="alamat" rows="3"
                                        class="form-control @error('alamat') !border-danger-500 @enderror"
                                        placeholder="Contoh: Jl. Sudirman No. 12">{{ old('alamat', $item->alamat) }}</textarea>
                                    @error('alamat')
                                        <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- 6. Deskripsi (Kanan) --}}
                                <div class="input-area">
                                    <label class="form-label">Deskripsi <span class="text-danger-500">*</span></label>
                                    <textarea name="deskripsi" rows="3"
                                        class="form-control @error('deskripsi') !border-danger-500 @enderror"
                                        placeholder="Tuliskan keterangan singkat mengenai supplier ini...">{{ old('deskripsi', $item->deskripsi) }}</textarea>
                                    @error('deskripsi')
                                        <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- 7. Status Supplier (Paling Akhir Full Span) --}}
                                <div class="input-area md:col-span-2">
                                    <label class="form-label">Status Supplier <span class="text-danger-500">*</span></label>
                                    <select name="status" class="form-control @error('status') !border-danger-500 @enderror">
                                        <option value="aktif" {{ old('status', $item->status) === 'aktif' ? 'selected' : '' }}>Aktif</option>
                                        <option value="nonaktif" {{ old('status', $item->status) === 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                                    </select>
                                    @error('status')
                                        <small class="text-xs text-danger-500 mt-1 block">{{ $message }}</small>
                                    @enderror
                                </div>

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
    {{-- MODAL 3: HAPUS KATEGORI --}}
    {{-- ========================================== --}}
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="modalHapusKategori" tabindex="-1" aria-labelledby="modalHapusKategoriLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-2xl relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded-md outline-none text-current">

                <form action="#" method="POST">
                    <div class="p-6 text-center">
                        <iconify-icon icon="heroicons-outline:exclamation-triangle"
                            class="text-6xl text-danger-500 mx-auto mb-4"></iconify-icon>
                        <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Hapus Kategori?</h4>
                        <p class="text-sm text-slate-500 dark:text-slate-400 mb-6">
                            Apakah Anda yakin ingin menghapus kategori <strong>"Makanan Ringan"</strong>?
                            Data yang dihapus tidak dapat dikembalikan.
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
    {{-- SCRIPT: BUKA MODAL TAMBAH HANYA JIKA ERROR BERASAL DARI FORM TAMBAH --}}
    @if ($errors->any() && old('_method') !== 'PUT')
        <script>
            window.addEventListener('load', function() {
                @if (old('id_kategori'))
                    // Jika yang error adalah Form Edit: Buka Modal Edit baris tersebut
                    var targetId = '#modalEditSupplier{{ old('id_supplier') }}';
                @else
                    // Jika yang error adalah Form Tambah: Buka Modal Tambah
                    var targetId = '#modalTambahSupplier';
                @endif

                if (typeof $ !== 'undefined') {
                    $(targetId).modal('show');
                } else if (typeof bootstrap !== 'undefined') {
                    var modalEl = new bootstrap.Modal(document.querySelector(targetId));
                    modalEl.show();
                } else {
                    var el = document.querySelector(targetId);
                    if (el) {
                        el.classList.remove('hidden');
                        el.classList.add('show');
                    }
                }
            });
        </script>
    @endif

@endsection
