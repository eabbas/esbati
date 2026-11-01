@extends('dashboard')

@section('title','لیست دسترسی‌ها')
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
    .vafadar-table-card {
        background: var(--metronic-content-bg);
        border: 1px solid var(--metronic-border);
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(13,14,18,0.03);
        transition: all 0.3s ease;
        overflow: hidden;
    }
    .vafadar-table-card:hover {
        box-shadow: 0 8px 40px rgba(13,14,18,0.06);
    }
    .dark .vafadar-table-card {
        background: var(--metronic-dark);
        border-color: var(--metronic-border);
        box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    }
    .dark .vafadar-table-card:hover {
        box-shadow: 0 8px 40px rgba(0,0,0,0.4);
    }

    /* ===== هدر جدول ===== */
    .vafadar-table-header {
        background: var(--metronic-shadow);
        border-bottom: 2px solid var(--metronic-border);
    }
    .dark .vafadar-table-header {
        background: var(--metronic-shadow);
        border-bottom-color: var(--metronic-border);
    }

    .vafadar-table-header th {
        color: var(--metronic-text-dark);
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 16px 20px;
        text-align: right;
    }
    .dark .vafadar-table-header th {
        color: var(--metronic-text-dark);
    }

    /* ===== ردیف‌ها ===== */
    .vafadar-table-row {
        border-bottom: 1px solid var(--metronic-border);
        transition: all 0.3s ease;
    }
    .vafadar-table-row:hover {
        background: var(--metronic-shadow);
        transform: translateX(-4px);
    }
    .vafadar-table-row:last-child {
        border-bottom: none;
    }
    .dark .vafadar-table-row {
        border-bottom-color: var(--metronic-border);
    }
    .dark .vafadar-table-row:hover {
        background: var(--metronic-shadow);
    }

    .vafadar-table-row td {
        padding: 14px 20px;
        color: var(--metronic-dark);
        font-size: 14px;
        vertical-align: middle;
    }
    .dark .vafadar-table-row td {
        color: var(--metronic-content-bg);
    }

    /* ===== نشان دسترسی ===== */
    .vafadar-permision-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border: 1px solid var(--metronic-border);
    }
    .dark .vafadar-permision-badge {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border-color: var(--metronic-border);
    }

    /* ===== دکمه‌های اکشن ===== */
    .vafadar-action-group {
        display: flex;
        align-items: center;
        gap: 6px;
        flex-wrap: wrap;
    }

    .vafadar-action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        padding: 7px 14px;
        border-radius: 10px;
        font-size: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        border: 1px solid transparent;
        cursor: pointer;
    }
    .vafadar-action-btn:hover {
        transform: translateY(-2px);
    }
    .vafadar-action-btn:active {
        transform: translateY(0) scale(0.95);
    }

    .vafadar-action-btn.users {
        color: var(--metronic-text-dark);
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
    }
    .vafadar-action-btn.users:hover {
        background: var(--metronic-blue);
        color: #fff;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.25);
    }

    .vafadar-action-btn.roles {
        color: var(--metronic-text-dark);
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
    }
    .vafadar-action-btn.roles:hover {
        background: var(--metronic-blue);
        color: #fff;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.25);
    }

    .vafadar-action-btn.edit {
        color: #fff;
        background: var(--metronic-blue);
        border-color: var(--metronic-blue);
    }
    .vafadar-action-btn.edit:hover {
        background: var(--metronic-blue);
        color: #fff;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.25);
    }

    .vafadar-action-btn.delete {
        color: var(--metronic-dark);
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
    }
    .vafadar-action-btn.delete:hover {
        background: var(--metronic-dark);
        color: #fff;
        box-shadow: 0 4px 16px rgba(13, 14, 18, 0.25);
    }

    .dark .vafadar-action-btn.users {
        color: var(--metronic-text-dark);
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
    }
    .dark .vafadar-action-btn.users:hover {
        background: var(--metronic-blue);
        color: #fff;
    }

    .dark .vafadar-action-btn.roles {
        color: var(--metronic-text-dark);
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
    }
    .dark .vafadar-action-btn.roles:hover {
        background: var(--metronic-blue);
        color: #fff;
    }

    .dark .vafadar-action-btn.edit {
        color: #fff;
        background: var(--metronic-blue);
        border-color: var(--metronic-blue);
    }
    .dark .vafadar-action-btn.edit:hover {
        background: var(--metronic-blue);
        color: #fff;
    }

    .dark .vafadar-action-btn.delete {
        color: var(--metronic-text-dark);
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
    }
    .dark .vafadar-action-btn.delete:hover {
        background: var(--metronic-dark);
        color: #fff;
    }

    /* ===== شمارنده ===== */
    .vafadar-counter {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        font-size: 13px;
        font-weight: 700;
        padding: 6px 16px;
        border-radius: 50px;
        border: 1px solid var(--metronic-border);
    }
    .dark .vafadar-counter {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border-color: var(--metronic-border);
    }

    /* ===== سرچ ===== */
    .vafadar-search {
        background: var(--metronic-shadow);
        border: 1px solid var(--metronic-border);
        border-radius: 12px;
        padding: 10px 16px 10px 44px;
        color: var(--metronic-dark);
        font-size: 14px;
        transition: all 0.3s ease;
        width: 100%;
        max-width: 300px;
        outline: none;
    }
    .vafadar-search::placeholder {
        color: var(--metronic-text-dark);
    }
    .vafadar-search:focus {
        border-color: var(--metronic-blue);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.06);
        background: var(--metronic-form-bg);
    }
    .dark .vafadar-search {
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
        color: var(--metronic-content-bg);
    }
    .dark .vafadar-search::placeholder {
        color: var(--metronic-text-dark);
    }
    .dark .vafadar-search:focus {
        border-color: var(--metronic-blue);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background: var(--metronic-shadow);
    }

    .vafadar-search-wrap {
        position: relative;
    }
    .vafadar-search-wrap .search-icon {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--metronic-text-dark);
    }
    .dark .vafadar-search-wrap .search-icon {
        color: var(--metronic-text-dark);
    }

    /* ===== اسکرول ===== */
    .vafadar-table-wrap {
        overflow-x: auto;
    }
    .vafadar-table-wrap::-webkit-scrollbar {
        height: 4px;
    }
    .vafadar-table-wrap::-webkit-scrollbar-track {
        background: transparent;
    }
    .vafadar-table-wrap::-webkit-scrollbar-thumb {
        background: var(--metronic-text-dark);
        border-radius: 10px;
    }
    .dark .vafadar-table-wrap::-webkit-scrollbar-thumb {
        background: var(--metronic-text-dark);
    }

    /* ===== خالی ===== */
    .vafadar-empty {
        padding: 60px 20px;
        text-align: center;
    }
    .vafadar-empty svg {
        width: 64px;
        height: 64px;
        fill: var(--metronic-border);
        margin: 0 auto 16px;
    }
    .dark .vafadar-empty svg {
        fill: var(--metronic-border);
    }
    .vafadar-empty h3 {
        color: var(--metronic-dark);
        font-size: 18px;
        font-weight: 600;
    }
    .dark .vafadar-empty h3 {
        color: var(--metronic-content-bg);
    }
    .vafadar-empty p {
        color: var(--metronic-text-dark);
        font-size: 14px;
        margin-top: 4px;
    }

    /* ===== دکمه اضافه کردن ===== */
    .vafadar-add-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        background: var(--metronic-blue);
        color: #fff;
        border-radius: 12px;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s ease;
        text-decoration: none;
        border: none;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.15);
    }
    .vafadar-add-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.25);
        color: #fff;
    }
    .vafadar-add-btn:active {
        transform: translateY(0) scale(0.97);
    }
    .dark .vafadar-add-btn {
        background: var(--metronic-blue);
    }
    .dark .vafadar-add-btn:hover {
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.25);
    }

    /* ===== مودال ویرایش ===== */
    .vafadar-modal-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(4px);
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: fadeIn 0.3s ease;
    }
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .vafadar-modal {
        background: var(--metronic-content-bg);
        border-radius: 24px;
        padding: 32px;
        max-width: 420px;
        width: 90%;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.2);
        animation: slideUp 0.3s ease;
        position: relative;
    }
    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(30px) scale(0.95);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }
    .dark .vafadar-modal {
        background: var(--metronic-dark);
    }

    .vafadar-modal-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
        padding-bottom: 16px;
        border-bottom: 2px solid var(--metronic-border);
    }
    .dark .vafadar-modal-header {
        border-bottom-color: var(--metronic-border);
    }

    .vafadar-modal-header h3 {
        color: var(--metronic-dark);
        font-size: 18px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .dark .vafadar-modal-header h3 {
        color: var(--metronic-content-bg);
    }

    .vafadar-modal-close {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        border: none;
        background: var(--metronic-shadow);
        color: var(--metronic-dark);
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .vafadar-modal-close:hover {
        background: var(--metronic-dark);
        color: #fff;
        transform: rotate(90deg);
    }
    .dark .vafadar-modal-close {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
    }
    .dark .vafadar-modal-close:hover {
        background: var(--metronic-dark);
        color: #fff;
    }

    .vafadar-modal .form-group {
        margin-bottom: 16px;
    }
    .vafadar-modal .form-group label {
        display: block;
        color: var(--metronic-text-dark);
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 5px;
        padding-right: 4px;
    }
    .dark .vafadar-modal .form-group label {
        color: var(--metronic-text-dark);
    }
    .vafadar-modal .form-group input {
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
    .vafadar-modal .form-group input:focus {
        border-color: var(--metronic-blue);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.06);
        background: var(--metronic-form-bg);
    }
    .dark .vafadar-modal .form-group input {
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
        color: var(--metronic-content-bg);
    }
    .dark .vafadar-modal .form-group input:focus {
        border-color: var(--metronic-blue);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background: var(--metronic-shadow);
    }

    .vafadar-modal .modal-submit {
        width: 100%;
        padding: 12px;
        background: var(--metronic-blue);
        border: none;
        border-radius: 12px;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 8px;
    }
    .vafadar-modal .modal-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.25);
    }
    .dark .vafadar-modal .modal-submit {
        background: var(--metronic-blue);
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 768px) {
        .vafadar-table-row td {
            padding: 10px 12px;
            font-size: 13px;
        }
        .vafadar-table-header th {
            padding: 10px 12px;
            font-size: 10px;
        }
        .vafadar-action-btn {
            padding: 5px 10px;
            font-size: 11px;
        }
        .vafadar-action-btn span {
            display: none;
        }
        .vafadar-search {
            max-width: 100%;
            font-size: 13px;
        }
        .vafadar-modal {
            padding: 24px 20px;
        }
    }

    @media (max-width: 480px) {
        .vafadar-table-row td {
            padding: 8px 8px;
            font-size: 12px;
        }
        .vafadar-table-header th {
            padding: 8px 8px;
            font-size: 9px;
        }
        .vafadar-action-btn {
            padding: 4px 7px;
            font-size: 10px;
        }
        .vafadar-counter {
            font-size: 11px;
            padding: 4px 10px;
        }
    }
</style>

<div class="w-full">
    
    <!-- ===== هدر لیست ===== -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
        <div>
            <h2 class="text-xl font-bold" style="color: var(--metronic-dark);"> لیست دسترسی‌ها</h2>
            <p class="text-sm mt-1" style="color: var(--metronic-text-dark);">مدیریت دسترسی‌های کاربری</p>
        </div>
        <div class="flex items-center gap-3 flex-wrap">
            <span class="vafadar-counter">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
                {{ count($permisions) }} دسترسی
            </span>
            <a href="{{route('permision.create')}}" class="vafadar-add-btn">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M12 5v14M5 12h14"/>
                </svg>
                دسترسی جدید
            </a>
        </div>
    </div>

    <!-- ===== کارت جدول ===== -->
    <div class="vafadar-table-card">
        
        <!-- ===== نوار جستجو ===== -->
        <div class="p-4 border-b" style="border-color: var(--metronic-border);">
            <div class="vafadar-search-wrap">
                <svg class="search-icon w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="M21 21l-4.35-4.35"/>
                </svg>
                <input type="text" id="searchPermision" placeholder="جستجوی دسترسی‌ها..." class="vafadar-search">
            </div>
        </div>

        <!-- ===== جدول ===== -->
        <div class="vafadar-table-wrap">
            <table class="w-full" id="permisionTable">
                <thead class="vafadar-table-header">
                    <tr>
                        <th style="width: 60px;">#</th>
                        <th>عنوان فارسی</th>
                        <th class="hidden sm:table-cell">عنوان انگلیسی</th>
                        <th class="text-center" colspan="4">عملیات</th>
                    </tr>
                </thead>
                <tbody id="permisionTableBody">
                    @forelse($permisions as $permision)
                    <tr class="vafadar-table-row" data-id="{{$permision->id}}" data-fa="{{$permision->fa_title}}" data-ea="{{$permision->ea_title}}">
                        <td>
                            <span class="vafadar-permision-badge">#{{$permision->id}}</span>
                        </td>
                        <td>
                            <span class="font-semibold" style="color: var(--metronic-dark);">{{$permision->fa_title}}</span>
                        </td>
                        <td class="hidden sm:table-cell">
                            <code class="text-sm px-2 py-1 rounded" style="background: var(--metronic-shadow); color: var(--metronic-text-dark);">{{$permision->ea_title}}</code>
                        </td>
                        <td>
                            <div class="vafadar-action-group justify-center">
                                <!-- <div onclick="showUsers({{$permision->id}})"  class="vafadar-action-btn users" title="مشاهده کاربران">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                        <circle cx="9" cy="7" r="4"/>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                    </svg>
                                    <span class="hidden sm:inline">کاربران</span>
                                </div> -->
                                <div onclick="showRoles({{$permision->id}})"  class="vafadar-action-btn roles" title="مشاهده نقش‌ها">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                    <span class="hidden sm:inline">نقش‌ها</span>
                                </div>
                                <button onclick="editForm({{$permision->id}})" class="vafadar-action-btn edit" title="ویرایش دسترسی">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                    </svg>
                                    <span class="hidden sm:inline">ویرایش</span>
                                </button>
                                <a href="{{route('permision.delete',['permision'=>$permision->id])}}" class="vafadar-action-btn delete" title="حذف دسترسی" onclick="return confirm('آیا از حذف دسترسی «{{$permision->fa_title}}» مطمئن هستید؟')">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M3 6h18"/>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                                    </svg>
                                    <span class="hidden sm:inline">حذف</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">
                            <div class="vafadar-empty">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                                    <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                                <h3>هیچ دسترسی‌ای یافت نشد</h3>
                                <p>برای شروع، روی دکمه «دسترسی جدید» کلیک کنید</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- ===== فوتر جدول ===== -->
        <div class="vafadar-table-header px-4 py-3 border-t" style="border-color: var(--metronic-border);">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-2 text-xs" style="color: var(--metronic-text-dark);">
                <span>تعداد کل: <strong style="color: var(--metronic-dark);">{{ count($permisions) }}</strong> دسترسی</span>
                <span>آخرین بروزرسانی: <strong style="color: var(--metronic-dark);">{{ now()->format('Y/m/d H:i') }}</strong></span>
            </div>
        </div>

    </div>
</div>

<!-- ============================================================ -->
<!-- ===== مودال ویرایش ===== -->
<!-- ============================================================ -->
<div id="editModal" class="vafadar-modal-overlay" style="display: none;">
    <div class="vafadar-modal">
        <div class="vafadar-modal-header">
            <h3>
                <svg class="w-5 h-5" viewBox="0 0 24 24" style="fill: var(--metronic-blue);">
                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                </svg>
                ویرایش دسترسی
            </h3>
            <button class="vafadar-modal-close" onclick="closeModal()">✕</button>
        </div>
        <form id="editForm">
            <input type="hidden" id="editId" name="id">
            <div class="form-group">
                <label> عنوان فارسی</label>
                <input type="text" id="editFaTitle" name="fa_title" placeholder="عنوان فارسی دسترسی">
            </div>
            <div class="form-group">
                <label> عنوان انگلیسی</label>
                <input type="text" id="editEaTitle" name="ea_title" placeholder="عنوان انگلیسی دسترسی">
            </div>
            <button type="submit" class="modal-submit">
                <span> ذخیره تغییرات</span>
            </button>
        </form>
    </div>
</div>

<script>
    let table = document.getElementById('permisionTable');

    // ===== جستجو =====
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchPermision');
        const table = document.getElementById('permisionTable');
        const rows = table.querySelectorAll('tbody tr');

        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const query = this.value.toLowerCase().trim();

                rows.forEach(row => {
                    const fa = row.getAttribute('data-fa')?.toLowerCase() || '';
                    const ea = row.getAttribute('data-ea')?.toLowerCase() || '';
                    const id = row.getAttribute('data-id') || '';

                    const match = fa.includes(query) || ea.includes(query) || id.includes(query);
                    row.style.display = match ? '' : 'none';
                });
            });
        }
    });

    // ===== ویرایش =====
    function editForm(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });
        
        $.ajax({
            url: "{{url('permision/getPermision')}}/" + id,
            type: "get",
            dataType: "json",
            success: function(data) {
                $('#editId').val(id);
                $('#editFaTitle').val(data.fa_title);
                $('#editEaTitle').val(data.ea_title);
                $('#editModal').fadeIn(300);
            },
            error: function() {
                alert('خطا در دریافت اطلاعات دسترسی');
            }
        });
    }

    // ===== بستن مودال =====
    function closeModal() {
        $('#editModal').fadeOut(300);
    }

    // ===== کلیک بیرون مودال =====
    $('#editModal').on('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });

    // ===== دکمه ESC =====
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') {
            closeModal();
        }
    });

    // ===== ارسال فرم ویرایش =====
    $('#editForm').on('submit', function(e) {
        e.preventDefault();
        
        let fa_title = $('#editFaTitle').val();
        let ea_title = $('#editEaTitle').val();
        let id = $('#editId').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });

        $.ajax({
            url: "{{url('permision/update')}}/" + id,
            type: "post",
            data: {
                'fa_title': fa_title,
                'ea_title': ea_title,
            },
            dataType: "json",
            success: function(data) {
                if (data.success) {
                    // به‌روزرسانی ردیف جدول
                    let row = document.querySelector(`tr[data-id="${id}"]`);
                    if (row) {
                        row.setAttribute('data-fa', fa_title);
                        row.setAttribute('data-ea', ea_title);
                        row.querySelector('td:nth-child(2) span').textContent = fa_title;
                        row.querySelector('td:nth-child(3) code').textContent = ea_title;
                        
                    }
                    closeModal();
                }
            },
            error: function() {
                alert('خطا در ویرایش دسترسی');
            }
        });
    });


    // function showUsers(id) {

    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': "{{ csrf_token() }}"
    //         }
    //     })
        
    //     $.ajax({
    //         url: "{{url('role/get/role/users/')}}/" + id,
    //         type: "get",
    //         dataType: "json",
    //         success: function(data) {
    //             console.log(data)
                
    //             let div = document.createElement('div');
    //             // ===== پالت رنگی وفادار با تیلویند =====
    //             div.classList = `absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-8/12 max-w-2xl mx-auto bg-[#f5efe6] border-4 border-[#1a3a4a] rounded-2xl shadow-2xl flex flex-col p-6 gap-4 items-center z-50`;
                
    //             // ===== هدر جدول =====
    //             let table = document.createElement('table');
    //             table.className = `w-full border-collapse`;
    //             table.id = "userTable";
                
    //             let thead = document.createElement('thead');
    //             thead.className = `bg-[#1a3a4a] text-white rounded-t-xl`;
                
    //             let headerRow = document.createElement('tr');
    //             headerRow.className = `flex justify-around gap-4 p-3`;
    //             headerRow.innerHTML = `
    //                 <th class="text-sm font-bold text-[#f5efe6]">نام</th>
    //                 <th class="text-sm font-bold text-[#f5efe6]">فامیلی</th>
    //                 <th class="text-sm font-bold text-[#f5efe6]">شماره موبایل</th>
    //             `;
    //             thead.appendChild(headerRow);
    //             table.appendChild(thead);
                
    //             // ===== بدنه جدول =====
    //             let tbody = document.createElement('tbody');
    //             tbody.className = `divide-y divide-[#d5cdc4]`;
                
    //             data.forEach(user => {
    //                 let row = document.createElement('tr');
    //                 row.className = `flex justify-around gap-4 p-3 hover:bg-[#c9a04e]/10 transition-colors duration-200`;
    //                 row.innerHTML = `
    //                     <td class="text-sm font-semibold text-[#1a3a4a] text-center">${user.name}</td>
    //                     <td class="text-sm font-semibold text-[#1a3a4a] text-center">${user.family}</td>
    //                     <td class="text-sm font-semibold text-[#4a5a3a] text-center">${user.phoneNumber}</td>
    //                 `;
    //                 tbody.appendChild(row);
    //             });
                
    //             table.appendChild(tbody);
    //             div.appendChild(table);
                
    //             // ===== دکمه بستن =====
    //             let Xmark = document.createElement('div');
    //             Xmark.className = `absolute -top-3 -right-3 w-10 h-10 bg-[#c9a04e] hover:bg-[#b8923a] text-white font-bold text-lg rounded-full flex items-center justify-center cursor-pointer shadow-lg transition-all duration-300 hover:scale-110 hover:rotate-90`;
    //             Xmark.innerHTML = '✕';
    //             Xmark.setAttribute('onclick', "hiddenList(this)");
    //             div.appendChild(Xmark);
                
    //             // ===== اضافه کردن به صفحه =====
    //             document.body.appendChild(div);
    //         },
    //         error: function() {
    //             alert('خطا در دریافت اطلاعات کاربران');
    //         }
    //     })
    // }
    function showRoles(id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        })
        
        $.ajax({
            url: "{{url('permision/get/permision/roles/')}}/" + id,
            type: "get",
            dataType: "json",
            success: function(data) {
                console.log(data)
                
                let div = document.createElement('div');
                // ===== پالت رنگی مترونیک با تیلویند =====
                div.classList = `absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-8/12 max-w-2xl mx-auto rounded-2xl shadow-2xl flex flex-col p-6 gap-4 items-center z-50`;
                div.style.background = 'var(--metronic-content-bg)';
                div.style.border = '4px solid var(--metronic-dark)';
                
                // ===== هدر جدول =====
                let table = document.createElement('table');
                table.className = `w-full border-collapse`;
                table.id = "userTable";
                
                let thead = document.createElement('thead');
                thead.className = `text-white rounded-t-xl`;
                thead.style.background = 'var(--metronic-dark)';
                
                let headerRow = document.createElement('tr');
                headerRow.className = `flex justify-around gap-4 p-3`;
                headerRow.innerHTML = `
                    <th class="text-sm font-bold" style="color: var(--metronic-content-bg);"> نقش ها </th>
                `;
                thead.appendChild(headerRow);
                table.appendChild(thead);
                
                // ===== بدنه جدول =====
                let tbody = document.createElement('tbody');
                tbody.className = `divide-y`;
                tbody.style.borderColor = 'var(--metronic-border)';
                
                data.forEach(role => {
                    let row = document.createElement('tr');
                    row.className = `flex justify-around gap-4 p-3 transition-colors duration-200`;
                    row.style.color = 'var(--metronic-dark)';
                    row.innerHTML = `
                        <td class="text-sm font-semibold text-center" style="color: var(--metronic-dark);">${role.fa_title}</td>
                    `;
                    tbody.appendChild(row);
                });
                
                table.appendChild(tbody);
                div.appendChild(table);
                
                // ===== دکمه بستن =====
                let Xmark = document.createElement('div');
                Xmark.className = `absolute -top-3 -right-3 w-10 h-10 text-white font-bold text-lg rounded-full flex items-center justify-center cursor-pointer shadow-lg transition-all duration-300 hover:scale-110 hover:rotate-90`;
                Xmark.style.background = 'var(--metronic-blue)';
                Xmark.innerHTML = '✕';
                Xmark.setAttribute('onclick', "hiddenList(this)");
                div.appendChild(Xmark);
                
                // ===== اضافه کردن به صفحه =====
                document.body.appendChild(div);
            },
            error: function() {
                alert('خطا در دریافت اطلاعات کاربران');
            }
        })
    }
    function hiddenList(el){
        el.parentElement.remove();
    }

    
</script>

@endsection