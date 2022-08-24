<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class User extends Model
{
    use HasFactory;
    protected $table ='users';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'fullname',
        'email',
        'password',
        'address',
        'phone',
        'role'
    ];

    public function checkEmail($email){
        $data = DB::table('users')
        ->select('*')
        ->where('email',$email)
        ->exists();
        return $data;
    }
    public function getUserLast(){
        $data = DB::table('users')
                ->orderByDesc('id')
                ->first();
        return $data;
    }

    public static function findByEmail($email){
        $data = DB::table('users')
        ->where('email',$email)
        ->first();
        return $data;
    }

    public function updateUserByEmail($data){
      DB::update('UPDATE users SET password = ? WHERE email = ?',$data);
    }


}
