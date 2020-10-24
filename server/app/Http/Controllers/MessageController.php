<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    // public function hello()
    // {
    //     return view('message.hello',['msg'=>'Hello View!']);
    // }

    public function show($name,$msg)
    {
        //return view('message.show',['msg' => $msg]);
        $data = ['name' => $name , 'msg' => $msg];
        return view('calcs.show',$data);
    }
}
