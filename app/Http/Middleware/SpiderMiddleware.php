<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SpiderMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->input('title')<=18){
            echo "false";
        }
    }
}
