<?php

namespace App\Domain\Pets; 

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function index()
    {
        $model = [
            'pets' => Pet::all()->map(function ($pet) {
                return [
                    'id' => $pet->id,
                    'animal' => $pet->species->name,
                    'owner' => $pet->user->name,
                    'name' => $pet->name,
                    'sex' => $pet->sex,
                    'age' => $pet->age,
                    
                ];
            }),
        ];

        return view('app/pets/index')->with(compact('model'));
        
    }




    public function store(PetsRequest $request) {
        // $data = $request->input();
        
        $data = $request->validated();

        $pet = Pet::create([
            'user_id' => 1,
            'species_id' => $data['species'],
            'name' => $data['name'],
            'sex' => $data['sex'],
            'age' => $data['age'],
        ]);
            
        return response()->redirect(route('pets.index'));
 
    }
}