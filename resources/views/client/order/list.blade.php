@extends('dashboard')

@section('title','لیست سفارش ها')
@section('content')

<style>
    /* ===== پالت رنگی ===== */
    :root {
        --primary: #1B84FF;
        --primary-light: #4DA3FF;
        --primary-soft: #EAF3FF;
        --primary-glow: rgba(27, 132, 255, 0.18);
        --bg-card: #FFFFFF;
        --bg-soft: #F8FAFD;
        --border: #E7ECF3;
        --border-hover: #C9DBF5;
        --text-main: #1F2A44;
        --text-sub: #5B6B85;
        --text-mute: #94A3B8;
        --radius-lg: 16px;
        --radius-md: 12px;
        --radius-sm: 8px;
        --shadow-sm: 0 2px 8px rgba(31, 42, 68, 0.04);
        --shadow-md: 0 8px 24px rgba(31, 42, 68, 0.06);
        --shadow-lg: 0 18px 40px rgba(27, 132, 255, 0.14);
        --transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* ===== کانتینر اصلی ===== */
    .metronic-orders-wrapper {
        display: flex;
        flex-direction: column;
        gap: 16px;
        width: 100%;
        padding: 16px 4px;
    }

    /* ===== کارت سفارش ===== */
    .metronic-order-card {
        position: relative;
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
        overflow: hidden;
        transition: var(--transition);
    }
    .metronic-order-card::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: var(--radius-lg);
        padding: 1px;
        background: linear-gradient(135deg, transparent 45%, var(--primary-light) 100%);
        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        opacity: 0;
        transition: opacity 0.35s ease;
        pointer-events: none;
    }
    .metronic-order-card:hover {
        box-shadow: var(--shadow-lg);
        transform: translateY(-2px);
    }
    .metronic-order-card:hover::after {
        opacity: 1;
    }

    /* ===== هدر سفارش ===== */
    .metronic-order-header {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 20px;
        background: linear-gradient(135deg, #1B84FF 0%, #4DA3FF 55%, #6FBBFF 100%);
        color: #fff;
        flex-wrap: wrap;
        gap: 10px;
        overflow: hidden;
    }
    .metronic-order-header::before {
        content: "";
        position: absolute;
        top: -50%;
        right: -8%;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(255,255,255,0.18) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }
    .metronic-order-header .order-code {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        font-weight: 700;
        color: #fff;
    }
    .metronic-order-header .order-code .badge {
        display: inline-flex;
        align-items: center;
        padding: 3px 10px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 600;
        background: rgba(255, 255, 255, 0.22);
        color: #fff;
        border: 1px solid rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(6px);
    }
    .metronic-order-header .order-price {
        position: relative;
        z-index: 1;
        font-size: 14px;
        font-weight: 700;
        color: #fff;
        display: flex;
        align-items: center;
        gap: 6px;
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.35);
        padding: 6px 14px;
        border-radius: 50px;
        backdrop-filter: blur(8px);
    }
    .metronic-order-header .order-price svg {
        width: 15px;
        height: 15px;
    }

    /* ===== اطلاعات سفارش ===== */
    .metronic-order-info {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 20px;
        background: var(--bg-soft);
        border-bottom: 1px solid var(--border);
        flex-wrap: wrap;
        gap: 10px;
        font-size: 13px;
    }
    .metronic-order-info .info-item {
        display: flex;
        align-items: center;
        gap: 6px;
    }
    .metronic-order-info .info-item svg {
        color: var(--primary);
        width: 15px;
        height: 15px;
        flex-shrink: 0;
    }
    .metronic-order-info .info-item .label {
        color: var(--text-mute);
        font-size: 12px;
    }
    .metronic-order-info .info-item .value {
        color: var(--text-main);
        font-weight: 600;
        font-size: 13px;
    }

    /* ===== ردیف پایین: تصاویر + دکمه ===== */
    .metronic-order-bottom {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        padding: 14px 20px;
        flex-wrap: wrap;
        background: var(--bg-card);
    }

    /* ===== تصاویر محصولات ===== */
    .metronic-order-products {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
        flex: 1;
        min-width: 0;
    }
    .metronic-order-products .product-thumb {
        width: 56px;
        height: 56px;
        border-radius: var(--radius-md);
        object-fit: cover;
        border: 2px solid var(--border);
        transition: var(--transition);
        cursor: pointer;
        background: var(--bg-soft);
    }
    .metronic-order-products .product-thumb:hover {
        border-color: var(--primary);
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 10px 20px var(--primary-glow);
    }

    /* ===== دکمه مشاهده جزئیات ===== */
    .metronic-order-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 9px 16px;
        font-size: 13px;
        font-weight: 700;
        color: #fff;
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
        border: none;
        border-radius: 50px;
        cursor: pointer;
        text-decoration: none;
        white-space: nowrap;
        box-shadow: 0 4px 14px var(--primary-glow);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
        flex-shrink: 0;
    }
    .metronic-order-btn::before {
        content: "";
        position: absolute;
        top: 0;
        right: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.35), transparent);
        transition: right 0.6s ease;
    }
    .metronic-order-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 22px var(--primary-glow);
    }
    .metronic-order-btn:hover::before {
        right: 100%;
    }
    .metronic-order-btn svg {
        width: 15px;
        height: 15px;
        transition: transform 0.3s ease;
    }
    .metronic-order-btn:hover svg {
        transform: translateX(-3px);
    }

    /* ===== حالت خالی ===== */
    .metronic-empty {
        padding: 60px 20px;
        text-align: center;
        background: var(--bg-card);
        border: 1px dashed var(--border-hover);
        border-radius: var(--radius-lg);
        transition: var(--transition);
    }
    .metronic-empty:hover {
        border-color: var(--primary-light);
        background: var(--primary-soft);
    }
    .metronic-empty .icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 70px;
        height: 70px;
        font-size: 32px;
        margin-bottom: 16px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary-soft) 0%, #FFFFFF 100%);
        border: 1px solid var(--border);
        box-shadow: var(--shadow-sm);
    }
    .metronic-empty h3 {
        color: var(--text-main);
        font-size: 17px;
        font-weight: 700;
        margin: 0;
    }
    .metronic-empty p {
        color: var(--text-mute);
        font-size: 13px;
        margin-top: 6px;
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 640px) {
        .metronic-order-header {
            padding: 12px 16px;
        }
        .metronic-order-info {
            padding: 10px 16px;
        }
        .metronic-order-bottom {
            padding: 12px 16px;
        }
        .metronic-order-products .product-thumb {
            width: 48px;
            height: 48px;
        }
        .metronic-order-btn {
            padding: 8px 14px;
            font-size: 12px;
        }
    }

    @media (max-width: 480px) {
        .metronic-order-header {
            flex-direction: column;
            align-items: stretch;
            gap: 10px;
        }
        .metronic-order-header .order-code,
        .metronic-order-header .order-price {
            justify-content: center;
        }
        .metronic-order-header .order-code,
        .metronic-order-header .order-price {
            font-size: 13px;
        }
        .metronic-order-products .product-thumb {
            width: 42px;
            height: 42px;
            border-radius: 8px;
        }
        .metronic-order-bottom {
            justify-content: center;
        }
        .metronic-order-btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<div class="metronic-orders-wrapper">
    @forelse($orders as $order)
        <div class="metronic-order-card">
            
            <!-- ===== هدر سفارش ===== -->
            <div class="metronic-order-header">
                <span class="order-code">
                    <span class="badge">کد سفارش</span>
                    {{$order->order_code}}
                </span>
                <span class="order-price">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                    </svg>
                    {{$order->total_price}} تومان
                </span>
            </div>

            <!-- ===== اطلاعات سفارش ===== -->
            <div class="metronic-order-info">
                <div class="info-item">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                    <span class="label">تاریخ:</span>
                    <span class="value">{{$order->date}} {{$order->time}}</span>
                </div>
                <div class="info-item">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/>
                        <circle cx="12" cy="9" r="2.5"/>
                    </svg>
                    <span class="label">آدرس:</span>
                    <span class="value">{{$order->address->location}}</span>
                </div>
            </div>

            <!-- ===== تصاویر محصولات + دکمه ===== -->
            <div class="metronic-order-bottom">
                <div class="metronic-order-products">
                    @foreach($order->carts as $cart)
                        <a href="{{route('product.client_pro_single',['product'=>$cart->product->id])}}">
                            <img class="product-thumb" src="{{asset('storage/product_medias/'.$cart->product->image)}}" alt="{{$cart->product->title}}" title="{{$cart->product->title}}">
                        </a>
                    @endforeach
                </div>

                <a href="#" class="metronic-order-btn">
                    <span>مشاهده جزئیات</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"/>
                    </svg>
                </a>
            </div>

        </div>
    @empty
        <div class="metronic-empty">
            <span class="icon">🛒</span>
            <h3>هیچ سفارشی یافت نشد</h3>
            <p>هنوز هیچ سفارشی ثبت نشده است</p>
        </div>
    @endforelse
</div>

@endsection