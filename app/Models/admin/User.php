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
}
