<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        // $data = [
        //     'name' => ''
        // ];
        return view('hello.index');
    }

    public function post(Request $request)
    {
        // 受け取った値を$msgに格納する
        $name = $request->name;

        // レスポンスを作成する
        $data = [
            'name' => $name
        ]; 
        
        return view('hello.index', $data);
    }
}
