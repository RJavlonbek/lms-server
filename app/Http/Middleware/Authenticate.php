<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    public function handle($request, Closure $next){
        // if(Auth::check()){
        //     return $next($request);
        // }

        // return Auth::onceBasic() ?: $next($request);

        // return response()->json([
        //     'message' => 'unathenticatedd'
        // ]);

        return $next($request);
    }
}
