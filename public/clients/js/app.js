// var document.querySelector = document.querySelector.bind(document);
// var document.querySelectorAll = document.querySelectorAll.bind(document);

// hiệu ứng hover chuột vào menu item
let menu__items = document.querySelectorAll('.menu__item');
let line = document.querySelector('.line');

menu__items.forEach(function(item,index){
    item.onmouseover = function(){
        // Hiển thị đường line cho menu
        line.style.left = this.offsetLeft + 'px';
        line.style.width = this.offsetWidth + 'px';

        // Loại bỏ line cho thanh tìm kiếm
        if(index == 5){
            line.style.left = 0 + 'px';
            line.style.width = 0 + 'px';
        }
    }
})
// active unactive cart
    function active_untive_cart(){

        let cart__item = document.querySelector('.cart__item');
        let cart__pc = document.querySelector('.cart__pc');
        let cart__text = document.querySelector('.cart__text');
            cart__text.addEventListener('click',(e) => {
                e.stopPropagation();
                cart__pc.classList.toggle('active');
            })

        let close__cart = document.querySelector('.close__cart-pc');

        cart__item.addEventListener('click',(e) => {
            e.stopPropagation();
        })

        close__cart.addEventListener('click',(e) => {
            e.stopPropagation();

            cart__pc.classList.toggle('active');
        })

        let container = document.querySelector('.container-fluid');
        container.addEventListener('click',(e) => {
            e.stopPropagation();
            if(cart__pc.classList.contains('active')) {
                cart__pc.classList.remove('active');
            }
        })
    }
// end active unactive cart


// scroll sticky menu
let body = document.querySelector('body');
let header = document.querySelector('.header');
body.onscroll = function(){
    if(window.scrollY > header.offsetHeight + 50){
        let box__product = document.querySelector('.box__product-detail');
        let keep__the_size = document.querySelector('.keep__the-size');
        header.classList.add('stickky');
        if(box__product){
            if(box__product){
                box__product.style.marginTop =  header.offsetHeight + 'px';
            }
        }
        if(keep__the_size){
            keep__the_size.style.marginTop =  header.offsetHeight + 'px';
        }
    }
}


let icon__bar = document.querySelector('#icon__bar-megamenu');
let submenuMega = document.querySelector('.submenuMega');

icon__bar.addEventListener('click',(e) => {
    submenuMega.classList.toggle('active');
})

// products deytails

//  active size productss

let box__product_size_item = document.querySelectorAll('.box__product-detail-size-number-item');
if(box__product_size_item){
    box__product_size_item.forEach((item,index) => {
        item.addEventListener('click', e => {
            let id_sp = document.querySelector('#product_id_post');
            let size_input_hidden = document.querySelector('#size_input_hidden');
            size_input_hidden.value = item.innerText;
            let item_active_befo = document.querySelector('.box__product-detail-size-number-item.active');
            if(item_active_befo){
                item_active_befo.classList.remove('active');
            }
            item.classList.add('active')

            let pro_code_show_text = document.querySelector('#pro_code_show_text');
            let pro_code_hidden = document.querySelector('#pro_code_hidden');

            // pro_code_hidden.value = pro_code_show_text.innerText + "-" + item.innerText;

            pro_code_show_text.innerHTML = "SP" + id_sp.value + "-" + item.innerText;
            pro_code_hidden.value = pro_code_show_text.innerHTML;
        })
    });

}

// active color product

//  tăng giảm số lượng san phẩm
function value_number_auto(){
    let subtraction = document.querySelectorAll('.subtraction');
let summation = document.querySelectorAll('.summation');
let inputValueAmount = document.querySelectorAll('.box__amount-inputValue');
if(inputValueAmount && summation && subtraction){

    subtraction.forEach((item,index) => {
        item.addEventListener('click', () => {
            inputValueAmount[index].value--;
            if(inputValueAmount[index].value <= 0){
                inputValueAmount[index].value = 1;
            }

            uploadValueInputNumberCart(item)
        })
    })

    summation.forEach((item,index) => {
        item.addEventListener('click', () => {
            inputValueAmount[index].value++;

            uploadValueInputNumberCart(item)

        })
    })
}

if(inputValueAmount){
    inputValueAmount.forEach((item) => {
        item.onchange = () => {
            uploadValueInputNumberCart(item)
        }
    })
}

}

function uploadValueInputNumberCart(item){
        function priceForCartWhenUpdataValueCart(){

            // total for per product
            let totalForOneProduct = item.parentElement.querySelector('.totalForOneProduct');
            let priceProduct = item.parentElement.querySelector('.price_for_product').innerText;
            let quantity = item.parentElement.querySelector('.box__amount-inputValue').value;
            totalForOneProduct.innerText = Number(priceProduct) * quantity;
            // total all product

            let totalForOneProductAll = document.querySelectorAll('.totalForOneProduct');
            let total = 0;
            totalForOneProductAll.forEach((item) => {
                total+= Number(item.innerText);
            })
            let cart__totalHTML = document.querySelector('.cart__Float-total');
// wrong
            function autoPriceViewCart(){
                let content__checkout = document.querySelector('.content__checkout');
                if(content__checkout){
                    let price_temp = content__checkout.querySelector(".price_temp");
                        let totalForOneProductAll = content__checkout.querySelectorAll('.totalForOneProduct');
                        let total = 0;
                        totalForOneProductAll.forEach((item) => {
                            total+= Number(item.innerText);
                        })
                        let content__checkout_priceTotal = content__checkout.querySelector('.content__checkout-right-info-total');
                        price_temp.innerHTML = `${total.toLocaleString()} ₫`;
                        content__checkout_priceTotal.innerHTML = `${total.toLocaleString()} ₫`;
                }

            }
            autoPriceViewCart()
                cart__totalHTML.innerHTML = `Tạm tính: ${total.toLocaleString()} ₫`;

         }
         priceForCartWhenUpdataValueCart()

    $.ajax({
        type: 'GET',
        url: 'http://127.0.0.1:8000/api/cartUpdateAPI/',
        headers: {
            'Content-Type':'application/json'
        },
        data: {
            id: item.parentElement.dataset.id,
            pro_quantity: item.parentElement.querySelector('.box__amount-inputValue').value
        },
    });

}

// kết thúc tăng giảm số lượng


//



//

//   hiển thị hướng dẫn chọn size

let boxSize = document.querySelector('.choose_guide');
let box__chooseSezeGuide = document.querySelector('.box__chooseSezeGuide');

if(boxSize && box__chooseSezeGuide){
    boxSize.addEventListener('click',() => {
        box__chooseSezeGuide.classList.add('active');
    })

}

// close choose size

let close_chooseSize = document.querySelector('.close_chooseSize');
if(close_chooseSize){
    close_chooseSize.addEventListener('click', () => {
        box__chooseSezeGuide.classList.remove('active');
    })

    box__chooseSezeGuide.addEventListener('click', () => {
        box__chooseSezeGuide.classList.remove('active');
    })

}

let box__chooseSeziGuide = document.querySelector('.box__chooseSeziGuide-item');
if(box__chooseSeziGuide){
    box__chooseSeziGuide.addEventListener('click', e => {
        e.stopPropagation();
    })
}

// end close choose size

// Ajax cart temp

function AjacCart(){
    let u_id = document.querySelector('#u_id');
    if(u_id){
        $.ajax({
            type: 'GET',
            url: 'http://127.0.0.1:8000/api/cartAPI/',
            headers: {
                'Content-Type':'application/json'
            },
            data: {
                uid: u_id.innerText
            },
            success: function(res){
               let htmls = res.data.map(function(item){
                    return `
                    <div class="box__products-cart mt-5">
                    <div class="row">
                        <div class="col-3">
                           <img src="http://127.0.0.1:8000/clients/images/products/${item.pro_image}">
                        </div>
                        <div class="col-9">
                           <div class="box__products-title-cartFloat">
                                <a href="#"> ${item.pro_name}</a>
                                <i class="fa-solid fa-xmark delete__product-cartFloat"></i>
                           </div>
                           <p>${item.pro_code}</p>
                           <p> ${item.pro_price.toLocaleString()} ₫</p>


                           <div class="box__input-among-cart">

                            <div class="box_product-detail-amount">
                                <div class="amount__value">

                                 <div class="box__amount" data-id="${item.id}">
                                 <span hidden class="totalForOneProduct"> ${item.pro_price * item.pro_quantity} </span>
                                 <span hidden class="price_for_product">${item.pro_price}</span>
                                     <div class="subtraction">-</div>
                                     <input type="number" value= "${item.pro_quantity}" class="box__amount-inputValue">
                                     <div class="summation">+</div>
                                 </div>
                                </div>
                            </div>

                           </div>
                        </div>
                    </div>
                   </div>
                    `;
               })
               let cart__item_cartLoadA = document.querySelector('.cart__item_cartLoadA');
               cart__item_cartLoadA.innerHTML = htmls.join('');
               let content__checkout = document.querySelector('#content__checkout-cartPro');
               if(content__checkout){
                content__checkout.innerHTML = htmls.join('');

               }

               let details__products_checkout = document.querySelector('.details__products-checkout');
               if(details__products_checkout){
                details__products_checkout.innerHTML = htmls.join('');
                let delete__product = details__products_checkout.querySelectorAll('.delete__product-cartFloat');
                let box__amount = document.querySelectorAll('.box__amount-inputValue');
                let subtraction = document.querySelectorAll('.subtraction');
                let summation = document.querySelectorAll('.summation');
                delete__product.forEach((item,index) => {

                    item.style.display = "none";

                })
                box__amount.forEach((item,index) => {

                   item.disabled = true;
                })
                subtraction.forEach((item,index) => {
                   item.style.display = 'none';
                })
                summation.forEach((item,index) => {
                    item.style.display = 'none';
                })



               }
// tổng tiền checkout

        let box__checkout = document.querySelector('.box__checkout');
        if(box__checkout){
            let tam__tinh = box__checkout.querySelector('.tam__tinh-checkout');
            let phiVanchuyen = document.querySelector('#phiVanchuyen');
            let totalCheckkout = document.querySelector('#totalCheckkout');
            let totalForOneProductAllCheckout = box__checkout.querySelectorAll('.totalForOneProduct');
            let sumCheckout = 0;
            totalForOneProductAllCheckout.forEach((item) => {
                sumCheckout += Number(item.innerHTML)
            })
            tam__tinh.innerHTML = `${sumCheckout.toLocaleString()} ₫`;
            totalCheckkout.innerHTML = `${(Number(phiVanchuyen.innerHTML) + sumCheckout).toLocaleString()} ₫`;
            let totalCheckkoutHidden = box__checkout.querySelector('#totalCheckkoutHidden');
            totalCheckkoutHidden.innerHTML = Number(phiVanchuyen.innerHTML) + sumCheckout;
        }


                   value_number_auto();

            //    số lượng khi load trang
               function valueNumberCartOnLoad(){
                    let totalForOneProduct = document.querySelectorAll('.totalForOneProduct');
                    let totalWhenLoad = 0;
                    totalForOneProduct.forEach((item) => {
                        totalWhenLoad += Number(item.innerText);
                    })
                    let cart__totalHTML = document.querySelector('.cart__Float-total');
                    // price view cart
                    function valueNumberViewCart(){
                        let content__checkout = document.querySelector('.content__checkout')
                        if(content__checkout){
                            let price_temp = content__checkout.querySelector('.price_temp');
                            let totalForOneProductCart = content__checkout.querySelectorAll('.totalForOneProduct');
                            let totalCartTemp = 0;
                            totalForOneProductCart.forEach((item) => {
                                totalCartTemp += Number(item.innerHTML);
                            })
                            price_temp.innerHTML = `${totalCartTemp.toLocaleString()} ₫`;
                            let phiVanChuyenCart = document.querySelector('#phiVanChuyenCart');
                            let content__checkout_total = document.querySelector('.content__checkout-right-info-total');
                            content__checkout_total.innerHTML = `${(Number(phiVanChuyenCart.innerHTML) + totalCartTemp).toLocaleString()} ₫`
                        }

                    }
                    valueNumberViewCart()
                    // kết thúc price view cart
                    cart__totalHTML.innerHTML = `Tạm tính: ${totalWhenLoad.toLocaleString()} ₫`;
               }
               valueNumberCartOnLoad()
            //    kết thúc số lượng load trang


            // delete cart
            let delete__product_cart = document.querySelectorAll('.delete__product-cartFloat');
               if(delete__product_cart){
                delete__product_cart.forEach((item) => {
                    let  id_pro = item.parentElement.parentElement.querySelector('.box__amount').dataset.id;
                      item.onclick = function () {
                         let titlePro = item.parentElement.parentElement.querySelector('a')
                         let conf = confirm('Xóa sản phẩm '+ titlePro.innerText + " khỏi giỏ hàng ?");
                         if(conf){
                             $.ajax({
                                 type: 'GET',
                                 url: 'http://127.0.0.1:8000/api/cartDeleteAPI/',
                                 headers: {
                                     'Content-Type':'application/json'
                                 },
                                 data: {
                                     iPro: id_pro
                                 },
                                 success: function (data) {
                                     let boxremove = item.parentElement.parentElement.parentElement.parentElement
                                     boxremove.remove();
                                     valueNumberCartOnLoad()
                                 }
                             })
                         }
                         return false;
                      }
                 })

               }

            // kết thúc delete cart

            }
        });
    }
   }
   active_untive_cart()
   AjacCart()



// End Ajax cart temp


