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
        <form action="{{route('support_information.store')}}" method="post" enctype="multipart/form-data" class="metronic-form">
            @csrf
            
            <!-- تصویر -->
            <div class="form-group">
                <label>
                    <span> تصویر</span>
                    <span class="required">*</span>
                </label>
                <div class="metronic-file-upload">
                    <input required type="file" name="image" id="imageInput" accept="image/*">
                    <div class="file-drop-zone" id="imageDropZone">
                        <span class="icon">🖼️</span>
                        <div class="title">تصویر را انتخاب کنید</div>
                        <div class="subtitle">فایل را بکشید و رها کنید یا کلیک کنید</div>
                        <div class="file-name" id="imageFileName">📎 </div>
                    </div>
                </div>
            </div>

            <!-- عنوان -->
            <div class="form-group">
                <label>
                    <span> عنوان</span>
                    <span class="required">*</span>
                </label>
                <input required type="text" name="title" class="metronic-input" placeholder="عنوان را وارد کنید">
            </div>

            <!-- خلاصه -->
            <div class="form-group">
                <label>
                    <span> خلاصه</span>
                </label>
                <input required type="text" name="summary" class="metronic-input" placeholder="خلاصه را وارد کنید">
            </div>

            @if($flag)
                <button type="submit" class="metronic-submit-btn">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/>
                        <polyline points="17 21 17 13 7 13 7 21"/>
                        <polyline points="7 3 7 8 15 8"/>
                    </svg>
                    ذخیره اطلاعات
                </button>
            @else
                <div class="rounded-xl text-center items-center bg-red-400 justify-center gap-4 p-4 flex text-white">
                    <svg class='size-5 fill-white' viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M7.493 0.015 C 7.442 0.021,7.268 0.039,7.107 0.055 C 5.234 0.242,3.347 1.208,2.071 2.634 C 0.660 4.211,-0.057 6.168,0.009 8.253 C 0.124 11.854,2.599 14.903,6.110 15.771 C 8.169 16.280,10.433 15.917,12.227 14.791 C 14.017 13.666,15.270 11.933,15.771 9.887 C 15.943 9.186,15.983 8.829,15.983 8.000 C 15.983 7.171,15.943 6.814,15.771 6.113 C 14.979 2.878,12.315 0.498,9.000 0.064 C 8.716 0.027,7.683 -0.006,7.493 0.015 M8.853 1.563 C 9.967 1.707,11.010 2.136,11.944 2.834 C 12.273 3.080,12.920 3.727,13.166 4.056 C 13.727 4.807,14.142 5.690,14.330 6.535 C 14.544 7.500,14.544 8.500,14.330 9.465 C 13.916 11.326,12.605 12.978,10.867 13.828 C 10.239 14.135,9.591 14.336,8.880 14.444 C 8.456 14.509,7.544 14.509,7.120 14.444 C 5.172 14.148,3.528 13.085,2.493 11.451 C 2.279 11.114,1.999 10.526,1.859 10.119 C 1.618 9.422,1.514 8.781,1.514 8.000 C 1.514 6.961,1.715 6.075,2.160 5.160 C 2.500 4.462,2.846 3.980,3.413 3.413 C 3.980 2.846,4.462 2.500,5.160 2.160 C 6.313 1.599,7.567 1.397,8.853 1.563 M7.706 4.290 C 7.482 4.363,7.355 4.491,7.293 4.705 C 7.257 4.827,7.253 5.106,7.259 6.816 C 7.267 8.786,7.267 8.787,7.325 8.896 C 7.398 9.033,7.538 9.157,7.671 9.204 C 7.803 9.250,8.197 9.250,8.329 9.204 C 8.462 9.157,8.602 9.033,8.675 8.896 C 8.733 8.787,8.733 8.786,8.741 6.816 C 8.749 4.664,8.749 4.662,8.596 4.481 C 8.472 4.333,8.339 4.284,8.040 4.276 C 7.893 4.272,7.743 4.278,7.706 4.290 M7.786 10.530 C 7.597 10.592,7.410 10.753,7.319 10.932 C 7.249 11.072,7.237 11.325,7.294 11.495 C 7.388 11.780,7.697 12.000,8.000 12.000 C 8.303 12.000,8.612 11.780,8.706 11.495 C 8.763 11.325,8.751 11.072,8.681 10.932 C 8.616 10.804,8.460 10.646,8.333 10.580 C 8.217 10.520,7.904 10.491,7.786 10.530 " stroke="none" fill-rule="evenodd" ></path></g></svg>
                    تعداد تکیمل است
                </div>
                <a class='w-full p-2 bg-green-300 mt-3 rounded-xl text-center items-center justify-center flex' href="{{route('support_information.list')}}"> مشاهده لیست </a>
            @endif
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