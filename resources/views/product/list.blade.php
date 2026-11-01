@extends('dashboard')
@section('title', 'productList')
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

    /* ===== هدر جدول ===== */
    .vafadar-table-header {
        background: var(--metronic-shadow);
        border-bottom: 2px solid var(--metronic-border);
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

    /* ===== ردیف‌ها ===== */
    .vafadar-table-row {
        border-bottom: 1px solid var(--metronic-border);
        transition: all 0.3s ease;
        background: var(--metronic-content-bg);
    }
    .vafadar-table-row:nth-child(even) {
        background: var(--metronic-shadow);
    }
    .vafadar-table-row:hover {
        background: var(--metronic-shadow);
        transform: translateX(-4px);
        box-shadow: 0 4px 12px rgba(13,14,18,0.04);
    }
    .vafadar-table-row:last-child {
        border-bottom: none;
    }

    .vafadar-table-row td {
        padding: 12px 16px;
        color: var(--metronic-dark);
        font-size: 13px;
        vertical-align: middle;
    }

    /* ===== بج محصول ===== */
    .vafadar-product-badge {
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
        border: 1px solid var(--metronic-blue);
    }
    .vafadar-status.inactive {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border: 1px solid var(--metronic-border);
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

    /* ===== بج ویژه و نمایش در خانه ===== */
    .vafadar-feature-badge {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        padding: 2px 10px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 600;
    }
    .vafadar-feature-badge.featured {
        background: var(--metronic-blue);
        color: #fff;
        border: 1px solid var(--metronic-blue);
    }
    .vafadar-feature-badge.show-home {
        background: var(--metronic-blue);
        color: #fff;
        border: 1px solid var(--metronic-border);
    }
    .vafadar-feature-badge.normal {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border: 1px solid var(--metronic-border);
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
        border-color: var(--metronic-blue);
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
        border-color: var(--metronic-blue);
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
        border-color: var(--metronic-dark);
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
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background: var(--metronic-form-bg);
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

    /* ===== اسکرول ===== */
    .vafadar-table-wrap {
        overflow-x: auto;
    }
    .vafadar-table-wrap::-webkit-scrollbar {
        height: 4px;
    }
    .vafadar-table-wrap::-webkit-scrollbar-track {
        background: var(--metronic-shadow);
    }
    .vafadar-table-wrap::-webkit-scrollbar-thumb {
        background: var(--metronic-blue);
        border-radius: 10px;
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
    .vafadar-empty h3 {
        color: var(--metronic-dark);
        font-size: 18px;
        font-weight: 600;
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

    /* ===== تصویر کوچک ===== */
    .vafadar-thumb {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        object-fit: cover;
        border: 2px solid var(--metronic-border);
        transition: all 0.3s ease;
    }
    .vafadar-thumb:hover {
        transform: scale(1.1);
        border-color: var(--metronic-blue);
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.15);
    }

    .vafadar-thumb-placeholder {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--metronic-shadow);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        border: 2px solid var(--metronic-border);
    }

    /* ===== قیمت ===== */
    .vafadar-price {
        font-weight: 700;
        color: var(--metronic-dark);
        background: var(--metronic-shadow);
        padding: 2px 10px;
        border-radius: 8px;
        display: inline-block;
    }

    .vafadar-discount {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        padding: 2px 8px;
        border-radius: 8px;
        font-size: 11px;
        font-weight: 700;
        margin-right: 4px;
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
        .vafadar-thumb,
        .vafadar-thumb-placeholder {
            width: 32px;
            height: 32px;
            font-size: 14px;
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
        .vafadar-thumb,
        .vafadar-thumb-placeholder {
            width: 28px;
            height: 28px;
            font-size: 12px;
            border-radius: 6px;
        }
    }
</style>

<div class="w-full">
    
    <!-- ===== هدر لیست ===== -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
        <div>
            <h2 class="text-xl font-bold" style="color: var(--metronic-dark);"> لیست محصولات</h2>
            <p class="text-sm mt-1" style="color: var(--metronic-text-dark);">مدیریت و مشاهده تمام محصولات فروشگاه</p>
        </div>
        <div class="flex items-center gap-3 flex-wrap">
            <span class="vafadar-counter">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
                {{ count($products) }} محصول
            </span>
            <a href="{{route('product.create')}}" class="vafadar-add-btn">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M12 5v14M5 12h14"/>
                </svg>
                محصول جدید
            </a>
        </div>
    </div>

    <!-- ===== کارت جدول ===== -->
    <div class="vafadar-table-card">
        
        <!-- ===== نوار جستجو ===== -->
        <div class="p-4 border-b" style="border-color: var(--metronic-border); background: var(--metronic-shadow);">
            <div class="vafadar-search-wrap">
                <svg class="search-icon w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="M21 21l-4.35-4.35"/>
                </svg>
                <input type="text" id="searchProduct" placeholder="جستجوی محصولات..." class="vafadar-search">
            </div>
        </div>

        <!-- ===== جدول ===== -->
        <div class="vafadar-table-wrap">
            <table class="w-full" id="productTable">
                <thead class="vafadar-table-header">
                    <tr>
                        <th style="width:50px;">#</th>
                        <th>تصویر</th>
                        <th>عنوان</th>
                        <th class="hidden md:table-cell">دسته‌بندی</th>
                        <th class="hidden lg:table-cell">قیمت</th>
                        <th class="hidden lg:table-cell"> تخفیف</th>
                        <th class="hidden lg:table-cell">درصد تخفیف</th>
                        <th class="hidden sm:table-cell">موجودی</th>
                        <th class="hidden lg:table-cell">وضعیت</th>
                        <th class="text-center" style="min-width:140px;">عملیات</th>
                    </tr>
                </thead>
                <tbody id="productTableBody">
                    @forelse($products as $product)
                    <tr class="vafadar-table-row" data-id="{{$product->id}}" data-title="{{$product->title}}" data-slug="{{$product->slug}}">
                        <td>
                            <span class="vafadar-product-badge">#{{$product->id}}</span>
                        </td>
                        <td>
                            @if(isset($product->is_main_media))
                                <img class="vafadar-thumb" 
                                     src="{{asset('storage/product_medias/'.$product->is_main_media)}}" 
                                     alt="{{$product->title}}">
                            @else
                                <div class="vafadar-thumb-placeholder"></div>
                            @endif
                        </td>
                        <td>
                            <div class="font-semibold" style="color: var(--metronic-dark);">{{$product->title}}</div>
                            <div class="text-xs md:hidden" style="color: var(--metronic-text-dark);">
                                {{number_format($product->price)}} تومان
                            </div>
                        </td>
                        <td class="hidden md:table-cell" style="color: var(--metronic-text-dark);">
                            <span class="px-3 py-1 rounded-full text-xs border" style="background: var(--metronic-shadow); border-color: var(--metronic-border);">
                                {{$product->categories[0]->title ?? 'بدون دسته‌بندی'}}
                            </span>
                        </td>
                        <td class="hidden lg:table-cell">
                            <span class="vafadar-price">{{number_format($product->price)}}</span>
                        </td>
                        <td class="hidden lg:table-cell">
                            <span class="vafadar-discount">{{number_format($product->discunt)}}</span>
                        </td>
                        <td  class="hidden lg:table-cell">
                            @if($product->percent)
                                <span class="vafadar-discount">-{{$product->percent}}%</span>
                            @else
                                <span> ندارد </span>
                            @endif
                        </td>
                        <td class="hidden sm:table-cell">
                            <span class="px-1 py-1 rounded-full text-sm border" style="background: var(--metronic-shadow); border-color: var(--metronic-border);">
                                @if($product->stock>0)
                                    {{$product->stock}} عدد
                                @else
                                    نا موجود
                                @endif
                            </span>
                        </td>
                        <td class="hidden lg:table-cell">
                            <div class="flex flex-wrap gap-1">
                                <!-- ===== وضعیت فعال/غیرفعال ===== -->
                                @if($product->is_active)
                                    <span class="vafadar-status active">
                                        <span class="dot"></span>
                                        فعال
                                    </span>
                                @else
                                    <span class="vafadar-status inactive">
                                        <span class="dot"></span>
                                        غیرفعال
                                    </span>
                                @endif
                                
                                <!-- ===== ویژه ===== -->
                                @if($product->featured)
                                    <span class="vafadar-feature-badge featured">⭐ ویژه</span>
                                @else
                                    <span class="vafadar-feature-badge normal">معمولی</span>
                                @endif
                                
                                <!-- ===== نمایش در خانه ===== -->
                                @if($product->show_in_home)
                                    <span class="vafadar-feature-badge show-home"> نمایش در خانه</span>
                                @else
                                    <span class="vafadar-feature-badge normal"> بدون نمایش</span>
                                @endif
                            </div>
                        </td>
                        <td>
                            <div class="vafadar-action-group">
                                <a href="{{route('product.single',['product'=>$product->id])}}" class="vafadar-action-btn view" title="مشاهده محصول">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                    <span class="hidden sm:inline">مشاهده</span>
                                </a>
                                <a href="{{route('product.edit',['product'=>$product->id])}}" class="vafadar-action-btn edit" title="ویرایش محصول">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                    </svg>
                                    <span class="hidden sm:inline">ویرایش</span>
                                </a>
                                <a href="{{route('product.delete',['product'=>$product->id])}}" class="vafadar-action-btn delete" title="حذف محصول" onclick="return confirm('آیا از حذف محصول «{{$product->title}}» مطمئن هستید؟')">
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
                                    <path d="M20 7h-4.5L15 4h-6L8.5 7H4v11h16V7z"/>
                                    <circle cx="9" cy="13" r="2"/>
                                    <circle cx="15" cy="13" r="2"/>
                                    <path d="M9 13h6"/>
                                </svg>
                                <h3>هیچ محصولی یافت نشد</h3>
                                <p>برای شروع، روی دکمه «محصول جدید» کلیک کنید</p>
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
                <span>تعداد کل: <strong style="color: var(--metronic-dark);">{{ count($products) }}</strong> محصول</span>
                <span>آخرین بروزرسانی: <strong style="color: var(--metronic-dark);">{{ now()->format('Y/m/d H:i') }}</strong></span>
            </div>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchProduct');
        const table = document.getElementById('productTable');
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
</script>

@endsection