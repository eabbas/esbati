@extends('client.product.headerProduct')
@section('content')
    <style>
        html {
            scroll-behavior: smooth;
        }

        @media (max-width: 1100px) {
            .main_image {
                height: 80%;
            }
        }

        @media (max-width: 1200px) {
            .btn {
                width: 100%;
                height: 100%;
            }
        }

        .shadows {
            box-shadow: 0px 0px 10px 3px var(--primary_color)
        }

        .pro_shadow:hover {
            box-shadow: 1px 1px 10px 1px rgb(92, 87, 87, 88)
        }

        /* .social-icons{display:flex;justify-content:center;align-items:center;gap:10px;margin-top:15px;border:1px solid #c7c7c7;width:fit-content;margin:10px auto;border-radius:2px;padding:10px;} */
        .social-icons a {
            margin: 0;
            padding: 0;
            display: flex;
        }

        .social-icons a.end_s {
            border-left: 0;
            padding-left: 0;
        }

        .social-icons img {
            transition: transform 0.3s;
        }

        .social-icons img:hover {
            transform: scale(1.2);
        }

        .shdow_color_product {
            box-shadow: 0px 0px 7px 0.1px rgb(102, 102, 102, 10);
        }

        /* /////////// */
        :root {

            --background: #FFFFFF;
            --title: #1d1c1c;
            --discription: #727272;
            --secondary-text: #A6A6A6;
            --metod-text: #c5c3c3;
            --primary_color: #05df72;
            --buttom: #03a297;
            --border: #ebe6e7;
            --product: #ebf8f7;
            --greey_section: #023350;
            --shorp_cart: #03a297;
            --star: #f0b100;
            --bg-input: #CCCCCC33;




        }

        .cart_shadow {
            box-shadow: 0px 0px 26px 6px #efefef;
        }


        .transition_fast {
            transition: all 0.2s ease;
        }

        .transition_normal {
            transition: all 0.3s ease;
        }

        .transition_slow {
            transition: all 0.5s ease;
        }
    </style>

    <!--  -->
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
    <?php
        $summary = $product->description;
        $count = 0;
    ?>

    <main id='main' class='w-full mb-10'>

        <div class='w-full py-10 bg-(--background)'>
            <div class='lg:flex hidden w-11/12 mx-auto gap-3 justify-between '>

                <div class='w-4/12 bg-(--background) rounded-xl p-1 py-5 flex flex-col gap-2 border border-(--border) cart_shadow'>
                    <div id="main_image_div" class=' flex w-full min-h-10/12 max-h-10/12 bg-white rounded-xl items-center justify-center p-4 overflow-hidden'>
                        <img class='gallery_product_primary size-60 object-cover object-center' src="{{asset('storage/product_medias/'.$product->is_main)}}" alt="">
                    </div>
                    <div class='gallery_images w-full h-2/12 flex gap-2 items-center'>

                        <div class=' p-1 rounded-full bg-[#11416f] flex items-center justify-center '><svg class='size-3 fill-(--primary_color)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- -->
                                <path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                            </svg></div>
                        <div id="image_bar" class='w-10/12 bg-white rounded-xl flex overflow-x-auto gap-2 p-2' style="scrollbar-width:none;">
                            <img class='gallery_product_item size-13 rounded-lg border border-(--border) object-cover' src="{{asset('storage/product_medias/'.$product->is_main)}}" alt="">
                            @foreach($product->gallery as $gallery)
                                <img class='gallery_product_item size-13 rounded-lg border border-(--border) object-cover' src="{{asset('storage/product_medias/'.$gallery)}}" alt="">
                            @endforeach

                        </div>
                        <div class=' p-1 rounded-full bg-[#11416f] flex items-center justify-center '><svg class='size-3 fill-(--primary_color)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- -->
                                <path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z" />
                            </svg></div>

                    </div>
                </div>

                <div class='w-7/12 bg-white rounded-xl p-3 flex flex-col border border-(--border) cart_shadow'>

                    <div class='w-full border-b-2 border-(--border) flex flex-col gap-3'>
                        <div class='w-full p-2 flex text-start items-center'>
                            <span class='truncate text-(--title) font-bold ...'> {{$product->title}} </span>
                        </div>
                        <div class='w-full p-2 flex justify-between items-center'>
                            <div class='flex gap-1'>
                                <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                            </div>
                            <div class='flex gap-2 '>
                                <span class='text-sm text-(--secondary-text)'>شناسه محصول:</span>
                                <span class='text-sm text-(--secondary-text)'> 1234567890-1-1-1-3 </span>
                            </div>
                        </div>
                    </div>

                    <div class='w-full border-b-2 border-(--border) flex flex-col gap-2 p-2'>
                        <span class='text-(--primary_color) '>مشخصات مخصول</span>
                        <div class='w-full flex flex-wrap gap-2'>
                            <div class='p-2 rounded-xl bg-(--product) text-sm text-(--title)'>سرعت حرکت آزاد (RPM): 1500-3000 RPM</div>
                            <div class='p-2 rounded-xl bg-(--product) text-sm text-(--title)'> کاربری: نیمه صنعتی </div>
                            <div class='p-2 rounded-xl bg-(--product) text-sm text-(--title)'> کاربری: نیمه صنعتی </div>
                        </div>
                    </div>

                    <div class='w-full flex flex-col gap-3 p-2'>
                        <span class='text-(--primary_color)'> توضیح کوتاه محصول: </span>
                        <div class='text-(--secondary-text)'>
                            <span>
                                {{$summary}}<span class='flex text-(--primary_color) text-xs text-center items-center'> بیشتر <svg class='fill-(--primary_color) size-3' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- -->
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                                    </svg></span>
                            </span>
                        </div>
                    </div>

                </div>

                <div class='w-3/12 bg-white rounded-xl p-2 border border-(--border) cart_shadow flex flex-col justify-between'>

                    <div class='flex text-center justify-center border-b-2 border-(--border) p-2 gap-1 text-sm items-center'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <g clip-path="url(#clip0_66_4863)">
                                <path d="M11 16.5C11 15.9477 11.4477 15.5 12 15.5C12.5523 15.5 13.0001 15.9477 13.0001 16.5C13.0001 17.0523 12.5524 17.5 12.0001 17.5C11.4478 17.5 11 17.0523 11 16.5Z" fill="var(--primary_color)"></path>
                                <path d="M11.25 7L11.25 13C11.25 13.4142 11.5858 13.75 12 13.75C12.4142 13.75 12.75 13.4142 12.75 13L12.75 7C12.75 6.58579 12.4142 6.25 12 6.25C11.5858 6.25 11.25 6.58579 11.25 7Z" fill="var(--primary_color)"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.25 12C0.25 5.51065 5.51065 0.25 12 0.25C18.4893 0.25 23.75 5.51065 23.75 12C23.75 18.4893 18.4893 23.75 12 23.75C5.51065 23.75 0.25 18.4893 0.25 12ZM12 1.75C6.33908 1.75 1.75 6.33908 1.75 12C1.75 17.6609 6.33908 22.25 12 22.25C17.6609 22.25 22.25 17.6609 22.25 12C22.25 6.33908 17.6609 1.75 12 1.75Z" fill="var(--primary_color)"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_66_4863">
                                    <rect width="24" height="24" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="text-(--title)">شرایط مرجوعی</span>
                    </div>
                    <div class='flex flex-col gap-3 border-b-2 border-(--border) p-2 '>
                        <div class='flex gap-1 text-xs items-center'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M1 8.6C1 6.63982 1 5.65972 1.38148 4.91103C1.71703 4.25247 2.25247 3.71703 2.91103 3.38148C3.65972 3 4.63982 3 6.6 3H16.4C18.3602 3 19.3403 3 20.089 3.38148C20.7475 3.71703 21.283 4.25247 21.6185 4.91103C22 5.65972 22 6.63982 22 8.6V12.852C21.2357 12.5132 20.3898 12.325 19.5 12.325C16.0896 12.325 13.325 15.0896 13.325 18.5C13.325 18.6683 13.3317 18.8351 13.3449 19H6.6C4.63982 19 3.65972 19 2.91103 18.6185C2.25247 18.283 1.71703 17.7475 1.38148 17.089C1 16.3403 1 15.3602 1 13.4V8.6ZM11.5 14C13.1569 14 14.5 12.6569 14.5 11C14.5 9.34315 13.1569 8 11.5 8C9.84315 8 8.5 9.34315 8.5 11C8.5 12.6569 9.84315 14 11.5 14Z" fill="#43454D"></path>
                                <path d="M23.5 18C23.5 18.2761 23.2761 18.5 23 18.5H17.2071L19.3536 20.6464C19.5488 20.8417 19.5488 21.1583 19.3536 21.3536C19.1583 21.5488 18.8417 21.5488 18.6464 21.3536L15.6464 18.3536C15.5527 18.2598 15.5 18.1326 15.5 18C15.5 17.8674 15.5527 17.7402 15.6464 17.6464L18.6464 14.6464C18.8417 14.4512 19.1583 14.4512 19.3536 14.6464C19.5488 14.8417 19.5488 15.1583 19.3536 15.3536L17.2071 17.5L23 17.5C23.2761 17.5 23.5 17.7239 23.5 18Z" fill="#43454D"></path>
                                <path d="M6.57756 2.5C5.61658 2.5 4.86446 2.5 4.26049 2.54935C3.64594 2.59956 3.14062 2.70334 2.68404 2.93597C1.93139 3.31947 1.31947 3.93139 0.935975 4.68404C0.703335 5.14062 0.599556 5.64594 0.549345 6.26049C0.499996 6.8645 0.499998 7.61642 0.5 8.57748L0.5 13.4225C0.499998 14.3835 0.499996 15.1355 0.549347 15.7395C0.599558 16.3541 0.703337 16.8594 0.935974 17.316C1.31947 18.0686 1.93139 18.6805 2.68404 19.064C3.14062 19.2967 3.64594 19.4004 4.26049 19.4507C4.86451 19.5 5.61646 19.5 6.57754 19.5H13.4056C13.3526 19.1745 13.325 18.8405 13.325 18.5L6.6 18.5C5.61166 18.5 4.90047 18.4996 4.34192 18.454C3.78921 18.4088 3.43014 18.3219 3.13803 18.173C2.57354 17.8854 2.1146 17.4265 1.82698 16.862C1.67814 16.5699 1.59118 16.2108 1.54602 15.6581C1.50039 15.0995 1.5 14.3883 1.5 13.4L1.5 8.6C1.5 7.61166 1.50039 6.90047 1.54602 6.34192C1.59118 5.78921 1.67814 5.43014 1.82698 5.13803C2.1146 4.57354 2.57354 4.1146 3.13803 3.82698C3.43014 3.67814 3.78921 3.59118 4.34192 3.54603C4.90047 3.50039 5.61166 3.5 6.6 3.5L16.4 3.5C17.3883 3.5 18.0995 3.50039 18.6581 3.54603C19.2108 3.59118 19.5699 3.67814 19.862 3.82698C20.4265 4.1146 20.8854 4.57354 21.173 5.13803C21.3219 5.43014 21.4088 5.78921 21.454 6.34192C21.4996 6.90047 21.5 7.61166 21.5 8.6V12.6561C21.8484 12.7753 22.1828 12.9248 22.5 13.1014V8.57765C22.5 7.61651 22.5 6.86453 22.4507 6.26049C22.4004 5.64594 22.2967 5.14062 22.064 4.68404C21.6805 3.93139 21.0686 3.31947 20.316 2.93597C19.8594 2.70334 19.3541 2.59956 18.7395 2.54935C18.1355 2.5 17.3836 2.5 16.4225 2.5L6.57756 2.5Z" fill="#43454D"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5092 14.5L11.5046 14.5L11.5 14.5C9.567 14.5 8 12.933 8 11C8 9.067 9.567 7.5 11.5 7.5C13.433 7.5 15 9.067 15 11C15 12.8463 13.4504 14.5 11.5092 14.5ZM9 11C9 9.61929 10.1193 8.5 11.5 8.5C12.8807 8.5 14 9.61929 14 11C14 12.3142 12.8781 13.5 11.5092 13.5L11.5046 13.5L11.5 13.5C10.1193 13.5 9 12.3807 9 11Z" fill="#43454D"></path>
                                <path d="M5 10.25C4.58579 10.25 4.25 10.5858 4.25 11C4.25 11.4142 4.58579 11.75 5 11.75C5.41422 11.75 5.7501 11.4142 5.7501 11C5.7501 10.5858 5.41422 10.25 5 10.25Z" fill="#43454D"></path>
                            </svg>
                            <span class='truncate w-48 text-(--title) ...'> ۷ روز ضمانت بازگشت بی قید و شرط </span>
                        </div>
                        <div class='flex gap-1 text-xs items-center'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M10.768 17.6771C11.5274 18.1076 12.4728 18.1076 13.2322 17.6772L15.4582 21.5327C15.6151 21.8044 15.6935 21.9402 15.7902 21.9787C15.8745 22.0122 15.9693 22.0058 16.0483 21.9614C16.1391 21.9103 16.1987 21.7653 16.3179 21.4752L17.1221 19.5185C17.1738 19.3926 17.1997 19.3296 17.2434 19.2866C17.2819 19.2487 17.3299 19.2218 17.3824 19.2089C17.4419 19.1943 17.5091 19.2053 17.6435 19.2273L19.7739 19.5755C20.0932 19.6277 20.2529 19.6538 20.3448 19.6018C20.4247 19.5566 20.4795 19.4773 20.4936 19.3865C20.5097 19.2822 20.4288 19.142 20.267 18.8618L18.0861 15.0845C18.351 14.6004 18.4593 14.0207 18.341 13.4157L18.3004 13.208C18.2233 12.8134 18.3899 12.411 18.7235 12.1865L18.8991 12.0683C20.3673 11.0803 20.3673 8.91971 18.8991 7.93165L18.7235 7.81351C18.3899 7.58903 18.2233 7.18661 18.3004 6.79202L18.341 6.58433C18.6805 4.84748 17.1528 3.31972 15.4159 3.65925L15.2082 3.69985C14.8136 3.77699 14.4112 3.6103 14.1867 3.27674L14.0686 3.10117C13.0805 1.63294 10.92 1.63294 9.9319 3.10117L9.81375 3.27674C9.58928 3.6103 9.18686 3.77699 8.79226 3.69985L8.58458 3.65925C6.84772 3.31972 5.31996 4.84747 5.6595 6.58433L5.7001 6.79202C5.77723 7.18661 5.61055 7.58903 5.27698 7.81351L5.10142 7.93165C3.63319 8.91971 3.63319 11.0803 5.10142 12.0683L5.27698 12.1865C5.61055 12.411 5.77723 12.8134 5.7001 13.208L5.6595 13.4157C5.54124 14.0206 5.64949 14.6001 5.9142 15.0843L3.73347 18.8613C3.57167 19.1416 3.49077 19.2817 3.5069 19.386C3.52093 19.4768 3.57573 19.5561 3.65565 19.6013C3.74756 19.6533 3.90724 19.6272 4.2266 19.575L6.35699 19.2268C6.4914 19.2048 6.55861 19.1938 6.6181 19.2085C6.67058 19.2213 6.71861 19.2482 6.7571 19.2861C6.80074 19.3291 6.82662 19.3921 6.87839 19.518L7.68257 21.4747C7.80179 21.7648 7.8614 21.9098 7.95219 21.9609C8.03118 22.0054 8.12602 22.0117 8.21022 21.9782C8.307 21.9397 8.38541 21.8039 8.54223 21.5323L10.768 17.6771ZM15.5002 10C15.5002 11.933 13.9332 13.5 12.0002 13.5C10.0672 13.5 8.50024 11.933 8.50024 10C8.50024 8.067 10.0672 6.5 12.0002 6.5C13.9332 6.5 15.5002 8.067 15.5002 10Z" fill="#43454D"></path>
                                <path d="M20.7063 18.611L18.6422 15.038C18.8673 14.5 18.9524 13.909 18.8373 13.319L18.7963 13.111C18.7572 12.913 18.8403 12.713 19.0074 12.601L19.1835 12.483C20.0119 11.926 20.5062 10.998 20.5062 10C20.5062 9.002 20.0119 8.074 19.1835 7.516L19.0084 7.398C18.8413 7.285 18.7582 7.085 18.7973 6.887L18.8383 6.679C19.0294 5.7 18.7222 4.694 18.0168 3.989C17.3104 3.283 16.3029 2.976 15.3253 3.168L15.1172 3.209C14.9211 3.248 14.719 3.165 14.6069 2.998L14.4878 2.822C13.9305 1.994 13.002 1.5 12.0035 1.5C11.0049 1.5 10.0764 1.994 9.51906 2.822L9.40099 2.998C9.28893 3.165 9.08982 3.248 8.8897 3.209L8.68159 3.168C7.70504 2.977 6.69647 3.284 5.99008 3.989C5.28368 4.695 4.97651 5.7 5.16861 6.679L5.20964 6.887C5.24866 7.085 5.16561 7.285 4.99852 7.397L4.82242 7.516C3.99395 8.073 3.49968 9.001 3.49968 9.999C3.49968 10.997 3.99395 11.925 4.82242 12.482L4.99752 12.6C5.16461 12.713 5.24766 12.913 5.20864 13.111L5.16761 13.319C5.05255 13.909 5.1376 14.5 5.36272 15.038L3.29956 18.61C3.09245 18.968 2.96738 19.184 3.0104 19.46C3.04742 19.704 3.1915 19.914 3.40763 20.037C3.65376 20.176 3.8989 20.135 4.30513 20.069L6.42132 19.723L7.21977 21.664C7.37185 22.036 7.4649 22.26 7.70704 22.396C7.82911 22.464 7.96318 22.499 8.09926 22.499C8.19932 22.499 8.29937 22.48 8.39342 22.442C8.65357 22.339 8.77464 22.129 8.97575 21.781L10.9869 18.299C11.3101 18.416 11.6473 18.498 12.0015 18.498C12.3557 18.498 12.6928 18.416 13.016 18.299L15.0282 21.781C15.2283 22.129 15.3493 22.339 15.6105 22.443C15.7055 22.481 15.8056 22.5 15.9046 22.5C16.0397 22.5 16.1748 22.465 16.2959 22.397C16.539 22.261 16.6301 22.037 16.7841 21.664L17.5826 19.723L19.6988 20.069C20.104 20.135 20.3511 20.175 20.5973 20.037C20.8124 19.915 20.9575 19.705 20.9935 19.463C21.0365 19.184 20.9115 18.968 20.7053 18.612L20.7063 18.611ZM8.12928 21.246L7.33983 19.327C7.2748 19.169 7.22377 19.044 7.1077 18.929C7.00465 18.827 6.87557 18.755 6.73649 18.722C6.57641 18.682 6.44533 18.704 6.27524 18.732L4.18506 19.073L5.96906 15.984C5.97607 15.991 5.98107 16.001 5.98807 16.008C6.69347 16.714 7.70204 17.022 8.67959 16.829L8.8877 16.788C9.08782 16.749 9.28593 16.832 9.39799 16.999L9.51606 17.175C9.68215 17.421 9.88826 17.627 10.1114 17.81L8.12728 21.244L8.12928 21.246ZM12.0015 17.499C11.3271 17.499 10.7237 17.178 10.3475 16.619L10.2285 16.443C9.9463 16.024 9.47803 15.78 8.98576 15.78C8.8897 15.78 8.79265 15.789 8.69559 15.808L8.48748 15.849C7.82511 15.978 7.17174 15.779 6.69447 15.302C6.2172 14.825 6.01809 14.172 6.14716 13.51L6.18819 13.303C6.30425 12.71 6.05511 12.108 5.55283 11.77L5.37773 11.652C4.81742 11.276 4.49724 10.673 4.49724 9.999C4.49724 9.325 4.81842 8.722 5.37773 8.345L5.55383 8.226C6.05511 7.889 6.30425 7.287 6.18819 6.694L6.14716 6.486C6.01809 5.824 6.2172 5.171 6.69447 4.694C7.17174 4.217 7.82511 4.016 8.48748 4.147L8.69459 4.188C9.29293 4.305 9.89027 4.055 10.2285 3.553L10.3465 3.377C10.7227 2.818 11.3261 2.497 12.0005 2.497C12.6748 2.497 13.2782 2.818 13.6554 3.377L13.7734 3.553C14.1096 4.054 14.71 4.303 15.3063 4.188L15.5144 4.147C16.1758 4.016 16.8302 4.217 17.3074 4.694C17.7847 5.171 17.9838 5.824 17.8547 6.486L17.8137 6.693C17.6977 7.286 17.9468 7.888 18.4491 8.226L18.6242 8.344C19.1845 8.721 19.5047 9.324 19.5047 9.998C19.5047 10.672 19.1835 11.275 18.6242 11.651L18.4481 11.77C17.9468 12.107 17.6977 12.709 17.8137 13.302L17.8547 13.51C17.9838 14.172 17.7847 14.825 17.3074 15.302C16.8302 15.779 16.1758 15.978 15.5144 15.849L15.3073 15.808C14.71 15.69 14.1116 15.941 13.7734 16.443L13.6554 16.618C13.2782 17.178 12.6758 17.498 12.0005 17.498L12.0015 17.499ZM17.7257 18.732C17.5586 18.705 17.4265 18.682 17.2684 18.722C17.1283 18.756 16.9993 18.828 16.8962 18.93C16.7791 19.045 16.7281 19.17 16.6641 19.327L15.8746 21.245L13.8905 17.811C14.1146 17.628 14.3208 17.422 14.4868 17.176L14.6049 17C14.717 16.833 14.9161 16.75 15.1162 16.789L15.3243 16.83C16.3029 17.023 17.3104 16.714 18.0158 16.009C18.0228 16.002 18.0278 15.992 18.0348 15.985L19.8188 19.074L17.7257 18.732ZM16.0047 9.999C16.0047 7.793 14.2097 5.999 12.0025 5.999C9.79521 5.999 8.0002 7.793 8.0002 9.999C8.0002 12.205 9.79521 13.999 12.0025 13.999C14.2097 13.999 16.0047 12.205 16.0047 9.999ZM12.0025 12.999C10.3475 12.999 9.00077 11.653 9.00077 9.999C9.00077 8.345 10.3475 6.999 12.0025 6.999C13.6574 6.999 15.0041 8.345 15.0041 9.999C15.0041 11.653 13.6574 12.999 12.0025 12.999Z" fill="#43454D"></path>
                            </svg>
                            <span class='truncate w-48 text-(--title) ...'> گارانتی ۲۵ ماهه اطلس کوشا </span>
                        </div>
                    </div>

                    <div class='flex flex-col gap-2 justify-between p-2 border-b-2 border-(--border) '>

                        <div class='w-full flex gap-2 text-center items-center h-10'>
                            <span class='w-2/12 text-(--title)'>رنگ:</span>
                            <div class='w-8/12 h-full flex gap-3 justify-between overflow-x-auto items-center p-2' style="scrollbar-width:none;">
                                <div class='flex items-center justify-center cursor-pointer min-w-6 min-h-6 max-w-6 max-h-6 bg-blue-500/20 transition-shadow duration-300 rounded-full scale-110 shdow_color_product'>
                                    <div class='min-w-4 min-h-4 max-w-4 max-h-4 bg-blue-500 rounded-full' style='box-shadow:0px 0px 7px 0.1px  rgb(255,255,255,100)'></div>
                                </div>
                                <div class='flex items-center justify-center cursor-pointer min-w-6 min-h-6 max-w-6 max-h-6 bg-red-500/20 transition-shadow duration-300 rounded-full'>
                                    <div class='min-w-4 min-h-4 max-w-4 max-h-4 bg-red-500 rounded-full' style='box-shadow:0px 0px 7px 0.1px  rgb(255,255,255,100)'></div>
                                </div>
                                <div class='flex items-center justify-center cursor-pointer min-w-6 min-h-6 max-w-6 max-h-6 bg-(--star)/20 transition-shadow duration-300 rounded-full'>
                                    <div class='min-w-4 min-h-4 max-w-4 max-h-4 bg-(--star) rounded-full' style='box-shadow:0px 0px 7px 0.1px  rgb(255,255,255,100)'></div>
                                </div>
                                <div class='flex items-center justify-center cursor-pointer min-w-6 min-h-6 max-w-6 max-h-6 bg-green-500/20 transition-shadow duration-300 rounded-full'>
                                    <div class='min-w-4 min-h-4 max-w-4 max-h-4 bg-green-500 rounded-full' style='box-shadow:0px 0px 7px 0.1px  rgb(255,255,255,100)'></div>
                                </div>
                                <div class='flex items-center justify-center cursor-pointer min-w-6 min-h-6 max-w-6 max-h-6 bg-pink-900/20 transition-shadow duration-300 rounded-full'>
                                    <div class='min-w-4 min-h-4 max-w-4 max-h-4 bg-pink-900 rounded-full' style='box-shadow:0px 0px 7px 0.1px  rgb(255,255,255,100)'></div>
                                </div>
                                <div class='flex items-center justify-center cursor-pointer min-w-6 min-h-6 max-w-6 max-h-6 bg-black/20 transition-shadow duration-300 rounded-full'>
                                    <div class='min-w-4 min-h-4 max-w-4 max-h-4 bg-black rounded-full' style='box-shadow:0px 0px 7px 0.1px  rgb(255,255,255,100)'></div>
                                </div>

                            </div>
                            <span class='w-2/12 text-xs'> سیاه </span>
                        </div>
                        <div class='w-full flex' id="entry_cart_parent_div">
                            @if($user)
                                @if($flag)
                                    <div class='entry_cart_submit cursor-pointer w-full h-10 bg-yellow-200 hover:yellow-300 disable flex text-center items-center justify-center rounded-lg text-black text-[10px] px-2 py-3  hover:bg-(--buttom) hover:font-bold transition-all duration-200'> افزوده شده </div>
                                @else
                                    <div onclick='entry_cart(this)' class='entry_cart_submit cursor-pointer w-full h-10 bg-(--primary_color) flex text-center items-center justify-center rounded-lg text-white text-[10px] px-2 py-3  hover:bg-(--buttom) hover:font-bold transition-all duration-200'>افزودن به سبد خرید</div>
                                @endif
                            @else
                                <div onclick='showLoginForm()' class=' cursor-pointer w-full h-10 bg-(--primary_color) flex text-center items-center justify-center rounded-lg text-white text-[10px] px-2 py-3  hover:bg-(--buttom) hover:font-bold transition-all duration-200'>افزودن به سبد خرید</div>
                            @endif
                        </div>
                        <div class='w-full flex gap-2 text-center items-center '>
                            <div class='w-2/5 text-(--metod-text) flex justify-end'>
                                <span class='line-through font-bold text-lg'> {{number_format($product->discunt)}} </span>
                                <span class='-rotate-90 text-xs'> تومان </span>
                            </div>
                            <span class='w-1/5 p-2 bg-(--primary_color) text-center rounded-xl text-white font-bold'> <span> {{$product->percent}}% </span> </span>
                            <div class='w-2/5 text-(--primary_color) flex justify-end'>
                                <span class='font-bold text-lg'> {{number_format($product->price)}} </span>
                                <span class='-rotate-90 text-xs'> تومان </span>
                            </div>
                        </div>

                    </div>

                    <div class='w-full flex justify-between p-2 '>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4V6M12 6V18M12 6H6.8C5.11984 6 4.27976 6 3.63803 6.32698C3.07354 6.6146 2.6146 7.07354 2.32698 7.63803C2 8.27976 2 9.11984 2 10.8V13.2C2 14.8802 2 15.7202 2.32698 16.362C2.6146 16.9265 3.07354 17.3854 3.63803 17.673C4.27976 18 5.11984 18 6.8 18H12M12 18L12 20M15 18H17.2C18.8802 18 19.7202 18 20.362 17.673C20.9265 17.3854 21.3854 16.9265 21.673 16.362C22 15.7202 22 14.8802 22 13.2V10.8C22 9.11984 22 8.27976 21.673 7.63803C21.3854 7.07354 20.9265 6.6146 20.362 6.32698C19.7202 6 18.8802 6 17.2 6H15" stroke="#43454D" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                        <svg onclick="show_share_list('open')" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M8.73611 10C8.18679 9.38625 7.3885 9 6.5 9C4.84315 9 3.5 10.3431 3.5 12C3.5 13.6569 4.84315 15 6.5 15C7.3885 15 8.18679 14.6137 8.73611 14M8.73611 10C9.21115 10.5308 9.5 11.2316 9.5 12C9.5 12.7684 9.21115 13.4692 8.73611 14M8.73611 10L14.6707 6M8.73611 14L14.6707 18M14.6707 18C14.5602 18.3128 14.5 18.6494 14.5 19C14.5 20.6569 15.8431 22 17.5 22C19.1569 22 20.5 20.6569 20.5 19C20.5 17.3431 19.1569 16 17.5 16C16.1938 16 15.0825 16.8348 14.6707 18ZM14.6707 6C14.5602 5.68722 14.5 5.35064 14.5 5C14.5 3.34315 15.8431 2 17.5 2C19.1569 2 20.5 3.34315 20.5 5C20.5 6.65685 19.1569 8 17.5 8C16.1938 8 15.0825 7.16519 14.6707 6Z" stroke="#43454D" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                        <svg onclick="set_favored()" class='like_icons fill-none duration-300 transition-all cursor-pointer' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M7.5 3C4.46243 3 2 5.40446 2 8.37051C2 12.9063 10.6044 19.9497 11.8503 20.9458C11.9407 21.0181 12.0593 21.0181 12.1497 20.9458C13.3956 19.9497 22 12.9063 22 8.37051C22 5.40446 19.5376 3 16.5 3C14.7673 3 13.2217 3.78237 12.2136 5.00507C12.1051 5.13662 11.8949 5.13662 11.7864 5.00507C10.7783 3.78237 9.2327 3 7.5 3Z" stroke="#43454D" stroke-width="1.5"></path>
                        </svg>
                    </div>
                    <!-- share_item_start -->

                    <div class="w-full h-dvh fixed top-0 right-0 z-10 flex justify-center items-center invisible opacity-0 transition_normal" id="share_item">
                        <div class="w-full h-full bg-black/50 absolute -z-1" onclick="show_share_list('close')"></div>
                        <div class="w-1/3 h-50 p-3 mx-auto bg-white flex flex-col transition-all duration-500 rounded-lg gap-3 items-center justify-evenly border border-(--border) relative">
                            <div class="w-full flex text-center items-center gap-4 justify-center">
                                <div class='shadows w-1 h-6 rounded-xl bg-(--primary_color)'></div>
                                <span class='text-sm font-bold'> این محصول رو با دوستانت به اشتراک بزار: </span>
                            </div>
                            <div class="w-full flex gap-4 justify-evenly">
                                <a href="eitaa.ir" target="_blank">
                                    <img src="{{asset('assets/img/eitaa_logo.svg')}}" alt="Rubika" class='w-14'>
                                </a>
                                <a href="rubika.ir" target="_blank">
                                    <img src="{{asset('assets/img/rubika-icon.png')}}" alt="Rubika" class='w-14'>
                                </a>
                                <a href="rubika.ir" target="_blank">
                                    <img src="{{asset('assets/img/whatsapp.png')}}" alt="Rubika" class='w-14'>
                                </a>
                                <a href="instagram.com" target="_blank">
                                    <img src="{{asset('assets/img/instagram-farsgraphic.png')}}" alt="Rubika" class='w-14'>
                                </a>
                                <a href="telegram.com" target="_blank">
                                    <img src="{{asset('assets/img/telegram-farsgraphic.png')}}" alt="Rubika" class='w-14'>
                                </a>
                            </div>
                            <!-- xmark -->
                            <div onclick="show_share_list('close')" class="absolute size-7 rounded-full bg-white -top-10 left-3 flex items-center text-2xl text-center justify-center cursor-pointer
                                ">
                                <span>X</span>
                            </div>
                            <!-- xmark -->
                        </div>
                    </div>
                    <!-- share_item_end -->
                </div>

            </div>
            <div class='lg:hidden flex flex-col w-11/12 mx-auto gap-3'>

                <div class='h-62 w-full bg-white rounded-xl p-1 flex flex-col flex-wrap items-center justify-center gap-2 border border-(--border) cart_shadow overflow-x-auto' style="scrollbar-width:none;">

                    <div class='p-1 bg-(--metod-text) rounded-xl'>
                        <img class='w-80 rounded-lg object-cover' src="{{asset('assets/img/product-image4.png')}}" alt="">
                    </div>
                    @for($i=0 ; $i<10 ; $i++)
                        <?php $count++; ?>
                        @if($count==1)
                        <div class='p-1 bg-(--metood) rounded-xl'>
                        <img class='w-37 rounded-lg object-cover' src="{{asset('assets/img/product-image4.png')}}" alt="">
                </div>
                <div class='p-1 bg-(--metood) rounded-xl'>
                    <img class='w-37 rounded-lg object-cover' src="{{asset('assets/img/product-image4.png')}}" alt="">
                </div>
                @else
                <div class='p-1 bg-(--metood) rounded-xl'>
                    <img class='w-80 rounded-lg object-cover' src="{{asset('assets/img/product-image4.png')}}" alt="">
                </div>
                <?php $count = 0; ?>
                @endif
                @endfor
                <?php $count = 0; ?>

            </div>
            <div class='flex gap-2'>

                <div class='w-full md:w-8/12 bg-white rounded-xl p-3 flex flex-col border border-(--border) cart_shadow'>

                    <div class='w-full border-b-2 border-(--border) flex flex-col gap-3'>
                        <div class='w-full p-2 flex text-start items-center'>
                            <span class='truncate ...'> دریل پیچ گوشتی چکشی شارژی آاگ مدل BSB 12C2 </span>
                        </div>
                        <div class='w-full p-2 flex sm:flex-row flex-col sm:justify-between sm:items-center gap-2'>
                            <div class='flex  gap-1'>
                                <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                            </div>
                            <div class='flex gap-2 '>
                                <span class='text-sm text-(--secondary-text)'>شناسه محصول:</span>
                                <span class='text-sm text-(--secondary-text)'> 1234567890-1-1-1-3 </span>
                            </div>
                        </div>
                    </div>

                    <div class='hidden md:flex flex-col w-full border-b-2 border-(--border)  gap-2 p-2'>
                        <span class='text-(--primary_color)'>مشخصات محصول</span>
                        <div class='w-full flex flex-wrap gap-2'>
                            <div class='p-2 rounded-xl bg-(--metood) text-sm'>سرعت حرکت آزاد (RPM): 1500-3000 RPM</div>
                            <div class='p-2 rounded-xl bg-(--metood) text-sm'> کاربری: نیمه صنعتی </div>
                            <div class='p-2 rounded-xl bg-(--metood) text-sm'> کاربری: نیمه صنعتی </div>
                        </div>
                    </div>

                    <div class='w-full flex flex-col gap-3 p-2'>
                        <span class='text-(--primary_color)'> توضیح کوتاه محصول: </span>
                        <div class='text-(--secondary-text)'>
                            <span class='text-sm'>
                                {{$summary}}<span class='cursor-pointer flex text-(--primary_color) text-xs text-center items-center'> بیشتر <svg class='fill-(--primary_color) size-3' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- -->
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                                    </svg></span>
                            </span>
                        </div>
                    </div>

                </div>


                <div class='hidden md:flex flex-col  w-4/12 bg-white rounded-xl p-2 border border-(--border) cart_shadow justify-between'>

                    <div class='flex text-center justify-center border-b-2 border-(--border) p-2 gap-1 text-sm items-center'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <g clip-path="url(#clip0_66_4863)">
                                <path d="M11 16.5C11 15.9477 11.4477 15.5 12 15.5C12.5523 15.5 13.0001 15.9477 13.0001 16.5C13.0001 17.0523 12.5524 17.5 12.0001 17.5C11.4478 17.5 11 17.0523 11 16.5Z" fill="var(--primary_color)"></path>
                                <path d="M11.25 7L11.25 13C11.25 13.4142 11.5858 13.75 12 13.75C12.4142 13.75 12.75 13.4142 12.75 13L12.75 7C12.75 6.58579 12.4142 6.25 12 6.25C11.5858 6.25 11.25 6.58579 11.25 7Z" fill="var(--primary_color)"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.25 12C0.25 5.51065 5.51065 0.25 12 0.25C18.4893 0.25 23.75 5.51065 23.75 12C23.75 18.4893 18.4893 23.75 12 23.75C5.51065 23.75 0.25 18.4893 0.25 12ZM12 1.75C6.33908 1.75 1.75 6.33908 1.75 12C1.75 17.6609 6.33908 22.25 12 22.25C17.6609 22.25 22.25 17.6609 22.25 12C22.25 6.33908 17.6609 1.75 12 1.75Z" fill="var(--primary_color)"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_66_4863">
                                    <rect width="24" height="24" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <span>شرایط مرجوعی</span>
                    </div>
                    <div class='flex flex-col gap-3 border-b-2 border-(--border) p-2 '>
                        <div class='flex gap-1 text-xs items-center'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M1 8.6C1 6.63982 1 5.65972 1.38148 4.91103C1.71703 4.25247 2.25247 3.71703 2.91103 3.38148C3.65972 3 4.63982 3 6.6 3H16.4C18.3602 3 19.3403 3 20.089 3.38148C20.7475 3.71703 21.283 4.25247 21.6185 4.91103C22 5.65972 22 6.63982 22 8.6V12.852C21.2357 12.5132 20.3898 12.325 19.5 12.325C16.0896 12.325 13.325 15.0896 13.325 18.5C13.325 18.6683 13.3317 18.8351 13.3449 19H6.6C4.63982 19 3.65972 19 2.91103 18.6185C2.25247 18.283 1.71703 17.7475 1.38148 17.089C1 16.3403 1 15.3602 1 13.4V8.6ZM11.5 14C13.1569 14 14.5 12.6569 14.5 11C14.5 9.34315 13.1569 8 11.5 8C9.84315 8 8.5 9.34315 8.5 11C8.5 12.6569 9.84315 14 11.5 14Z" fill="#43454D"></path>
                                <path d="M23.5 18C23.5 18.2761 23.2761 18.5 23 18.5H17.2071L19.3536 20.6464C19.5488 20.8417 19.5488 21.1583 19.3536 21.3536C19.1583 21.5488 18.8417 21.5488 18.6464 21.3536L15.6464 18.3536C15.5527 18.2598 15.5 18.1326 15.5 18C15.5 17.8674 15.5527 17.7402 15.6464 17.6464L18.6464 14.6464C18.8417 14.4512 19.1583 14.4512 19.3536 14.6464C19.5488 14.8417 19.5488 15.1583 19.3536 15.3536L17.2071 17.5L23 17.5C23.2761 17.5 23.5 17.7239 23.5 18Z" fill="#43454D"></path>
                                <path d="M6.57756 2.5C5.61658 2.5 4.86446 2.5 4.26049 2.54935C3.64594 2.59956 3.14062 2.70334 2.68404 2.93597C1.93139 3.31947 1.31947 3.93139 0.935975 4.68404C0.703335 5.14062 0.599556 5.64594 0.549345 6.26049C0.499996 6.8645 0.499998 7.61642 0.5 8.57748L0.5 13.4225C0.499998 14.3835 0.499996 15.1355 0.549347 15.7395C0.599558 16.3541 0.703337 16.8594 0.935974 17.316C1.31947 18.0686 1.93139 18.6805 2.68404 19.064C3.14062 19.2967 3.64594 19.4004 4.26049 19.4507C4.86451 19.5 5.61646 19.5 6.57754 19.5H13.4056C13.3526 19.1745 13.325 18.8405 13.325 18.5L6.6 18.5C5.61166 18.5 4.90047 18.4996 4.34192 18.454C3.78921 18.4088 3.43014 18.3219 3.13803 18.173C2.57354 17.8854 2.1146 17.4265 1.82698 16.862C1.67814 16.5699 1.59118 16.2108 1.54602 15.6581C1.50039 15.0995 1.5 14.3883 1.5 13.4L1.5 8.6C1.5 7.61166 1.50039 6.90047 1.54602 6.34192C1.59118 5.78921 1.67814 5.43014 1.82698 5.13803C2.1146 4.57354 2.57354 4.1146 3.13803 3.82698C3.43014 3.67814 3.78921 3.59118 4.34192 3.54603C4.90047 3.50039 5.61166 3.5 6.6 3.5L16.4 3.5C17.3883 3.5 18.0995 3.50039 18.6581 3.54603C19.2108 3.59118 19.5699 3.67814 19.862 3.82698C20.4265 4.1146 20.8854 4.57354 21.173 5.13803C21.3219 5.43014 21.4088 5.78921 21.454 6.34192C21.4996 6.90047 21.5 7.61166 21.5 8.6V12.6561C21.8484 12.7753 22.1828 12.9248 22.5 13.1014V8.57765C22.5 7.61651 22.5 6.86453 22.4507 6.26049C22.4004 5.64594 22.2967 5.14062 22.064 4.68404C21.6805 3.93139 21.0686 3.31947 20.316 2.93597C19.8594 2.70334 19.3541 2.59956 18.7395 2.54935C18.1355 2.5 17.3836 2.5 16.4225 2.5L6.57756 2.5Z" fill="#43454D"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5092 14.5L11.5046 14.5L11.5 14.5C9.567 14.5 8 12.933 8 11C8 9.067 9.567 7.5 11.5 7.5C13.433 7.5 15 9.067 15 11C15 12.8463 13.4504 14.5 11.5092 14.5ZM9 11C9 9.61929 10.1193 8.5 11.5 8.5C12.8807 8.5 14 9.61929 14 11C14 12.3142 12.8781 13.5 11.5092 13.5L11.5046 13.5L11.5 13.5C10.1193 13.5 9 12.3807 9 11Z" fill="#43454D"></path>
                                <path d="M5 10.25C4.58579 10.25 4.25 10.5858 4.25 11C4.25 11.4142 4.58579 11.75 5 11.75C5.41422 11.75 5.7501 11.4142 5.7501 11C5.7501 10.5858 5.41422 10.25 5 10.25Z" fill="#43454D"></path>
                            </svg>
                            <span class='truncate w-48 ...'> ۷ روز ضمانت بازگشت بی قید و شرط </span>
                        </div>
                        <div class='flex gap-1 text-xs items-center'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M10.768 17.6771C11.5274 18.1076 12.4728 18.1076 13.2322 17.6772L15.4582 21.5327C15.6151 21.8044 15.6935 21.9402 15.7902 21.9787C15.8745 22.0122 15.9693 22.0058 16.0483 21.9614C16.1391 21.9103 16.1987 21.7653 16.3179 21.4752L17.1221 19.5185C17.1738 19.3926 17.1997 19.3296 17.2434 19.2866C17.2819 19.2487 17.3299 19.2218 17.3824 19.2089C17.4419 19.1943 17.5091 19.2053 17.6435 19.2273L19.7739 19.5755C20.0932 19.6277 20.2529 19.6538 20.3448 19.6018C20.4247 19.5566 20.4795 19.4773 20.4936 19.3865C20.5097 19.2822 20.4288 19.142 20.267 18.8618L18.0861 15.0845C18.351 14.6004 18.4593 14.0207 18.341 13.4157L18.3004 13.208C18.2233 12.8134 18.3899 12.411 18.7235 12.1865L18.8991 12.0683C20.3673 11.0803 20.3673 8.91971 18.8991 7.93165L18.7235 7.81351C18.3899 7.58903 18.2233 7.18661 18.3004 6.79202L18.341 6.58433C18.6805 4.84748 17.1528 3.31972 15.4159 3.65925L15.2082 3.69985C14.8136 3.77699 14.4112 3.6103 14.1867 3.27674L14.0686 3.10117C13.0805 1.63294 10.92 1.63294 9.9319 3.10117L9.81375 3.27674C9.58928 3.6103 9.18686 3.77699 8.79226 3.69985L8.58458 3.65925C6.84772 3.31972 5.31996 4.84747 5.6595 6.58433L5.7001 6.79202C5.77723 7.18661 5.61055 7.58903 5.27698 7.81351L5.10142 7.93165C3.63319 8.91971 3.63319 11.0803 5.10142 12.0683L5.27698 12.1865C5.61055 12.411 5.77723 12.8134 5.7001 13.208L5.6595 13.4157C5.54124 14.0206 5.64949 14.6001 5.9142 15.0843L3.73347 18.8613C3.57167 19.1416 3.49077 19.2817 3.5069 19.386C3.52093 19.4768 3.57573 19.5561 3.65565 19.6013C3.74756 19.6533 3.90724 19.6272 4.2266 19.575L6.35699 19.2268C6.4914 19.2048 6.55861 19.1938 6.6181 19.2085C6.67058 19.2213 6.71861 19.2482 6.7571 19.2861C6.80074 19.3291 6.82662 19.3921 6.87839 19.518L7.68257 21.4747C7.80179 21.7648 7.8614 21.9098 7.95219 21.9609C8.03118 22.0054 8.12602 22.0117 8.21022 21.9782C8.307 21.9397 8.38541 21.8039 8.54223 21.5323L10.768 17.6771ZM15.5002 10C15.5002 11.933 13.9332 13.5 12.0002 13.5C10.0672 13.5 8.50024 11.933 8.50024 10C8.50024 8.067 10.0672 6.5 12.0002 6.5C13.9332 6.5 15.5002 8.067 15.5002 10Z" fill="#43454D"></path>
                                <path d="M20.7063 18.611L18.6422 15.038C18.8673 14.5 18.9524 13.909 18.8373 13.319L18.7963 13.111C18.7572 12.913 18.8403 12.713 19.0074 12.601L19.1835 12.483C20.0119 11.926 20.5062 10.998 20.5062 10C20.5062 9.002 20.0119 8.074 19.1835 7.516L19.0084 7.398C18.8413 7.285 18.7582 7.085 18.7973 6.887L18.8383 6.679C19.0294 5.7 18.7222 4.694 18.0168 3.989C17.3104 3.283 16.3029 2.976 15.3253 3.168L15.1172 3.209C14.9211 3.248 14.719 3.165 14.6069 2.998L14.4878 2.822C13.9305 1.994 13.002 1.5 12.0035 1.5C11.0049 1.5 10.0764 1.994 9.51906 2.822L9.40099 2.998C9.28893 3.165 9.08982 3.248 8.8897 3.209L8.68159 3.168C7.70504 2.977 6.69647 3.284 5.99008 3.989C5.28368 4.695 4.97651 5.7 5.16861 6.679L5.20964 6.887C5.24866 7.085 5.16561 7.285 4.99852 7.397L4.82242 7.516C3.99395 8.073 3.49968 9.001 3.49968 9.999C3.49968 10.997 3.99395 11.925 4.82242 12.482L4.99752 12.6C5.16461 12.713 5.24766 12.913 5.20864 13.111L5.16761 13.319C5.05255 13.909 5.1376 14.5 5.36272 15.038L3.29956 18.61C3.09245 18.968 2.96738 19.184 3.0104 19.46C3.04742 19.704 3.1915 19.914 3.40763 20.037C3.65376 20.176 3.8989 20.135 4.30513 20.069L6.42132 19.723L7.21977 21.664C7.37185 22.036 7.4649 22.26 7.70704 22.396C7.82911 22.464 7.96318 22.499 8.09926 22.499C8.19932 22.499 8.29937 22.48 8.39342 22.442C8.65357 22.339 8.77464 22.129 8.97575 21.781L10.9869 18.299C11.3101 18.416 11.6473 18.498 12.0015 18.498C12.3557 18.498 12.6928 18.416 13.016 18.299L15.0282 21.781C15.2283 22.129 15.3493 22.339 15.6105 22.443C15.7055 22.481 15.8056 22.5 15.9046 22.5C16.0397 22.5 16.1748 22.465 16.2959 22.397C16.539 22.261 16.6301 22.037 16.7841 21.664L17.5826 19.723L19.6988 20.069C20.104 20.135 20.3511 20.175 20.5973 20.037C20.8124 19.915 20.9575 19.705 20.9935 19.463C21.0365 19.184 20.9115 18.968 20.7053 18.612L20.7063 18.611ZM8.12928 21.246L7.33983 19.327C7.2748 19.169 7.22377 19.044 7.1077 18.929C7.00465 18.827 6.87557 18.755 6.73649 18.722C6.57641 18.682 6.44533 18.704 6.27524 18.732L4.18506 19.073L5.96906 15.984C5.97607 15.991 5.98107 16.001 5.98807 16.008C6.69347 16.714 7.70204 17.022 8.67959 16.829L8.8877 16.788C9.08782 16.749 9.28593 16.832 9.39799 16.999L9.51606 17.175C9.68215 17.421 9.88826 17.627 10.1114 17.81L8.12728 21.244L8.12928 21.246ZM12.0015 17.499C11.3271 17.499 10.7237 17.178 10.3475 16.619L10.2285 16.443C9.9463 16.024 9.47803 15.78 8.98576 15.78C8.8897 15.78 8.79265 15.789 8.69559 15.808L8.48748 15.849C7.82511 15.978 7.17174 15.779 6.69447 15.302C6.2172 14.825 6.01809 14.172 6.14716 13.51L6.18819 13.303C6.30425 12.71 6.05511 12.108 5.55283 11.77L5.37773 11.652C4.81742 11.276 4.49724 10.673 4.49724 9.999C4.49724 9.325 4.81842 8.722 5.37773 8.345L5.55383 8.226C6.05511 7.889 6.30425 7.287 6.18819 6.694L6.14716 6.486C6.01809 5.824 6.2172 5.171 6.69447 4.694C7.17174 4.217 7.82511 4.016 8.48748 4.147L8.69459 4.188C9.29293 4.305 9.89027 4.055 10.2285 3.553L10.3465 3.377C10.7227 2.818 11.3261 2.497 12.0005 2.497C12.6748 2.497 13.2782 2.818 13.6554 3.377L13.7734 3.553C14.1096 4.054 14.71 4.303 15.3063 4.188L15.5144 4.147C16.1758 4.016 16.8302 4.217 17.3074 4.694C17.7847 5.171 17.9838 5.824 17.8547 6.486L17.8137 6.693C17.6977 7.286 17.9468 7.888 18.4491 8.226L18.6242 8.344C19.1845 8.721 19.5047 9.324 19.5047 9.998C19.5047 10.672 19.1835 11.275 18.6242 11.651L18.4481 11.77C17.9468 12.107 17.6977 12.709 17.8137 13.302L17.8547 13.51C17.9838 14.172 17.7847 14.825 17.3074 15.302C16.8302 15.779 16.1758 15.978 15.5144 15.849L15.3073 15.808C14.71 15.69 14.1116 15.941 13.7734 16.443L13.6554 16.618C13.2782 17.178 12.6758 17.498 12.0005 17.498L12.0015 17.499ZM17.7257 18.732C17.5586 18.705 17.4265 18.682 17.2684 18.722C17.1283 18.756 16.9993 18.828 16.8962 18.93C16.7791 19.045 16.7281 19.17 16.6641 19.327L15.8746 21.245L13.8905 17.811C14.1146 17.628 14.3208 17.422 14.4868 17.176L14.6049 17C14.717 16.833 14.9161 16.75 15.1162 16.789L15.3243 16.83C16.3029 17.023 17.3104 16.714 18.0158 16.009C18.0228 16.002 18.0278 15.992 18.0348 15.985L19.8188 19.074L17.7257 18.732ZM16.0047 9.999C16.0047 7.793 14.2097 5.999 12.0025 5.999C9.79521 5.999 8.0002 7.793 8.0002 9.999C8.0002 12.205 9.79521 13.999 12.0025 13.999C14.2097 13.999 16.0047 12.205 16.0047 9.999ZM12.0025 12.999C10.3475 12.999 9.00077 11.653 9.00077 9.999C9.00077 8.345 10.3475 6.999 12.0025 6.999C13.6574 6.999 15.0041 8.345 15.0041 9.999C15.0041 11.653 13.6574 12.999 12.0025 12.999Z" fill="#43454D"></path>
                            </svg>
                            <span class='truncate w-48 ...'> گارانتی ۲۵ ماهه اطلس کوشا </span>
                        </div>
                    </div>

                    <div class='flex flex-col gap-2 justify-between p-2 border-b-2 border-(--border) '>

                        <div class='w-full flex gap-2 text-center items-center'>
                            <span class='w-3/12 '>رنگ:</span>
                            <div class='w-6/12 flex justify-between overflow-x-auto' style="scrollbar-width:none;">
                                <div class='cursor-pointer p-2 bg-blue-500 rounded-full shadow-[0_0_15px_rgba(135,206,235)] hover:shadow-[0_0_25px_rgba(135,206,235)] transition-shadow duration-300'></div>
                                <div class='cursor-pointer p-2 bg-red-500 rounded-full shadow-[0_0_15px_rgba(128,0,0)] hover:shadow-[0_0_25px_rgba(128,0,0)] transition-shadow duration-300'></div>
                                <div class='cursor-pointer p-2 bg-(--star) rounded-full shadow-[0_0_15px_rgba(255,215,0)] hover:shadow-[0_0_25px_rgba(218,165,32)] transition-shadow duration-300'></div>
                                <div class='cursor-pointer p-2 bg-green-500 rounded-full shadow-[0_0_15px_rgba(152,251,152)] hover:shadow-[0_0_25px_rgba(152,251,152)] transition-shadow duration-300'></div>
                                <div class='cursor-pointer p-2 bg-pink-500 rounded-full shadow-[0_0_15px_rgba(255,0,255)] hover:shadow-[0_0_25px_rgba(255,0,255)] transition-shadow duration-300'></div>
                            </div>
                            <span class='w-3/12 text-xs'> سیاه </span>
                        </div>
                        <div class='w-full flex' id="entry_cart_parent_div">
                            @if($user)
                                @if($flag)
                                    <div class='entry_cart_submit cursor-pointer w-full h-10 bg-yellow-200 hover:yellow-300 disable flex text-center items-center justify-center rounded-lg text-black text-[10px] px-2 py-3  hover:bg-(--buttom) hover:font-bold transition-all duration-200'> افزوده شده </div>
                                @else
                                    <div onclick='entry_cart(this)' class='entry_cart_submit cursor-pointer w-full h-10 bg-(--primary_color) flex text-center items-center justify-center rounded-lg text-white text-[10px] px-2 py-3  hover:bg-(--buttom) hover:font-bold transition-all duration-200'>افزودن به سبد خرید</div>
                                @endif
                            @else
                                <div onclick='showLoginForm()' class=' cursor-pointer w-full h-10 bg-(--primary_color) flex text-center items-center justify-center rounded-lg text-white text-[10px] px-2 py-3  hover:bg-(--buttom) hover:font-bold transition-all duration-200'>افزودن به سبد خرید</div>
                            @endif
                        </div>
                        <div class='w-full flex gap-2 text-center items-center '>
                            <div class='w-2/5 flex text-(--metod-text) justify-end'>
                                <span class='line-through font-bold text-lg'> {{number_format($product->discunt)}}  </span>
                                <span class='-rotate-90 text-xs'> تومان </span>
                            </div>
                            <span class='w-1/5 p-2 bg-(--primary_color) text-center rounded-xl text-white font-bold'> <span> {{$product->percent}} </span> </span>
                            <div class='w-2/5 text-(--primary_color) flex justify-end'>
                                <span class='font-bold text-lg'> {{number_format($product->price)}} </span>
                                <span class='-rotate-90 text-xs'> تومان </span>
                            </div>
                        </div>

                    </div>

                    <div class='w-full flex justify-between p-2 '>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4V6M12 6V18M12 6H6.8C5.11984 6 4.27976 6 3.63803 6.32698C3.07354 6.6146 2.6146 7.07354 2.32698 7.63803C2 8.27976 2 9.11984 2 10.8V13.2C2 14.8802 2 15.7202 2.32698 16.362C2.6146 16.9265 3.07354 17.3854 3.63803 17.673C4.27976 18 5.11984 18 6.8 18H12M12 18L12 20M15 18H17.2C18.8802 18 19.7202 18 20.362 17.673C20.9265 17.3854 21.3854 16.9265 21.673 16.362C22 15.7202 22 14.8802 22 13.2V10.8C22 9.11984 22 8.27976 21.673 7.63803C21.3854 7.07354 20.9265 6.6146 20.362 6.32698C19.7202 6 18.8802 6 17.2 6H15" stroke="#43454D" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                        <svg onclick="show_share_list()" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M8.73611 10C8.18679 9.38625 7.3885 9 6.5 9C4.84315 9 3.5 10.3431 3.5 12C3.5 13.6569 4.84315 15 6.5 15C7.3885 15 8.18679 14.6137 8.73611 14M8.73611 10C9.21115 10.5308 9.5 11.2316 9.5 12C9.5 12.7684 9.21115 13.4692 8.73611 14M8.73611 10L14.6707 6M8.73611 14L14.6707 18M14.6707 18C14.5602 18.3128 14.5 18.6494 14.5 19C14.5 20.6569 15.8431 22 17.5 22C19.1569 22 20.5 20.6569 20.5 19C20.5 17.3431 19.1569 16 17.5 16C16.1938 16 15.0825 16.8348 14.6707 18ZM14.6707 6C14.5602 5.68722 14.5 5.35064 14.5 5C14.5 3.34315 15.8431 2 17.5 2C19.1569 2 20.5 3.34315 20.5 5C20.5 6.65685 19.1569 8 17.5 8C16.1938 8 15.0825 7.16519 14.6707 6Z" stroke="#43454D" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                        <svg onclick="set_favored()" class='like_icons fill-none duration-300 transition-all cursor-pointer' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M7.5 3C4.46243 3 2 5.40446 2 8.37051C2 12.9063 10.6044 19.9497 11.8503 20.9458C11.9407 21.0181 12.0593 21.0181 12.1497 20.9458C13.3956 19.9497 22 12.9063 22 8.37051C22 5.40446 19.5376 3 16.5 3C14.7673 3 13.2217 3.78237 12.2136 5.00507C12.1051 5.13662 11.8949 5.13662 11.7864 5.00507C10.7783 3.78237 9.2327 3 7.5 3Z" stroke="#43454D" stroke-width="1.5"></path>
                        </svg>
                    </div>
                    <!--  -->
                </div>
            </div>
            <div class='md:hidden flex flex-col w-full bg-white rounded-xl p-3 justify-end gap-4 border border-(--border) cart_shadow '>
                <span class='text-(--primary_color)'>رنگ:</span>
                <div class='w-full flex gap-4 overflow-x-auto' style="scrollbar-width:none;">
                    <div class='cursor-pointer p-2 flex gap-2 justify-center items-center border border-(--border) rounded-xl'>
                        <span>آبی</span>
                        <div class='bg-blue-500 size-4 rounded-full shadow-[0_0_15px_rgba(135,206,235)] hover:shadow-[0_0_25px_rgba(135,206,235)] transition-shadow duration-300'></div>
                    </div>
                    <div class='cursor-pointer p-2 flex gap-2 justify-center items-center border border-(--border) rounded-xl'>
                        <span>قرمز</span>
                        <div class='bg-red-500 size-4 rounded-full shadow-[0_0_15px_rgba(128,0,0)] hover:shadow-[0_0_25px_rgba(128,0,0)] transition-shadow duration-300'></div>
                    </div>
                    <div class='cursor-pointer p-2 flex gap-2 justify-center items-center border border-(--border) rounded-xl'>
                        <span>زرد</span>
                        <div class='bg-(--star) size-4 rounded-full shadow-[0_0_15px_rgba(255,215,0)] hover:shadow-[0_0_25px_rgba(218,165,32)] transition-shadow duration-300'></div>
                    </div>
                    <div class='cursor-pointer p-2 flex gap-2 justify-center items-center border border-(--border) rounded-xl'>
                        <span>سبز</span>
                        <div class='bg-green-500 size-4 rounded-full shadow-[0_0_15px_rgba(152,251,152)] hover:shadow-[0_0_25px_rgba(152,251,152)] transition-shadow duration-300'></div>
                    </div>
                    <div class='cursor-pointer p-2 flex gap-2 justify-center items-center border border-(--border) rounded-xl'>
                        <span>صورتی</span>
                        <div class='bg-pink-500 size-4 rounded-full shadow-[0_0_15px_rgba(255,0,255)] hover:shadow-[0_0_25px_rgba(255,0,255)] transition-shadow duration-300'></div>
                    </div>
                    <div class='cursor-pointer p-2 flex gap-2 justify-center items-center border border-(--border) rounded-xl'>
                        <span>سیاه</span>
                        <div class='bg-black size-4 rounded-full shadow-[0_0_15px_rgba(0,0,0)] hover:shadow-[0_0_25px_rgba(135,206,235)] transition-shadow duration-300'></div>
                    </div>
                </div>
            </div>
            <div class='md:hidden flex flex-col w-full bg-white rounded-xl p-3 justify-end gap-4 border border-(--border) cart_shadow'>
                <div class='flex flex-col w-full border-b-2 border-(--border)  gap-4 p-2'>
                    <span class='text-(--primary_color)'>مشخصات محصول :</span>
                    <div class='w-full flex gap-2 overflow-x-auto' style="scrollbar-width:none;">
                        <div class='w-full p-2 rounded-xl bg-(--metood) text-sm text-nowrap'> کاربری: نیمه صنعتی </div>
                        <div class='w-full p-2 rounded-xl bg-(--metood) text-sm text-nowrap'>سرعت حرکت آزاد (RPM): 1500-3000 RPM</div>
                        <div class='w-full p-2 rounded-xl bg-(--metood) text-sm text-nowrap'> کاربری: نیمه صنعتی </div>
                        <div class='w-full p-2 rounded-xl bg-(--metood) text-sm text-nowrap'>سرعت حرکت آزاد (RPM): 1500-3000 RPM</div>
                        <div class='w-full p-2 rounded-xl bg-(--metood) text-sm text-nowrap'> کاربری: نیمه صنعتی </div>
                        <div class='w-full p-2 rounded-xl bg-(--metood) text-sm text-nowrap'>سرعت حرکت آزاد (RPM): 1500-3000 RPM</div>
                        <div class='w-full p-2 rounded-xl bg-(--metood) text-sm text-nowrap'> کاربری: نیمه صنعتی </div>
                        <div class='w-full p-2 rounded-xl bg-(--metood) text-sm text-nowrap'>سرعت حرکت آزاد (RPM): 1500-3000 RPM</div>
                        <div class='w-full p-2 rounded-xl bg-(--metood) text-sm text-nowrap'> کاربری: نیمه صنعتی </div>
                    </div>
                </div>
            </div>
            <div class='md:hidden flex flex-col w-full bg-white rounded-xl p-3 justify-end gap-4 border border-(--border) cart_shadow'>
                <div class='flex flex-col w-full border-b-2 border-(--border)  gap-4 p-2'>
                    <span class='text-(--primary_color)'>فروشنده:</span>
                    <div class='w-full flex flex-col gap-2' style="scrollbar-width:none;">
                        <div class='flex items-center gap-2'>
                            <div class='flex text-center items-center gap-4'>
                                <div class='size-8 p-2 bg-(--metod-text) rounded-full flex justify-center items-center'>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!-- -->
                                        <path d="M0 185.8c0-6.4 1.6-12.7 4.7-18.3L82.4 25C90.8 9.6 106.9 0 124.5 0h391c17.6 0 33.7 9.6 42.1 25l77.7 142.4c3.1 5.6 4.7 11.9 4.7 18.3c0 21.1-17.1 38.2-38.2 38.2H576V496c0 8.8-7.2 16-16 16s-16-7.2-16-16V224H96V352H352V272 256h32v16V464c0 26.5-21.5 48-48 48H112c-26.5 0-48-21.5-48-48V224H38.2C17.1 224 0 206.9 0 185.8zM80 192H560h41.8c3.4 0 6.2-2.8 6.2-6.2c0-1-.3-2.1-.8-3L529.6 40.3c-2.8-5.1-8.2-8.3-14-8.3h-391c-5.9 0-11.2 3.2-14 8.3L32.8 182.8c-.5 .9-.8 1.9-.8 3c0 3.4 2.8 6.2 6.2 6.2H80zM96 464c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16V384H96v80z" />
                                    </svg>
                                </div>
                                <span class='text-xs font-bold '>عملکرد</span>
                            </div>
                            <div class='flex  min-w-10 h-5 p-2 bg-green-500 rounded-xl text-center items-center'>
                                <span class='text-white text-xs'>عالی</span>
                            </div>
                        </div>
                        <div class='flex flex-col  '>
                            <div class='flex text-center items-center gap-4'>
                                <div class='size-8 p-2 bg-(--metod-text) rounded-full flex justify-center items-center'>

                                    <svg class='size-4' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M243.5 37.3c8-3.4 17-3.4 25 0l176.7 75c11.3 4.8 18.9 15.5 18.8 27.6c-.5 94-39.4 259.8-195.5 334.5c-7.9 3.8-17.2 3.8-25.1 0C87.3 399.6 48.5 233.8 48 139.8c-.1-12.1 7.5-22.8 18.8-27.6l176.7-75zM281 7.8c-16-6.8-34-6.8-50 0L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.7 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2L281 7.8zm82.3 195.5c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L224 297.4l-52.7-52.7c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l64 64c6.2 6.2 16.4 6.2 22.6 0l128-128z" />
                                    </svg>
                                </div>
                                <span class='text-xs font-bold '> شرایط مرجوعی و گارانتی محصول </span>
                            </div>
                            <div class='flex flex-col gap-2 mr-13'>
                                <ul class='text-(--secondary-text)'>
                                    <li class='list-none'><span class='text-xs truncate w-48 ...'> ۷ روز ضمانت بازگشت بی قید و شرط </span></li>
                                    <li class='list-none'><span class='text-xs truncate w-48 ...'> گارانتی ۲۵ ماهه اطلس کوشا </span></li>
                                </ul>
                            </div>
                        </div>

                        <div class='flex flex-col  '>
                            <div class='flex text-center items-center gap-4'>
                                <div class='size-8 p-2 bg-(--metod-text) rounded-full flex justify-center items-center'>
                                    <svg width="200" height="100" viewBox="0 0 200 100" fill="none" stroke="black" stroke-width="2"><!-- بدنه اصلی -->
                                        <rect x="10" y="30" width="120" height="50" /><!-- کابین راننده -->
                                        <rect x="130" y="40" width="40" height="40" /><!-- چرخ‌ها -->
                                        <circle cx="40" cy="85" r="10" />
                                        <circle cx="150" cy="85" r="10" /><!-- پنجره -->
                                        <rect x="140" y="50" width="20" height="15" />
                                    </svg>
                                </div>
                                <span class='text-xs font-bold '> روش‌ها و هزینه‌های ارسال </span>
                            </div>
                            <div class='flex flex-col gap-2 mr-13'>
                                <ul class='text-(--secondary-text)'>
                                    <li class='list-none'><span class='text-xs truncate w-48 ...'> تیپاکس </span></li>
                                    <li class='list-none'><span class='text-xs truncate w-48 ...'> پیشتاز </span></li>
                                    <li class='list-none'><span class='text-xs truncate w-48 ...'> ماکسیم </span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

        <div class='w-full py-10 bg-white'>
            <div class='w-11/12 mx-auto bg-white '>

                <div class='w-full flex gap-3'>

                    <div class='w-full lg:w-9/12 mt-5 flex flex-col gap-5'>

                        <div class='max-w-full flex gap-10 text-center items-center text-nowrap overflow-auto'>

                            <div class='w-full bg-(--metod-text) h-[1px] pl-5'></div>
                            <div class='flex  text-center text-(--primary_color) border-b-3 border-(--primary_color) py-3 items-center'>
                                <span class='cursor-pointer font-bold'>
                                    توضیحات
                                </span>
                            </div>
                            <a href="#section_specifications" class='text-center text-(--title) hover:text-(--primary_color) hover:text-cart_shadow text-shadow-orange-200  transition-all duration-200 border-x-2 border-(--border) px-5'>
                                <span class='cursor-pointer font-bold'>
                                    مشخصات محصول
                                </span>
                            </a>
                            <a href="#section_comments" class='text-center text-(--title) hover:text-(--primary_color) hover:text-cart_shadow text-shadow-orange-200  transition-all duration-200'>
                                <span class='cursor-pointer font-bold'>
                                    نظرات کاربران
                                </span>
                            </a>
                            <div class='w-full bg-(--metod-text) h-[1px] pr-5'></div>

                        </div>


                        <div class='flex flex-col gap-3'>

                            <div class='border-r-4 border-(--primary_color)  pr-4 text-2xl'>
                                <span class='font-bold text-(--title)'> توضیحات </span>
                            </div>

                            <div class=''>
                                <span class='font-bold text-(--primary_color)'>
                                    <!-- title -->
                                    دریل پیچ گوشتی چکشی شارژی آاگ مدل BSB 12C2
                                </span>
                            </div>

                            <div class='text-base text-(--discription)'>
                                <span>
                                    <!-- desciption -->
                                    دریل پیچ‌گوشتی مدل «BS12G3LI» محصولی از شرکت مطرح «آاگ» (AEG) است. این دریل پیچ‌گوشتی، شارژی است و انرژی موردنیاز خود را از طریق یک باتری 12 ولتی تامین می‌کند. این باتری از نوع لیتیوم-یون بوده و از ظرفیتی برابر با 1.5 آمپرساعت برخوردار است. حداکثر گشتاور این محصول 30 نیوتن متر است که برای انجام کارهای معمولی و روزمره، گزینه‌ای بسیار مناسب محسوب می‌شود.
                                </span>
                            </div>

                            <div class='w-full'>
                                <!-- image -->
                                <img src="{{asset('assets/img/pdp-inner-img.png')}}" alt="">
                            </div>

                            <div class=''>
                                <span class='font-bold text-(--primary_color)'>
                                    <!-- title -->
                                    دریل پیچ گوشتی چکشی شارژی آاگ مدل BSB 12C2
                                </span>
                            </div>

                            <div class='text-base text-(--discription)'>
                                <span>
                                    <!-- desciption -->
                                    دریل پیچ‌گوشتی مدل «BS12G3LI» محصولی از شرکت مطرح «آاگ» (AEG) است. این دریل پیچ‌گوشتی، شارژی است و انرژی موردنیاز خود را از طریق یک باتری 12 ولتی تامین می‌کند. این باتری از نوع لیتیوم-یون بوده و از ظرفیتی برابر با 1.5 آمپرساعت برخوردار است. حداکثر گشتاور این محصول 30 نیوتن متر است که برای انجام کارهای معمولی و روزمره، گزینه‌ای بسیار مناسب محسوب می‌شود.
                                </span>
                            </div>

                            <div class='flex md:flex-row flex-col gap-3 w-full'>

                                <div class='flex flex-col gap-3 md:w-7/12 w-full'>
                                    <div class=''>
                                        <span class='font-bold text-(--primary_color)'>
                                            <!-- title -->
                                            دریل پیچ گوشتی چکشی شارژی آاگ مدل BSB 12C2
                                        </span>
                                    </div>

                                    <div class='text-base text-(--discription)'>
                                        <span>
                                            <!-- desciption -->
                                            دریل پیچ‌گوشتی مدل «BS12G3LI» محصولی از شرکت مطرح «آاگ» (AEG) است. این دریل پیچ‌گوشتی، شارژی است و انرژی موردنیاز خود را از طریق یک باتری 12 ولتی تامین می‌کند. این باتری از نوع لیتیوم-یون بوده و از ظرفیتی برابر با 1.5 آمپرساعت برخوردار است. حداکثر گشتاور این محصول 30 نیوتن متر است که برای انجام کارهای معمولی و روزمره، گزینه‌ای بسیار مناسب محسوب می‌شود.
                                        </span>
                                    </div>

                                    <div class='text-base text-(--discription)'>
                                        <span>
                                            <!-- desciption -->
                                            دریل پیچ‌گوشتی مدل «BS12G3LI» محصولی از شرکت مطرح «آاگ» (AEG) است. این دریل پیچ‌گوشتی، شارژی است و انرژی موردنیاز خود را از طریق یک باتری 12 ولتی تامین می‌کند. این باتری از نوع لیتیوم-یون بوده و از ظرفیتی برابر با 1.5 آمپرساعت برخوردار است. حداکثر گشتاور این محصول 30 نیوتن متر است که برای انجام کارهای معمولی و روزمره، گزینه‌ای بسیار مناسب محسوب می‌شود.
                                        </span>
                                    </div>
                                </div>
                                <div class='md:w-5/12 w-full flex justify-center items-center '>
                                    <img src="{{asset('assets/img/pdp-inner-img2.png')}}" alt="">
                                </div>
                            </div>

                        </div>

                        <div class='flex flex-col gap-3'>

                            <div class='border-r-4 border-(--primary_color)  pr-4 text-2xl' id="section_specifications">
                                <span class='font-bold text-(--title)'> مشخصات محصول </span>
                            </div>

                            <div class='flex flex-col w-full gap-3 text-base mt-4'>
                                <?php
                                    $cunt=0;
                                ?>
                                @foreach($attributes as $key_att => $array_att)
                                    <?php
                                        $cunt++;
                                    ?>
                                    @if($cunt%2==0)
                                        <div class='w-full  flex sm:flex-row flex-col  sm:gap-3 gap-2'>
                                            <div class='flex'>
                                                <div class=' md:py-4 py-2  md:px-6 px-4  bg-[#F7F7F7] rounded-xl sm:text-center text-nowrap lg:text-base md:text-sm text-[13px]'>
                                                    <!-- att_key -->
                                                    <span> {{$key_att}}</span>
                                                </div>
                                            </div>
                                            <!-- <div class='sm:hidden flex'>    
                                                        <div class=' p-4 bg-[#f7f7f7] text-[#43454D80] rounded-xl text-nowrap lg:text-md text-xs sm:mr-0 mr-5'>
                                                            att_value
                                                            <span> ساخت کشور آلمان ساخت سری قدیم </span>
                                                        </div>
                                                    </div> -->
                                            <div class='w-full flex md:p-4 p-2  bg-[#f7f7f7] text-[#43454D80] rounded-xl text-nowrap items-center lg:text-md text-xs sm:mr-0 mr-5'>
                                                <!-- att_value -->
                                                @foreach($array_att as $att)
                                                    <span>  {{$att}} @if(count($array_att)>1)‌ ‌/‌ ‌@endif </span>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                    @if($cunt%2==1)
                                        <div class='flex sm:flex-row flex-col gap-3'>
                                            <div class='flex'>
                                                <div class=' md:py-4 py-2  md:px-6 px-4  bg-[#d2d2d28a] rounded-xl sm:text-center text-nowrap lg:text-base md:text-sm text-[13px]'>
                                                    <!-- att_key -->
                                                    <span> {{$key_att}}</span>
                                                </div>
                                            </div>

                                            <!-- <div class=' sm:hidden flex'>    
                                                        <div class=' p-4 bg-[#d2d2d28a] text-[#43454D80] rounded-xl text-nowrap lg:text-md text-xs sm:mr-0 mr-5'>
                                                            att_value
                                                            <span> ساخت کشور آلمان ساخت سری قدیم </span>
                                                        </div>
                                                    </div> -->
                                            <div class='w-full flex md:p-4 p-2  bg-[#d2d2d28a] text-[#43454D80] rounded-xl text-nowrap itesm-center lg:text-md text-xs sm:mr-0 mr-5'>
                                                <!-- att_value -->
                                                @foreach($array_att as $att)
                                                    <span>  {{$att}} @if(count($array_att)>1)‌ ‌‌‌/‌ ‌@endif </span>
                                                @endforeach
                                            </div>

                                        </div>
                                    @endif
                                @endforeach
                            </div>


                        <div class=' w-full lg:hidden flex items-center text-center justify-center mt-5'>
                            <div class='flex justify-center items-center text-center bg-[#d2d2d28a] gap-3 rounded-full py-2 px-5'>
                                <span class='text-xs '> مشاهده همه مشخصات </span>
                                <svg class='size-3' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!-- -->
                                    <path d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z" />
                                </svg>
                            </div>
                        </div>

                        <div class=' w-full lg:flex hidden text-start mt-5'>
                            <div class='flex  items-center text-start gap-3 '>
                                <span class='text-xs text-(--primary_color)'> مشاهده بیشتر </span>
                                <svg class='size-3 fill-(--primary_color)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!-- -->
                                    <path d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z" />
                                </svg>
                            </div>
                        </div>


                        <div class='flex border-r-4 border-(--primary_color) pr-4 text-2xl gap-5 items-center text-center' id="section_comments">
                            <span class='font-bold text-(--title)'> دیدگاه کاربران </span>
                            <span class='text-sm text-(--secondary-text)'> برای این محصول 1 دیدگاهدیدگاه ثبت شده </span>
                        </div>

                        <div class='w-full mt-3 flex lg:flex-col gap-2 overflow-x-scroll' style="scrollbar-width:none;">
                            @for($i=0;$i<5;$i++)

                                <div class='w-full hidden lg:flex flex-col gap-6 border-t-1 border-(--border) pt-10 '>
                                <div class='flex justify-between items-center '>
                                    <div class='flex items-center text-center gap-2'>
                                        <div class='size-10 rounded-full'> <img src="{{asset('assets/img/person.png')}}" alt=""> </div>
                                        <span class='md:text-sm text-xs text-(--secondary-text)'> مصطفی کلانتری فرد </span>
                                        <span class='h-4 bg-(--metod-text) w-[2px]'></span>
                                        <span class='md:text-sm text-xs text-(--secondary-text) '> 13 بهمن 1404 </span>
                                    </div>
                                    <div class='flex gap-2 '>
                                        <div class='flex gap-1 items-center '>
                                            <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            </svg>
                                            <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            </svg>
                                            <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            </svg>
                                            <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            </svg>
                                            <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            </svg>
                                        </div>
                                        <div class='flex gap-1 items-center text-center'>
                                            <span class='text-sm text-(--secondary-text)'> ( 0 ) </span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.40475 14.6977L11.6004 21.9447C11.8897 22.4444 12.4239 22.7514 13.0012 22.75C14.778 22.7493 16.1478 21.1841 15.9129 19.4228L15.3567 15.2523H17.7236C18.5366 15.2523 19.1959 15.2523 19.7236 15.2061C20.2651 15.1587 20.7517 15.0574 21.1855 14.8015C21.8557 14.4062 22.3618 13.7836 22.6118 13.0468C22.7737 12.5698 22.7733 12.0728 22.7091 11.533C22.6465 11.007 22.5118 10.3617 22.3456 9.56583L21.6587 6.27532C21.4979 5.50496 21.3688 4.88651 21.2257 4.38844C21.0783 3.87519 20.903 3.43961 20.6257 3.04742C20.1763 2.41175 19.561 1.91172 18.8468 1.6019C18.4062 1.41073 17.944 1.32823 17.4114 1.28896C16.8946 1.25084 16.2629 1.25099 15.4759 1.25119L14.7116 1.25136C13.3636 1.25166 12.6111 1.25182 11.8696 1.35575C11.2113 1.44802 10.563 1.60114 9.93305 1.81315C9.28427 2.03148 8.66609 2.33149 7.64352 2.84202C7.61033 2.71936 7.56562 2.59795 7.50477 2.47852C7.28905 2.05516 6.94485 1.71095 6.52148 1.49524C6.2377 1.35064 5.94278 1.29715 5.64627 1.27293C5.36535 1.24997 5.02428 1.24999 4.62893 1.25H4.37108C3.97572 1.24999 3.63466 1.24997 3.35373 1.27293C3.05722 1.29715 2.76231 1.35064 2.47852 1.49524C2.05516 1.71095 1.71095 2.05516 1.49524 2.47852C1.35064 2.76231 1.29715 3.05722 1.27293 3.35373C1.24998 3.63465 1.24999 3.97572 1.25 4.37106V12.6289C1.24999 13.0243 1.24998 13.3653 1.27293 13.6463C1.29715 13.9428 1.35064 14.2377 1.49524 14.5215C1.71095 14.9448 2.05516 15.289 2.47852 15.5048C2.76231 15.6494 3.05722 15.7028 3.35373 15.7271C3.63466 15.75 3.97573 15.75 4.37109 15.75H4.62891C5.02427 15.75 5.36534 15.75 5.64627 15.7271C5.94278 15.7028 6.2377 15.6494 6.52148 15.5048C6.88445 15.3198 7.18923 15.0404 7.40475 14.6977ZM12.8985 21.1931C12.919 21.2284 12.9568 21.2501 12.9976 21.25L13 22V21.25C13.8701 21.25 14.5411 20.4836 14.4261 19.6211L13.7566 14.6015C13.728 14.3872 13.7933 14.171 13.9357 14.0083C14.0781 13.8456 14.2838 13.7523 14.5 13.7523H17.6887C18.5449 13.7523 19.1383 13.7516 19.5927 13.7118C20.0408 13.6726 20.2694 13.6004 20.4234 13.5096C20.7842 13.2967 21.0567 12.9614 21.1914 12.5647C21.2488 12.3954 21.2727 12.1569 21.2196 11.7102C21.1657 11.2573 21.0451 10.6763 20.8701 9.83815L20.1962 6.61006C20.0282 5.80502 19.9099 5.241 19.784 4.80248C19.6607 4.37305 19.5433 4.1147 19.4009 3.91331C19.1101 3.502 18.7119 3.17845 18.2498 2.97797C18.0236 2.87982 17.7467 2.81776 17.3011 2.7849C16.8461 2.75134 16.2698 2.751 15.4474 2.75119L14.7753 2.75135C13.3473 2.75169 12.7038 2.75349 12.0778 2.84123C11.5114 2.92062 10.9536 3.05238 10.4115 3.2348C9.81242 3.43641 9.23605 3.72274 7.95886 4.36133L7.75 4.46577V12.3003L12.8985 21.1931ZM6.25 12.5032V12.6C6.25 13.0324 6.24942 13.3116 6.23206 13.5241C6.21541 13.7279 6.18715 13.8034 6.16826 13.8405C6.09635 13.9816 5.98162 14.0963 5.84049 14.1683C5.80341 14.1871 5.72787 14.2154 5.52413 14.2321C5.31162 14.2494 5.03242 14.25 4.6 14.25H4.4C3.96759 14.25 3.68838 14.2494 3.47588 14.2321C3.27213 14.2154 3.19659 14.1871 3.15951 14.1683C3.01839 14.0963 2.90365 13.9816 2.83175 13.8405C2.81285 13.8034 2.78459 13.7279 2.76795 13.5241C2.75059 13.3116 2.75 13.0324 2.75 12.6V4.4C2.75 3.96759 2.75059 3.68838 2.76795 3.47588C2.78459 3.27213 2.81285 3.19659 2.83175 3.15951C2.90365 3.01839 3.01839 2.90365 3.15951 2.83175C3.19659 2.81285 3.27213 2.78459 3.47588 2.76795C3.68838 2.75058 3.96759 2.75 4.4 2.75H4.6C5.03242 2.75 5.31162 2.75058 5.52413 2.76795C5.72787 2.78459 5.80341 2.81285 5.84049 2.83175C5.98162 2.90365 6.09635 3.01839 6.16826 3.15951C6.18715 3.19659 6.21541 3.27213 6.23206 3.47588C6.24897 3.68292 6.24996 3.95328 6.25 4.36697V12.5017C6.25 12.5022 6.25 12.5027 6.25 12.5032Z" fill="var(--title)"></path>
                                            </svg>
                                        </div>
                                        <div class='flex gap-1 items-center text-center'>
                                            <span class='text-sm text-(--secondary-text)'> ( 0 ) </span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.40475 9.30427L11.6004 2.05728C11.8897 1.55766 12.4237 1.25061 13.001 1.25196C14.7775 1.25166 16.1478 2.81637 15.913 4.57754L15.3566 8.74964H17.7236C18.5366 8.74963 19.1959 8.74962 19.7236 8.79585C20.2651 8.84328 20.7517 8.9445 21.1855 9.20043C21.8557 9.59576 22.3618 10.2184 22.6118 10.9552C22.7737 11.4322 22.7733 11.9292 22.7091 12.469C22.6465 12.9949 22.5118 13.6403 22.3456 14.4361L21.6587 17.7266C21.4979 18.497 21.3688 19.1154 21.2257 19.6135C21.0783 20.1268 20.903 20.5623 20.6257 20.9545C20.1763 21.5902 19.561 22.0902 18.8468 22.4001C18.4062 22.5912 17.944 22.6737 17.4114 22.713C16.8946 22.7511 16.2629 22.751 15.4759 22.7508L14.7116 22.7506C13.3636 22.7503 12.6111 22.7501 11.8696 22.6462C11.2113 22.5539 10.563 22.4008 9.93305 22.1888C9.28427 21.9705 8.66609 21.6705 7.64352 21.1599C7.61033 21.2826 7.56562 21.404 7.50477 21.5234C7.28905 21.9468 6.94485 22.291 6.52148 22.5067C6.2377 22.6513 5.94278 22.7048 5.64627 22.729C5.36535 22.752 5.02428 22.752 4.62893 22.752H4.37108C3.97572 22.752 3.63466 22.752 3.35373 22.729C3.05722 22.7048 2.76231 22.6513 2.47852 22.5067C2.05516 22.291 1.71095 21.9468 1.49524 21.5234C1.35064 21.2396 1.29715 20.9447 1.27293 20.6482C1.24998 20.3673 1.24999 20.0262 1.25 19.6309V11.373C1.24999 10.9777 1.24998 10.6366 1.27293 10.3557C1.29715 10.0592 1.35064 9.76426 1.49524 9.48048C1.71095 9.05711 2.05516 8.7129 2.47852 8.49719C2.76231 8.35259 3.05722 8.29911 3.35373 8.27488C3.63466 8.25193 3.97573 8.25194 4.37109 8.25195H4.62891C5.02427 8.25194 5.36534 8.25193 5.64627 8.27488C5.94278 8.29911 6.2377 8.35259 6.52148 8.49719C6.88445 8.68213 7.18923 8.96152 7.40475 9.30427ZM12.8985 2.80884C12.919 2.77352 12.9568 2.75182 12.9976 2.75195L13 2.00196L13.0005 2.75196C13.8702 2.7514 14.5411 3.51724 14.4261 4.37928L13.7566 9.40051C13.728 9.61481 13.7933 9.83101 13.9357 9.99368C14.0781 10.1563 14.2838 10.2496 14.5 10.2496H17.6887C18.5449 10.2496 19.1383 10.2503 19.5927 10.2901C20.0408 10.3294 20.2694 10.4015 20.4234 10.4924C20.7842 10.7052 21.0567 11.0405 21.1914 11.4372C21.2488 11.6065 21.2727 11.8451 21.2196 12.2917C21.1657 12.7447 21.0451 13.3257 20.8701 14.1638L20.1962 17.3919C20.0282 18.1969 19.9099 18.761 19.784 19.1995C19.6607 19.6289 19.5433 19.8873 19.4009 20.0886C19.1101 20.5 18.7119 20.8235 18.2498 21.024C18.0236 21.1221 17.7467 21.1842 17.3011 21.2171C16.8461 21.2506 16.2698 21.251 15.4474 21.2508L14.7753 21.2506C13.3473 21.2503 12.7038 21.2485 12.0778 21.1607C11.5114 21.0813 10.9536 20.9496 10.4115 20.7671C9.81242 20.5655 9.23605 20.2792 7.95886 19.6406L7.75 19.5362V11.7017L12.8985 2.80884ZM6.25 11.4988V11.402C6.25 10.9695 6.24942 10.6903 6.23206 10.4778C6.21541 10.2741 6.18715 10.1985 6.16826 10.1615C6.09635 10.0203 5.98162 9.9056 5.84049 9.8337C5.80341 9.81481 5.72787 9.78655 5.52413 9.7699C5.31162 9.75254 5.03242 9.75195 4.6 9.75195H4.4C3.96759 9.75195 3.68838 9.75254 3.47588 9.7699C3.27213 9.78655 3.19659 9.81481 3.15951 9.8337C3.01839 9.9056 2.90365 10.0203 2.83175 10.1615C2.81285 10.1985 2.78459 10.2741 2.76795 10.4778C2.75059 10.6903 2.75 10.9695 2.75 11.402V19.602C2.75 20.0344 2.75059 20.3136 2.76795 20.5261C2.78459 20.7298 2.81285 20.8054 2.83175 20.8424C2.90365 20.9836 3.01839 21.0983 3.15951 21.1702C3.19659 21.1891 3.27213 21.2174 3.47588 21.234C3.68838 21.2514 3.96759 21.252 4.4 21.252H4.6C5.03242 21.252 5.31162 21.2514 5.52413 21.234C5.72787 21.2174 5.80341 21.1891 5.84049 21.1702C5.98162 21.0983 6.09635 20.9836 6.16826 20.8424C6.18715 20.8054 6.21541 20.7298 6.23206 20.5261C6.24897 20.319 6.24996 20.0487 6.25 19.635V11.5002C6.25 11.4998 6.25 11.4993 6.25 11.4988Z" fill="var(--title)"></path>
                                            </svg>
                                        </div>
                                        <span class='h-6 bg-(--metod-text) w-[2px]'></span>
                                        <div class='flex items-center '>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 2.75C8.54822 2.75 5.75 5.54822 5.75 9V15C5.75 15.4142 5.41421 15.75 5 15.75C4.58579 15.75 4.25 15.4142 4.25 15V9C4.25 4.71979 7.71979 1.25 12 1.25C16.2802 1.25 19.75 4.71979 19.75 9V15C19.75 15.4142 19.4142 15.75 19 15.75C18.5858 15.75 18.25 15.4142 18.25 15V9C18.25 5.54822 15.4518 2.75 12 2.75Z" fill="var(--title)"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.25 19.25C1.25 18.1454 2.14543 17.25 3.25 17.25H20.75C21.8546 17.25 22.75 18.1454 22.75 19.25V20.75C22.75 21.8546 21.8546 22.75 20.75 22.75H3.25C2.14543 22.75 1.25 21.8546 1.25 20.75V19.25ZM3.25 18.75C2.97386 18.75 2.75 18.9739 2.75 19.25V20.75C2.75 21.0261 2.97386 21.25 3.25 21.25H20.75C21.0261 21.25 21.25 21.0261 21.25 20.75V19.25C21.25 18.9739 21.0261 18.75 20.75 18.75H3.25Z" fill="var(--title)"></path>
                                                <path d="M8.75 9C8.75 7.20507 10.2051 5.75 12 5.75C12.4142 5.75 12.75 5.41421 12.75 5C12.75 4.58579 12.4142 4.25 12 4.25C9.37665 4.25 7.25 6.37665 7.25 9C7.25 9.41421 7.58579 9.75 8 9.75C8.41421 9.75 8.75 9.41421 8.75 9Z" fill="var(--title)"></path>
                                                <path d="M22.624 2.08399C22.8538 2.42864 22.7606 2.89429 22.416 3.12406L20.916 4.12406C20.5713 4.35382 20.1057 4.26069 19.8759 3.91604C19.6462 3.5714 19.7393 3.10575 20.0839 2.87598L21.5839 1.87598C21.9286 1.64622 22.3942 1.73935 22.624 2.08399Z" fill="var(--title)"></path>
                                                <path d="M1.58402 3.12406C1.23937 2.89429 1.14624 2.42864 1.376 2.08399C1.60577 1.73935 2.07142 1.64622 2.41607 1.87598L3.91607 2.87598C4.26071 3.10575 4.35384 3.5714 4.12408 3.91604C3.89432 4.26069 3.42866 4.35382 3.08402 4.12406L1.58402 3.12406Z" fill="var(--title)"></path>
                                                <path d="M23.75 8C23.75 7.58579 23.4142 7.25 23 7.25H21.5C21.0858 7.25 20.75 7.58579 20.75 8C20.75 8.41421 21.0858 8.75 21.5 8.75H23C23.4142 8.75 23.75 8.41421 23.75 8Z" fill="var(--title)"></path>
                                                <path d="M1 7.25C0.585786 7.25 0.25 7.58579 0.25 8C0.25 8.41421 0.585786 8.75 1 8.75H2.5C2.91421 8.75 3.25 8.41421 3.25 8C3.25 7.58579 2.91421 7.25 2.5 7.25H1Z" fill="var(--title)"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class='w-full text-(--discription) md:text-base text-xs'>
                                    <span>
                                        خرید این محصول رو حتما بهتون پیشنهاد میکنم. من چند ماهی هست که خریدم و ازش راضی هستم.
                                    </span>
                                </div>
                                <div class='flex gap-1 items-center'>
                                    <svg class='fill-orange-300' width="24" height="24" class="inline ml-1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1309 19.0596H7.13086C6.72086 19.0596 6.38086 18.7196 6.38086 18.3096C6.38086 17.8996 6.72086 17.5596 7.13086 17.5596H15.1309C17.4709 17.5596 19.3809 15.6496 19.3809 13.3096C19.3809 10.9696 17.4709 9.05957 15.1309 9.05957H4.13086C3.72086 9.05957 3.38086 8.71957 3.38086 8.30957C3.38086 7.89957 3.72086 7.55957 4.13086 7.55957H15.1309C18.3009 7.55957 20.8809 10.1396 20.8809 13.3096C20.8809 16.4796 18.3009 19.0596 15.1309 19.0596Z" fill="#002080"></path>
                                        <path d="M6.43055 11.5599C6.24055 11.5599 6.05055 11.4899 5.90055 11.3399L3.34055 8.77988C3.05055 8.48988 3.05055 8.00988 3.34055 7.71988L5.90055 5.15988C6.19055 4.86988 6.67055 4.86988 6.96055 5.15988C7.25055 5.44988 7.25055 5.92988 6.96055 6.21988L4.93055 8.24988L6.96055 10.2799C7.25055 10.5699 7.25055 11.0499 6.96055 11.3399C6.82055 11.4899 6.62055 11.5599 6.43055 11.5599Z" fill="#002080"></path>
                                    </svg>
                                    <span class='text-(--secondary-text) text-xs'> ارسال پاسخ </span>
                                </div>
                        </div>

                        <div class='min-w-55 max-w-55 min-h-50 max-h-50 lg:hidden flex flex-col gap-2 rounded-xl border-(--border) border-3 p-2 justify-between'>
                            <div class='flex flex-col gap-3'>

                                <div class='w-full flex flex-col gap-2'>
                                    <div class='w-full flex items-center text-center'>
                                        <div class='w-full flex gap-2 items-center text-center'>
                                            <div class='size-10 rounded-full'> <img src="{{asset('assets/img/person.png')}}" alt=""></div>
                                            <span class='text-xs text-(--secondary-text) truncate ...'> مصطفی کلانتری فرد </span>
                                        </div>
                                        <div class='flex items-center ' title='گزارش کامنت'>
                                            <svg class='size-4' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 2.75C8.54822 2.75 5.75 5.54822 5.75 9V15C5.75 15.4142 5.41421 15.75 5 15.75C4.58579 15.75 4.25 15.4142 4.25 15V9C4.25 4.71979 7.71979 1.25 12 1.25C16.2802 1.25 19.75 4.71979 19.75 9V15C19.75 15.4142 19.4142 15.75 19 15.75C18.5858 15.75 18.25 15.4142 18.25 15V9C18.25 5.54822 15.4518 2.75 12 2.75Z" fill="var(--title)"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.25 19.25C1.25 18.1454 2.14543 17.25 3.25 17.25H20.75C21.8546 17.25 22.75 18.1454 22.75 19.25V20.75C22.75 21.8546 21.8546 22.75 20.75 22.75H3.25C2.14543 22.75 1.25 21.8546 1.25 20.75V19.25ZM3.25 18.75C2.97386 18.75 2.75 18.9739 2.75 19.25V20.75C2.75 21.0261 2.97386 21.25 3.25 21.25H20.75C21.0261 21.25 21.25 21.0261 21.25 20.75V19.25C21.25 18.9739 21.0261 18.75 20.75 18.75H3.25Z" fill="var(--title)"></path>
                                                <path d="M8.75 9C8.75 7.20507 10.2051 5.75 12 5.75C12.4142 5.75 12.75 5.41421 12.75 5C12.75 4.58579 12.4142 4.25 12 4.25C9.37665 4.25 7.25 6.37665 7.25 9C7.25 9.41421 7.58579 9.75 8 9.75C8.41421 9.75 8.75 9.41421 8.75 9Z" fill="var(--title)"></path>
                                                <path d="M22.624 2.08399C22.8538 2.42864 22.7606 2.89429 22.416 3.12406L20.916 4.12406C20.5713 4.35382 20.1057 4.26069 19.8759 3.91604C19.6462 3.5714 19.7393 3.10575 20.0839 2.87598L21.5839 1.87598C21.9286 1.64622 22.3942 1.73935 22.624 2.08399Z" fill="var(--title)"></path>
                                                <path d="M1.58402 3.12406C1.23937 2.89429 1.14624 2.42864 1.376 2.08399C1.60577 1.73935 2.07142 1.64622 2.41607 1.87598L3.91607 2.87598C4.26071 3.10575 4.35384 3.5714 4.12408 3.91604C3.89432 4.26069 3.42866 4.35382 3.08402 4.12406L1.58402 3.12406Z" fill="var(--title)"></path>
                                                <path d="M23.75 8C23.75 7.58579 23.4142 7.25 23 7.25H21.5C21.0858 7.25 20.75 7.58579 20.75 8C20.75 8.41421 21.0858 8.75 21.5 8.75H23C23.4142 8.75 23.75 8.41421 23.75 8Z" fill="var(--title)"></path>
                                                <path d="M1 7.25C0.585786 7.25 0.25 7.58579 0.25 8C0.25 8.41421 0.585786 8.75 1 8.75H2.5C2.91421 8.75 3.25 8.41421 3.25 8C3.25 7.58579 2.91421 7.25 2.5 7.25H1Z" fill="var(--title)"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class='flex gap-1 items-center '>
                                        <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        </svg>
                                        <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        </svg>
                                        <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        </svg>
                                        <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        </svg>
                                        <svg class=' size-4 fill-(--star)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- -->
                                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class='text-[9px] h-1/3 line-clamp-3'>
                                    خرید این محصول رو حتما بهتون پیشنهاد میکنم. من چند ماهی هست که خریدم و ازش راضی هستم. خرید این محصول رو حتما بهتون پیشنهاد میکنم. من چند ماهی هست که خریدم و ازش راضی هستم. خرید این محصول رو حتما بهتون پیشنهاد میکنم. من چند ماهی هست که خریدم و ازش راضی هستم. خرید این محصول رو حتما بهتون پیشنهاد میکنم. من چند ماهی هست که خریدم و ازش راضی هستم.
                                </p>
                            </div>

                            <div class='flex justify-between text-center items-center'>
                                <span class='text-[10px] text-(--secondary-text) '> 13 بهمن 1404 </span>
                                <div class='flex gap-2'>
                                    <div class='flex gap-1 items-center text-center'>
                                        <span class='text-sm text-(--secondary-text)'> ( 0 ) </span>
                                        <svg class='size-4' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.40475 14.6977L11.6004 21.9447C11.8897 22.4444 12.4239 22.7514 13.0012 22.75C14.778 22.7493 16.1478 21.1841 15.9129 19.4228L15.3567 15.2523H17.7236C18.5366 15.2523 19.1959 15.2523 19.7236 15.2061C20.2651 15.1587 20.7517 15.0574 21.1855 14.8015C21.8557 14.4062 22.3618 13.7836 22.6118 13.0468C22.7737 12.5698 22.7733 12.0728 22.7091 11.533C22.6465 11.007 22.5118 10.3617 22.3456 9.56583L21.6587 6.27532C21.4979 5.50496 21.3688 4.88651 21.2257 4.38844C21.0783 3.87519 20.903 3.43961 20.6257 3.04742C20.1763 2.41175 19.561 1.91172 18.8468 1.6019C18.4062 1.41073 17.944 1.32823 17.4114 1.28896C16.8946 1.25084 16.2629 1.25099 15.4759 1.25119L14.7116 1.25136C13.3636 1.25166 12.6111 1.25182 11.8696 1.35575C11.2113 1.44802 10.563 1.60114 9.93305 1.81315C9.28427 2.03148 8.66609 2.33149 7.64352 2.84202C7.61033 2.71936 7.56562 2.59795 7.50477 2.47852C7.28905 2.05516 6.94485 1.71095 6.52148 1.49524C6.2377 1.35064 5.94278 1.29715 5.64627 1.27293C5.36535 1.24997 5.02428 1.24999 4.62893 1.25H4.37108C3.97572 1.24999 3.63466 1.24997 3.35373 1.27293C3.05722 1.29715 2.76231 1.35064 2.47852 1.49524C2.05516 1.71095 1.71095 2.05516 1.49524 2.47852C1.35064 2.76231 1.29715 3.05722 1.27293 3.35373C1.24998 3.63465 1.24999 3.97572 1.25 4.37106V12.6289C1.24999 13.0243 1.24998 13.3653 1.27293 13.6463C1.29715 13.9428 1.35064 14.2377 1.49524 14.5215C1.71095 14.9448 2.05516 15.289 2.47852 15.5048C2.76231 15.6494 3.05722 15.7028 3.35373 15.7271C3.63466 15.75 3.97573 15.75 4.37109 15.75H4.62891C5.02427 15.75 5.36534 15.75 5.64627 15.7271C5.94278 15.7028 6.2377 15.6494 6.52148 15.5048C6.88445 15.3198 7.18923 15.0404 7.40475 14.6977ZM12.8985 21.1931C12.919 21.2284 12.9568 21.2501 12.9976 21.25L13 22V21.25C13.8701 21.25 14.5411 20.4836 14.4261 19.6211L13.7566 14.6015C13.728 14.3872 13.7933 14.171 13.9357 14.0083C14.0781 13.8456 14.2838 13.7523 14.5 13.7523H17.6887C18.5449 13.7523 19.1383 13.7516 19.5927 13.7118C20.0408 13.6726 20.2694 13.6004 20.4234 13.5096C20.7842 13.2967 21.0567 12.9614 21.1914 12.5647C21.2488 12.3954 21.2727 12.1569 21.2196 11.7102C21.1657 11.2573 21.0451 10.6763 20.8701 9.83815L20.1962 6.61006C20.0282 5.80502 19.9099 5.241 19.784 4.80248C19.6607 4.37305 19.5433 4.1147 19.4009 3.91331C19.1101 3.502 18.7119 3.17845 18.2498 2.97797C18.0236 2.87982 17.7467 2.81776 17.3011 2.7849C16.8461 2.75134 16.2698 2.751 15.4474 2.75119L14.7753 2.75135C13.3473 2.75169 12.7038 2.75349 12.0778 2.84123C11.5114 2.92062 10.9536 3.05238 10.4115 3.2348C9.81242 3.43641 9.23605 3.72274 7.95886 4.36133L7.75 4.46577V12.3003L12.8985 21.1931ZM6.25 12.5032V12.6C6.25 13.0324 6.24942 13.3116 6.23206 13.5241C6.21541 13.7279 6.18715 13.8034 6.16826 13.8405C6.09635 13.9816 5.98162 14.0963 5.84049 14.1683C5.80341 14.1871 5.72787 14.2154 5.52413 14.2321C5.31162 14.2494 5.03242 14.25 4.6 14.25H4.4C3.96759 14.25 3.68838 14.2494 3.47588 14.2321C3.27213 14.2154 3.19659 14.1871 3.15951 14.1683C3.01839 14.0963 2.90365 13.9816 2.83175 13.8405C2.81285 13.8034 2.78459 13.7279 2.76795 13.5241C2.75059 13.3116 2.75 13.0324 2.75 12.6V4.4C2.75 3.96759 2.75059 3.68838 2.76795 3.47588C2.78459 3.27213 2.81285 3.19659 2.83175 3.15951C2.90365 3.01839 3.01839 2.90365 3.15951 2.83175C3.19659 2.81285 3.27213 2.78459 3.47588 2.76795C3.68838 2.75058 3.96759 2.75 4.4 2.75H4.6C5.03242 2.75 5.31162 2.75058 5.52413 2.76795C5.72787 2.78459 5.80341 2.81285 5.84049 2.83175C5.98162 2.90365 6.09635 3.01839 6.16826 3.15951C6.18715 3.19659 6.21541 3.27213 6.23206 3.47588C6.24897 3.68292 6.24996 3.95328 6.25 4.36697V12.5017C6.25 12.5022 6.25 12.5027 6.25 12.5032Z" fill="var(--title)"></path>
                                        </svg>
                                    </div>
                                    <div class='flex gap-1 items-center text-center'>
                                        <span class='text-sm text-(--secondary-text)'> ( 0 ) </span>
                                        <svg class='size-4' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.40475 9.30427L11.6004 2.05728C11.8897 1.55766 12.4237 1.25061 13.001 1.25196C14.7775 1.25166 16.1478 2.81637 15.913 4.57754L15.3566 8.74964H17.7236C18.5366 8.74963 19.1959 8.74962 19.7236 8.79585C20.2651 8.84328 20.7517 8.9445 21.1855 9.20043C21.8557 9.59576 22.3618 10.2184 22.6118 10.9552C22.7737 11.4322 22.7733 11.9292 22.7091 12.469C22.6465 12.9949 22.5118 13.6403 22.3456 14.4361L21.6587 17.7266C21.4979 18.497 21.3688 19.1154 21.2257 19.6135C21.0783 20.1268 20.903 20.5623 20.6257 20.9545C20.1763 21.5902 19.561 22.0902 18.8468 22.4001C18.4062 22.5912 17.944 22.6737 17.4114 22.713C16.8946 22.7511 16.2629 22.751 15.4759 22.7508L14.7116 22.7506C13.3636 22.7503 12.6111 22.7501 11.8696 22.6462C11.2113 22.5539 10.563 22.4008 9.93305 22.1888C9.28427 21.9705 8.66609 21.6705 7.64352 21.1599C7.61033 21.2826 7.56562 21.404 7.50477 21.5234C7.28905 21.9468 6.94485 22.291 6.52148 22.5067C6.2377 22.6513 5.94278 22.7048 5.64627 22.729C5.36535 22.752 5.02428 22.752 4.62893 22.752H4.37108C3.97572 22.752 3.63466 22.752 3.35373 22.729C3.05722 22.7048 2.76231 22.6513 2.47852 22.5067C2.05516 22.291 1.71095 21.9468 1.49524 21.5234C1.35064 21.2396 1.29715 20.9447 1.27293 20.6482C1.24998 20.3673 1.24999 20.0262 1.25 19.6309V11.373C1.24999 10.9777 1.24998 10.6366 1.27293 10.3557C1.29715 10.0592 1.35064 9.76426 1.49524 9.48048C1.71095 9.05711 2.05516 8.7129 2.47852 8.49719C2.76231 8.35259 3.05722 8.29911 3.35373 8.27488C3.63466 8.25193 3.97573 8.25194 4.37109 8.25195H4.62891C5.02427 8.25194 5.36534 8.25193 5.64627 8.27488C5.94278 8.29911 6.2377 8.35259 6.52148 8.49719C6.88445 8.68213 7.18923 8.96152 7.40475 9.30427ZM12.8985 2.80884C12.919 2.77352 12.9568 2.75182 12.9976 2.75195L13 2.00196L13.0005 2.75196C13.8702 2.7514 14.5411 3.51724 14.4261 4.37928L13.7566 9.40051C13.728 9.61481 13.7933 9.83101 13.9357 9.99368C14.0781 10.1563 14.2838 10.2496 14.5 10.2496H17.6887C18.5449 10.2496 19.1383 10.2503 19.5927 10.2901C20.0408 10.3294 20.2694 10.4015 20.4234 10.4924C20.7842 10.7052 21.0567 11.0405 21.1914 11.4372C21.2488 11.6065 21.2727 11.8451 21.2196 12.2917C21.1657 12.7447 21.0451 13.3257 20.8701 14.1638L20.1962 17.3919C20.0282 18.1969 19.9099 18.761 19.784 19.1995C19.6607 19.6289 19.5433 19.8873 19.4009 20.0886C19.1101 20.5 18.7119 20.8235 18.2498 21.024C18.0236 21.1221 17.7467 21.1842 17.3011 21.2171C16.8461 21.2506 16.2698 21.251 15.4474 21.2508L14.7753 21.2506C13.3473 21.2503 12.7038 21.2485 12.0778 21.1607C11.5114 21.0813 10.9536 20.9496 10.4115 20.7671C9.81242 20.5655 9.23605 20.2792 7.95886 19.6406L7.75 19.5362V11.7017L12.8985 2.80884ZM6.25 11.4988V11.402C6.25 10.9695 6.24942 10.6903 6.23206 10.4778C6.21541 10.2741 6.18715 10.1985 6.16826 10.1615C6.09635 10.0203 5.98162 9.9056 5.84049 9.8337C5.80341 9.81481 5.72787 9.78655 5.52413 9.7699C5.31162 9.75254 5.03242 9.75195 4.6 9.75195H4.4C3.96759 9.75195 3.68838 9.75254 3.47588 9.7699C3.27213 9.78655 3.19659 9.81481 3.15951 9.8337C3.01839 9.9056 2.90365 10.0203 2.83175 10.1615C2.81285 10.1985 2.78459 10.2741 2.76795 10.4778C2.75059 10.6903 2.75 10.9695 2.75 11.402V19.602C2.75 20.0344 2.75059 20.3136 2.76795 20.5261C2.78459 20.7298 2.81285 20.8054 2.83175 20.8424C2.90365 20.9836 3.01839 21.0983 3.15951 21.1702C3.19659 21.1891 3.27213 21.2174 3.47588 21.234C3.68838 21.2514 3.96759 21.252 4.4 21.252H4.6C5.03242 21.252 5.31162 21.2514 5.52413 21.234C5.72787 21.2174 5.80341 21.1891 5.84049 21.1702C5.98162 21.0983 6.09635 20.9836 6.16826 20.8424C6.18715 20.8054 6.21541 20.7298 6.23206 20.5261C6.24897 20.319 6.24996 20.0487 6.25 19.635V11.5002C6.25 11.4998 6.25 11.4993 6.25 11.4988Z" fill="var(--title)"></path>
                                        </svg>
                                    </div>

                                </div>
                            </div>
                        </div>


                        @endfor
                    </div>
                    <div class='w-full bg-(--buttom) rounded-lg flex gap-1 items-center text-center justify-center py-6 px-2 my-2'>
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_184_35118)">
                                <path opacity="0.4" d="M11.5 0.75C5.56294 0.75 0.75 5.56294 0.75 11.5C0.75 13.5416 1.31985 15.4523 2.30949 17.0793L1.52746 19.2298C1.01963 20.6264 2.3736 21.9804 3.77015 21.4725L5.92072 20.6905C7.54768 21.6802 9.4584 22.25 11.5 22.25C12.4101 22.25 13.2948 22.1367 14.1404 21.9231C14.4058 21.8561 14.6137 21.6498 14.6826 21.3848C14.7515 21.1199 14.6706 20.8384 14.4715 20.6505C13.6632 19.8877 13.4625 18.5793 14.2491 17.5958L18.2452 12.5999C19.0096 11.6443 20.2184 11.5411 21.1289 12.0587C21.3621 12.1913 21.6484 12.1892 21.8797 12.0533C22.111 11.9173 22.252 11.6682 22.2495 11.3999C22.1957 5.50884 17.4036 0.75 11.5 0.75Z" fill="white"></path>
                                <path d="M7.5 10.25L15.5 10.25C15.9142 10.25 16.25 9.91421 16.25 9.5C16.25 9.08579 15.9142 8.75 15.5 8.75H7.5C7.08579 8.75 6.75 9.08579 6.75 9.5C6.75 9.91421 7.08579 10.25 7.5 10.25Z" fill="white"></path>
                                <path d="M7.5 14.25L12.5 14.25C12.9142 14.25 13.25 13.9142 13.25 13.5C13.25 13.0858 12.9142 12.75 12.5 12.75L7.5 12.75C7.08579 12.75 6.75 13.0858 6.75 13.5C6.75 13.9142 7.08579 14.25 7.5 14.25Z" fill="white"></path>
                                <path d="M19.22 13.3762C19.8101 12.6386 21.0009 13.055 21.0009 14.0007V17.0001H23.0009C23.8388 17.0001 24.3058 17.9693 23.7818 18.6243L19.7818 23.6237C19.1917 24.3613 18.0009 23.9449 18.0009 22.9992V19.9998H16.0009C15.163 19.9998 14.696 19.0306 15.22 18.3756L19.22 13.3762Z" fill="white"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_184_35118">
                                    <rect width="24" height="24" fill="white" transform="translate(0.5 0.5)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <span class='text-sm text-white '> دیدگاه خودرا بنویسید </span>
                    </div>
                    <form action='#' method='post' class='w-full flex flex-col gap-4'>
                        <span class='text-[9px] sm:text-sm lg:text-lg font-bold'> نشانی ایمیل شما منتشر نخواهد شد. بخش‌های موردنیاز علامت‌گذاری شده‌اند * </span>
                        <div class='flex flex-col gap-4'>
                            <div class='w-full flex lg:flex-row flex-col gap-2'>
                                <div class='w-full lg:w-1/2 flex gap-1 items-center bg-(--bg-input) rounded-xl p-2'>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.86327 17.6665C4.28742 14.7343 6.56246 12.3382 9.52369 12.1229C11.2156 11.9999 12.7894 11.9997 14.478 12.1222C17.4381 12.337 19.7114 14.733 20.1354 17.6639L20.2179 18.234C20.4622 19.9233 19.2861 21.5 17.5854 21.682C13.5937 22.1091 10.4184 22.1041 6.42084 21.6787C4.71739 21.4974 3.5374 19.9193 3.78212 18.2274L3.86327 17.6665Z" fill="#43454D"></path>
                                        <path opacity="0.4" d="M16.33 6.32099C16.33 8.7074 14.3911 10.642 11.9995 10.642C9.60778 10.642 7.66895 8.7074 7.66895 6.32099C7.66895 3.93457 9.60778 2 11.9995 2C14.3911 2 16.33 3.93457 16.33 6.32099Z" fill="#43454D"></path>
                                    </svg>
                                    <input name='name' type="text" class='outline-none w-full lg:p-4 sm:p-3 p-2' placeholder='نام و نام خانوادگی'>
                                </div>
                                <div class='w-full lg:w-1/2  flex gap-1 items-center bg-(--bg-input) rounded-xl p-2'>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.49994 4H18.4999C18.9644 4 19.1966 4 19.3915 4.02567C20.7377 4.2029 21.797 5.26222 21.9743 6.60842C21.9761 6.62229 21.9778 6.63634 21.9794 6.65065L12.4093 11.9189C12.2614 12.0002 12.1775 12.0461 12.1124 12.0772C12.0722 12.0964 12.0543 12.1024 12.0495 12.1038C12.0168 12.1104 11.9831 12.1104 11.9503 12.1038C11.9456 12.1024 11.9277 12.0964 11.8875 12.0772C11.8223 12.0461 11.7382 12.0001 11.5903 11.9188L2.02051 6.65066C2.02208 6.63634 2.02378 6.62229 2.0256 6.60842C2.20283 5.26222 3.26216 4.2029 4.60836 4.02567C4.80331 4 5.03552 4 5.49994 4Z" fill="#43454D"></path>
                                        <path opacity="0.4" d="M2 8.35157V15.2C2 16.8801 2 17.7202 2.32698 18.3619C2.6146 18.9264 3.07354 19.3854 3.63803 19.673C4.27976 20 5.11984 20 6.8 20H17.2C18.8802 20 19.7202 20 20.362 19.673C20.9265 19.3854 21.3854 18.9264 21.673 18.3619C22 17.7202 22 16.8801 22 15.2V8.35156L13.1328 13.2329L13.0767 13.2639C12.8533 13.3874 12.6145 13.5194 12.3496 13.5734C12.1189 13.6205 11.8811 13.6205 11.6504 13.5734C11.3855 13.5194 11.1467 13.3874 10.9233 13.2639L10.8675 13.2331L2 8.35157Z" fill="#43454D"></path>
                                    </svg>
                                    <input name='email' type="text" class='outline-none w-full lg:p-4 sm:p-3 p-2' placeholder='پست الکترونیک'>
                                </div>
                            </div>
                            <div class='w-full lg:h-50 h-30 flex gap-1 items-center bg-(--bg-input) rounded-xl p-2'>
                                <textarea name='description' class='resize-none outline-none w-full h-full p-4 overflow-y-auto text-top' placeholder=' متن دیدگاه خود را اینجا بنویسید '></textarea>
                            </div>
                        </div>
                        <div class='flex gap-1 items-center '>
                            <svg id='star5' onmouseenter="show_selected_star(5)" onmouseleave="show_selected_star(0)" onclick="set_star('5')" class="notActive w-5 h-5 cursor-pointer fill-none stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round" viewBox="0 0 24 24">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg id='star4' onmouseenter="show_selected_star(4)" onmouseleave="show_selected_star(0)" onclick="set_star('4')" class="notActive w-5 h-5 cursor-pointer fill-none stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round" viewBox="0 0 24 24">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg id='star3' onmouseenter="show_selected_star(3)" onmouseleave="show_selected_star(0)" onclick="set_star('3')" class="notActive w-5 h-5 cursor-pointer fill-none stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round" viewBox="0 0 24 24">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg id='star2' onmouseenter="show_selected_star(2)" onmouseleave="show_selected_star(0)" onclick="set_star('2')" class="notActive w-5 h-5 cursor-pointer fill-none stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round" viewBox="0 0 24 24">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg id='star1' onmouseenter="show_selected_star(1)" onmouseleave="show_selected_star(0)" onclick="set_star('1')" class="notActive w-5 h-5 cursor-pointer fill-none stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round" viewBox="0 0 24 24">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <div onclick="cancel()" class=''></div>
                        </div>
                        <div class='flex gap-1 items-center text-[9px] sm:text-xs lg:text-base'>
                            <input type="checkbox" name='saveData' value='1'>
                            <span class="text-(--discription)"> ذخیره نام، ایمیل و وبسایت من در مرورگر برای زمانی که دوباره دیدگاهی می‌نویسم. </span>
                        </div>
                        <button class='flex gap-2 items-center text-center justify-center lg:py-6 lg:px-4 md:py-5 md:px-3 py-3 px-2 bg-(--buttom) rounded-xl'>
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.6097 1.90273C21.7686 1.1702 23.83 3.23166 23.0975 5.39052L17.6475 21.4526C17.2828 22.5273 16.2741 23.2503 15.1392 23.2503C14.161 23.2503 13.2625 22.7111 12.8021 21.848L10.566 17.6553L15.8631 9.48332C16.0098 9.25702 15.7437 8.99088 15.5174 9.13754L7.34453 14.434L3.15224 12.1981C2.28913 11.7378 1.75 10.8392 1.75 9.86103C1.75 8.72619 2.47295 7.71745 3.54761 7.3528L19.6097 1.90273Z" fill="white"></path>
                            </svg>
                            <span class='font-bold text-white'> ارسال دیدگاه </span>
                        </button>

                    </form>


                    <!-- <div class='flex'>
                                <div class='w-3/12 p-4 bg-[#F7F7F7] rounded-xl text-center text-xs'> 
                                    att_key
                                    <span> سایر توضیحات </span>
                                </div>
                                <div class='w-9/12 p-4 bg-[#F7F7F7] text-[#43454D80] rounded-xl text-xs'>
                                    att_value
                                    <span> ساخت کشور آلمان ساخت سری قدیم </span>
                                </div>
                            </div> -->




                </div>




            </div>


            <div class='w-3/12  lg:block hidden '>

                <div class='w-full mt-5 sticky top-5 flex flex-col gap-4 border border-(--border) cart_shadow p-2 bg-white rounded-xl '>

                    <div class='flex flex-col text-center justify-center border-b-2 border-(--border) p-2 gap-1 text-sm items-center'>
                        <div class='h-30'>
                            <img class='w-30 h-ful rounded-lg object-cover' src="{{asset('storage/product_medias/'.$product->is_main)}}" alt="">
                        </div>
                        <span class='text-xs font-bold'> دریل پیچ گوشتی چکشی شارژی آاگ مدل BSB 12C2 </span>
                    </div>

                    <div class='flex flex-col gap-2 justify-between p-2 border-b-2 border-(--border) '>

                        <div class='w-full flex gap-2 text-center items-center'>
                            <span class='w-3/12 '>رنگ:</span>
                            <div class='w-6/12 h-full flex gap-3 justify-between overflow-x-auto items-center p-2' style="scrollbar-width:none;">
                                <div class='flex items-center justify-center cursor-pointer min-w-6 min-h-6 max-w-6 max-h-6 bg-blue-500/20 transition-shadow duration-300 rounded-full scale-110 shdow_color_product'>
                                    <div class='min-w-4 min-h-4 max-w-4 max-h-4 bg-blue-500 rounded-full' style='box-shadow:0px 0px 7px 0.1px  rgb(255,255,255,100)'></div>
                                </div>
                                <div class='flex items-center justify-center cursor-pointer min-w-6 min-h-6 max-w-6 max-h-6 bg-red-500/20 transition-shadow duration-300 rounded-full'>
                                    <div class='min-w-4 min-h-4 max-w-4 max-h-4 bg-red-500 rounded-full' style='box-shadow:0px 0px 7px 0.1px  rgb(255,255,255,100)'></div>
                                </div>
                                <div class='flex items-center justify-center cursor-pointer min-w-6 min-h-6 max-w-6 max-h-6 bg-(--star)/20 transition-shadow duration-300 rounded-full'>
                                    <div class='min-w-4 min-h-4 max-w-4 max-h-4 bg-(--star) rounded-full' style='box-shadow:0px 0px 7px 0.1px  rgb(255,255,255,100)'></div>
                                </div>
                                <div class='flex items-center justify-center cursor-pointer min-w-6 min-h-6 max-w-6 max-h-6 bg-green-500/20 transition-shadow duration-300 rounded-full'>
                                    <div class='min-w-4 min-h-4 max-w-4 max-h-4 bg-green-500 rounded-full' style='box-shadow:0px 0px 7px 0.1px  rgb(255,255,255,100)'></div>
                                </div>
                                <div class='flex items-center justify-center cursor-pointer min-w-6 min-h-6 max-w-6 max-h-6 bg-pink-900/20 transition-shadow duration-300 rounded-full'>
                                    <div class='min-w-4 min-h-4 max-w-4 max-h-4 bg-pink-900 rounded-full' style='box-shadow:0px 0px 7px 0.1px  rgb(255,255,255,100)'></div>
                                </div>
                                <div class='flex items-center justify-center cursor-pointer min-w-6 min-h-6 max-w-6 max-h-6 bg-black/20 transition-shadow duration-300 rounded-full'>
                                    <div class='min-w-4 min-h-4 max-w-4 max-h-4 bg-black rounded-full' style='box-shadow:0px 0px 7px 0.1px  rgb(255,255,255,100)'></div>
                                </div>

                            </div>
                            <span class='w-3/12 text-xs'> سیاه </span>
                        </div>
                        <div class='w-full flex gap-2 '>
                            <div class='quantity_selectors hidden justify-between'>
                                <div onclick="quantity_selector(this,'plus')" class='plus_quantities w-1/3 min-h-10 flex items-center border border-(--border) rounded-xl justify-center hover:bg-(--metod-text) hover:scale-95 transition-all duration-200'> <svg class='size-3 fill-black' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M488 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-208 0 0 208c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-208L24 280c-13.3 0-24-10.7-24-24s10.7-24 24-24H232l0-208c0-13.3 10.7-24 24-24s24 10.7 24 24l0 208 208 0z" />
                                    </svg> </div>
                                <input class='quantity_selector_inputs w-1/3 font-bold flex text-center items-center justify-center text-2xl outline-none' type="number" readonly name='quantiti_cart' value='1' min='1' max='30'>
                                <div onclick="trash()" class='trash_quantities w-1/3 min-h-10 flex items-center border border-(--border) rounded-xl justify-center hover:bg-(--metod-text) hover:scale-95 transition-all duration-200'> <svg class='size-5 fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                    </svg> </div>
                            </div>

                        </div>
                        <div class='w-full flex gap-2 text-center items-center '>
                            <div class='w-2/5 text-(--metod-text) flex justify-end'>
                                <span class='line-through font-bold text-lg'> {{number_format($product->discunt)}}  </span>
                                <span class='-rotate-90 text-xs'> تومان </span>
                            </div>
                            <span class='w-1/5 p-2 bg-(--primary_color) text-center rounded-xl text-white font-bold'> <span> {{$product->percent}} </span> </span>
                            <div class='w-2/5 text-(--primary_color) flex justify-end'>
                                <span class='font-bold text-lg'> {{number_format($product->price)}} </span>
                                <span class='-rotate-90 text-xs'> تومان </span>
                            </div>
                        </div>

                    </div>

                    <div class='w-full flex flex-col justify-between p-2 gap-2 bg-green-100'>
                        <div class='w-full flex' id="entry_cart_parent_div">
                            @if($user)
                                @if($flag)
                                    <div class='entry_cart_submit cursor-pointer w-full h-10 bg-yellow-200 hover:yellow-300 disable flex text-center items-center justify-center rounded-lg text-black text-[10px] px-2 py-3  hover:bg-(--buttom) hover:font-bold transition-all duration-200'> افزوده شده </div>
                                @else
                                    <div onclick='entry_cart(this)' class='entry_cart_submit cursor-pointer w-full h-10 bg-(--primary_color) flex text-center items-center justify-center rounded-lg text-white text-[10px] px-2 py-3  hover:bg-(--buttom) hover:font-bold transition-all duration-200'>افزودن به سبد خرید</div>
                                @endif
                            @else
                                <div onclick='showLoginForm()' class=' cursor-pointer w-full h-10 bg-(--primary_color) flex text-center items-center justify-center rounded-lg text-white text-[10px] px-2 py-3  hover:bg-(--buttom) hover:font-bold transition-all duration-200'>افزودن به سبد خرید</div>
                            @endif
                        </div>
                        <div class='w-full py-2 px-4 rounded-lg text-(--buttom) bg-[#74f7b5] flex text-[10px] items-center text-center justify-center'><span> آخرین بروزرسانی قیمت : ۰۱ بهمن ۱۴۰۴ </span></div>
                    </div>
                </div>

            </div>


        </div>



        </div>
        </div>

        <div class=" bg-white w-full z-1">
            <div class='relative w-11/12 mx-auto md:h-120 sm:h-105 bg-(--primary_color) rounded-xl'>
                <!-- <img class='md:block hidden w-full h-120' src="{{asset('assets/img/newest-products-bg.png')}}" alt=""> -->
                <!-- <img class='block md:hidden w-full sm:h-105 rounded-2xl' src="{{asset('assets/img/newest-products-bg-mobile2.png')}}" alt=""> -->
                <div class='hidden md:flex absolute text-md font-bold items-center text-center text-(--primary_color)  bottom-5 left-5 z-2'>
                    <a href="" class='text-base ml-4'> مشاهده همه </a>
                    <div class='w-3 h-[3px] rounded-xl bg-(--primary_color) ml-1'></div>
                    <svg class='size-6 fill-(--primary_color)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- -->
                        <path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z" />
                    </svg>
                </div>
                <img class='md:block hidden bottom-0 left-0 absolute w-60 z-1' src="{{asset('assets/img/newest-products-bottom-edge-bg.png')}}" alt="">
                <div class='sm:absolute w-full mx-auto md:top-22 top-5'>

                    <div class='max-w-11/12 mx-auto flex gap-6 overflow-x-scroll p-2' style="scrollbar-width:none;">

                        <div class='w-full sm:size-85 min-w-full md:min-w-57 md:h-75 border-(--border) border rounded-xl flex flex-col gap-4 p-2 bg-white duration-200 transition-all pro_shadow'>
                            <img class='h-1/2' src="{{asset('assets/img/product-image4.png')}}" alt="">
                            <div class='h-1/2 flex flex-col justify-between'>
                                <div class='w-full line-clamp-2 text-xs md:text-sm font-bold'>
                                    <p> دریل پیچ گوشتی چکشی شارژی آاگ مدل BSB 12C3 </p>
                                </div>
                                <div class='w-full mx-auto h-[1px] bg-(--metod-text) md:mb-0 -mb-8'></div>
                                <div class='w-full flex justify-between py-2'>
                                    <div class='flex gap-1 justify-center items-center '>
                                        <div class='border border-(--border) rounded-md bg-white p-[6px]'>
                                            <svg class='size-5 fill-none' viewBox="0 0 23 23" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.96393 5.91744H13.6154M7.30271 2.19629H15.2766C16.928 2.19629 18.2668 3.46251 18.2668 5.02447V20.5659C18.2668 20.7626 18.0272 20.8727 17.8637 20.7512L11.5976 16.0946C11.4168 15.9603 11.1625 15.9603 10.9817 16.0946L4.71563 20.7512C4.55214 20.8727 4.3125 20.7626 4.3125 20.5659V5.02447C4.3125 3.46251 5.65126 2.19629 7.30271 2.19629Z" stroke="var(--secondary-text)" stroke-width="1.39543" stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                        <div class='border border-(--border) rounded-md bg-(--primary_color)/30 p-[6px]'>
                                            <svg class='size-5 fill-none' viewBox="0 0 23 23" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.57951 5.22025H19.4076C20.2913 5.22025 20.9593 6.00873 20.8012 6.8653L19.6392 13.1618C19.3942 14.4888 18.221 15.4534 16.8519 15.4534H8.8324C7.46329 15.4534 6.2901 14.4888 6.04518 13.1618L4.57951 5.22025ZM4.57951 5.22025L4.12254 2.96932C4.11371 2.92583 4.07496 2.89453 4.02994 2.89453H2.21875M9.30103 8.47625H12.6061M10.2453 18.7094C10.2453 19.4801 9.61117 20.1048 8.82888 20.1048C8.04659 20.1048 7.41242 19.4801 7.41242 18.7094C7.41242 17.9387 8.04659 17.314 8.82888 17.314C9.61117 17.314 10.2453 17.9387 10.2453 18.7094ZM17.7998 18.7094C17.7998 19.4801 17.1656 20.1048 16.3833 20.1048C15.601 20.1048 14.9669 19.4801 14.9669 18.7094C14.9669 17.9387 15.601 17.314 16.3833 17.314C17.1656 17.314 17.7998 17.9387 17.7998 18.7094Z" stroke="var(--primary_color)" stroke-width="1.39543" stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class='flex flex-col gap-1 '>
                                        <div class='relative h-1/2 flex justify-center items-center'>
                                            <p class=' text-(--secondary-text)'> 1.000.000 </p>
                                            <div class='absolute left-auto right-auto top-auto bottom-auto w-10/12 mx-auto h-[1px] bg-(--secondary-text)'></div>
                                        </div>
                                        <div class='h-1/2 flex text-(--primary_color)'>
                                            <p class=''> 950.000 </p>
                                            <p class='text-xs rotate-260'> تومان </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class='w-full sm:size-85 min-w-full md:min-w-57 md:h-75 border-(--border) border rounded-xl flex flex-col gap-4 p-2 bg-white duration-200 transition-all pro_shadow'>
                            <img src="{{asset('assets/img/product-image4.png')}}" alt="">
                            <div class='h-1/2 flex flex-col justify-between'>
                                <div class='w-full line-clamp-2 text-xs md:text-sm font-bold'>
                                    <p> دریل پیچ گوشتی چکشی شارژی آاگ مدل BSB 12C3 </p>
                                </div>
                                <div class='w-full mx-auto h-[1px] bg-(--metod-text) md:mb-0 -mb-8'></div>
                                <div class='w-full flex justify-between py-2'>
                                    <div class='flex gap-1 justify-center items-center '>
                                        <div class='border border-(--border) rounded-md bg-white p-[6px]'>
                                            <svg class='size-5 fill-none' viewBox="0 0 23 23" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.96393 5.91744H13.6154M7.30271 2.19629H15.2766C16.928 2.19629 18.2668 3.46251 18.2668 5.02447V20.5659C18.2668 20.7626 18.0272 20.8727 17.8637 20.7512L11.5976 16.0946C11.4168 15.9603 11.1625 15.9603 10.9817 16.0946L4.71563 20.7512C4.55214 20.8727 4.3125 20.7626 4.3125 20.5659V5.02447C4.3125 3.46251 5.65126 2.19629 7.30271 2.19629Z" stroke="var(--secondary-text)" stroke-width="1.39543" stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                        <div class='border border-(--border) rounded-md bg-(--primary_color)/30 p-[6px]'>
                                            <svg class='size-5 fill-none' viewBox="0 0 23 23" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.57951 5.22025H19.4076C20.2913 5.22025 20.9593 6.00873 20.8012 6.8653L19.6392 13.1618C19.3942 14.4888 18.221 15.4534 16.8519 15.4534H8.8324C7.46329 15.4534 6.2901 14.4888 6.04518 13.1618L4.57951 5.22025ZM4.57951 5.22025L4.12254 2.96932C4.11371 2.92583 4.07496 2.89453 4.02994 2.89453H2.21875M9.30103 8.47625H12.6061M10.2453 18.7094C10.2453 19.4801 9.61117 20.1048 8.82888 20.1048C8.04659 20.1048 7.41242 19.4801 7.41242 18.7094C7.41242 17.9387 8.04659 17.314 8.82888 17.314C9.61117 17.314 10.2453 17.9387 10.2453 18.7094ZM17.7998 18.7094C17.7998 19.4801 17.1656 20.1048 16.3833 20.1048C15.601 20.1048 14.9669 19.4801 14.9669 18.7094C14.9669 17.9387 15.601 17.314 16.3833 17.314C17.1656 17.314 17.7998 17.9387 17.7998 18.7094Z" stroke="var(--primary_color)" stroke-width="1.39543" stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class='flex flex-col gap-1 '>
                                        <div class='relative h-1/2 flex justify-center items-center'>
                                            <p class=' text-(--secondary-text)'> 1.000.000 </p>
                                            <div class='absolute left-auto right-auto top-auto bottom-auto w-10/12 mx-auto h-[1px] bg-(--secondary-text)'></div>
                                        </div>
                                        <div class='h-1/2 flex text-(--primary_color)'>
                                            <p class=''> 950.000 </p>
                                            <p class='text-xs rotate-260'> تومان </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class='w-full sm:size-85 min-w-full md:min-w-57 md:h-75 border-(--border) border rounded-xl flex flex-col gap-4 p-2 bg-white duration-200 transition-all pro_shadow'>
                            <img src="{{asset('assets/img/product-image4.png')}}" alt="">
                            <div class='h-1/2 flex flex-col justify-between'>
                                <div class=' w-full line-clamp-2 text-sm font-bold'>
                                    <p> دریل پیچ گوشتی چکشی شارژی آاگ مدل BSB 12C3 </p>
                                </div>
                                <div class='w-full mx-auto h-[1px] bg-(--metod-text) '></div>
                                <div class='w-full flex justify-between py-2'>
                                    <div class='flex gap-1 justify-center items-center '>
                                        <div class='border border-(--border) rounded-md bg-white p-[6px]'>
                                            <svg class='size-5 fill-none' viewBox="0 0 23 23" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.96393 5.91744H13.6154M7.30271 2.19629H15.2766C16.928 2.19629 18.2668 3.46251 18.2668 5.02447V20.5659C18.2668 20.7626 18.0272 20.8727 17.8637 20.7512L11.5976 16.0946C11.4168 15.9603 11.1625 15.9603 10.9817 16.0946L4.71563 20.7512C4.55214 20.8727 4.3125 20.7626 4.3125 20.5659V5.02447C4.3125 3.46251 5.65126 2.19629 7.30271 2.19629Z" stroke="var(--secondary-text)" stroke-width="1.39543" stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                        <div class='border border-(--border) rounded-md bg-(--primary_color)/30 p-[6px]'>
                                            <svg class='size-5 fill-none' viewBox="0 0 23 23" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.57951 5.22025H19.4076C20.2913 5.22025 20.9593 6.00873 20.8012 6.8653L19.6392 13.1618C19.3942 14.4888 18.221 15.4534 16.8519 15.4534H8.8324C7.46329 15.4534 6.2901 14.4888 6.04518 13.1618L4.57951 5.22025ZM4.57951 5.22025L4.12254 2.96932C4.11371 2.92583 4.07496 2.89453 4.02994 2.89453H2.21875M9.30103 8.47625H12.6061M10.2453 18.7094C10.2453 19.4801 9.61117 20.1048 8.82888 20.1048C8.04659 20.1048 7.41242 19.4801 7.41242 18.7094C7.41242 17.9387 8.04659 17.314 8.82888 17.314C9.61117 17.314 10.2453 17.9387 10.2453 18.7094ZM17.7998 18.7094C17.7998 19.4801 17.1656 20.1048 16.3833 20.1048C15.601 20.1048 14.9669 19.4801 14.9669 18.7094C14.9669 17.9387 15.601 17.314 16.3833 17.314C17.1656 17.314 17.7998 17.9387 17.7998 18.7094Z" stroke="var(--primary_color)" stroke-width="1.39543" stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class='flex flex-col gap-1 '>
                                        <div class='relative h-1/2 flex justify-center items-center'>
                                            <p class=' text-(--secondary-text)'> 1.000.000 </p>
                                            <div class='absolute left-auto right-auto top-auto bottom-auto w-10/12 mx-auto h-[1px] bg-(--secondary-text)'></div>
                                        </div>
                                        <div class='h-1/2 flex text-(--primary_color)'>
                                            <p class=''> 950.000 </p>
                                            <p class='text-xs rotate-260'> تومان </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class='w-full sm:size-85 min-w-full md:min-w-57 md:h-75 border-(--border) border rounded-xl flex flex-col gap-4 p-2 bg-white duration-200 transition-all pro_shadow'>
                            <img src="{{asset('assets/img/product-image4.png')}}" alt="">
                            <div class='h-1/2 flex flex-col justify-between'>
                                <div class=' w-full line-clamp-2 text-sm font-bold'>
                                    <p> دریل پیچ گوشتی چکشی شارژی آاگ مدل BSB 12C3 </p>
                                </div>
                                <div class='w-full mx-auto h-[1px] bg-(--metod-text) '></div>
                                <div class='w-full flex justify-between py-2'>
                                    <div class='flex gap-1 justify-center items-center '>
                                        <div class='border border-(--border) rounded-md bg-white p-[6px]'>
                                            <svg class='size-5 fill-none' viewBox="0 0 23 23" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.96393 5.91744H13.6154M7.30271 2.19629H15.2766C16.928 2.19629 18.2668 3.46251 18.2668 5.02447V20.5659C18.2668 20.7626 18.0272 20.8727 17.8637 20.7512L11.5976 16.0946C11.4168 15.9603 11.1625 15.9603 10.9817 16.0946L4.71563 20.7512C4.55214 20.8727 4.3125 20.7626 4.3125 20.5659V5.02447C4.3125 3.46251 5.65126 2.19629 7.30271 2.19629Z" stroke="var(--secondary-text)" stroke-width="1.39543" stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                        <div class='border border-(--border) rounded-md bg-(--primary_color)/30 p-[6px]'>
                                            <svg class='size-5 fill-none' viewBox="0 0 23 23" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.57951 5.22025H19.4076C20.2913 5.22025 20.9593 6.00873 20.8012 6.8653L19.6392 13.1618C19.3942 14.4888 18.221 15.4534 16.8519 15.4534H8.8324C7.46329 15.4534 6.2901 14.4888 6.04518 13.1618L4.57951 5.22025ZM4.57951 5.22025L4.12254 2.96932C4.11371 2.92583 4.07496 2.89453 4.02994 2.89453H2.21875M9.30103 8.47625H12.6061M10.2453 18.7094C10.2453 19.4801 9.61117 20.1048 8.82888 20.1048C8.04659 20.1048 7.41242 19.4801 7.41242 18.7094C7.41242 17.9387 8.04659 17.314 8.82888 17.314C9.61117 17.314 10.2453 17.9387 10.2453 18.7094ZM17.7998 18.7094C17.7998 19.4801 17.1656 20.1048 16.3833 20.1048C15.601 20.1048 14.9669 19.4801 14.9669 18.7094C14.9669 17.9387 15.601 17.314 16.3833 17.314C17.1656 17.314 17.7998 17.9387 17.7998 18.7094Z" stroke="var(--primary_color)" stroke-width="1.39543" stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class='flex flex-col gap-1 '>
                                        <div class='relative h-1/2 flex justify-center items-center'>
                                            <p class=' text-(--secondary-text)'> 1.000.000 </p>
                                            <div class='absolute left-auto right-auto top-auto bottom-auto w-10/12 mx-auto h-[1px] bg-(--secondary-text)'></div>
                                        </div>
                                        <div class='h-1/2 flex text-(--primary_color)'>
                                            <p class=''> 950.000 </p>
                                            <p class='text-xs rotate-260'> تومان </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class='w-full sm:size-85 min-w-full md:min-w-57 md:h-75 border-(--border) border rounded-xl flex flex-col gap-4 p-2 bg-white duration-200 transition-all pro_shadow'>
                            <img src="{{asset('assets/img/product-image4.png')}}" alt="">
                            <div class='h-1/2 flex flex-col justify-between'>
                                <div class=' w-full line-clamp-2 text-sm font-bold'>
                                    <p> دریل پیچ گوشتی چکشی شارژی آاگ مدل BSB 12C3 </p>
                                </div>
                                <div class='w-full mx-auto h-[1px] bg-(--metod-text) '></div>
                                <div class='w-full flex justify-between py-2'>
                                    <div class='flex gap-1 justify-center items-center '>
                                        <div class='border border-(--border) rounded-md bg-white p-[6px]'>
                                            <svg class='size-5 fill-none' viewBox="0 0 23 23" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.96393 5.91744H13.6154M7.30271 2.19629H15.2766C16.928 2.19629 18.2668 3.46251 18.2668 5.02447V20.5659C18.2668 20.7626 18.0272 20.8727 17.8637 20.7512L11.5976 16.0946C11.4168 15.9603 11.1625 15.9603 10.9817 16.0946L4.71563 20.7512C4.55214 20.8727 4.3125 20.7626 4.3125 20.5659V5.02447C4.3125 3.46251 5.65126 2.19629 7.30271 2.19629Z" stroke="var(--secondary-text)" stroke-width="1.39543" stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                        <div class='border border-(--border) rounded-md bg-(--primary_color)/30 p-[6px]'>
                                            <svg class='size-5 fill-none' viewBox="0 0 23 23" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.57951 5.22025H19.4076C20.2913 5.22025 20.9593 6.00873 20.8012 6.8653L19.6392 13.1618C19.3942 14.4888 18.221 15.4534 16.8519 15.4534H8.8324C7.46329 15.4534 6.2901 14.4888 6.04518 13.1618L4.57951 5.22025ZM4.57951 5.22025L4.12254 2.96932C4.11371 2.92583 4.07496 2.89453 4.02994 2.89453H2.21875M9.30103 8.47625H12.6061M10.2453 18.7094C10.2453 19.4801 9.61117 20.1048 8.82888 20.1048C8.04659 20.1048 7.41242 19.4801 7.41242 18.7094C7.41242 17.9387 8.04659 17.314 8.82888 17.314C9.61117 17.314 10.2453 17.9387 10.2453 18.7094ZM17.7998 18.7094C17.7998 19.4801 17.1656 20.1048 16.3833 20.1048C15.601 20.1048 14.9669 19.4801 14.9669 18.7094C14.9669 17.9387 15.601 17.314 16.3833 17.314C17.1656 17.314 17.7998 17.9387 17.7998 18.7094Z" stroke="var(--primary_color)" stroke-width="1.39543" stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class='flex flex-col gap-1 '>
                                        <div class='relative h-1/2 flex justify-center items-center'>
                                            <p class=' text-(--secondary-text)'> 1.000.000 </p>
                                            <div class='absolute left-auto right-auto top-auto bottom-auto w-10/12 mx-auto h-[1px] bg-(--secondary-text)'></div>
                                        </div>
                                        <div class='h-1/2 flex text-(--primary_color)'>
                                            <p class=''> 950.000 </p>
                                            <p class='text-xs rotate-260'> تومان </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- scrollbar -->
                    <!-- <div class='w-4/12 mx-auto flex gap-2 mt-5'>
                        @for($i=0;$i<4;$i++)
                        <div class='md:w-1/7 h-[6px] bg-white rounded-xl'></div>
                        @endfor
                    </div> -->

                </div>

                <div class='md:flex hidden absolute text-md font-bold items-center text-center text-(--primary_color) gap-3 top-3 right-5 z-2'>
                    <div class='shadows h-8 w-1 bg-(--buttom) rounded-xl '></div>
                    <p class='text-xl ml-4'> کالا های مشابه این محصول </p>
                </div>
                <img class="md:block hidden absolute w-90 top-0 right-0 z-1" src="{{asset('assets/img/newest-products-top-edge-bg.png')}}" alt="">
            </div>

        </div>


        <div id="entry_cart_parent_div" class='md:hidden flex fixed bottom-0 right-0 w-full sm:h-18 h-15 p-3 bg-white justify-between text-center items-center rounded-t-xl border-t-3 border-[#11416f]'>
                @if($user)
                    @if($flag)
                        <div class='entry_cart_submit cursor-pointer w-8/12 h-10 bg-yellow-200 hover:yellow-300 disable flex text-center items-center justify-center rounded-lg text-black text-[10px] px-2 py-3  hover:bg-(--buttom) hover:font-bold transition-all duration-200'> افزوده شده </div>
                    @else
                        <div onclick="entry_cart(this)" class='entry_cart_submit w-8/12 h-full flex items-center text-center rounded-md justify-center bg-(--primary_color) cursor-pointer'><span class='text-sm text-white font-bold'> افزودن به سبد خرید </span></div>
                    @endif
                @else
                    <div onclick='showLoginForm()' class=' cursor-pointer w-8/12 h-10 bg-(--primary_color) flex text-center items-center justify-center rounded-lg text-white text-[10px] px-2 py-3  hover:bg-(--buttom) hover:font-bold transition-all duration-200'>افزودن به سبد خرید</div>
                @endif


            <div class='w-2/12 flex flex-col text-center items-end '>
                <div class=' p-1 items-center text-center flex gap-1'>
                    <div class='w-6 text-white bg-rose-500 flex items-center text-center justify-center rounded-full p-1'>
                        <span> {{$product->percent}} </span>
                        %
                    </div>
                    <div class='relative text-(--metod-text) flex items-center text-center'>
                        <span class='text-xs'>{{number_format($product->discunt)}}</span>
                        <div class='absolute w-full h-[1px]'></div>
                    </div>
                </div>
                <div class='flex gap-1 '>
                    <span class='text-black font-bold'>{{number_format($product->price)}} </span>
                    <span class='text-[7px]'> تومان </span>
                </div>
            </div>
        </div>

        <!-- changed by blue -->
        <!-- 
        <div class=" bg-white w-full z-1">
            <div class='relative w-11/12 mx-auto'>
                <img class='w-full ' src="{{asset('assets/img/newest-products-bg.png')}}" alt="">

                <div class="absolute bottom-0 left-0 w-100 h-45">
                    <div class='absolute bottom-10 left-1 z-5 text-xl font-bold text-(--primary_color) flex gap-3 '>
                        <p> مشابه این محصول </p>
                        <div class='w-1 h-5/6 bg-(--primary_color) cart_shadow shadow-(--primary_color)'></div>
                    </div>
                    <img class='z-4 bottom-0 left-0 relative object-cover w-full h-full' src="{{asset('assets/img/newest-products-bottom-edge-bg.png')}}" alt="">
                </div>
                <div class="absolute top-0 right-0 ">
                    <div class=' w-full text-(--primary_color)'>
                        <p class='text-base'> مشاهده همه </p>
                        <div class='w-2 rounded-xl bg-(--primary_color)'></div>
                        <svg class='size-4 fill-(--primary_color)' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M2.5 250.2C.9 251.7 0 253.8 0 256s.9 4.3 2.5 5.8l192 184c3.2 3.1 8.3 3 11.3-.2s2.9-8.3-.2-11.3L27.9 264 440 264c4.4 0 8-3.6 8-8s-3.6-8-8-8L27.9 248 205.5 77.8c3.2-3.1 3.3-8.1 .2-11.3s-8.1-3.3-11.3-.2l-192 184z"/></svg>
                    </div>
                    <img class='absolute w-full' src="{{asset('assets/img/newest-products-top-edge-bg-dark.png')}}" alt="">
                </div>
            </div>
            
        </div> -->


    </main>





    <script>
        // کد انیمیشن 
        `
            --animate-spin  spin 1s linear infinite;  

        `


        let main = document.getElementById('main')
        let quantity_selectors = document.querySelectorAll('.quantity_selectors')
        let entry_cart_submit = document.querySelectorAll('.entry_cart_submit')
        let quantity_selector_inputs = document.querySelectorAll('.quantity_selector_inputs')
        let plus_quantities = document.querySelectorAll('.plus_quantities')
        let minus_quantities = document.querySelectorAll('.minus_quantities')
        let trash_quantities = document.querySelectorAll('.trash_quantities')
        let like_icons = document.querySelectorAll('.like_icons')




        //   main_image=  main_image size-full w-full object-cover object-center
        //   mini image=  size-13 rounded-lg border border-(--border) object-cover    // onclick="changeImage(this)"


        let main_image_div = document.getElementById("main_image_div");
        let image_bar = document.getElementById("image_bar");
        let old_main_image = ''


        function changeImage(image) {
            image.classList = `main_image size-60 object-cover object-center`
            // image.gerAttribute('onclick').remove()
            old_main_image = main_image_div.children[0]
            old_main_image.classList = `size-13 rounded-lg border border-(--border) object-cover`
            old_main_image.setAttribute('onclick', 'changeImage(this)')
            main_image_div.children[0].remove()
            main_image_div.append(image)
            image_bar.append(old_main_image)
            // console.log(image);
        }


        let gallery_product_primary = document.querySelector('.gallery_product_primary')
        let gallery_product_item = document.querySelectorAll('.gallery_product_item')
        gallery_product_item.forEach((item) => {
            item.addEventListener('click', function() {
                let src_img_gallery = item.getAttribute('src')
                gallery_product_primary.setAttribute('src', src_img_gallery)
            })
        })





        let phoneNumber_signup='';
        let phoneNumber_signin='';
        let countDownSignup='';
        let signin_password='';
        let signup_password='';
        let login_state='';
        let phoneNumber='';
        let countDownLogin='';
        let loginForm='';
        let signupForm='';
        let currentPassword='';
        let body=document.querySelector('.body');


        
        function showLoginForm(){
            let div=document.createElement('div');
            let blackBackground=document.createElement('div');

            div.classList=`absolute top-40 left-20 bg-gray-400 text-white shadow-xl w-200 flex z-100`
            div.id='ajax_form'
            div.innerHTML=
            `

                <div class='size-5 bg-red-600 text-white flex items-center text-center justify-center' onclick="removeForm(this)">X</div>
                <!-- ==================== فرم ورود ==================== -->
                <div id="loginForm" class="form-card glass rounded-3xl p-6 md:p-8 w-full max-w-md mx-auto animate-slide-up visible transition-all duration-700">
                    <form action="{{route('user.signin_with_ajax')}}" method="post" class="flex flex-col gap-5">
                        @csrf
                        <input name="type" type='hidden' value="login">
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
                            <div class="relative group">
                                <div class="absolute right-3 top-1/2 -translate-y-1/2 text-blue-400/40 group-focus-within:text-blue-400 transition-colors duration-300">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                    </svg>
                                </div>
                                <input type="password" name="password" placeholder="رمز عبور" id="signin_password_or_code" data-format="password"
                                    class="input-medical w-full rounded-2xl py-3.5 pr-12 pl-4 text-white placeholder:text-white/35 outline-none transition-all duration-300">
                            </div>
                        </div>

                        <div onclick="change_login_state(this,'code')" class='text-cyan-600 font-bold text-sm cursor-pointer' id='login_state' > ورود با رمز یکبار مصرف </div>
                        
                        <!-- دکمه ورود -->
                        <div onclick='checkUser("signin")' class="btn-medical w-full rounded-2xl py-4 text-white font-bold text-lg tracking-wide mt-2 flex items-center justify-center gap-3 group">
                            <span>ورود به حساب</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"/><path d="M12 5l7 7-7 7"/>
                            </svg>
                        </div>

                        <div class='bg-white rounded-xl border-1 p-3 text-black text-center justify-center items-center cursor-pointer' onclick="changeForm('signup')"> change </div>
                    </form>
                </div>

                <!-- ==================== فرم ثبت نام ==================== -->
                <div id="signupForm" class="form-card glass rounded-3xl p-6 md:p-8 w-full max-w-md mx-auto hidden invisible transition-all duration-700">
                    <form action="{{route('user.signup_with_ajax')}}" method="post" class="flex flex-col gap-4">
                        @csrf
                        <input name="type" type='hidden' value="signup">
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
                        <div class="relative group" id="signup_password">
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
                                <input type="number" id="signup_code_input" data-format="code" name="code" oninput="limitDigits(this)" required placeholder="کد ورود " class="input-medical w-full rounded-2xl py-3.5 pr-12 pl-4 text-white placeholder:text-white/35 outline-none transition-all duration-300">
                            </div>

                        </div>

                        <!-- دکمه ثبت نام -->
                        <div onclick='checkUser("signup")' class="btn-medical btn-medical-success cursor-pointer w-full rounded-2xl py-4 text-white font-bold text-lg tracking-wide mt-1 flex items-center justify-center gap-3 group">
                            <span>ثبت نام</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"/><path d="M12 5l7 7-7 7"/>
                            </svg>
                        </div>

                        <div class='bg-white rounded-xl border-1 p-3 text-black text-center justify-center items-center cursor-pointer' onclick="changeForm('login')"> change </div>

                        <!-- پیام تکمیلی -->
                        <div class="text-center mt-1">
                            <p class="text-xs text-white/20">با ثبت نام، شرایط و قوانین سامانه را می‌پذیرید</p>
                        </div>
                    </form>
                </div>

            `
            body.appendChild(div)
        }
        function changeForm(state) {
            loginForm = document.getElementById('loginForm');
            signupForm = document.getElementById('signupForm');

            if (state === 'login') {
                loginForm.classList.add('visible');
                loginForm.classList.remove('hidden');

                signupForm.classList.remove('visible');
                signupForm.classList.add('hidden');
            } else {
                signupForm.classList.add('visible');
                signupForm.classList.remove('hidden');

                loginForm.classList.remove('visible');
                loginForm.classList.add('hidden');
            }
        }
        function change_login_state(el,string){
            phoneNumber_signup=document.getElementById('tell_signup');
            phoneNumber_signin=document.getElementById('tell_signin');
            countDownSignup=document.getElementById('countDownSignup');
            signin_password=document.getElementById('signin_password');
            signup_password=document.getElementById('signup_password');
            login_state=document.getElementById('login_state');
            countDownLogin=document.getElementById('countDownLogin');
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
                        <input id="signin_password_or_code" data-format="code" type="number" name="code" oninput="limitDigits(this)" required placeholder="کد ورود " class="input-medical w-full rounded-2xl py-3.5 pr-12 pl-4 text-white placeholder:text-white/35 outline-none transition-all duration-300">
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
                    <div class="relative group" id='signin_password'>
                        <div class="absolute right-3 top-1/2 -translate-y-1/2 text-blue-400/40 group-focus-within:text-blue-400 transition-colors duration-300">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </div>
                        <input type="password" name="password" placeholder="رمز عبور" id="signin_password_or_code" data-format="password"
                            class="input-medical w-full rounded-2xl py-3.5 pr-12 pl-4 text-white placeholder:text-white/35 outline-none transition-all duration-300">
                    </div>
                `
                el.innerHTML='ورورد با رمز یکبار مصرف '
                el.setAttribute('onclick',"change_login_state(this,'code')")

            }
        }
        function checkUser(state){
            console.log(state);
            let currentPhoneNumber=document.getElementById('tell_'+state);
            if(state=='signin'){
                currentPassword=document.getElementById('signin_password_or_code');
            }
            if(state=='signup'){
                currentPassword=document.getElementById('signup_code_input');
            }

            if(currentPhoneNumber.children[1].value.length>=11){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url:"{{route('user.checkUser')}}",
                    type:"post",
                    dataType:"json",
                    data:{
                        'phoneNumber':currentPhoneNumber.children[1].value,
                        'password_or_code':currentPassword.value,
                        'password_format':currentPassword.getAttribute('data-format'),
                        'state':state,
                    },
                    success:function(data){
                        let myForm='';
                        console.log(data)
                        if(data.state=='signin'){
                            if(data.exists){
                                if(data.confirmation){
                                    myForm=document.getElementById('loginForm').children[0];
                                    myForm.submit();
                                }else{
                                    alert('رمز نادرست میباشد ');
                                }
                            }else{
                                alert('کاربری با این شماره وجود ندارد نمیتوان ورود کرد');
                            }
                        }
                        if(data.state=='signup'){
                            if(!data.exists){
                                if(data.confirmation){
                                    myForm=document.getElementById('signupForm').children[0];
                                    myForm.submit();
                                }else{
                                    alert('رمز نادرست میباشد ');
                                }
                            }else{
                                alert('کاربری با این شماره وجود دارد نمیتوان ثبت نام کرد');
                            }
                        }
                    },
                    error:function(){
                        alert('کد ارسال نشد بعدا امتحان کنید');
                    }
                })
            }else{
                alert("شماره تلفن خود را به درستی وارد کنید");
            }
            console.log(currentPhoneNumber);
        }
        function sendCodeSignup(state){
            phoneNumber_signup=document.getElementById('tell_signup');
            phoneNumber_signin=document.getElementById('tell_signin');
            countDownSignup=document.getElementById('countDownSignup');
            signin_password=document.getElementById('signin_password');
            signup_password=document.getElementById('signup_password');
            login_state=document.getElementById('login_state');
            countDownLogin=document.getElementById('countDownLogin');
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
            phoneNumber_signup=document.getElementById('tell_signup');
            phoneNumber_signin=document.getElementById('tell_signin');
            countDownSignup=document.getElementById('countDownSignup');
            signin_password=document.getElementById('signin_password');
            signup_password=document.getElementById('signup_password');
            login_state=document.getElementById('login_state');
            countDownLogin=document.getElementById('countDownLogin');
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
            phoneNumber_signup=document.getElementById('tell_signup');
            phoneNumber_signin=document.getElementById('tell_signin');
            countDownSignup=document.getElementById('countDownSignup');
            signin_password=document.getElementById('signin_password');
            signup_password=document.getElementById('signup_password');
            login_state=document.getElementById('login_state');
            countDownLogin=document.getElementById('countDownLogin');
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
            phoneNumber_signup=document.getElementById('tell_signup');
            phoneNumber_signin=document.getElementById('tell_signin');
            countDownSignup=document.getElementById('countDownSignup');
            signin_password=document.getElementById('signin_password');
            signup_password=document.getElementById('signup_password');
            login_state=document.getElementById('login_state');
            countDownLogin=document.getElementById('countDownLogin');
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
        function removeForm(){
            document.getElementById('ajax_form').remove();
        }











        // let user_id="{{Auth::id()}}";
        // let product_id="{{$product->id}}";
        // let link="{{route('user.loginPage')}}";
        // let check="{{Auth::check()}}";



        // function entry_cart(el) {
        //     entry_cart_submit.forEach(entry => {
        //         entry.innerHTML =
        //         `
        //             <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
        //         `
        //     })
        //         if(check){
        //             $.ajaxSetup({
        //                 headers: {
        //                     'X-CSRF-TOKEN': "{{ csrf_token() }}"
        //                 }
        //             })
        //             $.ajax({
        //                 url: "{{route('cart.store')}}",
        //                 type: "post",
        //                 dataType: "json",
        //                 data:{
        //                     'product_id':product_id,
        //                     'user_id':user_id,
        //                 },
        //                 success: function(data) {
        //                     cart_counter.innerHTML++
        //                     console.log(data.product.path);
        //                     entry_cart_submit.forEach(entry => {
        //                         entry.innerHTML='افزوده شد'
        //                         entry.setAttribute('disable',true)
        //                         entry.removeAttribute('onclick')
        //                         entry.classList.remove('bg-(--primary_color)');
        //                         entry.classList.remove('hover:bg-green-600');
        //                         entry.classList.add('bg-yellow-200');
        //                         entry.classList.add('hover:bg-yellow-300');
        //                         entry.classList.remove('text-white');
        //                         entry.classList.add('text-black');
                                
        //                         //  افزودن به سبد خرید  //
                                
                                
        //                     })

        //                     let div_image=document.createElement('div');
        //                     let div_text_and_counter=document.createElement('div');
        //                     let parent_div=document.createElement('div');
        //                     parent_div.classList=`parent_cart w-full flex justify-between border-2 gap-4`
        //                     div_image.classList=`w-1/5 p-2`
        //                     if(data.product.path!=null){
        //                         div_image.innerHTML = `<img class="w-full h-20 rounded-xl" src="{{ asset('storage/product_medias/`+data.product.path+`') }}" alt="">`;
        //                     }else{
        //                         div_image.innerHTML=`<div class="w-full h-20 rounded-xl"> 🖼 </div>`
        //                     }
        //                     div_text_and_counter.classList=`w-4/5 flex flex-col justify-evenly`;
        //                     div_text_and_counter.innerHTML=
        //                     `
        //                         <div class='w-4/5 flex flex-col justify-evenly '>
        //                             <div class='text-xl text-center items-center'>
        //                                 <span> ${data.product.title} </span>
        //                             </div>
        //                             <div class='flex gap-5 justify-between px-4'>
        //                                 <div class='grid grid-cols-3 w-20 border-1 overflow-hidden rounded-full items-center text-center'>
        //                                     <div onclick="updateCart(this,${data.cart.id},'plus')" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></div>
        //                                     <div class='p-2 text-center items-center flex justify-center '><input type="number" class='w-5 outline-none text-center items-center text-black' readonly value="${data.cart.quantity}"></div>
        //                                     <div onclick="trash(this,${data.cart.id},${data.product.id})" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg></div>
        //                                 </div>
                                        
        //                                 <div class='text-black text-xl'> ${data.product.price} </div>
        //                             </div>
        //                         </div>   
        //                     ` 

        //                     product_price=parseInt(data.product.price)
        //                     price=parseInt(total_price.value)
        //                     total_price.value= product_price + price;

        //                     parent_div.appendChild(div_image)
        //                     parent_div.appendChild(div_text_and_counter)
        //                     cart_list.appendChild(parent_div);
        //                     console.log(cart_list);
        //                 },
        //                 error: function() {
        //                     console.log('☢')
        //                 }
        //             })
        //         }else{
        //             location.assign(link)
        //         } 



        //     // });

        // }


        // let quantity=0;
        // let plus_icon='';
        // function updateCart(el,id,state) {

        //     quantity = el.parentElement.children[1].value;

        //     if (quantity < 30) {

        //         plus_icon=el.parentElement.children[0].innerHTML;
        //         el.parentElement.children[0].innerHTML =
        //         `
        //         <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>

        //         `;
        //         el.parentElement.children[0].setAttribute('disabled', true);
        //         el.parentElement.children[0].removeAttribute('onclick');

        //         el.parentElement.children[2].innerHTML =
        //         `
        //         <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>

        //         `;
        //         el.parentElement.children[2].setAttribute('disabled', true);
        //         el.parentElement.children[2].removeAttribute('onclick');

        //         if(state=='plus'){
        //             quantity++;
        //         }else{
        //             quantity--;
        //         }
        //         $.ajaxSetup({
        //             headers: {
        //                 'X-CSRF-TOKEN': "{{ csrf_token() }}"
        //             }
        //         })
        //         $.ajax({
        //             url: "{{url('cart/update/cart')}}"+"/"+id,
        //             type: "post",
        //             dataType:"json",
        //             data:{
        //                 'quantity':quantity,
        //             },
        //             success: function(data) {
        //                 el.parentElement.children[1].value = data.quantity
        //                 if(data.quantity==1){

        //                     //  تغییر دادن  اس وی جی علامت پلاس  //
                            
        //                     el.parentElement.children[0].removeAttribute('disabled');
        //                     el.parentElement.children[0].setAttribute('onclick',`updateCart(this,${data.cartId},'minus')`)
        //                     el.parentElement.children[0].innerHTML=plus_icon;


        //                     //  تغییر دادن  اس وی جی علامت سطل آشغال  //

        //                     el.parentElement.children[2].innerHTML =
        //                     `
        //                     <svg class='size-5 fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
        //                     `
        //                     el.parentElement.children[2].setAttribute('onclick',`trash(this,${data.cartId})`);
        //                     el.parentElement.children[2].removeAttribute('disabled');
        //                 }
        //                 if(data.quantity>1){
        //                     el.parentElement.children[2].removeAttribute('disabled');
        //                     el.parentElement.children[2].setAttribute('onclick',`updateCart(this,${data.cartId},'minus')`)
        //                     el.parentElement.children[2].innerHTML =
        //                     `
        //                         <svg class='size-3 fill-black' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 13.3-10.7 24-24 24L40 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l368 0c13.3 0 24 10.7 24 24z"/></svg>
        //                     `

        //                 }
        //             },
        //             error: function() {
        //                 console.log('☢')
        //             }
        //         })
        //     }

        // }


        // function trash(el,id) {
        //     let trash_icon='';
        //     // console.log(entry)
        //     trash_icon=el.parentElement.children[2].innerHTML;
        //     el.parentElement.children[2].innerHTML =
        //     `
        //         <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
        //     `
        //     $.ajax({
        //         url: "{{url('cart/delete/cart')}}"+"/" + id,
        //         type: "get",
        //         dataType: "json",
        //         success: function(data) {
        //             let product="{{$product}}";
        //             el.parentElement.classList.remove('flex')
        //             el.parentElement.classList.add('hidden')
        //             if(product!=null){
        //                 entry_cart_submit.forEach(entry => {
        //                     entry.setAttribute('onclick', 'entry_cart(this)');
        //                     entry.innerHTML = 'افزودن به سبد خرید'
        //                     entry.removeAttribute('disable')
        //                     entry.setAttribute('onclick','entry_cart(this)')
        //                     entry.classList.remove('bg-(--primary_color)');
        //                     entry.classList.remove('hover:bg-green-600');
        //                     entry.classList.remove('text-white');
        //                 });
        //             }
        //         },
        //         error: function() {
        //             console.log('☢')
        //         }
        //     })
        //         // console.log(entry)
        //     // el.parentElement.children[2].innerHTML =trash_icon
        // }






















        // function entry_cart(el) {
        //     entry_cart_submit.forEach(entry => {
        //         entry.innerHTML =
        //         `
        //             <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
        //         `
        //     })
        //         if(check){
        //             $.ajaxSetup({
        //                 headers: {
        //                     'X-CSRF-TOKEN': "{{ csrf_token() }}"
        //                 }
        //             })
        //             $.ajax({
        //                 url: "{{route('cart.store')}}",
        //                 type: "post",
        //                 dataType: "json",
        //                 data:{
        //                     'product_id':product_id,
        //                     'user_id':user_id,
        //                 },
        //                 success: function(cartId) {
        //                     console.log(cartId);
        //                     entry_cart_submit.forEach(entry => {
        //                         entry.classList.add('hidden');
        //                         quantity_selectors.forEach(quantity_selector => {
        //                             quantity_selector.classList.remove('hidden');
        //                             quantity_selector.classList.add('flex');
        //                             quantity_selector.classList.add('w-full');
        //                             quantity_selector.children[0].setAttribute('onclick',`quantity_selector(this,${cartId},'plus')`);
        //                             quantity_selector.children[2].setAttribute('onclick',`trash(${cartId})`);
        //                         });
        //                     })
        //                 },
        //                 error: function() {
        //                     console.log('☢')
        //                 }
        //             })
        //         }else{
        //             location.assign(link)
        //         } 



        //     // });

        // }


        // let flag = true
        // // let count = 0
        // let test = document.getElementById('test')
        // let quantity=0;
        // let plus_icon='';
        // function quantity_selector(el,id,state) {
        //     // let value=0;
        //     // count++
        //     quantity_selectors.forEach(quantity_selector => {
        //         plus_icon=quantity_selector.children[0].innerHTML;
        //         quantity_selector.children[0].innerHTML =
        //         `
        //         <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
                
        //         `;
        //         quantity_selector.children[0].setAttribute('disabled', true);

        //         quantity_selector.children[2].innerHTML =
        //         `
        //         <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
                
        //         `;
        //         quantity_selector.children[2].setAttribute('disabled', true);
        //         quantity = quantity_selector.children[1].value;
        //     })
        //     if (quantity < 30) {
        //         if(state=='plus'){
        //             quantity++;
        //         }else{
        //             quantity--;
        //         }
        //         $.ajaxSetup({
        //             headers: {
        //                 'X-CSRF-TOKEN': "{{ csrf_token() }}"
        //             }
        //         })
        //         $.ajax({
        //             url: "{{url('cart/update/cart')}}"+"/"+id,
        //             type: "post",
        //             dataType:"json",
        //             data:{
        //                 'quantity':quantity,
        //             },
        //             success: function(data) {
        //                 quantity_selectors.forEach(quantity_selector => {
        //                     quantity_selector.children[1].value = data.quantity
        //                     quantity_selector.children[0].innerHTML=plus_icon;
        //                     if(data.quantity==1){
        //                         quantity_selector.children[0].removeAttribute('disabled');
        //                         quantity_selector.children[2].innerHTML=
        //                         `
        //                             <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
                                
        //                         `;
        //                         quantity_selector.children[2].innerHTML =
        //                         `
        //                         <svg class='size-5 fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
        //                         `
        //                         // quantity_selector.children[2].removeAttribute('onclick');
        //                         quantity_selector.children[2].setAttribute('onclick',`trash(${data.cartId})`);
        //                         quantity_selector.children[2].removeAttribute('disabled');
        //                     }
        //                     if(data.quantity>1){
        //                         quantity_selector.children[2].removeAttribute('disabled');
        //                         quantity_selector.children[2].innerHTML=
        //                         `
        //                             <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
                                
        //                         `;
        //                         quantity_selector.children[2].setAttribute('onclick',`quantity_selector(this,${data.cartId},'minus')`)
        //                         quantity_selector.children[2].innerHTML =
        //                         `
        //                          <svg class='size-3 fill-black' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 13.3-10.7 24-24 24L40 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l368 0c13.3 0 24 10.7 24 24z"/></svg>
        //                         `
    
        //                     }
        //                 })
        //             },
        //             error: function() {
        //                 console.log('☢')
        //             }
        //         })
        //     }

        // }

        // function trash(id) {
        //     let trash_icon='';
        //     quantity_selectors.forEach(quantity_selector => {
        //         // console.log(entry)
        //         trash_icon=quantity_selector.children[2].innerHTML;
        //         quantity_selector.children[2].innerHTML =
        //         `
        //             <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>

        //         `
        //     });
        //     $.ajax({
        //         url: "{{url('cart/delete/cart')}}"+"/" + id,
        //         type: "get",
        //         dataType: "json",
        //         success: function(data) {
        //             quantity_selectors.forEach(quantity_selector => {
        //                 quantity_selector.classList.remove('flex')
        //                 quantity_selector.classList.add('hidden')
        //             });
        //             entry_cart_submit.forEach(entry => {
        //                 entry.classList.remove('hidden');
        //                 entry.classList.add('flex');
        //                 entry.setAttribute('onclick', 'entry_cart(this)');
        //                 entry.innerHTML = 'افزودن به سبد خرید'
        //             });
    
    
        //         },
        //         error: function() {
        //             console.log('☢')
        //         }
        //     })
        //     quantity_selectors.forEach(quantity_selector => {
        //         // console.log(entry)
        //         quantity_selector.children[2].innerHTML =trash_icon
        //     });
        // }














        // let entry_cart_mobile = document.querySelector('.entry_cart_mobile')
        // let quantity_selectors_mobile = document.querySelector('.quantity_selectors_mobile')
        // let quantity_selector_input = document.querySelector('.quantity_selector_input')
        // let plus_quantity = document.querySelector('.plus_quantity')
        // let minus_quantity = document.querySelector('.minus_quantity')
        // let trash_quantity = document.querySelector('.trash_quantity')


        // function entry_cart_mobile_function(el) {
        //     // console.log(entry_cart_mobile)
        //     entry_cart_mobile.innerHTML =
        //         `
        //         <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>

        //     `
        //     $.ajax({
        //         url: "{{url('cart/set/quantity/cart')}}/" + 1,
        //         type: "get",
        //         dataType: "json",
        //         success: function(data) {
        //             entry_cart_mobile.classList.remove('flex');
        //             entry_cart_mobile.classList.add('hidden');
        //             quantity_selectors_mobile.classList.remove('hidden')
        //             quantity_selectors_mobile.classList.add('flex')
        //         },
        //         error: function() {
        //             console.log('☢')
        //         }
        //     })





        // }

        // function trash_mobile() {
        //     entry_cart_mobile.innerHTML =
        //         `
        //             <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
        //         `
        //     $.ajax({
        //         url: "{{url('cart/set/quantity/cart')}}/" + 1,
        //         type: "get",
        //         dataType: "json",
        //         success: function(data) {
        //             quantity_selectors_mobile.classList.remove('flex')
        //             quantity_selectors_mobile.classList.add('hidden')

        //             entry_cart_mobile.classList.remove('hidden')
        //             entry_cart_mobile.classList.add('flex')
        //             entry_cart_mobile.innerHTML = `<span class='text-sm text-white font-bold'> افزودن به سبد خرید </span>`

        //         },
        //         error: function() {
        //             console.log('☢')
        //         }
        //     })
        // }

        // function quantity_selector_mobile(state) {
        //     let value = 0;
        //     if (state == 'plus') {
        //         if (quantity_selectors_mobile.children[2].children[0].classList.contains('fill-rose-600')) {
        //             quantity_selectors_mobile.children[2].remove()
        //             quantity_selectors_mobile.innerHTML +=
        //                 `
        //                    <div onclick="quantity_selector('minus')" class='minus_quantity w-3/12 min-h-8  flex items-center border border-(--border) rounded-xl justify-center hover:bg-(--metod-text) hover:scale-95 transition-all duration-200'> <svg class='size-3 fill-black' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 13.3-10.7 24-24 24L40 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l368 0c13.3 0 24 10.7 24 24z"/></svg> </div>
        //                 `
        //         }
        //         if (quantity_selectors_mobile.children[1].value < 30) {
        //             let value = quantity_selectors_mobile.children[1].value
        //             $.ajax({
        //                 url: "{{url('cart/set/quantity/cart')}}/" + 1,
        //                 type: "get",
        //                 success: function(quantity) {
        //                     value = quantity_selector_input.value + quantity
        //                     quantity_selector_input.value = value
        //                 },
        //                 error: function() {
        //                     console.log('☢')
        //                 }
        //             })
        //         }
        //     }
        //     if (state == 'minus') {
        //         if (quantity_selectors_mobile.children[1].value > 1) {
        //             $.ajax({
        //                 url: "{{url('cart/set/quantity/cart')}}/" + 1,
        //                 type: "get",
        //                 dataType: "json",
        //                 success: function(quantity) {
        //                     value = quantity_selector_input.getAttribute('value')
        //                     value--
        //                     quantity_selector_input.setAttribute('value', value)
        //                 },
        //                 error: function() {
        //                     console.log('☢')
        //                 }
        //             })

        //             if (quantity_selectors_mobile.children[1].value = 1) {
        //                 quantity_selectors_mobile.children[2].remove()
        //                 quantity_selectors_mobile.innerHTML +=
        //                     `
        //                     <div onclick="trash()" class='trash_quantities min-w-10 min-h-10 max-w-10 max-h-10  flex items-center border border-(--border) rounded-xl justify-center hover:bg-(--metod-text) hover:scale-95 transition-all duration-200'> <svg class='size-5 fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg> </div>
        //                     `
        //             }
        //         }

        //     }
        // }
















        // function quantity_selector(state){
        //     if(state == "plus"){
        //         count++
        //         console.log(count)
        //         test.value++
        //         console.log(test.value)
        //     }
        // }

        // let flag1=true;
        function set_favored() {
            // if(flag1){
            $.ajax({
                url: "{{url('cart/set/quantity/cart')}}/" + 1,
                type: "get",
                dataType: "json",
                success: function(data) {
                    like_icons.forEach(like_icon => {
                        // console.log(like_icon)
                        if (like_icon.classList.contains('fill-none')) {
                            like_icon.classList.remove('fill-none')
                            like_icon.classList.add('fill-rose-600')
                        } else {
                            like_icon.classList.remove('fill-rose-600')
                            like_icon.classList.add('fill-none')
                        }

                    });
                },
                error: function() {
                    console.log('☢')
                }
            })
            // flag1=false
            // }
        }


        let share_item = document.getElementById('share_item')

        function show_share_list(item) {

            // // ایجاد دیویژن ها
            // black_div = document.createElement('div')
            // social_medias_parent = document.createElement('div')
            // social_medias = document.createElement('div')
            // title = document.createElement('div')
            // hidden_botton = document.createElement('div')

            // // اتریبیوت دهی 
            // black_div.setAttribute('onclick', 'hidden_share_list()')
            // black_div.setAttribute('id', 'black_div')
            // social_medias_parent.setAttribute('id', 'social_medias_parent')
            // hidden_botton.setAttribute('onclick', 'hidden_share_list()')



            // //استایل دهی به آنها
            // black_div.classList =
            //     `
            //   fixed top-0 size-[100%] bg-black/70 flex justify_center items-center transition-all duration-500
            // `
            // social_medias_parent.classList =
            //     `
            //   social-icons fixed top-2/5 left-0 right-0 w-1/3 h-50 p-3 mx-auto bg-white flex flex-col transition-all duration-500 rounded-lg gap-3 -tems-center justify-evenly border border-(--border)
            // `
            // hidden_botton.classList =
            //     `
            //   absolute size-7 rounded-full bg-white -top-10 left-3 flex items-center text-2xl text-center justify-center cursor-pointer
            // `
            // hidden_botton.innerHTML =
            //     `
            //     <span>X</span> 
            // `
            // title.classList =
            //     `
            //   w-full flex text-center items-center gap-4 justify-center
            // `
            // title.innerHTML =
            //     `
            // <div class='shadows w-1 h-6 rounded-xl bg-(--primary_color)'></div>
            //   <span class='text-sm font-bold'> این محصول رو با دوستانت به اشتراک بزار: </span>
            // `
            // social_medias.classList =
            //     `
            //   w-full flex gap-4 justify-evenly
            // `
            // social_medias.innerHTML =
            //     `
            //     <a href="eitaa.ir" target="_blank">
            //         <img src="{{asset('assets/img/eitaa_logo.svg')}}" alt="Rubika" class='w-14'>
            //     </a>
            //     <a href="rubika.ir" target="_blank">
            //         <img src="{{asset('assets/img/rubika-icon.png')}}" alt="Rubika" class='w-14'>
            //     </a>
            //     <a href="rubika.ir" target="_blank">
            //         <img src="{{asset('assets/img/whatsapp.png')}}" alt="Rubika" class='w-14'>
            //     </a>
            //     <a href="instagram.com" target="_blank">
            //         <img src="{{asset('assets/img/instagram-farsgraphic.png')}}" alt="Rubika" class='w-14'>
            //     </a>
            //     <a href="telegram.com" target="_blank">
            //         <img src="{{asset('assets/img/telegram-farsgraphic.png')}}" alt="Rubika" class='w-14'>
            //     </a>
            // `

            // social_medias_parent.append(title)
            // social_medias_parent.append(social_medias)
            // social_medias_parent.append(hidden_botton)
            // // black_div.append(social_medias_parent)
            // main.append(black_div)
            // main.append(social_medias_parent)

            // console.log(main)

            console.log('lsflshf')
            if (item == 'open') {
                share_item.classList.remove('invisible')
                share_item.classList.remove('opacity-0')
            }
            if (item == 'close') {
                share_item.classList.add('invisible')
                share_item.classList.add('opacity-0')
            }



        }

        function hidden_share_list() {
            let black_div = document.getElementById('black_div')
            let social_medias_parent = document.getElementById('social_medias_parent')
            black_div.remove()
            social_medias_parent.remove()
        }



        function show_selected_star(number) {
            // console.log(number)    
            let star = ''

            if (number == 0) {

                for (let i = 1; i <= 5; i++) {
                    let star = 'star' + i
                    selected = document.getElementById(star)
                    if (selected.classList.contains('notActive')) {
                        selected.classList.remove('fill-(--star)')
                        selected.classList.add('fill-none')
                    }

                }

            } else {

                for (let i = 1; i <= 5; i++) {
                    if (i <= number) {
                        // console.log(i)    
                        let star = 'star' + i
                        selected = document.getElementById(star)
                        if (selected.classList.contains('notActive')) {
                            selected.classList.remove('fill-none')
                            selected.classList.add('fill-(--star)')
                        }

                    }
                }
            }

            // console.log("به ستاره شماره " + number + "هاور شد")

        }



        function set_star(id) {
            // console.log("به   " + id + "کلیک شد")
            $.ajax({
                url: "{{url('cart/set/quantity/cart')}}/" + id,
                type: "get",
                dataType: "json",
                success: function(data) {
                    for (let i = 1; i <= 5; i++) {

                        if (i <= id) {
                            let star = 'star' + i
                            selected = document.getElementById(star)
                            selected.classList.remove('notActive')
                            selected.classList.add('active')
                            selected.classList.remove('fill-none')
                            selected.classList.add('fill-(--star)')
                        }

                        if (i > id) {
                            let star = 'star' + i
                            selected = document.getElementById(star)
                            selected.classList.remove('active')
                            selected.classList.add('notActive')
                            selected.classList.remove('fill-(--star)')
                            selected.classList.add('fill-none')
                        }
                    }
                },
                error: function() {
                    console.log('☢')
                }
            })



        }
    </script>
    <!--  -  -->
    <!-- <svg class='size-3 fill-black' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 13.3-10.7 24-24 24L40 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l368 0c13.3 0 24 10.7 24 24z"/></svg> -->
    <!-- trash -->
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg> -->
    <!-- + -->
    <!-- <svg class='size-3 fill-black' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M488 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-208 0 0 208c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-208L24 280c-13.3 0-24-10.7-24-24s10.7-24 24-24H232l0-208c0-13.3 10.7-24 24-24s24 10.7 24 24l0 208 208 0z"/></svg> -->
</body>
</html>


@endsection
