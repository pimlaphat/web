<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id){
        return view('user_profile', ['user' => $id]);
    }
}
