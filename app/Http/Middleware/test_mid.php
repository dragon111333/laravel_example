<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class test_mid
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
        if($request->name=="Thewin"){
            return redirect("home/Thewin");
        }
        return $next($request);
    }
}
