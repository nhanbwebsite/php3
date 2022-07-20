<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Province extends Model
{
    use HasFactory;
    protected $table;

    public function getProvinces(){
        $data = DB::table('province') -> get();
        return response() -> json([
            'data' =>  $data
        ]);
    }

}
