<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Order_details_table extends Model
{
    use HasFactory;
    protected $table = "order_details_table";
    protected $fillable = [
        'id_order',
        'order_detail_quantity',
        'order_details_pro_id',
        'order_details_pro_price',
    ];
    public $timestamps = false;


}

