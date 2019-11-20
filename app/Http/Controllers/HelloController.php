<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id = 'xxx', $pass = 'yyy') {
        return <<<EOF
        <html>
        <body>
        <h1>
        Hello, Laravel From HelloController!
        </h1>
        <p>IDは{$id}、PASSは{$pass}です。
        </body>
        </html>
        EOF;
    }
}
