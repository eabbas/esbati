@extends('dashboard')
@section('content')

<style>
    /* ===== پالت رنگی مترونیک (Metronic) - بدون رنگ سیاه ===== */
    :root {
        --metronic-primary: #1B84FF;
        --metronic-primary-dark: #0a6fd6;
        --metronic-primary-light: #4a9fff;
        --metronic-bg-content: #FCFCFC;
        --metronic-bg-form: #FFFFFF;
        --metronic-shadow-form: #F5F5F5;
        --metronic-border: #DBDFE9;
        --metronic-text: #9A9CAE;
        --metronic-text-dark: #4A5568;
        --metronic-text-hover: #1B84FF;
        --metronic-danger: #dc2626;
        
        --shadow-sm: 0 2px 8px rgba(27, 132, 255, 0.06);
        --shadow-md: 0 4px 20px rgba(27, 132, 255, 0.10);
    }

    /* ===== کارت اصلی ===== */
    .vafadar-form-card {
        background: var(--metronic-bg-form);
        border: 1px solid var(--metronic-border);
        border-radius: 20px;
        box-shadow: var(--shadow-sm);
        transition: all 0.3s ease;
        overflow: hidden;
    }
    .vafadar-form-card:hover {
        box-shadow: var(--shadow-md);
    }

    /* ===== هدر فرم ===== */
    .vafadar-form-header {
        background: var(--metronic-shadow-form);
        border-bottom: 2px solid var(--metronic-border);
        padding: 18px 28px;
    }

    .vafadar-form-header h2 {
        color: var(--metronic-text-dark);
        font-size: 20px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .vafadar-form-header .header-icon {
        width: 40px;
        height: 40px;
        background: var(--metronic-primary);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.25);
    }

    /* ===== فیلدها ===== */
    .vafadar-label {
        color: var(--metronic-text);
        font-size: 12px;
        font-weight: 600;
        display: block;
        margin-bottom: 5px;
        padding-right: 4px;
        transition: all 0.3s ease;
    }

    .vafadar-input {
        width: 100%;
        padding: 12px 16px;
        background: var(--metronic-shadow-form);
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: var(--metronic-text-dark);
        font-size: 13px;
        transition: all 0.3s ease;
        outline: none;
    }
    .vafadar-input::placeholder {
        color: var(--metronic-text);
        font-size: 12px;
    }
    .vafadar-input:hover {
        border-color: var(--metronic-primary-light);
    }
    .vafadar-input:focus {
        border-color: var(--metronic-primary);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background: var(--metronic-bg-form);
    }

    /* ===== سلکت ===== */
    .vafadar-select {
        width: 100%;
        padding: 12px 16px;
        background: var(--metronic-shadow-form);
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: var(--metronic-text-dark);
        font-size: 13px;
        transition: all 0.3s ease;
        outline: none;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%239A9CAE' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: left 14px center;
        cursor: pointer;
    }
    .vafadar-select:hover {
        border-color: var(--metronic-primary-light);
    }
    .vafadar-select:focus {
        border-color: var(--metronic-primary);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background: var(--metronic-bg-form);
    }

    /* ===== توگل ===== */
    .vafadar-toggle {
        width: 52px;
        height: 30px;
        padding: 2px;
        border-radius: 50px;
        background: var(--metronic-shadow-form);
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
        border: 1px solid var(--metronic-border);
        cursor: pointer;
        box-shadow: inset 0 2px 4px rgba(0,0,0,0.04);
    }
    .vafadar-toggle.active {
        background: var(--metronic-primary);
        border-color: var(--metronic-primary);
    }

    .vafadar-toggle-dot {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #ffffff;
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    .vafadar-toggle.active .vafadar-toggle-dot {
        transform: translateX(-22px);
        background: #ffffff;
    }

    .vafadar-toggle-label {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .vafadar-toggle-label span {
        color: var(--metronic-text);
        font-size: 13px;
        font-weight: 500;
    }

    /* ===== دکمه ثبت ===== */
    .vafadar-btn {
        padding: 12px 32px;
        background: var(--metronic-primary);
        border: none;
        border-radius: 12px;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.15);
    }
    .vafadar-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.25);
    }
    .vafadar-btn:active {
        transform: translateY(0) scale(0.97);
    }

    /* ===== خطا ===== */
    .vafadar-error {
        color: var(--metronic-danger);
        font-size: 12px;
        margin-top: 4px;
        display: block;
        padding-right: 4px;
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 768px) {
        .vafadar-form-grid {
            grid-template-columns: 1fr !important;
            gap: 16px !important;
        }
        .vafadar-toggle-group {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 12px !important;
        }
        .vafadar-form-header h2 {
            font-size: 17px;
        }
        .vafadar-btn {
            padding: 10px 24px;
            font-size: 13px;
            width: 100%;
            justify-content: center;
        }
        .vafadar-form-footer {
            flex-direction: column;
            align-items: stretch !important;
            gap: 12px !important;
        }
    }

    @media (max-width: 480px) {
        .vafadar-form-header {
            padding: 14px 16px;
        }
        .vafadar-form-header h2 {
            font-size: 15px;
        }
        .vafadar-form-body {
            padding: 16px !important;
        }
        .vafadar-input {
            padding: 10px 14px;
            font-size: 12px;
        }
        .vafadar-select {
            padding: 10px 14px;
            font-size: 12px;
        }
        .vafadar-toggle {
            width: 46px;
            height: 26px;
        }
        .vafadar-toggle-dot {
            width: 20px;
            height: 20px;
        }
        .vafadar-toggle.active .vafadar-toggle-dot {
            transform: translateX(20px);
        }
    }
</style>

<div class="w-full flex justify-center py-6">
    <div class="w-full max-w-4xl vafadar-form-card">

        <!-- ===== هدر ===== -->
        <div class="vafadar-form-header">
            <h2>
                <span class="header-icon">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M4 7h16M4 12h16M4 17h10"/>
                        <rect x="2" y="3" width="20" height="18" rx="2"/>
                    </svg>
                </span>
                ایجاد کد تخفیف جدید
            </h2>
            <p class="text-sm text-[#9A9CAE] mt-1 mr-12">اطلاعات کد تخفیف را وارد کنید</p>
        </div>

        <!-- ===== فرم ===== -->
        <form action="{{route('discuntCode.store')}}" method="POST" id='form' class="vafadar-form-body p-6">
            @csrf

            <!-- ===== گرید فیلدها ===== -->
            <div class="vafadar-form-grid grid grid-cols-2 gap-6">

                <!-- عنوان -->
                <div>
                    <label class="vafadar-label" for="title"> عنوان</label>
                    <input type="text" id="title" placeholder="عنوان کد تخفیف را وارد کنید" name='title' value="{{old('title')}}" class="vafadar-input">
                    @error('title') <span class="vafadar-error">{{$message}}</span> @enderror
                </div>
                <div class='flex flex-col w-full'>
                    <label class="vafadar-label" for="percent"> حالت تخفیف</label>
                        <select name="percent" id="percent" class="vafadar-select">
                            <option value="">-- انتخاب کنید --</option>
                            @for ($i = 1; $i <= 100; $i++)
                                <option value="{{ $i }}" >
                                    {{ $i }}%
                                </option>
                            @endfor
                        </select>
                        <input type="number" name="number" id="number" class="vafadar-input hidden" disabled placeholder="مقدار تخفیف را وارد کنید">
                </div>

                <!-- کد دستی -->
                <div id="manualCodeSection" class='hidden' disabled>
                    <label class="vafadar-label" for="code"> کد دستی</label>
                    <input type="text" id="code" placeholder="کد دستی را وارد کنید" name='code' class="vafadar-input" disabled>
                    @error('code') <span class="vafadar-error">{{$message}}</span> @enderror
                </div>

                <!-- ===== توگل‌ها ===== -->
                <div class="vafadar-toggle-group col-span-2 flex gap-8 flex-col">

                    <!-- تغییر حالت-->
                    <div class="vafadar-toggle-label">
                        <span> حالت درصدی تخفیف</span>
                        <div class="vafadar-toggle" onclick="changeState(this)">
                            <div class="vafadar-toggle-dot"></div>
                        </div>
                        <span>حالت مقداری تخفیف</span>
                    </div>
                    <!-- کد تخفیف دستی -->
                    <div class="vafadar-toggle-label">
                        <span> کد تخفیف راندوم </span>
                        <div class="vafadar-toggle" onclick="manualCode(this)">
                            <div class="vafadar-toggle-dot"></div>
                        </div>
                        <span> کد تخفیف دستی </span>
                    </div>

                </div>

            </div>

            <!-- ===== فوتر ===== -->
            <div class="vafadar-form-footer flex items-center justify-between mt-6 pt-6 border-t border-[#DBDFE9]">
                <button type="submit" class="vafadar-btn">
                    <span>ثبت کد تخفیف</span>
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M5 13l4 4L19 7"/>
                    </svg>
                </button>
                <span class="text-xs text-[#9A9CAE]">* تمامی فیلدها ضروری هستند</span>
            </div>

        </form>

    </div>
</div>

<script>
    function toggleState(el) {
        // پیدا کردن input مخفی
        let input = el.parentElement.querySelector('input[type="number"]');
        
        if (el.classList.contains('active')) {
            // غیرفعال
            el.classList.remove('active');
            if (input) input.value = 0;
        } else {
            // فعال
            el.classList.add('active');
            if (input) input.value = 1;
        }
    }


    let number=document.getElementById('number');
    let code=document.getElementById('code');
    let percent=document.getElementById('percent');
    let manualCodeSection=document.getElementById('manualCodeSection');
    function changeState(el){

        if (el.classList.contains('active')) {
            // غیرفعال
            el.classList.remove('active');
            percent.classList.remove('hidden');
            percent.removeAttribute('disabled');
            number.classList.add('hidden');
            number.setAttribute('disabled',true);
        } else {
            // فعال
            el.classList.add('active');
            percent.classList.add('hidden');
            percent.setAttribute('disabled',true);
            number.classList.remove('hidden');
            number.removeAttribute('disabled');
        }

    }
    function manualCode(el){

        if (el.classList.contains('active')) {
            // غیرفعال
            el.classList.remove('active');
            manualCodeSection.classList.add('hidden');
            code.setAttribute('disabled',true);
        } else {
            // فعال
            el.classList.add('active');
            manualCodeSection.classList.remove('hidden');
            code.removeAttribute('disabled');
        }

    }




    // ===== تنظیم اولیه توگل‌ها (اگر مقدار اولیه 1 باشد) =====
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.vafadar-toggle-label').forEach(function(label) {
            let input = label.querySelector('input[type="number"]');
            let toggle = label.querySelector('.vafadar-toggle');
            
            if (input && input.value == 1 && toggle) {
                toggle.classList.add('active');
            }
        });
    });
</script>

@endsection