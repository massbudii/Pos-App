{{-- ================= TOAST NOTIFIKASI SUKSES & ERROR (PERSIS DASHCODE) ================= --}}

{{-- 1. NOTIFIKASI SUKSES (HIJAU + CEKLIS MEMANTUL) --}}
@if (session('sukses'))
    <div id="toast-success"
        style="position: fixed !important; top: 25px !important; right: 25px !important; z-index: 999999 !important; background-color: #ffffff !important; border: 1.5px solid #86efac !important; border-radius: 16px !important; box-shadow: 0 12px 35px -4px rgba(34, 197, 94, 0.2) !important; animation: toastSlideInRight 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards !important; display: flex !important; align-items: center !important; padding: 14px 18px !important; min-width: 320px !important; max-width: 420px !important;"
        role="alert">
        
        {{-- Kotak Icon Hijau Muda + Animasi Centang Memantul --}}
        <div style="width: 44px !important; height: 44px !important; background-color: #dcfce7 !important; border-radius: 12px !important; margin-right: 14px !important; display: flex !important; align-items: center !important; justify-content: center !important; flex-shrink: 0 !important;">
            <div style="width: 26px !important; height: 26px !important; background-color: #22c55e !important; border-radius: 50% !important; animation: iconPop 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) 0.2s both !important; display: flex !important; align-items: center !important; justify-content: center !important; box-shadow: 0 2px 6px rgba(34, 197, 94, 0.4) !important;">
                <svg style="width: 15px !important; height: 15px !important; color: #ffffff !important;" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                </svg>
            </div>
        </div>
        
        {{-- Teks Judul & Pesan --}}
        <div style="flex: 1 !important; padding-right: 8px !important;">
            <h5 style="color: #0f172a !important; font-size: 15px !important; font-weight: 700 !important; margin: 0 !important; line-height: 1.2 !important; font-family: inherit !important;">Berhasil!</h5>
            <p style="color: #475569 !important; font-size: 13px !important; margin: 4px 0 0 0 !important; line-height: 1.4 !important; font-weight: 400 !important; font-family: inherit !important;">
                {{ session('sukses') }}
            </p>
        </div>

        {{-- Tombol Close X --}}
        <button type="button" onclick="document.getElementById('toast-success').remove()"
            style="background: transparent !important; border: none !important; color: #94a3b8 !important; cursor: pointer !important; padding: 4px !important; margin-left: 6px !important; display: flex !important; align-items: center !important; justify-content: center !important;">
            <svg style="width: 18px !important; height: 18px !important;" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <script>
        setTimeout(function() {
            let toast = document.getElementById('toast-success');
            if (toast) {
                toast.style.transition = 'all 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
                toast.style.opacity = '0';
                toast.style.transform = 'translateX(120%)';
                setTimeout(() => toast.remove(), 400);
            }
        }, 5000);
    </script>
@endif


{{-- 2. NOTIFIKASI ERROR (MERAH + SILANG MEMANTUL) --}}
@if (session('error') || $errors->any())
    <div id="toast-error"
        style="position: fixed !important; top: 25px !important; right: 25px !important; z-index: 999999 !important; background-color: #ffffff !important; border: 1.5px solid #fca5a5 !important; border-radius: 16px !important; box-shadow: 0 12px 35px -4px rgba(239, 68, 68, 0.2) !important; animation: toastSlideInRight 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards !important; display: flex !important; align-items: center !important; padding: 14px 18px !important; min-width: 320px !important; max-width: 420px !important;"
        role="alert">
        
        {{-- Kotak Icon Merah Muda + Animasi Silang Memantul --}}
        <div style="width: 44px !important; height: 44px !important; background-color: #fee2e2 !important; border-radius: 12px !important; margin-right: 14px !important; display: flex !important; align-items: center !important; justify-content: center !important; flex-shrink: 0 !important;">
            <div style="width: 26px !important; height: 26px !important; background-color: #ef4444 !important; border-radius: 50% !important; animation: iconPop 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) 0.2s both !important; display: flex !important; align-items: center !important; justify-content: center !important; box-shadow: 0 2px 6px rgba(239, 68, 68, 0.4) !important;">
                <svg style="width: 15px !important; height: 15px !important; color: #ffffff !important;" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </div>
        </div>
        
        {{-- Teks Judul & Pesan --}}
        <div style="flex: 1 !important; padding-right: 8px !important;">
            <h5 style="color: #0f172a !important; font-size: 15px !important; font-weight: 700 !important; margin: 0 !important; line-height: 1.2 !important; font-family: inherit !important;">Perhatian!</h5>
            <p style="color: #475569 !important; font-size: 13px !important; margin: 4px 0 0 0 !important; line-height: 1.4 !important; font-weight: 400 !important; font-family: inherit !important;">
                {{ session('error') ?? $errors->first() }}
            </p>
        </div>

        {{-- Tombol Close X --}}
        <button type="button" onclick="document.getElementById('toast-error').remove()"
            style="background: transparent !important; border: none !important; color: #94a3b8 !important; cursor: pointer !important; padding: 4px !important; margin-left: 6px !important; display: flex !important; align-items: center !important; justify-content: center !important;">
            <svg style="width: 18px !important; height: 18px !important;" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <script>
        setTimeout(function() {
            let toast = document.getElementById('toast-error');
            if (toast) {
                toast.style.transition = 'all 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
                toast.style.opacity = '0';
                toast.style.transform = 'translateX(120%)';
                setTimeout(() => toast.remove(), 400);
            }
        }, 5000);
    </script>
@endif

<style>
    @keyframes toastSlideInRight {
        0% { transform: translateX(120%); opacity: 0; }
        100% { transform: translateX(0); opacity: 1; }
    }
    @keyframes iconPop {
        0% { transform: scale(0); opacity: 0; }
        70% { transform: scale(1.25); }
        100% { transform: scale(1); opacity: 1; }
    }
</style>