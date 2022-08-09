<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('products')->insert([
            ['product_name'=>'product 1',
            'product_status'=>1,
            'product_quantity'=>0,
            'id_sub_cate'=>1,
            'product_views'=>1,
            'product_price'=>250000,
            'product_price_discount'=>5,
             'created_at'=>'2022-08-08 15:50:44',
             'updated_at'=>'2022-07-08 15:50:44'],

            ['product_name'=>'product 2',
            'product_status'=>1,
            'product_quantity'=>0,
            'id_sub_cate'=>2,
            'product_views'=>0,
            'product_price'=>230000,
            'product_price_discount'=>0,
             'created_at'=>'2022-08-08 15:50:44',
             'updated_at'=>'2022-07-08 15:50:44'],

            ['product_name'=>'product 3',
            'product_status'=>1,
            'product_quantity'=>0,
            'id_sub_cate'=>1,
            'product_views'=>1,
            'product_price'=>240000,
            'product_price_discount'=>10,
             'created_at'=>'2022-08-08 15:50:44',
             'updated_at'=>'2022-07-08 15:50:44'],
         ]);
    }

}

