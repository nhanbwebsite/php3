

// $( document ).ready(function() {
//     window.scrollTo(0,document.querySelector(".box__product-detail-desc").scrollHeight);
// });

$(function() {
    let toastModal = document.querySelector('#toastModal');
    if(toastModal){
        toastModal.click();
        let close_toast = document.querySelector('#close_toast');
        setTimeout(()=>{
            close_toast.click();
        },2000)
    }

})


