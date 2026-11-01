<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>رسید سفارش</title>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Tahoma', 'Vazirmatn', sans-serif;
  }

  body {
    background: #eef1f5;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
  }

  .receipt {
    background: #fff;
    width: 100%;
    max-width: 480px;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    position: relative;
  }

  .receipt-header {
    background: linear-gradient(135deg, #4f46e5, #7c3aed);
    color: #fff;
    padding: 28px 24px;
    text-align: center;
  }

  .receipt-header h1 {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 6px;
  }

  .receipt-header p {
    font-size: 13px;
    opacity: 0.85;
  }

  .check-icon {
    width: 56px;
    height: 56px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 14px;
    font-size: 28px;
  }

  .divider {
    height: 20px;
    background: #fff;
    position: relative;
    margin: -10px 0;
    z-index: 2;
  }

  .divider::before,
  .divider::after {
    content: '';
    position: absolute;
    width: 24px;
    height: 24px;
    background: #eef1f5;
    border-radius: 50%;
    top: -2px;
  }

  .divider::before {
    left: -12px;
  }

  .divider::after {
    right: -12px;
  }

  .receipt-body {
    padding: 10px 24px 24px;
  }

  .section-title {
    font-size: 13px;
    font-weight: bold;
    color: #4f46e5;
    margin: 18px 0 12px;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .section-title::before {
    content: '';
    width: 4px;
    height: 16px;
    background: #4f46e5;
    border-radius: 2px;
  }

  .info-row {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px dashed #e5e7eb;
    font-size: 14px;
  }

  .info-row:last-child {
    border-bottom: none;
  }

  .info-row .label {
    color: #6b7280;
  }

  .info-row .value {
    color: #111827;
    font-weight: bold;
  }

  .order-code-box {
    background: #f5f3ff;
    border: 2px dashed #a78bfa;
    border-radius: 12px;
    padding: 18px;
    text-align: center;
    margin-top: 12px;
  }

  .order-code-box .code-label {
    font-size: 12px;
    color: #7c3aed;
    margin-bottom: 8px;
  }

  .order-code-box .code-value {
    font-size: 22px;
    font-weight: bold;
    color: #4f46e5;
    letter-spacing: 3px;
    font-family: 'Courier New', monospace;
  }

  /* دکمه بازگشت به فروشگاه */
  .shop-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: calc(100% - 48px);
    margin: 16px 24px 0;
    padding: 14px;
    background: linear-gradient(135deg, #4f46e5, #7c3aed);
    color: #fff;
    text-decoration: none;
    font-size: 15px;
    font-weight: bold;
    border-radius: 12px;
    transition: transform 0.2s ease, box-shadow 0.2s ease, opacity 0.2s ease;
    box-shadow: 0 6px 16px rgba(79, 70, 229, 0.3);
  }

  .shop-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 22px rgba(79, 70, 229, 0.4);
    opacity: 0.95;
  }

  .shop-btn:active {
    transform: translateY(0);
  }

  .shop-btn svg {
    width: 18px;
    height: 18px;
  }

  .receipt-footer {
    text-align: center;
    padding: 16px 24px 24px;
    font-size: 12px;
    color: #9ca3af;
    border-top: 1px solid #f3f4f6;
    margin-top: 16px;
  }

  @media print {
    body { background: #fff; }
    .receipt { box-shadow: none; }
    .shop-btn { display: none; }
  }
</style>
</head>
<body>

  <div class="receipt">

    <div class="receipt-header">
      <div class="check-icon">✓</div>
      <h1>سفارش با موفقیت ثبت شد</h1>
      <p>رسید خرید شما</p>
    </div>

    <div class="divider"></div>

    <div class="receipt-body">

      <!-- مشخصات فرد -->
      <div class="section-title">مشخصات خریدار</div>

      <div class="info-row">
        <span class="label">نام و نام خانوادگی</span>
        <span class="value">{{$user->name}} {{$user->family}}</span>
      </div>

      <div class="info-row">
        <span class="label">شماره تماس</span>
        <span class="value">{{$user->phoneNumber}}</span>
      </div>

      <div class="info-row">
        <span class="label">تاریخ ثبت</span>
        <span class="value">{{$date}} {{$time}}</span>
      </div>

      <div class="order-code-box">
        <div class="code-label">شماره پیگیری سفارش</div>
        <div class="code-value">{{$code}}</div>
      </div>

    </div>

    <!-- دکمه بازگشت به فروشگاه -->
    <a href="{{ url('/') }}" class="shop-btn">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
      </svg>
      بازگشت به فروشگاه
    </a>

    <div class="receipt-footer">
      از خرید شما سپاسگزاریم 🌸
    </div>

  </div>

  <script>
    localStorage.getItem('products');
    localStorage.removeItem('products');
  </script>
</body>
</html>