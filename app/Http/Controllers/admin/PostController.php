<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('admin.posts.listPost');
    }
    public function addGet(){
        return view('admin.posts.addPost');
    }

}
