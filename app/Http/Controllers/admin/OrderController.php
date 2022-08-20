<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Order_table as Order_table_Model;
class OrderController extends Controller
{
    public $data = [];

    public function index(){
        $order = new Order_table_Model();
        $this->data['orderList'] = $order->getUserByOrderUserId();
        return view('admin.order.listOrder',$this->data);
    }


    public function updateStatusOrderjax(){

        if(isset($_GET['id']) && isset($_GET['status'])){

            $OrderModel = Order_table_Model::find($_GET['id']);

            $OrderModel->order_status = $_GET['status'];
            // echo $_GET['id'];
            $OrderModel->save();
            echo 'Cập nhật trạng thái sản phẩm thành công';

        } else {
            echo 'Cập nhật trạng thái sản phẩm thát bại';
        }
    }
}
