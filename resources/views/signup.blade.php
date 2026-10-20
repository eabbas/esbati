<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <div class="w-full h-dvh bg-[url({{asset('assets/img/background/bg.png')}})] bg-cover bg-no-repeat flex justify-center items-center">
        <form id='form' action="{{route('user.store')}}" method="POST" class="w-4/12 mx-auto flex flex-col bg-white rounded-md items-center justify-between py-5 gap-4">
            @csrf
            <div class="w-6/12 mx-auto"> <img src="{{asset('assets/img/logo_icone/logo2.png')}}" class="w-full" alt=""> </div>
            <div class="w-9/12 flex flex-col gap-2 justify-center text-center flex-wrap">
                <h1 class="font-bold text-xl"> فرم ثبت نام اکسسوری اثباتی </h1>
                <p class="text-xs text-start leading-6"> با ثبت نام در سایت از تخفیف های ویژه تصاته تز جدید ترین محصولات و دسترسی به پنل عمده فروشی بهره مند شوید </p>
            </div>
            <div class="w-9/12 flex flex-col gap-4">
                <div class="relative w-full px-4 py-1 flex items-center text-center border-1 border-gray-400/30 rounded-xl ">
                    <input type="text" name="name" placeholder=" نام " class="outline-none w-full p-2">
                    <svg class="absolute left-5 size-7 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="#45556c" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg>
                </div>
                <div class="relative w-full px-4 py-1 flex items-center text-center border-1 border-gray-400/30 rounded-xl ">
                    <input type="text" name="family" placeholder=" نام خانوادگی " class="outline-none w-full p-2">
                    <svg class="absolute left-5 size-7 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="#45556c" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg>
                </div>
                <div class="relative w-full px-4 py-1 flex items-center text-center border-1 border-gray-400/30 rounded-xl ">
                    <input id="phoneNumber" type="tell" name="phoneNumber" placeholder=" شماره موبایل " class="outline-none w-full p-2">
                    <svg class="absolute left-5 size-7 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="#45556c" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/></svg>
                </div>
                <div class="relative w-full px-4 py-1 flex items-center text-center border-1 border-gray-400/30 rounded-xl ">
                    <input type="password" name="password" placeholder=" رمز ورود " class="outline-none w-full p-2">
                    <svg class="absolute left-5 size-7 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">  <path stroke="#45556c" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/></svg>
                </div>
                <div class="w-full flex gap-1 text-start items-center text-xs">
                    <input type="checkbox" name="access" value="1" onclick='checkAccess(this)'>
                    <span> با <span class="font-bold cursor-pointer text-[var(--color-primary)]">قوانین</span> و <span class="font-bold cursor-pointer text-[var(--color-primary)]"> مققرات سایت</span> موافقم </span>
                </div>
                <div class='w-full flex gap-2 justify-between'>
                    
                    <div class="relative group w-4/12 ">
                        <div onclick='sendCodeSignup("signup")' id="counter" class='cursor-pointer w-full flex bg-purple-500 h-full rounded-2xl  text-white text-center items-center justify-center font-bold'>
                                <span> دریافت کد  </span>
                        </div>
                    </div>
                    <!-- کد ورود -->
                    <div class="relative group w-8/12">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 text-black transition-colors duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">  <path stroke="#45556c" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/></svg>
                        <input type="number" name="code" oninput="limitDigits(this)" required placeholder="کد ورود " class="relative w-full px-4 py-3 flex items-center border-1 border-gray-400/30 rounded-xl ">
                    </div>

                </div>
                <button id='formButton' type="submit" disabled class="cursor-pointer bg-red-300 py-3 w-full flex justify-center text-center items-center gap-1 rounded-xl transition-all duration-300">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12h4m-2 2v-4M4 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg>
                    <span class="font-bold text-base text-white"> ثبت نام </span>
                </button>
            </div>
            <div class="w-full flex gap-1 justify-center items-center text-center text-xs font-bold mt-4">
                <span> حساب کاربری دارید؟ </span>
                <a href="{{url('login')}}" class="text-[var(--color-primary)]">  وارد شوید </a>
            </div>
        </form>
    </div>


<script>

    let formButton=document.getElementById('formButton');
    function checkAccess(el){
        if (el.checked) {
            formButton.classList.remove('bg-red-300');
            formButton.classList.add('bg-[var(--color-primary)]');
            formButton.disabled=false;
        } else {
            formButton.classList.remove('bg-[var(--color-primary)]');
            formButton.disabled=true;
            formButton.classList.add('bg-red-300');
        }
    }

    function sendCodeSignup(state){
        let phoneNumber=document.getElementById('phoneNumber');
        phoneNumber = phoneNumber.value
        if(phoneNumber!=""){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            })
            $.ajax({
                url:"{{route('user.send_code_signup')}}",
                type:"post",
                dataType:"json",
                data:{
                    'phoneNumber':phoneNumber,
                    'state':state,

                },
                success:function(data){
                    if(data){
                        alert('کد ارسال شد');
                        counterSignupButton(phoneNumber);
                    }else{
                        alert('این شماره قبلا ثبت نام شده است')
                    }
                },
                error:function(){
                    alert('کد ارسال نشد بعدا امتحان کنید');
                }
            })
        }else{
            phoneNumber.classList.add('border-3')
            phoneNumber.classList.add('border-red-600')
            phoneNumber.classList.add('rounded-2xl')
            alert('شماره تلفن خود را وارد کنید');
        }
    }


    function counterSignupButton(phoneNumber) {
        let counter=document.getElementById('counter');
        counter.classList.add('cursor-no-drop')
        counter.classList.remove('cursor-pointer')
        counter.classList.remove('hover:bg-[#d52b4a]')
        counter.classList.add('hover:bg-[#d52b4a]/50')
        counter.classList.remove('bg-[#eb3254]')
        counter.classList.add('bg-[#eb3254]/50')
        counter.setAttribute('disabled', true)
        counter.removeAttribute('onclick')
        counter.setAttribute('dir', 'ltr')
        let count = 120
        let result = setInterval(() => {
            let minute = Math.floor(count / 60)
            let seconds = count % 60
            count -= 1
            if (count < 0) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{ route('user.removeActivationCode') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'phoneNumber': phoneNumber
                    },
                    success: function(data) {
                        console.log(data)
                        counter.classList.remove('cursor-no-drop')
                        counter.classList.add('bg-[#eb3254]')
                        counter.classList.remove('bg-[#eb3254]/50')
                        counter.classList.add('cursor-pointer')
                        counter.classList.add('hover:bg-[#d52b4a]')
                        counter.classList.remove('hover:bg-[#d52b4a]/50')
                        counter.removeAttribute('disabled')
                        counter.setAttribute('onclick','sendCodeSignup("signup")')
                        counter.removeAttribute('dir')
                        counter.innerText = "ارسال مجدد"
                    },
                    error: function() {
                        showMessage('open')
                        element.innerHTML = `
                            <span>❌</span>
                            <span class="text-shadw-lg">خطا در دریافت اطلاعات!</span>
                        `
                        message.children[0].appendChild(element)
                        setTimeout(() => {
                            showMessage('close')
                        }, 2500)
                    }
                })
                clearInterval(result)
            }
            counter.innerText = minute.toString().padStart(2, "0") + " : " + seconds.toString().padStart(2,
                "0");
        }, 1000)
    }
    function addlocalProducts(){
        let jsonProArray = JSON.parse(localStorage.getItem('products'));

        console.log(jsonProArray);

        let productsString = JSON.stringify(jsonProArray);

        let inputlogin = document.createElement('input');
        let inputsignup = document.createElement('input');
        inputlogin.setAttribute('name', 'products[]');
        inputlogin.setAttribute('type', 'hidden');
        inputlogin.setAttribute('value', productsString); 
        inputsignup.setAttribute('name', 'products');
        inputsignup.setAttribute('type', 'hidden');
        inputsignup.setAttribute('value', productsString); 

        form.children[0].appendChild(inputsignup); 
    }
    addlocalProducts();


</script>

</body>
</html>