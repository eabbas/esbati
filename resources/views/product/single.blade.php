@extends('dashboard')
@section('title','productSingle')
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
        
        --vafadar-green: #8FCBAC;
        --vafadar-cream: #EEEFD9;
        --vafadar-mint: #D9E4DE;
        --vafadar-sky: #A2C3D4;
        --vafadar-aqua: #B9E5E8;
        --vafadar-blue-dark: #4A628A;
        --vafadar-green-light: #7ABA78;
        --vafadar-green-dark: #0A6847;
        --vafadar-text: #1a2a3a;
        --vafadar-text-light: #4a6a7a;
        --vafadar-white: #ffffff;
        
        --shadow-sm: 0 2px 8px rgba(74, 98, 138, 0.06);
        --shadow-md: 0 4px 20px rgba(74, 98, 138, 0.10);
        --shadow-lg: 0 8px 40px rgba(74, 98, 138, 0.14);
    }

    /* ===== کارت اصلی ===== */
    .vafadar-profile-card {
        background: var(--metronic-content-bg);
        border: 1px solid var(--metronic-border);
        border-radius: 24px;
        box-shadow: var(--shadow-sm);
        transition: all 0.3s ease;
        overflow: hidden;
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
    }
    .vafadar-profile-card:hover {
        box-shadow: var(--shadow-md);
    }

    /* ===== هدر ===== */
    .vafadar-profile-header {
        background: linear-gradient(135deg, #F5F5F5, #DBDFE9);
        border-bottom: 2px solid var(--metronic-border);
        padding: 20px 28px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 16px;
    }

    .vafadar-profile-header .title-section {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .vafadar-profile-header .header-icon {
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
    }

    .vafadar-profile-header h2 {
        color: black;
        font-size: 22px;
        font-weight: 700;
        margin: 0;
    }

    .vafadar-profile-header .subtitle {
        color: var(--metronic-text-dark);
        font-size: 14px;
        margin-top: 2px;
    }

    /* ===== دکمه بازگشت ===== */
    .vafadar-back-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border: 1px solid var(--metronic-border);
        border-radius: 12px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .vafadar-back-btn:hover {
        background: var(--metronic-blue);
        color: #fff;
        border-color: var(--metronic-blue);
        transform: translateX(-4px);
        box-shadow: var(--shadow-md);
    }

    /* ===== بدنه ===== */
    .vafadar-profile-body {
        padding: 24px 28px 28px;
        background: var(--metronic-content-bg);
    }

    /* ===== اطلاعات ===== */
    .vafadar-info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 12px;
        margin-bottom: 24px;
    }

    .vafadar-info-item {
        background: var(--metronic-form-bg);
        border: 1px solid var(--metronic-border);
        border-radius: 12px;
        padding: 12px 16px;
        transition: all 0.3s ease;
    }
    .vafadar-info-item:hover {
        border-color: var(--metronic-blue);
        box-shadow: var(--shadow-sm);
    }

    .vafadar-info-item .label {
        color: var(--metronic-text-dark);
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: block;
        margin-bottom: 2px;
    }

    .vafadar-info-item .value {
        color: var(--metronic-dark);
        font-size: 15px;
        font-weight: 600;
    }

    .vafadar-info-item .value .badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 2px 12px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
    }
    .vafadar-info-item .value .badge.active {
        background: var(--metronic-blue);
        color: #fff;
        border: 1px solid var(--metronic-blue);
    }
    .vafadar-info-item .value .badge.inactive {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border: 1px solid var(--metronic-border);
    }
    .vafadar-info-item .value .badge.featured {
        background: var(--metronic-blue);
        color: #fff;
        border: 1px solid var(--metronic-blue);
    }
    .vafadar-info-item .value .badge.show-home {
        background: var(--metronic-blue);
        color: #fff;
        border: 1px solid var(--metronic-blue);
    }

    /* ===== بخش‌ها ===== */
    .vafadar-section {
        margin-top: 24px;
        padding-top: 24px;
        border-top: 2px solid var(--metronic-border);
    }

    .vafadar-section-title {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 16px;
    }
    .vafadar-section-title h3 {
        color: var(--metronic-dark);
        font-size: 18px;
        font-weight: 700;
        margin: 0;
    }
    .vafadar-section-title .line {
        flex: 1;
        height: 2px;
        background: linear-gradient(to right, var(--metronic-border), transparent);
    }

    /* ===== ویژگی‌ها ===== */
    .vafadar-attr-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .vafadar-attr-item {
        display: flex;
        align-items: center;
        gap: 10px;
        background: var(--metronic-form-bg);
        border: 1px solid var(--metronic-border);
        border-radius: 12px;
        padding: 8px 16px;
        transition: all 0.3s ease;
    }
    .vafadar-attr-item:hover {
        border-color: var(--metronic-blue);
        background: var(--metronic-content-bg);
        box-shadow: var(--shadow-sm);
    }

    .vafadar-attr-item .key {
        color: var(--metronic-text-dark);
        font-size: 13px;
        font-weight: 500;
    }
    .vafadar-attr-item .divider {
        width: 1px;
        height: 20px;
        background: var(--metronic-border);
    }
    .vafadar-attr-item .val {
        color: var(--metronic-dark);
        font-size: 14px;
        font-weight: 600;
    }

    /* ===== تصاویر ===== */
    .vafadar-media-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 16px;
    }

    .vafadar-media-item {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        border: 2px solid var(--metronic-border);
        transition: all 0.3s ease;
        aspect-ratio: 1;
    }
    .vafadar-media-item:hover {
        border-color: var(--metronic-blue);
        transform: scale(1.03);
        box-shadow: var(--shadow-md);
    }

    .vafadar-media-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .vafadar-media-badge {
        position: absolute;
        top: 8px;
        right: 8px;
        padding: 4px 12px;
        border-radius: 50px;
        font-size: 10px;
        font-weight: 600;
        color: #fff;
    }
    .vafadar-media-badge.main {
        background: var(--metronic-blue);
    }
    .vafadar-media-badge.gallery {
        background: var(--metronic-text-dark);
    }

    /* ===== دکمه‌ها ===== */
    .vafadar-action-buttons {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-top: 8px;
    }

    .vafadar-action-btn-lg {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 24px;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }
    .vafadar-action-btn-lg:hover {
        transform: translateY(-2px);
    }
    .vafadar-action-btn-lg:active {
        transform: translateY(0) scale(0.97);
    }

    .vafadar-action-btn-lg.edit {
        background: var(--metronic-blue);
        color: #fff;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.15);
    }
    .vafadar-action-btn-lg.edit:hover {
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.25);
    }

    .vafadar-action-btn-lg.delete {
        background: var(--metronic-dark);
        color: #fff;
        box-shadow: 0 4px 16px rgba(13, 14, 18, 0.15);
    }
    .vafadar-action-btn-lg.delete:hover {
        box-shadow: 0 8px 24px rgba(13, 14, 18, 0.25);
    }

    .vafadar-action-btn-lg.back {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border: 1px solid var(--metronic-border);
    }
    .vafadar-action-btn-lg.back:hover {
        background: var(--metronic-blue);
        color: #fff;
        border-color: var(--metronic-blue);
        box-shadow: var(--shadow-md);
    }

    /* ===== پکیج‌ها ===== */
    .vafadar-package-card {
        background: var(--metronic-form-bg);
        border: 1px solid var(--metronic-border);
        border-radius: 16px;
        padding: 16px 20px;
        transition: all 0.3s ease;
        margin-bottom: 12px;
    }
    .vafadar-package-card:hover {
        border-color: var(--metronic-blue);
        box-shadow: var(--shadow-sm);
    }

    .vafadar-package-card .package-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 12px;
        padding-bottom: 10px;
        border-bottom: 1px solid var(--metronic-border);
    }

    .vafadar-package-card .package-title {
        color: var(--metronic-dark);
        font-size: 16px;
        font-weight: 700;
    }

    .vafadar-package-card .package-badge {
        padding: 4px 12px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 600;
    }
    .vafadar-package-card .package-badge.active {
        background: var(--metronic-blue);
        color: #fff;
        border: 1px solid var(--metronic-blue);
    }
    .vafadar-package-card .package-badge.inactive {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border: 1px solid var(--metronic-border);
    }
    .vafadar-package-card .package-badge.featured {
        background: var(--metronic-blue);
        color: #fff;
        border: 1px solid var(--metronic-blue);
    }

    .vafadar-package-card .package-info {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        gap: 8px;
    }

    .vafadar-package-card .package-info-item .label {
        color: var(--metronic-text-dark);
        font-size: 10px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.3px;
    }
    .vafadar-package-card .package-info-item .value {
        color: var(--metronic-dark);
        font-size: 14px;
        font-weight: 600;
    }

    .vafadar-package-card .package-actions {
        display: flex;
        gap: 8px;
        margin-top: 12px;
        padding-top: 12px;
        border-top: 1px solid var(--metronic-border);
        flex-wrap: wrap;
    }

    .vafadar-package-card .package-actions .action-btn {
        padding: 6px 16px;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }
    .vafadar-package-card .package-actions .action-btn:hover {
        transform: translateY(-2px);
    }
    .vafadar-package-card .package-actions .action-btn.view {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border: 1px solid var(--metronic-border);
    }
    .vafadar-package-card .package-actions .action-btn.view:hover {
        background: var(--metronic-blue);
        color: #fff;
    }
    .vafadar-package-card .package-actions .action-btn.edit {
        background: var(--metronic-blue);
        color: #fff;
        border: 1px solid var(--metronic-blue);
    }
    .vafadar-package-card .package-actions .action-btn.edit:hover {
        background: var(--metronic-dark);
        color: #fff;
        border-color: var(--metronic-dark);
    }
    .vafadar-package-card .package-actions .action-btn.delete {
        background: var(--metronic-shadow);
        color: var(--metronic-dark);
        border: 1px solid var(--metronic-border);
    }
    .vafadar-package-card .package-actions .action-btn.delete:hover {
        background: var(--metronic-dark);
        color: #fff;
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 768px) {
        .vafadar-profile-header {
            padding: 16px 18px;
        }
        .vafadar-profile-header h2 {
            font-size: 18px;
        }
        .vafadar-profile-body {
            padding: 16px 18px 20px;
        }
        .vafadar-info-grid {
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        }
        .vafadar-media-grid {
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        }
        .vafadar-package-card .package-info {
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        }
        .vafadar-action-btn-lg {
            padding: 8px 18px;
            font-size: 13px;
        }
        .vafadar-back-btn {
            padding: 8px 16px;
            font-size: 13px;
        }
    }

    @media (max-width: 480px) {
        .vafadar-profile-header {
            padding: 12px 14px;
        }
        .vafadar-profile-header h2 {
            font-size: 15px;
        }
        .vafadar-profile-body {
            padding: 12px 14px 16px;
        }
        .vafadar-info-grid {
            grid-template-columns: 1fr 1fr;
        }
        .vafadar-info-item {
            padding: 8px 12px;
        }
        .vafadar-info-item .value {
            font-size: 13px;
        }
        .vafadar-media-grid {
            grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
        }
        .vafadar-attr-item {
            padding: 6px 12px;
            font-size: 12px;
        }
        .vafadar-package-card {
            padding: 12px 14px;
        }
        .vafadar-package-card .package-info {
            grid-template-columns: 1fr 1fr;
        }
        .vafadar-action-buttons {
            flex-direction: column;
        }
        .vafadar-action-btn-lg {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<div class="w-full flex justify-center py-6 px-4">
    <div class="vafadar-profile-card">

        <!-- ===== هدر ===== -->
        <div class="vafadar-profile-header">
            <div class="title-section">
                <div class="header-icon">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M20 7h-4.5L15 4h-6L8.5 7H4v11h16V7z"/>
                        <circle cx="9" cy="13" r="2"/>
                        <circle cx="15" cy="13" r="2"/>
                        <path d="M9 13h6"/>
                    </svg>
                </div>
                <div>
                    <h2>نمایش محصول</h2>
                    <div class="subtitle">مشاهده جزئیات محصول {{$product->title}}</div>
                </div>
            </div>
            <a href="{{route('product.list')}}" class="vafadar-back-btn">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                بازگشت به لیست
            </a>
        </div>

        <!-- ===== بدنه ===== -->
        <div class="vafadar-profile-body">

            <!-- ===== اطلاعات اصلی ===== -->
            <div class="vafadar-info-grid">
                <div class="vafadar-info-item">
                    <span class="label"> شناسه</span>
                    <span class="value">#{{$product->id}}</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> عنوان</span>
                    <span class="value">{{$product->title}}</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> قیمت</span>
                    <span class="value">{{number_format($product->price)}} تومان</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> تخفیف</span>
                    <span class="value">{{$product->discunt}}%</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> توضیحات</span>
                    <span class="value text-sm">{{$product->description}}</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> دسته‌بندی</span>
                    <span class="value">{{$product->categories[0]->title ?? 'بدون دسته‌بندی'}}</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> خلاصه</span>
                    <span class="value text-sm">{{$product->summary}}</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> برند</span>
                    <span class="value">#{{$product->brand_id}}</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> اسلاگ</span>
                    <span class="value text-sm">{{$product->slug}}</span>
                </div>

                <div class="vafadar-info-item">
                    <span class="label"> موجودی</span>
                    <span class="value">{{$product->stock}} عدد</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> وضعیت</span>
                    <span class="value">
                        <span class="badge {{$product->is_active ? 'active' : 'inactive'}}">
                            {{$product->is_active ? 'فعال' : 'غیرفعال'}}
                        </span>
                    </span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> نمایش در خانه</span>
                    <span class="value">
                        <span class="badge {{$product->show_in_home ? 'show-home' : 'inactive'}}">
                            {{$product->show_in_home ? '✅ نمایش داده می‌شود' : '❌ نمایش داده نمی‌شود'}}
                        </span>
                    </span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> ویژه</span>
                    <span class="value">
                        <span class="badge {{$product->featured ? 'featured' : 'inactive'}}">
                            {{$product->featured ? '⭐ ویژه' : 'معمولی'}}
                        </span>
                    </span>
                </div>
            </div>

            <!-- ===== ویژگی‌ها ===== -->
            <div class="vafadar-section">
                <div class="vafadar-section-title">
                    <h3> ویژگی‌ها</h3>
                    <div class="line"></div>
                </div>
                <div class="vafadar-attr-list">
                    @forelse($product['attributes'] as $attribute)
                        <div class="vafadar-attr-item">
                            <span class="key">{{$attribute->title}}</span>
                            <span class="divider"></span>
                            <span class="val">{{$attribute->pivot->value}}</span>
                        </div>
                    @empty
                        <span class="text-[#4a6a7a] text-sm">هیچ ویژگی‌ای ثبت نشده است</span>
                    @endforelse
                </div>
            </div>

            <!-- ===== تصاویر ===== -->
            <div class="vafadar-section">
                <div class="vafadar-section-title">
                    <h3> تصاویر</h3>
                    <div class="line"></div>
                </div>
                <div class="vafadar-media-grid">
                    @forelse($product['medias'] as $media)
                        <div class="vafadar-media-item">
                            <img src="{{asset('storage/product_medias/'.$media->path)}}" alt="{{$product->title}}">
                            <span class="vafadar-media-badge {{$media->is_main ? 'main' : 'gallery'}}">
                                {{$media->is_main ? 'اصلی' : 'گالری'}}
                            </span>
                        </div>
                    @empty
                        <span class="text-[#4a6a7a] text-sm">هیچ تصویری ثبت نشده است</span>
                    @endforelse
                </div>
            </div>

            <!-- ===== پکیج‌ها ===== -->
            <div class="vafadar-section">
                <div class="vafadar-section-title">
                    <h3> پکیج‌ها</h3>
                    <div class="line"></div>
                </div>
                
                @forelse($product['packages'] as $package)
                <div class="vafadar-package-card">
                    <div class="package-header">
                        <span class="package-title"> پکیج #{{$loop->iteration}}</span>
                        <div class="flex gap-2 flex-wrap">
                            <span class="package-badge {{$package->is_active ? 'active' : 'inactive'}}">
                                {{$package->is_active ? '✅ فعال' : '❌ غیرفعال'}}
                            </span>
                            @if($package->featured)
                                <span class="package-badge featured">⭐ ویژه</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="package-info">
                        <div class="package-info-item">
                            <span class="label"> توضیحات</span>
                            <span class="value">{{$package->description}}</span>
                        </div>
                        <div class="package-info-item">
                            <span class="label"> خلاصه</span>
                            <span class="value">{{$package->summary}}</span>
                        </div>
                        <div class="package-info-item">
                            <span class="label"> قیمت</span>
                            <span class="value">{{$package->price}} تومان</span>
                        </div>
                        <div class="package-info-item">
                            <span class="label"> تخفیف</span>
                            <span class="value">{{$package->discunt}}%</span>
                        </div>
                        <div class="package-info-item">
                            <span class="label"> موجودی</span>
                            <span class="value">{{$package->stock}} عدد</span>
                        </div>
                    </div>

                    <div class="package-actions">
                        <a href="{{route('product.singlePackage',['package'=>$package->id])}}" class="action-btn view"> نمایش</a>
                        <a href="{{route('product.edit',['product'=>$product->id])}}" class="action-btn edit"> ویرایش</a>
                    </div>
                </div>
                @empty
                <span class="text-[#4a6a7a] text-sm">هیچ پکیجی ثبت نشده است</span>
                @endforelse
            </div>
            <!-- ===== دکمه‌های اکشن ===== -->
            <div class="vafadar-action-buttons">
                <a href="{{route('product.edit',['product'=>$product->id])}}" class="vafadar-action-btn-lg edit">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                    </svg>
                    ویرایش محصول
                </a>
                <a href="{{route('product.delete',['product'=>$product->id])}}" class="vafadar-action-btn-lg delete" onclick="return confirm('آیا از حذف محصول «{{$product->title}}» مطمئن هستید؟')">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 6h18"/>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                    </svg>
                    حذف محصول
                </a>
                <a href="{{route('product.list')}}" class="vafadar-action-btn-lg back">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 12H5M12 19l-7-7 7-7"/>
                    </svg>
                    بازگشت به لیست
                </a>
            </div>

        </div>

    </div>
</div>

<script>
    function showPackage(package_id) {
        console.log(package_id);
        alert('نمایش پکیج با شناسه: ' + package_id);
    }
</script>

@endsection