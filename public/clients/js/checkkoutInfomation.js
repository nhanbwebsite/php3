function getprovince(){
    $.get('http://127.0.0.1:8000/api/provinceAPI', function(data) {
       let dataProvinceAPI = data.data.original.data;
        let htmls = dataProvinceAPI.map((item) => {
            return ` <option value="${item.province_id}">${item.name}</option>`
        }).join('')
        $('#province').html(htmls);
        getDistrictByIdProvince();


    })
}



function getDistrictByIdProvince(){
    $.get('http://127.0.0.1:8000/api/districtAPI', function(data) {
        let dataDistrictAPI = data.data;
         let listDistrict = dataDistrictAPI.filter((item) => {
            return item.province_id == $('#province').val();
         })
         let htmls = listDistrict.map((item)=>{
            return ` <option value="${item.district_id}">${item.name}</option>`
         }).join('')
         $('#district').html(htmls);
         getWardsAPI()
     })
}

function getWardsAPI(){
    $.get('http://127.0.0.1:8000/api/wardsAPI', function(data) {
        let wardstAPI = data.data;
         let listDistrict = wardstAPI.filter((item) => {
            return item.district_id ==  $('#district').val();
         })
         let htmls = listDistrict.map((item)=>{
            return ` <option value="${item. wards_id}">${item.name}</option>`
         }).join('')
         $('#wards').html(htmls);
        //  let provincetValue = document.querySelector('#province');
        //  let districtValue = document.querySelector('#district');
        //  let wardsValue = document.querySelector('#wards');
        //  console.log(districtValue.value);
     })

}

//  change value district when change province value
let province = document.querySelector('#province');
province.onchange = function(){
    getDistrictByIdProvince()
}

//  change value ward when change district value

let district = document.querySelector('#district');
    district.onchange = function(){
        getWardsAPI()
    }

let cart__text = document.querySelector('.cart__text');
cart__text.onclick = function(){
    location.href = "/cart"
}


function ajaxCheckout(){
    let formCheckout = document.querySelector('#formCheckout');
    if(formCheckout){
        formCheckout.onsubmit = function(e){
            e.preventDefault();
        }
    }
}

// ajaxCheckout()
getprovince()

