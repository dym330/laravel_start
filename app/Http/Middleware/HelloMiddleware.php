<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // $data = [
        //     ['name' => 'taro', 'mail' => 'tara@yamada'],
        //     ['name' => 'hanako', 'mail' => 'hanako@yamada'],
        //     ['name' => 'sachi', 'mail' => 'sachi@yamada'],
        // ];
        // $request->merge(['data' => $data]);
        // return $next($request);

        $response = $next($request);
        $content = $response->content();

        $pattern = '/<middleware>(.*)<\/middleware>/';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);

        $response->setContent($content);
        return $response;
    }
}
