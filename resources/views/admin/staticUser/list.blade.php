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
        --metronic-blue: #1B84FF;
    }

    /* ===== کارت اصلی ===== */
    .metronic-table-card {
        background: var(--metronic-content-bg);
        border: 1px solid var(--metronic-border);
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(13,14,18,0.03);
        transition: all 0.3s ease;
        overflow: hidden;
    }
    .metronic-table-card:hover {
        box-shadow: 0 8px 40px rgba(13,14,18,0.06);
    }

    /* ===== هدر جدول ===== */
    .metronic-table-header {
        background: var(--metronic-shadow);
        border-bottom: 2px solid var(--metronic-border);
        padding: 16px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 12px;
    }

    .metronic-table-header .title-section {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .metronic-table-header .header-icon {
        width: 40px;
        height: 40px;
        background: var(--metronic-blue);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 18px;
    }

    .metronic-table-header h2 {
        color: var(--metronic-dark);
        font-size: 18px;
        font-weight: 700;
        margin: 0;
    }

    .metronic-table-header .subtitle {
        color: var(--metronic-text-dark);
        font-size: 13px;
    }

    /* ===== شمارنده ===== */
    .metronic-counter {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        font-size: 12px;
        font-weight: 700;
        padding: 4px 14px;
        border-radius: 50px;
        border: 1px solid var(--metronic-border);
    }

    /* ===== دکمه اضافه کردن ===== */
    .metronic-add-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 8px 16px;
        background: var(--metronic-blue);
        color: #fff;
        border-radius: 10px;
        font-weight: 600;
        font-size: 13px;
        transition: all 0.3s ease;
        text-decoration: none;
        border: none;
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.15);
    }
    .metronic-add-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(27, 132, 255, 0.25);
        color: #fff;
    }
    .metronic-add-btn:active {
        transform: translateY(0) scale(0.97);
    }

    /* ===== جدول ===== */
    .metronic-table-wrap {
        overflow-x: auto;
    }
    .metronic-table-wrap::-webkit-scrollbar {
        height: 4px;
    }
    .metronic-table-wrap::-webkit-scrollbar-track {
        background: transparent;
    }
    .metronic-table-wrap::-webkit-scrollbar-thumb {
        background: var(--metronic-text-dark);
        border-radius: 10px;
    }

    .metronic-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 600px;
    }

    .metronic-table thead th {
        color: var(--metronic-text-dark);
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 12px 16px;
        text-align: right;
        border-bottom: 2px solid var(--metronic-border);
    }

    .metronic-table tbody tr {
        border-bottom: 1px solid var(--metronic-border);
        transition: all 0.3s ease;
    }
    .metronic-table tbody tr:hover {
        background: var(--metronic-shadow);
    }
    .metronic-table tbody tr:last-child {
        border-bottom: none;
    }

    .metronic-table tbody td {
        padding: 12px 16px;
        color: var(--metronic-dark);
        font-size: 13px;
        vertical-align: middle;
    }

    /* ===== بج ===== */
    .metronic-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 12px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border: 1px solid var(--metronic-border);
    }

    /* ===== تصویر ===== */
    .metronic-thumb {
        width: 50px;
        height: 50px;
        border-radius: 10px;
        object-fit: cover;
        border: 2px solid var(--metronic-border);
        transition: all 0.3s ease;
    }
    .metronic-thumb:hover {
        border-color: var(--metronic-blue);
        transform: scale(1.05);
    }

    .metronic-thumb-placeholder {
        width: 50px;
        height: 50px;
        border-radius: 10px;
        background: var(--metronic-shadow);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        border: 2px solid var(--metronic-border);
        color: var(--metronic-text-dark);
    }

    /* ===== دکمه‌های اکشن ===== */
    .metronic-action-group {
        display: flex;
        align-items: center;
        gap: 6px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .metronic-action-btn {
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
    .metronic-action-btn:hover {
        transform: translateY(-2px);
    }
    .metronic-action-btn:active {
        transform: translateY(0) scale(0.95);
    }

    .metronic-action-btn.view {
        color: var(--metronic-text-dark);
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
    }
    .metronic-action-btn.view:hover {
        background: var(--metronic-blue);
        color: #fff;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.25);
    }

    .metronic-action-btn.edit {
        color: #fff;
        background: var(--metronic-blue);
        border-color: var(--metronic-blue);
    }
    .metronic-action-btn.edit:hover {
        background: var(--metronic-blue);
        color: #fff;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.25);
    }

    .metronic-action-btn.delete {
        color: var(--metronic-dark);
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
    }
    .metronic-action-btn.delete:hover {
        background: var(--metronic-dark);
        color: #fff;
        box-shadow: 0 4px 16px rgba(13, 14, 18, 0.25);
    }

    /* ===== خالی ===== */
    .metronic-empty {
        padding: 60px 20px;
        text-align: center;
    }
    .metronic-empty .icon {
        font-size: 48px;
        display: block;
        margin-bottom: 12px;
        color: var(--metronic-text-dark);
    }
    .metronic-empty h3 {
        color: var(--metronic-dark);
        font-size: 18px;
        font-weight: 600;
    }
    .metronic-empty p {
        color: var(--metronic-text-dark);
        font-size: 14px;
        margin-top: 4px;
    }

    /* ===== فوتر ===== */
    .metronic-table-footer {
        background: var(--metronic-shadow);
        border-top: 2px solid var(--metronic-border);
        padding: 12px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 8px;
        font-size: 12px;
        color: var(--metronic-text-dark);
    }
    .metronic-table-footer strong {
        color: var(--metronic-dark);
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 768px) {
        .metronic-table {
            min-width: 500px;
        }
        .metronic-table thead th {
            padding: 8px 10px;
            font-size: 10px;
        }
        .metronic-table tbody td {
            padding: 8px 10px;
            font-size: 12px;
        }
        .metronic-thumb,
        .metronic-thumb-placeholder {
            width: 36px;
            height: 36px;
            font-size: 16px;
        }
        .metronic-table-header h2 {
            font-size: 16px;
        }
        .metronic-counter {
            font-size: 11px;
            padding: 3px 10px;
        }
        .metronic-action-btn span {
            display: none;
        }
        .metronic-add-btn {
            padding: 6px 12px;
            font-size: 12px;
        }
    }

    @media (max-width: 480px) {
        .metronic-table {
            min-width: 400px;
        }
        .metronic-table thead th {
            padding: 6px 6px;
            font-size: 9px;
        }
        .metronic-table tbody td {
            padding: 6px 6px;
            font-size: 11px;
        }
        .metronic-thumb,
        .metronic-thumb-placeholder {
            width: 28px;
            height: 28px;
            font-size: 12px;
            border-radius: 6px;
        }
        .metronic-action-btn {
            padding: 4px 7px;
            font-size: 10px;
        }
        .metronic-badge {
            padding: 2px 8px;
            font-size: 10px;
        }
    }
</style>

<div class="w-full py-4 px-4">
    <div class="metronic-table-card">

        <!-- ===== هدر ===== -->
        <div class="metronic-table-header">
            <div class="title-section">
                <div class="header-icon">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M4 7h16M4 12h16M4 17h10"/>
                        <rect x="2" y="3" width="20" height="18" rx="2"/>
                    </svg>
                </div>
                <div>
                    <h2>لیست اطلاعات کاربر های استاتیک</h2>
                </div>
            </div>
            <div class="flex items-center gap-3 flex-wrap">
                <span class="metronic-counter">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                    {{ count($users) }} مورد
                </span>
            </div>
        </div>

        <!-- ===== جدول ===== -->
        <div class="metronic-table-wrap">
            <table class="metronic-table">
                <thead>
                    <tr>
                        <th style="width:50px;">#</th>
                        <th>نام</th>
                        <th class="hidden sm:table-cell">نقش</th>
                        <th class="text-center" style="min-width:140px;">پیام</th>
                        <th class="text-center" style="min-width:140px;">عملیات</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            <span class="metronic-badge">#{{$user->id}}</span>
                        </td>
                        <td>
                            <div class="font-semibold">{{$user->name}}</div>
                        </td>
                        <td>
                            <div class="font-semibold">{{$user->role}}</div>
                        </td>
                        <td>
                            <div class="font-semibold">{{$user->message}}</div>
                        </td>
                        <td class='flex gap-2'>
                            <a class='metronic-action-btn bg-green-300 text-white p-1 transition-all duration-500 hover:bg-green-500' href="{{route('staticUser.edit',['staticUser'=>$user->id])}}"> ویرایش  </a>
                            <a class='metronic-action-btn bg-green-300 text-white p-1 transition-all duration-500 hover:bg-green-500' href="{{route('staticUser.delete',['staticUser'=>$user->id])}}"> حذف  </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- ===== فوتر ===== -->
        <div class="metronic-table-footer">
            <span>تعداد کل: <strong>{{ count($users) }}</strong> مورد</span>
            <span>آخرین بروزرسانی: <strong>{{ now()->format('Y/m/d H:i') }}</strong></span>
        </div>

    </div>
</div>

@endsection