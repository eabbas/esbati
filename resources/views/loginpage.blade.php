<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود / ثبت نام - تجهیزات پزشکی</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <style>
        /* انیمیشن‌های سفارشی */
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(2deg); }
        }
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(56, 189, 248, 0.2); }
            50% { box-shadow: 0 0 50px rgba(56, 189, 248, 0.5); }
        }
        @keyframes slide-up {
            from { opacity: 0; transform: translateY(40px) scale(0.95); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
        @keyframes slide-down {
            from { opacity: 1; transform: translateY(0) scale(1); }
            to { opacity: 0; transform: translateY(40px) scale(0.95); }
        }
        @keyframes heartbeat {
            0%, 100% { transform: scale(1); }
            14% { transform: scale(1.12); }
            28% { transform: scale(1); }
            42% { transform: scale(1.12); }
            70% { transform: scale(1); }
        }
        @keyframes shimmer {
            0% { background-position: -200% center; }
            100% { background-position: 200% center; }
        }
        @keyframes rotate-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .animate-float { animation: float 4s ease-in-out infinite; }
        .animate-slide-up { animation: slide-up 0.5s cubic-bezier(0.34, 1.56, 0.64, 1) forwards; }
        .animate-slide-down { animation: slide-down 0.3s ease-in forwards; }
        .animate-heartbeat { animation: heartbeat 2s ease-in-out infinite; }
        .animate-shimmer { background: linear-gradient(90deg, transparent, rgba(255,255,255,0.05), transparent); background-size: 200% auto; animation: shimmer 3s linear infinite; }
        .animate-rotate-slow { animation: rotate-slow 20s linear infinite; }
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
        .delay-5 { animation-delay: 0.5s; }
        
        /* افکت شیشه‌ای (Glassmorphism) */
        .glass {
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .glass-light {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }
        
        /* اسکرول بار سفارشی */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: rgba(15, 23, 42, 0.8); }
        ::-webkit-scrollbar-thumb { background: #38bdf8; border-radius: 10px; }
        
        /* استایل ورودی‌ها */
        .input-medical {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(56, 189, 248, 0.1);
            color: #e2e8f0;
        }
        .input-medical:focus {
            border-color: #38bdf8;
            box-shadow: 0 0 30px rgba(56, 189, 248, 0.15), inset 0 0 30px rgba(56, 189, 248, 0.03);
            transform: scale(1.02);
            background: rgba(255, 255, 255, 0.08);
        }
        .input-medical::placeholder {
            color: rgba(255, 255, 255, 0.3);
            font-weight: 300;
        }
        .input-medical-error {
            border-color: #f87171 !important;
            box-shadow: 0 0 25px rgba(248, 113, 113, 0.2) !important;
        }
        
        /* دکمه پزشکی */
        .btn-medical {
            background: linear-gradient(135deg, #0ea5e9, #0284c7);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: none;
            position: relative;
            overflow: hidden;
        }
        .btn-medical::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%);
            transform: scale(0);
            transition: transform 0.6s ease;
        }
        .btn-medical:hover::after {
            transform: scale(1);
        }
        .btn-medical:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 15px 40px rgba(14, 165, 233, 0.35);
        }
        .btn-medical:active {
            transform: scale(0.95);
        }
        
        .btn-medical-success {
            background: linear-gradient(135deg, #22c55e, #16a34a);
        }
        .btn-medical-success:hover {
            box-shadow: 0 15px 40px rgba(34, 197, 94, 0.35);
        }
        
        /* کارت فرم */
        .form-card {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .form-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }
        
        /* دکمه تغییر حالت */
        .toggle-btn {
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        .toggle-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(56, 189, 248, 0.3);
            transform: scale(1.05);
            box-shadow: 0 0 30px rgba(56, 189, 248, 0.15);
        }
        .toggle-btn:active {
            transform: scale(0.95);
        }
        .toggle-btn .icon-container {
            transition: all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .toggle-btn.active .icon-container {
            transform: rotate(180deg);
        }
        
        /* دایره‌های نورانی پس‌زمینه */
        .bg-circle {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.15;
        }
        
        /* المان‌های پزشکی شناور */
        .medical-icon {
            opacity: 0.08;
            transition: all 0.5s ease;
        }
        .medical-icon:hover {
            opacity: 0.15;
            transform: scale(1.1);
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-900 via-blue-950 to-slate-900 flex items-center justify-center p-4 md:p-6 font-sans overflow-x-hidden">

    <!-- پس‌زمینه با المان‌های پزشکی -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden">
        <div class="bg-circle w-96 h-96 bg-blue-500 top-10 -left-20 animate-float"></div>
        <div class="bg-circle w-[500px] h-[500px] bg-cyan-500 bottom-10 -right-20 animate-float" style="animation-delay: 2s;"></div>
        <div class="bg-circle w-72 h-72 bg-emerald-500 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" style="animation-delay: 3s;"></div>
        
        <!-- آیکون‌های پزشکی شناور -->
        <svg class="absolute top-20 right-20 w-20 h-20 medical-icon animate-float" viewBox="0 0 24 24" fill="currentColor" style="color: #38bdf8;">
            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 11h-4v4h-4v-4H6v-4h4V6h4v4h4v4z"/>
        </svg>
        <svg class="absolute bottom-24 left-20 w-24 h-24 medical-icon animate-float" style="animation-delay: 2.5s; color: #22d3ee;" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm1-13h-2v6l5.25 3.15L17 12.23l-4-2.37V7z"/>
        </svg>
        <svg class="absolute top-1/3 left-1/4 w-16 h-16 medical-icon animate-float" style="animation-delay: 1.5s; color: #34d399;" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/>
        </svg>
        <svg class="absolute top-1/4 right-1/3 w-14 h-14 medical-icon animate-float" style="animation-delay: 3.5s; color: #f472b6;" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-2-4h4v-2h-4v2zm0-6h4v-2h-4v2zm-2 2h8v-2h-8v2z"/>
        </svg>
    </div>

    <!-- کانتینر اصلی -->
    <div class="relative w-full max-w-5xl mx-auto">

        <!-- دکمه تغییر حالت (لاگین / ساین آپ) -->
        <div class="flex justify-center mb-8">
            <div class="glass rounded-2xl p-1.5 flex items-center gap-1 shadow-2xl border border-white/5">
                <button id="toggleToLogin" class="toggle-btn active rounded-xl px-6 py-3 flex items-center gap-3 text-white font-medium text-sm transition-all duration-300" data-target="login">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                        <polyline points="10 17 15 12 10 7"/>
                        <line x1="15" y1="12" x2="3" y2="12"/>
                    </svg>
                    <span>ورود</span>
                </button>
                <button id="toggleToSignup" class="toggle-btn rounded-xl px-6 py-3 flex items-center gap-3 text-white/50 font-medium text-sm transition-all duration-300" data-target="signup">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="8.5" cy="7" r="4"/>
                        <line x1="20" y1="8" x2="20" y2="14"/>
                        <line x1="23" y1="11" x2="17" y2="11"/>
                    </svg>
                    <span>ثبت نام</span>
                </button>
            </div>
        </div>

        <!-- کانتینر فرم‌ها با قابلیت تغییر -->
        <div class="relative">
            
            <!-- ==================== فرم ورود ==================== -->
            <div id="loginForm" class="form-card glass rounded-3xl p-6 md:p-8 w-full max-w-md mx-auto animate-slide-up">
                <form action="{{route('user.login')}}" method="post" class="flex flex-col gap-5">
                    @csrf

                    <!-- هدر فرم -->
                    <div class="flex items-center gap-4 pb-4 border-b border-white/10">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500/20 to-cyan-500/20 flex items-center justify-center animate-heartbeat">
                            <svg class="w-8 h-8 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 12h-4l-3 9-4-18-3 9H2"/>
                            </svg>
                        </div>
                        <div class="text-right">
                            <h3 class="text-2xl font-bold text-white">ورود به حساب</h3>
                            <p class="text-sm text-blue-300/70">به سامانه تجهیزات پزشکی خوش آمدید</p>
                        </div>
                    </div>

                    <!-- فیلد شماره تلفن -->
                    <div class="relative group" id="tell_signin">
                        <div class="absolute right-3 top-1/2 -translate-y-1/2 text-blue-400/40 group-focus-within:text-blue-400 transition-colors duration-300">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                        </div>
                        <input type="tell" name="phoneNumber" placeholder="شماره تلفن" 
                            class="input-medical w-full rounded-2xl py-3.5 pr-12 pl-4 text-white placeholder:text-white/35 outline-none transition-all duration-300">
                    </div>

                    <!-- فیلد رمز عبور -->
                     <div class='w-full'>
                         <div class="relative group" id='pass_input'>
                             <div class="absolute right-3 top-1/2 -translate-y-1/2 text-blue-400/40 group-focus-within:text-blue-400 transition-colors duration-300">
                                 <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                     <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                     <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                 </svg>
                             </div>
                             <input type="password" name="password" placeholder="رمز عبور" 
                                 class="input-medical w-full rounded-2xl py-3.5 pr-12 pl-4 text-white placeholder:text-white/35 outline-none transition-all duration-300">
                         </div>
                     </div>

                    <div onclick="change_login_state(this,'code')" class='text-cyan-600 font-bold text-sm cursor-pointer' id='login_state' > ورود با رمز یکبار مصرف </div>
                    
                    <!-- دکمه ورود -->
                    <button type="submit" class="btn-medical w-full rounded-2xl py-4 text-white font-bold text-lg tracking-wide mt-2 flex items-center justify-center gap-3 group">
                        <span>ورود به حساب</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"/><path d="M12 5l7 7-7 7"/>
                        </svg>
                    </button>

                </form>
            </div>

            <!-- ==================== فرم ثبت نام ==================== -->
            <div id="signupForm" class="form-card glass rounded-3xl p-6 md:p-8 w-full max-w-md mx-auto hidden">
                <form action="{{route('user.store')}}" method="post" class="flex flex-col gap-4">
                    @csrf

                    <!-- هدر فرم -->
                    <div class="flex items-center gap-4 pb-4 border-b border-white/10">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-500/20 to-green-500/20 flex items-center justify-center animate-heartbeat">
                            <svg class="w-8 h-8 text-emerald-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                <circle cx="8.5" cy="7" r="4"/>
                                <line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/>
                            </svg>
                        </div>
                        <div class="text-right">
                            <h3 class="text-2xl font-bold text-white">ثبت نام جدید</h3>
                            <p class="text-sm text-emerald-300/70">ایجاد حساب کاربری پزشکی</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <!-- نام -->
                        <div class="relative group">
                            <div class="absolute right-3 top-1/2 -translate-y-1/2 text-emerald-400/40 group-focus-within:text-emerald-400 transition-colors duration-300">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                    <circle cx="12" cy="7" r="4"/>
                                </svg>
                            </div>
                            <input type="text" name="name" placeholder="نام" 
                                class="input-medical w-full rounded-2xl py-3 pr-12 pl-3 text-white placeholder:text-white/35 outline-none transition-all duration-300 text-sm">
                        </div>

                        <!-- نام خانوادگی -->
                        <div class="relative group">
                            <div class="absolute right-3 top-1/2 -translate-y-1/2 text-emerald-400/40 group-focus-within:text-emerald-400 transition-colors duration-300">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                    <path d="M12 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                                </svg>
                            </div>
                            <input type="text" name="family" placeholder="نام خانوادگی" 
                                class="input-medical w-full rounded-2xl py-3 pr-12 pl-3 text-white placeholder:text-white/35 outline-none transition-all duration-300 text-sm">
                        </div>
                    </div>

                    <!-- شماره تلفن -->
                    <div class="relative group" id='tell_signup'>
                        <div class="absolute right-3 top-1/2 -translate-y-1/2 text-emerald-400/40 group-focus-within:text-emerald-400 transition-colors duration-300">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                        </div>
                        <input type="tell" name="phoneNumber" placeholder="شماره تلفن" 
                            class="input-medical w-full rounded-2xl py-3.5 pr-12 pl-4 text-white placeholder:text-white/35 outline-none transition-all duration-300">
                    </div>

                    <!-- ایمیل -->
                    <!-- <div class="relative group">
                        <div class="absolute right-3 top-1/2 -translate-y-1/2 text-emerald-400/40 group-focus-within:text-emerald-400 transition-colors duration-300">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </div>
                        <input type="text" name="email" placeholder="ایمیل" 
                            class="input-medical w-full rounded-2xl py-3.5 pr-12 pl-4 text-white placeholder:text-white/35 outline-none transition-all duration-300">
                    </div> -->

                    <!-- رمز عبور -->
                    <div class="relative group">
                        <div class="absolute right-3 top-1/2 -translate-y-1/2 text-emerald-400/40 group-focus-within:text-emerald-400 transition-colors duration-300">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </div>
                        <input type="password" name="password" placeholder="رمز عبور (حداقل 9 کاراکتر)" 
                            class="input-medical w-full rounded-2xl py-3.5 pr-12 pl-4 text-white placeholder:text-white/35 outline-none transition-all duration-300">
                    </div>
                    <div class='w-full flex gap-2 justify-between'>
                        
                        <div class="relative group w-4/12 ">
                            <div onclick='sendCodeSignup("signup")' id="countDownSignup" class='btn-medical btn-medical-success cursor-pointer w-full flex bg-emerald-400/40 h-full rounded-2xl  text-white text-center items-center justify-center font-bold'>
                                 <span> دریافت کد  </span>
                            </div>
                        </div>
                        <!-- کد ورود -->
                        <div class="relative group w-8/12">
                            <div class="absolute right-3 top-1/2 -translate-y-1/2 text-emerald-400/40 group-focus-within:text-emerald-400 transition-colors duration-300">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                </svg>
                            </div>
                            <input type="number" name="code" oninput="limitDigits(this)" required placeholder="کد ورود " class="input-medical w-full rounded-2xl py-3.5 pr-12 pl-4 text-white placeholder:text-white/35 outline-none transition-all duration-300">
                        </div>

                    </div>

                    <!-- دکمه ثبت نام -->
                    <button type="submit" class="btn-medical btn-medical-success cursor-pointer w-full rounded-2xl py-4 text-white font-bold text-lg tracking-wide mt-1 flex items-center justify-center gap-3 group">
                        <span>ثبت نام</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"/><path d="M12 5l7 7-7 7"/>
                        </svg>
                    </button>

                    <!-- پیام تکمیلی -->
                    <div class="text-center mt-1">
                        <p class="text-xs text-white/20">با ثبت نام، شرایط و قوانین سامانه را می‌پذیرید</p>
                    </div>
                </form>
            </div>
        </div>


    </div>

    <!-- ==================== جاوااسکریپت ==================== -->
    <script>

        function limitDigits(input) {
            if (input.value.length > 4) {
                input.value = input.value.slice(0, 4);
            }
        }
        
        document.addEventListener('DOMContentLoaded', function() {

            // المان‌ها
            const loginForm = document.getElementById('loginForm');
            const signupForm = document.getElementById('signupForm');
            const toggleLogin = document.getElementById('toggleToLogin');
            const toggleSignup = document.getElementById('toggleToSignup');
            let currentMode = 'login'; // 'login' یا 'signup'
            function reset_time(){
                let stateSignup = document.getElementById('countDownSignup')
                let stateLogin = document.getElementById('countDownLogin')

                clearInterval()
            }
            // تابع تغییر حالت با انیمیشن
            function switchMode(mode) {
                if (mode === currentMode) return;
                // تشخیص فرم فعلی و فرم هدف
                const currentForm = mode === 'login' ? signupForm : loginForm;
                const targetForm = mode === 'login' ? loginForm : signupForm;

                // انیمیشن خروج فرم فعلی
                currentForm.classList.remove('animate-slide-up');
                currentForm.classList.add('animate-slide-down');

                // بعد از انیمیشن خروج، فرم را مخفی و فرم هدف را نمایش می‌دهیم
                setTimeout(() => {
                    currentForm.classList.add('hidden');
                    currentForm.classList.remove('animate-slide-down');
                    
                    targetForm.classList.remove('hidden');
                    targetForm.classList.remove('animate-slide-up');
                    // Force reflow برای اجرای مجدد انیمیشن
                    void targetForm.offsetWidth;
                    targetForm.classList.add('animate-slide-up');
                }, 300);

                // به‌روزرسانی دکمه‌های toggle
                if (mode === 'login') {
                    toggleLogin.classList.add('active');
                    toggleLogin.classList.remove('text-white/50');
                    toggleLogin.classList.add('text-white');
                    toggleSignup.classList.remove('active');
                    toggleSignup.classList.add('text-white/50');
                    toggleSignup.classList.remove('text-white');
                } else {
                    toggleSignup.classList.add('active');
                    toggleSignup.classList.remove('text-white/50');
                    toggleSignup.classList.add('text-white');
                    toggleLogin.classList.remove('active');
                    toggleLogin.classList.add('text-white/50');
                    toggleLogin.classList.remove('text-white');
                }

                currentMode = mode;
                reset_time()
            }

            // رویدادهای کلیک روی دکمه‌ها
            toggleLogin.addEventListener('click', function(e) {
                e.preventDefault();
                switchMode('login');
            });

            toggleSignup.addEventListener('click', function(e) {
                e.preventDefault();
                switchMode('signup');
            });

            // =============================================
            // اعتبارسنجی جذاب با افکت‌های بصری
            // =============================================
            const forms = document.querySelectorAll('form');
            
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    const inputs = this.querySelectorAll('input[type="text"], input[type="tell"], input[type="password"], input[type="number"]');
                    let isValid = true;
                    let firstError = null;

                    inputs.forEach(input => {
                        // حذف استایل خطای قبلی
                        input.classList.remove('input-medical-error');
                        
                        // بررسی خالی نبودن
                        if (input.value.trim() === '') {
                            input.classList.add('input-medical-error');
                            isValid = false;
                            if (!firstError) firstError = input;
                        }

                        // بررسی شماره تلفن (حداقل ۱۰ رقم)
                        if (input.type === 'tell' || input.name === 'phoneNumber') {
                            const phone = input.value.replace(/\D/g, '');
                            if (phone.length < 10 && phone.length > 0) {
                                input.classList.add('input-medical-error');
                                isValid = false;
                                if (!firstError) firstError = input;
                            }
                        }

                        // بررسی ایمیل
                        if (input.type === 'text' && input.name === 'email') {
                            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                            if (input.value.trim() !== '' && !emailPattern.test(input.value.trim())) {
                                input.classList.add('input-medical-error');
                                isValid = false;
                                if (!firstError) firstError = input;
                            }
                        }

                        // بررسی پسورد (حداقل ۴ رقم)
                        if (input.type === 'password' && input.name === 'password') {
                            if (input.value.length > 0 && input.value.length < 4) {
                                input.classList.add('input-medical-error');
                                isValid = false;
                                if (!firstError) firstError = input;
                            }
                        }
                    });

                    if (!isValid) {
                        e.preventDefault();
                        if (firstError) {
                            firstError.focus();
                            // نمایش پیام خطا با افکت
                            const errorMsg = document.createElement('div');
                            errorMsg.className = 'fixed top-6 left-1/2 -translate-x-1/2 glass rounded-2xl px-6 py-3 text-red-400 border border-red-500/30 text-sm font-medium z-50 animate-slide-up';
                            errorMsg.textContent = '⚠️ لطفاً تمام فیلدها را به درستی پر کنید.';
                            document.body.appendChild(errorMsg);
                            
                            setTimeout(() => {
                                errorMsg.classList.remove('animate-slide-up');
                                errorMsg.classList.add('animate-slide-down');
                                setTimeout(() => errorMsg.remove(), 300);
                            }, 3000);
                        }
                    }
                });
            });

            // =============================================
            // افکت‌های ورودی (پاک کردن خطا با تایپ)
            // =============================================
            document.querySelectorAll('input').forEach(input => {
                input.addEventListener('input', function() {
                    this.classList.remove('input-medical-error');
                });
                input.addEventListener('focus', function() {
                    this.classList.remove('input-medical-error');
                });
            });

            // =============================================
            // دکمه‌های toggle با افکت hover صدا (اختیاری)
            // =============================================
           
        });

        let phoneNumber_signup=document.getElementById('tell_signup');
        let phoneNumber_signin=document.getElementById('tell_signin');
        // let countDownLogin=document.getElementById('countDownLogin');
        let countDownSignup=document.getElementById('countDownSignup');
        let pass_input=document.getElementById('pass_input');
        let login_state=document.getElementById('login_state');
        let phoneNumber='';

        function change_login_state(el,string){
            if(string=='code'){
                el.previousElementSibling.classList.add('flex');
                el.previousElementSibling.classList.add('justify-between');
                el.previousElementSibling.classList.add('gap-2');
                el.previousElementSibling.innerHTML=
                `
                    <div class="relative group w-4/12 ">
                        <div onclick='sendCodeLogin("signin")' id="countDownLogin" class='btn-medical btn-medical-success cursor-pointer w-full flex bg-emerald-400/40 h-full rounded-2xl  text-white text-center items-center justify-center font-bold'>
                                <span> دریافت کد  </span>
                        </div>
                    </div>
                    <!-- کد ورود -->
                    <div class="relative group w-8/12">
                        <div class="absolute right-3 top-1/2 -translate-y-1/2 text-emerald-400/40 group-focus-within:text-emerald-400 transition-colors duration-300">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </div>
                        <input type="number" name="code" oninput="limitDigits(this)" required placeholder="کد ورود " class="input-medical w-full rounded-2xl py-3.5 pr-12 pl-4 text-white placeholder:text-white/35 outline-none transition-all duration-300">
                    </div>
                `
                el.innerHTML='ورورد با رمز عبور'
                el.setAttribute('onclick',"change_login_state(this,'password')")

            }else{
                el.previousElementSibling.classList.remove('flex');
                el.previousElementSibling.classList.remove('justify-between');
                el.previousElementSibling.classList.remove('gap-2');
                el.previousElementSibling.innerHTML=
                `
                    <div class="relative group" id='pass_input'>
                        <div class="absolute right-3 top-1/2 -translate-y-1/2 text-blue-400/40 group-focus-within:text-blue-400 transition-colors duration-300">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </div>
                        <input type="password" name="password" placeholder="رمز عبور" 
                            class="input-medical w-full rounded-2xl py-3.5 pr-12 pl-4 text-white placeholder:text-white/35 outline-none transition-all duration-300">
                    </div>
                `
                el.innerHTML='ورورد با رمز یکبار مصرف '
                el.setAttribute('onclick',"change_login_state(this,'code')")

            }
        }
        

        function sendCodeSignup(state){
            phoneNumber = phoneNumber_signup.children[1].value
            if(phoneNumber!=""){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url:"{{route('user.send_code_signup')}}",
                    type:"post",
                    dataType:"json",
                    data:{
                        'phoneNumber':phoneNumber,
                        'state':state,

                    },
                    success:function(data){
                        if(data){
                            alert('کد ارسال شد🥼');
                            counterSignupButton(phoneNumber);
                        }else{
                            alert('این شماره قبلا ثبت نام شده است')
                        }
                    },
                    error:function(){
                        alert('کد ارسال نشد بعدا امتحان کنید');
                    }
                })
            }else{
                phoneNumber_signup.classList.add('border-3')
                phoneNumber_signup.classList.add('border-red-600')
                phoneNumber_signup.classList.add('rounded-2xl')
                alert('شماره تلفن خود را وارد کنید');
            }
        }


        function sendCodeLogin(state){
            let countDownLogin=document.getElementById('countDownLogin');
            phoneNumber = phoneNumber_signin.children[1].value
            console.log(phoneNumber)
            if(phoneNumber!=""){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url:"{{route('user.send_code_login')}}",
                    type:"post",
                    dataType:"json",
                    data:{
                        'phoneNumber':phoneNumber,
                        'state':state,

                    },
                    success:function(data){

                        if(data){
                            alert('کد ارسال شد');
                            counterLoginButton(phoneNumber);
                        }else{
                            alert("شما از قبل ثبت نام نکرده اید");
                        }
                    },
                    error:function(){
                        alert("'کد ارسال نشد بعدا امتحان کنید'");
                    }
                })
            }else{

                phoneNumber_signin.classList.add('border-3')
                phoneNumber_signin.classList.add('border-red-600')
                phoneNumber_signin.classList.add('rounded-2xl')
                alert('شماره تلفن خود را وارد کنید');

            }
        }

        function counterSignupButton(phoneNumber) {
            countDownSignup.classList.add('cursor-no-drop')
            countDownSignup.classList.remove('cursor-pointer')
            countDownSignup.classList.remove('hover:bg-[#d52b4a]')
            countDownSignup.classList.add('hover:bg-[#d52b4a]/50')
            countDownSignup.classList.remove('bg-[#eb3254]')
            countDownSignup.classList.add('bg-[#eb3254]/50')
            countDownSignup.setAttribute('disabled', true)
            countDownSignup.removeAttribute('onclick')
            countDownSignup.setAttribute('dir', 'ltr')
            let count = 120
            let result = setInterval(() => {
                let minute = Math.floor(count / 60)
                let seconds = count % 60
                count -= 1
                if (count < 0) {

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        }
                    })
                    $.ajax({
                        url: "{{ route('user.removeActivationCode') }}",
                        type: "POST",
                        dataType: "json",
                        data: {
                            'phoneNumber': phoneNumber
                        },
                        success: function(data) {
                            console.log(data)
                            countDownSignup.classList.remove('cursor-no-drop')
                            countDownSignup.classList.add('bg-[#eb3254]')
                            countDownSignup.classList.remove('bg-[#eb3254]/50')
                            countDownSignup.classList.add('cursor-pointer')
                            countDownSignup.classList.add('hover:bg-[#d52b4a]')
                            countDownSignup.classList.remove('hover:bg-[#d52b4a]/50')
                            countDownSignup.removeAttribute('disabled')
                            countDownSignup.setAttribute('onclick','sendCodeSignup("signup")')
                            countDownSignup.removeAttribute('dir')
                            countDownSignup.innerText = "ارسال مجدد"
                        },
                        error: function() {
                            showMessage('open')
                            element.innerHTML = `
                                <span>❌</span>
                                <span class="text-shadw-lg">خطا در دریافت اطلاعات!</span>
                            `
                            message.children[0].appendChild(element)
                            setTimeout(() => {
                                showMessage('close')
                            }, 2500)
                        }
                    })
                    clearInterval(result)
                }
                countDownSignup.innerText = minute.toString().padStart(2, "0") + " : " + seconds.toString().padStart(2,
                    "0");
            }, 1000)
        }
        function counterLoginButton(phoneNumber) {
            countDownLogin.classList.add('cursor-no-drop')
            countDownLogin.classList.remove('cursor-pointer')
            countDownLogin.classList.remove('hover:bg-[#d52b4a]')
            countDownLogin.classList.add('hover:bg-[#d52b4a]/50')
            countDownLogin.classList.remove('bg-[#eb3254]')
            countDownLogin.classList.add('bg-[#eb3254]/50')
            countDownLogin.setAttribute('disabled', true)
            countDownLogin.removeAttribute('onclick')
            countDownLogin.setAttribute('dir', 'ltr')
            let count = 120
            let result = setInterval(() => {
                let minute = Math.floor(count / 60)
                let seconds = count % 60
                count -= 1
                if (count < 0) {

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        }
                    })
                    $.ajax({
                        url: "{{ route('user.removeActivationCode') }}",
                        type: "POST",
                        dataType: "json",
                        data: {
                            'phoneNumber': phoneNumber
                        },
                        success: function(data) {
                            console.log(data)
                            countDownLogin.classList.remove('cursor-no-drop')
                            countDownLogin.classList.add('bg-[#eb3254]')
                            countDownLogin.classList.remove('bg-[#eb3254]/50')
                            countDownLogin.classList.add('cursor-pointer')
                            countDownLogin.classList.add('hover:bg-[#d52b4a]')
                            countDownLogin.classList.remove('hover:bg-[#d52b4a]/50')
                            countDownLogin.removeAttribute('disabled')
                            countDownLogin.setAttribute('onclick','sendCodeLogin("login")')
                            countDownLogin.removeAttribute('dir')
                            countDownLogin.innerText = "ارسال مجدد"
                        },
                        error: function() {
                            showMessage('open')
                            element.innerHTML = `
                                <span>❌</span>
                                <span class="text-shadw-lg">خطا در دریافت اطلاعات!</span>
                            `
                            message.children[0].appendChild(element)
                            setTimeout(() => {
                                showMessage('close')
                            }, 2500)
                        }
                    })
                    clearInterval(result)
                }
                countDownLogin.innerText = minute.toString().padStart(2, "0") + " : " + seconds.toString().padStart(2,
                    "0");
            }, 1000)
        }


        function addlocalProducts(){
            let jsonProArray = JSON.parse(localStorage.getItem('products'));

            console.log(jsonProArray);

            let productsString = JSON.stringify(jsonProArray);

            let inputlogin = document.createElement('input');
            let inputsignup = document.createElement('input');
            inputlogin.setAttribute('name', 'products[]');
            inputlogin.setAttribute('type', 'hidden');
            inputlogin.setAttribute('value', productsString); 
            inputsignup.setAttribute('name', 'products');
            inputsignup.setAttribute('type', 'hidden');
            inputsignup.setAttribute('value', productsString); 

            signupForm.children[0].appendChild(inputsignup); 

            loginForm.children[0].appendChild(inputlogin); 
        }
        addlocalProducts();
    </script>

</body>
</html>