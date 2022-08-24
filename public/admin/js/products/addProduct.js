// const { forEach } = require("lodash");

CKEDITOR.replace( 'editorDesc',{
     height: "400px",
} );
CKEDITOR.replace( 'editorProdetails',{
     height: "400px",
} );


// form add products
function chooseFile(inputFile) {
    if (inputFile.files) {
        let read = new FileReader();
        read.onload = function (e) {
            let imgDom = document.getElementById('box_img_watch');
            imgDom.src = e.target.result;
            let url = e.target.result
        }
        read.readAsDataURL(inputFile.files[0])
    }
}



let sizeAll = document.querySelectorAll('.sizeAll_item');
let size_old_item_list = document.querySelectorAll('.size_old_item');
    size_old_item_list.forEach((item) => {
        sizeAll.forEach((item2) => {
            if(item.value ==item2.value){
                item2.disabled = true;
            }
        })
    })
