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
