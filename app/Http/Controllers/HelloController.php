<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee;
    margin:-40px 0px -50px 0px; }
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
        $html = <<< EOF
        <html>
        <head>
        <title>Hello/Index</title>
        <style>
        body {font-size16pt; color:#999; }
        h1 { font-size:16pt; text-align:right; color:#fafafa;
            margin:-50px 0px -120px 0px; }
        </style>
        <body>
            <h3>Request</h3>
            <pre>{$request}</pre>
            <h3>Response</h3>
            <pre>{$response}</pre>
        </body>
        </html>
        EOF;
        $response->setContent($html);
        return $response;
    }
}
