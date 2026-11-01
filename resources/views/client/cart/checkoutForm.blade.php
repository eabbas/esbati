<!DOCTYPE html>
<html lang="fe" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/app.css" />
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="Icon" href="img/icons8-mobile-phone-48.png" />
    <title>فروشگاه نوترینو</title>
<style>
            @font-face {
        font-family: yekanBakhThin;
        src: url('../font/YekanBakhFaNum-Thin.woff2') format('woff2');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
        }
        @font-face {
        font-family: yekanBakhLight;
        src: url('../font/YekanBakhFaNum-Light.woff2') format('woff2');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
        }
        @font-face {
        font-family: yekanBakhRegular;
        src: url('../font/YekanBakhFaNum-Regular.woff2') format('woff2');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
        }
        @font-face {
        font-family: yekanBakhSemiBold;
        src: url('../font/YekanBakhFaNum-SemiBold.woff2') format('woff2');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
        }
        @font-face {
        font-family: yekanBakhBold;
        src: url('../font/YekanBakhFaNum-Bold.woff2') format('woff2');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
        }
        @font-face {
        font-family: yekanBakhExtraBold;
        src: url('../font/YekanBakhFaNum-ExtraBold.woff2') format('woff2');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
        }
        @font-face {
        font-family: yekanBakhBlack;
        src: url('../font/YekanBakhFaNum-Black.woff2') format('woff2');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
        }
        @font-face {
        font-family: yekanBakhExtraBlack;
        src: url('../font/YekanBakhFaNum-ExtraBlack.woff2') format('woff2');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
        }
        *::selection{ 
        /* font: yekanBakhBold; */
        background-color: var(--color-primary-500);
        color: #fff;
        }
        body {
        font-family: yekanBakhBold;
        font-family: sans-serif;
        box-sizing: border-box;
        }
        :root {
        --color-red-100: oklch(93.6% 0.032 17.717);
        --color-red-200: oklch(88.5% 0.062 18.334);
        --color-red-400: oklch(70.4% 0.191 22.216);
        --color-red-500: oklch(63.7% 0.237 25.331);
        --color-red-600: oklch(57.7% 0.245 27.325);
        --color-red-700: oklch(50.5% 0.213 27.518);
        --color-yellow-500: oklch(79.5% 0.184 86.047);
        --color-yellow-600: oklch(68.1% 0.162 75.834);
        --color-yellow-700: oklch(55.4% 0.135 66.442);
        --color-green-300: oklch(87.1% 0.15 154.449);
        --color-green-400: oklch(79.2% 0.209 151.711);
        --color-green-500: oklch(72.3% 0.219 149.579);
        --color-green-600: oklch(62.7% 0.194 149.214);
        --color-green-700: oklch(52.7% 0.154 150.069);
        --color-green-800: oklch(44.8% 0.119 151.328);
        --color-sky-500: oklch(68.5% 0.169 237.323);
        --color-sky-600: oklch(58.8% 0.158 241.966);
        --color-blue-400: oklch(70.7% 0.165 254.624);
        --color-blue-500: oklch(62.3% 0.214 259.815);
        --color-blue-600: oklch(54.6% 0.245 262.881);
        --color-blue-700: oklch(48.8% 0.243 264.376);
        --color-pink-300: oklch(82.3% 0.12 346.018);
        --color-pink-500: oklch(65.6% 0.241 354.308);
        --color-gray-100: oklch(96.7% 0.003 264.542);
        --color-gray-200: oklch(92.8% 0.006 264.531);
        --color-gray-300: oklch(87.2% 0.01 258.338);
        --color-gray-400: oklch(70.7% 0.022 261.325);
        --color-gray-500: oklch(55.1% 0.027 264.364);
        --color-gray-600: oklch(44.6% 0.03 256.802);
        --color-gray-700: oklch(37.3% 0.034 259.733);
        --color-gray-800: oklch(27.8% 0.033 256.848);
        --color-gray-900: oklch(21% 0.034 264.665);
        --color-zinc-50: oklch(98.5% 0 0);
        --color-zinc-100: oklch(96.7% 0.001 286.375);
        --color-zinc-200: oklch(92% 0.004 286.32);
        --color-zinc-300: oklch(87.1% 0.006 286.286);
        --color-zinc-400: oklch(70.5% 0.015 286.067);
        --color-zinc-500: oklch(55.2% 0.016 285.938);
        --color-zinc-600: oklch(44.2% 0.017 285.786);
        --color-zinc-700: oklch(37% 0.013 285.805);
        --color-zinc-800: oklch(27.4% 0.006 286.033);
        --color-primary-300: #f7b518;
        --color-primary-400: #f39e1d;
        --color-primary-500: #f28822;
        --color-primary-600: #ed7224;
        --color-primary-700: #ea5d25;
        --color-primary-800: #e64624;
        }
        .labal_1 {
        transition: all 300ms;
        }
        .labal_1:hover .labal_1-1{
        visibility: visible;
        }
        .labal_2 {
        transition: all 300ms;
        }
        .labal_2:hover .labal_2-2 {
        visibility: visible;
        }
        .labal_3 {
        transition: all 300ms;
        }
        .labal_3:hover .labal_3-3 {
        visibility: visible;
        }
        .mmde:hover svg path {
        fill: var(--color-primary-500);
        }
        .labal_4 {
        transition: all 300ms;
        }
        .labal_4:hover .labal_4-4 {
        visibility: visible;
        }
        .svg:hover svg{
        fill: var(--color-primary-500);
        }
        .labal_3:hover .svg>svg{
        transform: rotate(180deg);
        }
</style>

</head>
<body class="overflow-y-auto
              [&::-webkit-scrollbar]:w-1.5
              [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
              [&::-webkit-scrollbar-thumb]:rounded-full">
  <div class="max-w-[1700px] mx-auto">

    <main class="relative px-3 md:px-20 pt-10">
      <section id="top" class="flex items-center gap-1 md:gap-5 w-full md:w-10/12 md:mx-auto mt-2 md:mt-0 scroll-mt-50">
        <a href="" class="flex flex-col md:flex-row items-center w-fit min-w-24 md:min-w-32 gap-1 text-sm text-(--color-green-500)">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="fill-(--color-green-500)" fill-rule="evenodd" clip-rule="evenodd" d="M3.03998 2.292C2.85221 2.22609 2.64595 2.23748 2.46657 2.32365C2.28719 2.40982 2.14939 2.56373 2.08348 2.7515C2.01758 2.93927 2.02896 3.14554 2.11513 3.32491C2.20131 3.50429 2.35521 3.64209 2.54298 3.708L2.80398 3.799C3.47198 4.034 3.91098 4.189 4.23398 4.348C4.53698 4.497 4.66998 4.618 4.75798 4.746C4.84798 4.878 4.91798 5.06 4.95798 5.423C4.99798 5.803 4.99998 6.298 4.99998 7.038V9.64C4.99998 12.582 5.06298 13.552 5.92998 14.466C6.79598 15.38 8.18998 15.38 10.98 15.38H16.282C17.843 15.38 18.624 15.38 19.175 14.93C19.727 14.48 19.885 13.716 20.2 12.188L20.7 9.763C21.047 8.023 21.22 7.154 20.776 6.577C20.332 6 18.816 6 17.131 6H6.49198C6.48776 5.75351 6.47342 5.50731 6.44898 5.262C6.39498 4.765 6.27898 4.312 5.99698 3.9C5.71298 3.484 5.33498 3.218 4.89398 3.001C4.48198 2.799 3.95798 2.615 3.34198 2.398L3.03998 2.292ZM15.517 8.457C15.817 8.743 15.829 9.217 15.543 9.517L12.686 12.517C12.6159 12.5905 12.5317 12.649 12.4384 12.689C12.345 12.729 12.2445 12.7496 12.143 12.7496C12.0414 12.7496 11.9409 12.729 11.8476 12.689C11.7543 12.649 11.67 12.5905 11.6 12.517L10.457 11.317C10.3861 11.2463 10.3302 11.1621 10.2924 11.0694C10.2546 10.9767 10.2357 10.8774 10.2369 10.7773C10.2381 10.6773 10.2593 10.5784 10.2993 10.4867C10.3393 10.3949 10.3972 10.3121 10.4697 10.243C10.5422 10.174 10.6278 10.1202 10.7214 10.0848C10.815 10.0494 10.9147 10.033 11.0148 10.0367C11.1148 10.0405 11.2131 10.0642 11.3038 10.1065C11.3945 10.1488 11.4758 10.2088 11.543 10.283L12.143 10.913L14.457 8.483C14.5941 8.33904 14.7828 8.25544 14.9816 8.25057C15.1804 8.24569 15.3729 8.31994 15.517 8.457Z" fill="black"></path>
            <path class="fill-(--color-green-500)" d="M7.5 18C7.89782 18 8.27936 18.158 8.56066 18.4393C8.84196 18.7206 9 19.1022 9 19.5C9 19.8978 8.84196 20.2794 8.56066 20.5607C8.27936 20.842 7.89782 21 7.5 21C7.10218 21 6.72064 20.842 6.43934 20.5607C6.15804 20.2794 6 19.8978 6 19.5C6 19.1022 6.15804 18.7206 6.43934 18.4393C6.72064 18.158 7.10218 18 7.5 18ZM16.5 18C16.8978 18 17.2794 18.158 17.5607 18.4393C17.842 18.7206 18 19.1022 18 19.5C18 19.8978 17.842 20.2794 17.5607 20.5607C17.2794 20.842 16.8978 21 16.5 21C16.1022 21 15.7206 20.842 15.4393 20.5607C15.158 20.2794 15 19.8978 15 19.5C15 19.1022 15.158 18.7206 15.4393 18.4393C15.7206 18.158 16.1022 18 16.5 18Z" fill="black"></path>
            <!-- <path class="stroke-(--color-green-500)" d="M15.0742 8.8568C14.9303 8.87118 14.8255 9.10815 14.7562 9.22021C14.6354 9.41529 14.5162 9.57762 14.3665 9.75099C14.0074 10.1667 13.4839 10.4894 13.0467 10.8173C12.7359 11.0504 12.3724 11.3453 12.0162 11.5011C11.6944 11.6419 11.3865 11.1364 11.244 10.9225" stroke="black" stroke-width="3" stroke-linecap="round"></path> -->
          </svg>
          سبد خرید
        </a>
        <div class="h-0.5 w-full bg-gradient-to-r from-white via-(--color-zinc-300) to-white"></div>
        <a href="" class="flex flex-col md:flex-row items-center w-fit min-w-24 md:min-w-32 gap-1 text-(--color-primary-500) text-sm">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="fill-(--color-primary-500)" d="M12 10C14.2091 10 16 8.20914 16 6C16 3.79086 14.2091 2 12 2C9.79086 2 8 3.79086 8 6C8 8.20914 9.79086 10 12 10Z" fill="black"></path>
            <path class="fill-(--color-primary-500)" d="M20 17.5C20 19.985 20 22 12 22C4 22 4 19.985 4 17.5C4 15.015 7.582 13 12 13C16.418 13 20 15.015 20 17.5Z" fill="black"></path>
          </svg>
          اطلاعات پرداخت
        </a>
        <div class="h-0.5 w-full bg-gradient-to-r from-white via-(--color-zinc-300) to-white"></div>
        <a href="" class="flex flex-col md:flex-row items-center w-fit min-w-24 md:min-w-32 gap-1 text-(--color-zinc-700) text-sm">
          <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="stroke-(--color-zinc-700)" d="M20.5312 5.625H6.46875C4.60479 5.625 3.09375 7.13604 3.09375 9V18C3.09375 19.864 4.60479 21.375 6.46875 21.375H20.5312C22.3952 21.375 23.9062 19.864 23.9062 18V9C23.9062 7.13604 22.3952 5.625 20.5312 5.625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path class="stroke-(--color-zinc-700)" d="M3.09375 10.6875H23.9062" stroke="black" stroke-width="1.5"></path>
            <path class="stroke-(--color-zinc-700)" d="M16.5938 16.0312H19.9688" stroke="black" stroke-width="1.5" stroke-linecap="round"></path>
          </svg>
          اتمام خرید
        </a>
      </section>
      <form id='form' action='{{route("user.cartInformation")}}' method="POST" class="flex flex-col lg:flex-row px-4 md:px-10 mt-10 gap-5 pb-20">
        @csrf
        <div class="lg:w-9/12 border border-zinc-200 p-5 rounded-xl">
          @if(Auth::check())
            <div class="flex justify-end items-center">
              <div onclick="addressSection('open')" class="cursor-pointer px-4 py-2 bg-(--color-zinc-400) rounded-lg text-sm text-white hover:opacity-90 hover:shadow-lg">
                انتخاب ادرس
              </div>
              <!-- modal address -->
              <div id="addressForm" class="fixed opacity-0 invisible inset-0 bg-black/20 flex items-center justify-center transition-all duration-300 z-5000000000">
                <div class="modal-box bg-white p-2 rounded-xl shadow-lg w-10/12 md:w-6/12 scale-90 transition-transform duration-300">
                  <div class="flex items-center gap-3 p-4 border-b border-zinc-300">
                    <svg onclick="addressSection('close')" class="size-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M345 137c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-119 119L73 103c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l119 119L39 375c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l119-119L311 409c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-119-119L345 137z"/></svg>
                    <h3 class="text-gray-700">انتخاب آدرس</h3>
                  </div>
                  <div class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 pt-4">
                    <div class="space-y-5">
                      <ul class="w-full flex flex-col gap-3">
                        @if($user->address)
                          @foreach($user->address as $address)
                            <li onclick='setAddress(this , {{$address}})' class='addressess rounded-xl border-2 border-gray-400/50' id="{{$address->id}}">
                                <div>
                                  <div class="border-b border-b-zinc-400 p-3 text-zinc-800 text-sm flex justify-between items-center">
                                    {{$address->title}}
                                  </div>
                                  <div class="px-5 py-4 text-zinc-600 space-y-4 text-sm">
                                    <div class="flex gap-x-1 items-center">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z"></path></svg>
                                      <span>آدرس:</span>
                                    {{$address->province_name}} - {{$address->city_name}} /{{$address->location}}
                                    </div>
                                    <div class="flex gap-x-1 items-center">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M228.44,89.34l-96-64a8,8,0,0,0-8.88,0l-96,64A8,8,0,0,0,24,96V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V96A8,8,0,0,0,228.44,89.34ZM96.72,152,40,192V111.53Zm16.37,8h29.82l56.63,40H56.46Zm46.19-8L216,111.53V192ZM128,41.61l81.91,54.61-67,47.78H113.11l-67-47.78Z"></path></svg>
                                      <span>کد پستی:</span>
                                      {{$address->postalCode}}
                                    </div>
                                    <div class="flex gap-x-1 items-center">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M222.37,158.46l-47.11-21.11-.13-.06a16,16,0,0,0-15.17,1.4,8.12,8.12,0,0,0-.75.56L134.87,160c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16,16,0,0,0,1.32-15.06l0-.12L97.54,33.64a16,16,0,0,0-16.62-9.52A56.26,56.26,0,0,0,32,80c0,79.4,64.6,144,144,144a56.26,56.26,0,0,0,55.88-48.92A16,16,0,0,0,222.37,158.46ZM176,208A128.14,128.14,0,0,1,48,80,40.2,40.2,0,0,1,82.87,40a.61.61,0,0,0,0,.12l21,47L83.2,111.86a6.13,6.13,0,0,0-.57.77,16,16,0,0,0-1,15.7c9.06,18.53,27.73,37.06,46.46,46.11a16,16,0,0,0,15.75-1.14,8.44,8.44,0,0,0,.74-.56L168.89,152l47,21.05h0s.08,0,.11,0A40.21,40.21,0,0,1,176,208Z"></path></svg>
                                      <span>شماره تماس:</span>
                                      {{$address->phoneNumber}}
                                    </div>
                                    <div class="flex gap-x-1 items-center">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path></svg>
                                      <span>نام و نام خانوادگی:</span>
                                    {{$user->name}}-{{$user->family}}
                                    </div>
                                    <div class="flex gap-x-1 items-center">
                                      <span> توضحات اضافی:</span>
                                        {{$address->description}}
                                    </div>
                                  </div>
                                </div>
                              </label>
                            </li>
                          @endforeach
                        @endif
                      </ul>
                    </div>
                    <div onclick='doChange()' class="block bg-(--color-primary-500) hover:bg-(--color-primary-400) text-white text-center w-8/12 mx-auto mt-10 px-5 py-3 rounded-xl shadow-lg transition-all font-yekanBakhBold">
                      انتخاب
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endif
          <div class="sm:flex gap-x-5">
            <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
              <label for="name" class="text-zinc-700 flex">
                نام
                <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
              </label>
              <input required type="text" name='name' placeholder="نام" id="name_field"  @if(Auth::check()) value="{{$user->name}}" @endif class="rounded-2xl text-sm text-(--color-zinc-600) w-full border border-(--color-zinc-200) px-5 py-3.5 placeholder:text-(--color-zinc-400) placeholder:text-xs focus:outline-1 focus:outline-(--color-primary-300) focus:border-(--color-primary-300)">
            </div>
            <div class="sm:w-1/2 flex flex-col gap-y-1">
              <label for="family" class="text-zinc-700 flex">
                نام خانوادگی
                <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
              </label>
              <input required type="text" name="family" placeholder="نام خانوادگی" id="family_field" @if(Auth::check()) value="{{$user->family}}" @endif class="rounded-2xl text-sm text-(--color-zinc-600) w-full border border-(--color-zinc-200) px-5 py-3.5 placeholder:text-(--color-zinc-400) placeholder:text-xs focus:outline-1 focus:outline-(--color-primary-300) focus:border-(--color-primary-300)">
            </div>
          </div>
          <div class="sm:flex gap-x-5 mt-7">
            <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
              <label for="province" class="text-zinc-700 flex">
                استان
                <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
              </label>
              <select name="province_id" id="provinces_field" class="rounded-2xl text-sm text-(--color-zinc-600) w-full border border-(--color-zinc-200) px-5 py-3.5 placeholder:text-(--color-zinc-400) placeholder:text-xs focus:outline-1 focus:outline-(--color-primary-300) focus:border-(--color-primary-300)" onchange="getCities()">
                @foreach($provinces as $province)
                  <option value="{{$province->id}}">{{$province->title}}</option>
                @endforeach
              </select>
            </div>
            <div class="sm:w-1/2 flex flex-col gap-y-1">
              <label for="city" class="text-zinc-700 flex">
                شهر
                <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
              </label>
              <select name="city_id" id="cities_field" class="rounded-2xl text-sm text-(--color-zinc-600) w-full border border-(--color-zinc-200) px-5 py-3.5 placeholder:text-(--color-zinc-400) placeholder:text-xs focus:outline-1 focus:outline-(--color-primary-300) focus:border-(--color-primary-300)">
                @foreach($cities as $city)
                  <option value="{{$city->id}}">{{$city->title}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="mt-7">
            <div class="flex flex-col gap-y-1">
              <label for="address" class="text-zinc-700 flex">
                خیابان و کوچه و شماره پلاک و واحد
                <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
              </label>
              <input required type="text" name="location" placeholder="اطلاعات دقیق محل تحویل" id="location_field" @if(Auth::check()) value="{{$user->location}}" @endif class="rounded-2xl text-sm text-(--color-zinc-600) w-full border border-(--color-zinc-200) px-5 py-3.5 placeholder:text-(--color-zinc-400) placeholder:text-xs focus:outline-1 focus:outline-(--color-primary-300) focus:border-(--color-primary-300)">
            </div>
          </div>
          <div class="sm:flex gap-x-5 mt-5">
            <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
              <label for="number" class="text-zinc-700 flex">
                تلفن
                <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
              </label>
              <input required type="number" name="phoneNumber" placeholder="تلفن همراه" id="phoneNumber_field"   @if(Auth::check()) value="{{$user->phoneNumber}}" @endif class="rounded-2xl text-sm text-(--color-zinc-600) w-full border border-(--color-zinc-200) px-5 py-3.5 placeholder:text-(--color-zinc-400) placeholder:text-xs focus:outline-1 focus:outline-(--color-primary-300) focus:border-(--color-primary-300)">
              <!-- appearance-none [&::-webkit-outer-spin-button]:appearance-none -->
            </div>
            <div class="sm:w-1/2 flex flex-col gap-y-1">
              <label for="postalCode" class="text-zinc-700 flex">
                کد پستی
                <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
              </label>
              <input required type="number" name="postalCode" placeholder="کد پستی محل تحویل" id="postalCode_field" class="rounded-2xl text-sm text-(--color-zinc-600) w-full border border-(--color-zinc-200) px-5 py-3.5 placeholder:text-(--color-zinc-400) placeholder:text-xs focus:outline-1 focus:outline-(--color-primary-300) focus:border-(--color-primary-300)">          
            </div>
          </div>
          <div class="mt-5">
            <div class="flex flex-col gap-y-1">
              <label for="describtion" class="text-zinc-700 flex">
                توضیحات اضافه
              </label>
              <textarea placeholder="نکات مهم درباره تحویل محصول" name="order_description" cols="30" rows="7" id="describtion" class="rounded-2xl text-sm text-(--color-zinc-600) w-full border border-(--color-zinc-200) px-5 py-3.5 placeholder:text-(--color-zinc-400) placeholder:text-xs focus:outline-1 focus:outline-(--color-primary-300) focus:border-(--color-primary-300)"></textarea>
            </div>
          </div>
          @if(!Auth::check())
            <div class='flex gap-1 text-center items-center mt-5'>
              <input type="checkbox" id="createAcountBtn" onclick='showNeweAcountForm(this)'>
              <label class='text-xs' for="createAcountBtn"> می خواهید یک حساب کاربری ایجاد کنید؟ </label>
            </div>
            <div class='w-full p-2 flex flex-col gap-2 h-0 overflow-hidden transition-all duration-500' id='newAcountForm'>
              <div class="sm:w-1/2 flex flex-col mt-2">
                <label for="password" class="text-zinc-700 flex">
                  رمز عبور
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <input type="password" name="password" placeholder=" رمز عبور خود را وارد کنید " id="phoneNumber_field" class="rounded-2xl text-sm text-(--color-zinc-600) w-full border border-(--color-zinc-200) px-5 py-3.5 placeholder:text-(--color-zinc-400) placeholder:text-xs focus:outline-1 focus:outline-(--color-primary-300) focus:border-(--color-primary-300)">
                <!-- appearance-none [&::-webkit-outer-spin-button]:appearance-none -->
              </div>
            </div>
          @endif
        </div>
        <div class="lg:w-3/12 lg:pt-5 my-10 lg:my-0">
          <div class="flex items-center justify-between">
            <div class="text-(--color-primary-500)">مبلغ نهایی</div>
            <div class="flex">
              <input type="number" name='finalAmount' readonly value="{{$finalAmount}}" id='finalAmount_div' class='text-2xl md:text-3xl text-(--color-primary-500) font-bold outline-none'>
              <div class="-rotate-90 text-sm text-(--color-primary-500)">تومان</div>
            </div>
          </div>
          <div class="flex items-center justify-between mt-6 text-(--color-zinc-600)">
            <div class="text-sm">جمع مبلغ کل</div>
            <div class="flex">
              <input type="number" readonly value="{{$sum}}" class='text-2xl md:text-3xl text-(--color-primary-500) font-bold outline-none'>
              <div class="-rotate-90 text-xs">تومان</div>
            </div>
          </div>
          <div class="flex items-center justify-between mt-6 text-green-300">
            <div class="text-sm"> سود شما </div>
            <div class="flex">
              <input type="number" name='benefit' readonly value="{{$benefit}}" id='benefit_div' class='text-2xl md:text-3xl text-(--color-primary-500) font-bold outline-none'>
              <div class="-rotate-90 text-xs">تومان</div>
            </div>
          </div>
          <div class="flex items-center justify-between mt-6 text-(--color-zinc-600)">
            <div class="text-sm">هزینه ارسال</div>
            <div class="flex">
              <div class="text-xl md:text-2xl font-bold">150.000</div>
              <div class="-rotate-90 text-xs">تومان</div>
            </div>
          </div>
          <div class='flex gap-1 text-center items-center mt-5'>
            <input type="checkbox" id="addDiscuntCode" onclick='showDiscuntCodeForm(this)'>
            <label class='text-xs' for="addDiscuntCode"> کد تخفیف دارید؟ <span class='text-red-400'> برای نوشتن کد اینجا کلیک کنید </span> </label>
          </div>
          <div class='w-full flex flex-col h-0 overflow-hidden mt-2 transition-all duration-500' id='discuntCodeForm'>
              <div class='w-full border-2 flex'>
                  <input type="text" class='w-7/12 outline-none active:bg-yellow-100 p-2 border-3' id="codeInput">
                  <div id='checkCodeButton' class='w-5/12 cursor-pointer bg-green-300 p-2'onclick="checkCode(this)"> اعمال کد تخفیف </div>
              </div>
          </div>
          <button class="w-full block bg-gradient-to-bl from-(--color-primary-400) to-(--color-primary-700) hover:opacity-80 text-white text-center font-bold md:text-xl mt-10 px-5 md:px-2.5 py-3 md:py-4 rounded-xl shadow-lg transition-all">
            ثبت و ادامه
          </button>
        </div>
      </form>
    </main>
  </div>
  <script>
    let selectedAddress='';
    let name_field = document.getElementById('name_field');
    let family_field = document.getElementById('family_field');
    let provinces_field = document.getElementById('provinces_field');
    let cities_field = document.getElementById('cities_field');
    let location_field = document.getElementById('location_field');
    let phoneNumber_field = document.getElementById('phoneNumber_field');
    let postalCode_field = document.getElementById('postalCode_field');
    let addressess=document.querySelectorAll('.addressess');
    let dataBaseProvinces="{{$provinces}}"
    let dataBaseCities="{{$cities}}"
    let finalAmount="{{$finalAmount}}"
    let benefit="{{$benefit}}"
    let modal_box=document.querySelector('.modal-box');
    let createAcountBtn=document.getElementById('createAcountBtn');
    let newAcountForm=document.getElementById('newAcountForm');
    let addDiscuntCode=document.getElementById('addDiscuntCode');
    let discuntCodeForm=document.getElementById('discuntCodeForm');
    let codeInput = document.getElementById('codeInput')
    let finalAmount_div=document.getElementById('finalAmount_div');
    let benefit_div = document.getElementById('benefit_div')
    let checkCodeButton = document.getElementById('checkCodeButton')
    let form = document.getElementById('form')
    const burgermenu = document.getElementById('burgermenu')
    function Hamberger(state,element){
        if(state == "open"){
            element.nextElementSibling.classList.remove('-right-full')
            element.nextElementSibling.classList.add('right-0')
            burgermenu.classList.remove('right-full');
            burgermenu.classList.add('right-0');
        }
        if(state == "close"){
            element.parentElement.children[1].classList.remove('right-0')
            element.parentElement.children[1].classList.add('-right-full')
            burgermenu.classList.remove('right-0');
            burgermenu.classList.add('right-full');
        }
    }
    let addressForm=document.getElementById('addressForm')
    function addressSection(state){
        if(state=='open'){
            addressForm.classList.remove('opacity-0')
            addressForm.classList.remove('invisible')
        }
        if(state=='close'){
            addressForm.classList.add('opacity-0')
            addressForm.classList.add('invisible')
        }
    }
    function getCities(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        })
        $.ajax({
            url: "{{route('address.getCities')}}",
            type: "post",
            dataType: "json",
            data:{
                'province_id':provinces_field.value,
            },
            success: function(data) {
                cities_field.innerHTML='';
                data.forEach(city => {
                    cities_field.innerHTML+=
                    `  <option value="${city.id}">${city.title}</option>  `;
                });
            },
            error: function() {
                console.log('☢')
            }
        })
    }
    function setAddress(el , address){
      console.log(address)
      addressess.forEach(element => {
        if(element.id==address.id){
          element.classList.add('border-orange-400')
        }else{
          element.classList.remove('border-orange-400')
        }
      });
      selectedAddress=address;
    }
    function doChange(){
      if(selectedAddress!=''){
        provinces_field.value=selectedAddress.province_id;
        location_field.value=selectedAddress.location
        setCity(selectedAddress.province_id)
        phoneNumber_field.value=selectedAddress.phoneNumber
        postalCode_field.value=selectedAddress.postalCode
        cities_field.value=selectedAddress.city_id;
        addressForm.classList.add('invisible' , 'opacity-0')
      }else{
        alert('لطفا نخست آدرس خود را انتخاب کنید');
      }
    }
    function setCity(province_id){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': "{{ csrf_token() }}"
          }
      })
      $.ajax({
          url: "{{route('address.getCities')}}",
          type: "post",
          dataType: "json",
          data:{
            'province_id':province_id,
          },
          success: function(data) {
              cities_field.innerHTML='';
              data.forEach(city => {
                if(city.id==selectedAddress.city_id){
                  cities_field.innerHTML+=
                  `  <option selected value="${city.id}">${city.title}</option>  `;
                }else{
                  cities_field.innerHTML+=
                  `  <option value="${city.id}">${city.title}</option>  `;
                }
              });
          },
          error: function() {
              console.log('☢')
          }
      })
    }
    function showNeweAcountForm(el){
      if(el.checked){
        newAcountForm.classList.remove('h-0');
        newAcountForm.classList.add('h-24');
      }
      if(!el.checked){
        newAcountForm.classList.add('h-0');
        newAcountForm.classList.remove('h-24');
      }
    } 
    function showDiscuntCodeForm(el){
        if(el.checked){
          discuntCodeForm.classList.remove('h-0');
          discuntCodeForm.classList.add('h-15');
        }
        if(!el.checked){
          discuntCodeForm.classList.add('h-0');
          discuntCodeForm.classList.remove('h-15');
        }
    }
    let code=''
    function checkCode(el){
        code=document.getElementById('codeInput').value;
        console.log(code);
        if(code!=''){
            el.innerHTML= `<div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>`;
            el.removeAttribute('onclick');
            el.setAttribute('disable',true);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            })
            $.ajax({
                url: "{{route('discuntCode.checkCode')}}",
                type: "post",
                dataType: "json",
                data:{
                    'code':code,
                },
                success: function(data) {
                    console.log(data.access);
                    if(data.access!='Unavailable'){
                        if(data.access==true){
                          el.innerHTML='کد تخفیف اعمال شد'
                          el.classList.remove('bg-green-100');
                          el.classList.add('bg-yellow-300');
                          if(data.discuntCode.number!=null){
                            finalAmount_div.value=parseInt(finalAmount_div.value)-parseInt(data.discuntCode.number)
                            benefit_div.value=parseInt(benefit_div.value)+parseInt(data.discuntCode.number)
                          }
                          if(data.discuntCode.percent!=null){
                            let result=parseInt(finalAmount_div.value)*parseInt(data.discuntCode.percent)
                            result=result/100;
                            finalAmount_div.value=parseInt(finalAmount_div.value)-parseInt(result)
                            benefit_div.value=parseInt(benefit_div.value) + result
                            parseInt(finalAmount_div.value)
                            parseInt(benefit_div.value) 
                          }
                        }if(data.access==false){
                          alert('کد تخفیف منقصی شد');
                          el.innerHTML="اعمال کد تخفیف"
                          el.setAttribute('onclick','checkCode(this)');
                          el.removeAttribute('disable');
                        }
                    }else{
                      alert('کد تخفیف درست نیست');
                      el.innerHTML="اعمال کد تخفیف"
                      el.setAttribute('onclick','checkCode(this)');
                      el.removeAttribute('disable');
                    }
                },
                error: function() {
                  console.log('☢')
                }
            })
        }else{
            alert('اول کد تخفیف را وارد کنید');
        }
    }
    
    codeInput.addEventListener('keyup', function(event) {
      if(codeInput.value==''){
        checkCodeButton.innerHTML="اعمال کد تخفیف"
        checkCodeButton.setAttribute('onclick','checkCode(this)');
        checkCodeButton.removeAttribute('disable');
        checkCodeButton.classList.remove('bg-yellow-300');
        checkCodeButton.classList.add('bg-green-100');
        finalAmount_div.value=parseInt(finalAmount);
        benefit_div.value=parseInt(benefit);
      }
    });


    function addlocalProducts(){
        let jsonProArray = JSON.parse(localStorage.getItem('products'));

        console.log(jsonProArray);
        let productsString = JSON.stringify(jsonProArray);
        
        let product_input = document.createElement('input');
        product_input.setAttribute('name', 'products[]');
        product_input.setAttribute('type', 'hidden');
        product_input.setAttribute('value', productsString); 
        
        form.appendChild(product_input); 
    }
    addlocalProducts();
 </script>
</body>
</html>