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
}
