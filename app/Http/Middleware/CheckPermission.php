<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermission
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
        if($request->user('api')->role == 'owner')
        {
            return $next($request);
        }else{
            return response()->json(['error'=>'you are not authorized to see access this'],401);
        }
        
    }
}
