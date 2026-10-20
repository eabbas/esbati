@extends('dashboard')

@section('title', 'پروفایل کاربر')

@section('content')
<div class="max-w-6xl mx-auto">
    
    <!-- عنوان صفحه با استایل جدید -->
    <div class="mb-8">
        <div class="flex items-center justify-between flex-wrap gap-4">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-[#1B84FF] to-[#0a6fd6] flex items-center justify-center text-white shadow-lg shadow-[#1B84FF]/25">
                    <i class="fas fa-user-circle text-2xl"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-[#1e293b]">پروفایل کاربر</h2>
                    <p class="text-sm text-[#9A9CAE] mt-0.5">اطلاعات شخصی خود را مدیریت کنید</p>
                </div>
            </div>
            <span class="px-4 py-2 bg-[#1B84FF]/10 text-[#1B84FF] text-sm font-medium rounded-xl border border-[#1B84FF]/20">
                <i class="fas fa-check-circle ml-1"></i> حساب تایید شده
            </span>
        </div>
    </div>

    <div class="grid gap-6">
        

        <!-- ===== بخش اصلی فرم‌ها (ستون چپ) ===== -->
        <div class="lg:col-span-8 xl:col-span-9 space-y-6">

            <!-- ===== کارت ویرایش اطلاعات ===== -->
            <div class="bg-white rounded-2xl shadow-md border border-[#DBDFE9] overflow-hidden">
                <div class="flex justify-between px-6 py-4 border-b border-[#DBDFE9] bg-[#F5F5F5]/50">
                    <h3 class="text-base font-bold text-[#1e293b] flex items-center gap-2.5">
                        <span class="w-8 h-8 rounded-xl bg-[#1B84FF]/10 flex items-center justify-center text-[#1B84FF]">
                            <i class="fas fa-edit text-sm"></i>
                        </span>
                        ویرایش اطلاعات شخصی
                    </h3>
                    <div class="relative">
                        <div class="w-24 h-24 rounded-full bg-white p-1 shadow-xl">
                            <div id="profile_avatar" class="w-full h-full rounded-full overflow-hidden bg-gradient-to-br from-[#1B84FF] to-[#0a6fd6] p-1">
                                @if(Auth::user()->path!=null)
                                    <img class='rounded-full w-full h-full object-cover' src="{{asset('storage/user_medias/'.Auth::user()->path)}}" alt="">
                                @else
                                <div class="w-full h-full rounded-full bg-[#F5F5F5] overflow-hidden flex items-center justify-center">
                                    <span class="text-4xl text-[#9A9CAE] font-bold">{{Auth::user()->name[0]}}</span>
                                </div>
                                @endif
                            </div>
                        </div>
                        <label for="avatarUpload" class="absolute bottom-0 left-0 bg-[#1B84FF] hover:bg-[#0a6fd6] text-white w-8 h-8 rounded-full flex items-center justify-center cursor-pointer shadow-lg transition-all hover:scale-110 border-2 border-white">
                            <i class="fas fa-camera text-xs"></i>
                        </label>
                        <input type="file" id="avatarUpload" class="hidden" accept="image/*">
                        <span class='absolute top-0 -right-17 font-bold text-[#1e293b] text-sm'> عکس پروفایل </span>
                    </div>
                </div>

                <div class="p-6">
                    <div id="profileForm" class='mb-6 grid grid-cols-1 sm:grid-cols-2 gap-2'>
                        @csrf
                        @method('PUT')
                        <input id="user_id_input" type="hidden" name="user_id" value="{{Auth::user()->id}}"
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            
                            <div>
                                <label class="block text-sm font-medium text-[#1e293b] mb-1.5">
                                    نام <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2 text-[#9A9CAE]">
                                        <i class="fas fa-user text-sm"></i>
                                    </span>
                                    <input id="name_input" type="text" name="name" value="{{Auth::user()->name}}"
                                           class="w-full pr-10 pl-4 py-2.5 rounded-xl border border-[#DBDFE9] bg-[#F5F5F5]/50 text-[#1e293b] focus:ring-2 focus:ring-[#1B84FF] focus:border-transparent transition-all">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-[#1e293b] mb-1.5">
                                    نام خانوادگی <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2 text-[#9A9CAE]">
                                        <i class="fas fa-user-tie text-sm"></i>
                                    </span>
                                    <input id="family_input" type="text" name="family" value="{{Auth::user()->family}}"
                                           class="w-full pr-10 pl-4 py-2.5 rounded-xl border border-[#DBDFE9] bg-[#F5F5F5]/50 text-[#1e293b] focus:ring-2 focus:ring-[#1B84FF] focus:border-transparent transition-all">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-[#1e293b] mb-1.5">
                                    ایمیل <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2 text-[#9A9CAE]">
                                        <i class="fas fa-envelope text-sm"></i>
                                    </span>
                                    <input id="email_input" type="email" name="email" value="{{Auth::user()->email}}" pattern="[A-Za-z0-9@]" placeholder="فقط حروف انگلیسی" onkeydown="return preventPersian(event)"onkeyup="removePersian(this)"oninput="removePersian(this)"onpaste="return false"ondrop="return false"   class="w-full pr-10 pl-4 py-2.5 rounded-xl border border-[#DBDFE9] bg-[#F5F5F5]/50 text-[#1e293b] focus:ring-2 focus:ring-[#1B84FF] focus:border-transparent transition-all">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-[#1e293b] mb-1.5">
                                    شماره تلفن <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2 text-[#9A9CAE]">
                                        <i class="fas fa-phone text-sm"></i>
                                    </span>
                                    <input id="phone_input" type="text" name="phone" value="{{Auth::user()->phoneNumber}}"
                                           class="w-full pr-10 pl-4 py-2.5 rounded-xl border border-[#DBDFE9] bg-[#F5F5F5]/50 text-[#1e293b] focus:ring-2 focus:ring-[#1B84FF] focus:border-transparent transition-all">
                                </div>
                            </div>


                        <div class="flex flex-wrap gap-3 mt-6 pt-5 border-t border-[#DBDFE9]">
                            <button id="profileFormButton" type="submit" class="px-6 py-2.5 bg-[#1B84FF] hover:bg-[#0a6fd6] text-white font-medium rounded-xl transition-all flex items-center gap-2 shadow-lg shadow-[#1B84FF]/20 hover:shadow-[#0a6fd6]/30">
                                <i class="fas fa-save"></i>
                                ذخیره تغییرات
                            </button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ===== کارت تغییر رمز عبور ===== -->
            <div class="bg-white rounded-2xl shadow-md border border-[#DBDFE9] overflow-hidden">
                <div class="px-6 py-4 border-b border-[#DBDFE9] bg-[#F5F5F5]/50">
                    <h3 class="text-base font-bold text-[#1e293b] flex items-center gap-2.5">
                        <span class="w-8 h-8 rounded-xl bg-red-50 flex items-center justify-center text-red-500">
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
                                <label class="block text-sm font-medium text-[#1e293b] mb-1.5">
                                    رمز عبور جدید <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2 text-[#9A9CAE]">
                                        <i class="fas fa-lock text-sm"></i>
                                    </span>
                                    <input id="new_password" title="فقط حروف انگلیسی، اعداد و @#$%^&+=! مجاز است" pattern="[A-Za-z0-9@#$%^&+=!]*" type="password" name="new_password" placeholder="فقط حروف انگلیسی" onkeydown="return preventPersian(event)"onkeyup="removePersian(this)"oninput="removePersian(this)"onpaste="return false"ondrop="return false" class="w-full pr-10 pl-4 py-2.5 rounded-xl border border-[#DBDFE9] bg-[#F5F5F5]/50 text-[#1e293b] focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-[#1e293b] mb-1.5">
                                    تکرار رمز عبور جدید <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2 text-[#9A9CAE]">
                                        <i class="fas fa-check-double text-sm"></i>
                                    </span>
                                    <input id="new_password_confirmation" title="فقط حروف انگلیسی، اعداد و @#$%^&+=! مجاز است" pattern="[A-Za-z0-9@#$%^&+=!]*" type="password" name="new_password_confirmation" placeholder="فقط حروف انگلیسی" onkeydown="return preventPersian(event)"onkeyup="removePersian(this)"oninput="removePersian(this)"onpaste="return false"ondrop="return false" class="w-full pr-10 pl-4 py-2.5 rounded-xl border border-[#DBDFE9] bg-[#F5F5F5]/50 text-[#1e293b] focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all">
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 pt-4 border-t border-[#DBDFE9]">
                            <button onclick="setNewPassword()" type="submit" class="px-6 py-2.5 bg-red-600 hover:bg-red-700 text-white font-medium rounded-xl transition-all flex items-center gap-2 shadow-lg shadow-red-600/20 hover:shadow-red-600/30">
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
// $('#avatarUpload').on('change', function() {
//     let file = this.files[0];
//     console.log(file);

    // const file = this.files[0];
    // console.log(file)
    // if (file) {
    //     const reader = new FileReader();
    //     reader.onload = function(e) {
    //         $('.rounded-full .rounded-full .w-full').html('<img src="' + e.target.result + '" class="w-full h-full object-cover rounded-full">');
    //     };
    //     reader.readAsDataURL(file);
        
    //     // نمایش پیام موفقیت
    //     if (typeof toastr !== 'undefined') {
    //         toastr.success('عکس با موفقیت آپلود شد');
    //     } else {
    //         alert('✅ عکس با موفقیت آپلود شد');
    //     }
    // }
// });
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
                // toastr.error(errorMsg);
            }
        });
    
});
    // =====================================
    // ذخیره اطلاعات پروفایل
    // =====================================
    // $('#profileForm').on('submit', function(e) {
    //     e.preventDefault();
        
    //     if (typeof toastr !== 'undefined') {
    //         toastr.success('اطلاعات با موفقیت ذخیره شد');
    //     } else {
    //         alert('✅ اطلاعات با موفقیت ذخیره شد!');
    //     }
    // });

    // =====================================
    // تغییر رمز عبور
    // =====================================
    // $('#passwordForm').on('submit', function(e) {
    //     e.preventDefault();
        
    //     const currentPass = $('input[name="current_password"]').val();
    //     const newPass = $('input[name="new_password"]').val();
    //     const confirmPass = $('input[name="new_password_confirmation"]').val();
        
    //     if (currentPass.length < 6) {
    //         const msg = 'رمز عبور فعلی باید حداقل ۶ کاراکتر باشد';
    //         if (typeof toastr !== 'undefined') {
    //             toastr.error(msg);
    //         } else {
    //             alert('❌ ' + msg);
    //         }
    //         return;
    //     }
        
    //     if (newPass.length < 6) {
    //         const msg = 'رمز عبور جدید باید حداقل ۶ کاراکتر باشد';
    //         if (typeof toastr !== 'undefined') {
    //             toastr.error(msg);
    //         } else {
    //             alert('❌ ' + msg);
    //         }
    //         return;
    //     }
        
    //     if (newPass !== confirmPass) {
    //         const msg = 'رمز عبور جدید و تکرار آن مطابقت ندارند';
    //         if (typeof toastr !== 'undefined') {
    //             toastr.error(msg);
    //         } else {
    //             alert('❌ ' + msg);
    //         }
    //         return;
    //     }
        
    //     if (typeof toastr !== 'undefined') {
    //         toastr.success('رمز عبور با موفقیت تغییر کرد');
    //     } else {
    //         alert('✅ رمز عبور با موفقیت تغییر کرد');
    //     }
        
    //     $('input[name="current_password"]').val('');
    //     $('input[name="new_password"]').val('');
    //     $('input[name="new_password_confirmation"]').val('');
    // });

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
            // alert.error('فقط حروف انگلیسی مجاز است');
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
            // alert.error('فقط حروف انگلیسی و اعداد مجاز است');
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