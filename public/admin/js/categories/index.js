$ = document.querySelector.bind(document);
$$ = document.querySelectorAll.bind(document);
ht =  console.log.bind(document);
let categories_name = $$('.categories_name');
let btnDelete = $('.btnDelete');
let dataset = $$('.btnDelete')
let btnConfirm = $('.btn-confirm_delete');
let modal_body = document.querySelector('.modal-body');

dataset.forEach(function(item,index){

    item.onclick = function(){

        // btnConfirm.setAttribute('href','admin/categories/deleteCategory/'+item.dataset.id);
        btnConfirm.setAttribute('href',`categories/deleteCategory/${item.dataset.id}`);
        modal_body.innerHTML = `Bạn có muốn xóa danh mục sản phẩm <span style="color:red;"> <b> ${categories_name[index].innerHTML} </b> </span> không ?`;

    }
})
