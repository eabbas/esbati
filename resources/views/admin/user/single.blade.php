@extends('dashboard')

@section('title', 'پروفایل کاربر')

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
</style>

<div class="max-w-6xl mx-auto">
    
    <!-- عنوان صفحه با استایل جدید -->
    <div class="mb-8">
        <div class="flex items-center justify-between flex-wrap gap-4">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl" style="background: var(--metronic-blue); display: flex; align-items: center; justify-content: center; color: #fff; box-shadow: 0 4px 12px rgba(27, 132, 255, 0.25);">
                    <i class="fas fa-user-circle text-2xl"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-bold" style="color: var(--metronic-dark);">پروفایل کاربر</h2>
                    <p class="text-sm mt-0.5" style="color: var(--metronic-text-dark);">اطلاعات شخصی خود را مدیریت کنید</p>
                </div>
            </div>
            <span class="px-4 py-2 text-sm font-medium rounded-xl border" style="background: var(--metronic-shadow); color: var(--metronic-blue); border-color: var(--metronic-border);">
                <i class="fas fa-check-circle ml-1"></i> حساب تایید شده
            </span>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        
        <!-- ===== سایدبار پروفایل (ستون راست) ===== -->
        <div class="lg:col-span-4 xl:col-span-3">
            <div class="rounded-2xl shadow-md overflow-hidden sticky top-24" style="background: var(--metronic-content-bg); border: 1px solid var(--metronic-border);">
                
                <!-- هدر کارت با گرادیان -->
                <div class="relative h-24" style="background: var(--metronic-blue);">
                    <div class="absolute -bottom-12 left-1/2 -translate-x-1/2">
                        <div class="relative">
                            <div class="w-24 h-24 rounded-full p-1 shadow-xl" style="background: var(--metronic-content-bg);">
                                <div id="profile_avatar" class="w-full h-full rounded-full overflow-hidden" style="background: var(--metronic-blue); padding: 1px;">
                                    @if($user->path!=null)
                                        <img class='rounded-full w-full h-full object-cover' src="{{asset('storage/user_medias/'.$user->path)}}" alt="">
                                    @else
                                    <div class="w-full h-full rounded-full overflow-hidden flex items-center justify-center" style="background: var(--metronic-shadow); color: var(--metronic-text-dark);">
                                        <span class="text-4xl font-bold" style="color: var(--metronic-text-dark);">{{$user->name[0]}}</span>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <label for="avatarUpload" class="absolute bottom-0 left-0 text-white w-8 h-8 rounded-full flex items-center justify-center cursor-pointer shadow-lg transition-all hover:scale-110 border-2" style="background: var(--metronic-blue); border-color: var(--metronic-content-bg);">
                                <i class="fas fa-camera text-xs"></i>
                            </label>
                            <input type="file" id="avatarUpload" class="hidden" accept="image/*">
                        </div>
                    </div>
                </div>

                <!-- اطلاعات کاربر -->
                <div class="pt-14 pb-6 px-6 text-center">
                    <h3 id="profile_name" class="text-xl font-bold" style="color: var(--metronic-dark);"> {{$user->name}} </h3>
                    <p id="profile_email" class="text-sm mt-1" style="color: var(--metronic-text-dark);">{{$user->email}}</p>
                    
                    <div class="flex items-center justify-center gap-2 mt-3">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 text-xs font-semibold rounded-full border" style="color: var(--metronic-blue); background: var(--metronic-shadow); border-color: var(--metronic-border);">
                            <i class="fas fa-shield-alt text-[10px]"></i>
                            {{$user->roles[0]->fa_title}}
                        </span>
                    </div>

                    <hr class="my-5" style="border-color: var(--metronic-border);">

                    <!-- آمار کاربر با استایل جدید -->
                    <div class="grid grid-cols-3 gap-3">
                        <div class="rounded-xl p-3" style="background: var(--metronic-shadow);">
                            <p class="text-2xl font-bold" style="color: var(--metronic-dark);">۱۲</p>
                            <p class="text-[11px]" style="color: var(--metronic-text-dark);">سفارش</p>
                        </div>
                        <div class="rounded-xl p-3" style="background: var(--metronic-shadow);">
                            <p class="text-2xl font-bold" style="color: var(--metronic-blue);">۴</p>
                            <p class="text-[11px]" style="color: var(--metronic-text-dark);">مرجوعی</p>
                        </div>
                        <div class="rounded-xl p-3" style="background: var(--metronic-shadow);">
                            <p class="text-2xl font-bold" style="color: var(--metronic-dark);">۲</p>
                            <p class="text-[11px]" style="color: var(--metronic-text-dark);">رد شده</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- ===== بخش اصلی فرم‌ها (ستون چپ) ===== -->
        <div class="lg:col-span-8 xl:col-span-9 space-y-6">

            <!-- ===== کارت ویرایش اطلاعات ===== -->
            <div class="rounded-2xl shadow-md overflow-hidden" style="background: var(--metronic-content-bg); border: 1px solid var(--metronic-border);">
                <div class="px-6 py-4 border-b" style="border-color: var(--metronic-border); background: var(--metronic-shadow);">
                    <h3 class="text-base font-bold flex items-center gap-2.5" style="color: var(--metronic-dark);">
                        <span class="w-8 h-8 rounded-xl flex items-center justify-center" style="background: var(--metronic-shadow); color: var(--metronic-blue);">
                            <i class="fas fa-edit text-sm"></i>
                        </span>
                        ویرایش اطلاعات شخصی
                    </h3>
                </div>

                <div class="p-6">
                    <div id="profileForm" class='mb-6'>
                        @csrf
                        @method('PUT')
                        <input id="user_id_input" type="hidden" name="user_id" value="{{$user->id}}">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            
                            <div>
                                <label class="block text-sm font-medium mb-1.5" style="color: var(--metronic-dark);">
                                    نام <span style="color: var(--metronic-blue);">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2" style="color: var(--metronic-text-dark);">
                                        <i class="fas fa-user text-sm"></i>
                                    </span>
                                    <input id="name_input" type="text" name="name" value="{{$user->name}}"
                                           class="w-full pr-10 pl-4 py-2.5 rounded-xl border transition-all" style="border-color: var(--metronic-border); background: var(--metronic-shadow); color: var(--metronic-dark);">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-1.5" style="color: var(--metronic-dark);">
                                    نام خانوادگی <span style="color: var(--metronic-blue);">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2" style="color: var(--metronic-text-dark);">
                                        <i class="fas fa-user-tie text-sm"></i>
                                    </span>
                                    <input id="family_input" type="text" name="family" value="{{$user->family}}"
                                           class="w-full pr-10 pl-4 py-2.5 rounded-xl border transition-all" style="border-color: var(--metronic-border); background: var(--metronic-shadow); color: var(--metronic-dark);">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-1.5" style="color: var(--metronic-dark);">
                                    ایمیل <span style="color: var(--metronic-blue);">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2" style="color: var(--metronic-text-dark);">
                                        <i class="fas fa-envelope text-sm"></i>
                                    </span>
                                    <input id="email_input" type="email" name="email" value="{{$user->email}}" pattern="[A-Za-z0-9@]" placeholder="فقط حروف انگلیسی" onkeydown="return preventPersian(event)" onkeyup="removePersian(this)" oninput="removePersian(this)" onpaste="return false" ondrop="return false" class="w-full pr-10 pl-4 py-2.5 rounded-xl border transition-all" style="border-color: var(--metronic-border); background: var(--metronic-shadow); color: var(--metronic-dark);">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-1.5" style="color: var(--metronic-dark);">
                                    شماره تلفن <span style="color: var(--metronic-blue);">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2" style="color: var(--metronic-text-dark);">
                                        <i class="fas fa-phone text-sm"></i>
                                    </span>
                                    <input id="phone_input" type="text" name="phone" value="{{$user->phoneNumber}}"
                                           class="w-full pr-10 pl-4 py-2.5 rounded-xl border transition-all" style="border-color: var(--metronic-border); background: var(--metronic-shadow); color: var(--metronic-dark);">
                                </div>
                            </div>


                        <div class="flex flex-wrap gap-3 mt-6 pt-5 border-t" style="border-color: var(--metronic-border);">
                            <button id="profileFormButton" type="submit" class="px-6 py-2.5 text-white font-medium rounded-xl transition-all flex items-center gap-2 shadow-lg" style="background: var(--metronic-blue); box-shadow: 0 4px 16px rgba(27, 132, 255, 0.2);">
                                <i class="fas fa-save"></i>
                                ذخیره تغییرات
                            </button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ===== کارت تغییر رمز عبور ===== -->
            <div class="rounded-2xl shadow-md overflow-hidden" style="background: var(--metronic-content-bg); border: 1px solid var(--metronic-border);">
                <div class="px-6 py-4 border-b" style="border-color: var(--metronic-border); background: var(--metronic-shadow);">
                    <h3 class="text-base font-bold flex items-center gap-2.5" style="color: var(--metronic-dark);">
                        <span class="w-8 h-8 rounded-xl flex items-center justify-center" style="background: var(--metronic-shadow); color: var(--metronic-dark);">
                            <i class="fas fa-lock text-sm"></i>
                        </span>
                        تغییر رمز عبور
                    </h3>
                </div>

                <div class="p-6">
                    <div id="passwordForm">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-medium mb-1.5" style="color: var(--metronic-dark);">
                                    رمز عبور جدید <span style="color: var(--metronic-blue);">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2" style="color: var(--metronic-text-dark);">
                                        <i class="fas fa-lock text-sm"></i>
                                    </span>
                                    <input id="new_password" title="فقط حروف انگلیسی، اعداد و @#$%^&+=! مجاز است" pattern="[A-Za-z0-9@#$%^&+=!]*" type="password" name="new_password" placeholder="فقط حروف انگلیسی" onkeydown="return preventPersian(event)" onkeyup="removePersian(this)" oninput="removePersian(this)" onpaste="return false" ondrop="return false" class="w-full pr-10 pl-4 py-2.5 rounded-xl border transition-all" style="border-color: var(--metronic-border); background: var(--metronic-shadow); color: var(--metronic-dark);">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-1.5" style="color: var(--metronic-dark);">
                                    تکرار رمز عبور جدید <span style="color: var(--metronic-blue);">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2" style="color: var(--metronic-text-dark);">
                                        <i class="fas fa-check-double text-sm"></i>
                                    </span>
                                    <input id="new_password_confirmation" title="فقط حروف انگلیسی، اعداد و @#$%^&+=! مجاز است" pattern="[A-Za-z0-9@#$%^&+=!]*" type="password" name="new_password_confirmation" placeholder="فقط حروف انگلیسی" onkeydown="return preventPersian(event)" onkeyup="removePersian(this)" oninput="removePersian(this)" onpaste="return false" ondrop="return false" class="w-full pr-10 pl-4 py-2.5 rounded-xl border transition-all" style="border-color: var(--metronic-border); background: var(--metronic-shadow); color: var(--metronic-dark);">
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 pt-4 border-t" style="border-color: var(--metronic-border);">
                            <button onclick="setNewPassword()" type="submit" class="px-6 py-2.5 text-white font-medium rounded-xl transition-all flex items-center gap-2 shadow-lg" style="background: var(--metronic-dark); box-shadow: 0 4px 16px rgba(13, 14, 18, 0.2);">
                                <i class="fas fa-key"></i>
                                تغییر رمز عبور
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@push('scripts')
<script>
    let profileFormButton = document.getElementById('profileFormButton');
    let name_input = document.getElementById('name_input');
    let family_input = document.getElementById('family_input');
    let email_input = document.getElementById('email_input');
    let phone_input = document.getElementById('phone_input');
    let user_id_input = document.getElementById('user_id_input');
    let profile_name = document.getElementById('profile_name');
    let profile_email = document.getElementById('profile_email');
    let header_avatar = document.getElementById('header_avatar');
    let profile_avatar = document.getElementById('profile_avatar');
    let new_password = document.getElementById('new_password');
    let new_password_confirmation = document.getElementById('new_password_confirmation');




    function setNewPassword(){
        if(new_password.value == new_password_confirmation.value){
            let countPassword=countPasswordChars(new_password.value)
            console.log(countPassword.total)
            if(countPassword.total>7){

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url:"{{url('user/change/password/')}}/"+user_id_input.value,
                    type:"post",
                    dataType:"json",
                    data:{
                        'password':new_password.value,

                    },
                    success:function(data){
                        new_password.value=''
                        new_password_confirmation.value=''
                        alert('رمز شما با موفقیت تغییر کرد')
                    },
                    error:function(){
                        alert('banana');
                    }
                })
            }else{
                alert('تعداد کاراکتر رمز عبور باید بالای 8 باشد');
            }

        }else{
            alert('رمز عبور قابل تایید نیست لطفا درست وارد کنید');
        }

    }






    
    profileFormButton.addEventListener('click',()=>{
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        })
        $.ajax({
            url:"{{url('user/edit/profile/')}}/"+user_id_input.value,
            type:"post",
            dataType:"json",
            data:{
                'name':name_input.value,
                'family':family_input.value,
                'email':email_input.value,
                'phoneNumber':phone_input.value,
            },
            success:function(data){
                console.log(data)
                name_input.value=data.name;
                family_input.value=data.family;
                email_input.value=data.email;
                phone_input.value=data.phoneNumber;
                profile_name.innerHTML=data.name;
                profile_email.innerHTML=data.email;
            },
            error:function(){
                alert('banana');
            }
        })
    })

    // =====================================
    // آپلود عکس پروفایل
    // =====================================
$('#avatarUpload').on('change', function() {
    let file = this.files[0];
        let url = "{{url('/user/change/avatar')}}/" + user_id_input.value;
        let formData = new FormData();
        formData.append('avatar', file);
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function(data) {
                console.log(data);
                if (data.success){                    
                    header_avatar.innerHTML = 
                    `
                        <img class='rounded-full w-full h-full object-cover' src="${data.avatar_url}" class="w-8 h-8 rounded-full object-cover">
                    `;

                    profile_avatar.innerHTML = 
                    `
                        <img class='rounded-full w-full h-full object-cover' src="${data.avatar_url}" class="w-8 h-8 rounded-full object-cover">
                    `;
                    alert('آواتار با موفقیت تغییر کرد')
                }
            },
            error: function(xhr) {
                console.log('Error:', xhr);
                let errorMsg = 'خطا در آپلود عکس';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMsg = xhr.responseJSON.message;
                }
            }
        });
    
});
    // =====================================
    // ذخیره اطلاعات پروفایل
    // =====================================


    // =====================================
    // تغییر رمز عبور
    // =====================================


    // =====================================
    // دکمه بازنشانی
    // =====================================
    $('button[type="reset"]').on('click', function(e) {
        e.preventDefault();
        if (confirm('آیا از بازنشانی فرم مطمئن هستید؟')) {
            $('#profileForm')[0].reset();
            if (typeof toastr !== 'undefined') {
                toastr.info('فرم بازنشانی شد');
            } else {
                alert('ℹ️ فرم بازنشانی شد');
            }
        }
    });


    function preventPersian(e,state) {
        // جلوگیری از کلیدهای ترکیبی فارسی
        if (e.key === 'ف' || e.key === 'ب' || e.key === 'ا' || 
            e.key === 'ی' || e.key === 'س' || e.key === 'ل' ||
            e.key === 'م' || e.key === 'ن' || e.key === 'ه' ||
            e.key === 'گ' || e.key === 'د' || e.key === 'ر' ||
            e.key === '#' || e.key === '$' || e.key === '%' ||
            e.key === '^' || e.key === '&' || e.key === '*' ||
            e.key === '-' || e.key === '+') {
            e.preventDefault();
            return false;
        }

        // جلوگیری از تغییر زبان با Alt+Shift
        if (e.altKey && e.key === 'Shift') {
            e.preventDefault();
            return false;
        }
        
        return true;
    }

    function removePersian(input) {
        // حذف تمام کاراکترهای غیرانگلیسی
        const englishOnly = input.value.replace(/[^A-Za-z0-9@#$%^&+=!]/g, '');
        if (input.value !== englishOnly) {
            input.value = englishOnly;
        }
    }

    function countPasswordChars(password) {
        return {
            total: password.length,  // تعداد کل کاراکترها
            english: (password.match(/[A-Za-z]/g) || []).length,  // حروف انگلیسی
            numbers: (password.match(/[0-9]/g) || []).length,  // اعداد
            special: (password.match(/[^A-Za-z0-9]/g) || []).length,  // کاراکترهای خاص (همه)
            persian: (password.match(/[آ-ی]/g) || []).length  // حروف فارسی
        };
    }
</script>
@endpush
@endsection