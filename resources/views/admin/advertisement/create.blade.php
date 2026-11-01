@extends("dashboard")

@section("content")
<style>
    /* ===== پالت رنگی مترونیک (Metronic) ===== */
    :root {
        --metronic-dark: #0D0E12;
        --metronic-content-bg: #FCFCFC;
        --metronic-form-bg: #FFFFFF;
        --metronic-shadow: #F5F5F5;
        --metronic-border: #DBDFE9;
        --metronic-text-dark: #9A9CAE;
        --metronic-blue: #1B84FF;
    }

    /* استایل‌های سفارشی تکمیلی */
    .form-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        background: var(--metronic-content-bg);
        border: 2px dashed var(--metronic-border);
        border-radius: 24px;
        box-shadow: 0 4px 20px rgba(13,14,18,0.03);
    }
    
    .form-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(255, 255, 255, 0.88);
        backdrop-filter: blur(6px);
        border-radius: 24px;
        z-index: 0;
        transition: all 0.4s ease;
    }
    
    .form-card>* {
        position: relative;
        z-index: 1;
    }
    
    .form-card.has-image::before {
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(10px);
    }
    
    /* انیمیشن ورود */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .form-card {
        animation: fadeInUp 0.6s ease-out;
    }
    
    /* استایل لیبل‌ها */
    .form-label {
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--metronic-dark);
        min-width: 100px;
        text-align: left;
        letter-spacing: 0.3px;
    }
    
    .form-label svg {
        display: inline-block;
        vertical-align: middle;
        margin-left: 6px;
        opacity: 0.6;
    }
    
    .input-wrapper {
        display: flex;
        align-items: center;
        gap: 16px;
        width: 100%;
    }
    
    /* ===== ورودی‌ها ===== */
    .metronic-input {
        flex: 1;
        padding: 10px 14px;
        background: var(--metronic-shadow);
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: var(--metronic-dark);
        font-size: 14px;
        transition: all 0.3s ease;
        outline: none;
        text-align: center;
    }
    .metronic-input::placeholder {
        color: var(--metronic-text-dark);
    }
    .metronic-input:focus {
        border-color: var(--metronic-blue);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.06);
        background: var(--metronic-form-bg);
    }
    
    /* ===== سلکت ===== */
    .metronic-select {
        flex: 1;
        padding: 10px 14px;
        background: var(--metronic-shadow);
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: var(--metronic-dark);
        font-size: 14px;
        transition: all 0.3s ease;
        outline: none;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%239A9CAE' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: left 14px center;
        cursor: pointer;
        text-align: center;
    }
    .metronic-select:hover {
        border-color: var(--metronic-text-dark);
    }
    .metronic-select:focus {
        border-color: var(--metronic-blue);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.06);
        background: var(--metronic-form-bg);
    }
    
    /* ===== فایل آپلود ===== */
    .metronic-file-input {
        flex: 1;
        padding: 10px 14px;
        background: var(--metronic-shadow);
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: var(--metronic-dark);
        font-size: 14px;
        transition: all 0.3s ease;
        outline: none;
        text-align: center;
    }
    .metronic-file-input:focus {
        border-color: var(--metronic-blue);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.06);
        background: var(--metronic-form-bg);
    }
    
    .metronic-file-input::file-selector-button {
        padding: 6px 16px;
        border-radius: 8px;
        border: none;
        background: var(--metronic-blue);
        color: white;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-left: 12px;
    }
    .metronic-file-input::file-selector-button:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.25);
    }
    
    /* ===== دکمه ثبت ===== */
    .metronic-submit-btn {
        flex: 1;
        min-width: 140px;
        padding: 12px 24px;
        background: var(--metronic-blue);
        color: #fff;
        border: none;
        border-radius: 14px;
        font-size: 16px;
        font-weight: 700;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.15);
    }
    .metronic-submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.25);
    }
    .metronic-submit-btn:active {
        transform: translateY(0) scale(0.97);
    }
    
    /* ===== دکمه حذف تصویر ===== */
    .metronic-remove-btn {
        flex: 1;
        min-width: 140px;
        padding: 12px 24px;
        background: var(--metronic-shadow);
        color: var(--metronic-dark);
        border: 1px solid var(--metronic-border);
        border-radius: 14px;
        font-size: 16px;
        font-weight: 600;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .metronic-remove-btn:hover {
        background: var(--metronic-dark);
        color: #fff;
        transform: translateY(-2px);
    }
    
    /* ===== پیش‌نمایش تصویر ===== */
    #imagePreview {
        border-radius: 12px;
        overflow: hidden;
        border: 2px solid var(--metronic-border);
        box-shadow: 0 4px 12px rgba(13,14,18,0.04);
    }
    
    #previewImg {
        width: 100%;
        height: auto;
        max-height: 200px;
        object-fit: cover;
    }
    
    /* ===== ریسپانسیو ===== */
    @media (max-width: 640px) {
        .input-wrapper {
            flex-direction: column;
            align-items: stretch;
            gap: 6px;
        }
        .form-label {
            min-width: unset;
            text-align: right;
            font-size: 0.8rem;
        }
        .form-card {
            padding: 20px !important;
        }
        .metronic-submit-btn,
        .metronic-remove-btn {
            width: 100%;
            min-width: unset;
        }
    }
</style>

<div class="w-full flex justify-center items-center min-h-screen p-4">
    <form action="{{route('advertisement.store')}}" method="POST" enctype="multipart/form-data" 
          class="form-card flex w-full max-w-3xl mx-auto flex-col gap-5 justify-center items-center p-8 rounded-2xl shadow-2xl transition-all duration-300"
          id="adForm">
        
        @csrf
        
        <!-- عنوان فرم -->
        <div class="w-full text-center mb-2">
            <h3 class="text-2xl font-bold" style="color: var(--metronic-dark);">✨ ایجاد تبلیغ جدید</h3>
            <p class="text-sm mt-1" style="color: var(--metronic-text-dark);">اطلاعات را وارد کنید و تصویر را انتخاب کنید</p>
        </div>
        
        <!-- زیر عنوان -->
        <div class="input-wrapper">
            <label class="form-label">
                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                </svg>
                زیر عنوان
            </label>
            <input type="text" name="subtitle" placeholder="✦ زیر عنوان" class="metronic-input">
        </div>
        
        <!-- عنوان اصلی -->
        <div class="input-wrapper">
            <label class="form-label">
                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                </svg>
                عنوان اصلی
            </label>
            <input type="text" name="title" placeholder="عنوان اصلی" class="metronic-input text-lg font-bold">
        </div>
        
        <!-- خلاصه -->
        <div class="input-wrapper">
            <label class="form-label">
                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
                </svg>
                خلاصه
            </label>
            <input type="text" name="summary" placeholder="خلاصه متن" class="metronic-input">
        </div>
        
        <!-- دسته‌بندی -->
        <div class="input-wrapper">
            <label class="form-label">
                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                </svg>
                دسته‌بندی
            </label>
            <select name="category_id" class="metronic-select">
                @foreach($categories as $category)
                    @if($category->id!=1)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        
        <!-- انتخاب تصویر -->
        <div class="input-wrapper">
            <label class="form-label">
                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                تصویر
            </label>
            <input type="file" name="image_path" id="imageInput" accept="image/*" class="metronic-file-input">
        </div>
        
        <!-- پیش‌نمایش تصویر -->
        <div id="imagePreview" class="hidden w-full mt-1 rounded-xl overflow-hidden border-2" style="border-color: var(--metronic-border);">
            <img id="previewImg" src="" alt="پیش‌نمایش تصویر" class="w-full h-auto max-h-64 object-cover">
        </div>
        
        <!-- دکمه‌ها -->
        <div class="flex gap-4 w-full justify-center flex-wrap mt-2">
            <button type="submit" class="metronic-submit-btn">
                ثبت تبلیغ
            </button>
            
            <button type="button" id="removeBgBtn" class="metronic-remove-btn hidden">
                ✕ حذف تصویر
            </button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('adForm');
        const imageInput = document.getElementById('imageInput');
        const previewDiv = document.getElementById('imagePreview');
        const previewImg = document.getElementById('previewImg');
        const removeBgBtn = document.getElementById('removeBgBtn');
        
        // ==========================================
        // تابع تنظیم تصویر پس‌زمینه فرم
        // ==========================================
        function setBackgroundImage(file) {
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // تنظیم تصویر پس‌زمینه فرم
                    form.style.backgroundImage = `url('${e.target.result}')`;
                    form.classList.add('has-image');
                    
                    // نمایش پیش‌نمایش
                    previewImg.src = e.target.result;
                    previewDiv.classList.remove('hidden');
                    removeBgBtn.classList.remove('hidden');
                    
                    // تغییر حاشیه فرم
                    form.classList.remove('border-dashed');
                    form.style.borderStyle = 'solid';
                    form.style.borderColor = 'rgba(255,255,255,0.3)';
                };
                reader.readAsDataURL(file);
            }
        }
        
        // ==========================================
        // رویداد انتخاب فایل
        // ==========================================
        imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                if (!file.type.startsWith('image/')) {
                    alert('لطفاً فقط فایل تصویری انتخاب کنید!');
                    this.value = '';
                    return;
                }
                setBackgroundImage(file);
            }
        });
        
        // ==========================================
        // حذف تصویر پس‌زمینه
        // ==========================================
        removeBgBtn.addEventListener('click', function() {
            form.style.backgroundImage = '';
            form.classList.remove('has-image');
            form.classList.add('border-dashed');
            form.style.borderStyle = 'dashed';
            form.style.borderColor = 'var(--metronic-border)';
            
            imageInput.value = '';
            previewDiv.classList.add('hidden');
            previewImg.src = '';
            this.classList.add('hidden');
        });
        
        // ==========================================
        // پشتیبانی از Drag & Drop
        // ==========================================
        form.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.style.borderColor = 'var(--metronic-blue)';
            this.style.background = 'var(--metronic-shadow)';
        });
        
        form.addEventListener('dragleave', function(e) {
            e.preventDefault();
            this.style.borderColor = '';
            this.style.background = '';
        });
        
        form.addEventListener('drop', function(e) {
            e.preventDefault();
            this.style.borderColor = '';
            this.style.background = '';
            
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                const file = files[0];
                if (file.type.startsWith('image/')) {
                    const dt = new DataTransfer();
                    dt.items.add(file);
                    imageInput.files = dt.files;
                    setBackgroundImage(file);
                } else {
                    alert('لطفاً فقط فایل تصویری رها کنید!');
                }
            }
        });
        
        console.log('✅ فرم با قابلیت پس‌زمینه تصویر فعال شد!');
    });
</script>
@endsection