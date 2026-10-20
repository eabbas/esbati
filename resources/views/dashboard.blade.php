<!DOCTYPE html >
<html lang="fa" dir='rtl'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* ===== پالت رنگی مترونیک ===== */
        :root {
            --metronic-sidebar: #0D0E12;
            --metronic-bg-content: #FCFCFC;
            --metronic-bg-form: #FFFFFF;
            --metronic-shadow-form: #F5F5F5;
            --metronic-border: #DBDFE9;
            --metronic-text: #9A9CAE;
            --metronic-primary: #FFFFFF;
            --metronic-primary-dark: #0a6fd6;
            --metronic-primary-light: #4a9fff;
            
            --shadow-sm: 0 2px 8px rgba(27, 132, 255, 0.06);
            --shadow-md: 0 4px 20px rgba(27, 132, 255, 0.10);
            --shadow-lg: 0 8px 40px rgba(27, 132, 255, 0.14);
            --shadow-xl: 0 12px 60px rgba(27, 132, 255, 0.18);
        }
        body {
            background: var(--metronic-bg-content);
            min-height: 100vh;
        }
        
        .transition-all {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* ===== کارت‌ها ===== */
        .stat-card {
            transition: all 0.3s ease;
            border-right: 4px solid transparent;
            background: var(--metronic-bg-form);
            border-radius: 16px;
            padding: 20px;
            box-shadow: var(--shadow-sm);
        }
        
        .stat-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-lg);
        }
        
        .stat-card.blue {
            border-right-color: var(--metronic-primary);
            background: linear-gradient(135deg, var(--metronic-bg-form), var(--metronic-shadow-form));
        }
        .stat-card.green {
            border-right-color: #059669;
            background: linear-gradient(135deg, var(--metronic-bg-form), var(--metronic-shadow-form));
        }
        .stat-card.sky {
            border-right-color: var(--metronic-primary-light);
            background: linear-gradient(135deg, var(--metronic-bg-form), var(--metronic-shadow-form));
        }
        .stat-card.aqua {
            border-right-color: #7dd3fc;
            background: linear-gradient(135deg, var(--metronic-bg-form), var(--metronic-shadow-form));
        }
        
        /* ===== سایدبار ===== */
        .sidebar-link {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        
        .sidebar-link::before {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: linear-gradient(to bottom, var(--metronic-primary), var(--metronic-primary-dark));
            transform: scaleY(0);
            transition: transform 0.3s ease;
            border-radius: 0 4px 4px 0;
        }
        
        .sidebar-link:hover::before,
        .sidebar-link.active::before {
            transform: scaleY(1);
        }
        
        .sidebar-link.active {
            background: rgba(27, 132, 255, 0.08);
            color: var(--metronic-primary);
        }
        
        .sidebar-link:hover:not(.active) {
            background: rgba(27, 132, 255, 0.04);
        }
        
        /* ===== منو آیتم‌ها ===== */
        .menu-item {
            background: var(--metronic-bg-form);
            border-radius: 14px;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
        }
        
        .menu-item:hover {
            box-shadow: var(--shadow-md);
            transform: translateX(-4px);
        }
        
        .menu-item.active {
            background: rgba(27, 132, 255, 0.05);
            box-shadow: var(--shadow-md);
        }
        
        /* ===== زیرمنو ===== */
        .sub-menu-item {
            transition: all 0.25s ease;
            padding: 6px 12px;
        }
        
        /* ===== اصلاح هاور متن ===== */
        .sub-menu-item a {
            transition: color 0.3s ease;
        }
        
        .sub-menu-item a:hover {
            /* color: var(--metronic-primary) ; */
            background: transparent !important;
        }
        
        .element a {
            transition: color 0.3s ease;
        }
        
        .element a:hover {
            color: var(--metronic-primary) ;
            background: transparent !important;
        }
        
        .sub-menu-item:hover {
            background: transparent !important;
            transform: none !important;
            box-shadow: none !important;
        }
        
        .mt-6 a:hover {
            background: transparent !important;
            color: #dc2626 !important;
        }
        
        /* ===== هدر ===== */
        .header-gradient {
            background: linear-gradient(135deg, var(--metronic-bg-form), var(--metronic-bg-content));
            box-shadow: 0 4px 30px rgba(27, 132, 255, 0.06);
        }
        
        /* ===== دکمه‌ها ===== */
        .btn-soft {
            background: var(--metronic-bg-form);
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
        }
        
        .btn-soft:hover {
            background: var(--metronic-primary);
            color: var(--metronic-bg-form);
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }
        
        .btn-soft-green {
            background: var(--metronic-bg-form);
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
        }
        
        .btn-soft-green:hover {
            background: #059669;
            color: var(--metronic-bg-form);
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }
        
        /* ===== جستجو ===== */
        .search-box {
            background: var(--metronic-bg-form);
            border-radius: 14px;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
        }
        
        .search-box:focus-within {
            box-shadow: var(--shadow-md);
            transform: scale(1.01);
        }
        
        .search-box input {
            background: transparent;
        }
        
        /* ===== بخش‌ها ===== */
        .section-divider {
            background: linear-gradient(to right, transparent, var(--metronic-border), transparent);
            height: 2px;
            border: none;
            margin: 20px 0;
            opacity: 0.3;
        }
        
        .section-title {
            color: var(--metronic-text);
            font-weight: 700;
            position: relative;
            padding-right: 16px;
        }
        
        .section-title::before {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 24px;
            background: linear-gradient(to bottom, var(--metronic-primary), var(--metronic-primary-dark));
            border-radius: 4px;
        }
        
        /* ===== اوورلی ===== */
        .overlay-bg {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(4px);
        }
        
        /* ===== اسکرول ===== */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: var(--metronic-bg-content);
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, var(--metronic-primary), var(--metronic-primary-dark));
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--metronic-primary);
        }
        
        .section-icon {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
        }
        
        /* ===== ریسپانسیو ===== */
        @media (max-width: 1024px) {
            .sidebar {
                transform: translateX(100%);
                position: fixed;
                top: 0;
                right: 0;
                height: 100vh;
                z-index: 1000;
                width: 280px;
                transition: transform 0.3s ease;
                background: var(--metronic-sidebar) !important;
                box-shadow: var(--shadow-xl);
            }
            .sidebar.open {
                transform: translateX(0);
            }

            .overlay {
                display: none;
                position: fixed;
                inset: 0;
                background: rgba(0, 0, 0, 0.4);
                backdrop-filter: blur(4px);
                z-index: 998;
            }
            .overlay.active {
                display: block;
            }
        }
        
        @media (min-width: 1024px) {
            .sidebar {
                transform: translateX(0) !important;
                position: sticky !important;
                top: 0;
                height: 100vh;
                background: var(--metronic-sidebar) !important;
                box-shadow: var(--shadow-md);
            }
            .mobile-menu-btn {
                display: none !important;
            }
        }
        
        /* ===== لوگو ===== */
        .logo-gradient {
            background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark), var(--metronic-primary-light));
            box-shadow: 0 4px 20px rgba(27, 132, 255, 0.25);
        }
        
        /* ===== فوتر ===== */
        .footer-divider {
            background: linear-gradient(to right, transparent, var(--metronic-border), transparent);
            height: 2px;
            border: none;
            opacity: 0.2;
        }
        
        /* ===== هدر پروفایل ===== */
        .avatar-gradient {
            background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
            box-shadow: 0 4px 20px rgba(27, 132, 255, 0.20);
        }
        
        .badge-dot {
            background: linear-gradient(135deg, #dc2626, #f87171);
            box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.15);
        }
        
        /* ===== منو باز شده ===== */
        .menu-open {
            background: rgba(27, 132, 255, 0.04);
            border-radius: 14px;
        }
        
        /* ===== آیتم‌های منو ===== */
        .nav-item {
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        
        .nav-item:hover {
            background: var(--metronic-bg-form);
            box-shadow: var(--shadow-sm);
        }
        
        .nav-item.active {
            background: var(--metronic-bg-form);
            box-shadow: var(--shadow-md);
        }

        /* ===== منوهای سایدبار ===== */
        .sidebar-menu-item {
            background: var(--metronic-bg-form);
            border-radius: 14px;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
        }
        
        .sidebar-menu-item:hover {
            box-shadow: var(--shadow-md);
            transform: translateX(-4px);
        }
        
        .sidebar-menu-item.active {
            background: rgba(27, 132, 255, 0.04);
            box-shadow: var(--shadow-md);
        }

        .menu-icon-blue {
            color: var(--metronic-primary);
        }
        .menu-icon-green {
            color: #059669;
        }
        .menu-icon-sky {
            color: var(--metronic-primary-light);
        }
        .menu-icon-aqua {
            color: #7dd3fc;
        }
    </style>
    
    @stack('styles')
</head>
<body>

    <div class="w-12/12 flex min-h-screen transition-all">
        
        <!-- ===== اوورلی ===== -->
        <div id="overlay" class="overlay" onclick="closeSidebar()"></div>

        <!-- ============================================================ -->
        <!-- ===== سایدبار ===== -->
        <!-- ============================================================ -->
        <aside id="sidebar" class="w-2/12 sidebar fixed top-0 right-0 h-full bg-[#0D0E12] shadow-xl transition-all z-999 overflow-y-auto">
            
            <!-- لوگو -->
            <div class="flex items-center gap-3 px-6 py-6 bg-gradient-to-r from-[#0D0E12] to-[#1a1a20]">
                <div class="w-11 h-11 rounded-2xl logo-gradient flex items-center justify-center text-white text-xl shadow-lg shadow-[#1B84FF]/25">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-white">وفادار طب</h1>
                    <p class="text-xs text-[#9A9CAE]">تجهیزات پزشکی و طبی</p>
                </div>
            </div>

            <!-- منو -->
            <nav class="px-4 py-6">
                <a href="{{url('/')}}" class="text-md font-semibold text-[#9A9CAE] uppercase tracking-wider px-3 mb-4 flex gap-1 text-center items-center"> 
                    <svg class='w-7' viewBox="-1.6 -1.6 19.20 19.20" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#1fd699" stroke-width="0.00016" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.032"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0L0 6V8H1V15H4V10H7V15H15V8H16V6L14 4.5V1H11V2.25L8 0ZM9 10H12V13H9V10Z" fill="#18c390"></path> </g></svg>
                    <span>رفتن به خانه</span>
                </a>


                    <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#1a1a20] shadow-sm hover:shadow-md transition-all mb-3'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-white text-base font-medium'>
                                <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#1B84FF">
                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                                </svg>
                                <span class="text-[#9A9CAE]">آدرس</span>
                            </div>
                            <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg>
                                <a href="#" class="hover:text-white transition-colors font-medium">ایجاد آدرس جدید</a>
                            </div>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                <svg class='size-4 fill-[#1B84FF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                </svg>
                                <a href="#" class="hover:text-white transition-colors font-medium">لیست آدرس ها</a>
                            </div>
                        </div>
                    </div>
                    <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#1a1a20] shadow-sm hover:shadow-md transition-all mb-3'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-white text-base font-medium'>
                                <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#1B84FF">
                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                                </svg>
                                <span class="text-[#9A9CAE]">سفارش</span>
                            </div>
                            <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                <svg class='size-4 fill-[#1B84FF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                </svg>
                                <a href="#" class="hover:text-white transition-colors font-medium">لیست سفارش ها</a>
                            </div>
                        </div>
                    </div>



                    <!-- =====  محصولات ===== -->
                    <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#1a1a20] shadow-sm hover:shadow-md transition-all mb-3'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-white text-base font-medium'>
                                <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#1B84FF">
                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                                </svg>
                                <span class="text-[#9A9CAE]">محصولات</span>
                            </div>
                            <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg>
                                <a href="#" class="hover:text-white transition-colors font-medium">ایجاد محصول جدید</a>
                            </div>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                <svg class='size-4 fill-[#1B84FF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                </svg>
                                <a href="#" class="hover:text-white transition-colors font-medium">لیست محصولات</a>
                            </div>

                        </div>
                    </div>

                    <!-- =====  کد تخفیف ===== -->
                    <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#1a1a20] shadow-sm hover:shadow-md transition-all mb-3'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-white text-base font-medium'>
                                <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#1B84FF">
                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                                </svg>
                                <span class="text-[#9A9CAE]">کد تخفیف</span>
                            </div>
                            <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg>
                                <a href="#" class="hover:text-white transition-colors font-medium">ایجاد کد تخفیف جدید</a>
                            </div>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                <svg class='size-4 fill-[#1B84FF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                </svg>
                                <a href="#" class="hover:text-white transition-colors font-medium">لیست کد تخفیف</a>
                            </div>

                        </div>
                    </div>

                    <!-- =====  دسته بندی ها ===== -->
                    <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#1a1a20] shadow-sm hover:shadow-md transition-all mb-3'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-white text-base font-medium'>
                                <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#059669">
                                    <path d="M184.1 59.8c-7.7-9.4-19.5-11.7-29.9-5.4L8.6 132.8c-8 5.1-13.3 14.3-13.3 24.5v198.2c0 10.2 5.3 19.4 13.3 24.5l145.6 78.3c10.4 6.3 22.2 3.9 29.9-5.4L306.7 256 184.1 59.8zM344 349.8L366.5 304H472V208H366.5L344 162.2 472 80V48H344.4L296 16 247.6 48H128v32h64.4L344 128v221.8zM306.7 256L418.5 460.2c7.7 9.4 19.5 11.7 29.9 5.4l145.6-78.3c8-5.1 13.3-14.3 13.3-24.5V164.5c0-10.2-5.3-19.4-13.3-24.5L448.4 61.8c-10.4-6.3-22.2-3.9-29.9 5.4L306.7 256z"/>
                                </svg>
                                <span class="text-[#9A9CAE]">دسته بندی ها</span>
                            </div>
                            <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg>
                                <a href="#" class="hover:text-white transition-colors font-medium">ایجاد دسته بندی جدید</a>
                            </div>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                <svg class='size-4 fill-[#1B84FF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                </svg>
                                <a href="#" class="hover:text-white transition-colors font-medium">لیست دسته بندی ها</a>
                            </div>
                        </div>
                    </div>

                    <!-- =====  برند ===== -->
                    <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#1a1a20] shadow-sm hover:shadow-md transition-all mb-3'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-white text-base font-medium'>
                                <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#d97706">
                                    <path d="M499.1 6.3c-8.1-6-12.9-17.1-11.1-27.1L496 0c-44.3 0-80 35.7-80 80c0 14.3 3.8 27.7 10.4 39.3L352 193.4l-25.4-25.4c-12.5-12.5-32.8-12.5-45.3 0l-56.6 56.6c-12.5 12.5-12.5 32.8 0 45.3l22.6 22.6-56.6 56.6-22.6-22.6c-12.5-12.5-32.8-12.5-45.3 0L88.1 368c-12.5 12.5-12.5 32.8 0 45.3l13.7 13.7L64 464l48 48 36.9-36.9 13.7 13.7c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6 22.6 22.6c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6c12.5-12.5 12.5-32.8 0-45.3l-25.4-25.4L405.3 206c11.6 6.6 25 10.4 38.7 10.4c44.3 0 80-35.7 80-80c0-4.9-.4-9.7-1.2-14.4L505.7 15.4c1.5-7.8-1.8-15.9-6.6-19.1z"/>
                                </svg>
                                <span class="text-[#9A9CAE]">برند</span>
                            </div>
                            <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg>
                                <a href="#" class="hover:text-white transition-colors font-medium">ایجاد برند جدید</a>
                            </div>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                <svg class='size-4 fill-[#1B84FF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                </svg>
                                <a href="#" class="hover:text-white transition-colors font-medium">لیست برند</a>
                            </div>
                        </div>
                    </div>
                    <!-- =====  تنظیمات ===== -->
                    <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#1a1a20] shadow-sm hover:shadow-md transition-all mb-3'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-white text-base font-medium'>
                                <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#d97706">
                                    <path d="M499.1 6.3c-8.1-6-12.9-17.1-11.1-27.1L496 0c-44.3 0-80 35.7-80 80c0 14.3 3.8 27.7 10.4 39.3L352 193.4l-25.4-25.4c-12.5-12.5-32.8-12.5-45.3 0l-56.6 56.6c-12.5 12.5-12.5 32.8 0 45.3l22.6 22.6-56.6 56.6-22.6-22.6c-12.5-12.5-32.8-12.5-45.3 0L88.1 368c-12.5 12.5-12.5 32.8 0 45.3l13.7 13.7L64 464l48 48 36.9-36.9 13.7 13.7c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6 22.6 22.6c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6c12.5-12.5 12.5-32.8 0-45.3l-25.4-25.4L405.3 206c11.6 6.6 25 10.4 38.7 10.4c44.3 0 80-35.7 80-80c0-4.9-.4-9.7-1.2-14.4L505.7 15.4c1.5-7.8-1.8-15.9-6.6-19.1z"/>
                                </svg>
                                <span class="text-[#9A9CAE]">تنظیمات</span>
                            </div>
                            <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#1a1a20] shadow-sm hover:shadow-md transition-all'>
                                <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                                    <div class='flex items-center gap-2 text-white text-base font-medium'>
                                        <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#d97706">
                                            <path d="M499.1 6.3c-8.1-6-12.9-17.1-11.1-27.1L496 0c-44.3 0-80 35.7-80 80c0 14.3 3.8 27.7 10.4 39.3L352 193.4l-25.4-25.4c-12.5-12.5-32.8-12.5-45.3 0l-56.6 56.6c-12.5 12.5-12.5 32.8 0 45.3l22.6 22.6-56.6 56.6-22.6-22.6c-12.5-12.5-32.8-12.5-45.3 0L88.1 368c-12.5 12.5-12.5 32.8 0 45.3l13.7 13.7L64 464l48 48 36.9-36.9 13.7 13.7c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6 22.6 22.6c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6c12.5-12.5 12.5-32.8 0-45.3l-25.4-25.4L405.3 206c11.6 6.6 25 10.4 38.7 10.4c44.3 0 80-35.7 80-80c0-4.9-.4-9.7-1.2-14.4L505.7 15.4c1.5-7.8-1.8-15.9-6.6-19.1z"/>
                                        </svg>
                                        <span class="text-[#9A9CAE]">لوگو</span>
                                    </div>
                                    <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                                    </svg>
                                </div>
                                <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                                    <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                        <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                        </svg>
                                        <a href="#" class="hover:text-white transition-colors font-medium">تغییر لوگو</a>
                                    </div>
                                </div>
                            </div>
                            <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#1a1a20] shadow-sm hover:shadow-md transition-all'>
                                <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                                    <div class='flex items-center gap-2 text-white text-base font-medium'>
                                        <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#d97706">
                                            <path d="M499.1 6.3c-8.1-6-12.9-17.1-11.1-27.1L496 0c-44.3 0-80 35.7-80 80c0 14.3 3.8 27.7 10.4 39.3L352 193.4l-25.4-25.4c-12.5-12.5-32.8-12.5-45.3 0l-56.6 56.6c-12.5 12.5-12.5 32.8 0 45.3l22.6 22.6-56.6 56.6-22.6-22.6c-12.5-12.5-32.8-12.5-45.3 0L88.1 368c-12.5 12.5-12.5 32.8 0 45.3l13.7 13.7L64 464l48 48 36.9-36.9 13.7 13.7c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6 22.6 22.6c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6c12.5-12.5 12.5-32.8 0-45.3l-25.4-25.4L405.3 206c11.6 6.6 25 10.4 38.7 10.4c44.3 0 80-35.7 80-80c0-4.9-.4-9.7-1.2-14.4L505.7 15.4c1.5-7.8-1.8-15.9-6.6-19.1z"/>
                                        </svg>
                                        <span class="text-[#9A9CAE]">هیرو</span>
                                    </div>
                                    <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                                    </svg>
                                </div>
                                <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                                    <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                        <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                        </svg>
                                        <a href="#" class="hover:text-white transition-colors font-medium">ایجاد هیرو</a>
                                    </div>
                                    <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                        <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                        </svg>
                                        <a href="#" class="hover:text-white transition-colors font-medium"> لیست هیرو</a>
                                    </div>
                                </div>
                            </div>
                            <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#1a1a20] shadow-sm hover:shadow-md transition-all'>
                                <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                                    <div class='flex items-center gap-2 text-white text-base font-medium'>
                                        <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#d97706">
                                            <path d="M499.1 6.3c-8.1-6-12.9-17.1-11.1-27.1L496 0c-44.3 0-80 35.7-80 80c0 14.3 3.8 27.7 10.4 39.3L352 193.4l-25.4-25.4c-12.5-12.5-32.8-12.5-45.3 0l-56.6 56.6c-12.5 12.5-12.5 32.8 0 45.3l22.6 22.6-56.6 56.6-22.6-22.6c-12.5-12.5-32.8-12.5-45.3 0L88.1 368c-12.5 12.5-12.5 32.8 0 45.3l13.7 13.7L64 464l48 48 36.9-36.9 13.7 13.7c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6 22.6 22.6c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6c12.5-12.5 12.5-32.8 0-45.3l-25.4-25.4L405.3 206c11.6 6.6 25 10.4 38.7 10.4c44.3 0 80-35.7 80-80c0-4.9-.4-9.7-1.2-14.4L505.7 15.4c1.5-7.8-1.8-15.9-6.6-19.1z"/>
                                        </svg>
                                        <span class="text-[#9A9CAE]">اطلاعات پشتیبان</span>
                                    </div>
                                    <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                                    </svg>
                                </div>
                                <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                                    <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                        <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                        </svg>
                                        <a href="#" class="hover:text-white transition-colors font-medium">ایجاد اطلاعات</a>
                                    </div>
                                    <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                        <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                        </svg>
                                        <a href="#" class="hover:text-white transition-colors font-medium"> لیست اطلاعات</a>
                                    </div>
                                </div>
                            </div>
                            <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#1a1a20] shadow-sm hover:shadow-md transition-all'>
                                <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                                    <div class='flex items-center gap-2 text-white text-base font-medium'>
                                        <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#d97706">
                                            <path d="M499.1 6.3c-8.1-6-12.9-17.1-11.1-27.1L496 0c-44.3 0-80 35.7-80 80c0 14.3 3.8 27.7 10.4 39.3L352 193.4l-25.4-25.4c-12.5-12.5-32.8-12.5-45.3 0l-56.6 56.6c-12.5 12.5-12.5 32.8 0 45.3l22.6 22.6-56.6 56.6-22.6-22.6c-12.5-12.5-32.8-12.5-45.3 0L88.1 368c-12.5 12.5-12.5 32.8 0 45.3l13.7 13.7L64 464l48 48 36.9-36.9 13.7 13.7c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6 22.6 22.6c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6c12.5-12.5 12.5-32.8 0-45.3l-25.4-25.4L405.3 206c11.6 6.6 25 10.4 38.7 10.4c44.3 0 80-35.7 80-80c0-4.9-.4-9.7-1.2-14.4L505.7 15.4c1.5-7.8-1.8-15.9-6.6-19.1z"/>
                                        </svg>
                                        <span class="text-[#9A9CAE]"> تبلیغات </span>
                                    </div>
                                    <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                                    </svg>
                                </div>
                                <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                                    <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                        <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                        </svg>
                                        <a href="#" class="hover:text-white transition-colors font-medium">ثبت تبلیغ</a>
                                    </div>
                                </div>
                            </div>
                            <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#1a1a20] shadow-sm hover:shadow-md transition-all'>
                                <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                                    <div class='flex items-center gap-2 text-white text-base font-medium'>
                                        <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#d97706">
                                            <path d="M499.1 6.3c-8.1-6-12.9-17.1-11.1-27.1L496 0c-44.3 0-80 35.7-80 80c0 14.3 3.8 27.7 10.4 39.3L352 193.4l-25.4-25.4c-12.5-12.5-32.8-12.5-45.3 0l-56.6 56.6c-12.5 12.5-12.5 32.8 0 45.3l22.6 22.6-56.6 56.6-22.6-22.6c-12.5-12.5-32.8-12.5-45.3 0L88.1 368c-12.5 12.5-12.5 32.8 0 45.3l13.7 13.7L64 464l48 48 36.9-36.9 13.7 13.7c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6 22.6 22.6c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6c12.5-12.5 12.5-32.8 0-45.3l-25.4-25.4L405.3 206c11.6 6.6 25 10.4 38.7 10.4c44.3 0 80-35.7 80-80c0-4.9-.4-9.7-1.2-14.4L505.7 15.4c1.5-7.8-1.8-15.9-6.6-19.1z"/>
                                        </svg>
                                        <span class="text-[#9A9CAE]"> محصولات چند حالتی </span>
                                    </div>
                                    <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                                    </svg>
                                </div>
                                <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                                    <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                        <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                        </svg>
                                        <a href="#" class="hover:text-white transition-colors font-medium">ثبت محصولات</a>
                                    </div>
                                </div>
                            </div>
                            <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#1a1a20] shadow-sm hover:shadow-md transition-all'>
                                <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                                    <div class='flex items-center gap-2 text-white text-base font-medium'>
                                        <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#d97706">
                                            <path d="M499.1 6.3c-8.1-6-12.9-17.1-11.1-27.1L496 0c-44.3 0-80 35.7-80 80c0 14.3 3.8 27.7 10.4 39.3L352 193.4l-25.4-25.4c-12.5-12.5-32.8-12.5-45.3 0l-56.6 56.6c-12.5 12.5-12.5 32.8 0 45.3l22.6 22.6-56.6 56.6-22.6-22.6c-12.5-12.5-32.8-12.5-45.3 0L88.1 368c-12.5 12.5-12.5 32.8 0 45.3l13.7 13.7L64 464l48 48 36.9-36.9 13.7 13.7c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6 22.6 22.6c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6c12.5-12.5 12.5-32.8 0-45.3l-25.4-25.4L405.3 206c11.6 6.6 25 10.4 38.7 10.4c44.3 0 80-35.7 80-80c0-4.9-.4-9.7-1.2-14.4L505.7 15.4c1.5-7.8-1.8-15.9-6.6-19.1z"/>
                                        </svg>
                                        <span class="text-[#9A9CAE]"> نظرات دستی</span>
                                    </div>
                                    <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                                    </svg>
                                </div>
                                <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                                    <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                        <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                        </svg>
                                        <a href="#" class="hover:text-white transition-colors font-medium">ثبت نظر</a>
                                    </div>
                                    <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                        <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                        </svg>
                                        <a href="#" class="hover:text-white transition-colors font-medium">لیست نظر</a>
                                    </div>
                                </div>
                            </div>
                            <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#1a1a20] shadow-sm hover:shadow-md transition-all'>
                                <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                                    <div class='flex items-center gap-2 text-white text-base font-medium'>
                                        <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#d97706">
                                            <path d="M499.1 6.3c-8.1-6-12.9-17.1-11.1-27.1L496 0c-44.3 0-80 35.7-80 80c0 14.3 3.8 27.7 10.4 39.3L352 193.4l-25.4-25.4c-12.5-12.5-32.8-12.5-45.3 0l-56.6 56.6c-12.5 12.5-12.5 32.8 0 45.3l22.6 22.6-56.6 56.6-22.6-22.6c-12.5-12.5-32.8-12.5-45.3 0L88.1 368c-12.5 12.5-12.5 32.8 0 45.3l13.7 13.7L64 464l48 48 36.9-36.9 13.7 13.7c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6 22.6 22.6c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6c12.5-12.5 12.5-32.8 0-45.3l-25.4-25.4L405.3 206c11.6 6.6 25 10.4 38.7 10.4c44.3 0 80-35.7 80-80c0-4.9-.4-9.7-1.2-14.4L505.7 15.4c1.5-7.8-1.8-15.9-6.6-19.1z"/>
                                        </svg>
                                        <span class="text-[#9A9CAE]"> بنر </span>
                                    </div>
                                    <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                                    </svg>
                                </div>
                                <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                                    <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                        <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                        </svg>
                                        <a href="#" class="hover:text-white transition-colors font-medium">ثبت بنر</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- =====  کاربر ===== -->
                    <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#1a1a20] shadow-sm hover:shadow-md transition-all mb-3'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-white text-base font-medium'>
                                <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#059669">
                                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                                </svg>
                                <span class="text-[#9A9CAE]">کاربر</span>
                            </div>
                            <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg>
                                <a href="#" class="hover:text-white transition-colors font-medium">ایجاد کاربر جدید</a>
                            </div>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item'>
                                <svg class='size-4 fill-[#1B84FF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                </svg>
                                <a href="#" class="hover:text-white transition-colors font-medium">لیست کاربر</a>
                            </div>
                                <div class="w-full border-t border-[#DBDFE9] my-2"></div>
                                <span class='text-xs font-semibold text-[#1B84FF] text-start mt-1'>نقش</span>
                                <div class='w-12/12 justify-start text-white mr-3 flex p-2 text-base gap-2 sub-menu-item'>
                                    <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                    </svg>
                                    <a href="#" class="hover:text-white transition-colors font-medium">ایجاد نقش</a>
                                </div>
                                <div class='w-12/12 justify-start text-white mr-3 flex p-2 text-base gap-2 sub-menu-item'>
                                    <svg class='size-4 fill-[#1B84FF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                    </svg>
                                    <a href="#" class="hover:text-white transition-colors font-medium">لیست نقش ها</a>
                                </div>
                                <span class='text-xs font-semibold text-[#1B84FF] text-start mt-1'>دسترسی</span>
                                <div class='w-12/12 justify-start text-white mr-3 flex p-2 text-base gap-2 sub-menu-item'>
                                    <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                    </svg>
                                    <a href="#" class="hover:text-white transition-colors font-medium">ایجاد دسترسی</a>
                                </div>
                                <div class='w-12/12 justify-start text-white mr-3 flex p-2 text-base gap-2 sub-menu-item'>
                                    <svg class='size-4 fill-[#1B84FF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                    </svg>
                                    <a href="#" class="hover:text-white transition-colors font-medium">لیست دسترسی ها</a>
                                </div>
                        </div>
                    </div>

                <!-- ===== دکمه خروج ===== -->
                <div class="mt-6 pt-4 border-t border-[#DBDFE9]">
                    <a href="{{ route('user.logOut')}}" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-[#1a1a20] shadow-sm text-[#dc2626] hover:text-[#ff4444] transition-all">
                        <svg class='size-5 fill-[#dc2626]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/>
                        </svg>
                        <span class="font-medium">خروج از حساب</span>
                    </a>
                </div>
                
            </nav>
        </aside>

        <!-- ============================================================ -->
        <!-- =====  اصلی ===== -->
        <!-- ============================================================ -->

        <main class="main-content w-full lg:w-10/12 transition-all bg-[#FCFCFC]">

            <!-- ===== هدر ===== -->
            <header class="w-full bg-white shadow-lg sticky top-0 z-40 transition-all">
                <div class="flex items-center justify-between px-4 sm:px-6 lg:px-8 py-3 sm:py-4">
                    
                    <!-- دکمه منو موبایل -->
                    <button onclick="toggleSidebar()" class="mobile-menu-btn p-2.5 rounded-xl bg-white shadow-sm text-[#1a2a3a] hover:bg-[#1B84FF] hover:text-white hover:shadow-md transition-all lg:hidden">
                        <i class="fas fa-bars text-xl"></i>
                    </button>

                    <!-- جستجو -->
                    <div class="flex items-center gap-3 sm:gap-4 flex-1 max-w-xs sm:max-w-md mx-2 sm:mx-4">
                        <div class="relative flex-1 search-box">
                            <i class="fas fa-search absolute right-3 sm:right-4 top-1/2 -translate-y-1/2 text-[#9A9CAE] text-xs sm:text-sm"></i>
                            <input type="text" placeholder="جستجوی محصولات پزشکی..." class="w-full pr-9 sm:pr-11 pl-3 sm:pl-4 py-2 sm:py-2.5 rounded-xl text-[#1e293b] placeholder-[#9A9CAE] focus:outline-none text-xs sm:text-sm">
                        </div>

                    </div>

                    <!-- راست هدر -->
                    <div class="flex items-center gap-2 sm:gap-4">
                        <!-- اعلان -->
                        <button class="relative p-2 sm:p-2.5 rounded-xl bg-white shadow-sm text-[#9A9CAE] hover:bg-[#1B84FF] hover:text-white hover:shadow-md transition-all">
                            <i class="fas fa-bell text-sm sm:text-base"></i>
                            <span class="absolute -top-1 -left-1 w-3 h-3 bg-red-500 rounded-full badge-dot border-2 border-white"></span>
                        </button>
                        <!-- پروفایل -->
                        <div class="flex items-center gap-2 sm:gap-3 pr-2 sm:pr-4 border-r border-[#DBDFE9]">
                            <div class="text-left hidden sm:block">
                                <p class="text-xs sm:text-sm font-bold text-[#1e293b]"> {{Auth::user()->name}} </p>
                                <p class="text-[10px] sm:text-xs text-[#9A9CAE]"> {{Auth::user()->roles[0]->fa_title}} </p>
                            </div>
                            <a href="{{route('user.profile')}}" id="header_avatar" class="w-9 h-9 sm:w-11 sm:h-11 rounded-full avatar-gradient flex items-center justify-center text-white font-bold shadow-lg shadow-[#1B84FF]/25 cursor-pointer hover:scale-105 transition-all text-sm sm:text-base overflow-hidden p-1">
                                @if(Auth::user()->path!=null)
                                    <img class='rounded-full w-full h-full object-cover' src="{{asset('storage/user_medias/'.Auth::user()->path)}}" alt="">
                                @else
                                    {{Auth::user()->name[0]}}
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- ===== محتوای داشبورد ===== -->
            <div class="p-3 lg:p-8">
                @yield('content')
            </div>
            
            <!-- ===== فوتر ===== -->
            <div class="px-3 sm:px-5 lg:px-8 pb-4 sm:pb-6 mt-10">
                <div class="footer-divider"></div>
                <div class="text-center text-[10px] sm:text-xs text-[#9A9CAE] pt-4 sm:pt-6">
                    <p>© ۱۴۰۳ تمامی حقوق محفوظ است | وفادار - پنل مدیریت تجهیزات پزشکی</p>
                </div>
            </div>
            
        </main>
    </div>

    <!-- ============================================================ -->
    <!-- ===== Scripts ===== -->
    <!-- ============================================================ -->
    <script>
        // =====================================
        // 1. منو موبایل
        // =====================================
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            sidebar?.classList.toggle('open');
            overlay?.classList.toggle('active');
        }

        function closeSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            sidebar?.classList.remove('open');
            overlay?.classList.remove('active');
        }

        // =====================================
        // 2. اکتیو کردن منو
        // =====================================
        document.querySelectorAll('.sidebar-link').forEach(link => {
            link.addEventListener('click', function(e) {
                if (!this.getAttribute('href') || this.getAttribute('href') === '#') {
                    e.preventDefault();
                }
                document.querySelectorAll('.sidebar-link').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
                if (window.innerWidth < 1024) {
                    closeSidebar();
                }
            });
        });

        // =====================================
        // 3. ریسایز
        // =====================================
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                closeSidebar();
            }
        });

        let element = document.querySelectorAll('.element');
        element.forEach((el) => {
            el.children[0].addEventListener('click', () => {
                if (el.children[1].classList.contains('max-h-0')) {
                    el.children[1].classList.remove('max-h-0')
                    el.children[1].classList.add('max-h-[700px]')
                    el.children[0].children[1].classList.remove('rotate-0')
                    el.children[0].children[1].classList.add('rotate-180')
                } else {
                    el.children[1].classList.remove('max-h-[700px]')
                    el.children[1].classList.add('max-h-0')
                    el.children[0].children[1].classList.remove('rotate-180')
                    el.children[0].children[1].classList.add('rotate-0')
                }
            })
        })
    </script>
    
    @stack('scripts')

</body>
</html>