<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Wards extends Model
{
    use HasFactory;

    public function getWards(){
        $data = DB::table('wards') -> get();
        return $data;
    }
}
