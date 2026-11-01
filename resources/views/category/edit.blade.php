@extends('dashboard')
@section('title','edit category')
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
        max-width: 1000px;
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

    /* ===== بدنه ===== */
    .vafadar-form-body {
        padding: 24px 28px 28px;
    }

    /* ===== فیلدها ===== */
    .vafadar-label {
        color: #64748b;
        font-size: 12px;
        font-weight: 600;
        display: block;
        margin-bottom: 4px;
        padding-right: 4px;
        transition: all 0.3s ease;
    }

    .vafadar-input {
        width: 100%;
        padding: 12px 16px;
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

    /* ===== خطا ===== */
    .vafadar-error {
        color: var(--metronic-danger);
        font-size: 12px;
        margin-top: 3px;
        display: block;
        padding-right: 4px;
    }

    /* ===== توگل ===== */
    .vafadar-toggle {
        width: 52px;
        height: 30px;
        padding: 2px;
        border-radius: 50px;
        background: #F5F5F5;
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
    }

    .vafadar-toggle-label {
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .vafadar-toggle-label span {
        color: #64748b;
        font-size: 12px;
        font-weight: 500;
    }

    /* ===== تصویر ===== */
    .vafadar-image-box {
        width: 80px;
        height: 80px;
        border-radius: 12px;
        overflow: hidden;
        border: 2px solid var(--metronic-border);
        position: relative;
        transition: all 0.3s ease;
    }
    .vafadar-image-box:hover {
        border-color: var(--metronic-primary);
        box-shadow: var(--shadow-sm);
    }
    .vafadar-image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .vafadar-image-info {
        position: absolute;
        top: -8px;
        left: -8px;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: #F5F5F5;
        border: 1.5px solid var(--metronic-primary-light);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: help;
        transition: all 0.3s ease;
    }
    .vafadar-image-info:hover {
        background: var(--metronic-primary);
        border-color: var(--metronic-primary);
    }
    .vafadar-image-info:hover svg {
        fill: #fff;
    }
    .vafadar-image-info svg {
        width: 14px;
        height: 14px;
        fill: var(--metronic-primary);
        transition: all 0.3s ease;
    }

    /* ===== ویژگی‌ها ===== */
    .vafadar-attributes-section {
        background: #F5F5F5;
        border-radius: 16px;
        padding: 16px 20px;
        border: 1px solid var(--metronic-border);
    }

    .vafadar-attributes-title {
        color: #fff;
        font-size: 15px;
        font-weight: 700;
        padding: 12px;
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
        border-radius: 12px 12px 0 0;
        color: #fff;
        text-align: center;
        margin: -16px -20px 16px;
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.15);
    }

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
        margin-bottom: 8px;
        animation: slideIn 0.3s ease;
    }

    .vafadar-attr-item input {
        padding: 10px 14px;
        background: var(--metronic-bg-form);
        border: 1.5px solid var(--metronic-border);
        border-radius: 10px;
        color: #1e293b;
        font-size: 13px;
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
        border: 1.5px solid #fca5a5;
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

    .vafadar-add-attr-btn {
        width: 100%;
        padding: 10px;
        background: rgba(255, 255, 255, 0.4);
        border: 1.5px dashed var(--metronic-primary-light);
        border-radius: 12px;
        color: var(--metronic-primary);
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }
    .vafadar-add-attr-btn:hover {
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
        color: #fff;
        border-color: var(--metronic-primary);
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    /* ===== دکمه ===== */
    .vafadar-submit-btn {
        padding: 12px 32px;
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
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
    .vafadar-submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.25);
    }
    .vafadar-submit-btn:active {
        transform: translateY(0) scale(0.97);
    }

    /* ===== جدول زیردسته‌ها ===== */
    .vafadar-sub-table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 12px;
        overflow: hidden;
    }
    .vafadar-sub-table th {
        background: #F5F5F5;
        color: #64748b;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 10px 12px;
        border: 1px solid var(--metronic-border);
        text-align: center;
    }
    .vafadar-sub-table td {
        padding: 8px 12px;
        border: 1px solid var(--metronic-border);
        text-align: center;
        font-size: 13px;
        color: #1e293b;
    }
    .vafadar-sub-table tr:hover td {
        background: #F5F5F5;
    }

    .vafadar-sub-table img {
        width: 40px;
        height: 40px;
        object-fit: cover;
        border-radius: 8px;
    }

    /* ===== دکمه اکشن ===== */
    .vafadar-action-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 6px 10px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
    }
    .vafadar-action-icon:hover {
        transform: scale(1.05);
    }
    .vafadar-action-icon.danger {
        background: #fee2e2;
        color: var(--metronic-danger);
    }
    .vafadar-action-icon.danger:hover {
        background: var(--metronic-danger);
        color: #fff;
        box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
    }
    .vafadar-action-icon.success {
        background: #d1fae5;
        color: var(--metronic-success);
    }
    .vafadar-action-icon.success:hover {
        background: var(--metronic-success);
        color: #fff;
        box-shadow: 0 4px 12px rgba(5, 150, 105, 0.25);
    }

    /* ===== دکمه افزودن زیردسته ===== */
    .vafadar-add-sub-btn {
        padding: 10px 20px;
        background: linear-gradient(135deg, var(--metronic-success), #34d399);
        border: none;
        border-radius: 12px;
        color: #fff;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        box-shadow: 0 4px 16px rgba(5, 150, 105, 0.15);
    }
    .vafadar-add-sub-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(5, 150, 105, 0.25);
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 768px) {
        .vafadar-form-body {
            padding: 16px 18px 20px;
        }
        .vafadar-form-header {
            padding: 14px 18px;
        }
        .vafadar-form-header h2 {
            font-size: 17px;
        }
        .vafadar-input {
            padding: 10px 14px;
            font-size: 12px;
        }
        .vafadar-grid {
            grid-template-columns: 1fr !important;
            gap: 16px !important;
        }
        .vafadar-toggle-group {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 12px !important;
        }
        .vafadar-sub-table {
            font-size: 12px;
        }
        .vafadar-sub-table th,
        .vafadar-sub-table td {
            padding: 6px 8px;
        }
        .vafadar-submit-btn {
            padding: 10px 24px;
            font-size: 13px;
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .vafadar-form-body {
            padding: 12px 14px 16px;
        }
        .vafadar-form-header {
            padding: 12px 14px;
        }
        .vafadar-form-header h2 {
            font-size: 14px;
        }
        .vafadar-input {
            padding: 8px 12px;
            font-size: 11px;
        }
        .vafadar-sub-table {
            font-size: 10px;
        }
        .vafadar-sub-table th,
        .vafadar-sub-table td {
            padding: 4px 6px;
        }
        .vafadar-sub-table img {
            width: 30px;
            height: 30px;
        }
        .vafadar-attributes-title {
            font-size: 13px;
            padding: 8px;
        }
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
    
    /* ===== دسته‌بندی والد ===== */
    .vafadar-categories-box {
        width: 100%;
        max-height: 160px;
        overflow-y: auto;
        padding: 10px 12px;
        background: #F5F5F5;
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
        gap: 8px;
        padding: 4px 6px;
        border-radius: 6px;
        transition: all 0.2s ease;
    }
    .vafadar-category-item:hover {
        background: rgba(27, 132, 255, 0.06);
    }
    .vafadar-category-item label {
        color: #1e293b;
        font-size: 13px;
        cursor: pointer;
    }

    /* ===== چک‌باکس ===== */
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
</style>

<?php
$count=1;
?>
<div class="w-full flex justify-center py-6 px-4">
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
                ویرایش دسته‌بندی
            </h2>
            <p class="text-sm text-[#9A9CAE] mt-1 mr-12">اطلاعات دسته‌بندی را ویرایش کنید</p>
        </div>

        <!-- ===== فرم ===== -->
        <form action="{{route('category.update',['category'=>$category->id])}}" method="POST" id='form' class="vafadar-form-body" enctype='multipart/form-data'>
            @csrf
            
            <!-- ===== گرید فیلدها ===== -->
             <h3> اطلاعات اصلی </h3>
            <div class="vafadar-grid grid grid-cols-2 gap-6 mr-4 mt-5">

                <!-- تصویر -->
                <div>
                    <label class="vafadar-label"> تصویر</label>
                    <input type="file" name='image_path' class="vafadar-input">
                </div>
                <div>
                    <label class="vafadar-label"> عنوان</label>
                    <input type="text" value="{{$category->title}}" placeholder="عنوان دسته‌بندی" name='title' class="vafadar-input">
                    @error('title') <span class="vafadar-error">{{$message}}</span> @enderror
                </div>

                <!-- اسلاگ -->
                <div>
                    <label class="vafadar-label"> اسلاگ</label>
                    <input type="text" value="{{$category->slug}}" placeholder="اسلاگ دسته‌بندی" name='slug' class="vafadar-input">
                    @error('slug') <span class="vafadar-error">{{$message}}</span> @enderror
                </div>

                <!-- توضیحات -->
                <div>
                    <label class="vafadar-label"> توضیحات</label>
                    <input type="text" value="{{$category->description}}" placeholder="توضیحات دسته‌بندی" name='description' class="vafadar-input">
                    @error('description') <span class="vafadar-error">{{$message}}</span> @enderror
                </div>

                <!-- خلاصه -->
                <div>
                    <label class="vafadar-label"> خلاصه</label>
                    <input type="text" value="{{$category->summary}}" placeholder="خلاصه دسته‌بندی" name='summary' class="vafadar-input">
                    @error('summary') <span class="vafadar-error">{{$message}}</span> @enderror
                </div>
                @if($category->id!=1)
                    <!-- دسته بندی -->
                    <div class="mb-4">
                        <label class="vafadar-label"> دسته‌بندی والد</label>
                        <div class="vafadar-categories-box">
                            <div class="vafadar-category-item">
                                @if($category->parent_id==0)
                                    <input type="radio" name="parent_id" value="0" checked class="vafadar-checkbox" id="parent_0">
                                @else
                                    <input type="radio" name="parent_id" value="0" class="vafadar-checkbox" id="parent_0">
                                @endif
                                <label for="parent_0">والد</label>
                            </div>
                            {!! $categoriessss !!}
                        </div>
                    </div>
                @endif
                <!-- ===== توگل‌ها ===== -->
                <h3> تنظیمات نمایش </h3>
                <div class="vafadar-toggle-group col-span-2 flex gap-8 justify-start items-center flex-wrap">
                    <!-- نمایش در خانه -->
                    <div class="vafadar-toggle-label mr-4">
                        <span> نمایش در خانه</span>
                        @if($category->show_in_home==0)
                            <div class="vafadar-toggle" onclick="toggleState(this)">
                                <div class="vafadar-toggle-dot"></div>
                            </div>
                            <input type="number" name='show_in_home' value="0" class="absolute invisible">
                        @else
                            <div class="vafadar-toggle active" onclick="toggleState(this)">
                                <div class="vafadar-toggle-dot"></div>
                            </div>
                            <input type="number" name='show_in_home' value="1" class="absolute invisible">
                        @endif
                    </div>

                    <!-- فعال -->
                    <div class="vafadar-toggle-label">
                        <span> فعال</span>
                        @if($category->is_active==0)
                            <div class="vafadar-toggle" onclick="toggleState(this)">
                                <div class="vafadar-toggle-dot"></div>
                            </div>
                            <input type="number" name='is_active' value="0" class="absolute invisible">
                        @else
                            <div class="vafadar-toggle active" onclick="toggleState(this)">
                                <div class="vafadar-toggle-dot"></div>
                            </div>
                            <input type="number" name='is_active' value="1" class="absolute invisible">
                        @endif
                    </div>

                    <!-- تصویر -->
                    <div class="vafadar-image-box">
                        @if($category->image_path!=null)

                            <img src="{{asset('storage/category_medias/'.$category->image_path)}}" alt="{{$category->title}}">
                        @else

                                <span class="w-full h-full flex items-center text-center justify-center text-4xl">📷</span>
                        @endif
                    </div>

                </div>
            </div>
            @if($category->id!=1)
                <!-- ===== ویژگی‌ها ===== -->
                <div class="vafadar-attributes-section mt-6">
                    <div class="vafadar-attributes-title"> ویژگی‌ها</div>
                    <div id="createdAttributes" class="space-y-2">
                        @foreach($category['attributes'] as $attribute)
                        <div class="vafadar-attr-item">
                            <input type="text" name="editedAttributes[{{$attribute->id}}]" value="{{$attribute->title}}" placeholder="عنوان ویژگی">
                            <div onclick="deleteCreatedAttributes(this, {{$attribute->id}})" class="vafadar-attr-remove">✕</div>
                        </div>
                        @endforeach
                    </div>
                    <div class="flex flex-col gap-3 mt-3" id="attributes"></div>
                    <div onclick="Attributes(this)" class="vafadar-add-attr-btn mt-3">➕ افزودن ویژگی جدید</div>
                </div>


                <!-- ===== افزودن زیردسته ===== -->
                <div class="w-full h-px bg-[#DBDFE9] my-4"></div>
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-3" id='subCategories'></div>
                    <div class="w-full flex justify-center">
                        <button type="button" class="vafadar-add-sub-btn" onclick='setSubCategory(this)'>
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path d="M12 5v14M5 12h14"/>
                            </svg>
                            افزودن زیردسته‌بندی
                        </button>
                    </div>
                </div>
            @endif

            <!-- ===== دکمه ثبت ===== -->
            <div class="flex justify-end mt-6 pt-6 border-t border-[#DBDFE9]">
                <button type="submit" class="vafadar-submit-btn">
                    <span>ذخیره تغییرات</span>
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M5 13l4 4L19 7"/>
                    </svg>
                </button>
            </div>

        </form>

    </div>
</div>

<script>
    function toggleState(el) {
        let input = el.parentElement.querySelector('input[type="number"]');
        
        if (el.classList.contains('active')) {
            el.classList.remove('active');
            if (input) input.value = 0;
        } else {
            el.classList.add('active');
            if (input) input.value = 1;
        }
    }

    function setSubCategory(el) {
        let randomNumber = Math.random();
        let div = document.createElement('div');
        div.className = `relative w-full p-3 shadow-md border border-[#DBDFE9] rounded-xl flex flex-col md:flex-row gap-3 items-center`;
        div.setAttribute("id", randomNumber);
        div.innerHTML = `
            <div class='vafadar-action-icon danger absolute -top-3 -right-3' onclick='deleteSubCategoryFunction(this)'>
                <svg class='w-4 h-4 fill-current' viewBox="0 0 384 512">
                    <path d="M378.4 71.4c8.5-10.1 7.2-25.3-2.9-33.8s-25.3-7.2-33.8 2.9L192 218.7 42.4 40.6C33.9 30.4 18.7 29.1 8.6 37.6S-2.9 61.3 5.6 71.4L160.7 256 5.6 440.6c-8.5 10.2-7.2 25.3 2.9 33.8s25.3 7.2 33.8-2.9L192 293.3 341.6 471.4c8.5 10.1 23.7 11.5 33.8 2.9s11.5-23.7 2.9-33.8L223.3 256l155-184.6z"/>
                </svg>
            </div>
            <input type='text' name='subCategories[${randomNumber}][title]' required placeholder="نام زیردسته" class='vafadar-input'>
            <input type='text' name='subCategories[${randomNumber}][description]' required placeholder="توضیحات" class='vafadar-input'>
            <input type='text' name='subCategories[${randomNumber}][summary]' required placeholder="خلاصه" class='vafadar-input'>
            <div class='flex gap-4 flex-wrap'>
                <div class='vafadar-toggle-label'>
                    <span class='text-[10px]'> نمایش</span>
                    <div class='vafadar-toggle' onclick='toggleState(this)'>
                        <div class='vafadar-toggle-dot'></div>
                    </div>
                    <input type='number' name='subCategories[${randomNumber}][show_in_home]' value='0' class='absolute invisible'>
                </div>
                <div class='vafadar-toggle-label'>
                    <span class='text-[10px]'> فعال</span>
                    <div class='vafadar-toggle' onclick='toggleState(this)'>
                        <div class='vafadar-toggle-dot'></div>
                    </div>
                    <input type='number' name='subCategories[${randomNumber}][is_active]' value='0' class='absolute invisible'>
                </div>
            </div>
        `;
        el.parentElement.previousElementSibling.appendChild(div);
    }

    function deleteSubCategoryFunction(el) {
        el.parentElement.remove();
    }

    function subcatdelete(el, id) {
        let input = document.createElement('input');
        input.setAttribute('type', 'hidden');
        input.setAttribute('name', 'deletedSubCategories[]');
        input.setAttribute('value', id);
        el.parentElement.parentElement.parentElement.remove();
        form.append(input);
    }

    let attributes_table = document.getElementById('attributes');
    let form = document.getElementById('form');

    function Attributes(el) {
        let div = document.createElement('div');
        let input = document.createElement('input');
        let Xmark = document.createElement('div');

        div.className = 'vafadar-attr-item';
        input.setAttribute('type', 'text');
        input.setAttribute('name', 'attributes[]');
        input.setAttribute('placeholder', 'عنوان ویژگی جدید...');

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

    function deleteCreatedAttributes(el, id) {
        let input = document.createElement('input');
        input.setAttribute('type', 'hidden');
        input.setAttribute('name', 'deletedattributes[]');
        input.setAttribute('value', id);
        el.parentElement.remove();
        form.append(input);
    }
</script>

@endsection