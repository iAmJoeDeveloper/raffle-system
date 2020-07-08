<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\Role;

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
        $user = auth()->user();

        foreach($user->roles as $role){
            $permiso = $role->name;
        }


        if (auth()->check() && auth()->user() && $permiso == "administrador")
        {
            return $next($request);
        }abort(404);


    }
}
