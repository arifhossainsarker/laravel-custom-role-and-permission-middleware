<?php

namespace App\Http\Middleware;

use App\Traits\UserPermission as TraitsUserPermission;
use Closure;
use Illuminate\Http\Request;

class UserPermission
{
    use TraitsUserPermission;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($this->checkRequestPermission()){
            return response()->view('welcome');
        }
        return $next($request);
    }
}
