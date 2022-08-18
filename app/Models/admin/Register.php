<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $table='users';
    protected $primaryKey='id';
    public $timestamps = true;
    protected $attributes = [
        'role' => 2
    ];
    protected $fillable=[
        'fullname',
        'email',
        'password',
        'address',
        'role',
        'phone'
    ];
}
