@extends('dashboard')

@section('title','لیست آدرس ها')
@section('content')

<style>
    /* ===== پالت رنگی مترونیک (Metronic) - بدون رنگ سیاه ===== */
    :root {
        --metronic-content-bg: #FCFCFC;
        --metronic-form-bg: #FFFFFF;
        --metronic-shadow: #F5F5F5;
        --metronic-border: #DBDFE9;
        --metronic-text-dark: #9A9CAE;
        --metronic-text-value: #4A5568;
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
        background: var(--metronic-content-bg);
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
        padding: 14px 16px;
        text-align: right;
        white-space: nowrap;
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
        padding: 12px 16px;
        color: var(--metronic-text-value);
        font-size: 13px;
        vertical-align: middle;
    }
    .dark .vafadar-table-row td {
        color: var(--metronic-content-bg);
    }

    /* ===== بج آدرس ===== */
    .vafadar-address-badge {
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
    .dark .vafadar-address-badge {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border-color: var(--metronic-border);
    }

    /* ===== وضعیت ===== */
    .vafadar-status {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
    }
    .vafadar-status.active {
        background: var(--metronic-blue);
        color: #fff;
    }
    .vafadar-status.inactive {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
    }
    .dark .vafadar-status.active {
        background: var(--metronic-blue);
        color: #fff;
    }
    .dark .vafadar-status.inactive {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
    }

    .vafadar-status .dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        display: inline-block;
    }
    .vafadar-status.active .dot {
        background: #fff;
        animation: pulse-dot 2s infinite;
    }
    .vafadar-status.inactive .dot {
        background: var(--metronic-text-dark);
    }

    @keyframes pulse-dot {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.3; transform: scale(0.8); }
    }

    /* ===== دکمه‌های اکشن ===== */
    .vafadar-action-group {
        display: flex;
        align-items: center;
        gap: 6px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .vafadar-action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        padding: 6px 12px;
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

    .vafadar-action-btn.view {
        color: var(--metronic-text-dark);
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
    }
    .vafadar-action-btn.view:hover {
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
        color: var(--metronic-text-value);
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
    }
    .vafadar-action-btn.delete:hover {
        background: var(--metronic-text-value);
        color: #fff;
        box-shadow: 0 4px 16px rgba(74, 85, 104, 0.25);
    }

    .dark .vafadar-action-btn.view {
        color: var(--metronic-text-dark);
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
    }
    .dark .vafadar-action-btn.view:hover {
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
        background: var(--metronic-text-value);
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
        color: var(--metronic-text-value);
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
        color: var(--metronic-text-value);
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

    /* ===== تگ والد ===== */
    .vafadar-parent-tag {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        padding: 2px 10px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 600;
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border: 1px solid var(--metronic-border);
    }
    .dark .vafadar-parent-tag {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border-color: var(--metronic-border);
    }
    .vafadar-parent-tag.root {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border-color: var(--metronic-border);
    }
    .dark .vafadar-parent-tag.root {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border-color: var(--metronic-border);
    }

    /* ===== فرم ویرایش (مودال) ===== */
    #addressForm {
        background: var(--metronic-form-bg) !important;
        border: 2px solid var(--metronic-border) !important;
        border-radius: 20px !important;
        box-shadow: 0 20px 60px rgba(74, 85, 104, 0.15) !important;
        padding: 24px !important;
        width: 90% !important;
        max-width: 420px !important;
        height: auto !important;
        display: flex !important;
        flex-direction: column !important;
        gap: 12px !important;
    }
    #addressForm textarea {
        width: 100% !important;
        padding: 10px 14px !important;
        background: var(--metronic-shadow) !important;
        border: 1.5px solid var(--metronic-border) !important;
        border-radius: 12px !important;
        color: var(--metronic-text-value) !important;
        font-size: 14px !important;
        outline: none !important;
        transition: all 0.3s ease !important;
        min-height: 80px !important;
    }
    #addressForm textarea:focus {
        border-color: var(--metronic-blue) !important;
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.06) !important;
        background: var(--metronic-form-bg) !important;
    }
    #addressForm select {
        width: 100% !important;
        padding: 10px 14px !important;
        background: var(--metronic-shadow) !important;
        border: 1.5px solid var(--metronic-border) !important;
        border-radius: 12px !important;
        color: var(--metronic-text-value) !important;
        font-size: 14px !important;
        outline: none !important;
        transition: all 0.3s ease !important;
        appearance: none !important;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%239A9CAE' d='M6 8L1 3h10z'/%3E%3C/svg%3E") !important;
        background-repeat: no-repeat !important;
        background-position: left 14px center !important;
        cursor: pointer !important;
    }
    #addressForm select:focus {
        border-color: var(--metronic-blue) !important;
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.06) !important;
        background: var(--metronic-form-bg) !important;
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 768px) {
        .vafadar-table-row td {
            padding: 10px 12px;
            font-size: 12px;
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
        .vafadar-counter {
            font-size: 12px;
            padding: 4px 12px;
        }
        .vafadar-add-btn {
            padding: 8px 14px;
            font-size: 13px;
        }
    }

    @media (max-width: 480px) {
        .vafadar-table-row td {
            padding: 8px 8px;
            font-size: 11px;
        }
        .vafadar-table-header th {
            padding: 8px 8px;
            font-size: 9px;
        }
        .vafadar-action-btn {
            padding: 4px 7px;
            font-size: 10px;
        }
        #addressForm {
            padding: 16px !important;
        }
    }


    /* ===== فرم ویرایش آدرس ===== */
    #addressForm {
        background: var(--metronic-form-bg) !important;
        border: 2px solid var(--metronic-border) !important;
        border-radius: 20px !important;
        box-shadow: 0 20px 60px rgba(74, 85, 104, 0.15) !important;
        padding: 24px !important;
        width: 90% !important;
        max-width: 460px !important;
        height: auto !important;
        display: flex !important;
        flex-direction: column !important;
        gap: 14px !important;
        max-height: 90vh !important;
    }

    /* ===== گروه‌های فرم ===== */
    #addressForm .address-form-group {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    #addressForm .address-form-group label {
        color: var(--metronic-text-value);
        font-size: 13px;
        font-weight: 600;
        padding-right: 4px;
    }

    /* ===== همه فیلدها (تکست‌اریا، سلکت، اینپوت) ===== */
    #addressForm textarea,
    #addressForm select,
    #addressForm input {
        width: 100% !important;
        padding: 10px 14px !important;
        background: var(--metronic-shadow) !important;
        border: 1.5px solid var(--metronic-border) !important;
        border-radius: 12px !important;
        color: var(--metronic-text-value) !important;
        font-size: 14px !important;
        outline: none !important;
        transition: all 0.3s ease !important;
        font-family: inherit !important;
    }

    /* ===== تکست‌اریا ===== */
    #addressForm textarea {
        min-height: 80px !important;
        resize: vertical !important;
    }

    /* ===== سلکت ===== */
    #addressForm select {
        appearance: none !important;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%239A9CAE' d='M6 8L1 3h10z'/%3E%3C/svg%3E") !important;
        background-repeat: no-repeat !important;
        background-position: left 14px center !important;
        cursor: pointer !important;
    }

    /* ===== فوکوس همه فیلدها ===== */
    #addressForm textarea:focus,
    #addressForm select:focus,
    #addressForm input:focus {
        border-color: var(--metronic-blue) !important;
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.06) !important;
        background: var(--metronic-form-bg) !important;
    }

    /* ===== پلیس‌هولدرها ===== */
    #addressForm input::placeholder,
    #addressForm textarea::placeholder {
        color: var(--metronic-text-dark) !important;
        font-size: 13px !important;
    }
</style>

<div id='addresses_list' class="w-full">
    
    <!-- ===== هدر لیست ===== -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6 ">
        <div>
            <h2 class="text-xl font-bold" style="color: var(--metronic-text-value);"> لیست آدرس ها</h2>
            <p class="text-sm mt-1" style="color: var(--metronic-text-dark);">مدیریت آدرس های محصولات</p>
        </div>
        <div class="flex items-center gap-3 flex-wrap">
            <a href="{{route('address.create')}}" class="vafadar-add-btn">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M12 5v14M5 12h14"/>
                </svg>
                آدرس جدید
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
                <input type="text" id="searchCategory" placeholder="جستجوی آدرس ها..." class="vafadar-search">
            </div>
        </div>

        <!-- ===== جدول ===== -->
        <div class="vafadar-table-wrap">
            <table class="w-full" id="categoryTable">
                <thead class="vafadar-table-header">
                    <tr>
                        <th style="width:50px;">#</th>
                        <th class='table-cell'>عنوان</th>
                        <th class='table-cell'>موقعیت</th>
                        <th class="table-cell">شهر</th>
                        <th class="table-cell">استان</th>
                        <th class="table-cell">تلفن</th>
                        <th class="table-cell">کد پستی</th>
                        <th class="table-cell">توضیحات</th>
                        <th class="text-center" style="min-width:140px;">عملیات</th>
                    </tr>
                </thead>
                <tbody id="categoryTableBody">
                    @forelse($addresses as $address)
                    <tr class="vafadar-table-row" data-id="{{$address->id}}" data-title="{{$address->title}}" data-slug="{{$address->slug}}">
                        <td>
                            <span class="vafadar-address-badge">#{{$address->id}}</span>
                        </td>
                        <td>
                            <div class="font-semibold" style="color: var(--metronic-text-value);">{{$address->title}}</div>
                        </td>
                        <td>
                            <div class="font-semibold" style="color: var(--metronic-text-value);">{{$address->location}}</div>
                        </td>
                        <td class="hidden lg:table-cell">
                            <div class="font-semibold" style="color: var(--metronic-text-value);">{{$address->city}}</div>
                        </td>
                        <td class="hidden lg:table-cell">
                            <div class="font-semibold" style="color: var(--metronic-text-value);">{{$address->province}}</div>
                        </td>
                        <td class="hidden lg:table-cell">
                            <div class="font-semibold" style="color: var(--metronic-text-value);">{{$address->phoneNumber}}</div>
                        </td>
                        <td class="hidden lg:table-cell">
                            <div class="font-semibold" style="color: var(--metronic-text-value);">{{$address->postalCode}}</div>
                        </td>
                        <td class="hidden lg:table-cell">
                            <div class="font-semibold" style="color: var(--metronic-text-value);">{{$address->description}}</div>
                        </td>
                        <td>
                            <div class="vafadar-action-group">
                                <div onclick='showEditForm(this,{{$address->id}})' class="vafadar-action-btn edit" title="ویرایش آدرس">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                    </svg>
                                    <span class="hidden sm:inline">ویرایش</span>
                                </div>
                                <a href="{{route('address.delete',['address'=>$address->id])}}" class="vafadar-action-btn delete" title="حذف آدرس" onclick="return confirm('آیا از حذف آدرس «{{$address->title}}» مطمئن هستید؟')">
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
                        <td colspan="8">
                            <div class="vafadar-empty">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                                    <path d="M4 7h16M4 12h16M4 17h10"/>
                                    <rect x="2" y="3" width="20" height="18" rx="2"/>
                                </svg>
                                <h3>هیچ آدرسی یافت نشد</h3>
                                <p>برای شروع، روی دکمه «آدرس جدید» کلیک کنید</p>
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
                <span>تعداد کل: <strong style="color: var(--metronic-text-value);">{{ count($addresses) }}</strong> آدرس</span>
                <span>آخرین بروزرسانی: <strong style="color: var(--metronic-text-value);">{{ now()->format('Y/m/d H:i') }}</strong></span>
            </div>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchCategory');
        const table = document.getElementById('categoryTable');
        const rows = table.querySelectorAll('tbody tr');

        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const query = this.value.toLowerCase().trim();

                rows.forEach(row => {
                    const title = row.getAttribute('data-title')?.toLowerCase() || '';
                    const slug = row.getAttribute('data-slug')?.toLowerCase() || '';
                    const id = row.getAttribute('data-id') || '';

                    const match = title.includes(query) || slug.includes(query) || id.includes(query);
                    row.style.display = match ? '' : 'none';
                });
            });
        }
    });
    function getCities(){
        let province=document.getElementById('province');
        let cities=document.getElementById('cities');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        })
        $.ajax({
            url: "{{route('address.getCities')}}",
            type: "post",
            dataType: "json",
            data:{
                'province_id':province.value,
            },
            success: function(data) {
                console.log('xxxxxxxxx');
                cities.innerHTML='';
                data.forEach(city => {
                    cities.innerHTML+=
                    `  <option value="${city.id}">${city.title}</option>  `;
                });
            },
            error: function() {
                console.log('☢')
            }
        })
        console.log(province.value);
    }


    let addresses_list=document.getElementById('addresses_list');
    function showEditForm(el,address_id){
        window._currentEditEl=el;
        $.ajax({
            url: "{{url('address/get/address')}}/"+address_id,
            type: "get",
            dataType: "json",
            success: function(data) {
                let cities_div='';
                let provinces_div='';
                data.provinces.forEach(provincee => {
                    if(data.province_id==provincee.id){
                        provinces_div+=`<option value="${provincee.id}" selected>${provincee.title}</option>`
                    }else{
                        provinces_div+=`<option value="${provincee.id}">${provincee.title}</option>`
                    }
                });
                data.cities.forEach(city => {
                    if(data.city_id==city.id){
                        cities_div+=`<option selected value="${city.id}">${city.title}</option>`
                    }else{
                        cities_div+=`<option value="${city.id}">${city.title}</option>`
                    }
                });

                addresses_list.innerHTML+=
                `
               <div id='addressForm' class='absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-50'>
                    <div onclick="removeForm()" class='absolute bg-[#1B84FF] rounded-full py-2 px-3 cursor-pointer text-white text-center items-center justify-center flex -right-3 -top-3 shadow-lg hover:scale-110 transition-all'>X</div>
                    @csrf

                    <!-- عنوان -->
                    <div class="address-form-group">
                        <label for="title"> عنوان</label>
                        <input required type="text" id="title" placeholder="عنوان را وارد کنید" name='title' value="${data.title}" class="vafadar-input">
                    </div>
                    
                    <!-- موقعیت مکانی -->
                    <div class="address-form-group">
                        <label for="location"> موقعیت مکانی</label>
                        <textarea name="location" id="location" placeholder='موقعیت مکانی را وارد کنید...'>${data.location}</textarea>
                    </div>

                    <!-- استان -->
                    <div class="address-form-group">
                        <label for="province"> استان</label>
                        <select name="province_id" id="province" onchange="getCities()">
                        `+
                            provinces_div
                        +`
                        </select>
                    </div>

                    <!-- شهر -->
                    <div class="address-form-group">
                        <label for="cities"> شهر</label>
                        <select name="city_id" id="cities">
                        `+
                            cities_div
                        +`
                        </select>
                    </div>

                    <!-- کد پستی -->
                    <div class="address-form-group">
                        <label for="postalCode"> کد پستی</label>
                        <input required type="text" id="postalCode" placeholder="کد پستی را وارد کنید" name='postalCode' value="${data.postalCode}" class="vafadar-input">
                    </div>

                    <!-- توضیحات -->
                    <div class="address-form-group">
                        <label for="description"> توضیحات</label>
                        <input required type="text" id="description" placeholder="توضیحات را وارد کنید" name='description' value="${data.description}" class="vafadar-input">
                    </div>

                    <!-- شماره تلفن -->
                    <div class="address-form-group">
                        <label for="phoneNumber"> شماره تلفن</label>
                        <input required type="text" id="phoneNumber" placeholder="شماره تلفن را وارد کنید" name='phoneNumber' value="${data.phoneNumber}" class="vafadar-input">
                    </div>

                    <!-- دکمه ثبت -->
                    <div onclick="editAddress(${data.id})" class='bg-[#1B84FF] text-white p-2 rounded-xl cursor-pointer text-center font-semibold hover:shadow-lg hover:-translate-y-0.5 transition-all mt-2'>ثبت تغییرات</div>
                </div>
                `
            cities_div=''
            provinces_div=''
            },
            error: function() {
                console.log('☢')
            }
        })       
    }
    function removeForm(){
        document.getElementById('addressForm').remove();
    }
    function editAddress(id){
        let el = window._currentEditEl;
        let title= document.getElementById('title');
        let location= document.getElementById('location');
        let province= document.getElementById('province');
        let cities= document.getElementById('cities');
        let postalCode= document.getElementById('postalCode');
        let description= document.getElementById('description');
        let phoneNumber= document.getElementById('phoneNumber');
        if(location.value!=''){
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            })
            $.ajax({
                url: "{{url('address/update')}}/"+id,
                type: "post",
                dataType: "json",
                data:{
                    'title':title.value,
                    'location':location.value,
                    'city_id':cities.value,
                    'province':province.value,
                    'postalCode':postalCode.value,
                    'description':description.value,
                    'phoneNumber':phoneNumber.value,
                },
                success: function(data) {
                    removeForm()
                    el.parentElement.parentElement.parentElement.children[1].children[0].innerHTML=data.location;
                    el.parentElement.parentElement.parentElement.children[2].children[0].innerHTML=data.city_id;
                    el.parentElement.parentElement.parentElement.children[3].children[0].innerHTML=data.province_id;
                    el.parentElement.parentElement.parentElement.children[4].children[0].innerHTML=data.phoneNumber;
                    el.parentElement.parentElement.parentElement.children[5].children[0].innerHTML=data.postalCode;
                    el.parentElement.parentElement.parentElement.children[6].children[0].innerHTML=data.description;
                },
                error: function() {
                    console.log('☢')
                }
            })   
        }else{
            alert('آدرس را وارد کنید');
        }
    }     
</script>

@endsection