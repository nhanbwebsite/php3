
let offsetHightHeader = document.querySelector('.header').offsetHeight

// scroll header stiky
// body.onscroll = function(){
//     if(window.scrollY > header.offsetHightHeader){
//         // thực hiện khoảng cách sticky header vào content để bù vào khoảng trắng sticky
//         let content = document.querySelector(('.content'));
//         content.style.top = offsetHightHeader;
//     }
// }




//  độ cao của box cho9 phù hợp
let box__product_detail_info = document.querySelector('.box__product-detail-info');
let box__product_detail_desc = document.querySelector('.box__product-detail-desc');

 box__product_detail_desc.style.height = box__product_detail_info.offsetHeight + 'px';






//  active size productss

let box__product_size_item = document.querySelectorAll('.box__product-detail-size-number-item');
if(box__product_size_item){
    box__product_size_item.forEach((item,index) => {
        item.addEventListener('click', e => {
            let item_active_befo = document.querySelector('.box__product-detail-size-number-item.active');
            if(item_active_befo){
                item_active_befo.classList.remove('active');
            }
            item.classList.add('active')
        })
    });

}

// active color product

//  tăng giảm số lượng san phẩm
let subtraction = document.querySelector('.subtraction');
let summation = document.querySelector('.summation');
let inputValueAmount = document.querySelector('.box__amount-inputValue');
if(inputValueAmount && summation && subtraction){
    subtraction.addEventListener('click', () => {
        inputValueAmount.value--;
        if(inputValueAmount.value <= 0){
            inputValueAmount.value = 1;
        }
    })
    summation.addEventListener('click', () => {
        inputValueAmount.value++;
    })
}
// kết thúc tăng giảm số lượng

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