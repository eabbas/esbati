@extends('dashboard')
@section('title','packageSingle')
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
    
    /* ===== کارت اصلی ===== */
    .vafadar-profile-card {
        background: var(--metronic-content-bg);
        border: 1px solid var(--metronic-border);
        border-radius: 24px;
        box-shadow: 0 4px 20px rgba(13,14,18,0.03);
        transition: all 0.3s ease;
        overflow: hidden;
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
    }
    .vafadar-profile-card:hover {
        box-shadow: 0 8px 40px rgba(13,14,18,0.06);
    }
    .dark .vafadar-profile-card {
        background: var(--metronic-dark);
        border-color: var(--metronic-border);
        box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    }
    .dark .vafadar-profile-card:hover {
        box-shadow: 0 8px 40px rgba(0,0,0,0.4);
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
    .dark .vafadar-profile-header {
        background: var(--metronic-dark);
        border-bottom-color: var(--metronic-border);
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
    .dark .vafadar-profile-header .header-icon {
        background: var(--metronic-blue);
    }

    .vafadar-profile-header h2 {
        color: black;
        font-size: 22px;
        font-weight: 700;
        margin: 0;
    }
    .dark .vafadar-profile-header h2 {
        color: var(--metronic-content-bg);
    }

    .vafadar-profile-header .subtitle {
        color: var(--metronic-text-dark);
        font-size: 14px;
        margin-top: 2px;
    }
    .dark .vafadar-profile-header .subtitle {
        color: var(--metronic-text-dark);
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
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.2);
    }
    .dark .vafadar-back-btn {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border-color: var(--metronic-border);
    }
    .dark .vafadar-back-btn:hover {
        background: var(--metronic-blue);
        color: #fff;
        border-color: var(--metronic-blue);
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
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.04);
    }
    .dark .vafadar-info-item {
        background: var(--metronic-dark);
        border-color: var(--metronic-border);
    }
    .dark .vafadar-info-item:hover {
        border-color: var(--metronic-blue);
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
    .dark .vafadar-info-item .label {
        color: var(--metronic-text-dark);
    }

    .vafadar-info-item .value {
        color: var(--metronic-dark);
        font-size: 15px;
        font-weight: 600;
    }
    .dark .vafadar-info-item .value {
        color: var(--metronic-content-bg);
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
    }
    .vafadar-info-item .value .badge.inactive {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
    }
    .vafadar-info-item .value .badge.featured {
        background: var(--metronic-blue);
        color: #fff;
    }
    .vafadar-info-item .value .badge.show-home {
        background: var(--metronic-blue);
        color: #fff;
    }
    .dark .vafadar-info-item .value .badge.active {
        background: var(--metronic-blue);
        color: #fff;
    }
    .dark .vafadar-info-item .value .badge.inactive {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
    }
    .dark .vafadar-info-item .value .badge.featured {
        background: var(--metronic-blue);
        color: #fff;
    }
    .dark .vafadar-info-item .value .badge.show-home {
        background: var(--metronic-blue);
        color: #fff;
    }

    /* ===== بخش‌ها ===== */
    .vafadar-section {
        margin-top: 24px;
        padding-top: 24px;
        border-top: 2px solid var(--metronic-border);
    }
    .dark .vafadar-section {
        border-top-color: var(--metronic-border);
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
    .dark .vafadar-section-title h3 {
        color: var(--metronic-content-bg);
    }
    .vafadar-section-title .line {
        flex: 1;
        height: 2px;
        background: var(--metronic-border);
    }
    .dark .vafadar-section-title .line {
        background: var(--metronic-border);
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
        background: var(--metronic-shadow);
    }
    .dark .vafadar-attr-item {
        background: var(--metronic-dark);
        border-color: var(--metronic-border);
    }
    .dark .vafadar-attr-item:hover {
        border-color: var(--metronic-blue);
        background: var(--metronic-shadow);
    }

    .vafadar-attr-item .key {
        color: var(--metronic-text-dark);
        font-size: 13px;
        font-weight: 500;
    }
    .dark .vafadar-attr-item .key {
        color: var(--metronic-text-dark);
    }
    .vafadar-attr-item .divider {
        width: 1px;
        height: 20px;
        background: var(--metronic-border);
    }
    .dark .vafadar-attr-item .divider {
        background: var(--metronic-border);
    }
    .vafadar-attr-item .val {
        color: var(--metronic-dark);
        font-size: 14px;
        font-weight: 600;
    }
    .dark .vafadar-attr-item .val {
        color: var(--metronic-content-bg);
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
    }
    .dark .vafadar-media-item {
        border-color: var(--metronic-border);
    }
    .dark .vafadar-media-item:hover {
        border-color: var(--metronic-blue);
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
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.2);
    }
    .dark .vafadar-action-btn-lg.back {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border-color: var(--metronic-border);
    }
    .dark .vafadar-action-btn-lg.back:hover {
        background: var(--metronic-blue);
        color: #fff;
        border-color: var(--metronic-blue);
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
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.04);
    }
    .dark .vafadar-package-card {
        background: var(--metronic-dark);
        border-color: var(--metronic-border);
    }
    .dark .vafadar-package-card:hover {
        border-color: var(--metronic-blue);
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
    .dark .vafadar-package-card .package-header {
        border-bottom-color: var(--metronic-border);
    }

    .vafadar-package-card .package-title {
        color: var(--metronic-dark);
        font-size: 16px;
        font-weight: 700;
    }
    .dark .vafadar-package-card .package-title {
        color: var(--metronic-content-bg);
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
    }
    .vafadar-package-card .package-badge.inactive {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
    }
    .vafadar-package-card .package-badge.featured {
        background: var(--metronic-blue);
        color: #fff;
    }
    .dark .vafadar-package-card .package-badge.active {
        background: var(--metronic-blue);
        color: #fff;
    }
    .dark .vafadar-package-card .package-badge.inactive {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
    }
    .dark .vafadar-package-card .package-badge.featured {
        background: var(--metronic-blue);
        color: #fff;
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
    .dark .vafadar-package-card .package-info-item .label {
        color: var(--metronic-text-dark);
    }
    .vafadar-package-card .package-info-item .value {
        color: var(--metronic-dark);
        font-size: 14px;
        font-weight: 600;
    }
    .dark .vafadar-package-card .package-info-item .value {
        color: var(--metronic-content-bg);
    }

    .vafadar-package-card .package-actions {
        display: flex;
        gap: 8px;
        margin-top: 12px;
        padding-top: 12px;
        border-top: 1px solid var(--metronic-border);
        flex-wrap: wrap;
    }
    .dark .vafadar-package-card .package-actions {
        border-top-color: var(--metronic-border);
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
    .dark .vafadar-package-card .package-actions .action-btn.view {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border-color: var(--metronic-border);
    }
    .dark .vafadar-package-card .package-actions .action-btn.view:hover {
        background: var(--metronic-blue);
        color: #fff;
    }
    .dark .vafadar-package-card .package-actions .action-btn.edit {
        background: var(--metronic-blue);
        color: #fff;
        border-color: var(--metronic-blue);
    }
    .dark .vafadar-package-card .package-actions .action-btn.edit:hover {
        background: var(--metronic-dark);
        color: #fff;
    }
    .dark .vafadar-package-card .package-actions .action-btn.delete {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border-color: var(--metronic-border);
    }
    .dark .vafadar-package-card .package-actions .action-btn.delete:hover {
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
                    <h2>نمایش پکیج</h2>
                    <div class="subtitle">مشاهده جزئیات پکیج {{$package->title}}</div>
                </div>
            </div>
            <a href="{{route('product.single',['product'=>$package->product->id])}}" class="vafadar-back-btn">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                بازگشت به محصول
            </a>
        </div>

        <!-- ===== بدنه ===== -->
        <div class="vafadar-profile-body">

            <!-- ===== اطلاعات اصلی ===== -->
            <div class="vafadar-info-grid">
                <div class="vafadar-info-item">
                    <span class="label"> شناسه</span>
                    <span class="value">#{{$package->id}}</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> عنوان</span>
                    <span class="value">{{$package['product']->title}}</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> قیمت</span>
                    <span class="value">{{$package->price}} تومان</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> تخفیف</span>
                    <span class="value">{{$package->discunt}}%</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> توضیحات</span>
                    <span class="value text-sm">{{$package->description}}</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> دسته‌بندی</span>
                    <span class="value">{{$package['product']->categories[0]->title ?? 'بدون دسته‌بندی'}}</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> خلاصه</span>
                    <span class="value text-sm">{{$package->summary}}</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> برند</span>
                    <span class="value">#{{$package['product']->brand_id}}</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> اسلاگ</span>
                    <span class="value text-sm">{{$package['product']->slug}}</span>
                </div>

                <div class="vafadar-info-item">
                    <span class="label"> موجودی</span>
                    <span class="value">{{$package->stock}} عدد</span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> وضعیت</span>
                    <span class="value">
                        <span class="badge {{$package->is_active ? 'active' : 'inactive'}}">
                            {{$package->is_active ? 'فعال' : 'غیرفعال'}}
                        </span>
                    </span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> نمایش در خانه</span>
                    <span class="value">
                        <span class="badge {{$package['product']->show_in_home ? 'show-home' : 'inactive'}}">
                            {{$package['product']->show_in_home ? '✅ نمایش داده می‌شود' : '❌ نمایش داده نمی‌شود'}}
                        </span>
                    </span>
                </div>
                <div class="vafadar-info-item">
                    <span class="label"> ویژه</span>
                    <span class="value">
                        <span class="badge {{$package->featured ? 'featured' : 'inactive'}}">
                            {{$package->featured ? '⭐ ویژه' : 'معمولی'}}
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
                    @forelse($package['attributes'] as $attribute)
                        <div class="vafadar-attr-item">
                            <span class="key">{{$attribute->title}}</span>
                            <span class="divider"></span>
                            <span class="val">{{$attribute->pivot->value}}</span>
                        </div>
                    @empty
                        <span class="text-gray-400 dark:text-gray-500 text-sm">هیچ ویژگی‌ای ثبت نشده است</span>
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
                    @forelse($package['medias'] as $media)
                        <div class="vafadar-media-item">
                            <img src="{{asset('storage/package_medias/'.$media->path)}}" alt="{{$package->title}}">
                            <span class="vafadar-media-badge {{$media->is_main ? 'main' : 'gallery'}}">
                                {{$media->is_main ? 'اصلی' : 'گالری'}}
                            </span>
                        </div>
                    @empty
                        <span class="text-gray-400 dark:text-gray-500 text-sm">هیچ تصویری ثبت نشده است</span>
                    @endforelse
                </div>
            </div>

        </div>

    </div>
</div>

<script>
    function showPackage(package_id) {
        console.log(package_id);
        // می‌توانید اینجا کد مورد نظر برای نمایش پکیج را اضافه کنید
        alert('نمایش پکیج با شناسه: ' + package_id);
    }
</script>

@endsection