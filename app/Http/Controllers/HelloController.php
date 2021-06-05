<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
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
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt) {
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{
    public function index(Request $request, Response $response) {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Hello/Index') . $style . $body
            . tag('h1', 'Index')
            . tag('h3', 'Request')
            . tag('pre', $request->path())
            . tag('h3', 'Response')
            . tag('pre', $response->status())
            . $end;
        return $html;
    }
}
