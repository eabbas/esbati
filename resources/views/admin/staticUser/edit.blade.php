@extends('dashboard')

@section('content')

<style>
    /* ===== پالت رنگی مترونیک (Metronic) ===== */
    :root {
        --metronic-dark: #0D0E12;
        --metronic-content-bg: #FCFCFC;
        --metronic-form-bg: #FFFFFF;
        --metronic-shadow: #F5F5F5;
        --metronic-border: #DBDFE9;
        --metronic-text-dark: #9A9CAE;
        --metronic-text-hover: #F5F5F5;
        --metronic-blue: #1B84FF;
    }

    /* ===== کارت فرم ===== */
    .metronic-form-card {
        background: var(--metronic-content-bg);
        border: 1px solid var(--metronic-border);
        border-radius: 24px;
        box-shadow: 0 4px 20px rgba(13,14,18,0.03);
        transition: all 0.3s ease;
        overflow: hidden;
        max-width: 600px;
        width: 100%;
        margin: 0 auto;
        padding: 32px;
    }
    .metronic-form-card:hover {
        box-shadow: 0 8px 40px rgba(13,14,18,0.06);
    }

    /* ===== هدر کارت ===== */
    .metronic-form-header {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 24px;
        padding-bottom: 16px;
        border-bottom: 2px solid var(--metronic-border);
    }

    .metronic-form-header .header-icon {
        width: 48px;
        height: 48px;
        background: var(--metronic-blue);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 22px;
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.25);
        flex-shrink: 0;
    }

    .metronic-form-header h2 {
        color: var(--metronic-dark);
        font-size: 20px;
        font-weight: 700;
        margin: 0;
    }

    .metronic-form-header .subtitle {
        color: var(--metronic-text-dark);
        font-size: 14px;
        margin-top: 2px;
    }

    /* ===== فرم ===== */
    .metronic-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .metronic-form .form-group {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .metronic-form .form-group label {
        color: var(--metronic-dark);
        font-size: 14px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .metronic-form .form-group label .required {
        color: var(--metronic-blue);
    }

    .metronic-form .form-group .helper-text {
        color: var(--metronic-text-dark);
        font-size: 12px;
        margin-top: 2px;
    }

    /* ===== ورودی‌های متن ===== */
    .metronic-input {
        width: 100%;
        padding: 10px 14px;
        background: var(--metronic-shadow);
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: var(--metronic-dark);
        font-size: 14px;
        transition: all 0.3s ease;
        outline: none;
    }
    .metronic-input::placeholder {
        color: var(--metronic-text-dark);
    }
    .metronic-input:focus {
        border-color: var(--metronic-blue);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.06);
        background: var(--metronic-form-bg);
    }

    /* ===== فایل آپلود ===== */
    .metronic-file-upload {
        position: relative;
        width: 100%;
    }

    .metronic-file-upload input[type="file"] {
        position: absolute;
        inset: 0;
        opacity: 0;
        cursor: pointer;
        z-index: 2;
    }

    .metronic-file-upload .file-drop-zone {
        width: 100%;
        padding: 30px 20px;
        border: 2px dashed var(--metronic-border);
        border-radius: 16px;
        background: var(--metronic-shadow);
        text-align: center;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .metronic-file-upload .file-drop-zone:hover {
        border-color: var(--metronic-blue);
        background: var(--metronic-content-bg);
    }

    .metronic-file-upload .file-drop-zone .icon {
        font-size: 36px;
        display: block;
        margin-bottom: 8px;
        color: var(--metronic-text-dark);
    }

    .metronic-file-upload .file-drop-zone .title {
        color: var(--metronic-dark);
        font-size: 14px;
        font-weight: 600;
    }

    .metronic-file-upload .file-drop-zone .subtitle {
        color: var(--metronic-text-dark);
        font-size: 12px;
        margin-top: 2px;
    }

    .metronic-file-upload .file-drop-zone .file-name {
        color: var(--metronic-blue);
        font-size: 13px;
        font-weight: 600;
        margin-top: 6px;
        display: none;
    }

    .metronic-file-upload .file-drop-zone .file-name.show {
        display: block;
    }

    /* ===== دکمه ذخیره ===== */
    .metronic-submit-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px 28px;
        background: var(--metronic-blue);
        color: #fff;
        border: none;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.15);
        width: 100%;
        margin-top: 8px;
    }
    .metronic-submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.25);
    }
    .metronic-submit-btn:active {
        transform: translateY(0) scale(0.97);
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 640px) {
        .metronic-form-card {
            padding: 20px;
        }
        .metronic-form-header h2 {
            font-size: 18px;
        }
        .metronic-file-upload .file-drop-zone {
            padding: 20px 16px;
        }
        .metronic-file-upload .file-drop-zone .icon {
            font-size: 28px;
        }
        .metronic-submit-btn {
            padding: 10px 20px;
            font-size: 13px;
        }
    }

    @media (max-width: 480px) {
        .metronic-form-card {
            padding: 16px;
            border-radius: 16px;
        }
        .metronic-form-header .header-icon {
            width: 40px;
            height: 40px;
            font-size: 18px;
        }
        .metronic-form-header h2 {
            font-size: 16px;
        }
        .metronic-file-upload .file-drop-zone {
            padding: 16px 12px;
        }
        .metronic-file-upload .file-drop-zone .icon {
            font-size: 24px;
        }
        .metronic-file-upload .file-drop-zone .title {
            font-size: 13px;
        }
        .metronic-file-upload .file-drop-zone .subtitle {
            font-size: 11px;
        }
    }
</style>

<div class="w-full flex justify-center py-6 px-4">
    <div class="metronic-form-card">
        
        <!-- ===== هدر ===== -->
        <div class="metronic-form-header">
            <div class="header-icon">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M4 7h16M4 12h16M4 17h10"/>
                    <rect x="2" y="3" width="20" height="18" rx="2"/>
                </svg>
            </div>
            <div>
                <h2>اطلاعات پشتیبانی</h2>
                <div class="subtitle">اطلاعات جدید را وارد کنید</div>
            </div>
        </div>

        <!-- ===== فرم ===== -->
        <form action="{{route('staticUser.update',['staticUser'=>$user->id])}}" method="post" enctype="multipart/form-data" class="metronic-form">
            @csrf

            <!-- اسم -->
            <div class="form-group">
                <label>
                    <span> اسم</span>
                    <span class="required">*</span>
                </label>
                <input required type="text" value="{{$user->name}}" name="name" class="metronic-input" placeholder="اسم را وارد کنید">
            </div>

            <!-- نقش -->
            <div class="form-group">
                <label>
                    <span> نقش</span>
                </label>
                <select name="role" id="">
                    <option value="مشتری"> مشتری </option>
                    <option value="ویزیتور"> ویزیتور </option>
                    <option value="همکار"> همکار </option>
                </select>
            </div>
            <!-- پیام -->
            <div class="form-group">
                <label>
                    <span> پیام</span>
                </label>
                <input required type="text" value="{{$user->message}}" name="message" class="metronic-input" placeholder="پیام را وارد کنید">
            </div>

            <button type="submit" class="metronic-submit-btn">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/>
                    <polyline points="17 21 17 13 7 13 7 21"/>
                    <polyline points="7 3 7 8 15 8"/>
                </svg>
                ذخیره اطلاعات
            </button>
        </form>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const fileInput = document.getElementById('imageInput');
        const dropZone = document.getElementById('imageDropZone');
        const fileName = document.getElementById('imageFileName');

        fileInput.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                fileName.textContent = '📎 ' + this.files[0].name;
                fileName.classList.add('show');
            } else {
                fileName.classList.remove('show');
            }
        });

        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, function(e) {
                e.preventDefault();
                e.stopPropagation();
            });
        });

        ['dragenter', 'dragover'].forEach(eventName => {
            dropZone.addEventListener(eventName, function() {
                this.style.borderColor = 'var(--metronic-blue)';
                this.style.background = 'var(--metronic-content-bg)';
            });
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, function() {
                this.style.borderColor = '';
                this.style.background = '';
            });
        });

        dropZone.addEventListener('drop', function(e) {
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileInput.files = files;
                const event = new Event('change');
                fileInput.dispatchEvent(event);
            }
        });
    });
</script>

@endsection