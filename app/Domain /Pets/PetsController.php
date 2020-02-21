<?php

namespace App\Domain\Pets; 

use App\Http\Controllers\Controller;

class PetsController extends Controller
{
    public function index()
    {
        $model = [
            'pets' => Pet::all()->map(function ($pet) {
                return [
                    'id' => $pet->id,
                    'name' => $pet->name,
                    'sex' => $pet->sex,
                    'animal' => $pet->species->name,
                ];
            }),
        ];

        return view('app/pets/index')->with(compact('model'));
    }
}