<?php

namespace App\Http\Middleware;

use Closure;

class CheckPetBelongsToUser
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
        dd(auth()->user()->get('id', 1));
        // if(! auth()->user()->pets()->where('id', 1)->first()){
        //     return redirect('home');
        // }
        return $next($request);
    }
}
