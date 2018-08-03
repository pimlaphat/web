<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return 'Hello form WelcomeController';
    }
    
    public function page($id){
        return 'Welcome to Page '.$id;
    }
    
    public function page2($id=null){
        return 'Welcome to Page '.$id;
    }
    
    public function page3($id, $title=null){
        return 'Welcome to Page '.$id.' '.$title;
    }

    // function route controller (ยังไม่ได้ TT)
    public function getHello(){
        return 'Hello form WelcomeController@getHello';
    }

}
