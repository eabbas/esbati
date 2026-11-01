<!DOCTYPE html>
<html lang="fa" dir='rtl'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست سبد خرید</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>

    <?php
        $flag=true;
    ?>
    <div class='relative flex w-full gap-2 px-3'>

        <div class='w-full py-20'>
            @csrf
            <div class='w-full min-h-100 mx-auto bg-green-300 flex flex-col p-2 gap-5'>

                <!-- <div class='w-full min-h-60 bg-white flex flex-wrap gap-2 p-2'>
                    <?php
                        // $total_price=0;
                        // $count=0;

                    ?>
                    @foreach($user->carts as $cart)
                        <?php
                            // $total_price+=$cart->product->price * $cart->quantity;
                            // $count++;

                        ?>
                        <div class='parent_cart w-full h-30 flex justify-between border-2 gap-4'>
                            <div class='w-1/5 p-2'>
                                @if(count($cart->product->medias)>0)
                                    <img class='w-full h-20 rounded-xl' src="{{asset('storage/product_medias/'.$cart->product->path)}}" alt="">
                                @else
                                    <div> 🖼 </div>
                                @endif
                            </div>
                            <div class='w-4/5 flex flex-col justify-evenly '>
                                <div class='text-xl text-center items-center'>
                                    <span> {{$cart->product->title}} </span>
                                </div>
                                <div class='flex justify-between px-4'>
                                    <div class='grid grid-cols-3 w-20 border-1 overflow-hidden rounded-full items-center text-center'>
                                        <div onclick="updateCart(this,{{$cart->id}},'plus')" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></div>
                                        <div class='p-2 text-center items-center flex justify-center '><input type="number" class='w-10 font-bold outline-none text-center items-center text-black' readonly value="{{$cart->quantity}}"></div>
                                        @if($cart->quantity==1)
                                            <div onclick="trash(this,{{$cart->id}} , {{$cart->product->id}})" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg></div>
                                        @else
                                            <div onclick="updateCart(this,{{$cart->id}},'minus')" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg></div>
                                        @endif
                                    </div>
                                    
                                    <div class='text-black text-xl'> {{$cart->product->price}} </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> -->

                <div class=" border-2 p-2 items-center text-center">
                    <table class="w-full" id="productTable">
                        <thead class="">
                            <tr>
                                <th style="width:50px;">#</th>
                                <th>تصویر</th>
                                <th>عنوان</th>
                                <th> قیمت اصلی</th>
                                <th> قیمت تخفیف خورده</th>
                            </tr>
                        </thead>
                        <tbody id="p-2">
                            <?php
                                $total_price=0;
                                $count=0;
                                $realsum=0;
                            ?>
                            @foreach($user->carts as $cart)
                                <?php
                                    $count++;
                                    $realsum+=$cart->product->price * $cart->quantity;
                                    if(isset($cart->product->discunt)){
                                        $total_price+=$cart->product->discunt * $cart->quantity;
                                    }else{
                                        $total_price+=$cart->product->price * $cart->quantity;
                                    }
                                ?>
                                <tr class="parent_cart border-2 p-2" data-id="{{$cart->product->id}}" data-title="{{$cart->product->title}}" data-slug="{{$cart->product->slug}}">
                                    <td class='border-2'>
                                        <span class="">#{{$count}}</span>
                                    </td>
                                    <td class='border-2'>
                                        @if(isset($cart->product->path))
                                        <img class="size-15"  src="{{asset('storage/product_medias/'.$cart->product->path)}}"  alt="{{$cart->product->title}}">
                                        @else
                                        <div class="-placeholder"></div>
                                        @endif
                                    </td>
                                    <td class='border-2'>
                                        <span class="">{{$cart->product->title}}</span>
                                    </td>
                                    <td>
                                        
                                        <span class="">{{number_format($cart->product->price)}}</span>
                                    </td>

                                    <td class='border-2' >
                                        @if(isset($cart->product->discunt))
                                            <span class="">{{number_format($cart->product->discunt)}}</span>
                                        @else
                                            <span> تخفیف ندارد </span>
                                        @endif
                                    </td> 

                                    <td class='grid grid-cols-3 w-20 border-1 overflow-hidden rounded-full items-center text-center'>
                                        <div onclick="updateCart(this,{{$cart->id}},'plus')" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></div>
                                        <div class='p-2 text-center items-center flex justify-center '><input type="number" class='w-10 font-bold outline-none text-center items-center text-black' readonly value="{{$cart->quantity}}"></div>
                                        @if($cart->quantity==1)
                                            <div onclick="trash(this,{{$cart->id}} , {{$cart->product->id}})" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg></div>
                                        @else
                                            <div onclick="updateCart(this,{{$cart->id}},'minus')" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg></div>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- <div id='addressForm' class='absolute top-1/3 left-1/2 size-60 bg-white p-4 border-4 rounded-xl shadow-xl opacity-0 transition-all duration-300 invisible'>
            <div onclick="hiddenAddressForm()" class='absolute bg-red-500 rounded-full py-2 px-3 cursor-pointer text-white text-center items-center justify-center flex -right-5 -top-5'>X</div>
            @csrf
            <textarea name="location" id="location" class='border-3 p-1' placeholder='location'></textarea>
            <select class='border-1 p-1' name="province_id" id="provinces" onchange="getCities()">
                @foreach($provinces as $province)
                    <option value="{{$province->id}}">{{$province->title}}</option>
                @endforeach
            </select>
            <select class='border-1 p-1' name="city_id" id="cities">
                @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->title}}</option>
                @endforeach
            </select>
            <div onclick="createAddress()" class='bg-red-300 p-1 rounded-xl cursor-pointer'> ثبت </div>
        </div> -->


        <div class=' w-4/12 flex flex-col'>
            <div class='flex flex-col rounded-xl border-2 p-1 sticky top-45 gap-5'>
                <span class='font-bold text-2xl'> جمع کل سبد خرید </span>
                <div class='s-full flex flex-col gap-5' id="cartDatas">
                    <div class='w-full flex justify-between items-center text-center border-t-2'>
                        <span id="realsum" class='font-bold'>{{$realsum}}</span>
                        <span>قیمت کل</span>
                    </div>
                    <div class='w-full flex justify-between items-center text-center border-t-2'>
                        <span id="total_price" class='font-bold'>{{$total_price}}</span>
                        <span>قیمت قابل پرداخت</span>
                    </div>
                    <div class='w-full flex justify-between items-center text-center border-t-2'>
                        <span class='text-green-400 font-bold' id="benefit"> {{$realsum -$total_price }} </span>
                        <span class='text-green-400'> سود شما از خرید </span>
                    </div>
                    <div class='w-full flex justify-between items-center text-center border-t-2'>
                        <span class=' font-bold' id="cart_counter"> {{$count}} </span>
                        <span> تعداد محصول </span>
                    </div>
                </div>
                <form method="POST" action="{{route('user.checkOutForm')}}" class='w-full flex flex-col gap-5'>
                    @csrf
                    <div class='w-full border-2 flex'>
                        <input name="code" type="text" class='w-7/12 outline-none active:bg-yellow-100 p-2 border-3' id="codeInput">
                        <div class='w-5/12 cursor-pointer bg-green-300 p-2'onclick="checkCode(this)"> اعمال کد تخفیف </div>
                    </div>
                    <button id="formButton" class='btn w-full p-2 bg-red-500 rounded-2xl text-center flex items-center justify-center text-white cursor-pointer'> ادامه جهت تسویه حساب </button>
                </form>
            </div>                
        </div>
    </div>


    <script>
        // let cart = document.getElementById('cart');
        // let cart_list = document.getElementById('cart_list');
        let cart_counter = document.getElementById('cart_counter');
        // let pro_cart_parent_div = document.getElementById('pro_cart_parent_div');
        let total_price = document.getElementById('total_price');
        let benefit = document.getElementById('benefit');
        let realsum = document.getElementById('realsum');
        // let cart_buttons = document.getElementById('cart_buttons');
        let formButton = document.getElementById('formButton');
        let addressForm = document.getElementById('addressForm');
        let codeInput = document.getElementById('codeInput');
        let cartDatas = document.getElementById('cartDatas');




        function hiddenAddressForm(){
            addressForm.classList.remove('opacity-100')
            addressForm.classList.add('opacity-0')
            addressForm.classList.add('invisible')
        }
        function showAddressForm(){
            addressForm.classList.remove('opacity-0')
            addressForm.classList.add('opacity-100')
            addressForm.classList.remove('invisible')
        }

        let product_price=0;
        let quantity=0;
        function updateCart(el,id,state) {
            quantity = el.parentElement.children[1].children[0].value;

            if (quantity < 30) {
                
                el.parentElement.children[0].innerHTML =
                `
                <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>

                `;
                // el.parentElement.children[0].setAttribute('disabled', true);
                el.parentElement.children[0].disabled = true;
                el.parentElement.children[0].removeAttribute('onclick');

                el.parentElement.children[2].innerHTML =
                `
                <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>

                `;
                el.parentElement.children[2].disabled=true;
                el.parentElement.children[2].removeAttribute('onclick');

                if(state=='plus'){
                    quantity++;
                }else{
                    quantity--;
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{url('cart/update/cart')}}"+"/"+id,
                    type: "post",
                    dataType:"json",
                    data:{
                        'quantity':quantity,
                    },
                    success: function(data) {
                        console.log(data);
                        el.parentElement.children[1].children[0].value = data.quantity
                        if(data.quantity==1){

                            //  تغییر دادن  اس وی جی علامت پلاس  //
                            
                            el.parentElement.children[0].removeAttribute('disabled');
                            el.parentElement.children[0].setAttribute('onclick',`updateCart(this,${data.cartId},'plus')`)
                            el.parentElement.children[0].innerHTML=
                            `
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                            `
                            ;


                            //  تغییر دادن  اس وی جی علامت سطل آشغال  //

                            el.parentElement.children[2].innerHTML =
                            `
                            <svg class='size-5 fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                            `
                            el.parentElement.children[2].setAttribute('onclick',`trash(this,${data.cartId},${data.product.id})`);
                            el.parentElement.children[2].disabled=false;
                        }
                        if(data.quantity>1){

                            //  تغییر دادن  اس وی جی علامت پلاس  //

                            el.parentElement.children[0].removeAttribute('disabled');
                            el.parentElement.children[0].setAttribute('onclick',`updateCart(this,${data.cartId},'plus')`)
                            el.parentElement.children[0].innerHTML=
                            `
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                            `
                            ;
                            //  تغییر دادن  اس وی جی علامت ماینس  //

                            el.parentElement.children[2].disabled=false;
                            el.parentElement.children[2].setAttribute('onclick',`updateCart(this,${data.cartId},'minus')`)
                            el.parentElement.children[2].innerHTML =
                            `
                                <svg class='size-3 fill-black' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 13.3-10.7 24-24 24L40 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l368 0c13.3 0 24 10.7 24 24z"/></svg>
                            `
                        }
                        SumResult=parseInt(realsum.innerHTML)
                        if(data.product.discunt!=null){

                           product_price = parseInt(data.product.discunt)
                        }else{
                            product_price = parseInt(data.product.price)
                        }
                        let price=parseInt(total_price.innerHTML)
                        console.log(price);

                        if(state=='plus'){
                            total_price.innerHTML=price+product_price;
                            realsum.innerHTML=SumResult+parseInt(data.product.price);
                            benefit.innerHTML=parseInt( realsum.innerHTML ) - parseInt( total_price.innerHTML)

                        }else{
                            total_price.innerHTML=price-product_price;
                            realsum.innerHTML=SumResult-parseInt(data.product.price);
                            benefit.innerHTML=parseInt( realsum.innerHTML ) - parseInt( total_price.innerHTML)
                        }
                    },
                    error: function() {
                        console.log('☢')
                    }
                })
            }

        }
        function trash(el,cart_id,product_id) {
            let trash_icon='';
            console.log(el.closest('.parent_cart'))
            trash_icon=el.parentElement.children[2].innerHTML;
            el.parentElement.children[2].innerHTML =
            `
                <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
            `
            $.ajax({
                url: "{{url('cart/delete/cart')}}"+"/" + cart_id,
                type: "get",
                dataType: "json",
                success: function(productData) {
                    cart_counter.innerHTML--
                    if(cart_counter.innerHTML==0){
                        formButton.disabled=true;
                        
                        location.assign("{{url('/')}}")
                    }
                    el.parentElement.classList.remove('flex')
                    el.parentElement.classList.add('hidden')
                    el.closest('.parent_cart').remove()

                    if(productData.discunt!=null){
                        product_price = parseInt(productData.discunt)
                    }else{
                        product_price = parseInt(productData.price)
                    }
                    total_price.value=total_price.value-product_price;

                },
                error: function() {
                    console.log('☢')
                }
            })
                // console.log(entry)
            // el.parentElement.children[2].innerHTML =trash_icon
        }
        function getCities(){
            let province=document.getElementById('provinces');
            let cities=document.getElementById('cities');
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
        function createAddress(){
            let location= document.getElementById('location');
            let provinces= document.getElementById('provinces');
            let cities= document.getElementById('cities');
            let ButtonParent= document.getElementById('ButtonParent');
            if(location.value!=''){
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{route('address.createAjax')}}",
                    type: "post",
                    dataType: "json",
                    data:{
                        'location':location.value,
                        'province_id':provinces.value,
                        'city_id':cities.value,
                    },
                    success: function(data) {
                        console.log('xxxxxxxxx');
                        addresses_list.innerHTML+=
                        `
                            <div class='flex gap-2'>
                                <label for=""> ${data.location}  |  ${data.city} </label>
                                <input name="address" type="radio" value="${data.id}" required>
                            </div>
                        `
                        hiddenAddressForm()
                        location.value=''
                        if(ButtonParent.children[0].classList.contains('div')){
                            ButtonParent.innerHTML=''
                            ButtonParent.innerHTML=
                            `
                                <button id="formButton" class='w-40 p-4 bg-red-500 rounded-2xl text-center flex items-center justify-center text-white cursor-pointer'> ثبت نهایی </button>
                            `;

                        }
                    },
                    error: function() {
                        console.log('☢')
                    }
                })   
            }else{
                alert('آدرس را وارد کنید');
            }
        }
        let code=''
        function checkCode(el){
            code=document.getElementById('codeInput').value;
            console.log(code);
            if(code!=''){
                el.innerHTML= `<div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>`;
                el.removeAttribute('onclick');
                el.setAttribute('disable',true);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{route('discuntCode.checkCode')}}",
                    type: "post",
                    dataType: "json",
                    data:{
                        'code':code,
                    },
                    success: function(data) {
                        console.log(data.access);
                        if(data.access!='Unavailable'){
                            if(data.access==true){
                                el.innerHTML='کد تخفیف اعمال شد'
                                el.classList.remove('bg-green-100');
                                el.classList.add('bg-yellow-300');
                                if(data.discuntCode.number!=null){
                                    total_price.innerHTML=parseInt(total_price.innerHTML)-parseInt(data.discuntCode.number)
                                    benefit.innerHTML=parseInt(benefit.innerHTML)+parseInt(data.discuntCode.number)
                                }
                                if(data.discuntCode.percent!=null){
                                    let result=parseInt(total_price.innerHTML)*parseInt(data.discuntCode.percent)
                                    result=result/100;
                                    total_price.innerHTML=parseInt(total_price.innerHTML)-parseInt(result)
                                    benefit.innerHTML=parseInt(benefit.innerHTML) + result
                                    parseInt(total_price.innerHTML)
                                    parseInt(benefit.innerHTML) 
                                }
                                codeInput.setAttribute('readonly',true)
                            }if(data.access==false){
                                alert('کد تخفیف منقصی شد');
                                el.innerHTML="اعمال کد تخفیف"
                                el.setAttribute('onclick','checkCode(this)');
                                el.removeAttribute('disable');
                            }
                        }else{
                            alert('کد تخفیف درست نیست');
                            el.innerHTML="اعمال کد تخفیف"
                            el.setAttribute('onclick','checkCode(this)');
                            el.removeAttribute('disable');
                        }
                    },
                    error: function() {
                        console.log('☢')
                    }
                })
            }else{
                alert('اول کد تخفیف را وارد کنید');
            }
        }
    </script>


    
</body>
</html>

