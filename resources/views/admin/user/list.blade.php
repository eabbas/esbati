@extends('dashboard')

@section('title','لیست کاربران')
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
        cursor: pointer;
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

    /* ===== آواتار ===== */
    .vafadar-avatar {
        width: 60px;
        height: 60px;
        border-radius: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 16px;
        color: #fff;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }
    .vafadar-avatar:hover {
        transform: scale(1.08);
    }
    .vafadar-avatar.blue {
        background: var(--metronic-blue);
    }
    .vafadar-avatar.green {
        background: var(--metronic-blue);
    }
    .vafadar-avatar.purple {
        background: var(--metronic-blue);
    }
    .vafadar-avatar.orange {
        background: var(--metronic-blue);
    }
    .vafadar-avatar.pink {
        background: var(--metronic-blue);
    }
    .vafadar-avatar.teal {
        background: var(--metronic-blue);
    }
    .vafadar-avatar.rose {
        background: var(--metronic-blue);
    }
    .vafadar-avatar.indigo {
        background: var(--metronic-blue);
    }

    /* ===== دکمه‌های اکشن ===== */
    .vafadar-action-group {
        display: flex;
        align-items: center;
        gap: 6px;
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
        position: relative;
        overflow: hidden;
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
        color: var(--metronic-dark);
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
    }
    .vafadar-action-btn.delete:hover {
        background: var(--metronic-dark);
        color: #fff;
        box-shadow: 0 4px 16px rgba(13, 14, 18, 0.25);
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
        .vafadar-avatar {
            width: 34px;
            height: 34px;
            font-size: 13px;
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
        .vafadar-avatar {
            width: 28px;
            height: 28px;
            font-size: 11px;
            border-radius: 8px;
        }
    }
</style>

<div class="w-full">
    
    <!-- ===== هدر لیست ===== -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
        <div>
            <h2 class="text-xl font-bold" style="color: var(--metronic-dark);"> لیست کاربران</h2>
            <p class="text-sm mt-1" style="color: var(--metronic-text-dark);">مدیریت و مشاهده اطلاعات کاربران سیستم</p>
        </div>
        <div class="flex items-center gap-3 flex-wrap">
            <span class="vafadar-counter">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
                {{ count($users) }} کاربر
            </span>
            <a href="{{route('user.create')}}" class="vafadar-add-btn">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M12 5v14M5 12h14"/>
                </svg>
                کاربر جدید
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
                <input type="text" id="searchUser" placeholder="جستجو بر اساس نام، شماره یا ایمیل..." class="vafadar-search">
            </div>
        </div>

        <!-- ===== جدول ===== -->
        <div class="vafadar-table-wrap">
            <table class="w-full" id="userTable">
                <thead class="vafadar-table-header">
                    <tr>
                        <th>کاربر</th>
                        <th class="hidden sm:table-cell"> نام </th>
                        <th class="hidden sm:table-cell"> فامیلی </th>
                        <th class="hidden sm:table-cell">شماره موبایل</th>
                        <th class="hidden md:table-cell">ایمیل</th>
                        <th class="text-center" style="min-width: 160px;">عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                    <tr class="vafadar-table-row" data-name="{{$user->name}} {{$user->family}}" data-phone="{{$user->phoneNumber}}" data-email="{{$user->email}}">
                        <td>
                            <div class="flex items-center gap-3">
                                @php
                                    $colors = ['blue', 'green', 'purple', 'orange', 'pink', 'teal', 'rose', 'indigo'];
                                    $color = $colors[array_rand($colors)];
                                    $initial = mb_substr($user->name, 0, 1);
                                    $statuses = ['active', 'inactive', 'pending'];
                                    $status = $statuses[array_rand($statuses)];
                                @endphp
                                <div class="vafadar-avatar overflow-hidden {{$color}}">
                                    @if($user->path!=null)
                                    <a href="{{route('user.single',['user'=>$user->id])}}"><img class='w-full rounded-full' src="{{asset('storage/user_medias/'.$user->path)}}" alt=""></a>
                                    @else
                                        {{$initial}}
                                    @endif
                                </div>
                                <div>
                                    <div class="font-semibold" style="color: var(--metronic-dark);">{{$user->name}} {{$user->family}}</div>
                                    <div class="text-xs sm:hidden" style="color: var(--metronic-text-dark);">{{$user->phoneNumber}}</div>
                                </div>
                            </div>
                        </td>
                        <td class="hidden sm:table-cell" style="color: var(--metronic-text-dark);">{{$user->name}}</td>
                        <td class="hidden sm:table-cell" style="color: var(--metronic-text-dark);">{{$user->family}}</td>

                        <td class="hidden sm:table-cell" style="color: var(--metronic-text-dark);">{{$user->phoneNumber}}</td>
                        <td class="hidden md:table-cell" style="color: var(--metronic-text-dark);">{{$user->email}}</td>

                        <td>
                            <div class="vafadar-action-group justify-center">
                                <a href="{{route('user.single',['user'=>$user->id])}}" class="vafadar-action-btn view" title="مشاهده پروفایل">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                    <span class="hidden sm:inline">مشاهده</span>
                                </a>
                                <a href="{{route('user.edit',['user'=>$user->id])}}" class="vafadar-action-btn edit" title="ویرایش کاربر">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                    </svg>
                                    <span class="hidden sm:inline">ویرایش</span>
                                </a>
                                <a href="{{route('user.delete',['user'=>$user->id])}}" class="vafadar-action-btn delete" title="حذف کاربر" onclick="return confirm('آیا از حذف کاربر «{{$user->name}} {{$user->family}}» مطمئن هستید؟')">
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
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                                <h3>هیچ کاربری یافت نشد</h3>
                                <p>برای شروع، روی دکمه «کاربر جدید» کلیک کنید</p>
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
                <span>تعداد کل: <strong style="color: var(--metronic-dark);">{{ count($users) }}</strong> کاربر</span>
                <span>آخرین بروزرسانی: <strong style="color: var(--metronic-dark);">{{ now()->format('Y/m/d H:i') }}</strong></span>
            </div>
        </div>

    </div>
</div>

<!-- ============================================================ -->
<!-- ===== بخش پروفایل کاربر (نمایش جزئیات) ===== -->
<!-- ============================================================ -->

@if(isset($selectedUser))
<div class="mt-8">
    <div class="vafadar-table-card">
        
        <!-- ===== هدر پروفایل ===== -->
        <div class="vafadar-table-header px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" style="fill: var(--metronic-blue);">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                    <h3 class="text-base font-bold" style="color: var(--metronic-dark);">پروفایل کاربر</h3>
                </div>
                <a href="{{route('user.list')}}" class="text-sm" style="color: var(--metronic-blue); text-decoration: none;">بازگشت به لیست</a>
            </div>
        </div>

        <!-- ===== محتوای پروفایل ===== -->
        <div class="p-6">
            <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
                
                <!-- آواتار بزرگ -->
                @php
                    $colors = ['blue', 'green', 'purple', 'orange', 'pink', 'teal', 'rose', 'indigo'];
                    $color = $colors[array_rand($colors)];
                    $initial = mb_substr($selectedUser->name, 0, 1);
                @endphp
                <div class="vafadar-avatar {{$color}}" style="width: 80px; height: 80px; font-size: 32px; border-radius: 20px;">
                    {{$initial}}
                </div>

                <!-- اطلاعات -->
                <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-4 w-full">
                    <div>
                        <p class="text-xs" style="color: var(--metronic-text-dark);">نام کامل</p>
                        <p class="text-base font-semibold" style="color: var(--metronic-dark);">{{$selectedUser->name}} {{$selectedUser->family}}</p>
                    </div>
                    <div>
                        <p class="text-xs" style="color: var(--metronic-text-dark);">شماره موبایل</p>
                        <p class="text-base font-semibold" style="color: var(--metronic-dark);">{{$selectedUser->phoneNumber}}</p>
                    </div>
                    <div>
                        <p class="text-xs" style="color: var(--metronic-text-dark);">ایمیل</p>
                        <p class="text-base font-semibold" style="color: var(--metronic-dark);">{{$selectedUser->email}}</p>
                    </div>
                    <div>
                        <p class="text-xs" style="color: var(--metronic-text-dark);">نقش‌ها</p>
                        <div class="flex flex-wrap gap-1 mt-1">
                            @foreach($selectedUser->roles as $role)
                                <span class="text-xs px-3 py-1 rounded-full" style="background: var(--metronic-shadow); color: var(--metronic-text-dark);">{{$role->fa_title}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- دکمه‌های اکشن -->
                <div class="flex flex-col sm:flex-row gap-2 w-full md:w-auto">
                    <a href="{{route('user.edit',['user'=>$selectedUser->id])}}" class="vafadar-action-btn edit justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                        </svg>
                        ویرایش
                    </a>
                    <a href="{{route('user.delete',['user'=>$selectedUser->id])}}" class="vafadar-action-btn delete justify-center" onclick="return confirm('آیا از حذف این کاربر مطمئن هستید؟')">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 6h18"/>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                        </svg>
                        حذف
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endif

<!-- ===== اسکریپت جستجو ===== -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchUser');
        const table = document.getElementById('userTable');
        const rows = table.querySelectorAll('tbody tr');

        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const query = this.value.toLowerCase().trim();

                rows.forEach(row => {
                    const name = row.getAttribute('data-name')?.toLowerCase() || '';
                    const phone = row.getAttribute('data-phone')?.toLowerCase() || '';
                    const email = row.getAttribute('data-email')?.toLowerCase() || '';

                    const match = name.includes(query) || phone.includes(query) || email.includes(query);
                    row.style.display = match ? '' : 'none';
                });
            });
        }
    });
</script>

@endsection