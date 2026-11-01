@extends('dashboard')

@section('title','نمایش دسته‌بندی')
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
        max-width: 900px;
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
        background: linear-gradient(135deg, #F5F5F5, #DBDFE9);;
        border-bottom: 2px solid var(--metronic-border);
        padding: 24px 32px;
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
        padding: 32px;
        background: var(--metronic-content-bg);
    }

    /* ===== اطلاعات ===== */
    .vafadar-info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .vafadar-info-item {
        background: var(--metronic-form-bg);
        border: 1px solid var(--metronic-border);
        border-radius: 14px;
        padding: 16px 20px;
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
        display: flex;
        align-items: center;
        gap: 6px;
        color: var(--metronic-text-dark);
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 4px;
    }
    .dark .vafadar-info-item .label {
        color: var(--metronic-text-dark);
    }

    .vafadar-info-item .value {
        color: var(--metronic-dark);
        font-size: 16px;
        font-weight: 600;
        padding-right: 4px;
    }
    .dark .vafadar-info-item .value {
        color: var(--metronic-content-bg);
    }

    .vafadar-info-item .value .badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 13px;
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
    .vafadar-info-item .value .badge.show {
        background: var(--metronic-blue);
        color: #fff;
    }
    .vafadar-info-item .value .badge.hide {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
    }
    .dark .vafadar-info-item .value .badge.active {
        background: var(--metronic-blue);
        color: #fff;
    }
    .dark .vafadar-info-item .value .badge.inactive {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
    }
    .dark .vafadar-info-item .value .badge.show {
        background: var(--metronic-blue);
        color: #fff;
    }
    .dark .vafadar-info-item .value .badge.hide {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
    }

    /* ===== دکمه‌های اکشن ===== */
    .vafadar-action-buttons {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        margin-top: 24px;
        padding-top: 24px;
        border-top: 2px solid var(--metronic-border);
    }
    .dark .vafadar-action-buttons {
        border-top-color: var(--metronic-border);
    }

    .vafadar-action-btn-lg {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 28px;
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
    }
    .vafadar-action-btn-lg.edit:hover {
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.25);
    }

    .vafadar-action-btn-lg.delete {
        background: var(--metronic-dark);
        color: #fff;
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

    /* ===== تصویر ===== */
    .vafadar-image-section {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 24px;
        padding-bottom: 24px;
        border-bottom: 2px solid var(--metronic-border);
    }
    .dark .vafadar-image-section {
        border-bottom-color: var(--metronic-border);
    }

    .vafadar-profile-image {
        width: 120px;
        height: 120px;
        border-radius: 16px;
        overflow: hidden;
        border: 3px solid var(--metronic-border);
        flex-shrink: 0;
        transition: all 0.3s ease;
    }
    .vafadar-profile-image:hover {
        border-color: var(--metronic-blue);
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.1);
    }
    .dark .vafadar-profile-image {
        border-color: var(--metronic-border);
    }
    .dark .vafadar-profile-image:hover {
        border-color: var(--metronic-blue);
    }
    .vafadar-profile-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .vafadar-image-info h3 {
        color: var(--metronic-dark);
        font-size: 18px;
        font-weight: 700;
        margin: 0;
    }
    .dark .vafadar-image-info h3 {
        color: var(--metronic-content-bg);
    }
    .vafadar-image-info p {
        color: var(--metronic-text-dark);
        font-size: 13px;
        margin: 4px 0 0;
    }
    .dark .vafadar-image-info p {
        color: var(--metronic-text-dark);
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 768px) {
        .vafadar-profile-header {
            padding: 18px 20px;
        }
        .vafadar-profile-header h2 {
            font-size: 18px;
        }
        .vafadar-profile-body {
            padding: 20px;
        }
        .vafadar-info-grid {
            grid-template-columns: 1fr;
            gap: 12px;
        }
        .vafadar-image-section {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .vafadar-profile-image {
            width: 100px;
            height: 100px;
        }
        .vafadar-action-buttons {
            flex-direction: column;
        }
        .vafadar-action-btn-lg {
            width: 100%;
            justify-content: center;
        }
        .vafadar-profile-header .title-section .header-icon {
            width: 40px;
            height: 40px;
            font-size: 18px;
        }
    }

    @media (max-width: 480px) {
        .vafadar-profile-header {
            padding: 14px 16px;
        }
        .vafadar-profile-header h2 {
            font-size: 16px;
        }
        .vafadar-profile-body {
            padding: 14px;
        }
        .vafadar-info-item {
            padding: 12px 16px;
        }
        .vafadar-info-item .value {
            font-size: 14px;
        }
        .vafadar-profile-image {
            width: 80px;
            height: 80px;
        }
        .vafadar-back-btn {
            padding: 8px 14px;
            font-size: 12px;
        }
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

    /* ===== جدول زیردسته‌ها ===== */
    .vafadar-sub-table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 12px;
        overflow: hidden;
    }
    .vafadar-sub-table th {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 10px 12px;
        border: 1px solid var(--metronic-border);
        text-align: center;
    }
    .dark .vafadar-sub-table th {
        background: var(--metronic-dark);
        color: var(--metronic-text-dark);
        border-color: var(--metronic-border);
    }
    .vafadar-sub-table td {
        padding: 8px 12px;
        border: 1px solid var(--metronic-border);
        text-align: center;
        font-size: 13px;
        color: var(--metronic-dark);
    }
    .dark .vafadar-sub-table td {
        border-color: var(--metronic-border);
        color: var(--metronic-content-bg);
    }
    .vafadar-sub-table tr:hover td {
        background: var(--metronic-shadow);
    }
    .dark .vafadar-sub-table tr:hover td {
        background: var(--metronic-dark);
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
        background: var(--metronic-shadow);
        color: var(--metronic-dark);
    }
    .vafadar-action-icon.danger:hover {
        background: var(--metronic-dark);
        color: #fff;
        box-shadow: 0 4px 12px rgba(13, 14, 18, 0.25);
    }
    .vafadar-action-icon.success {
        background: var(--metronic-blue);
        color: #fff;
    }
    .vafadar-action-icon.success:hover {
        background: var(--metronic-blue);
        color: #fff;
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.25);
    }
    .dark .vafadar-action-icon.danger {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
    }
    .dark .vafadar-action-icon.danger:hover {
        background: var(--metronic-dark);
        color: #fff;
    }
    .dark .vafadar-action-icon.success {
        background: var(--metronic-blue);
        color: #fff;
    }
    .dark .vafadar-action-icon.success:hover {
        background: var(--metronic-blue);
        color: #fff;
    }

    
    /* ===== دسته‌بندی والد ===== */
    .vafadar-categories-box {
        width: 100%;
        max-height: 160px;
        overflow-y: auto;
        padding: 10px 12px;
        background: var(--metronic-form-bg);
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    .vafadar-categories-box:hover {
        border-color: var(--metronic-text-dark);
    }
    .dark .vafadar-categories-box {
        background: var(--metronic-dark);
        border-color: var(--metronic-border);
    }
    .dark .vafadar-categories-box:hover {
        border-color: var(--metronic-text-dark);
    }

    .vafadar-categories-box::-webkit-scrollbar {
        width: 4px;
    }
    .vafadar-categories-box::-webkit-scrollbar-track {
        background: transparent;
    }
    .vafadar-categories-box::-webkit-scrollbar-thumb {
        background: var(--metronic-text-dark);
        border-radius: 10px;
    }
    .dark .vafadar-categories-box::-webkit-scrollbar-thumb {
        background: var(--metronic-text-dark);
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
        background: var(--metronic-shadow);
    }
    .dark .vafadar-category-item:hover {
        background: var(--metronic-shadow);
    }
    .vafadar-category-item label {
        color: var(--metronic-dark);
        font-size: 13px;
        cursor: pointer;
    }
    .dark .vafadar-category-item label {
        color: var(--metronic-content-bg);
    }

</style>

<div class="w-full flex justify-center py-6 px-4">
    <div class="vafadar-profile-card">

        <!-- ===== هدر ===== -->
        <div class="vafadar-profile-header">
            <div class="title-section">
                <div class="header-icon">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M4 7h16M4 12h16M4 17h10"/>
                        <rect x="2" y="3" width="20" height="18" rx="2"/>
                    </svg>
                </div>
                <div>
                    <h2>نمایش دسته‌بندی</h2>
                    <div class="subtitle">مشاهده جزئیات دسته‌بندی {{$category->title}}</div>
                </div>
            </div>
            <a href="{{route('category.list')}}" class="vafadar-back-btn">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                بازگشت به لیست
            </a>
        </div>

        <!-- ===== بدنه ===== -->
        <div class="vafadar-profile-body">

            <!-- ===== تصویر ===== -->
            <div class="vafadar-image-section">
                <div class="vafadar-profile-image">
                    @if($category->image_path != null)
                        <img src="{{asset('storage/category_medias/'.$category->image_path)}}" alt="{{$category->title}}">
                    @else
                        <span class="w-full h-full flex items-center text-center justify-center text-6xl">📷</span>
                    @endif
                </div>
                <div class="vafadar-image-info">
                    <h3>{{$category->title}}</h3>
                    <p>شناسه: #{{$category->id}} · اسلاگ: {{$category->slug}}</p>
                </div>
            </div>

            <!-- ===== اطلاعات ===== -->
            <div class="vafadar-info-grid">

                <!-- عنوان -->
                <div class="vafadar-info-item">
                    <div class="label">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 7h16M4 12h16M4 17h10"/>
                            <rect x="2" y="3" width="20" height="18" rx="2"/>
                        </svg>
                        عنوان
                    </div>
                    <div class="value">{{$category->title}}</div>
                </div>

                <!-- اسلاگ -->
                <div class="vafadar-info-item">
                    <div class="label">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
                        </svg>
                        اسلاگ
                    </div>
                    <div class="value">{{$category->slug}}</div>
                </div>

                <!-- توضیحات -->
                <div class="vafadar-info-item">
                    <div class="label">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 7h16M4 12h16M4 17h10"/>
                            <rect x="2" y="3" width="20" height="18" rx="2"/>
                        </svg>
                        توضیحات
                    </div>
                    <div class="value">{{$category->description ?? '—'}}</div>
                </div>

                <!-- خلاصه -->
                <div class="vafadar-info-item">
                    <div class="label">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 7h16M4 12h16M4 17h10"/>
                            <rect x="2" y="3" width="20" height="18" rx="2"/>
                        </svg>
                        خلاصه
                    </div>
                    <div class="value">{{$category->summary ?? '—'}}</div>
                </div>

                <!-- نمایش در خانه -->
                <div class="vafadar-info-item">
                    <div class="label">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-4 0a1 1 0 01-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 01-1 1h-2z"/>
                        </svg>
                        نمایش در خانه
                    </div>
                    <div class='flex gap-1'>
                        
                        @if($category->show_id_home==1)
                            <img class='w-5' src="{{asset('assets/img/icons8-tick-50.png')}}" alt="">
                            <span> فعال </span>
                        @else
                            <svg class='w-4' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M448 32H0V480H448V32zm-98.9 96L253.9 256l95.2 128H289.3L224 296.2 158.7 384H98.9l95.2-128L98.9 128h59.8L224 215.8 289.3 128h59.8z"/></svg>
                            <span> غیرفعال </span>
                        @endif
                    </div>
                </div>


                <!-- وضعیت -->
                <div class="vafadar-info-item">
                    <div class="label">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            <path d="M9 12l2 2 4-4"/>
                        </svg>
                        وضعیت
                    </div>
                    <div class='flex gap-1'>
                        
                        @if($category->is_active==1)
                            <img class='w-5' src="{{asset('assets/img/icons8-tick-50.png')}}" alt="">
                            <span> فعال </span>
                        @else
                            <svg class='w-4' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M448 32H0V480H448V32zm-98.9 96L253.9 256l95.2 128H289.3L224 296.2 158.7 384H98.9l95.2-128L98.9 128h59.8L224 215.8 289.3 128h59.8z"/></svg>
                            <span> غیرفعال </span>
                        @endif
                    </div>
                </div>
                @if($category->id!=1)
                    <!-- دسته‌بندی والد -->
                    <div class="mb-4">
                        <label class="vafadar-label"> دسته‌بندی والد</label>
                        <div class="vafadar-categories-box">
                            {{$category->title}}
                            {!! $subCategories !!}
                        </div>
                    </div>
                @endif

            </div>
                @if($category->id!=1)
                    <!-- ===== ویژگی‌ها ===== -->
                    <div class="vafadar-section">
                        <div class="vafadar-section-title">
                            <h3>⚙️ ویژگی‌ها</h3>
                            <div class="line"></div>
                        </div>
                        <div class="vafadar-attr-list">
                            @forelse($category['attributes'] as $attribute)
                                <div class="vafadar-attr-item">
                                    <span class="key">{{$attribute->title}}</span>
                                </div>
                            @empty
                                <span class="text-gray-400 dark:text-gray-500 text-sm">هیچ ویژگی‌ای ثبت نشده است</span>
                            @endforelse
                        </div>
                    </div>
                @endif

   


            <!-- ===== دکمه‌های اکشن ===== -->
            <div class="vafadar-action-buttons">
                <a href="{{route('category.edit',['category'=>$category->id])}}" class="vafadar-action-btn-lg edit">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                    </svg>
                    ویرایش دسته‌بندی
                </a>
                @if($category->id!=1)
                <a href="{{route('category.delete',['category'=>$category->id])}}" class="vafadar-action-btn-lg delete" onclick="return confirm('آیا از حذف دسته‌بندی «{{$category->title}}» مطمئن هستید؟')">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 6h18"/>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                    </svg>
                    حذف دسته‌بندی
                </a>
                @endif
                <a href="{{route('category.list')}}" class="vafadar-action-btn-lg back">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 12H5M12 19l-7-7 7-7"/>
                    </svg>
                    بازگشت به لیست
                </a>
            </div>

        </div>

    </div>
</div>

@endsection