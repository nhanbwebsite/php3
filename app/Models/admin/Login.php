<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Login extends Model
{
    use HasFactory;
    protected $table='users';
    protected $primaryKey='id';
    public $timestamps = true;
    protected $fillable=[
        'fullname',
        'email',
        'password',
        'address',
    ];

    public function getUserByEmail($data){
        $data =  DB::select('SELECT * FROM '.$this->table.' WHERE email = ? AND password = ? ',$data);
        return $data;
    }
}
