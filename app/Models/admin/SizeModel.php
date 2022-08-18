<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class SizeModel extends Model
{
    use HasFactory;
    protected $table='size';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'id',
        'size',
    ];

    public function getList(){
        $data = DB::table('size')->paginate(9);
        return $data;
    }


}
