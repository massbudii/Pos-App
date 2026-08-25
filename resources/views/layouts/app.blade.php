<!DOCTYPE html>
<!-- Template Name: DashCode - HTML, React, Vue, Tailwind Admin Dashboard Template Author: Codeshaper Website: https://codeshaper.net Contact: support@codeshaperbd.net Like: https://www.facebook.com/Codeshaperbd Purchase: https://themeforest.net/item/dashcode-admin-dashboard-template/42600453 License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project. -->
<html lang="zxx" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>@yield('title', 'Pos App')</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo/favicon.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/rt-plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <!-- End : Theme CSS-->
    <script src="{{ asset('assets/js/settings.js') }}" sync></script>
</head>

<body class=" font-inter dashcode-app" id="body_class">
    {{-- ================= TOAST NOTIFIKASI DENGAN ANIMASI SMOOTH ================= --}}
    @if (session('sukses'))
        <div id="toast-success"
            style="position: fixed !important; top: 25px !important; right: 25px !important; z-index: 999999 !important; background-color: #ffffff !important; border: 1.5px solid #86efac !important; border-radius: 16px !important; box-shadow: 0 12px 35px -4px rgba(34, 197, 94, 0.2) !important; animation: toastSlideIn 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;"
            class="flex items-center p-3.5 min-w-[340px] max-w-md"
            role="alert">
            
            {{-- Kotak Icon Hijau Muda + Animasi Centang Memantul --}}
            <div style="width: 44px !important; height: 44px !important; background-color: #dcfce7 !important; border-radius: 12px !important; margin-right: 12px !important;"
                 class="flex items-center justify-center flex-shrink-0">
                <div style="width: 26px !important; height: 26px !important; background-color: #22c55e !important; border-radius: 50% !important; animation: iconPop 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) 0.2s both !important;"
                     class="flex items-center justify-center shadow-sm">
                    <svg style="width: 15px !important; height: 15px !important; color: #ffffff !important;" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                </div>
            </div>
            
            {{-- Teks Judul & Pesan --}}
            <div class="flex-1 pr-2">
                <h5 style="color: #0f172a !important; font-size: 15px !important; font-weight: 700 !important; margin: 0 !important; line-height: 1.2 !important;">Berhasil!</h5>
                <p style="color: #475569 !important; font-size: 13px !important; margin: 3px 0 0 0 !important; line-height: 1.35 !important; font-weight: 400 !important;">
                    {{ session('sukses') }}
                </p>
            </div>

            {{-- Tombol Close X --}}
            <button type="button" onclick="document.getElementById('toast-success').remove()"
                style="background: transparent !important; border: none !important; color: #94a3b8 !important; cursor: pointer !important; padding: 4px !important; margin-left: 4px !important;"
                class="hover:text-slate-700 transition-colors">
                <svg style="width: 18px !important; height: 18px !important;" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <style>
            @keyframes toastSlideIn {
                0% { transform: translateY(-30px) scale(0.95); opacity: 0; }
                100% { transform: translateY(0) scale(1); opacity: 1; }
            }
            @keyframes iconPop {
                0% { transform: scale(0); opacity: 0; }
                70% { transform: scale(1.25); }
                100% { transform: scale(1); opacity: 1; }
            }
        </style>

        <script>
            setTimeout(function() {
                let toast = document.getElementById('toast-success');
                if (toast) {
                    toast.style.transition = 'all 0.5s ease';
                    toast.style.opacity = '0';
                    toast.style.transform = 'translateY(-20px) scale(0.95)';
                    setTimeout(() => toast.remove(), 500);
                }
            }, 5000);
        </script>
    @endif
    {{-- ========================================================================= --}}
    <!-- [if IE]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif] -->
    <main class="app-wrapper">

        {{-- ========================================================== --}}
        <!-- BEGIN: Sidebar -->
        <!-- BEGIN: Sidebar -->
        @include('layouts.sidebar')
        <!-- End: Sidebar -->
        <!-- End: Sidebar -->
        <!-- BEGIN: Settings -->

        <!-- BEGIN: Settings -->
        <!-- Settings Toggle Button -->
        @include('layouts.setting')

        <!-- BEGIN: Settings Modal -->
        <div class="offcanvas offcanvas-end fixed bottom-0 flex flex-col max-w-full bg-white dark:bg-slate-800 invisible bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 ltr:right-0 rtl:left-0 border-none w-96"
            tabindex="-1" id="offcanvas" aria-labelledby="offcanvas">
            <div class="offcanvas-header flex items-center justify-between p-4 pt-3 border-b border-b-slate-300">
                <div>
                    <h3 class="block text-xl font-Inter text-slate-900 font-medium dark:text-[#eee]">
                        Theme customizer
                    </h3>
                    <p class="block text-sm font-Inter font-light text-[#68768A] dark:text-[#eee]">Customize & Preview
                        in Real Time</p>
                </div>
                <button type="button"
                    class="box-content text-2xl w-4 h-4 p-2 pt-0 -my-5 -mr-2 text-black dark:text-white border-none rounded-none opacity-100 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="offcanvas"><iconify-icon icon="line-md:close"></iconify-icon></button>
            </div>
            <div class="offcanvas-body flex-grow overflow-y-auto">
                <div class="settings-modal">
                    <div class="p-6">

                        <h3 class="mt-4">Theme</h3>
                        <form class="input-area flex items-center space-x-8 rtl:space-x-reverse" id="themeChanger">
                            <div class="input-group flex items-center">
                                <input type="radio" id="light" name="theme" value="light"
                                    class="themeCustomization-checkInput">
                                <label for="light" class="themeCustomization-checkInput-label">Light</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="dark" name="theme" value="dark"
                                    class="themeCustomization-checkInput">
                                <label for="dark" class="themeCustomization-checkInput-label">Dark</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="semiDark" name="theme" value="semiDark"
                                    class="themeCustomization-checkInput">
                                <label for="semiDark" class="themeCustomization-checkInput-label">Semi Dark</label>
                            </div>
                        </form>
                    </div>
                    <div class="divider"></div>
                    <div class="p-6">

                        <div class="flex items-center justify-between mt-5">
                            <h3 class="!mb-0">Rtl</h3>
                            <label id="rtl_ltr"
                                class="relative inline-flex h-6 w-[46px] items-center rounded-full transition-all duration-150 cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <span
                                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none ring-0 rounded-full peer dark:bg-gray-900 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-black-600"></span>
                            </label>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="p-6">
                        <h3>Content Width</h3>
                        <div class="input-area flex items-center space-x-8 rtl:space-x-reverse">
                            <div class="input-group flex items-center">
                                <input type="radio" id="fullWidth" name="content-width" value="fullWidth"
                                    class="themeCustomization-checkInput">
                                <label for="fullWidth" class="themeCustomization-checkInput-label ">Full Width</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="boxed" name="content-width" value="boxed"
                                    class="themeCustomization-checkInput">
                                <label for="boxed" class="themeCustomization-checkInput-label ">Boxed</label>
                            </div>
                        </div>
                        <h3 class="mt-4">Menu Layout</h3>
                        <div class="input-area flex items-center space-x-8 rtl:space-x-reverse">
                            <div class="input-group flex items-center">
                                <input type="radio" id="vertical_menu" name="menu_layout" value="vertical"
                                    class="themeCustomization-checkInput">
                                <label for="vertical_menu"
                                    class="themeCustomization-checkInput-label ">Vertical</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="horizontal_menu" name="menu_layout" value="horizontal"
                                    class="themeCustomization-checkInput">
                                <label for="horizontal_menu"
                                    class="themeCustomization-checkInput-label ">Horizontal</label>
                            </div>
                        </div>
                        <div id="menuCollapse" class="flex items-center justify-between mt-5">
                            <h3 class="!mb-0">Menu Collapsed</h3>
                            <label
                                class="relative inline-flex h-6 w-[46px] items-center rounded-full transition-all duration-150 cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <span
                                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none ring-0 rounded-full peer dark:bg-gray-900 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-black-500"></span>
                            </label>
                        </div>
                        <div id="menuHidden" class="!flex items-center justify-between mt-5">
                            <h3 class="!mb-0">Menu Hidden</h3>
                            <label id="menuHide"
                                class="relative inline-flex h-6 w-[46px] items-center rounded-full transition-all duration-150 cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <span
                                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none ring-0 rounded-full peer dark:bg-gray-900 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-black-500"></span>
                            </label>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="p-6">
                        <h3>Navbar Type</h3>
                        <div class="input-area flex flex-wrap items-center space-x-4 rtl:space-x-reverse">
                            <div class="input-group flex items-center">
                                <input type="radio" id="nav_floating" name="navbarType" value="floating"
                                    class="themeCustomization-checkInput">
                                <label for="nav_floating"
                                    class="themeCustomization-checkInput-label ">Floating</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="nav_sticky" name="navbarType" value="sticky"
                                    class="themeCustomization-checkInput">
                                <label for="nav_sticky" class="themeCustomization-checkInput-label ">Sticky</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="nav_static" name="navbarType" value="static"
                                    class="themeCustomization-checkInput">
                                <label for="nav_static" class="themeCustomization-checkInput-label ">Static</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="nav_hidden" name="navbarType" value="hidden"
                                    class="themeCustomization-checkInput">
                                <label for="nav_hidden" class="themeCustomization-checkInput-label ">Hidden</label>
                            </div>
                        </div>
                        <h3 class="mt-4">Footer Type</h3>
                        <div class="input-area flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="input-group flex items-center">
                                <input type="radio" id="footer_sticky" name="footerType" value="sticky"
                                    class="themeCustomization-checkInput">
                                <label for="footer_sticky" class="themeCustomization-checkInput-label ">Sticky</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="footer_static" name="footerType" value="static"
                                    class="themeCustomization-checkInput">
                                <label for="footer_static" class="themeCustomization-checkInput-label ">Static</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="footer_hidden" name="footerType" value="hidden"
                                    class="themeCustomization-checkInput">
                                <label for="footer_hidden" class="themeCustomization-checkInput-label ">Hidden</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Settings Modal -->
        <!-- END: Settings -->

        <!-- End: Settings -->
        <div class="flex flex-col justify-between min-h-screen">
            <div>
                @include('layouts.header')
                <!-- END: Search Modal -->
                <!-- END: Header -->
                <!-- END: Header -->
                <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]"
                    id="content_wrapper">
                    <div class="page-content">
                        <div class="transition-all duration-150 container-fluid" id="page_layout">
                            <div id="content_layout">



                                @yield('content')


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BEGIN: Footer For Desktop and tab -->
            @include('layouts.footer')
            <!-- END: Footer For Desktop and tab -->

            <div
                class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center
                     backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">
                <a href="chat.html">
                    <div>
                        <span
                            class="relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
                               text-slate-900 ">
                            <iconify-icon icon="heroicons-outline:mail"></iconify-icon>
                            <span
                                class="absolute right-[5px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
                             justify-center rounded-full text-white z-[99]">
                                10
                            </span>
                        </span>
                        <span class="block text-[11px] text-slate-600 dark:text-slate-300">
                            Messages
                        </span>
                    </div>
                </a>
                <a href="profile.html"
                    class="relative bg-white bg-no-repeat backdrop-filter backdrop-blur-[40px] rounded-full footer-bg dark:bg-slate-700
                                         h-[65px] w-[65px] z-[-1] -mt-[40px] flex justify-center items-center">
                    <div class="h-[50px] w-[50px] rounded-full relative left-[0px] hrefp-[0px] custom-dropshadow">
                        <img src="assets/images/users/user-1.jpg" alt=""
                            class="w-full h-full rounded-full border-2 border-slate-100">
                    </div>
                </a>
                <a href="#">
                    <div>
                        <span
                            class=" relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
                 text-slate-900">
                            <iconify-icon icon="heroicons-outline:bell"></iconify-icon>
                            <span
                                class="absolute right-[17px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
                  justify-center rounded-full text-white z-[99]">
                                2
                            </span>
                        </span>
                        <span class=" block text-[11px] text-slate-600 dark:text-slate-300">
                            Notifications
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </main>
    <!-- scripts -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/rt-plugins.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
