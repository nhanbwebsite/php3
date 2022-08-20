<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\clients\CheckoutRequest;
use App\Models\Order_table as Order_table_model;
use  App\Models\Order_details_table as Order_details_table_model;
use App\Models\clients\CartTemp as CartTempModel;
use App\Models\admin\Register;
use App\Models\admin\User as UserModel;
use App\Mail\SendMail;

class Order_table_Controller extends Controller
{
    public function index(){
        return view('clients.checkoutInfomation');
    }

    public function postCheckout(CheckoutRequest $res){
        // if($res->session()->has('user'))
        //  handle when user is logged
        if($res->session()->has('user')){
            $order = new Order_table_model();
            $cartTemp = new CartTempModel();
            $created_at = Now();
            $updated_at = Now();
            $status = 0;
            $userData =$order -> getUserByEmail($res->session()->get('user')['email']);
            //  dd($idOrderForDetailsIndert = $order->getOrderIdByLast());
             $province = $order->getProvinceById($res->userOrderProvince);
             $district = $order->getDistrictById($res->userOrderDistrict);
             $ward = $order->getWardId($res->userWard);
            //  order

             $order->id_kh = $res->session()->get('user')['id'];
             $order->order_address = $province->name . " - " .$district->name . " - " .$ward->name . " - " .$res->userOrderAddressDetail;
             $order->order_phone = $res->userPhoneOrder;
             $order->order_note = $res->userOrderNote;
             $order->created_at = $created_at;
             $order->updated_at = $updated_at;
             $order->order_status = $status;
             $order->save();
            // end order

            $dataOrderDetailsInsert =  $order-> getOrderByUserEmail($userData->email);

            // order => id_kh, order_address, order_phone, order_note, created_at, updated_at, order_status


                // dd($cartTemp->getCartTempByEmail($res->session()->get('user')['email']));

            //  order detailss => id_order, order_detail_quantity, order_details_pro_id, order_details_pro_price
            $idOrderForDetailsIndert = $order->getOrderIdByLast();
            // dd($dataOrderDetailsInsert);
              // mail
              $myEmail = $dataOrderDetailsInsert[0]->user_email;


              \Mail::to($myEmail)->send(new SendMail(['dataOrderDetailsInsert'=>$dataOrderDetailsInsert],'Thông tin đặt hàng','clients.sendEmailByOrder'));
              // endmail
            foreach ($dataOrderDetailsInsert as $item){
                    $orderDetails = new Order_details_table_model();
                    $orderDetails->id_order = $idOrderForDetailsIndert->id;
                    $orderDetails->order_detail_quantity = $item->pro_quantity;
                    $orderDetails->order_details_pro_id = $item->pro_id;
                    $orderDetails->order_details_pro_price = $item->pro_price;
                    $orderDetails->save();
            //          user_id, pro_id, pro_code, pro_name, pro_price, pro_image, pro_quantity, created_at, updated_at
            }

            // xóa cart temp

                $cartTemp->deleteCartTempByEmail([$res->session()->get('user')['email']]);


                return  redirect(route('client.cart'))->with('orderSuccess','Đặt hàng thành công');
        } else{
            $order = new Order_table_model();
            $userModel = new UserModel();
            $register = new  Register();
            $cartTemp = new CartTempModel();
            $province = $order->getProvinceById($res->userOrderProvince);
            $district = $order->getDistrictById($res->userOrderDistrict);
            $ward = $order->getWardId($res->userWard);
            //  handle when user doesn't login
            // handle when email exist
            $checkEmailExist = $userModel->checkEmail($res->userEmailOrder);
            if( $checkEmailExist){
            //  order
             $created_at = Now();
             $updated_at = Now();
             $status = 0;
            //  $dataUserInsert =  $userModel-> getUserLast();
             $dataUserInsert = $userModel-> findByEmail($res->userEmailOrder);

             $order->id_kh = $dataUserInsert->id;
             $order->order_address = $province->name . " - " .$district->name . " - " .$ward->name . " - " .$res->userOrderAddressDetail;
             $order->order_phone = $res->userPhoneOrder;
             $order->order_note = $res->userOrderNote;
             $order->created_at = $created_at;
             $order->updated_at = $updated_at;
             $order->order_status = $status;
             $order->save();
            // end order

            // details inser
            $dataOrderDetailsInsert =  $order-> getOrderByUserEmail($res->session()->get('eTemp'));
              // mail

              $myEmail = $dataUserInsert->email;


              \Mail::to($myEmail)->send(new SendMail(['dataOrderDetailsInsert'=>$dataOrderDetailsInsert],'Thông tin đặt hàng','clients.sendEmailByOrder'));
              // endmail


            $idOrderForDetailsIndert = $order->getOrderIdByLast();
            foreach ($dataOrderDetailsInsert as $item){
                $orderDetails = new Order_details_table_model();
                $orderDetails->id_order = $idOrderForDetailsIndert->id;
                $orderDetails->order_detail_quantity = $item->pro_quantity;
                $orderDetails->order_details_pro_id = $item->pro_id;
                $orderDetails->order_details_pro_price = $item->pro_price;
                $orderDetails->save();
        //          user_id, pro_id, pro_code, pro_name, pro_price, pro_image, pro_quantity, created_at, updated_at
        }
        // xóa cart temp
            $cartTemp->deleteCartTempByEmail([$res->session()->get('eTemp')]);

            return  redirect(route('client.cart'))->with('orderSuccess','Đặt hàng thành công');

        } else{
            //  handle when email does't exist

            $ward = $order->getWardId($res->userWard);
            $register->fullname = $res->userOrder;
            $register->email  = $res->userEmailOrder;
            $register->password = md5($res->userOrder . time());

            $register->address = $province->name . " - " .$district->name . " - " .$ward->name . " - " .$res->userOrderAddressDetail;
            $register->phone = $res->userPhoneOrder;
            $register->save();

            // order
            $created_at = Now();
            $updated_at = Now();
            $status = 0;
            $dataUserInsert = $userModel-> getUserLast();

            $order->id_kh = $dataUserInsert->id;
            $order->order_address = $province->name . " - " .$district->name . " - " .$ward->name . " - " .$res->userOrderAddressDetail;
            $order->order_phone = $res->userPhoneOrder;
            $order->order_note = $res->userOrderNote;
            $order->created_at = $created_at;
            $order->updated_at = $updated_at;
            $order->order_status = $status;
            $order->save();


            // details inser
            $dataOrderDetailsInsert =  $order-> getOrderByUserEmail($res->session()->get('eTemp'));

            $myEmail = $dataUserInsert->email;

            \Mail::to($myEmail)->send(new SendMail(['dataOrderDetailsInsert'=>$dataOrderDetailsInsert],'Hóa đơn đặt hàng','clients.sendEmailByOrder'));

            $idOrderForDetailsIndert = $order->getOrderIdByLast();
            foreach ($dataOrderDetailsInsert as $item){
                $orderDetails = new Order_details_table_model();
                $orderDetails->id_order = $idOrderForDetailsIndert->id;
                $orderDetails->order_detail_quantity = $item->pro_quantity;
                $orderDetails->order_details_pro_id = $item->pro_id;
                $orderDetails->order_details_pro_price = $item->pro_price;
                $orderDetails->save();
        //          user_id, pro_id, pro_code, pro_name, pro_price, pro_image, pro_quantity, created_at, updated_at
        }
        // xóa cart temp
            $cartTemp->deleteCartTempByEmail([$res->session()->get('eTemp')]);

            return  redirect(route('client.cart'))->with('orderSuccess','Đặt hàng thành công');

        }




        }


    }


}
