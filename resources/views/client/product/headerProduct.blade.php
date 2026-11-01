<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<style>
    :root {
        --background: #F6FAFC;
        --background-2: #EAF3F6;
        --card: #FFFFFF;
        --card-2: #F1F7F8;

        --green: #168A8A;
        --green-dark: #0F7070;

        --purple: #2F80A8;
        --magenta: #20A39E;

        --text: #183B4E;
        --text-secondary: #64748B;
        --text-muted: #94A3B8;
        --border: #D9E6EA;
    }

    .transition_root {
        transition: all 300ms ease-in;
    }
</style>

<body class='body relative'>




    <div class="w-full flex justify-center fixed top-0 z-100 ">
        <div class="flex w-19/20 bg-[#f3f4f6] justify-center py-2 mt-5 head">
            <div class="w-19/20 flex justify-between max-lg:items-center">
                <div class="max-lg:w-1/3 lg:hidden">
                    <div onclick="hambarger_menue('open')">
                        <svg class="w-6 h-8" xmlns="http://www.w3.org/2000/svg" width="10"
                            height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round">
                            <line x1="3" y1="6" x2="21" y2="6" />
                            <line x1="3" y1="12" x2="21" y2="12" />
                            <line x1="3" y1="18" x2="21" y2="18" />
                        </svg>
                    </div>

                    <!-- hambuarger_menu_item -->
                    <div class="w-full h-dvh fixed top-0 right-0 bg-black/50 z-2 invisible opacity-0 transition_normal" onclick="hambarger_menue('close')" id="hambarger_menue_item_close"></div>
                    <div class="sm:w-5/12 w-10/12 h-dvh bg-white fixed top-0 right-0 flex flex-col gap-5 justify-start items-start pt-10 p-4 z-3 translate-x-full transition_normal" id="hambarger_menue_item">
                        <div class="absolute top-4 right-4" onclick="hambarger_menue('close')">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-5 fill-(--gold-primary)">
                                <path d="M378.4 71.4c8.5-10.1 7.2-25.3-2.9-33.8s-25.3-7.2-33.8 2.9L192 218.7 42.4 40.6C33.9 30.4 18.7 29.1 8.6 37.6S-2.9 61.3 5.6 71.4L160.7 256 5.6 440.6c-8.5 10.2-7.2 25.3 2.9 33.8s25.3 7.2 33.8-2.9L192 293.3 341.6 471.4c8.5 10.1 23.7 11.5 33.8 2.9s11.5-23.7 2.9-33.8L223.3 256l155-184.6z">
                                </path>
                            </svg>
                        </div>
                        <div class="w-full flex gap-2 justify-center items-center">
                            <img src="{{asset('assets/img/logo.png')}}" alt="" class="max-w-20 max-h-20 min-h-10 min-w-10">
                            <h3 class="sm:text-xl text-lg font-bold">وفادار طب</h3>
                        </div>
                        <div class="w-full flex flex-col items-center gap-3">
                            <div class="w-full py-3 bg-(--product) rounded-full flex gap-2 justify-start items-center px-5 group">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="size-5 fill-[#01906A]">
                                        <path d="M272.5 5.7c9-7.6 22.1-7.6 31.1 0l264 224c10.1 8.6 11.4 23.7 2.8 33.8s-23.7 11.3-33.8 2.8L512 245.5V432c0 44.2-35.8 80-80 80H144c-44.2 0-80-35.8-80-80V245.5L39.5 266.3c-10.1 8.6-25.3 7.3-33.8-2.8s-7.3-25.3 2.8-33.8l264-224zM288 55.5L112 204.8V432c0 17.7 14.3 32 32 32h48V312c0-22.1 17.9-40 40-40H344c22.1 0 40 17.9 40 40V464h48c17.7 0 32-14.3 32-32V204.8L288 55.5zM240 464h96V320H240V464z">
                                        </path>
                                    </svg>
                                </div>
                                <span class="text-[#01906A]  font-bold group-active:pr-2 transition_normal max-sm:text-sm">خانه</span>
                            </div>
                            <div class="w-full py-3 active:bg-(--product) rounded-full flex gap-2 justify-start items-center px-5 group">
                                <div>

                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 fill-none stroke-[#01906A]" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                        <polyline points="2 17 12 22 22 17"></polyline>
                                        <polyline points="2 12 12 17 22 12"></polyline>
                                    </svg>
                                </div>
                                <span class=" font-bold group-active:pr-2 group-active:text-[#01906A] transition_normal max-sm:text-sm">محصولات</span>
                            </div>
                            <div class="w-full py-3 active:bg-(--product) rounded-full flex gap-2 justify-start items-center px-5 group">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 fill-none stroke-[#01906A]" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                </div>
                                <span class=" font-bold group-active:pr-2 group-active:text-[#01906A] transition_normal max-sm:text-sm">مقالات</span>
                            </div>
                            <div class="w-full py-3 active:bg-(--product) rounded-full flex gap-2 justify-start items-center px-5 group">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 fill-none stroke-[#01906A]" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                        <circle cx="12" cy="11" r="2.5"></circle>
                                        <path d="M17 17v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3v1"></path>
                                    </svg>
                                </div>
                                <span class=" font-bold group-active:pr-2 group-active:text-[#01906A] transition_normal max-sm:text-sm">درباره ما</span>
                            </div>
                            <div class="w-full py-3 active:bg-(--product) rounded-full flex gap-2 justify-start items-center px-5 group">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-5 fill-[#01906A]">
                                        <path d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 295.2 175.2 485.6 400.1 509.5c9.8 1 19.6 1.8 29.6 2.2c0 0 0 0 0 0c0 0 .1 0 .1 0c6.1 .2 12.1 .4 18.2 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM441.5 464C225.8 460.5 51.5 286.2 48.1 70.5l99.2-21.3 43 100.4L154.4 179c-18.2 14.9-22.9 40.8-11.1 61.2c30.9 53.3 75.3 97.7 128.6 128.6c20.4 11.8 46.3 7.1 61.2-11.1l29.4-35.9 100.4 43L441.5 464zM48 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0s0 0 0 0">
                                        </path>
                                    </svg>
                                </div>
                                <span class=" font-bold group-active:pr-2 group-active:text-[#01906A] transition_normal max-sm:text-sm">تماس با ما</span>
                            </div>
                        </div>
                    </div>
                    <!-- hambuarger_menu_item -->
                </div>
                <div class="max-lg:w-1/3 flex items-center max-lg:justify-center lg:gap-10">
                    <img src="{{asset('assets/img/logo.png')}}" alt="" class="max-w-20 sm:max-w-30 md:max-w-50 md:min-w-30 max-h-15">
                    <ul class="flex gap-7 xl:gap-9 max-lg:hidden h-full items-center max-xl:text-sm">
                        <li class="lable-1 group">
                            <a href="">
                                <span class="text-[#03a297] font-bold">خانه</span>
                            </a>
                            <!-- <div class="lable-1-1 w-56 h-40 bg-white absolute mt-4">
                                <div class="w-full h-2 bg-green-400"></div>
                                <ul class="w-full h-38 flex flex-col items-center justify-center">
                                    <li>خانه</li>
                                    <li>خانه</li>
                                    <li>خانه</li>
                                </ul>
                            </div> -->
                        </li>

                        <li class="lable-1 group">
                            <a href="">
                                <span class="text-[#023350] font-bold group-hover:text-[#03a297] transition_normal group-active:text-[#03a297]">محصولات</span>
                            </a>
                            <div
                                class="w-full h-dvh fixed top-22 right-0 flex justify-center items-start lable-1-1 absolute">
                                <div class="w-full h-full bg-black/50 absolute -z-1"></div>
                                <div
                                    class="w-11/12 h-9/12 bg-[var(--background-2)] border border-text-[var(--green)] flex justify-start items-start py-5">
                                    <div
                                        class="h-full border-l border-[var(--green)] flex flex-col gap-2 justify-start items-start overflow-auto [&::-webkit-scrollbar]:w-2  [&::-webkit-scrollbar-thumb]:bg-[var(--green)]  [&::-webkit-scrollbar-thumb]:rounded-full pl-2">
                                        <div
                                            class="min-w-11/12 w-11/12 py-3 bg-[var(--background)] border-y-1 border-l-1 border-[var(--green)] flex justify-between items-center xl:px-4 px-2 rounded-y-xl rounded-l-xl transition_root">
                                            <div class="flex justify-start items-center xl:gap-3 gap-2 px-2">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        class="xl:size-8 lg:size-6">
                                                        <g fill="none" stroke="var(--green)" stroke-width="10"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <!-- Outer Card -->
                                                            <rect x="90" y="110" width="332" height="220" rx="10">
                                                            </rect>
                                                            <!-- Inner Border -->
                                                            <rect x="120" y="140" width="272" height="160" rx="2">
                                                            </rect>
                                                            <!-- Top Right Circle -->
                                                            <circle cx="340" cy="175" r="18"></circle>
                                                            <!-- Logo -->
                                                            <path d="
                                        M165 235
                                        L165 205
                                        Q165 180 188 180
                                        L205 180
                                        Q225 180 225 198
                                        Q225 214 208 214
                                        L188 214
                                        L188 225
                                        L215 225
                                        Q235 225 235 245
                                        L165 245
                                        Z"></path>
                                                            <!-- Text Line -->
                                                            <line x1="220" y1="225" x2="305" y2="225"></line>
                                                            <!-- Corner Accent -->
                                                            <path d="M375 270 L375 295 L350 295"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <span class="max-xl:text-sm font-bold text-[var(--green)]">
                                                    تمام تجهیزات پزشکی وفادار</span>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="size-4 fill-[var(--green)] rotate-90">
                                                    <path
                                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div
                                            class="min-w-11/12 w-11/12 group py-3 hover:bg-[var(--background)]  border-y-1 border-l-1 border-[var(--background-2)] hover:border-[var(--green)] flex justify-between items-center xl:px-4 px-2 rounded-y-xl rounded-l-xl transition_root">
                                            <div class="flex justify-start items-center xl:gap-3 gap-2 px-2">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        class="xl:size-8 lg:size-6">
                                                        <g fill="none"
                                                            class="stroke-[var(--text)] group-hover:stroke-[var(--green)] transition_root"
                                                            stroke-width="10" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <!-- Outer Card -->
                                                            <rect x="90" y="110" width="332" height="220" rx="10">
                                                            </rect>
                                                            <!-- Inner Border -->
                                                            <rect x="120" y="140" width="272" height="160" rx="2">
                                                            </rect>
                                                            <!-- Top Right Circle -->
                                                            <circle cx="340" cy="175" r="18"></circle>
                                                            <!-- Logo -->
                                                            <path d="
                                        M165 235
                                        L165 205
                                        Q165 180 188 180
                                        L205 180
                                        Q225 180 225 198
                                        Q225 214 208 214
                                        L188 214
                                        L188 225
                                        L215 225
                                        Q235 225 235 245
                                        L165 245
                                        Z"></path>
                                                            <!-- Text Line -->
                                                            <line x1="220" y1="225" x2="305" y2="225"></line>
                                                            <!-- Corner Accent -->
                                                            <path d="M375 270 L375 295 L350 295"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <span
                                                    class="max-xl:text-sm font-bold text-[var(--text)] group-hover:text-[var(--green)] transition_root group-hover:pr-2">
                                                    لوازم تشخیصی و موارد مشابه</span>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="size-4 fill-[var(--text)] group-hover:fill-[var(--green)] rotate-90 transition_root">
                                                    <path
                                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div
                                            class="min-w-11/12 w-11/12 group py-3 hover:bg-[var(--background)]  border-y-1 border-l-1 border-[var(--background-2)] hover:border-[var(--green)] flex justify-between items-center xl:px-4 px-2 rounded-y-xl rounded-l-xl transition_root">
                                            <div class="flex justify-start items-center xl:gap-3 gap-2 px-2">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        class="xl:size-8 lg:size-6">
                                                        <g fill="none"
                                                            class="stroke-[var(--text)] group-hover:stroke-[var(--green)] transition_root"
                                                            stroke-width="10" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <!-- Outer Card -->
                                                            <rect x="90" y="110" width="332" height="220" rx="10">
                                                            </rect>
                                                            <!-- Inner Border -->
                                                            <rect x="120" y="140" width="272" height="160" rx="2">
                                                            </rect>
                                                            <!-- Top Right Circle -->
                                                            <circle cx="340" cy="175" r="18"></circle>
                                                            <!-- Logo -->
                                                            <path d="
                                        M165 235
                                        L165 205
                                        Q165 180 188 180
                                        L205 180
                                        Q225 180 225 198
                                        Q225 214 208 214
                                        L188 214
                                        L188 225
                                        L215 225
                                        Q235 225 235 245
                                        L165 245
                                        Z"></path>
                                                            <!-- Text Line -->
                                                            <line x1="220" y1="225" x2="305" y2="225"></line>
                                                            <!-- Corner Accent -->
                                                            <path d="M375 270 L375 295 L350 295"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <span
                                                    class="max-xl:text-sm font-bold text-[var(--text)] group-hover:text-[var(--green)] transition_root group-hover:pr-2">
                                                    لوازم تشخیصی و موارد مشابه</span>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="size-4 fill-[var(--text)] group-hover:fill-[var(--green)] rotate-90 transition_root">
                                                    <path
                                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div
                                            class="min-w-11/12 w-11/12 group py-3 hover:bg-[var(--background)]  border-y-1 border-l-1 border-[var(--background-2)] hover:border-[var(--green)] flex justify-between items-center xl:px-4 px-2 rounded-y-xl rounded-l-xl transition_root">
                                            <div class="flex justify-start items-center xl:gap-3 gap-2 px-2">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        class="xl:size-8 lg:size-6">
                                                        <g fill="none"
                                                            class="stroke-[var(--text)] group-hover:stroke-[var(--green)] transition_root"
                                                            stroke-width="10" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <!-- Outer Card -->
                                                            <rect x="90" y="110" width="332" height="220" rx="10">
                                                            </rect>
                                                            <!-- Inner Border -->
                                                            <rect x="120" y="140" width="272" height="160" rx="2">
                                                            </rect>
                                                            <!-- Top Right Circle -->
                                                            <circle cx="340" cy="175" r="18"></circle>
                                                            <!-- Logo -->
                                                            <path d="
                                        M165 235
                                        L165 205
                                        Q165 180 188 180
                                        L205 180
                                        Q225 180 225 198
                                        Q225 214 208 214
                                        L188 214
                                        L188 225
                                        L215 225
                                        Q235 225 235 245
                                        L165 245
                                        Z"></path>
                                                            <!-- Text Line -->
                                                            <line x1="220" y1="225" x2="305" y2="225"></line>
                                                            <!-- Corner Accent -->
                                                            <path d="M375 270 L375 295 L350 295"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <span
                                                    class="max-xl:text-sm font-bold text-[var(--text)] group-hover:text-[var(--green)] transition_root group-hover:pr-2">
                                                    کرم ها</span>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="size-4 fill-[var(--text)] group-hover:fill-[var(--green)] rotate-90 transition_root">
                                                    <path
                                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div
                                            class="min-w-11/12 w-11/12 group py-3 hover:bg-[var(--background)]  border-y-1 border-l-1 border-[var(--background-2)] hover:border-[var(--green)] flex justify-between items-center xl:px-4 px-2 rounded-y-xl rounded-l-xl transition_root">
                                            <div class="flex justify-start items-center xl:gap-3 gap-2 px-2">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        class="xl:size-8 lg:size-6">
                                                        <g fill="none"
                                                            class="stroke-[var(--text)] group-hover:stroke-[var(--green)] transition_root"
                                                            stroke-width="10" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <!-- Outer Card -->
                                                            <rect x="90" y="110" width="332" height="220" rx="10">
                                                            </rect>
                                                            <!-- Inner Border -->
                                                            <rect x="120" y="140" width="272" height="160" rx="2">
                                                            </rect>
                                                            <!-- Top Right Circle -->
                                                            <circle cx="340" cy="175" r="18"></circle>
                                                            <!-- Logo -->
                                                            <path d="
                                        M165 235
                                        L165 205
                                        Q165 180 188 180
                                        L205 180
                                        Q225 180 225 198
                                        Q225 214 208 214
                                        L188 214
                                        L188 225
                                        L215 225
                                        Q235 225 235 245
                                        L165 245
                                        Z"></path>
                                                            <!-- Text Line -->
                                                            <line x1="220" y1="225" x2="305" y2="225"></line>
                                                            <!-- Corner Accent -->
                                                            <path d="M375 270 L375 295 L350 295"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <span
                                                    class="max-xl:text-sm font-bold text-[var(--text)] group-hover:text-[var(--green)] transition_root group-hover:pr-2">
                                                    لوازم جانبی</span>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="size-4 fill-[var(--text)] group-hover:fill-[var(--green)] rotate-90 transition_root">
                                                    <path
                                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div
                                            class="min-w-11/12 w-11/12 group py-3 hover:bg-[var(--background)]  border-y-1 border-l-1 border-[var(--background-2)] hover:border-[var(--green)] flex justify-between items-center xl:px-4 px-2 rounded-y-xl rounded-l-xl transition_root">
                                            <div class="flex justify-start items-center xl:gap-3 gap-2 px-2">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        class="xl:size-8 lg:size-6">
                                                        <g fill="none"
                                                            class="stroke-[var(--text)] group-hover:stroke-[var(--green)] transition_root"
                                                            stroke-width="10" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <!-- Outer Card -->
                                                            <rect x="90" y="110" width="332" height="220" rx="10">
                                                            </rect>
                                                            <!-- Inner Border -->
                                                            <rect x="120" y="140" width="272" height="160" rx="2">
                                                            </rect>
                                                            <!-- Top Right Circle -->
                                                            <circle cx="340" cy="175" r="18"></circle>
                                                            <!-- Logo -->
                                                            <path d="
                                        M165 235
                                        L165 205
                                        Q165 180 188 180
                                        L205 180
                                        Q225 180 225 198
                                        Q225 214 208 214
                                        L188 214
                                        L188 225
                                        L215 225
                                        Q235 225 235 245
                                        L165 245
                                        Z"></path>
                                                            <!-- Text Line -->
                                                            <line x1="220" y1="225" x2="305" y2="225"></line>
                                                            <!-- Corner Accent -->
                                                            <path d="M375 270 L375 295 L350 295"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <span
                                                    class="max-xl:text-sm font-bold text-[var(--text)] group-hover:text-[var(--green)] transition_root group-hover:pr-2">
                                                    لوازم پانسمان</span>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="size-4 fill-[var(--text)] group-hover:fill-[var(--green)] rotate-90 transition_root">
                                                    <path
                                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div
                                            class="min-w-11/12 w-11/12 group py-3 hover:bg-[var(--background)]  border-y-1 border-l-1 border-[var(--background-2)] hover:border-[var(--green)] flex justify-between items-center xl:px-4 px-2 rounded-y-xl rounded-l-xl transition_root">
                                            <div class="flex justify-start items-center xl:gap-3 gap-2 px-2">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        class="xl:size-8 lg:size-6">
                                                        <g fill="none"
                                                            class="stroke-[var(--text)] group-hover:stroke-[var(--green)] transition_root"
                                                            stroke-width="10" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <!-- Outer Card -->
                                                            <rect x="90" y="110" width="332" height="220" rx="10">
                                                            </rect>
                                                            <!-- Inner Border -->
                                                            <rect x="120" y="140" width="272" height="160" rx="2">
                                                            </rect>
                                                            <!-- Top Right Circle -->
                                                            <circle cx="340" cy="175" r="18"></circle>
                                                            <!-- Logo -->
                                                            <path d="
                                        M165 235
                                        L165 205
                                        Q165 180 188 180
                                        L205 180
                                        Q225 180 225 198
                                        Q225 214 208 214
                                        L188 214
                                        L188 225
                                        L215 225
                                        Q235 225 235 245
                                        L165 245
                                        Z"></path>
                                                            <!-- Text Line -->
                                                            <line x1="220" y1="225" x2="305" y2="225"></line>
                                                            <!-- Corner Accent -->
                                                            <path d="M375 270 L375 295 L350 295"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <span
                                                    class="max-xl:text-sm font-bold text-[var(--text)] group-hover:text-[var(--green)] transition_root group-hover:pr-2">
                                                    لوازم تشخیصی</span>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="size-4 fill-[var(--text)] group-hover:fill-[var(--green)] rotate-90 transition_root">
                                                    <path
                                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div
                                            class="min-w-11/12 w-11/12 group py-3 hover:bg-[var(--background)]  border-y-1 border-l-1 border-[var(--background-2)] hover:border-[var(--green)] flex justify-between items-center xl:px-4 px-2 rounded-y-xl rounded-l-xl transition_root">
                                            <div class="flex justify-start items-center xl:gap-3 gap-2 px-2">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        class="xl:size-8 lg:size-6">
                                                        <g fill="none"
                                                            class="stroke-[var(--text)] group-hover:stroke-[var(--green)] transition_root"
                                                            stroke-width="10" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <!-- Outer Card -->
                                                            <rect x="90" y="110" width="332" height="220" rx="10">
                                                            </rect>
                                                            <!-- Inner Border -->
                                                            <rect x="120" y="140" width="272" height="160" rx="2">
                                                            </rect>
                                                            <!-- Top Right Circle -->
                                                            <circle cx="340" cy="175" r="18"></circle>
                                                            <!-- Logo -->
                                                            <path d="
                                        M165 235
                                        L165 205
                                        Q165 180 188 180
                                        L205 180
                                        Q225 180 225 198
                                        Q225 214 208 214
                                        L188 214
                                        L188 225
                                        L215 225
                                        Q235 225 235 245
                                        L165 245
                                        Z"></path>
                                                            <!-- Text Line -->
                                                            <line x1="220" y1="225" x2="305" y2="225"></line>
                                                            <!-- Corner Accent -->
                                                            <path d="M375 270 L375 295 L350 295"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <span
                                                    class="max-xl:text-sm font-bold text-[var(--text)] group-hover:text-[var(--green)] transition_root group-hover:pr-2">
                                                    لوازم تشخیصی و موارد مشابه</span>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="size-4 fill-[var(--text)] group-hover:fill-[var(--green)] rotate-90 transition_root">
                                                    <path
                                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div
                                            class="min-w-11/12 w-11/12 group py-3 hover:bg-[var(--background)]  border-y-1 border-l-1 border-[var(--background-2)] hover:border-[var(--green)] flex justify-between items-center xl:px-4 px-2 rounded-y-xl rounded-l-xl transition_root">
                                            <div class="flex justify-start items-center xl:gap-3 gap-2 px-2">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        class="xl:size-8 lg:size-6">
                                                        <g fill="none"
                                                            class="stroke-[var(--text)] group-hover:stroke-[var(--green)] transition_root"
                                                            stroke-width="10" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <!-- Outer Card -->
                                                            <rect x="90" y="110" width="332" height="220" rx="10">
                                                            </rect>
                                                            <!-- Inner Border -->
                                                            <rect x="120" y="140" width="272" height="160" rx="2">
                                                            </rect>
                                                            <!-- Top Right Circle -->
                                                            <circle cx="340" cy="175" r="18"></circle>
                                                            <!-- Logo -->
                                                            <path d="
                                        M165 235
                                        L165 205
                                        Q165 180 188 180
                                        L205 180
                                        Q225 180 225 198
                                        Q225 214 208 214
                                        L188 214
                                        L188 225
                                        L215 225
                                        Q235 225 235 245
                                        L165 245
                                        Z"></path>
                                                            <!-- Text Line -->
                                                            <line x1="220" y1="225" x2="305" y2="225"></line>
                                                            <!-- Corner Accent -->
                                                            <path d="M375 270 L375 295 L350 295"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <span
                                                    class="max-xl:text-sm font-bold text-[var(--text)] group-hover:text-[var(--green)] transition_root group-hover:pr-2">
                                                    لوازم تشخیصی و موارد مشابه</span>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="size-4 fill-[var(--text)] group-hover:fill-[var(--green)] rotate-90 transition_root">
                                                    <path
                                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div
                                            class="min-w-11/12 w-11/12 group py-3 hover:bg-[var(--background)]  border-y-1 border-l-1 border-[var(--background-2)] hover:border-[var(--green)] flex justify-between items-center xl:px-4 px-2 rounded-y-xl rounded-l-xl transition_root">
                                            <div class="flex justify-start items-center xl:gap-3 gap-2 px-2">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        class="xl:size-8 lg:size-6">
                                                        <g fill="none"
                                                            class="stroke-[var(--text)] group-hover:stroke-[var(--green)] transition_root"
                                                            stroke-width="10" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <!-- Outer Card -->
                                                            <rect x="90" y="110" width="332" height="220" rx="10">
                                                            </rect>
                                                            <!-- Inner Border -->
                                                            <rect x="120" y="140" width="272" height="160" rx="2">
                                                            </rect>
                                                            <!-- Top Right Circle -->
                                                            <circle cx="340" cy="175" r="18"></circle>
                                                            <!-- Logo -->
                                                            <path d="
                                        M165 235
                                        L165 205
                                        Q165 180 188 180
                                        L205 180
                                        Q225 180 225 198
                                        Q225 214 208 214
                                        L188 214
                                        L188 225
                                        L215 225
                                        Q235 225 235 245
                                        L165 245
                                        Z"></path>
                                                            <!-- Text Line -->
                                                            <line x1="220" y1="225" x2="305" y2="225"></line>
                                                            <!-- Corner Accent -->
                                                            <path d="M375 270 L375 295 L350 295"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <span
                                                    class="max-xl:text-sm font-bold text-[var(--text)] group-hover:text-[var(--green)] transition_root group-hover:pr-2">
                                                    لوازم تشخیصی و موارد مشابه</span>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="size-4 fill-[var(--text)] group-hover:fill-[var(--green)] rotate-90 transition_root">
                                                    <path
                                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div
                                            class="min-w-11/12 w-11/12 group py-3 hover:bg-[var(--background)]  border-y-1 border-l-1 border-[var(--background-2)] hover:border-[var(--green)] flex justify-between items-center xl:px-4 px-2 rounded-y-xl rounded-l-xl transition_root">
                                            <div class="flex justify-start items-center xl:gap-3 gap-2 px-2">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        class="xl:size-8 lg:size-6">
                                                        <g fill="none"
                                                            class="stroke-[var(--text)] group-hover:stroke-[var(--green)] transition_root"
                                                            stroke-width="10" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <!-- Outer Card -->
                                                            <rect x="90" y="110" width="332" height="220" rx="10">
                                                            </rect>
                                                            <!-- Inner Border -->
                                                            <rect x="120" y="140" width="272" height="160" rx="2">
                                                            </rect>
                                                            <!-- Top Right Circle -->
                                                            <circle cx="340" cy="175" r="18"></circle>
                                                            <!-- Logo -->
                                                            <path d="
                                        M165 235
                                        L165 205
                                        Q165 180 188 180
                                        L205 180
                                        Q225 180 225 198
                                        Q225 214 208 214
                                        L188 214
                                        L188 225
                                        L215 225
                                        Q235 225 235 245
                                        L165 245
                                        Z"></path>
                                                            <!-- Text Line -->
                                                            <line x1="220" y1="225" x2="305" y2="225"></line>
                                                            <!-- Corner Accent -->
                                                            <path d="M375 270 L375 295 L350 295"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <span
                                                    class="max-xl:text-sm font-bold text-[var(--text)] group-hover:text-[var(--green)] transition_root group-hover:pr-2">
                                                    لوازم تشخیصی و موارد مشابه</span>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="size-4 fill-[var(--text)] group-hover:fill-[var(--green)] rotate-90 transition_root">
                                                    <path
                                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div
                                            class="min-w-11/12 w-11/12 group py-3 hover:bg-[var(--background)]  border-y-1 border-l-1 border-[var(--background-2)] hover:border-[var(--green)] flex justify-between items-center xl:px-4 px-2 rounded-y-xl rounded-l-xl transition_root">
                                            <div class="flex justify-start items-center xl:gap-3 gap-2 px-2">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        class="xl:size-8 lg:size-6">
                                                        <g fill="none"
                                                            class="stroke-[var(--text)] group-hover:stroke-[var(--green)] transition_root"
                                                            stroke-width="10" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <!-- Outer Card -->
                                                            <rect x="90" y="110" width="332" height="220" rx="10">
                                                            </rect>
                                                            <!-- Inner Border -->
                                                            <rect x="120" y="140" width="272" height="160" rx="2">
                                                            </rect>
                                                            <!-- Top Right Circle -->
                                                            <circle cx="340" cy="175" r="18"></circle>
                                                            <!-- Logo -->
                                                            <path d="
                                        M165 235
                                        L165 205
                                        Q165 180 188 180
                                        L205 180
                                        Q225 180 225 198
                                        Q225 214 208 214
                                        L188 214
                                        L188 225
                                        L215 225
                                        Q235 225 235 245
                                        L165 245
                                        Z"></path>
                                                            <!-- Text Line -->
                                                            <line x1="220" y1="225" x2="305" y2="225"></line>
                                                            <!-- Corner Accent -->
                                                            <path d="M375 270 L375 295 L350 295"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <span
                                                    class="max-xl:text-sm font-bold text-[var(--text)] group-hover:text-[var(--green)] transition_root group-hover:pr-2">
                                                    لوازم تشخیصی و موارد مشابه</span>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="size-4 fill-[var(--text)] group-hover:fill-[var(--green)] rotate-90 transition_root">
                                                    <path
                                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>


                                    </div>
                                    <div
                                        class="w-19/24 h-full flex flex-col">
                                        <div class="w-11/12 mx-auto flex  border-b-1 border-[var(--purple)]">
                                            <span class="text-[var(--text)] text-[1.3rem] font-bold pb-2">تمام محصولات مصرفی خانگی</span>
                                        </div>
                                        <div class="w-11/12 mx-auto h-full flex flex-wrap gap-3 justify-start pt-10  overflow-auto [&::-webkit-scrollbar]:w-2  [&::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&::-webkit-scrollbar-thumb]:rounded-full">
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div class="border-r-3 pr-2 border-[var(--green)]">
                                                    <h1 class="text-[var(--text)]">لوازم تشخیصی</h1>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                            <div class="px-5 h-50">
                                                <div>
                                                    <h class="text-[var(--text)]" 1>لوازم تشخیصی</h>
                                                </div>
                                                <div class="flex flex-col items-center gap-3 pt-3">
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                    <span class="text-[var(--text-muted)] hover:text-[var(--purple)]">کرم </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="lable-1 group">
                            <a href="">
                                <span class="text-[#023350] font-bold group-hover:text-[#03a297] transition_normal group-active:text-[#03a297]">برند ها</span>
                            </a>
                            <!-- <div class="lable-1-1 w-56 h-40 bg-white absolute mt-4">
                                <div class="w-full h-2 bg-green-400"></div>
                                <ul class="w-full h-38 flex flex-col items-center justify-center">
                                    <li>خانه</li>
                                    <li>خانه</li>
                                    <li>خانه</li>
                                </ul>
                            </div> -->
                        </li>
                        <li class="lable-1 group">
                            <a href="">
                                <span class="text-[#023350] font-bold group-hover:text-[#03a297] transition_normal group-active:text-[#03a297]">اخبار و مقالات</span>
                            </a>
                            <!-- <div class="lable-1-1 w-56 h-40 bg-white absolute mt-4">
                                <div class="w-full h-2 bg-green-400"></div>
                                <ul class="w-full h-38 flex flex-col items-center justify-center">
                                    <li>خانه</li>
                                    <li>خانه</li>
                                    <li>خانه</li>
                                </ul>
                            </div> -->
                        </li>
                        <li class="lable-1 group">
                            <a href="">
                                <span class="text-[#023350] font-bold group-hover:text-[#03a297] transition_normal group-active:text-[#03a297]">درباره ما</span>
                            </a>
                            <!-- <div class="lable-1-1 w-56 h-40 bg-white absolute mt-4">
                                <div class="w-full h-2 bg-green-400"></div>
                                <ul class="w-full h-38 flex flex-col items-center justify-center">
                                    <li>درباره ما</li>
                                    <li>درباره ما</li>
                                    <li>درباره ما</li>
                                </ul>
                            </div> -->
                        </li>
                        <li class="group">
                            <a href="">
                                <span class="text-[#023350] font-bold group-hover:text-[#03a297] transition_normal group-active:text-[#03a297]">تماس با ما</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="max-lg:w-1/3 flex xl:gap-11 lg:gap-7 gap-4 justify-end">
                    <div class="flex gap-3 sm:gap-5 h-full items-center">
                        <div class="flex h-full items-center relative">
                            <div onclick="serchseting()">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="sm:size-5 size-4">
                                    <path d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z" />
                                </svg>
                            </div>
                            <!-- search_box_item -->
                            <div class="w-full h-dvh fixed bottom-0 right-0 invisible opacity-0 bg-black/30 z-5  transition_normal" onclick="serchseting()" id="search_close"></div>
                            <div class="lg:w-150 sm:w-100 w-70 h-0 absolute sm:left-0 -left-15 top-15 flex flex-col gap-3 rounded-xl overflow-y-hidden transition_fast z-6 bg-white"
                                id="search">
                                <form action="{{route('product.searchProduct')}}" method="POST" class="flex gap-2 w-95/100 mx-auto mt-3 bg-[#f0f0f1] rounded-xl px-3 py-1">
                                    @csrf
                                    <input type="text" name="title" class="w-9/10 md:w-full outline-none text-(--title) max-sm:text-sm" placeholder="کالای خود را جستوجو کن">
                                    <button class="cursor-pointer w-1/10 md:w-10 h-10  flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="sm:size-6 size-4 fill-gray-500">
                                            <path d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z" />
                                        </svg>

                                    </button>
                                </form>
                                <div class="w-95/100 mx-auto flex flex-col overflow-y-auto [&::-webkit-scrollbar]:w-1.5  [&::-webkit-scrollbar-thumb]:bg-(--primary_color)  [&::-webkit-scrollbar-thumb]:rounded-full">
                                    <div class="py-2 px-3 text-(--title) flex justify-between gap-4 items-center rounded-xl hover:bg-gray-50 transition_normal border-2 border-(--product)">
                                        <div class="flex justify-start gap-4 items-center">
                                            <div class="sm:size-17 size-14 bg-(--product) rounded-xl flex justify-center items-center p-1">
                                                <img src="{{asset('assets/img/logo.png')}}" alt="" class="max-w-full max-h-full min-w-1/2 min-h-1/2">
                                            </div>
                                            <div class="flex flex-col gap-2">
                                                <span class="font-bold max-sm:text-sm">عنوان محصول</span>
                                                <div class="flex gap-2 items-center text-(--discription)">
                                                    <span class="sm:text-sm text-xs font-bold">{{number_format(7500000)}}</span>
                                                    <span class="sm:text-xs text-[10px]">تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="sm:size-6 size-4 fill-gray-500">
                                                <path d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z" />
                                            </svg>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- search_box_item -->
                        </div>
                        @if(Auth::check())
                        <a href="{{route('user.profile')}}">
                            <div class='px-4 py-3 bg-[#EBECEE] hover:shadow-[0_0_2px_2px_#cccccc] rounded-xl transition_normal max-xl:text-sm max-sm:text-xs max-lg:hidden'>{{Auth::user()->name}} خوش آمدید</div>
                            <div class="lg:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="sm:size-5 size-4">
                                    <path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                </svg>
                            </div>
                        </a>
                        @else
                        <a href="{{route('user.loginPage')}}">
                            <svg class='sm:size-5 size-4' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>
                        </a>
                        @endif









                        <!-- cart new -->
                
                        <div class='relative group'>
                            <a href="{{route('cart.userCartList')}}" class="flex h-full items-center cursor-pointer" >
                                <svg class="sm:size-5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <circle cx="9" cy="21" r="1" />
                                    <circle cx="20" cy="21" r="1" />
                                    <path d="M1 1h4l2.68 13.39A2 2 0 0 0 9.64 16H19a2 2 0 0 0 2-1.72L23 6H6" />
                                </svg>
                            </a>

                            <!-- <div class="w-full h-dvh bg-black/50 fixed top-0 right-0 z-3"></div> -->
                            <div id='cart' class='absolute z-4 rounded-xl w-[60vw] max-h-0 hidden lg:group-hover:max-h-[80vh] overflow-y-hidden top-5 left-0 bg-white lg:flex flex-col gap-4 group-hover:p-5 transition_normal group-hover:shadow-[0px_0px_10px_5px] shadow-gray-300'>
                                    <div class=" w-full flex justify-between items-center">
                                        <div class="flex justify-start items-center gap-3">
                                            <div>
                                                <svg class="size-8" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                    <circle cx="9" cy="21" r="1"></circle>
                                                    <circle cx="20" cy="21" r="1"></circle>
                                                    <path d="M1 1h4l2.68 13.39A2 2 0 0 0 9.64 16H19a2 2 0 0 0 2-1.72L23 6H6"></path>
                                                </svg>
                                            </div>
                                            <div class="flex flex-col gap-2 justify-start items-start">
                                                <h3 class="text-xl font-bold">سبد خرید</h3>
                                                <p class="text-xs text-(--discription)"><span> 3 </span>محصول در سبد خرید شماست </p>

                                            </div>
                                        </div>
                                    
                                    </div>
                                    <?php
                                    $count = 0;
                                    $total_price = 0;
                                    ?>
                                    <div class='w-full flex flex-col gap-10 justify-center items-start'>
                                        <div id='cart_list' class='w-full  flex flex-col gap-2 max-h-70 overflow-y-auto [&::-webkit-scrollbar]:w-1.5  [&::-webkit-scrollbar-thumb]:bg-(--primary_color)  [&::-webkit-scrollbar-thumb]:rounded-full'>
                                            @if(Auth::check() && count($user->carts))
                                                @foreach($user->carts as $cart)
                                                    <?php
                                                    $count++;
                                                    $total_price += $cart->product->price * $cart->quantity;
                                                    ?>
                                                    <div class='parent_cart w-full flex justify-between  border-2 border-(--product) gap-4 bg-white rounded-xl xl:p-2 p-2 relative'>
                                                        <div class="flex gap-2 items-center">
                                                            <div class='xl:min-w-22 xl:min-h-22 xl:w-22 xl:h-22 min-w-18 min-h-18 w-18 h-18 bg-(--product) rounded-xl flex justify-center items-center'>
                                                                @if(count($cart->product->medias)>0)
                                                                <img class='max-w-full max-h-full rounded-xl' src="{{asset('storage/product_medias/'.$cart->product->path)}}" alt="">
                                                                @else
                                                                <div> 🖼 </div>
                                                                @endif
                                                            </div>
                                                            <div class="flex xl:gap-8 gap-6">

                                                                <div class="flex flex-col justify-center items-start">
                                                                    <h5 class="xl:text-lg  font-bold text-(--title) xl:max-w-50 max-w-35 truncate">{{$cart->product->title}}</h5>
                                                                    <p class="xl:text-xs text-[10px] text-(--discription) xl:max-w-50 max-w-35 truncate">{{$cart->product->summary}}</p>
                                                                </div>
                                                                @if($cart->product->discunt==null || $cart->product->discunt<1)
                                                                    <div class="flex justify-start items-center gap-2">
                                                                        <div class="flex flex-col justify-start items-end gap-2">
                                                                            <div class="text-[#316361] flex justify-start items-center gap-1">
                                                                                <span class="max-xl:text-sm font-bold">{{$cart->product->price}}</span>
                                                                                <span>تومان</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <div class="flex justify-start items-center gap-2">
                                                                        <div class="flex flex-col justify-start items-end gap-2">
                                                                            <del class="xl:text-xs text-[10px] text-(--discription) flex justify-start items-center gap-1">
                                                                                <span>{{$cart->product->price}}</span>
                                                                                <span>تومان</span>
                                                                            </del>
                                                                            <div class="text-[#316361] flex justify-start items-center gap-1">
                                                                                <span class="xl:text-lg font-bold">{{$cart->product->discunt}}</span>
                                                                                <span>تومان</span>
                                                                            </div>
                                                                        </div>
                                                                        <span class="xl:text-sm text-xs px-2 py-1 rounded-xl bg-red-200 text-red-900">{{$cart->product->percent}}%</span>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <span class="min-w-[1px] w-[1px] max-w-[1px] min-h-9/12 rounded-full bg-(--product)"></span>
                                                        <div class='xl:gap-5 gap-3 flex justify-between'>


                                                            <div class='flex justify-start gap-10 items-center'>
                                                                <div class='flex xl:gap-5 gap-2 border-2 border-[#E5EBEB] rounded-full items-center text-center xl:px-4 px-3 xl:py-2 py-1.5'>
                                                                    <div onclick="updateCart(this,{{$cart->id}},'plus')" class='xl:size-4 size-3  text-center items-center flex justify-center cursor-pointer'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class='text-center items-center flex justify-center cursor-pointer'>
                                                                        <input type="number" class='w-10 font-bold outline-none text-center text-black flex max-xl:text-sm' readonly value="{{$cart->quantity}}">
                                                                    </div>
                                                                    @if($cart->quantity==1)
                                                                    <div onclick="trash(this,{{$cart->id}} , {{$cart->product->id}})" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                            <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                                                        </svg>
                                                                    </div>
                                                                    @else
                                                                    <div onclick="updateCart(this,{{$cart->id}},'minus')" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                            <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                                                        </svg>
                                                                    </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div onclick="fullTrash(this,{{$cart->id}} , {{$cart->product->id}})" class='absolute top-2 left-2 size-4 text-center items-center flex justify-center cursor-pointer'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                    <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                                                </svg>
                                                            </div>

                                                        </div>
                                                    </div>
                                                   
                                                @endforeach
                                            @endif
                                        </div>
                                        <!-- <div id="cart_buttons" class=' grid grid-cols-2 items-center text-center p-1 gap-2 '>
                                            <a href="{{route('cart.userCartList')}}" class='bg-green-200 p-2 rounded-sm cursor-pointer'> تکمیل سفارش </a>
                                            <div class='bg-red-200 p-2 rounded-sm '> <span> قیمت کل: </span><input type="number" value={{$total_price}} disabled class='w-24 text-black font-bold text-sm' id="total_price"></div>
                                        </div> -->
                                        <div class="w-full bg-[#ECF6F8] rounded-xl flex justify-between  px-4 py-3">
                                            <div class="flex xl:gap-20 gap-10 justify-start items-center">
                                                <!-- <div onclick="goCartList()" class='bg-(--buttom) px-10 py-2 rounded-full cursor-pointer flex gap-5 justify-center items-center'> -->
                                                <a href="{{url('cart/user/cart/list')}}" class='bg-(--buttom) px-10 py-2 rounded-full cursor-pointer flex gap-5 justify-center items-center'>
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-4 size-3.5 fill-white">
                                                            <path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-4 size-3.5 fill-white">
                                                            <path d="M160 112v48H288V112c0-35.3-28.7-64-64-64s-64 28.7-64 64zm-48 48V112C112 50.1 162.1 0 224 0s112 50.1 112 112v48h64c26.5 0 48 21.5 48 48V416c0 53-43 96-96 96H96c-53 0-96-43-96-96V208c0-26.5 21.5-48 48-48h64zM48 416c0 26.5 21.5 48 48 48H352c26.5 0 48-21.5 48-48V208H48V416zm72-80c0-13.3 10.7-24 24-24h56V256c0-13.3 10.7-24 24-24s24 10.7 24 24v56h56c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v56c0 13.3-10.7 24-24 24s-24-10.7-24-24V360H144c-13.3 0-24-10.7-24-24z" />
                                                        </svg>
                                                    </div>
                                                    <span class="font-bold text-white max-xl:text-sm ">
                                                        تکمیل سفارش
                                                    </span>
                                                </a>
                                                <span class="min-w-[1px] w-[1px] max-w-[1px] min-h-full rounded-full bg-gray-300"></span>
                                            </div>
                                            <div class="flex flex-col gap-1 justify-center items-end">
                                                <p class="xl:text-xs text-[10px] text-[#4A6366]">مبلغ کل سبد خرید</p>
                                                <div class="text-(--buttom) flex justify-start items-center gap-1">

                                                    <span class="xl:text-xl text-lg font-bold" id="total_price">
                                                        {{$total_price}}
                                                    </span>
                                                    <span class="text-lg font-bold">تومان</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <div id="cart_counter" class='absolute -top-3 -left-3 bg-green-800 px-1.5 py-0.5 text-xs rounded-full cursor-pointer text-white'>{{$count}}</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        $cartListUrl="{{url('cart/user/cart/list')}}";
    ?>
    @yield('content')



    <script>
        let cart = document.getElementById('cart');
        let cart_list = document.getElementById('cart_list');
        let cart_counter = document.getElementById('cart_counter');
        let pro_cart_parent_div = document.getElementById('pro_cart_parent_div');
        let total_price = document.getElementById('total_price');
        let cart_buttons = document.getElementById('cart_buttons');
        let current_product='';
        let product_price='';
        let price='';
        let div_image='';
        let div_text_and_counter='';
        let parent_div='';
        let cartListUrl="{{$cartListUrl}}"
        function showCart(){
            if(parseInt(cart_counter.innerHTML)!=0){
                cart.classList.remove('hidden');
                cart.classList.add('flex');
            }
        }
        function hiddenCart(el){
            cart.classList.add('hidden');
            cart.classList.remove('flex');

        }
        let quantity=0;
        function updateCart(el,id,state) {
            console.log(el)
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
                el.parentElement.children[2].disabled=true;
                el.parentElement.children[2].removeAttribute('onclick');

                if(state=='plus'){
                    quantity++;
                }else{
                    quantity--;
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{url('cart/update/cart')}}"+"/"+id,
                    type: "post",
                    dataType:"json",
                    data:{
                        'quantity':quantity,
                    },
                    success: function(data) {
                        el.parentElement.children[1].children[0].value = data.quantity
                        if(data.quantity==1){
                            
                            //  تغییر دادن  اس وی جی علامت پلاس  //
                             
                            el.parentElement.children[0].removeAttribute('disabled');
                            el.parentElement.children[0].setAttribute('onclick',`updateCart(this,${data.cartId},'plus')`)
                            el.parentElement.children[0].innerHTML=
                            `
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                            `
                            ;


                            //  تغییر دادن  اس وی جی علامت سطل آشغال  //

                            el.parentElement.children[2].innerHTML =
                            `
                            <svg class='size-5 fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                            `
                            el.parentElement.children[2].setAttribute('onclick',`trash(this,${data.cartId},${data.product.id})`);
                            el.parentElement.children[2].disabled=false;
                        }
                        if(data.quantity>1){

                            //  تغییر دادن  اس وی جی علامت پلاس  //

                            el.parentElement.children[0].removeAttribute('disabled');
                            el.parentElement.children[0].setAttribute('onclick',`updateCart(this,${data.cartId},'plus')`)
                            el.parentElement.children[0].innerHTML=
                            `
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                            `
                            ;
                            //  تغییر دادن  اس وی جی علامت ماینس  //

                            el.parentElement.children[2].disabled=false;
                            el.parentElement.children[2].setAttribute('onclick',`updateCart(this,${data.cartId},'minus')`)
                            el.parentElement.children[2].innerHTML =
                            `
                                <svg class='size-3 fill-black' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 13.3-10.7 24-24 24L40 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l368 0c13.3 0 24 10.7 24 24z"/></svg>
                            `
                        }
                        if(data.product.discunt!=null || data.product.discunt<1){
                            product_price=parseInt(data.product.price)
                        }else{
                            product_price=parseInt(data.product.discunt)
                        }
                        if(state=='plus'){
                            total_price.innerHTML=parseInt(total_price.innerHTML)+product_price;
                        }else{
                            total_price.innerHTML=parseInt(total_price.innerHTML)-product_price;
                        }
                    },
                    error: function() {
                        console.log('☢')
                    }
                })
            }

        }
        function fullTrash(el,cart_id,product_id) {
            quantity = el.parentElement.children[0].children[0].children[1].children[0].value;
            $.ajax({
                url: "{{url('cart/delete/cart')}}"+"/" + cart_id,
                type: "get",
                dataType: "json",
                success: function(productData) {
                    current_product="{{$product}}"
                    current_product_id="{{$product->id}}"
                    console.log(current_product_id)
                    console.log(product_id)
                    cart_counter.innerHTML--
                    el.parentElement.classList.remove('flex')
                    el.parentElement.classList.add('hidden')
                    el.closest('.parent_cart').remove()
                    if(current_product){
                        if(product_id==current_product_id){
                            console.log("🥎")
                            entry_cart_submit.forEach(entry => {
                                entry.setAttribute('onclick', 'entry_cart(this)');
                                entry.innerHTML = 'افزودن به سبد خرید'
                                entry.removeAttribute('disable')
                                entry.setAttribute('onclick','entry_cart(this)')
                                entry.classList.remove('bg-yellow-200');
                                entry.classList.remove('hover:bg-yellow-300');
                                entry.classList.remove('text-black');
    
                                entry.classList.add('bg-(--primary_color)');
                                entry.classList.add('hover:bg-green-600');
                                entry.classList.add('text-white');
                            });
                        }
                    }
                    if(data.product.discunt!=null || data.product.discunt<1){
                        product_price=parseInt(data.product.price)*quantity
                    }else{
                        product_price=parseInt(data.product.discunt)*quantity
                    }
                    total_price.innerHTML=parseInt(total_price.innerHTML)-product_price;
                },
                error: function() {
                    console.log('☢')
                }
            })
                // console.log(entry)
            // el.parentElement.children[2].innerHTML =trash_icon
        }
        function trash(el,cart_id,product_id) {
            let trash_icon='';
            console.log(el.closest('.parent_cart'))
            trash_icon=el.parentElement.children[2].innerHTML;
            el.parentElement.children[2].innerHTML =
            `
                <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
            `
            $.ajax({
                url: "{{url('cart/delete/cart')}}"+"/" + cart_id,
                type: "get",
                dataType: "json",
                success: function(productData) {
                    current_product="{{$product}}"
                    current_product_id="{{$product->id}}"
                    console.log(current_product_id)
                    console.log(product_id)
                    cart_counter.innerHTML--
                    el.parentElement.classList.remove('flex')
                    el.parentElement.classList.add('hidden')
                    el.closest('.parent_cart').remove()
                    if(current_product){
                        if(product_id==current_product_id){
                            console.log("🥎")
                            entry_cart_submit.forEach(entry => {
                                entry.setAttribute('onclick', 'entry_cart(this)');
                                entry.innerHTML = 'افزودن به سبد خرید'
                                entry.removeAttribute('disable')
                                entry.setAttribute('onclick','entry_cart(this)')
                                entry.classList.remove('bg-yellow-200');
                                entry.classList.remove('hover:bg-yellow-300');
                                entry.classList.remove('text-black');
    
                                entry.classList.add('bg-(--primary_color)');
                                entry.classList.add('hover:bg-green-600');
                                entry.classList.add('text-white');
                            });
                        }
                    }
                    if(data.product.discunt!=null || data.product.discunt<1){
                        product_price=parseInt(data.product.price)
                    }else{
                        product_price=parseInt(data.product.discunt)
                    }
                    total_price.innerHTML=parseInt(total_price.innerHTML)-product_price;
                },
                error: function() {
                    console.log('☢')
                }
            })
                // console.log(entry)
            // el.parentElement.children[2].innerHTML =trash_icon
        }

        let user_id="{{Auth::id()}}";
        let product_id="{{$product->id}}";

        let link="{{route('user.loginPage')}}";
        let check="{{Auth::check()}}";
        let products=[];
        let jsonPro=""
        let textProducts="";
        let jsonProArray="";
        let flag=true;
        current_product_id="{{$product->id}}";
        current_product_title="{{$product->title}}";
        current_product_price="{{$product->price}}";
        current_product_discunt="{{$product->discunt}}";
        current_product_path="{{$product->is_main}}";
        current_product_summary="{{$product->summary}}";
        current_product_quantity="1";
        let myProduct='';
        let count_noAuth=0;
        let total_price_noAuth=0;
        function entry_cart(el) {
            entry_cart_submit.forEach(entry => {
                entry.innerHTML =
                `
                    <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
                `
            })
                if(check){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        }
                    })
                    $.ajax({
                        url: "{{route('cart.store')}}",
                        type: "post",
                        dataType: "json",
                        data:{
                            'product_id':product_id,
                            'user_id':user_id,
                        },
                        success: function(data) {
                            cart_counter.innerHTML++
                            console.log(data.product.path);
                            entry_cart_submit.forEach(entry => {
                                entry.innerHTML='افزوده شد'
                                entry.setAttribute('disable',true)
                                entry.removeAttribute('onclick')
                                entry.classList.remove('bg-(--primary_color)');
                                entry.classList.remove('hover:bg-green-600');
                                entry.classList.add('bg-yellow-200');
                                entry.classList.add('hover:bg-yellow-300');
                                entry.classList.remove('text-white');
                                entry.classList.add('text-black');
                                
                                //  افزودن به سبد خرید  //
                                
                                
                            })


                        div_image=document.createElement('div');
                        div_text=document.createElement('div');
                        parent_div=document.createElement('div');
                        sup_parent=document.createElement('div');
                        sup_parent2=document.createElement('div');
                        span=document.createElement('span');
                        div_counters=document.createElement('div');
                        parent_div.classList=`parent_cart w-full flex justify-between  border-2 border-(--product) gap-4 bg-white rounded-xl xl:p-2 p-2 relative`;
                        sup_parent.classList=`flex gap-2 items-center`;
                        div_counters.classList=`xl:gap-5 gap-3 flex justify-between`
                        div_image.classList=`xl:min-w-22 xl:min-h-22 xl:w-22 xl:h-22 min-w-18 min-h-18 w-18 h-18 bg-(--product) rounded-xl flex justify-center items-center`;
                        if(data.product.path!=null){
                            div_image.innerHTML = `<img class="max-w-full max-h-full rounded-xl" src="{{ asset('storage/product_medias/${data.product.path}') }}" alt="">`;
                        }else{
                            div_image.innerHTML=`<div class="max-w-full max-h-full rounded-xl"> 🖼 </div>`
                        }
                        div_text.classList=`flex xl:gap-8 gap-6`;
                        let html1=
                            `
                            <div class="flex flex-col justify-center items-start">
                                <h5 class="xl:text-lg  font-bold text-(--title) xl:max-w-50 max-w-35 truncate"> ${data.product.title} </h5>
                                <p class="xl:text-xs text-[10px] text-(--discription) xl:max-w-50 max-w-35 truncate">${data.product.summary}</p>
                            </div>
                                    
                            `
                        if(data.product.discunt==null || data.product.discunt<1){
                            html1+=
                                `                            
                                <div class="flex justify-start items-center gap-2">
                                    <div class="flex flex-col justify-start items-end gap-2">
                                        <div class="text-[#316361] flex justify-start items-center gap-1">
                                            <span class="max-xl:text-sm font-bold">${data.product.price}</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                                `
                        }else{
                            html1+=
                                ` 
                                <div class="flex justify-start items-center gap-2">
                                    <div class="flex flex-col justify-start items-end gap-2">
                                        <del class="xl:text-xs text-[10px] text-(--discription) flex justify-start items-center gap-1">
                                            <span>${data.product.price}</span>
                                            <span>تومان</span>
                                        </del>
                                        <div class="text-[#316361] flex justify-start items-center gap-1">
                                            <span class="xl:text-lg font-bold">${data.product.discunt}</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                    <span class="xl:text-sm text-xs px-2 py-1 rounded-xl bg-red-200 text-red-900">20%</span>
                                </div>
                                `
                        }
                        div_text.innerHTML=html1;
                        sup_parent.appendChild(div_image);
                        sup_parent.appendChild(div_text);

                        /////////////////////////////////////////////////////////////////
                        span.classList=`min-w-[1px] w-[1px] max-w-[1px] min-h-9/12 rounded-full bg-(--product)`
                        let html2='';
                        html2+=
                        `
                                <div class='flex justify-start gap-10 items-center'>
                                    <div class='flex xl:gap-5 gap-2 border-2 border-[#E5EBEB] rounded-full items-center text-center xl:px-4 px-3 xl:py-2 py-1.5'>
                                        <div onclick="updateCart(this,${data.cart.id},'plus')" class='xl:size-4 size-3  text-center items-center flex justify-center cursor-pointer'>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" /></svg>
                                        </div>
                                        <div class='text-center items-center flex justify-center cursor-pointer'>
                                            <input type="number" class='w-5 outline-none text-center items-center text-black' readonly value="${data.cart.quantity}">
                                        </div>
                                        `
                                        html2+=
                                        `
                                            <div onclick="trash(this,${data.cart.id},${data.product.id})" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'>
                                                <svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" /> </svg>
                                            </div>
                                        `

                                        html2+=`
                                        <div onclick="fullTrash(this,${data.cart.id},${data.product.id})" class='absolute top-2 left-2 size-4 text-center items-center flex justify-center cursor-pointer'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                        ` 
                        div_counters.innerHTML=html2







                        parent_div.appendChild(sup_parent)
                        parent_div.appendChild(span)
                        parent_div.appendChild(div_counters)
                        cart_list.appendChild(parent_div);
                        console.log(cart_list);




                            product_price=parseInt(data.product.price)
                            price=parseInt(total_price.innerHTML)
                            total_price.innerHTML= product_price + price;


                        },
                        error: function() {
                            console.log('☢')
                        }
                    })
                }else{
                    // localStorage.removeItem('products');
                    // console.log(localStorage.getItem('products'));
                    // return
                    if(localStorage.getItem('products') == null){
                        jsonPro={id:current_product_id, title:current_product_title , price:current_product_price , discunt:current_product_discunt , path:current_product_path , quantity:current_product_quantity , summary:current_product_summary};
                        products.push(jsonPro);
                        textProducts=JSON.stringify(products)
                        localStorage.setItem('products',textProducts)
                    }else{
                        jsonProArray=JSON.parse(localStorage.getItem('products'));
                            myProduct= jsonProArray.find(function(pro){
                            if(pro.id ==current_product_id){
                                flag=false
                            }
                        })
                        if(flag){
                            jsonPro={id:current_product_id, title:current_product_title , price:current_product_price , discunt:current_product_discunt , path:current_product_path , quantity:current_product_quantity , summary:current_product_summary};
                            jsonProArray.push(jsonPro);
                            textProducts=JSON.stringify(jsonProArray)
                            localStorage.setItem('products',textProducts)
                        }else{
                            alert('در سبد خرید شما وجود دارد');
                        }
                    }
                    console.log(localStorage.getItem('products'));
                    

                    if(flag){
                        cart_counter.innerHTML++
                        entry_cart_submit.forEach(entry => {
                            entry.innerHTML='افزوده شد'
                            entry.setAttribute('disable',true)
                            entry.removeAttribute('onclick')
                            entry.classList.remove('bg-(--primary_color)');
                            entry.classList.remove('hover:bg-green-600');
                            entry.classList.add('bg-yellow-200');
                            entry.classList.add('hover:bg-yellow-300');
                            entry.classList.remove('text-white');
                            entry.classList.add('text-black');
                            
                            //  افزودن به سبد خرید  //
                            
                            
                        })
    



                        div_image=document.createElement('div');
                        div_text=document.createElement('div');
                        parent_div=document.createElement('div');
                        sup_parent=document.createElement('div');
                        sup_parent2=document.createElement('div');
                        span=document.createElement('span');
                        div_counters=document.createElement('div');
                        parent_div.classList=`parent_cart w-full flex justify-between  border-2 border-(--product) gap-4 bg-white rounded-xl xl:p-2 p-2 relative`;
                        sup_parent.classList=`flex gap-2 items-center`;
                        div_counters.classList=`xl:gap-5 gap-3 flex justify-between`
                        div_image.classList=`xl:min-w-22 xl:min-h-22 xl:w-22 xl:h-22 min-w-18 min-h-18 w-18 h-18 bg-(--product) rounded-xl flex justify-center items-center`;
                        if(current_product_path!=null){
                            div_image.innerHTML = `<img class="max-w-full max-h-full rounded-xl" src="{{ asset('storage/product_medias/${current_product_path}') }}" alt="">`;
                        }else{
                            div_image.innerHTML=`<div class="max-w-full max-h-full rounded-xl"> 🖼 </div>`
                        }
                        div_text.classList=`flex xl:gap-8 gap-6`;
                        let html1=
                            `
                            <div class="flex flex-col justify-center items-start">
                                <h5 class="xl:text-lg  font-bold text-(--title) xl:max-w-50 max-w-35 truncate"> ${current_product_title} </h5>
                                <p class="xl:text-xs text-[10px] text-(--discription) xl:max-w-50 max-w-35 truncate">${current_product_summary}</p>
                            </div>
                                    
                            `
                        if(current_product_discunt==null || current_product_discunt<1){
                            html1+=
                                `                            
                                <div class="flex justify-start items-center gap-2">
                                    <div class="flex flex-col justify-start items-end gap-2">
                                        <div class="text-[#316361] flex justify-start items-center gap-1">
                                            <span class="max-xl:text-sm font-bold">${current_product_price}</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                </div>
                                `
                        }else{
                            html1+=
                                ` 
                                <div class="flex justify-start items-center gap-2">
                                    <div class="flex flex-col justify-start items-end gap-2">
                                        <del class="xl:text-xs text-[10px] text-(--discription) flex justify-start items-center gap-1">
                                            <span>${current_product_price}</span>
                                            <span>تومان</span>
                                        </del>
                                        <div class="text-[#316361] flex justify-start items-center gap-1">
                                            <span class="xl:text-lg font-bold">${current_product_discunt}</span>
                                            <span>تومان</span>
                                        </div>
                                    </div>
                                    <span class="xl:text-sm text-xs px-2 py-1 rounded-xl bg-red-200 text-red-900">20%</span>
                                </div>
                                `
                        }
                        div_text.innerHTML=html1;
                        sup_parent.appendChild(div_image);
                        sup_parent.appendChild(div_text);

                        /////////////////////////////////////////////////////////////////
                        span.classList=`min-w-[1px] w-[1px] max-w-[1px] min-h-9/12 rounded-full bg-(--product)`
                        let html2='';
                        html2+=
                        `
                                <div class='flex justify-start gap-10 items-center'>
                                    <div class='flex xl:gap-5 gap-2 border-2 border-[#E5EBEB] rounded-full items-center text-center xl:px-4 px-3 xl:py-2 py-1.5'>
                                        <div onclick="updateNoAuthCart(this,${current_product_id},'plus')" class='xl:size-4 size-3  text-center items-center flex justify-center cursor-pointer'>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" /></svg>
                                        </div>
                                        <div class='text-center items-center flex justify-center cursor-pointer'>
                                            <input type="number" class='w-5 outline-none text-center items-center text-black' readonly value="${current_product_quantity}">
                                        </div>
                                        `
                                        if(current_product_quantity==1){
                                            html2+=
                                            `
                                                <div onclick="NoAuthtrash(this,${current_product_id})" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'>
                                                    <svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" /> </svg>
                                                </div>
                                            `
                                        }else{
                                            html2+=
                                            `
                                                <div onclick="updateNoAuthCart(this,${current_product_id},'minus')" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                                    </svg>
                                                </div>
                                            `
                                        }
                                        html2+=`
                                        <div onclick="NoAuthFullTrash(this,${current_product_id})" class='absolute top-2 left-2 size-4 text-center items-center flex justify-center cursor-pointer'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                        ` 
                        div_counters.innerHTML=html2







                        parent_div.appendChild(sup_parent)
                        parent_div.appendChild(span)
                        parent_div.appendChild(div_counters)
                        cart_list.appendChild(parent_div);
                        console.log(cart_list);

                        if(current_product_discunt==null || current_product_discunt<1){
                            product_price=parseInt(current_product_price)
                        }else{
                            product_price=parseInt(current_product_discunt)
                        }
                        price=parseInt(total_price.innerHTML)
                        total_price.innerHTML= product_price + price;
    
                        // parent_div.appendChild(div_image)
                        // div_text_and_counter.innerHTML=html;
                        // parent_div.appendChild(div_text_and_counter)
                        // cart_list.appendChild(parent_div);
                        // console.log(cart_list);
                    }
    


                }
        }
        let currentUpdateProduct='';
        function updateNoAuthCart(el,product_id,state){
            jsonProArray=JSON.parse(localStorage.getItem('products'));
            jsonProArray.find(function(pro){
                if(pro.id == product_id){
                    currentUpdateProduct=pro
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
                el.parentElement.children[2].disabled=true;
                el.parentElement.children[2].removeAttribute('onclick');

                if(state=='plus'){
                    quantity++;
                }else{
                    quantity--;
                }

                el.parentElement.children[1].children[0].value = quantity
                if(quantity==1){
                    
                    //  تغییر دادن  اس وی جی علامت پلاس  //
                        
                    el.parentElement.children[0].removeAttribute('disabled');
                    el.parentElement.children[0].setAttribute('onclick',`updateNoAuthCart(this,${currentUpdateProduct.id},'plus')`)
                    el.parentElement.children[0].innerHTML=
                    `
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                    `
                    ;


                    //  تغییر دادن  اس وی جی علامت سطل آشغال  //

                    el.parentElement.children[2].innerHTML =
                    `
                    <svg class='size-5 fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                    `
                    el.parentElement.children[2].setAttribute('onclick',`NoAuthtrash(this,${currentUpdateProduct.id})`);
                    el.parentElement.children[2].disabled=false;
                }
                if(quantity>1){

                    //  تغییر دادن  اس وی جی علامت پلاس  //

                    el.parentElement.children[0].removeAttribute('disabled');
                    el.parentElement.children[0].setAttribute('onclick',`updateNoAuthCart(this,${currentUpdateProduct.id},'plus')`)
                    el.parentElement.children[0].innerHTML=
                    `
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                    `
                    ;
                    //  تغییر دادن  اس وی جی علامت ماینس  //

                    el.parentElement.children[2].disabled=false;
                    el.parentElement.children[2].setAttribute('onclick',`updateNoAuthCart(this,${currentUpdateProduct.id},'minus')`)
                    el.parentElement.children[2].innerHTML =
                    `
                        <svg class='size-3 fill-black' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 13.3-10.7 24-24 24L40 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l368 0c13.3 0 24 10.7 24 24z"/></svg>
                    `
                }
                if(currentUpdateProduct.discunt==null || currentUpdateProduct.discunt<1){
                    product_price=parseInt(currentUpdateProduct.price)
                }else{
                    product_price=parseInt(currentUpdateProduct.discunt)
                }
                price=parseInt(total_price.innerHTML)
                // total_price.innerHTML=price+data.product.price
                // console.log(price+product_price)
                if(state=='plus'){
                    total_price.innerHTML=price+product_price;
                }else{
                    total_price.innerHTML=price-product_price;
                }
                jsonProArray.find(function(pro){
                    if(pro.id == product_id){
                        pro.quantity=quantity
                    } 
                })
                textProducts=JSON.stringify(jsonProArray)
                localStorage.removeItem('products')
                localStorage.setItem('products',textProducts)
            // }

        }
        function NoAuthFullTrash(el,product_id){

            jsonProArray=JSON.parse(localStorage.getItem('products'));
            jsonProArray.find(function(pro){
                if(pro.id == product_id){
                    currentUpdateProduct=pro
                } 
            })

            current_product="{{$product}}"
            current_product_id="{{$product->id}}"
            console.log(current_product_id)
            console.log(product_id)
            cart_counter.innerHTML--
            el.parentElement.classList.remove('flex')
            el.parentElement.classList.add('hidden')
            el.closest('.parent_cart').remove()
            if(current_product){
                if(product_id==current_product_id){
                    console.log("🥎")
                    entry_cart_submit.forEach(entry => {
                        entry.setAttribute('onclick', 'entry_cart(this)');
                        entry.innerHTML = 'افزودن به سبد خرید'
                        entry.removeAttribute('disable')
                        entry.setAttribute('onclick','entry_cart(this)')
                        entry.classList.remove('bg-yellow-200');
                        entry.classList.remove('hover:bg-yellow-300');
                        entry.classList.remove('text-black');

                        entry.classList.add('bg-(--primary_color)');
                        entry.classList.add('hover:bg-green-600');
                        entry.classList.add('text-white');
                    });
                }
            }
            if(currentUpdateProduct.discunt==null || currentUpdateProduct.discunt<1){
                product_price=parseInt(currentUpdateProduct.price)*currentUpdateProduct.quantity
            }else{
                product_price=parseInt(currentUpdateProduct.discunt)*currentUpdateProduct.quantity
            }

            total_price.innerHTML=parseInt(total_price.innerHTML)-product_price;

            jsonProArray = jsonProArray.filter(function(pro) {
                if(pro.id != product_id){
                    return pro;
                }
            });

            textProducts=JSON.stringify(jsonProArray)
            localStorage.removeItem('products')
            localStorage.setItem('products',textProducts)

        }
        function NoAuthtrash(el,product_id){
            let trash_icon='';
            console.log(el.closest('.parent_cart'))
            trash_icon=el.parentElement.children[2].innerHTML;
            el.parentElement.children[2].innerHTML =
            `
                <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
            `
            jsonProArray=JSON.parse(localStorage.getItem('products'));
            jsonProArray.find(function(pro){
                if(pro.id == product_id){
                    currentUpdateProduct=pro
                } 
            })

            current_product="{{$product}}"
            current_product_id="{{$product->id}}"
            console.log(current_product_id)
            console.log(product_id)
            cart_counter.innerHTML--
            el.parentElement.classList.remove('flex')
            el.parentElement.classList.add('hidden')
            el.closest('.parent_cart').remove()
            if(current_product){
                if(product_id==current_product_id){
                    console.log("🥎")
                    entry_cart_submit.forEach(entry => {
                        entry.setAttribute('onclick', 'entry_cart(this)');
                        entry.innerHTML = 'افزودن به سبد خرید'
                        entry.removeAttribute('disable')
                        entry.setAttribute('onclick','entry_cart(this)')
                        entry.classList.remove('bg-yellow-200');
                        entry.classList.remove('hover:bg-yellow-300');
                        entry.classList.remove('text-black');

                        entry.classList.add('bg-(--primary_color)');
                        entry.classList.add('hover:bg-green-600');
                        entry.classList.add('text-white');
                    });
                }
            }
            if(currentUpdateProduct.discunt==null || currentUpdateProduct.discunt<1){
                product_price=parseInt(currentUpdateProduct.price)
            }else{
                product_price=parseInt(currentUpdateProduct.discunt)
            }

            total_price.innerHTML=parseInt(total_price.innerHTML)-product_price;

            jsonProArray = jsonProArray.filter(function(pro) {
                if(pro.id != product_id){
                    return pro;
                }
            });

            textProducts=JSON.stringify(jsonProArray)
            localStorage.removeItem('products')
            localStorage.setItem('products',textProducts)

        }


        function addProducsToCart(){
            
            if(localStorage.getItem('products') != null){
                jsonProArray=JSON.parse(localStorage.getItem('products'));
                jsonProArray.find(function(pro){
                    current_product_id="{{$product->id}}";
                    if(current_product_id == pro.id){
                        entry_cart_submit.forEach(entry => {
                            
                            entry.innerHTML='افزوده شد'
                            entry.setAttribute('disable',true)
                            entry.removeAttribute('onclick')
                            entry.classList.remove('bg-(--primary_color)');
                            entry.classList.remove('hover:bg-green-600');
                            entry.classList.add('bg-yellow-200');
                            entry.classList.add('hover:bg-yellow-300');
                            entry.classList.remove('text-white');
                            entry.classList.add('text-black');
                            //  افزودن به سبد خرید  //
                        });
                    }
                })
                jsonProArray.forEach(pro => {
                    console.log(pro);


                    div_image=document.createElement('div');
                    div_text=document.createElement('div');
                    parent_div=document.createElement('div');
                    sup_parent=document.createElement('div');
                    sup_parent2=document.createElement('div');
                    span=document.createElement('span');
                    div_counters=document.createElement('div');
                    parent_div.classList=`parent_cart w-full flex justify-between  border-2 border-(--product) gap-4 bg-white rounded-xl xl:p-2 p-2 relative`;
                    sup_parent.classList=`flex gap-2 items-center`;
                    div_counters.classList=`xl:gap-5 gap-3 flex justify-between`
                    div_image.classList=`xl:min-w-22 xl:min-h-22 xl:w-22 xl:h-22 min-w-18 min-h-18 w-18 h-18 bg-(--product) rounded-xl flex justify-center items-center`;
                    if(pro.path!=null){
                        div_image.innerHTML = `<img class="max-w-full max-h-full rounded-xl" src="{{ asset('storage/product_medias/${pro.path}') }}" alt="">`;
                    }else{
                        div_image.innerHTML=`<div class="max-w-full max-h-full rounded-xl"> 🖼 </div>`
                    }
                    div_text.classList=`flex xl:gap-8 gap-6`;
                    let html1=
                        `
                        <div class="flex flex-col justify-center items-start">
                            <h5 class="xl:text-lg  font-bold text-(--title) xl:max-w-50 max-w-35 truncate"> ${pro.title} </h5>
                            <p class="xl:text-xs text-[10px] text-(--discription) xl:max-w-50 max-w-35 truncate">${pro.summary}</p>
                        </div>
                                
                        `
                    if(pro.discunt==null || pro.discunt<1){
                        html1+=
                            `                            
                            <div class="flex justify-start items-center gap-2">
                                <div class="flex flex-col justify-start items-end gap-2">
                                    <div class="text-[#316361] flex justify-start items-center gap-1">
                                        <span class="max-xl:text-sm font-bold">${pro.price}</span>
                                        <span>تومان</span>
                                    </div>
                                </div>
                            </div>
                            `
                    }else{
                        html1+=
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
                    div_text.innerHTML=html1;
                    sup_parent.appendChild(div_image);
                    sup_parent.appendChild(div_text);

                    /////////////////////////////////////////////////////////////////
                    span.classList=`min-w-[1px] w-[1px] max-w-[1px] min-h-9/12 rounded-full bg-(--product)`
                    let html2='';
                    html2+=
                    `
                            <div class='flex justify-start gap-10 items-center'>
                                <div class='flex xl:gap-5 gap-2 border-2 border-[#E5EBEB] rounded-full items-center text-center xl:px-4 px-3 xl:py-2 py-1.5'>
                                    <div onclick="updateNoAuthCart(this,${pro.id},'plus')" class='xl:size-4 size-3  text-center items-center flex justify-center cursor-pointer'>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" /></svg>
                                    </div>
                                    <div class='text-center items-center flex justify-center cursor-pointer'>
                                        <input type="number" class='w-5 outline-none text-center items-center text-black' readonly value="${pro.quantity}">
                                    </div>
                                    `
                                    if(pro.quantity==1){
                                        html2+=
                                        `
                                            <div onclick="NoAuthtrash(this,${pro.id})" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'>
                                                <svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" /> </svg>
                                            </div>
                                        `
                                    }else{
                                        html2+=
                                        `
                                            <div onclick="updateNoAuthCart(this,${pro.id},'minus')" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                                </svg>
                                            </div>
                                        `
                                    }
                                    html2+=`
                                    <div onclick="NoAuthFullTrash(this,${pro.id})" class='absolute top-2 left-2 size-4 text-center items-center flex justify-center cursor-pointer'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                    ` 
                    div_counters.innerHTML=html2







                    parent_div.appendChild(sup_parent)
                    parent_div.appendChild(span)
                    parent_div.appendChild(div_counters)
                    cart_list.appendChild(parent_div);
                    console.log(cart_list);


                    count_noAuth++;
                    if(pro.discunt==null || pro.discunt<1){
                        total_price_noAuth+=parseInt(pro.price) * pro.quantity;
                    }else{
                        total_price_noAuth+=parseInt(pro.discunt) * pro.quantity;

                    }
                    
                })
                total_price.innerHTML=parseInt(total_price.innerHTML)+total_price_noAuth;
                cart_counter.innerHTML=parseInt(cart_counter.innerHTML)+count_noAuth;
            }
        }

        addProducsToCart();


        // function goCartList(){
        //     if(check){
        //         if(cart_counter.innerHTML>0){
        //             location.assign("cart/user/cart/list")
        //         }else{
        //             alert('سبد خرید خالی است');
        //         }
        //     }else{
        //         if(cart_counter.innerHTML>0){
        //             location.assign(cartListUrl)
        //         }  else{
        //             alert('سبد خرید خالی است');
        //         } 
        //     }
        // } 
        









                    // div_image=document.createElement('div');
                    // div_text_and_counter=document.createElement('div');
                    // parent_div=document.createElement('div');
                    // parent_div.classList=`parent_cart w-full flex justify-start items-center border-2 border-(--product) gap-4 bg-white rounded-xl xl:p-2 p-1.5 relative`;
                    // div_image.classList=`xl:min-w-22 xl:min-h-22 xl:w-22 xl:h-22 min-w-18 min-h-18 w-18 h-18 bg-(--product) rounded-xl flex justify-center items-center`;
                    // if(current_product_path!=null){
                    //     div_image.innerHTML = `<img class="max-w-full max-h-full rounded-xl" src="{{ asset('storage/product_medias/${current_product_path}') }}" alt="">`;
                    // }else{
                    //     div_image.innerHTML=`<div class="max-w-full max-h-full rounded-xl"> 🖼 </div>`
                    // }
                    // div_text_and_counter.classList=`xl:gap-7 gap-3 flex justify-between`;
                    // let html=
                    //     `
                    //         <div class="flex flex-col justify-center items-start">
                    //             <h5 class="xl:text-xl text-lg font-bold text-(--title)"> ${current_product_title} </h5>
                    //             <p class="xl:text-xs text-[10px] text-(--discription)">${current_product_summary}</p>
                    //         </div>
                                
                    //     `
                    // if(current_product_discunt==null || current_product_discunt<1){
                    //     html+=
                    //         `
                    //             <div class="flex justify-start items-center gap-2">
                    //                 <div class="flex flex-col justify-start items-end gap-2">
                    //                     <div class="text-[#316361] flex justify-start items-center gap-1">
                    //                         <span class="xl:text-lg font-bold">${current_product_price}</span>
                    //                         <span>تومان</span>
                    //                     </div>
                    //                 </div>
                    //                 <span class="xl:text-sm text-xs px-2 py-1 rounded-xl bg-red-200 text-red-900">20%</span>
                    //             </div>
                    //         `
                    // }else{
                    //     html+=
                    //         ` 
                    //             <div class="flex justify-start items-center gap-2">
                    //                     <div class="flex flex-col justify-start items-end gap-2">
                    //                         <del class="xl:text-xs text-[10px] text-(--discription) flex justify-start items-center gap-1">
                    //                             <span>${current_product_price}</span>
                    //                             <span>تومان</span>
                    //                         </del>
                    //                         <div class="text-[#316361] flex justify-start items-center gap-1">
                    //                             <span class="xl:text-lg font-bold">${current_product_discunt}</span>
                    //                             <span>تومان</span>
                    //                         </div>
                    //                     </div>
                    //                 <span class="xl:text-sm text-xs px-2 py-1 rounded-xl bg-red-200 text-red-900">20%</span>
                    //             </div>
                    //         `
                    // }
                    // html+=`<span class="min-w-[1px] w-[1px] max-w-[1px] min-h-9/12 rounded-full bg-(--product)"></span>`;
                    // html+=
                    // `
                    //     <div class='flex justify-start gap-10 items-center px-4'>
                    //         <div class='flex xl:gap-5 gap-2 border-2 border-[#E5EBEB] rounded-full items-center text-center xl:px-4 px-3 xl:py-2 py-1.5'>
                    //             <div onclick="updateNoAuthCart(this,${current_product_id},'plus')" class='xl:size-4 size-3  text-center items-center flex justify-center cursor-pointer'>
                    //                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" /></svg>
                    //             </div>
                    //             <div class='p-2 text-center items-center flex justify-center '><input type="number" class='w-5 outline-none text-center items-center text-black' readonly value="${current_product_quantity}"></div>
                    //             `
                    //             if(current_product_quantity==1){
                    //                 html+=
                    //                 `
                    //                     <div onclick="NoAuthtrash(this,${current_product_id})" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'>
                    //                         <svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" /> </svg>
                    //                     </div>
                    //                 `
                    //             }else{
                    //                 html+=
                    //                 `
                    //                     <div onclick="updateNoAuthCart(this,${current_product_id},'minus')" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    //                             <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                    //                         </svg>
                    //                     </div>
                    //                 `
                    //             }
                    //             html+=`
                    //             <div onclick="NoAuthFullTrash(this,${current_product_id})" class='absolute top-2 left-2 size-4 text-center items-center flex justify-center cursor-pointer'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    //                     <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                    //                 </svg>
                    //             </div>
                    //         </div>
                    //     </div>
                    // ` 
    












    </script>