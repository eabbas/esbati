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
        border-color: #4a9fff;
    }
    .vafadar-input:focus {
        border-color: var(--metronic-primary);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background: #ffffff;
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
    }
    .vafadar-select:hover {
        border-color: #4a9fff;
    }
    .vafadar-select:focus {
        border-color: var(--metronic-primary);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background-color: #ffffff;
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
        background: white;
        border-radius: 16px;
        padding: 16px 20px;
        border: 1px solid var(--metronic-border);
    }

    .vafadar-attributes-title {
        color: #fff;
        font-size: 16px;
        font-weight: 700;
        padding: 10px 16px;
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
        border-radius: 12px 12px 0 0;
        text-align: center;
        margin: -16px -20px 16px;
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.15);
    }

    .vafadar-attributes-title1 {
        color: #fff;
        font-size: 16px;
        font-weight: 700;
        padding: 10px 16px;
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
        border-radius: 12px 12px 0 0;
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
        background: #ffffff;
        border-radius: 10px;
        border: 1.5px solid var(--metronic-border);
        padding: 4px 12px 4px 4px;
        animation: slideIn 0.3s ease;
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

    /* ===== دکمه ===== */
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

    /* ===== پکیج ===== */
    .vafadar-package-box {
        position: relative;
        background: #F5F5F5;
        border: 2px solid #059669;
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
        border-bottom: 2px solid #059669;
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
        .vafadar-attr-item input {
            width: 70px;
            font-size: 12px;
        }
        .vafadar-btn-warning {
            padding: 8px 14px;
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

    /* ===== چک‌باکس ===== */
    .vafadar-checkbox {
        width: 18px;
        height: 18px;
        accent-color: var(--metronic-primary);
        cursor: pointer;
    }
</style>

<?php
$count=0
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
                ایجاد محصول جدید
            </h2>
            <p class="text-sm text-[#9A9CAE] mt-1 mr-12">اطلاعات محصول را وارد کنید</p>
        </div>

        <!-- ===== فرم ===== -->
        <form action="{{route('product.store')}}" method="POST" id='form' class="vafadar-form-body" enctype='multipart/form-data'>
            @csrf
            
            <!-- ===== گرید فیلدها ===== -->
            <div class="vafadar-grid grid grid-cols-2 gap-6">

                <!-- عنوان -->
                <div>
                    <label class="vafadar-label"> عنوان</label>
                    <input type="text" placeholder="عنوان محصول" required name='title' class="vafadar-input">
                    @error('title') <span class="vafadar-error">{{$message}}</span> @enderror
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
                    <input type="text" placeholder="توضیحات محصول"    name='description' class="vafadar-input">
                    @error('description') <span class="vafadar-error">{{$message}}</span> @enderror
                </div>

                <!-- خلاصه -->
                <div>
                    <label class="vafadar-label"> خلاصه</label>
                    <input type="text" placeholder="خلاصه محصول" name='summary' class="vafadar-input">
                </div>
                <div>
                    <label class="vafadar-label"> دسته بندی</label>
                    <select name="category" id="category_select_element" class="vafadar-select" onchange="categoryAttributes(this, true)">
                        @if(count($categories)>0)
                            @foreach($categories as $category)

                                @if($count==0)
                                    <option selected value="{{$category->id}}">{{$category->title}}</option>
                                    <?php $count++ ; ?>
                                @else
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endif
                            @endforeach
                        @else
                            <option value="null">دسته بندی ثبت نشده</option>
                        @endif
                    </select>
                </div>
                <!-- برند -->
                <div>
                    <label class="vafadar-label"> برند</label>
                    <select name="brand_id" class="vafadar-select">
                        @if(count($brands)>0)
                            @foreach($brands as $brand)
                                @if($brand->is_active==1)
                                    <option value="{{$brand->id}}">{{$brand->title}}</option>
                                @endif
                            @endforeach
                        @else
                            <option value="null">برندی ثبت نشده</option>
                        @endif
                    </select>
                </div>

                <!-- اسلاگ -->
                <div>
                    <label class="vafadar-label"> اسلاگ</label>
                    <input type="text" placeholder="اسلاگ محصول" name='slug' class="vafadar-input">
                </div>

                <!-- تخفیف -->
                <div>
                    <label class="vafadar-label"> تخفیف</label>
                    <input type="number" placeholder="مقدار تخفیف" name='discunt' class="vafadar-input">
                </div>

                <!-- قیمت -->
                <div>
                    <label class="vafadar-label"> قیمت</label>
                    <input type="number" placeholder="قیمت محصول"    name='price' class="vafadar-input">
                    @error('price') <span class="vafadar-error">{{$message}}</span> @enderror
                </div>

                <!-- موجودی -->
                <div>
                    <label class="vafadar-label"> موجودی</label>
                    <input type="number" placeholder="تعداد موجودی"    name='stock' class="vafadar-input">
                    @error('stock') <span class="vafadar-error">{{$message}}</span> @enderror
                </div>

                <!-- ===== توگل‌ها ===== -->
                <div class="vafadar-toggle-group col-span-2 flex gap-8 justify-start items-center flex-wrap">

                    <div class="vafadar-toggle-label">
                        <span> نمایش در خانه</span>
                        <div class="vafadar-toggle" onclick="toggleState(this)">
                            <div class="vafadar-toggle-dot"></div>
                        </div>
                        <input type="number" name='show_in_home' value="0" class="absolute invisible">
                    </div>

                    <div class="vafadar-toggle-label">
                        <span> محصول ویژه</span>
                        <div class="vafadar-toggle" onclick="toggleState(this)">
                            <div class="vafadar-toggle-dot"></div>
                        </div>
                        <input type="number" name='featured' value="0" class="absolute invisible">
                    </div>

                    <div class="vafadar-toggle-label">
                        <span> فعال</span>
                        <div class="vafadar-toggle" onclick="toggleState(this)">
                            <div class="vafadar-toggle-dot"></div>
                        </div>
                        <input type="number" name='is_active' value="0" class="absolute invisible">
                    </div>

                </div>

            </div>

            <!-- ===== بخش ویژگی‌ها بر اساس دسته بندی===== -->
            <div class="vafadar-attributes-section mt-6">
                <div class="vafadar-attributes-title1"> ویژگی‌های محصول بر اساس دسته بندی</div>
                
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
            <div class="flex justify-end mt-6 pt-6 border-t border-[#DBDFE9]">
                <button type="submit" class="vafadar-btn">
                    <span>ثبت محصول</span>
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
    
    let attribute_input = document.getElementById('attribute_input');
    let attributes_list = document.getElementById('attributes_list');

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
                    let package_options = '';
                    if (Object.keys(data).length > 0) {
                        for (const [key, value] of Object.entries(data)) {
                            package_options += `<option value="${key}">${value}</option>`;
                        }
                        if(element.value==0){
                            element.innerHTML = package_options;
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

    function deleteAttribute(el) {
        el.parentElement.remove();
    }

    let createdPackagesList = document.getElementById('createdPackagesList');
    let PackageForm = document.getElementById('PackageForm');


</script>

@endsection