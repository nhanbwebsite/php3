// // API sản phẩm mới
// // http://127.0.0.1:8000/api/productNew
// let API_new_products = 'http://127.0.0.1:8000/api/productNew';
// let API_seller_products = 'http://127.0.0.1:8000/api/productDisscount'
// function getProductsNew(api,callback){
//     fetch(api)
//     .then((response)=>{
//         return response.json();
//     })
//     .then(callback)
// }

// function getProductsSeller(api,callback){
//     fetch(api)
//     .then((response)=>{
//         return response.json();
//     })
//     .then(callback)
// }

// function renderNew(item){

//     let data = item.data;
//   let htmls =  data.map((item) => {
//         return `
//         <div class="col-12 col-md-6 col-lg-3 product__box-col">
//             <div class="product__box-col-img">
//                 <a class="product__box-col-img-link" href="#"><img src="http://127.0.0.1:8000/clients/images/products/${item.product_img}" alt="${item.product_img}"></a>
//                 <a href="#" class="product__box-col-img-hover" ></a>
//             <div class="product__box-quickviews">
//                 <i class="fa-solid fa-magnifying-glass" onclick="quickView(${item.id})" title="Xem nhanh sản phẩm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
//             </div>
//             <div class="item_New">
//                 <img class="" src="http://127.0.0.1:8000/clients/images/seller/new.png" alt="seller">
//             </div>
//             </div>
//             <div class="product__box-col-text">
//                 <div class="product__box-col-text-title">
//                     ${item.product_name}
//                 </div>
//                 <div class="product__box-col-text-price">
//                     <del class="product__box-col-text-price-del">${item.product_price_discount > 0 ? item.product_price  + '₫' : '' } </del>
//                     <span class="product__box-col-text-price-now">${item.product_price_discount > 0 ? item.product_price - (item.product_price_discount * item.product_price)/100 + '₫' : item.product_price } ₫</span>
//                 </div>
//             </div>
//         </div>
//         `;
//     })
// let productsNew = document.querySelector('#productsNew');

// productsNew.innerHTML = htmls.join('');

// }




// function renderSeller(item){

//     let data = item.data;
//   let htmls =  data.map((item) => {
//         return `
//         <div class="col-12 col-md-6 col-lg-3 product__box-col">
//             <div class="product__box-col-img">
//                 <a class="product__box-col-img-link" href="#"><img src="http://127.0.0.1:8000/clients/images/products/${item.product_img}" alt="${item.product_img}"></a>
//                 <a href="#" class="product__box-col-img-hover" ></a>
//             <div class="product__box-quickviews">
//                 <i class="fa-solid fa-magnifying-glass" onclick="quickView(${item.id})" title="Xem nhanh sản phẩm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
//             </div>
//             <div class="item_New">
//                 <img class="" src="http://127.0.0.1:8000/clients/images/seller/seller2.png" alt="seller">
//             </div>
//             </div>
//             <div class="product__box-col-text">
//                 <div class="product__box-col-text-title">
//                     ${item.product_name}
//                 </div>
//                 <div class="product__box-col-text-price">
//                     <del class="product__box-col-text-price-del">${item.product_price_discount > 0 ? item.product_price  + '₫' : '' } </del>
//                     <span class="product__box-col-text-price-now">${item.product_price_discount > 0 ? item.product_price - (item.product_price_discount * item.product_price)/100  : item.product_price } ₫</span>
//                 </div>
//             </div>
//         </div>
//         `;
//     })
// let productsSeller = document.querySelector('#productsSeller');

// productsSeller.innerHTML = htmls.join('');

// }



// getProductsSeller(API_seller_products,renderSeller)


// getProductsNew(API_new_products,renderNew)
