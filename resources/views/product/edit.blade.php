@extends('dashboard')
@section('title','edit product')
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

    /* ===== هدر ===== */
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

    .vafadar-form-header .sub-text {
        color: #9A9CAE;
        font-size: 14px;
        margin-top: 4px;
        margin-right: 48px;
    }

    /* ===== بدنه ===== */
    .vafadar-form-body {
        padding: 24px 28px 28px;
    }

    /* ===== فیلدها ===== */
    .vafadar-label {
        color: #64748b;
        font-size: 13px;
        font-weight: 700;
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

    .vafadar-select {
        width: 100%;
        padding: 12px 16px;
        background: #F5F5F5;
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: #1e293b;
        font-size: 14px;
        transition: all 0.3s ease;
        outline: none;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%239A9CAE' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: left 12px center;
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

    /* ===== خطا ===== */
    .vafadar-error {
        color: var(--metronic-danger);
        font-size: 13px;
        font-weight: 700;
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
        font-size: 13px;
        font-weight: 700;
    }

    /* ===== بخش ویژگی‌ها ===== */
    .vafadar-attributes-section {
        background: #F5F5F5;
        border-radius: 16px;
        padding: 16px 20px;
        border: 1px solid var(--metronic-border);
    }

    .vafadar-attributes-title {
        font-size: 16px;
        font-weight: 700;
        padding: 10px 16px;
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
        border-radius: 12px 12px 0 0;
        color: #fff;
        text-align: center;
        margin: -16px -20px 16px;
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.15);
    }
    .vafadar-attributes-title2 {
        color: #fff;
        font-size: 16px;
        font-weight: 700;
        padding: 10px 16px;
        background: linear-gradient(135deg, #EC407A, #F06292);
        border-radius: 12px 12px 0 0;
        text-align: center;
        margin: -16px -20px 16px;
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.15);
    }
    .vafadar-attr-item {
        position: relative;
        display: inline-flex;
        align-items: center;
        background: var(--metronic-bg-form);
        border-radius: 10px;
        border: 1.5px solid var(--metronic-border);
        padding: 4px 12px 4px 4px;
        animation: slideIn 0.3s ease;
        gap: 4px;
        box-shadow: 0 2px 8px rgba(27, 132, 255, 0.04);
    }
    .vafadar-attr-item input {
        padding: 6px 10px;
        background: transparent;
        border: none;
        color: #1e293b;
        font-size: 13px;
        outline: none;
        width: 100px;
        font-weight: 600;
    }
    .vafadar-attr-item .remove {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #fee2e2;
        color: var(--metronic-danger);
        font-size: 12px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }
    .vafadar-attr-item .remove:hover {
        background: var(--metronic-danger);
        color: #fff;
        transform: rotate(90deg);
    }

    /* ===== دکمه‌ها ===== */
    .vafadar-btn {
        padding: 12px 28px;
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
    .vafadar-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.25);
    }
    .vafadar-btn:active {
        transform: translateY(0) scale(0.97);
    }

    .vafadar-btn-success {
        padding: 10px 20px;
        background: linear-gradient(135deg, var(--metronic-success), #34d399);
        border: none;
        border-radius: 12px;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
        box-shadow: 0 4px 16px rgba(5, 150, 105, 0.15);
    }
    .vafadar-btn-success:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(5, 150, 105, 0.25);
    }

    .vafadar-btn-warning {
        padding: 10px 20px;
        background: linear-gradient(135deg, var(--metronic-warning), #f59e0b);
        border: none;
        border-radius: 12px;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        box-shadow: 0 4px 16px rgba(217, 119, 6, 0.15);
    }
    .vafadar-btn-warning:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(217, 119, 6, 0.25);
    }

    .vafadar-btn-danger {
        background: var(--metronic-danger);
        color: #fff;
        border: none;
        border-radius: 50%;
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .vafadar-btn-danger:hover {
        transform: scale(1.15);
        background: #b91c1c;
    }

    /* ===== پکیج ===== */
    .vafadar-package-box {
        position: relative;
        background: #F5F5F5;
        border: 2px solid var(--metronic-success);
        border-radius: 16px;
        padding: 20px;
        margin-bottom: 16px;
        animation: slideIn 0.3s ease;
        box-shadow: 0 4px 16px rgba(5, 150, 105, 0.08);
    }

    .vafadar-package-box .package-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }
    .vafadar-package-box .package-grid .full {
        grid-column: 1 / -1;
    }

    .vafadar-package-box .package-title {
        color: #1e293b;
        font-size: 16px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 12px;
        padding-bottom: 8px;
        border-bottom: 2px solid var(--metronic-success);
    }

    .vafadar-package-box .package-remove {
        position: absolute;
        top: -12px;
        right: -12px;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #fee2e2;
        border: 2px solid #fca5a5;
        color: var(--metronic-danger);
        font-size: 16px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .vafadar-package-box .package-remove:hover {
        background: var(--metronic-danger);
        color: #fff;
        transform: rotate(90deg) scale(1.1);
        border-color: var(--metronic-danger);
    }

    .vafadar-tag-main {
        background: var(--metronic-success);
        color: #fff;
        font-weight: 700;
        border-radius: 9999px;
        padding: 2px 10px;
        font-size: 9px;
        position: absolute;
        top: 4px;
        left: 4px;
    }
    .vafadar-tag-gallery {
        background: var(--metronic-primary);
        color: #fff;
        font-weight: 700;
        border-radius: 9999px;
        padding: 2px 10px;
        font-size: 9px;
        position: absolute;
        top: 4px;
        left: 4px;
    }

    .vafadar-media-container {
        display: flex;
        gap: 12px;
        padding: 12px;
        overflow-x: auto;
        background: #F5F5F5;
        border-radius: 12px;
        border: 2px dashed var(--metronic-border);
        min-height: 120px;
        align-items: center;
    }
    .vafadar-media-container img {
        min-width: 100px;
        max-width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 10px;
        border: 3px solid var(--metronic-bg-form);
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.08);
    }
    .vafadar-media-item {
        position: relative;
        flex-shrink: 0;
    }

    .vafadar-category-badge {
        background: rgba(27, 132, 255, 0.10);
        color: #1e293b;
        font-weight: 700;
        padding: 10px 24px;
        border-radius: 12px;
        display: inline-block;
        border: 1px solid var(--metronic-primary);
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
        .vafadar-grid {
            grid-template-columns: 1fr !important;
            gap: 16px !important;
        }
        .vafadar-toggle-group {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 12px !important;
        }
        .vafadar-package-box .package-grid {
            grid-template-columns: 1fr;
        }
        .vafadar-btn {
            padding: 10px 20px;
            font-size: 13px;
            width: 100%;
            justify-content: center;
        }
        .vafadar-attributes-grid {
            grid-template-columns: 1fr !important;
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
        .vafadar-input,
        .vafadar-select {
            padding: 8px 12px;
            font-size: 12px;
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

    /* ===== اسکرول ===== */
    .vafadar-media-container::-webkit-scrollbar {
        height: 6px;
    }
    .vafadar-media-container::-webkit-scrollbar-track {
        background: #F5F5F5;
        border-radius: 10px;
    }
    .vafadar-media-container::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-light));
        border-radius: 10px;
    }

    /* ===== چک‌باکس ===== */
    .vafadar-checkbox {
        width: 18px;
        height: 18px;
        accent-color: var(--metronic-primary);
        cursor: pointer;
    }
</style>

<?php
$count = 1;
?>
<div class="w-full flex justify-center py-6 px-4">
    <div class="vafadar-form-card">

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
                ویرایش محصول
            </h2>
            <p class="sub-text">اطلاعات محصول را ویرایش کنید</p>
        </div>

        <!-- ===== فرم ===== -->
        <form action="{{route('product.update',['product'=>$product['id']])}}" method="POST" id='form' class="vafadar-form-body" enctype='multipart/form-data'>
            @csrf

            <!-- ===== گرید فیلدها ===== -->
            <div class="vafadar-grid grid grid-cols-2 gap-6">

                <!-- عنوان -->
                <div>
                    <label class="vafadar-label"> عنوان</label>
                    <input type="text" placeholder="عنوان محصول" value="{{$product->title}}" required name='title' class="vafadar-input">
                    <span class="vafadar-error">@error('title') {{$message}} @enderror</span>
                </div>

                <!-- تصویر اصلی -->
                <div>
                    <label class="vafadar-label"> تصویر اصلی</label>
                    <input type="file" name='is_main' class="vafadar-input" style="padding: 8px 12px;">
                </div>

                <!-- گالری -->
                <div>
                    <label class="vafadar-label"> گالری</label>
                    <input type="file" name='gallery[]' multiple class="vafadar-input" style="padding: 8px 12px;">
                </div>

                <!-- توضیحات -->
                <div>
                    <label class="vafadar-label"> توضیحات</label>
                    <input type="text" placeholder="توضیحات محصول" value="{{$product->description}}"    name='description' class="vafadar-input">
                    <span class="vafadar-error">@error('description') {{$message}} @enderror</span>
                </div>

                <!-- خلاصه -->
                <div>
                    <label class="vafadar-label"> خلاصه</label>
                    <input type="text" placeholder="خلاصه محصول" value="{{$product->summary}}" name='summary' class="vafadar-input">
                </div>
                <!-- دسته بندی -->
                 <div>
                    <label class="vafadar-label"> دسته بندی</label>
                     <select name="category" id="category_select_element" class="vafadar-select" onchange="categoryAttributes(this, true)">
                         @foreach($categories as $category)
                            @if(count($product->categories)>0)
                                <option value="{{$category->id}}" {{$product->categories[0]->id == $category->id ? 'selected' : ''}}>{{$category->title}}</option>
                            @else
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endif
                         @endforeach
                     </select>
                 </div>
                <!-- برند -->
                <div>
                    <label class="vafadar-label"> برند</label>
                    <select name="brand_id" class="vafadar-select">
                        @foreach($brands as $id => $title)
                            <option value="{{$id}}" {{$product->brand_id == $id ? 'selected' : ''}}>{{$title}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- اسلاگ -->
                <div>
                    <label class="vafadar-label"> اسلاگ</label>
                    <input type="text" placeholder="اسلاگ محصول" value="{{$product->slug}}" name='slug' class="vafadar-input">
                </div>

                <!-- تخفیف -->
                <div>
                    <label class="vafadar-label"> تخفیف</label>
                    <input type="number" placeholder="مقدار تخفیف" value="{{$product->discunt}}" name='discunt' class="vafadar-input">
                </div>

                <!-- قیمت -->
                <div>
                    <label class="vafadar-label"> قیمت</label>
                    <input type="number" placeholder="قیمت محصول" value="{{$product->price}}"    name='price' class="vafadar-input">
                    <span class="vafadar-error">@error('price') {{$message}} @enderror</span>
                </div>

                <!-- موجودی -->
                <div>
                    <label class="vafadar-label"> موجودی</label>
                    <input type="number" placeholder="تعداد موجودی" value="{{$product->stock}}"    name='stock' class="vafadar-input">
                    <span class="vafadar-error">@error('stock') {{$message}} @enderror</span>
                </div>

                <!-- ===== توگل‌ها ===== -->
                <div class="vafadar-toggle-group col-span-2 flex gap-8 justify-start items-center flex-wrap">

                    <div class="vafadar-toggle-label">
                        <span> نمایش در خانه</span>
                        <div class="vafadar-toggle {{$product->show_in_home == 1 ? 'active' : ''}}" onclick="toggleState(this)">
                            <div class="vafadar-toggle-dot"></div>
                        </div>
                        <input type="number" name='show_in_home' value="{{$product->show_in_home}}" class="absolute invisible">
                    </div>

                    <div class="vafadar-toggle-label">
                        <span> محصول ویژه</span>
                        <div class="vafadar-toggle {{$product->featured == 1 ? 'active' : ''}}" onclick="toggleState(this)">
                            <div class="vafadar-toggle-dot"></div>
                        </div>
                        <input type="number" name='featured' value="{{$product->featured}}" class="absolute invisible">
                    </div>

                    <div class="vafadar-toggle-label">
                        <span> فعال</span>
                        <div class="vafadar-toggle {{$product->is_active == 1 ? 'active' : ''}}" onclick="toggleState(this)">
                            <div class="vafadar-toggle-dot"></div>
                        </div>
                        <input type="number" name='is_active' value="{{$product->is_active}}" class="absolute invisible">
                    </div>

                </div>

            </div>

            <!-- ===== تصاویر محصول ===== -->
            @if(count($product['medias']) > 0)
                <div class="mt-4">
                    <h3 class="vafadar-label" style="font-size:15px;color:#1e293b;"> تصاویر موجود</h3>
                    <div class="vafadar-media-container">
                        @if($product->image!=null)
                            <div class="vafadar-media-item">
                                <img src="{{asset('storage/product_medias/'.$product->image)}}" alt="">
                                <span class=" vafadar-tag-main">
                                    اصلی
                                </span>
                                <div onclick="getDeletedProductMedias(this, {{$product->id}},'main')" class="vafadar-btn-danger" style="position:absolute;top:-6px;right:-6px;width:24px;height:24px;font-size:10px;">✕</div>
                            </div>
                        @endif
                        @foreach($product['medias'] as $media)
                            <div class="vafadar-media-item">
                                <img src="{{asset('storage/product_medias/'.$media->path)}}" alt="">
                                <span class=" vafadar-tag-gallery">
                                    گالری
                                </span>
                                <div onclick="getDeletedProductMedias(this, {{$media->id}},'gallery')" class="vafadar-btn-danger" style="position:absolute;top:-6px;right:-6px;width:24px;height:24px;font-size:10px;">✕</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- ===== دسته‌بندی ===== -->
            <div class="mt-4">
                <h3 class="vafadar-label" style="font-size:15px;color:#1e293b;"> دسته‌بندی</h3>
                <span class="vafadar-category-badge">{{$product->categories[0]->title ?? 'بدون دسته‌بندی'}}</span>
            </div>

            <!-- ===== ویژگی‌های محصول ===== -->
            @if(count($product['attributes']) > 0)
                <div class="mt-4">
                    <h3 class="vafadar-label" style="font-size:15px;color:#1e293b;"> ویژگی‌های محصول</h3>
                    <div class="flex gap-3 flex-wrap p-2">
                        @foreach($product['attributes'] as $attribute)
                            <div class="vafadar-attr-item">
                                <span style="font-weight:700;color:#1e293b;padding-right:4px;">{{$attribute->title}}:</span>
                                <input type="text" value="{{$attribute->pivot->value}}" readonly style="width:80px;font-weight:600;color:#64748b;">
                                <div onclick="getDeletedProductAttributes(this, {{$attribute->pivot->id}})" class="remove" style="width:22px;height:22px;font-size:9px;">✕</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- ===== بخش ویژگی‌ها (افزودن جدید) ===== -->
            <div class="vafadar-attributes-section mt-4">
                <div class="vafadar-attributes-title"> افزودن ویژگی جدید</div>

                <div class="flex flex-wrap gap-2 mt-3" id="attributes_list"></div>
                <div class="vafadar-btn-success w-full mt-3" id="attribute_conformation_button" onclick="attribute_conformation(this)">
                    ➕ افزودن ویژگی
                </div>

            </div>
            <div class="vafadar-attributes-section mt-6">
                <div class="vafadar-attributes-title2"> ویژگی‌های دستی برای محصول</div>
                
                <div class="flex flex-wrap gap-2 mt-3" id="product_attributes_list"></div>
                
                <div class="vafadar-btn-success w-full mt-3" id="add_pro_attribute_button" onclick="add_pro_attribute(this)">
                    ➕ افزودن ویژگی
                </div>

            </div>
            <!-- ===== دکمه ثبت ===== -->
            <div class="flex justify-end mt-6 pt-6 border-t" style="border-color:var(--metronic-border);">
                <button type="submit" class="vafadar-btn">
                    <span> ذخیره تغییرات</span>
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M5 13l4 4L19 7"/>
                    </svg>
                </button>
            </div>

        </form>

    </div>
</div>

<script>
    let form = document.getElementById('form');

    // ===== TOGGLE =====
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

    // ===== DELETE MEDIA =====
    function getDeletedProductMedias(el, media_id , state) {
        let input = document.createElement('input');
        if(state == 'main'){
            input.setAttribute('type', 'hidden');
            input.setAttribute('name', 'deletedMainImage');
            input.setAttribute('value', media_id);
        }
        if(state == 'gallery'){
            input.setAttribute('type', 'hidden');
            input.setAttribute('name', 'deletedProductMedias[]');
            input.setAttribute('value', media_id);
        }
        form.append(input);
        el.closest('.vafadar-media-item').remove();
    }

    // ===== DELETE ATTRIBUTES =====
    function getDeletedProductAttributes(el, att_id) {
        let input = document.createElement('input');
        input.setAttribute('type', 'hidden');
        input.setAttribute('name', 'deletedProductAttributes[]');
        input.setAttribute('value', att_id);
        form.append(input);
        el.closest('.vafadar-attr-item').remove();
    }

    // ===== DELETE ATTRIBUTE TAG =====
    function deleteAttribute(el) {
        el.parentElement.remove();
    }

    // ===== CATEGORY ATTRIBUTES =====
    function categoryAttributes(el, state) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });
        $.ajax({
            url: "{{url('/product/category/attributes')}}/" + el.value,
            type: "get",
            dataType: "json",
            success: function(data) {
                if (state == true) {
                    document.querySelectorAll('.packageAttributesList').forEach(element => {
                        element.innerHTML = '';
                    });
                }
                document.querySelectorAll('.attributes_select_element').forEach(element => {
                    if (state == true) {
                        attributes_list.innerHTML = '';
                    }
                    let options = '';
                    if (Object.keys(data).length > 0) {
                        for (const [key, value] of Object.entries(data)) {
                            options += `<option value="${key}">${value}</option>`;
                        }
                        if(element.value==0){
                            element.innerHTML = options;
                        }
                    } else {
                        let innerHTML = `<option value="0">وجود ندارد</option>`;
                        element.innerHTML = innerHTML;
                    }
                });
                document.querySelectorAll('.package_attributes_select_element').forEach(element => {
                    let newPackage_options = '';
                    if (Object.keys(data).length > 0) {
                        for (const [key, value] of Object.entries(data)) {
                            newPackage_options += `<option value="${key}">${value}</option>`;
                        }
                        if(element.value==0){
                            element.innerHTML = newPackage_options;
                        }
                    } else {
                        let innerHTML = `<option value="0">وجود ندارد</option>`;
                        element.innerHTML = innerHTML;
                    }
                });
                document.querySelectorAll('.createdPackages_attributes_select_element').forEach(element => {
                    let oldPackage_options = '';
                    if (Object.keys(data).length > 0) {
                        for (const [key, value] of Object.entries(data)) {
                            oldPackage_options += `<option value="${key}">${value}</option>`;
                        }
                        if(element.value==0){
                            element.innerHTML = oldPackage_options;
                        }
                    } else {
                        let innerHTML = `<option value="0">وجود ندارد</option>`;
                        element.innerHTML = innerHTML;
                    }
                });
            },
            error: function() {
                alert('خطا در دریافت ویژگی‌ها');
            }
        });
    }

    // ===== ATTRIBUTE CONFIRMATION =====
    function attribute_conformation(el) {
        let xmark = document.createElement('div');
        let div= document.createElement('div');
        let input= document.createElement('input');
        let select= document.createElement('select');
        div.classList=`relative w-full p-2 border-1 rounded-xl flex gap-2`;
        input.setAttribute('type', 'text');
        input.setAttribute('required', true);
        input.setAttribute('name', 'attributes_value[]');
        input.classList = 'vafadar-input attributes_inputs max-w-9/12 min-w-9/12';
        select.setAttribute('name', 'attributes_id[]');
        select.classList = 'vafadar-select attributes_select_element max-w-3/12 min-w-3/12 ';
        select.innerHTML=
        `
            <option value='0'></option>
        `;
        xmark.classList = 'absolute remove top-0 -right-5 bg-red-300 hover:bg-red-500 p-1 rounded-full cursor-pointer';
        xmark.innerHTML = '✕';
        xmark.setAttribute('onclick', 'deleteAttribute(this)');
        div.append(select);
        div.append(input);
        div.append(xmark);
        attributes_list.append(div)
        categoryAttributes(document.getElementById('category_select_element') , false);
        console.log(select.value)
    }
    let product_attributes_list=document.getElementById('product_attributes_list');
    let add_pro_attribute_button=document.getElementById('add_pro_attribute_button');
    function add_pro_attribute(el) {
        let xmark = document.createElement('div');
        let div= document.createElement('div');
        let input2= document.createElement('input');
        let input1= document.createElement('input');
        div.classList=`relative w-full p-2 border-1 rounded-xl flex gap-2`;
        input1.setAttribute('name', 'product_attributes_key[]');
        input1.classList = 'vafadar-input attributes_inputs max-w-4/12 min-w-4/12 ';
        input1.setAttribute('type', 'text');
        input1.setAttribute('required', true);
        input2.setAttribute('type', 'text');
        input2.setAttribute('required', true);
        input2.setAttribute('name', 'product_attributes_value[]');
        input2.classList = 'vafadar-input attributes_inputs max-w-8/12 min-w-8/12';
        input1.placeholder='نام ویژگی';
        input2.placeholder='مقدار ویژگی';
        xmark.classList = 'absolute remove top-0 -right-5 bg-red-300 hover:bg-red-500 p-1 rounded-full cursor-pointer';
        xmark.innerHTML = '✕';
        xmark.setAttribute('onclick', 'deleteAttribute(this)');
        div.append(input1);
        div.append(input2);
        div.append(xmark);
        product_attributes_list.append(div)
        console.log(select.value)
    }
</script>

@endsection