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
        --metronic-text-hover: #F5F5F5;
        --metronic-blue: #1B84FF;
    }

    /* ===== کارت فرم ===== */
    .metronic-form-card {
        background: var(--metronic-content-bg);
        border: 1px solid var(--metronic-border);
        border-radius: 24px;
        box-shadow: 0 4px 20px rgba(13,14,18,0.03);
        transition: all 0.3s ease;
        overflow: hidden;
        max-width: 700px;
        width: 100%;
        margin: 0 auto;
        padding: 32px;
    }
    .metronic-form-card:hover {
        box-shadow: 0 8px 40px rgba(13,14,18,0.06);
    }

    .vafadar-label {
        color: #64748b;
        font-size: 12px;
        font-weight: 600;
        display: block;
        margin-bottom: 5px;
        padding-right: 4px;
        transition: all 0.3s ease;
    }

    .vafadar-input {
        width: 100%;
        padding: 12px 16px;
        background: #F5F5F5;
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: #1e293b;
        font-size: 13px;
        transition: all 0.3s ease;
        outline: none;
    }
    .vafadar-input::placeholder {
        color: #9A9CAE;
        font-size: 12px;
    }
    .vafadar-input:hover {
        border-color: var(--metronic-primary-light);
    }
    .vafadar-input:focus {
        border-color: var(--metronic-primary);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background: var(--metronic-bg-form);
    }


    /* ===== هدر کارت ===== */
    .metronic-form-header {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 24px;
        padding-bottom: 16px;
        border-bottom: 2px solid var(--metronic-border);
    }

    .metronic-form-header .header-icon {
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
        flex-shrink: 0;
    }

    .metronic-form-header h2 {
        color: var(--metronic-dark);
        font-size: 20px;
        font-weight: 700;
        margin: 0;
    }

    .metronic-form-header .subtitle {
        color: var(--metronic-text-dark);
        font-size: 14px;
        margin-top: 2px;
    }

    /* ===== فرم ===== */
    .metronic-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .metronic-form .form-group {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .metronic-form .form-group label {
        color: var(--metronic-dark);
        font-size: 14px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .metronic-form .form-group label .required {
        color: var(--metronic-blue);
    }

    .metronic-form .form-group .helper-text {
        color: var(--metronic-text-dark);
        font-size: 12px;
        margin-top: 2px;
    }

    /* ===== ورودی‌های متن ===== */
    .metronic-input {
        width: 100%;
        padding: 10px 14px;
        background: var(--metronic-shadow);
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: var(--metronic-dark);
        font-size: 14px;
        transition: all 0.3s ease;
        outline: none;
        font-family: inherit;
        resize: vertical;
        min-height: 100px;
    }
    .metronic-input::placeholder {
        color: var(--metronic-text-dark);
    }
    .metronic-input:focus {
        border-color: var(--metronic-blue);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.06);
        background: var(--metronic-form-bg);
    }

    /* ===== سلکت باکس ===== */
    .metronic-select {
        width: 100%;
        padding: 10px 14px;
        background: var(--metronic-shadow);
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: var(--metronic-dark);
        font-size: 14px;
        transition: all 0.3s ease;
        outline: none;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%239A9CAE' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: left 14px center;
        cursor: pointer;
    }
    .metronic-select:hover {
        border-color: var(--metronic-text-dark);
    }
    .metronic-select:focus {
        border-color: var(--metronic-blue);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.06);
        background: var(--metronic-form-bg);
    }

    /* ===== دکمه ثبت ===== */
    .metronic-submit-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px 28px;
        background: var(--metronic-blue);
        color: #fff;
        border: none;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.15);
        width: 100%;
        margin-top: 8px;
    }
    .metronic-submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.25);
    }
    .metronic-submit-btn:active {
        transform: translateY(0) scale(0.97);
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 640px) {
        .metronic-form-card {
            padding: 20px;
        }
        .metronic-form-header h2 {
            font-size: 18px;
        }
        .metronic-submit-btn {
            padding: 10px 20px;
            font-size: 13px;
        }
    }

    @media (max-width: 480px) {
        .metronic-form-card {
            padding: 16px;
            border-radius: 16px;
        }
        .metronic-form-header .header-icon {
            width: 40px;
            height: 40px;
            font-size: 18px;
        }
        .metronic-form-header h2 {
            font-size: 16px;
        }
    }
</style>

<div class="w-full flex justify-center py-6 px-4">
    <div class="metronic-form-card">
        
        <!-- ===== هدر ===== -->
        <div class="metronic-form-header">
            <div class="header-icon">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/>
                    <circle cx="12" cy="9" r="2.5"/>
                </svg>
            </div>
            <div>
                <h2>ثبت آدرس</h2>
                <div class="subtitle">اطلاعات آدرس را وارد کنید</div>
            </div>
        </div>

        <!-- ===== فرم ===== -->
        <form action="{{route('address.store')}}" method="POST" class="metronic-form">
            @csrf

            <!-- عنوان -->

            <div class="form-group">
                <label>
                    <span>  عنوان </span>
                    <span class="required">*</span>
                </label>
                <input required type="text" id="title" placeholder="عنوان برند را وارد کنید" name='title' value="{{old('title')}}" class="vafadar-input">
            </div>

            <!-- استان -->
            <div class="form-group">
                <label>
                    <span> استان</span>
                    <span class="required">*</span>
                </label>
                <select name="province_id" id="provinces" class="metronic-select" onchange="getCities()">
                    @foreach($provinces as $province)
                        <option value="{{$province->id}}">{{$province->title}}</option>
                    @endforeach
                </select>
            </div>

            <!-- شهر -->
            <div class="form-group">
                <label>
                    <span> شهر</span>
                    <span class="required">*</span>
                </label>
                <select name="city_id" id="cities" class="metronic-select">
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->title}}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- موقعیت مکانی -->
            <div class="form-group">
                <label>
                    <span> موقعیت مکانی</span>
                    <span class="required">*</span>
                </label>
                <textarea required name="location" class="metronic-input" placeholder="موقعیت مکانی را وارد کنید..."></textarea>
            </div>
            <div class="form-group">
                <label>
                    <span> توضیحات اضافی </span>
                </label>
                <textarea name="description" class="metronic-input" placeholder=" توضیحات خود را وارد کنید..."></textarea>
            </div>
            <div class="form-group">
                <label>
                    <span> کد پستی </span>
                    <span class="required">*</span>
                </label>
                <input required type="number" id="postalCode" placeholder="کد پستی برند را وارد کنید" name='postalCode' value="{{old('postalCode')}}" class="vafadar-input">
            </div>

            <button type="submit" class="metronic-submit-btn">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/>
                    <polyline points="17 21 17 13 7 13 7 21"/>
                    <polyline points="7 3 7 8 15 8"/>
                </svg>
                ثبت آدرس
            </button>
        </form>

    </div>
</div>

<script>
    let province = document.getElementById('provinces');
    let cities = document.getElementById('cities');
    
    function getCities(){
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
</script>

@endsection