<?php

namespace App\Domain\Pets\Middleware;

use Closure;

use App\Domain\Pets\PetsService;


class RedirectIfUserDoesntOwnPet
{
    protected $service;

    public function __construct()
    {
        $this->service = app(PetsService::class); 
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $pet = $this->service->getCurrentUserPetByPetId($request->route('id'));

        if (!$pet)
        {
            abort(404);
        }

        $request->request->add([ 'pet' => $pet ]);

        return $next($request);
    }
}
