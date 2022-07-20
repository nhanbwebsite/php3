<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{asset('clients/js/jquery.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h4>Tỉnh:</h4>
    <select class="form-select" aria-label="Default select example" id='boxProvince'>

    </select>

    <select class="form-select" aria-label="Default select example" id='boxDistrict'>
    </select>

    <select class="form-select" aria-label="Default select example" id='boxWards'>
    </select>
    </div>
    <script>
        $(document).ready(function() {
            $.get('http://127.0.0.1:8000/provinceAPI', function(response) {
                let listProvince = response.data;
                let html = listProvince.map(function(item) {
                    return `
                                <option value="${item.province_id}">${item.name}</option>
                           `
                }).join('')
                $('#boxProvince').html(html);
                getDistrict()
            })

            $('#boxProvince').on('change', function(){
                getDistrict()
            })
        })



function getDistrict(){
    $.get('http://127.0.0.1:8000/districtAPI', function(response){

    let listDistrictValue = response.data.filter(function(item){

        return item.province_id == $('#boxProvince').val();
    })

    let html = listDistrictValue.map((item) => {

        return ` <option value="${item.district_id}">${item.name}</option>`
    }).join('');

    $('#boxDistrict').html(html);

    })
    getWards()
}


$('#boxDistrict').on('change', function(){
    getWards()
})

function getWards(){
    $.get('http://127.0.0.1:8000/wardsAPI', function(response){
      let listWWardsAPI =  response.data.filter((item) => {
           return item.district_id ==  $('#boxDistrict').val();
        })

     let html = listWWardsAPI.map((item) => {
        return ` <option value="${item. wards_id}">${item.name}</option>`
     }).join('');

     $('#boxWards').html(html);
    })
}




    </script>

</body>
</html>
