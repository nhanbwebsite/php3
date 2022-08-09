$(function() {
    let urlDeleteProAdmin = document.querySelectorAll('.urlDeletePro');

    urlDeleteProAdmin.forEach((item) => {
            item.onclick = (e) =>{

                let itemtext = item.querySelector('.delete__color').title;
              if( confirm('Bạn có muốn '+ itemtext + ' Không ?')){
                return true;
              }
              return  e.preventDefault();
            }
    })
})
