"use strict";

var $ = document.querySelector.bind(document);
var $$ = document.querySelectorAll.bind(document);

// hiệu ứng hover chuột vào menu item
let menu__items = $$('.menu__item');
let line = $('.line');

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

let cart__item = $('.cart__item');
let cart__pc = $('.cart__pc');
let cart__text = $('.cart__text');
    cart__text.addEventListener('click',(e) => {
        e.stopPropagation();
        cart__pc.classList.toggle('active');
    })

let close__cart = $('.close__cart-pc');

cart__item.addEventListener('click',(e) => {
    e.stopPropagation();
})

close__cart.addEventListener('click',(e) => {
    e.stopPropagation();

    cart__pc.classList.toggle('active');
})

let container = $('.container-fluid');
container.addEventListener('click',(e) => {
    e.stopPropagation();
    if(cart__pc.classList.contains('active')) {
        cart__pc.classList.remove('active');
    }
})
// end active unactive cart


// scroll sticky menu
let body = $('body');
let header = $('.header');
body.onscroll = function(){
    if(window.scrollY > header.offsetHeight + 50){
        let box__product = $('.box__product-detail');
        let keep__the_size = $('.keep__the-size');
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


let icon__bar = $('#icon__bar-megamenu');
let submenuMega = $('.submenuMega');

icon__bar.addEventListener('click',(e) => {
    submenuMega.classList.toggle('active');
})



// products deytails




//  active size productss

let box__product_size_item = $$('.box__product-detail-size-number-item');
if(box__product_size_item){
    box__product_size_item.forEach((item,index) => {
        item.addEventListener('click', e => {
            let item_active_befo = $('.box__product-detail-size-number-item.active');
            if(item_active_befo){
                item_active_befo.classList.remove('active');
            }
            item.classList.add('active')
        })
    });

}

// active color product

//  tăng giảm số lượng san phẩm
let subtraction = $$('.subtraction');
let summation = $$('.summation');
let inputValueAmount = $$('.box__amount-inputValue');
if(inputValueAmount && summation && subtraction){

    subtraction.forEach((item,index) => {
        item.addEventListener('click', () => {
            inputValueAmount[index].value--;
            if(inputValueAmount[index].value <= 0){
                inputValueAmount[index].value = 1;
            }
        })
    })

    summation.forEach((item,index) => {
        item.addEventListener('click', () => {
            inputValueAmount[index].value++;
        })
    })
}
// kết thúc tăng giảm số lượng

//   hiển thị hướng dẫn chọn size

let boxSize = $('.choose_guide');
let box__chooseSezeGuide = $('.box__chooseSezeGuide');

if(boxSize && box__chooseSezeGuide){
    boxSize.addEventListener('click',() => {
        box__chooseSezeGuide.classList.add('active');
    })

}

// close choose size

let close_chooseSize = $('.close_chooseSize');
if(close_chooseSize){
    close_chooseSize.addEventListener('click', () => {
        box__chooseSezeGuide.classList.remove('active');
    })

    box__chooseSezeGuide.addEventListener('click', () => {
        box__chooseSezeGuide.classList.remove('active');
    })

}

let box__chooseSeziGuide = $('.box__chooseSeziGuide-item');
if(box__chooseSeziGuide){
    box__chooseSeziGuide.addEventListener('click', e => {
        e.stopPropagation();
    })
}

// end close choose size
