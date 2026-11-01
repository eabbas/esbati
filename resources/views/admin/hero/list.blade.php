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
        overflow: hidden;
    }

    /* ===== هدر ===== */
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

    /* ===== جدول ===== */
    .metronic-table-wrap {
        overflow-x: auto;
    }

    .metronic-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 700px;
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

    /* ===== وضعیت ===== */
    .metronic-status {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
    }
    .metronic-status.active {
        background: var(--metronic-blue);
        color: #fff;
    }
    .metronic-status.inactive {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
    }

    .metronic-status .dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        display: inline-block;
    }
    .metronic-status.active .dot {
        background: #fff;
        animation: pulse-dot 2s infinite;
    }
    .metronic-status.inactive .dot {
        background: var(--metronic-text-dark);
    }

    @keyframes pulse-dot {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.3; transform: scale(0.8); }
    }

    /* ===== تصاویر ===== */
    .metronic-images-group {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .metronic-images-group .image-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 2px;
    }

    .metronic-images-group .image-wrapper .image-label {
        color: var(--metronic-text-dark);
        font-size: 8px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.3px;
    }

    .metronic-thumb {
        width: 45px;
        height: 45px;
        border-radius: 8px;
        object-fit: cover;
        border: 2px solid var(--metronic-border);
        transition: all 0.3s ease;
    }
    .metronic-thumb:hover {
        border-color: var(--metronic-blue);
        transform: scale(1.1);
    }

    .metronic-thumb-placeholder {
        width: 45px;
        height: 45px;
        border-radius: 8px;
        background: var(--metronic-shadow);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        border: 2px solid var(--metronic-border);
        color: var(--metronic-text-dark);
    }

    .metronic-images-group .divider {
        width: 1px;
        height: 35px;
        background: var(--metronic-border);
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
            min-width: 600px;
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
            width: 35px;
            height: 35px;
            font-size: 14px;
        }
        .metronic-table-header h2 {
            font-size: 16px;
        }
        .metronic-counter {
            font-size: 11px;
            padding: 3px 10px;
        }
    }

    @media (max-width: 480px) {
        .metronic-table {
            min-width: 480px;
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
            font-size: 10px;
            border-radius: 6px;
        }
        .metronic-status {
            padding: 2px 8px;
            font-size: 10px;
        }
        .metronic-badge {
            padding: 2px 8px;
            font-size: 10px;
        }
        .metronic-images-group .image-wrapper .image-label {
            font-size: 6px;
        }
        .metronic-images-group .divider {
            height: 25px;
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
                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/>
                        <polyline points="17 21 17 13 7 13 7 21"/>
                        <polyline points="7 3 7 8 15 8"/>
                    </svg>
                </div>
                <div>
                    <h2>لیست هیروها</h2>
                    <div class="subtitle">مدیریت و مشاهده تمام هیروهای سایت</div>
                </div>
            </div>
            <span class="metronic-counter">
                <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
                {{ count($heros) }} هیرو
            </span>
        </div>

        <!-- ===== جدول ===== -->
        <div class="metronic-table-wrap">
            <table class="metronic-table">
                <thead>
                    <tr>
                        <th style="width:50px;">#</th>
                        <th style="min-width:110px;">تصاویر</th>
                        <th>عنوان</th>
                        <th class="hidden sm:table-cell">خلاصه</th>
                        <th class="hidden lg:table-cell">آدرس</th>
                        <th class="hidden sm:table-cell">وضعیت</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($heros as $hero)
                    <tr>
                        <td>
                            <span class="metronic-badge">#{{$hero->id}}</span>
                        </td>
                        <td>
                            <div class="metronic-images-group">
                                <div class="image-wrapper">
                                    <span class="image-label">پس‌زمینه</span>
                                    @if($hero->background_image_path)
                                        <img class="metronic-thumb" src="{{asset('storage/'.$hero->background_image_path)}}" alt="bg">
                                    @else
                                        <div class="metronic-thumb-placeholder">🌄</div>
                                    @endif
                                </div>
                                <span class="divider"></span>
                                <div class="image-wrapper">
                                    <span class="image-label">هیرو</span>
                                    @if($hero->hero_image_path)
                                        <img class="metronic-thumb" src="{{asset('storage/'.$hero->hero_image_path)}}" alt="hero">
                                    @else
                                        <div class="metronic-thumb-placeholder">⭐</div>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="font-semibold">{{$hero->title}}</div>
                            <div class="text-xs sm:hidden" style="color: var(--metronic-text-dark);">
                                @if($hero->summary)
                                    {{ Str::limit($hero->summary, 20) }}
                                @else
                                    —
                                @endif
                            </div>
                        </td>
                        <td class="hidden sm:table-cell" style="color: var(--metronic-text-dark);">
                            @if($hero->summary)
                                {{ Str::limit($hero->summary, 30) }}
                            @else
                                —
                            @endif
                        </td>
                        <td class="hidden lg:table-cell" style="color: var(--metronic-text-dark);">
                            @if($hero->addres)
                                {{$hero->addres}}
                            @else
                                —
                            @endif
                        </td>
                        <td class="hidden sm:table-cell">
                            @if($hero->is_active)
                                <span class="metronic-status active">
                                    <span class="dot"></span>
                                    فعال
                                </span>
                            @else
                                <span class="metronic-status inactive">
                                    <span class="dot"></span>
                                    غیرفعال
                                </span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">
                            <div class="metronic-empty">
                                <span class="icon">🖼️</span>
                                <h3>هیچ هیرویی یافت نشد</h3>
                                <p>برای شروع، یک هیرو جدید ایجاد کنید</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- ===== فوتر ===== -->
        <div class="metronic-table-footer">
            <span>تعداد کل: <strong>{{ count($heros) }}</strong> هیرو</span>
            <span>آخرین بروزرسانی: <strong>{{ now()->format('Y/m/d H:i') }}</strong></span>
        </div>

    </div>
</div>

@endsection