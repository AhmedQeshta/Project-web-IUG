<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        $role ='user';
        $user =Auth::user();
        if ( isset(Auth::user()->name)){
            $role =$user->getRoleNames()->first();}
        if ($role == 'user'){
            return redirect()->route('user');
        }
        return $next($request);
    }
}
