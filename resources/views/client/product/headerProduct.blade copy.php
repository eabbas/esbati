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
    :root{
    --background:#F6FAFC;
    --background-2:#EAF3F6;
    --card:#FFFFFF;
    --card-2:#F1F7F8;

    --green:#168A8A;
    --green-dark:#0F7070;

    --purple:#2F80A8;
    --magenta:#20A39E;

    --text:#183B4E;
    --text-secondary:#64748B;
    --text-muted:#94A3B8;
    --border:#D9E6EA;
    }
    .transition_root {
      transition: all 300ms ease-in;
    }
</style>
<body class='body relative'>




    <div class="w-full flex justify-center fixed top-0 z-100">
        <div class="flex w-19/20 bg-[#f3f4f6] justify-center py-5 mt-5 head">
            <div class="w-19/20 flex justify-between">
                <div class="flex items-center gap-10">
                    <img src="{{asset('assets/img/header/logo.png')}}" alt="" class="w-25 sm:w-30 md:w-40">
                    <ul class="flex gap-7 xl:gap-9 max-lg:hidden h-full items-center">
                        <li class="lable-1">
                            <a href="">
                                <span class="text-[#03a297] font-bold text-[16px]">خانه</span>
                            </a>
                            <div class="lable-1-1 w-56 h-40 bg-white absolute mt-4">
                                <div class="w-full h-2 bg-green-400"></div>
                                <ul class="w-full h-38 flex flex-col items-center justify-center">
                                    <li>خانه</li>
                                    <li>خانه</li>
                                    <li>خانه</li>
                                </ul>
                            </div>
                        </li>
                        <li class="lable-1">
                            <a href="">
                                <span class="text-[#023350] text-[16px] font-bold">درباره ما</span>
                            </a>
                            <div class="lable-1-1 w-56 h-40 bg-white absolute mt-4">
                                <div class="w-full h-2 bg-green-400"></div>
                                <ul class="w-full h-38 flex flex-col items-center justify-center">
                                    <li>درباره ما</li>
                                    <li>درباره ما</li>
                                    <li>درباره ما</li>
                                </ul>
                            </div>
                        </li>
                        <li class="lable-1">
                            <a href="">
                                <span class="text-[#023350] text-[16px] font-bold">محصولات</span>
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
                                                    <h class="text-[var(--text)]"1>لوازم تشخیصی</h>
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
                        <li class="lable-1">
                            <a href="">
                                <span class="text-[#023350] text-[16px] font-bold">برند ها</span>
                            </a>
                            <div class="lable-1-1 w-56 h-40 bg-white absolute mt-4">
                                <div class="w-full h-2 bg-green-400"></div>
                                <ul class="w-full h-38 flex flex-col items-center justify-center">
                                    <li>خانه</li>
                                    <li>خانه</li>
                                    <li>خانه</li>
                                </ul>
                            </div>
                        </li>
                        <li class="lable-1">
                            <a href="">
                                <span class="text-[#023350] text-[16px] font-bold">اخبار و مقالات</span>
                            </a>
                            <div class="lable-1-1 w-56 h-40 bg-white absolute mt-4">
                                <div class="w-full h-2 bg-green-400"></div>
                                <ul class="w-full h-38 flex flex-col items-center justify-center">
                                    <li>خانه</li>
                                    <li>خانه</li>
                                    <li>خانه</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="">
                                <span class="text-[#023350] text-[16px] font-bold">تماس با ما</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="flex gap-7 xl:gap-11">
                    <div class="flex gap-3 sm:gap-5 h-full items-center">
                        <div class="flex h-full items-center">
                            <svg class="w-5 h-7 max-lg:h-7" onclick="serchseting()"
                                xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <circle cx="11" cy="11" r="8" />
                                <line x1="21" y1="21" x2="16.65" y2="16.65" />
                            </svg>ّ
                            <div class="w-11/12 lg:w-6/12 h-0 bg-white absolute left-1/19 lg:left-1/5 top-28 flex flex-col gap-2 rounded-xl overflow-y-hidden transition_fast"
                                id="search">
                                <div class="flex gap-2 w-95/100 mx-auto mt-3 bg-[#f0f0f1] rounded-lg ">
                                    <button class="w-1/10 md:w-10 h-10  flex justify-center items-center">
                                            <svg class="size-7" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        </button>
                                    <input type="text" class="w-9/10 md:w-full h-10 outline-none text-(--title)"
                                        placeholder="کالای خود را جستوجو کن">
                                </div>
                                <div class="w-95/100 mx-auto h-auto flex flex-col overflow-y-auto">
                                    <div class="py-3 text-(--title) flex justify-between">
                                        <span>ARTANNNNNN</span>
                                
                                        <svg class="size-7" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="py-3 text-(--title) flex justify-between">
                                        <span>ARTANNNNNN</span>
                                        
                                        <svg class="size-7" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="py-3 text-(--title) flex justify-between">
                                        <span>ARTANNNNNN</span>
                                        
                                        <svg class="size-7" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="py-3 text-(--title) flex justify-between">
                                        <span>ARTANNNNNN</span>
                                        
                                        <svg class="size-7" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(Auth::check())
                            <a href="{{route('user.profile')}}">
                                <div class='px-4 py-3 bg-[#EBECEE] shadow-md rounded-xl duration-500 transition-all hover:shadow-[#099975]'>{{Auth::user()->name}}  خوش آمدید</div>
                            </a>
                        @else
                            <a href="{{route('user.loginPage')}}">
                                <svg class='w-5'  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                            </a>
                        @endif
                        <div class="w-25 h-10 bg-[#c2c2c2]/70 rounded-lg max-lg:hidden head">
                            <a href="" class="flex justify-center h-full items-center">
                                <span>خرید انلاین</span>
                            </a>
                        </div>
                        <!-- cart -->
                        @if($user)
                            <div class='relative'>
                                <div class="flex h-full items-center cursor-pointer" onclick="showCart()">
                                    <svg class="w-5 h-7 max-lg:h-7" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"> <circle cx="9" cy="21" r="1" /> <circle cx="20" cy="21" r="1" /> <path d="M1 1h4l2.68 13.39A2 2 0 0 0 9.64 16H19a2 2 0 0 0 2-1.72L23 6H6" /> </svg>
                                </div>
                                <div id='cart' class='absolute hidden border-3 rounded-xl w-120 h-110 -right-100 bg-white'>
                                    @if(Auth::check())
                                        <div class='absolute -top-2 -right-2 bg-red-600 px-2 py-1 rounded-full cursor-pointer' onclick="hiddenCart(this)">x</div>
                                        <?php
                                            $count=0;
                                            $total_price=0;
                                        ?>
                                            <div class='w-full h-full'>
                                                <div id='cart_list' class='w-full h-95 overflow-y-auto flex flex-col gap-2 p-5'>
                                                    @foreach($user->carts as $cart)
                                                        <?php
                                                            $count++;
                                                            $total_price+=$cart->product->price * $cart->quantity;
                                                        ?>
                                                        <div class='parent_cart w-full flex justify-between border-2 gap-4'>
                                                            <div class='w-1/5 p-2'>
                                                                @if(count($cart->product->medias)>0)
                                                                    <img class='w-full h-20 rounded-xl' src="{{asset('storage/product_medias/'.$cart->product->path)}}" alt="">
                                                                @else
                                                                    <div> 🖼 </div>
                                                                @endif
                                                            </div>
                                                            <div class='w-4/5 flex flex-col justify-evenly '>
                                                                <div class='text-xl text-center items-center'>
                                                                    <span> {{$cart->product->title}} </span>
                                                                </div>
                                                                <div class='flex justify-between px-4'>
                                                                    <div class='grid grid-cols-3 w-20 border-1 overflow-hidden rounded-full items-center text-center'>
                                                                        <div onclick="updateCart(this,{{$cart->id}},'plus')" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></div>
                                                                        <div class='p-2 text-center items-center flex justify-center '><input type="number" class='w-10 font-bold outline-none text-center items-center text-black' readonly value="{{$cart->quantity}}"></div>
                                                                        @if($cart->quantity==1)
                                                                            <div onclick="trash(this,{{$cart->id}} , {{$cart->product->id}})" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg></div>
                                                                        @else
                                                                            <div onclick="updateCart(this,{{$cart->id}},'minus')" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg></div>
                                                                        @endif
                                                                    </div>
                                                                    
                                                                    <div class='text-black text-xl'> {{$cart->product->price}} </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div id="cart_buttons" class=' grid grid-cols-2 items-center text-center p-1 gap-2 '>
                                                    <a href="{{route('cart.userCartList')}}" class='bg-green-200 p-2 rounded-sm cursor-pointer'> تکمیل سفارش </a>
                                                    <div class='bg-red-200 p-2 rounded-sm '> <span> قیمت کل: </span><input type="number" value={{$total_price}} disabled class='w-24 text-black font-bold text-sm' id="total_price"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="cart_counter" class='absolute -top-3 -left-3 bg-green-800 px-2 py-1 text-xs rounded-full cursor-pointer text-white'>{{$count}}</div>
                                    @endif
                            </div>
                        @else
                            <div onclick="showLoginForm()" class="flex h-full items-center cursor-pointer">
                                <svg class="w-5 h-7 max-lg:h-7" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"> <circle cx="9" cy="21" r="1" /> <circle cx="20" cy="21" r="1" /> <path d="M1 1h4l2.68 13.39A2 2 0 0 0 9.64 16H19a2 2 0 0 0 2-1.72L23 6H6" /> </svg>
                            </div>
                        @endif
                        <div onclick="hambarger_menue('open')">
                            <svg class="w-6 h-8 hidden max-lg:block" xmlns="http://www.w3.org/2000/svg" width="10"
                                height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round">
                                <line x1="3" y1="6" x2="21" y2="6" />
                                <line x1="3" y1="12" x2="21" y2="12" />
                                <line x1="3" y1="18" x2="21" y2="18" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')



    <script>
        let cart = document.getElementById('cart');
        let cart_list = document.getElementById('cart_list');
        let cart_counter = document.getElementById('cart_counter');
        let pro_cart_parent_div = document.getElementById('pro_cart_parent_div');
        let total_price = document.getElementById('total_price');
        let cart_buttons = document.getElementById('cart_buttons');

        function showCart(){
            if(cart_counter.innerHTML!=0){
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
                        let product_price=parseInt(data.product.price)
                        let price=parseInt(total_price.value)
                        // total_price.value=price+data.product.price
                        // console.log(price+product_price)
                        if(state=='plus'){
                            total_price.value=price+product_price;
                        }else{
                            total_price.value=price-product_price;
                        }
                    },
                    error: function() {
                        console.log('☢')
                    }
                })
            }

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
                    let product="{{$product}}";
                    let current_product_id="{{$product->id}}";
                    console.log(current_product_id)
                    console.log(product_id)
                    cart_counter.innerHTML--
                    if(cart_counter.innerHTML==0){
                        hiddenCart();
                    }
                    el.parentElement.classList.remove('flex')
                    el.parentElement.classList.add('hidden')
                    el.closest('.parent_cart').remove()
                    if(product){
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
                    product_price=parseInt(productData.price)
                    price=parseInt(total_price.value)
                    total_price.value=price-product_price;

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

                            let div_image=document.createElement('div');
                            let div_text_and_counter=document.createElement('div');
                            let parent_div=document.createElement('div');
                            parent_div.classList=`parent_cart w-full flex justify-between border-2 gap-4`
                            div_image.classList=`w-1/5 p-2`
                            if(data.product.path!=null){
                                div_image.innerHTML = `<img class="w-full h-20 rounded-xl" src="{{ asset('storage/product_medias/`+data.product.path+`') }}" alt="">`;
                            }else{
                                div_image.innerHTML=`<div class="w-full h-20 rounded-xl"> 🖼 </div>`
                            }
                            div_text_and_counter.classList=`w-4/5 flex flex-col justify-evenly`;
                            div_text_and_counter.innerHTML=
                            `
                                <div class='w-4/5 flex flex-col justify-evenly '>
                                    <div class='text-xl text-center items-center'>
                                        <span> ${data.product.title} </span>
                                    </div>
                                    <div class='flex gap-5 justify-between px-4'>
                                        <div class='grid grid-cols-3 w-20 border-1 overflow-hidden rounded-full items-center text-center'>
                                            <div onclick="updateCart(this,${data.cart.id},'plus')" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></div>
                                            <div class='p-2 text-center items-center flex justify-center '><input type="number" class='w-5 outline-none text-center items-center text-black' readonly value="${data.cart.quantity}"></div>
                                            <div onclick="trash(this,${data.cart.id},${data.product.id})" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg></div>
                                        </div>
                                        
                                        <div class='text-black text-xl'> ${data.product.price} </div>
                                    </div>
                                </div>   
                            ` 

                            product_price=parseInt(data.product.price)
                            price=parseInt(total_price.value)
                            total_price.value= product_price + price;

                            parent_div.appendChild(div_image)
                            parent_div.appendChild(div_text_and_counter)
                            cart_list.appendChild(parent_div);
                            console.log(cart_list);
                        },
                        error: function() {
                            console.log('☢')
                        }
                    })
                }else{
                    location.assign(link)
                } 



            // });

        }

    </script>