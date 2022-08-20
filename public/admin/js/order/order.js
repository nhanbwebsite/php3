$(function() {
    let deleteCategoryAdmin = document.querySelectorAll('.deleteCategory');

    deleteCategoryAdmin.forEach((item) => {
            item.onclick = (e) =>{

                let itemtext = item.querySelector('.delete__color').title;
              if( confirm('Bạn có muốn '+ itemtext + ' Không ?')){
                return true;
              }
              return  e.preventDefault();
            }
    })

    let orderstatus = document.querySelectorAll('.orderstatus');
    orderstatus.forEach(item => {
        item.addEventListener('change', (e) => {
            $.ajax({
                type: 'GET',
                url: 'http://127.0.0.1:8000/api/updateOrdertatus/',
                headers: {
                    'Content-Type':'application/json'
                },
                data: {
                    id: item.dataset.id,
                    status: item.value
                },
                success: function (response) {
                    alert(response)
                }
            })
        })
    })

})
