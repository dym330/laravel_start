<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id='noname', $pass='unknown') {
        return <<<EOF
        <html>
            <head>
                <title>Hello</title>
                <style>
                    body {
                        fontsize:16pt;
                        color:#999;
                    }
                    h1 {
                        font-size:100pt;
                        text-align:right;
                        color:#eee;
                        margin:-40px 0px -50px 0px;
                    }
                </style>
            </head>
            <body>
                <h1>Hello</h1>
                <p>これは、Helloコントローラーのindexアクションです</p>
                <p>これは、サンプルで作ったページです</p>
                <ul>
                    <li>ID: {$id}</li>
                    <li>PASS: {$pass}</li>
                </ul>
            </body>
        </html>
        EOF;
    }
}
