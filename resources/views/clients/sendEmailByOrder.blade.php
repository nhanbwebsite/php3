<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <style>
        table {
        border-collapse: collapse;
        }
        td{
            padding:3px;
        }
        th{
            padding:3px;
        }
     </style>
</head>
<body>
 <table border="1" bordered="1">

        <tbody>
          <tr>
                <th width="35%" scope="row">Tên sản phẩm</th>
                <th width="30%">Giá sản phẩm (VNĐ)</th>
                <th width="10%">Số lượng</th>
                <th width="33%">Tổng (VNĐ)</th>
          </tr>

          @php
                 $tong = 0
          @endphp
            @foreach($data['dataOrderDetailsInsert'] as $item)

                 <tr>
                    <td scope="row">{{$item->pro_name}} - {{$item->pro_code}}</td>
                    <td style="text-align:right">{{number_format($item->pro_price)}}</td>
                    <td style="text-align:right">{{$item->pro_quantity}} </td>
                    <td style="text-align:right" >{{number_format($item->pro_quantity * $item->pro_price)}} </td>
                    @php $tong += $item->pro_price * $item->pro_quantity @endphp
                </tr>

          @endforeach
          <tr>
            <th colspan="3" style="color:red">Số tiền thanh toán cho đơn hàng là</th>
            <th colspan="2" style="color:red; text-align:right" >{{number_format($tong)}}</th>
         </tr>
        </tbody>
      </table>





</body>
</html>
