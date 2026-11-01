@extends('dashboard')

@section('title','ویرایش کاربر')
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
    .vafadar-user-card {
        background: var(--metronic-bg-form);
        border: 1px solid var(--metronic-border);
        border-radius: 20px;
        padding: 30px 35px 35px;
        box-shadow: var(--shadow-sm);
        transition: all 0.3s ease;
        margin: 0 auto;
    }
    .vafadar-user-card:hover {
        box-shadow: var(--shadow-md);
    }

    /* ===== هدر فرم ===== */
    .vafadar-form-header {
        background: linear-gradient(135deg, #F5F5F5, #DBDFE9);
        border-bottom: 2px solid var(--metronic-border);
        padding: 18px 28px;
        border-radius: 24px 24px 0 0;
    }

    .vafadar-form-header h2 {
        color: #1e293b;
        font-size: 20px;
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


    /* ===== فیلدها ===== */
    .vafadar-label {
        color: #64748b;
        font-size: 12px;
        font-weight: 600;
        display: block;
        margin-bottom: 5px;
        padding-right: 4px;
        transition: all 0.3s ease;
    }

    .vafadar-input {
        width: 100%;
        padding: 11px 16px;
        background: #F5F5F5;
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: #1e293b;
        font-size: 13px;
        transition: all 0.3s ease;
        outline: none;
    }
    .vafadar-input::placeholder {
        color: #9A9CAE;
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

    /* ===== چک‌باکس‌ها ===== */
    .vafadar-checkbox-wrap {
        background: #F5F5F5;
        border: 1px solid var(--metronic-border);
        border-radius: 12px;
        padding: 6px 4px;
        max-height: 130px;
        overflow-y: auto;
        transition: all 0.3s ease;
    }
    .vafadar-checkbox-wrap:hover {
        border-color: var(--metronic-primary-light);
    }
    .vafadar-checkbox-wrap::-webkit-scrollbar {
        width: 4px;
    }
    .vafadar-checkbox-wrap::-webkit-scrollbar-track {
        background: transparent;
    }
    .vafadar-checkbox-wrap::-webkit-scrollbar-thumb {
        background: var(--metronic-primary-light);
        border-radius: 10px;
    }

    .vafadar-checkbox-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 8px 14px;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .vafadar-checkbox-item:hover {
        background: rgba(27, 132, 255, 0.05);
    }
    .vafadar-checkbox-item span {
        color: #1e293b;
        font-size: 13px;
        transition: all 0.2s ease;
    }
    .vafadar-checkbox-item:hover span {
        color: #1e293b;
    }

    .vafadar-checkbox {
        width: 18px;
        height: 18px;
        accent-color: var(--metronic-primary);
        cursor: pointer;
        border-radius: 5px;
        transition: all 0.2s ease;
        flex-shrink: 0;
    }
    .vafadar-checkbox:hover {
        transform: scale(1.1);
    }

    /* ===== دکمه ثبت ===== */
    .vafadar-submit-btn {
        width: 100%;
        padding: 14px;
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
        border: none;
        border-radius: 12px;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.15);
    }
    .vafadar-submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.25);
    }
    .vafadar-submit-btn:active {
        transform: translateY(0) scale(0.97);
    }

    /* ===== بخش عنوان نقش‌ها ===== */
    .vafadar-role-title {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 10px;
    }
    .vafadar-role-title span {
        color: #64748b;
        font-size: 12px;
        font-weight: 600;
    }
    .vafadar-role-title .line {
        flex: 1;
        height: 1.5px;
        background: var(--metronic-border);
    }

    /* ===== فوتر ===== */
    .vafadar-footer {
        text-align: center;
        margin-top: 16px;
        color: #9A9CAE;
        font-size: 11px;
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 640px) {
        .vafadar-user-card {
            padding: 20px 18px 24px;
            margin: 0 12px;
        }
        .vafadar-user-header h2 {
            font-size: 18px;
        }
        .vafadar-input {
            padding: 10px 14px;
            font-size: 12px;
        }
        .vafadar-checkbox-item {
            padding: 6px 10px;
        }
        .vafadar-checkbox-item span {
            font-size: 12px;
        }
        .vafadar-submit-btn {
            padding: 12px;
            font-size: 13px;
        }
        .vafadar-user-header .icon-box {
            width: 48px;
            height: 48px;
        }
        .vafadar-user-header .icon-box svg {
            width: 24px;
            height: 24px;
        }
    }

    @media (max-width: 480px) {
        .vafadar-user-card {
            padding: 14px 12px 18px;
            margin: 0 8px;
        }
        .vafadar-user-header h2 {
            font-size: 16px;
        }
        .vafadar-user-header p {
            font-size: 12px;
        }
        .vafadar-input {
            padding: 8px 12px;
            font-size: 11px;
        }
        .vafadar-checkbox {
            width: 16px;
            height: 16px;
        }
        .vafadar-checkbox-item {
            padding: 5px 8px;
        }
        .vafadar-checkbox-item span {
            font-size: 11px;
        }
    }
</style>

<div class="w-full flex justify-center py-6 px-4">
    <div class="vafadar-user-card w-full">
        <!-- ===== هدر ===== -->
        <div class="vafadar-form-header">
            <h2>
                <span class="header-icon">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M20 7h-4.5L15 4h-6L8.5 7H4v11h16V7z"/>
                        <circle cx="9" cy="13" r="2"/>
                        <circle cx="15" cy="13" r="2"/>
                        <path d="M9 13h6"/>
                    </svg>
                </span>
                ویرایش محصول جدید
            </h2>
            <p class="text-sm text-[#9A9CAE] mt-1 mr-12">اطلاعات محصول را وارد کنید</p>
        </div>
        <!-- ===== فرم ===== -->
        <form action="{{route('user.update',['user'=>$user])}}" method="post">
            @csrf

            <!-- ===== نام ===== -->
            <div class="mb-4">
                <label class="vafadar-label"> نام</label>
                <input type="text" required name="name" value="{{$user->name}}" placeholder="نام خود را وارد کنید" class="vafadar-input">
            </div>

            <!-- ===== نام خانوادگی ===== -->
            <div class="mb-4">
                <label class="vafadar-label"> نام خانوادگی</label>
                <input type="text" required name="family" value="{{$user->family}}" placeholder="نام خانوادگی خود را وارد کنید" class="vafadar-input">
            </div>

            <!-- ===== شماره موبایل ===== -->
            <div class="mb-4">
                <label class="vafadar-label"> شماره موبایل</label>
                <input type="tel" required name="phoneNumber" value="{{$user->phoneNumber}}" placeholder="مثلاً 09123456789" class="vafadar-input">
            </div>

            <!-- ===== ایمیل ===== -->
            <div class="mb-4">
                <label class="vafadar-label"> ایمیل</label>
                <input type="text" required name="email" value="{{$user->email}}" placeholder="example@gmail.com" class="vafadar-input">
            </div>

            <!-- ===== رمز عبور (اختیاری) ===== -->
            <div class="mb-4">
                <label class="vafadar-label"> رمز عبور جدید <span class="text-[#9A9CAE] font-normal">(اختیاری)</span></label>
                <input type="password" name="password" placeholder="برای تغییر رمز عبور وارد کنید" class="vafadar-input">
            </div>

            <!-- ===== نقش‌ها ===== -->
            <div class="mb-5">
                <div class="vafadar-role-title">
                    <span> نقش‌های کاربر</span>
                    <div class="line"></div>
                </div>
                <div class="vafadar-checkbox-wrap">
                    @foreach($roles as $role)
                        @php $checked = $user->roles->contains($role->id) @endphp
                        <label class="vafadar-checkbox-item">
                            <span>{{$role->fa_title}}</span>
                            <input type="checkbox" name="roles[]" value="{{$role->id}}" {{ $checked ? 'checked' : '' }} class="vafadar-checkbox">
                        </label>
                    @endforeach
                </div>
            </div>

            <!-- ===== دکمه ثبت ===== -->
            <button type="submit" class="vafadar-submit-btn">
                <span>ویرایش کاربر</span>
                <svg class="w-[18px] h-[18px] fill-white" viewBox="0 0 24 24">
                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
                </svg>
            </button>

        </form>

        <!-- ===== فوتر ===== -->
        <div class="vafadar-footer">
            <span>© ۱۴۰۳ · تمام حقوق محفوظ است</span>
        </div>

    </div>
</div>

@endsection