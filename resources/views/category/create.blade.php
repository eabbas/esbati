@extends('dashboard')
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
        width: 100%;
        margin: 0 auto;
    }
    .vafadar-form-card:hover {
        box-shadow: var(--shadow-md);
    }

    /* ===== هدر فرم ===== */
    .vafadar-form-header {
        background: linear-gradient(135deg, #F5F5F5, #DBDFE9);
        border-bottom: 2px solid var(--metronic-border);
        padding: 20px 32px;
    }

    .vafadar-form-header h2 {
        color: #1e293b;
        font-size: 20px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .vafadar-form-header .header-icon {
        width: 44px;
        height: 44px;
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
        border-radius: 14px;
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
        margin-right: 56px;
    }

    /* ===== بدنه فرم ===== */
    .vafadar-form-body {
        padding: 28px 32px 32px;
    }

    /* ===== سکشن‌ها ===== */
    .vafadar-section {
        background: #FFFFFF;
        border-radius: 16px;
        padding: 18px 22px;
        margin-bottom: 20px;
        border: 1px solid var(--metronic-border);
        transition: all 0.3s ease;
    }
    .vafadar-section:hover {
        border-color: var(--metronic-primary-light);
        box-shadow: var(--shadow-sm);
    }

    .vafadar-section-title {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 14px;
        padding-bottom: 10px;
    }
    .vafadar-section-title .icon {
        width: 30px;
        height: 30px;
        border-radius: 10px;
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 13px;
    }
    .vafadar-section-title h3 {
        color: #1e293b;
        font-size: 15px;
        font-weight: 700;
        margin: 0;
    }
    .vafadar-section-title .line {
        flex: 1;
        height: 2px;
        background: linear-gradient(to right, var(--metronic-border), transparent);
    }

    /* ===== فیلدها ===== */
    .vafadar-label {
        color: #64748b;
        font-size: 13px;
        font-weight: 600;
        display: block;
        margin-bottom: 5px;
        padding-right: 4px;
    }

    .vafadar-input {
        width: 100%;
        padding: 11px 16px;
        background: rgba(255, 255, 255, 0.6);
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: #1e293b;
        font-size: 14px;
        transition: all 0.3s ease;
        outline: none;
    }
    .vafadar-input::placeholder {
        color: #9A9CAE;
        font-size: 13px;
    }
    .vafadar-input:hover {
        border-color: var(--metronic-primary-light);
    }
    .vafadar-input:focus {
        border-color: var(--metronic-primary);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background: var(--metronic-bg-form);
    }

    /* ===== چک‌باکس ===== */
    .vafadar-checkbox-group {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 4px 0;
    }
    .vafadar-checkbox-group label {
        color: #1e293b;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
    }

    .vafadar-checkbox {
        width: 18px;
        height: 18px;
        accent-color: var(--metronic-primary);
        cursor: pointer;
        border-radius: 5px;
        transition: all 0.2s ease;
    }
    .vafadar-checkbox:hover {
        transform: scale(1.1);
    }

    /* ===== خطا ===== */
    .vafadar-error {
        color: var(--metronic-danger);
        font-size: 12px;
        margin-top: 4px;
        display: block;
        padding-right: 4px;
    }

    /* ===== دسته‌بندی والد ===== */
    .vafadar-categories-box {
        width: 100%;
        max-height: 160px;
        overflow-y: auto;
        padding: 10px 14px;
        background: rgba(255, 255, 255, 0.4);
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    .vafadar-categories-box:hover {
        border-color: var(--metronic-primary-light);
    }

    .vafadar-categories-box::-webkit-scrollbar {
        width: 4px;
    }
    .vafadar-categories-box::-webkit-scrollbar-track {
        background: transparent;
    }
    .vafadar-categories-box::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-light));
        border-radius: 10px;
    }

    .vafadar-category-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 5px 8px;
        border-radius: 8px;
        transition: all 0.2s ease;
    }
    .vafadar-category-item:hover {
        background: rgba(27, 132, 255, 0.06);
    }
    .vafadar-category-item label {
        color: #1e293b;
        font-size: 14px;
        cursor: pointer;
    }

    /* ===== دکمه ایجاد ویژگی ===== */
    .vafadar-add-attr-btn {
        width: 100%;
        padding: 11px;
        background: rgba(255, 255, 255, 0.4);
        border: 2px dashed var(--metronic-primary-light);
        border-radius: 12px;
        color: var(--metronic-primary);
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }
    .vafadar-add-attr-btn:hover {
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
        color: #fff;
        border-color: var(--metronic-primary);
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    /* ===== ویژگی‌ها ===== */
    .vafadar-attr-item {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 8px;
        padding: 12px 14px;
        width: 100%;
        background: rgba(255, 255, 255, 0.4);
        border-radius: 12px;
        border: 1.5px solid var(--metronic-primary-light);
        animation: slideIn 0.3s ease;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-10px) scale(0.95);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .vafadar-attr-item input {
        padding: 10px 14px;
        background: var(--metronic-bg-form);
        border: 1.5px solid var(--metronic-border);
        border-radius: 10px;
        color: #1e293b;
        font-size: 14px;
        outline: none;
        transition: all 0.3s ease;
        width: 100%;
    }
    .vafadar-attr-item input:focus {
        border-color: var(--metronic-primary);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
    }

    .vafadar-attr-remove {
        position: absolute;
        top: -10px;
        right: -10px;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: #fee2e2;
        border: 2px solid #fca5a5;
        color: var(--metronic-danger);
        font-size: 14px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .vafadar-attr-remove:hover {
        background: var(--metronic-danger);
        color: #fff;
        transform: rotate(90deg) scale(1.1);
        border-color: var(--metronic-danger);
    }

    /* ===== دکمه ثبت ===== */
    .vafadar-submit-btn {
        width: 100%;
        padding: 14px;
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
        border: none;
        border-radius: 14px;
        color: #fff;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.15);
    }
    .vafadar-submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 28px rgba(27, 132, 255, 0.30);
    }
    .vafadar-submit-btn:active {
        transform: translateY(0) scale(0.97);
    }

    /* ===== فوتر ===== */
    .vafadar-form-footer {
        margin-top: 10px;
        text-align: center;
        font-size: 12px;
        color: #9A9CAE;
        padding-top: 10px;
        border-top: 1px solid var(--metronic-border);
    }

    /* ===== گرید برای فیلدها ===== */
    .vafadar-grid-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
    }

    .vafadar-grid-2 .full {
        grid-column: 1 / -1;
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 768px) {
        .vafadar-grid-2 {
            grid-template-columns: 1fr;
            gap: 12px;
        }
        .vafadar-form-body {
            padding: 20px 20px 24px;
        }
        .vafadar-form-header {
            padding: 16px 20px;
        }
    }

    @media (max-width: 480px) {
        .vafadar-form-body {
            padding: 14px 14px 18px;
        }
        .vafadar-form-header {
            padding: 12px 16px;
        }
        .vafadar-form-header h2 {
            font-size: 16px;
        }
        .vafadar-form-header .header-icon {
            width: 36px;
            height: 36px;
        }
        .vafadar-section {
            padding: 12px 14px;
        }
        .vafadar-input {
            padding: 9px 12px;
            font-size: 13px;
        }
        .vafadar-submit-btn {
            padding: 12px;
            font-size: 14px;
        }
        .vafadar-categories-box {
            max-height: 140px;
            padding: 8px 12px;
        }
    }
</style>

<div class="w-full lg:w-10/12 mx-auto flex justify-center py-4 px-4">
    <div class="vafadar-form-card">

        <!-- ===== هدر ===== -->
        <div class="vafadar-form-header">
            <h2>
                <span class="header-icon">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M4 7h16M4 12h16M4 17h10"/>
                        <rect x="2" y="3" width="20" height="18" rx="2"/>
                    </svg>
                </span>
                ایجاد دسته‌بندی جدید
            </h2>
            <p class="sub-text">اطلاعات دسته‌بندی را وارد کنید</p>
        </div>

        <!-- ===== فرم ===== -->
        <form action="{{route('category.store')}}" method='post' class="vafadar-form-body" enctype='multipart/form-data'>
            @csrf

                <div class="vafadar-section-title mt-5">
                    <h3>اطلاعات اصلی</h3>
                </div>

                <div class="vafadar-grid-2 mr-4">
                    <!-- عنوان -->
                    <div class="full">
                        <label class="vafadar-label"> عنوان</label>
                        <input type="text" name="title" value="{{old('title')}}" placeholder="عنوان دسته‌بندی" class="vafadar-input" required>
                        @error('title') <span class="vafadar-error">{{$message}}</span> @enderror
                    </div>

                    <!-- خلاصه -->
                    <div>
                        <label class="vafadar-label"> خلاصه</label>
                        <input type="text" name="summary" value="{{old('summary')}}" placeholder="خلاصه دسته‌بندی" class="vafadar-input">
                    </div>

                    <!-- توضیحات -->
                    <div>
                        <label class="vafadar-label"> توضیحات</label>
                        <input type="text" name="description" value="{{old('description')}}" placeholder="توضیحات دسته‌بندی" class="vafadar-input">
                    </div>

                    <!-- اسلاگ -->
                    <div>
                        <label class="vafadar-label"> اسلاگ</label>
                        <input type="text" name="slug" placeholder="اسلاگ دسته‌بندی" class="vafadar-input">
                    </div>

                    <!-- تصویر -->
                    <div>
                        <label class="vafadar-label"> تصویر</label>
                        <input type="file" name="image_path" class="vafadar-input" style="padding: 8px 12px;">
                    </div>
                </div>

                <div class="vafadar-section-title my-5">
                    <h3>تنظیمات نمایش</h3>
                </div>

                <div class="vafadar-grid-2 mr-4">
                    <!-- نمایش در خانه -->
                    <div>
                        <div class="vafadar-checkbox-group">
                            <input type="checkbox" name="show_in_home" value="1" class="vafadar-checkbox" id="show_in_home">
                            <label for="show_in_home"> نمایش در خانه</label>
                        </div>
                    </div>

                    <!-- فعال -->
                    <div>
                        <div class="vafadar-checkbox-group">
                            <input type="checkbox" name="is_active" value="1" class="vafadar-checkbox" id="is_active">
                            <label for="is_active"> فعال</label>
                        </div>
                    </div>
                </div>

                <div class="vafadar-section-title my-5">
                    <h3>دسته‌بندی والد</h3>
                </div>

                <div class="vafadar-categories-box mr-4">
                    <div class="vafadar-category-item">
                        <!-- <input type="radio" name="parent_id" value="0" class="vafadar-checkbox" id="parent_0"> -->
                        <!-- <label for="parent_0">والد</label> -->
                    </div>
                    {!! $categories !!}
                </div>

            <!-- ===== سکشن: ویژگی‌ها ===== -->
            <div class="vafadar-section mt-5">
                <div class="vafadar-section-title">
                    <h3>ویژگی‌ها</h3>
                </div>

                <div class="flex flex-col gap-3" id="attributes"></div>

                <button type="button" class="vafadar-add-attr-btn mt-3" onclick="Attributes(this)">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M12 5v14M5 12h14"/>
                    </svg>
                    افزودن ویژگی جدید
                </button>
            </div>

            <!-- ===== دکمه ثبت ===== -->
            <button class="vafadar-submit-btn mt-2">
                <span>ثبت دسته‌بندی</span>
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M5 13l4 4L19 7"/>
                </svg>
            </button>

            <div class="vafadar-form-footer">
                <span>© ۱۴۰۳ · تمام حقوق محفوظ است</span>
            </div>

        </form>

    </div>
</div>

<script>
    let attributes_table = document.getElementById('attributes');

    function Attributes(el) {
        let div = document.createElement('div');
        let input = document.createElement('input');
        let Xmark = document.createElement('div');

        div.className = 'vafadar-attr-item';
        input.className = '';
        input.setAttribute('type', 'text');
        input.setAttribute('name', 'attributes[]');
        input.setAttribute('placeholder', 'عنوان ویژگی...');

        Xmark.className = 'vafadar-attr-remove';
        Xmark.innerHTML = '✕';
        Xmark.setAttribute('onclick', 'deleteAttributes(this)');

        div.appendChild(input);
        div.appendChild(Xmark);
        attributes_table.appendChild(div);
    }

    function deleteAttributes(el) {
        el.parentElement.remove();
    }
</script>

@endsection