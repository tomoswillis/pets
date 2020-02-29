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
        $pet_id = $request->route('pet');
        auth()->user()->pets()->where('id', $pet_id)->firstOrFail();
        
        return $next($request);
    }
}
