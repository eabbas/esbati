@extends('dashboard')

@section('title','ایجاد نقش')
@section('content')

<style>
    /* ===== پالت رنگی مترونیک ===== */
    :root {
        --metronic-primary: #1B84FF;
        --metronic-primary-dark: #0a6fd6;
        --metronic-primary-light: #4a9fff;
        --metronic-sidebar: #0D0E12;
        --metronic-bg-content: #FCFCFC;
        --metronic-bg-form: #FFFFFF;
        --metronic-shadow-form: #F5F5F5;
        --metronic-border: #DBDFE9;
        --metronic-text: #9A9CAE;
        --metronic-text-hover: #1B84FF;
        --metronic-success: #059669;
        --metronic-danger: #dc2626;
        --metronic-warning: #d97706;
        
        --shadow-sm: 0 2px 8px rgba(27, 132, 255, 0.06);
        --shadow-md: 0 4px 20px rgba(27, 132, 255, 0.10);
        --shadow-lg: 0 8px 40px rgba(27, 132, 255, 0.14);
    }

    /* ===== کارت اصلی ===== */
    .vafadar-form-card {
        background: var(--metronic-bg-form);
        border: 1px solid var(--metronic-border);
        border-radius: 24px;
        box-shadow: var(--shadow-sm);
        transition: all 0.3s ease;
        overflow: hidden;
        max-width: 700px;
        margin: 0 auto;
    }
    .vafadar-form-card:hover {
        box-shadow: var(--shadow-md);
    }

    /* ===== هدر فرم ===== */
    .vafadar-form-header {
        background: linear-gradient(135deg, #F5F5F5, #DBDFE9);
        border-bottom: 2px solid var(--metronic-border);
        padding: 20px 28px;
    }

    .vafadar-form-header h1 {
        color: #1e293b;
        font-size: 18px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .vafadar-form-header .header-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.25);
    }

    .vafadar-form-header .sub-text {
        color: #9A9CAE;
        font-size: 14px;
        margin-top: 4px;
        margin-right: 52px;
    }

    /* ===== فیلدها ===== */
    .vafadar-label {
        color: #64748b;
        font-size: 12px;
        font-weight: 600;
        display: block;
        margin-bottom: 5px;
        padding-right: 4px;
    }

    .vafadar-input {
        width: 100%;
        padding: 11px 16px;
        background: #F5F5F5;
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: #1e293b;
        font-size: 14px;
        transition: all 0.3s ease;
        outline: none;
    }
    .vafadar-input::placeholder {
        color: #9A9CAE;
    }
    .vafadar-input:hover {
        border-color: var(--metronic-primary-light);
    }
    .vafadar-input:focus {
        border-color: var(--metronic-primary);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background: var(--metronic-bg-form);
    }

    /* ===== دکمه ثبت ===== */
    .vafadar-btn {
        width: 100%;
        padding: 13px 24px;
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
        border: none;
        border-radius: 12px;
        color: #fff;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.15);
    }
    .vafadar-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 30px rgba(27, 132, 255, 0.25);
    }
    .vafadar-btn:active {
        transform: translateY(0) scale(0.97);
    }

    .vafadar-btn svg {
        width: 18px;
        height: 18px;
        fill: #fff;
        transition: transform 0.3s ease;
    }
    .vafadar-btn:hover svg {
        transform: translateX(4px);
    }

    /* ===== بخش‌های فرم ===== */
    .vafadar-form-section {
        padding: 20px 28px;
        border-bottom: 1px solid var(--metronic-border);
    }
    .vafadar-form-section:last-of-type {
        border-bottom: none;
    }

    .vafadar-section-title {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 14px;
    }
    .vafadar-section-title svg {
        width: 18px;
        height: 18px;
        fill: var(--metronic-primary);
    }
    .vafadar-section-title span {
        color: #64748b;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .vafadar-section-title .line {
        flex: 1;
        height: 1.5px;
        background: var(--metronic-border);
    }

    /* ===== فوتر ===== */
    .vafadar-form-footer {
        padding: 16px 28px;
        background: #F5F5F5;
        border-top: 1px solid var(--metronic-border);
        text-align: center;
    }
    .vafadar-form-footer span {
        color: #9A9CAE;
        font-size: 11px;
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 640px) {
        .vafadar-form-header {
            padding: 16px 20px;
        }
        .vafadar-form-header h1 {
            font-size: 16px;
        }
        .vafadar-form-section {
            padding: 16px 20px;
        }
        .vafadar-form-footer {
            padding: 12px 20px;
        }
        .vafadar-input {
            padding: 10px 14px;
            font-size: 13px;
        }
        .vafadar-btn {
            padding: 12px 20px;
            font-size: 14px;
        }
    }

    /* ===== انیمیشن ===== */
    @keyframes fadeSlideUp {
        from {
            opacity: 0;
            transform: translateY(15px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .animate-in {
        animation: fadeSlideUp 0.4s ease forwards;
        opacity: 0;
    }
    .animate-in:nth-child(1) { animation-delay: 0.05s; }
    .animate-in:nth-child(2) { animation-delay: 0.1s; }
    .animate-in:nth-child(3) { animation-delay: 0.15s; }
    .animate-in:nth-child(4) { animation-delay: 0.2s; }
    .animate-in:nth-child(5) { animation-delay: 0.25s; }
</style>

<div class="w-full flex justify-center py-6 px-4">
    <div class="w-full vafadar-form-card">

        <!-- ===== هدر ===== -->
        <div class="vafadar-form-header">
            <h1>
                <span class="header-icon">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </span>
                ایجاد نقش جدید
            </h1>
            <p class="sub-text">نقش کاربری را با دسترسی‌های مشخص تعریف کنید</p>
        </div>

        <!-- ===== فرم ===== -->
        <form action="{{route('permision.store')}}" method="post">
            @csrf

            <!-- ===== بخش اطلاعات نقش ===== -->
            <div class="vafadar-form-section animate-in">
                <div class="vafadar-section-title">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                    <span>اطلاعات نقش</span>
                    <div class="line"></div>
                </div>

                <div class="space-y-4 grid grid-cols-1 sm:grid-cols-2 gap-2">
                    <div>
                        <label class="vafadar-label"> عنوان فارسی</label>
                        <input type="text" name="fa_title" placeholder="مثلاً مدیر_سیستم" class="vafadar-input">
                    </div>
                    <div>
                        <label class="vafadar-label"> عنوان انگلیسی</label>
                        <input type="text" name="ea_title" placeholder="مثلاً admin" class="vafadar-input">
                    </div>
                </div>
            </div>


            <!-- ===== دکمه ثبت ===== -->
            <div class="vafadar-form-section animate-in">
                <button type="submit" class="vafadar-btn">
                    <span>ایجاد نقش</span>
                    <svg viewBox="0 0 24 24">
                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                    </svg>
                </button>
            </div>

        </form>

        <!-- ===== فوتر ===== -->
        <div class="vafadar-form-footer">
            <span>© ۱۴۰۳ · تمام حقوق محفوظ است</span>
        </div>

    </div>
</div>

@endsection