<?php

namespace App\Http\Controllers;



class Usercontroller extends Controller
{
    public function index(){
        return "this is from userController class";
    }

    public function indexView(){
        return view('greeting');
    }
    public function show($id){
        return "User Id :". $id;
    }

}
