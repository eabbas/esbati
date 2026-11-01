<!DOCTYPE html>
<html lang="fe" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/app.css" />
    <title>لیست سبد خرید</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="Icon" href="img/icons8-mobile-phone-48.png" />
    <title>فروشگاه نوترینو</title>

    <style>
        /* 
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
        background-color: var(--primary_color);
        color: #fff;
        }
        body {
        font-family: yekanBakhSemiBold;
        font-family: sans-serif;
        box-sizing: border-box;
        } */


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
            /* --primary_color: #f28822; */
            --primary_color: #05df72;
            --color-primary-600: #ed7224;
            --color-primary-700: #ea5d25;
            --color-primary-800: #e64624;
        }

        .labal_1 {
            transition: all 300ms;
        }

        .labal_1:hover .labal_1-1 {
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
            fill: var(--primary_color);
        }

        .labal_4 {
            transition: all 300ms;
        }

        .labal_4:hover .labal_4-4 {
            visibility: visible;
        }
    </style>
</head>

<body class="overflow-y-auto [&::-webkit-scrollbar]:w-1.5 [&::-webkit-scrollbar-thumb]:bg-(--primary_color) [&::-webkit-scrollbar-thumb]:rounded-full">
    <div class="mx-auto">

        <main class="relative w-full flex flex-col gap-10 items-center mt-50">
            <section id="top" class="flex items-center gap-1 md:gap-5 w-11/12 md:mx-auto mt-2 md:mt-0 scroll-mt-50">
                <a href="" class="flex flex-col md:flex-row items-center w-fit min-w-24 md:min-w-32 gap-1 sm:text-sm text-xs text-(--primary_color)">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-(--primary_color)" fill-rule="evenodd" clip-rule="evenodd" d="M3.03998 2.292C2.85221 2.22609 2.64595 2.23748 2.46657 2.32365C2.28719 2.40982 2.14939 2.56373 2.08348 2.7515C2.01758 2.93927 2.02896 3.14554 2.11513 3.32491C2.20131 3.50429 2.35521 3.64209 2.54298 3.708L2.80398 3.799C3.47198 4.034 3.91098 4.189 4.23398 4.348C4.53698 4.497 4.66998 4.618 4.75798 4.746C4.84798 4.878 4.91798 5.06 4.95798 5.423C4.99798 5.803 4.99998 6.298 4.99998 7.038V9.64C4.99998 12.582 5.06298 13.552 5.92998 14.466C6.79598 15.38 8.18998 15.38 10.98 15.38H16.282C17.843 15.38 18.624 15.38 19.175 14.93C19.727 14.48 19.885 13.716 20.2 12.188L20.7 9.763C21.047 8.023 21.22 7.154 20.776 6.577C20.332 6 18.816 6 17.131 6H6.49198C6.48776 5.75351 6.47342 5.50731 6.44898 5.262C6.39498 4.765 6.27898 4.312 5.99698 3.9C5.71298 3.484 5.33498 3.218 4.89398 3.001C4.48198 2.799 3.95798 2.615 3.34198 2.398L3.03998 2.292ZM15.517 8.457C15.817 8.743 15.829 9.217 15.543 9.517L12.686 12.517C12.6159 12.5905 12.5317 12.649 12.4384 12.689C12.345 12.729 12.2445 12.7496 12.143 12.7496C12.0414 12.7496 11.9409 12.729 11.8476 12.689C11.7543 12.649 11.67 12.5905 11.6 12.517L10.457 11.317C10.3861 11.2463 10.3302 11.1621 10.2924 11.0694C10.2546 10.9767 10.2357 10.8774 10.2369 10.7773C10.2381 10.6773 10.2593 10.5784 10.2993 10.4867C10.3393 10.3949 10.3972 10.3121 10.4697 10.243C10.5422 10.174 10.6278 10.1202 10.7214 10.0848C10.815 10.0494 10.9147 10.033 11.0148 10.0367C11.1148 10.0405 11.2131 10.0642 11.3038 10.1065C11.3945 10.1488 11.4758 10.2088 11.543 10.283L12.143 10.913L14.457 8.483C14.5941 8.33904 14.7828 8.25544 14.9816 8.25057C15.1804 8.24569 15.3729 8.31994 15.517 8.457Z" fill="black"></path>
                        <path class="fill-(--primary_color)" d="M7.5 18C7.89782 18 8.27936 18.158 8.56066 18.4393C8.84196 18.7206 9 19.1022 9 19.5C9 19.8978 8.84196 20.2794 8.56066 20.5607C8.27936 20.842 7.89782 21 7.5 21C7.10218 21 6.72064 20.842 6.43934 20.5607C6.15804 20.2794 6 19.8978 6 19.5C6 19.1022 6.15804 18.7206 6.43934 18.4393C6.72064 18.158 7.10218 18 7.5 18ZM16.5 18C16.8978 18 17.2794 18.158 17.5607 18.4393C17.842 18.7206 18 19.1022 18 19.5C18 19.8978 17.842 20.2794 17.5607 20.5607C17.2794 20.842 16.8978 21 16.5 21C16.1022 21 15.7206 20.842 15.4393 20.5607C15.158 20.2794 15 19.8978 15 19.5C15 19.1022 15.158 18.7206 15.4393 18.4393C15.7206 18.158 16.1022 18 16.5 18Z" fill="black"></path>
                        <path class="stroke-(--primary_color)" d="M15.0742 8.8568C14.9303 8.87118 14.8255 9.10815 14.7562 9.22021C14.6354 9.41529 14.5162 9.57762 14.3665 9.75099C14.0074 10.1667 13.4839 10.4894 13.0467 10.8173C12.7359 11.0504 12.3724 11.3453 12.0162 11.5011C11.6944 11.6419 11.3865 11.1364 11.244 10.9225" stroke="black" stroke-width="3" stroke-linecap="round"></path>
                    </svg>
                    سبد خرید
                </a>
                <div class="h-0.5 w-full bg-gradient-to-r from-white via-(--color-zinc-300) to-white"></div>
                <a href="" class="flex flex-col md:flex-row items-center w-fit min-w-24 md:min-w-32 gap-1 text-(--color-zinc-700) sm:text-sm text-xs">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-(--color-zinc-700)" d="M12 10C14.2091 10 16 8.20914 16 6C16 3.79086 14.2091 2 12 2C9.79086 2 8 3.79086 8 6C8 8.20914 9.79086 10 12 10Z" fill="black"></path>
                        <path class="fill-(--color-zinc-700)" d="M20 17.5C20 19.985 20 22 12 22C4 22 4 19.985 4 17.5C4 15.015 7.582 13 12 13C16.418 13 20 15.015 20 17.5Z" fill="black"></path>
                    </svg>
                    اطلاعات پرداخت
                </a>
                <div class="h-0.5 w-full bg-gradient-to-r from-white via-(--color-zinc-300) to-white"></div>
                <a href="" class="flex flex-col md:flex-row items-center w-fit min-w-24 md:min-w-32 gap-1 text-(--color-zinc-700) sm:text-sm text-xs">
                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="stroke-(--color-zinc-700)" d="M20.5312 5.625H6.46875C4.60479 5.625 3.09375 7.13604 3.09375 9V18C3.09375 19.864 4.60479 21.375 6.46875 21.375H20.5312C22.3952 21.375 23.9062 19.864 23.9062 18V9C23.9062 7.13604 22.3952 5.625 20.5312 5.625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path class="stroke-(--color-zinc-700)" d="M3.09375 10.6875H23.9062" stroke="black" stroke-width="1.5"></path>
                        <path class="stroke-(--color-zinc-700)" d="M16.5938 16.0312H19.9688" stroke="black" stroke-width="1.5" stroke-linecap="round"></path>
                    </svg>
                    اتمام خرید
                </a>
            </section>
            <?php
            $total_price = 0;
            $count = 0;
            $realsum = 0;
            ?>

            <section class="w-11/12 flex flex-col lg:flex-row xl:gap-4 gap-3">
                <div id="cart_list" class=" lg:w-9/12 border border-zinc-200 rounded-xl divide-y divide-zinc-200 p-2 flex flex-col gap-4 items-center">
                    @if(Auth::check() && count($user->carts))
                    @foreach($user->carts as $cart)
                    <?php
                    $count++;
                    if ($cart->product->discunt != null || $cart->product->discunt > 0) {
                        $total_price += $cart->product->discunt * $cart->quantity;
                    } else {
                        $total_price += $cart->product->price * $cart->quantity;
                    }
                    $realsum += $cart->product->price * $cart->quantity;
                    ?>
                    <div class='parent_cart w-full flex max-[390px]:flex-col justify-between border-2 border-(--product) gap-4 bg-white rounded-xl xl:p-2 p-1.5 relative'>
                        <div class="max-[370px]:w-11/12 w-8/12   flex items-center gap-2 ">
                            <div class='xl:min-w-22 xl:min-h-22 xl:w-22 xl:h-22 sm:min-w-18 sm:min-h-18 sm:w-18 sm:h-18 min-w-15 min-h-15 w-15 h-15 bg-(--product) rounded-xl flex justify-center items-center'>
                                @if(count($cart->product->medias)>0)
                                <img class='max-w-full max-h-full rounded-xl' src="{{asset('storage/product_medias/'.$cart->product->path)}}" alt="">
                                @else
                                <div> 🖼 </div>
                                @endif
                            </div>
                            <div class="max-md:w-9/12 max-md:max-w-9/12 md:w-10/12 md:max-w-10/12 max-[390px]:w-7/12 max-[390px]:max-w-7/12 flex max-md:flex-col gap-4 md:justify-between md:items-center">
                                <div class="md:max-w-7/12 max-w-full flex flex-col gap-2 justify-center items-start">
                                    <h5 class="xl:text-xl lg:text-lg max-sm:text-sm font-bold text-(--title) max-w-full truncate">{{$cart->product->title}} اهرم دار فلزی برند نیو کاسل آمریکا</h5>
                                    <p class="max-w-full xl:text-xs text-[10px] text-(--discription)">{{$cart->product->summary}}</p>
                                </div>
                                <div class="md:max-w-5/12 w-full">
                                    @if($cart->product->discunt==null || $cart->product->discunt<1)
                                        <div class="max-w-full flex justify-start items-center gap-2">
                                        <div class="flex flex-col justify-start items-end gap-2">
                                            <div class="text-[#316361] flex justify-start items-center gap-1">
                                                <span class="xl:text-lg max-sm:text-sm  font-bold">{{$cart->product->price}}</span>
                                                <span>تومان</span>
                                            </div>
                                        </div>
                                </div>
                                @else
                                <div class="max-w-full flex justify-start items-center gap-2">
                                    <div class="flex flex-col justify-start items-end gap-2">
                                        <del class="xl:text-xs text-[10px] text-(--discription) flex justify-start items-center gap-1">
                                            <span>{{$cart->product->price}}</span>
                                            <span>تومان</span>
                                        </del>
                                        <div class="text-[green] flex justify-start items-center gap-1">
                                            <span class="xl:text-lg max-sm:text-sm font-bold">{{$cart->product->discunt}}</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                    <span class="xl:text-sm text-xs px-2 py-1 rounded-xl bg-red-200 text-red-900">{{$cart->product->percent}}%</span>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <span class="min-w-[1px] w-[1px] max-w-[1px] min-h-9/12 rounded-full bg-(--product) max-[390px]:hidden"></span>
                    <div class='[370px]:w-5/24 xl:gap-5 gap-3 flex justify-end'>


                        <div class='flex justify-start gap-10 items-center sm:px-4'>
                            <div class='flex xl:gap-5 gap-2 border-2 border-[#E5EBEB] rounded-full items-center text-center xl:px-4 sm:px-3 px-2 xl:py-2 sm:py-1.5 py-1'>
                                <div onclick="updateCart(this,{{$cart->id}},'plus')" class='xl:size-4 sm:size-3 size-2  text-center items-center flex justify-center cursor-pointer'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                    </svg>
                                </div>
                                <div class='text-center items-center flex justify-center cursor-pointer'>
                                    <input type="number" class='sm:w-10 w-8 font-bold outline-none text-center text-black flex max-xl:text-sm max-sm:text-xs' readonly value="{{$cart->quantity}}">
                                </div>
                                @if($cart->quantity==1)
                                <div onclick="trash(this,{{$cart->id}} , {{$cart->product->id}})" class='xl:size-4 sm:size-3 size-2 text-center items-center flex justify-center cursor-pointer'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                    </svg>
                                </div>
                                @else
                                <div onclick="updateCart(this,{{$cart->id}},'minus')" class='xl:size-4 sm:size-3 size-2 text-center items-center flex justify-center cursor-pointer'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                    </svg>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div onclick="fullTrash(this,{{$cart->id}} , {{$cart->product->id}})" class='absolute top-2 left-2 xl:size-4 sm:size-3 size-2 text-center items-center flex justify-center cursor-pointer'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                            </svg>
                        </div>

                    </div>
                </div>

                @endforeach
                @endif
    </div>
    <div class="lg:w-3/12 xl:p-4 p-3 bg-(--product) rounded-xl flex flex-col gap-2 items-center">
        <div class="w-full flex gap-2 items-center mb-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-6 fill-[#092D43]"><path d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120z"/></svg>
            </div>
            <h4 class="text-xl text-[#092D43] font-bold">خلاصه سفارش</h4>
        </div>
        <div class="w-full flex  items-center justify-between">
            <div class="xl:text-sm lg:text-[10px] text-xs font-bold text-[#4E616B]">جمع کل قیمت محصولات</div>
            <div class="flex gap-1 items-center">
                <div class="xl:text-lg max-lg:text-lg  font-bold text-[#092D43]" id="realsum">{{$realsum}}</div>
                <div class="xl:text-sm lg:text-xs text-sm text-(--color-primary-500)">تومان</div>
            </div>
        </div>
        <!-- <div class="w-full flex items-center justify-between">
            <div class="text-sm text-[#4E616B]">جمع مبلغ نهایی</div>
            <div class="flex gap-1 items-center">
                <div class="text-lg font-bold text-[#092D43]" id="total_price">{{$total_price}}</div>
                <div class="text-sm text-(--color-primary-500)">تومان</div>
            </div>
        </div> -->
        <div class="w-full flex items-center justify-between text-(--color-zinc-600)">
            <div class="xl:text-sm lg:text-[10px] text-xs font-bold text-[#4E616B]">تخفیف</div>
            <div class="flex text-(--primary_color) gap-1 items-center">
                <div class="xl:text-lg max-lg:text-lg font-bold" id="benefit">{{$realsum -$total_price}}</div>
                <div class="xl:text-sm lg:text-xs text-sm">تومان</div>
            </div>
        </div>
        <div class="w-full flex items-center justify-between text-(--color-zinc-600)">
            <div class="xl:text-sm lg:text-[10px] text-xs font-bold"> مجموع تعداد خرید شما </div>
            <div class="flex gap-1 items-center">
                <div class="xl:text-lg max-lg:text-lg  font-bold" id="cart_counter">{{$count}}</div>
                <div class="xl:text-sm lg:text-xs text-sm text-(--color-primary-500)">عدد</div>
            </div>
        </div>
        <span class="w-full h-0.5 rounded-full bg-[#E2ECEE] my-4"></span>
        <div class="w-full flex flex-col gap-2">
            <div class="w-full flex  max-xl:text-sm font-bold text-[#4E616B]">جمع مبلغ نهایی</div>
            <div class="w-full justify-end flex gap-1 items-center font-bold">
                <div class="xl:text-2xl text-xl text-[#092D43]" id="total_price">{{$total_price}}</div>
                <div class="text-lg text-(--color-primary-500)">تومان</div>
            </div>
        </div>
        <form id="form" method="POST" action="{{route('cart.checkOutForm')}}" class='w-full flex flex-col'>
            @csrf
            <!-- <div class='w-full border-2 flex'>
                    <input name="code" type="text" class='w-7/12 outline-none active:bg-yellow-100 p-2 border-3' id="codeInput">
                    <div class='w-5/12 cursor-pointer bg-green-300 p-2'onclick="checkCode(this)"> اعمال کد تخفیف </div>
                </div> -->
            <button id="formButton" class="block bg-gradient-to-bl from-(--color-primary-400) to-(--color-primary-700) hover:opacity-80 text-white text-center font-bold xl:text-lg mt-10 px-5 md:px-2.5 py-3 md:py-4 rounded-xl shadow-lg transition-all"> ادامه جهت تسویه حساب </button>
        </form>
    </div>
    </section>
    </main>

    </div>
    <script src="./hamberger.js"></script>



    <script>
        // let cart = document.getElementById('cart');
        // let cart_list = document.getElementById('cart_list');
        let cart_counter = document.getElementById('cart_counter');
        // let pro_cart_parent_div = document.getElementById('pro_cart_parent_div');
        let total_price = document.getElementById('total_price');
        let benefit = document.getElementById('benefit');
        let realsum = document.getElementById('realsum');
        // let cart_buttons = document.getElementById('cart_buttons');
        let formButton = document.getElementById('formButton');
        let addressForm = document.getElementById('addressForm');
        let codeInput = document.getElementById('codeInput');
        let cartDatas = document.getElementById('cartDatas');
        let cart_list = document.getElementById('cart_list');

        let div_image = '';
        let div_text_and_counter = '';
        let parent_div = '';
        let count_noAuth = 0;
        let total_price_noAuth = 0;
        let product_price_noAuth = 0;

        function hiddenAddressForm() {
            addressForm.classList.remove('opacity-100')
            addressForm.classList.add('opacity-0')
            addressForm.classList.add('invisible')
        }

        function showAddressForm() {
            addressForm.classList.remove('opacity-0')
            addressForm.classList.add('opacity-100')
            addressForm.classList.remove('invisible')
        }
        let product_price = 0;
        let quantity = 0;

        function updateCart(el, id, state) {
            quantity = el.parentElement.children[1].children[0].value;

            if (quantity < 30) {

                el.parentElement.children[0].innerHTML =
                    `
                <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>

                `;
                // el.parentElement.children[0].setAttribute('disabled', true);
                el.parentElement.children[0].disabled = true;
                el.parentElement.children[0].removeAttribute('onclick');

                el.parentElement.children[2].innerHTML =
                    `
                <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>

                `;
                el.parentElement.children[2].disabled = true;
                el.parentElement.children[2].removeAttribute('onclick');

                if (state == 'plus') {
                    quantity++;
                } else {
                    quantity--;
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{url('cart/update/cart')}}" + "/" + id,
                    type: "post",
                    dataType: "json",
                    data: {
                        'quantity': quantity,
                    },
                    success: function(data) {
                        console.log(data);
                        el.parentElement.children[1].children[0].value = data.quantity
                        if (data.quantity == 1) {

                            //  تغییر دادن  اس وی جی علامت پلاس  //

                            el.parentElement.children[0].removeAttribute('disabled');
                            el.parentElement.children[0].setAttribute('onclick', `updateCart(this,${data.cartId},'plus')`)
                            el.parentElement.children[0].innerHTML =
                                `
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                            `;


                            //  تغییر دادن  اس وی جی علامت سطل آشغال  //

                            el.parentElement.children[2].innerHTML =
                                `
                            <svg class='size-5 fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                            `
                            el.parentElement.children[2].setAttribute('onclick', `trash(this,${data.cartId},${data.product.id})`);
                            el.parentElement.children[2].disabled = false;
                        }
                        if (data.quantity > 1) {

                            //  تغییر دادن  اس وی جی علامت پلاس  //

                            el.parentElement.children[0].removeAttribute('disabled');
                            el.parentElement.children[0].setAttribute('onclick', `updateCart(this,${data.cartId},'plus')`)
                            el.parentElement.children[0].innerHTML =
                                `
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                            `;
                            //  تغییر دادن  اس وی جی علامت ماینس  //

                            el.parentElement.children[2].disabled = false;
                            el.parentElement.children[2].setAttribute('onclick', `updateCart(this,${data.cartId},'minus')`)
                            el.parentElement.children[2].innerHTML =
                                `
                                <svg class='size-3 fill-black' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 13.3-10.7 24-24 24L40 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l368 0c13.3 0 24 10.7 24 24z"/></svg>
                            `
                        }
                        SumResult = parseInt(realsum.innerHTML)
                        if (data.product.discunt != null) {

                            product_price = parseInt(data.product.discunt)
                        } else {
                            product_price = parseInt(data.product.price)
                        }
                        let price = parseInt(total_price.innerHTML)
                        console.log(price);

                        if (state == 'plus') {
                            total_price.innerHTML = price + product_price;
                            realsum.innerHTML = SumResult + parseInt(data.product.price);
                            benefit.innerHTML = parseInt(realsum.innerHTML) - parseInt(total_price.innerHTML)

                        } else {
                            total_price.innerHTML = price - product_price;
                            realsum.innerHTML = SumResult - parseInt(data.product.price);
                            benefit.innerHTML = parseInt(realsum.innerHTML) - parseInt(total_price.innerHTML)
                        }
                    },
                    error: function() {
                        console.log('☢')
                    }
                })
            }

        }

        function fullTrash(el, cart_id, product_id) {
            quantity = el.parentElement.children[0].children[0].children[1].children[0].value;
            let trash_icon = '';
            console.log(el.closest('.parent_cart'))
            el.innerHTML =
                `
                <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
            `
            $.ajax({
                url: "{{url('cart/delete/cart')}}" + "/" + cart_id,
                type: "get",
                dataType: "json",
                success: function(productData) {
                    cart_counter.innerHTML--
                    if (cart_counter.innerHTML == 0) {
                        formButton.disabled = true;

                        location.assign("{{url('/')}}")
                    }
                    el.parentElement.classList.remove('flex')
                    el.parentElement.classList.add('hidden')
                    el.closest('.parent_cart').remove()

                    // SumResult = parseInt(realsum.innerHTML)
                    // if (productData.discunt != null) {
                    //     product_price = parseInt(productData.discunt)*productData.quantity
                    // } else {
                    //     product_price = parseInt(productData.price)*productData.quantity
                    // }
                    // total_price.innerHTML = parseInt(total_price.innerHTML) - product_price;
                    // realsum.innerHTML = SumResult - parseInt(productData.price);
                    // benefit.innerHTML = parseInt(realsum.innerHTML) - parseInt(total_price.innerHTML)
                            
                    if (productData.discunt == null || productData.discunt < 1) {
                        product_price = parseInt(productData.price)*quantity
                    } else {
                        product_price = parseInt(productData.discunt)*quantity
                    }

                    total_price.innerHTML = parseInt(total_price.innerHTML) - product_price;
                    realsum.innerHTML = parseInt(realsum.innerHTML) - parseInt(productData.price)*quantity
                    if(productData.discunt != null || productData.discunt > 0){
                    benefit.innerHTML = parseInt(realsum.innerHTML) - parseInt(total_price.innerHTML)
                    }

                },
                error: function() {
                    console.log('☢')
                }
            })
            checkCart()
            // console.log(entry)
            // el.parentElement.children[2].innerHTML =trash_icon
        }
        function trash(el, cart_id, product_id) {
            quantity = el.parentElement.children[1].children[0].value;
            let trash_icon = '';
            console.log(el.closest('.parent_cart'))
            trash_icon = el.parentElement.children[2].innerHTML;
            el.parentElement.children[2].innerHTML =
                `
                <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
            `
            $.ajax({
                url: "{{url('cart/delete/cart')}}" + "/" + cart_id,
                type: "get",
                dataType: "json",
                success: function(productData) {
                    cart_counter.innerHTML--
                    if (cart_counter.innerHTML == 0) {
                        formButton.disabled = true;

                        location.assign("{{url('/')}}")
                    }
                    el.parentElement.classList.remove('flex')
                    el.parentElement.classList.add('hidden')
                    el.closest('.parent_cart').remove()

                    SumResult = parseInt(realsum.innerHTML)
                    if (productData.discunt != null || productData.discunt>0) {
                        product_price = parseInt(productData.discunt)*quantity
                    } else {
                        product_price = parseInt(productData.price)*quantity
                    }
                    total_price.innerHTML = parseInt(total_price.innerHTML) - product_price;
                    realsum.innerHTML = SumResult - parseInt(productData.price);
                    benefit.innerHTML = parseInt(realsum.innerHTML) - parseInt(total_price.innerHTML)

                },
                error: function() {
                    console.log('☢')
                }
            })
            checkCart()
            // console.log(entry)
            // el.parentElement.children[2].innerHTML =trash_icon
        }

        function getCities() {
            let province = document.getElementById('provinces');
            let cities = document.getElementById('cities');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            })
            $.ajax({
                url: "{{route('address.getCities')}}",
                type: "post",
                dataType: "json",
                data: {
                    'province_id': province.value,
                },
                success: function(data) {
                    console.log('xxxxxxxxx');
                    cities.innerHTML = '';
                    data.forEach(city => {
                        cities.innerHTML +=
                            `  <option value="${city.id}">${city.title}</option>  `;
                    });
                },
                error: function() {
                    console.log('☢')
                }
            })
            console.log(province.value);
        }

        function createAddress() {
            let location = document.getElementById('location');
            let provinces = document.getElementById('provinces');
            let cities = document.getElementById('cities');
            let ButtonParent = document.getElementById('ButtonParent');
            if (location.value != '') {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{route('address.createAjax')}}",
                    type: "post",
                    dataType: "json",
                    data: {
                        'location': location.value,
                        'province_id': provinces.value,
                        'city_id': cities.value,
                    },
                    success: function(data) {
                        console.log('xxxxxxxxx');
                        addresses_list.innerHTML +=
                            `
                            <div class='flex gap-2'>
                                <label for=""> ${data.location}  |  ${data.city} </label>
                                <input name="address" type="radio" value="${data.id}" required>
                            </div>
                        `
                        hiddenAddressForm()
                        location.value = ''
                        if (ButtonParent.children[0].classList.contains('div')) {
                            ButtonParent.innerHTML = ''
                            ButtonParent.innerHTML =
                                `
                                <button id="formButton" class='w-40 p-4 bg-red-500 rounded-2xl text-center flex items-center justify-center text-white cursor-pointer'> ثبت نهایی </button>
                            `;

                        }
                    },
                    error: function() {
                        console.log('☢')
                    }
                })
            } else {
                alert('آدرس را وارد کنید');
            }
        }

        let currentUpdateProduct = '';
        function updateNoAuthCart(el, product_id, state) {
            jsonProArray = JSON.parse(localStorage.getItem('products'));
            jsonProArray.find(function(pro) {
                if (pro.id == product_id) {
                    currentUpdateProduct = pro
                }
            })
            console.log(currentUpdateProduct);
            quantity = el.parentElement.children[1].children[0].value;

            // if (quantity < 30) {

            el.parentElement.children[0].innerHTML =
                `
                <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>

                `;
            // el.parentElement.children[0].setAttribute('disabled', true);
            el.parentElement.children[0].disabled = true;
            el.parentElement.children[0].removeAttribute('onclick');

            el.parentElement.children[2].innerHTML =
                `
                <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>

                `;
            el.parentElement.children[2].disabled = true;
            el.parentElement.children[2].removeAttribute('onclick');

            if (state == 'plus') {
                quantity++;
            } else {
                quantity--;
            }

            el.parentElement.children[1].children[0].value = quantity
            if (quantity == 1) {

                //  تغییر دادن  اس وی جی علامت پلاس  //

                el.parentElement.children[0].removeAttribute('disabled');
                el.parentElement.children[0].setAttribute('onclick', `updateNoAuthCart(this,${currentUpdateProduct.id},'plus')`)
                el.parentElement.children[0].innerHTML =
                    `
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                    `;


                //  تغییر دادن  اس وی جی علامت سطل آشغال  //

                el.parentElement.children[2].innerHTML =
                    `
                    <svg class='size-5 fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                    `
                el.parentElement.children[2].setAttribute('onclick', `NoAuthtrash(this,${currentUpdateProduct.id})`);
                el.parentElement.children[2].disabled = false;
            }
            if (quantity > 1) {

                //  تغییر دادن  اس وی جی علامت پلاس  //

                el.parentElement.children[0].removeAttribute('disabled');
                el.parentElement.children[0].setAttribute('onclick', `updateNoAuthCart(this,${currentUpdateProduct.id},'plus')`)
                el.parentElement.children[0].innerHTML =
                    `
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                    `;
                //  تغییر دادن  اس وی جی علامت ماینس  //

                el.parentElement.children[2].disabled = false;
                el.parentElement.children[2].setAttribute('onclick', `updateNoAuthCart(this,${currentUpdateProduct.id},'minus')`)
                el.parentElement.children[2].innerHTML =
                    `
                        <svg class='size-3 fill-black' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 13.3-10.7 24-24 24L40 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l368 0c13.3 0 24 10.7 24 24z"/></svg>
                    `
            }
            if (currentUpdateProduct.discunt == null || currentUpdateProduct.discunt < 1) {
                product_price = parseInt(currentUpdateProduct.price)
            } else {
                product_price = parseInt(currentUpdateProduct.discunt)
            }
            price = parseInt(total_price.innerHTML)
            // total_price.innerHTML=price+data.product.price
            // console.log(price+product_price)
            if (state == 'plus') {
                if (currentUpdateProduct.discunt !== "" || currentUpdateProduct.discunt > 1) {
                    product_price_noAuth = parseInt(currentUpdateProduct.discunt)
                } else {
                    product_price_noAuth = parseInt(currentUpdateProduct.price)
                }
                console.log(product_price_noAuth)
                total_price.innerHTML = parseInt(total_price.innerHTML) + product_price_noAuth;
                realsum.innerHTML = parseInt(realsum.innerHTML) + parseInt(currentUpdateProduct.price);
            } else {
                if (currentUpdateProduct.discunt !== "" || currentUpdateProduct.discunt > 1) {
                    product_price_noAuth = parseInt(currentUpdateProduct.discunt)
                } else {
                    product_price_noAuth = parseInt(currentUpdateProduct.price)
                }
                console.log(product_price_noAuth)
                total_price.innerHTML = parseInt(total_price.innerHTML) - product_price_noAuth;
                realsum.innerHTML = parseInt(realsum.innerHTML) - parseInt(currentUpdateProduct.price);
            }
            benefit.innerHTML = parseInt(realsum.innerHTML) - parseInt(total_price.innerHTML)
            jsonProArray.find(function(pro) {
                if (pro.id == product_id) {
                    pro.quantity = quantity
                }
            })
            textProducts = JSON.stringify(jsonProArray)
            localStorage.removeItem('products')
            localStorage.setItem('products', textProducts)
            // }

        }

        function NoAuthFullTrash(el, product_id) {
            jsonProArray = JSON.parse(localStorage.getItem('products'));
            jsonProArray.find(function(pro) {
                if (pro.id == product_id) {
                    currentUpdateProduct = pro
                }
            })
            cart_counter.innerHTML--
            el.parentElement.classList.remove('flex')
            el.parentElement.classList.add('hidden')
            el.closest('.parent_cart').remove()

            if (currentUpdateProduct.discunt == null || currentUpdateProduct.discunt < 1) {
                product_price = parseInt(currentUpdateProduct.price)*currentUpdateProduct.quantity
            } else {
                product_price = parseInt(currentUpdateProduct.discunt)*currentUpdateProduct.quantity
            }

            total_price.innerHTML = parseInt(total_price.innerHTML) - product_price;
            realsum.innerHTML = parseInt(realsum.innerHTML) - parseInt(currentUpdateProduct.price)*currentUpdateProduct.quantity
            if(currentUpdateProduct.discunt != null || currentUpdateProduct.discunt > 0){
              benefit.innerHTML = parseInt(realsum.innerHTML) - parseInt(total_price.innerHTML)
            }


            jsonProArray = jsonProArray.filter(function(pro) {
                if (pro.id != product_id) {
                    return pro;
                }
            });

            textProducts = JSON.stringify(jsonProArray)
            localStorage.removeItem('products')
            localStorage.setItem('products', textProducts)
            checkCart()
        }
        function NoAuthtrash(el, product_id) {
            let trash_icon = '';
            console.log(el.closest('.parent_cart'))
            trash_icon = el.parentElement.children[2].innerHTML;
            el.parentElement.children[2].innerHTML =
                `
                <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
            `
            jsonProArray = JSON.parse(localStorage.getItem('products'));
            jsonProArray.find(function(pro) {
                if (pro.id == product_id) {
                    currentUpdateProduct = pro
                }
            })
            cart_counter.innerHTML--
            el.parentElement.classList.remove('flex')
            el.parentElement.classList.add('hidden')
            el.closest('.parent_cart').remove()

            if (currentUpdateProduct.discunt == null || currentUpdateProduct.discunt < 1) {
                product_price = parseInt(currentUpdateProduct.price)
            } else {
                product_price = parseInt(currentUpdateProduct.discunt)
            }

            total_price.innerHTML = parseInt(total_price.innerHTML) - product_price;
            realsum.innerHTML = parseInt(realsum.innerHTML) - parseInt(currentUpdateProduct.price)
            benefit.innerHTML = parseInt(realsum.innerHTML) - parseInt(total_price.innerHTML)


            jsonProArray = jsonProArray.filter(function(pro) {
                if (pro.id != product_id) {
                    return pro;
                }
            });

            textProducts = JSON.stringify(jsonProArray)
            localStorage.removeItem('products')
            localStorage.setItem('products', textProducts)
            checkCart()
        }

        function addProducsToCart() {

            if (localStorage.getItem('products') != null) {
                jsonProArray = JSON.parse(localStorage.getItem('products'));

                jsonProArray.forEach(pro => {
                    console.log(pro);


                    div_image = document.createElement('div');
                    div_text_and_counter = document.createElement('div');
                    parent_div = document.createElement('div');
                    parent_div.classList = `parent_cart w-full flex justify-start items-center border-2 border-(--product) gap-4 bg-white rounded-xl xl:p-2 p-1.5 relative`;
                    div_image.classList = `xl:min-w-22 xl:min-h-22 xl:w-22 xl:h-22 min-w-18 min-h-18 w-18 h-18 bg-(--product) rounded-xl flex justify-center items-center`;
                    if (pro.path != null) {
                        div_image.innerHTML = `<img class="max-w-full max-h-full rounded-xl" src="{{ asset('storage/product_medias/${pro.path}') }}" alt="">`;
                    } else {
                        div_image.innerHTML = `<div class="max-w-full max-h-full rounded-xl"> 🖼 </div>`
                    }
                    div_text_and_counter.classList = `xl:gap-7 gap-3 flex justify-between`;
                    let html =
                        `
                        <div class="flex flex-col justify-center items-start">
                            <h5 class="xl:text-xl text-lg font-bold text-(--title)"> ${pro.title} </h5>
                            <p class="xl:text-xs text-[10px] text-(--discription)">${pro.summary}</p>
                        </div>
                                
                        `
                    if (pro.discunt == null || pro.discunt < 1) {
                        html +=
                            `
                                <div class="flex justify-start items-center gap-2">
                                    <div class="flex flex-col justify-start items-end gap-2">
                                        <div class="text-[#316361] flex justify-start items-center gap-1">
                                            <span class="xl:text-lg font-bold">${pro.price}</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                    <span class="xl:text-sm text-xs px-2 py-1 rounded-xl bg-red-200 text-red-900">20%</span>
                                </div>
                            `
                    } else {
                        html +=
                            ` 
                              <div class="flex justify-start items-center gap-2">
                                  <div class="flex flex-col justify-start items-end gap-2">
                                      <del class="xl:text-xs text-[10px] text-(--discription) flex justify-start items-center gap-1">
                                          <span>${pro.price}</span>
                                          <span>تومان</span>
                                      </del>
                                      <div class="text-[#316361] flex justify-start items-center gap-1">
                                          <span class="xl:text-lg font-bold">${pro.discunt}</span>
                                          <span>تومان</span>
                                      </div>
                                  </div>
                                  <span class="xl:text-sm text-xs px-2 py-1 rounded-xl bg-red-200 text-red-900">20%</span>
                              </div>
                            `
                    }
                    html += `<span class="min-w-[1px] w-[1px] max-w-[1px] min-h-9/12 rounded-full bg-(--product)"></span>`;
                    html +=
                        `
                        <div class='flex justify-start gap-10 items-center px-4'>
                          <div class='flex xl:gap-5 gap-2 border-2 border-[#E5EBEB] rounded-full items-center text-center xl:px-4 px-3 xl:py-2 py-1.5'>
                              <div onclick="updateNoAuthCart(this,${pro.id},'plus')" class='xl:size-4 size-3  text-center items-center flex justify-center cursor-pointer'>
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" /></svg>
                              </div>
                              <div class='p-2 text-center items-center flex justify-center '><input type="number" class='w-5 outline-none text-center items-center text-black' readonly value="${pro.quantity}"></div>
                        `
                    if (pro.quantity == 1) {
                        html +=
                            `
                              <div onclick="NoAuthtrash(this,${pro.id})" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'>
                                  <svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" /> </svg>
                              </div>
                            `
                    } else {
                        html +=
                            `
                              <div onclick="updateNoAuthCart(this,${pro.id},'minus')" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                      <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                  </svg>
                              </div>
                            `
                    }
                    html +=
                     `
                              <div onclick="NoAuthFullTrash(this,${pro.id})" class='absolute top-2 left-2 size-4 text-center items-center flex justify-center cursor-pointer'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                      <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                  </svg>
                              </div>
                          </div>
                      </div>
                    `








                    div_text_and_counter.innerHTML = html;
                    parent_div.appendChild(div_image)
                    parent_div.appendChild(div_text_and_counter)
                    cart_list.appendChild(parent_div);
                    console.log(cart_list);


                    count_noAuth++;
                    // if(pro.discunt==null || pro.discunt<1){
                    //     total_price_noAuth+=parseInt(pro.price) * pro.quantity;
                    // }else{
                    //     total_price_noAuth+=parseInt(pro.discunt) * pro.quantity;

                    // }

                    // total_price.innerHTML=parseInt(total_price.innerHTML)+total_price_noAuth;
                    // realsum.innerHTML=parseInt(realsum.innerHTML)+parseInt(pro.price);

                    if (pro.discunt !== "" || pro.discunt > 1) {
                        product_price_noAuth = parseInt(pro.discunt) * pro.quantity
                    } else {
                        product_price_noAuth = parseInt(pro.price) * pro.quantity
                    }
                    total_price.innerHTML = parseInt(total_price.innerHTML) + product_price_noAuth;
                    realsum.innerHTML = parseInt(realsum.innerHTML) + parseInt(pro.price) * pro.quantity;
                })
                cart_counter.innerHTML = parseInt(cart_counter.innerHTML) + count_noAuth;
                benefit.innerHTML = parseInt(realsum.innerHTML) - parseInt(total_price.innerHTML)
            }
        }
        addProducsToCart();

        function checkCart() {

            if (cart_list.children.length == 0) {
                cart_list.innerHTML =
                    `
                    <div class="relative w-full min-h-[420px] grid place-items-center bg-gradient-to-br from-slate-50 to-cyan-50 p-8 rounded-2xl">

                    <!-- کارت -->
                    <div class="w-full bg-white rounded-3xl border border-slate-100 shadow-[0_10px_40px_-15px_rgba(13,148,136,0.25)] px-8 py-12 text-center">

                        <!-- آیکون -->
                        <div class="relative w-28 h-28 mx-auto mb-6 grid place-items-center rounded-full bg-gradient-to-br from-cyan-50 to-teal-50 border border-cyan-100">
                        <!-- ضربان قلب کوچک بالا -->
                        <div class="absolute -top-1 -right-1 w-6 h-6 rounded-full bg-teal-500/10 border border-teal-500/20 grid place-items-center">
                            <div class="w-2 h-2 rounded-full bg-teal-500 animate-pulse"></div>
                        </div>

                        <svg viewBox="0 0 24 24" class="w-12 h-12" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <g class="text-teal-500">
                            <circle cx="9" cy="20" r="1.4" />
                            <circle cx="18" cy="20" r="1.4" />
                            <path d="M2 3h2.2l2.2 11.2a2 2 0 0 0 2 1.6h8.6a2 2 0 0 0 2-1.6L21 7H5.2" />
                            </g>
                        </svg>
                        </div>

                        <!-- متن -->
                        <h2 class="text-xl font-bold text-slate-800 mb-2">سبد خرید خالی است</h2>
                        <p class="text-sm leading-7 text-slate-500 mb-8">
                        هنوز تجهیزاتی انتخاب نکردی.<br />
                        از میان محصولات پزشکی ما انتخاب کن.
                        </p>

                    </div>
                    </div>
                `
                formButton.disabled = true;
                formButton.innerHTML = `سبد خرید خالی است`;
                codeInput.disabled = true;

            }
        }
        checkCart()
        let form =document.getElementById('form');
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