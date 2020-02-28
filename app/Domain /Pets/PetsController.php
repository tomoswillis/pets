<?php

namespace App\Domain\Pets; 

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function index()
    {
        dd(auth()->user()->pets()->where('id', 1)->first());
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

    public function destroy(Request $request, $pet)
    {
        if(!Pet::destroy($pet)){
            abort(500);
        }

        return;
    }

    public function edit(Request $request, $pet)
    {
        if(!$pet = Pet::find($pet)){
            abort(500);
        }

        return view('app/pets/edit')
            ->with('pet', $pet)
            ;
    }


    public function update(Request $request, int $pet)
    {
         Pets::where('id', $pet)
            ->update([
                'name' => $request->input('name'),
                'age' => $request->input('age'),
            ]);

        $pet = Pet::find($pet);

        return response()->redirect(route('pets.index'));
        
    }
}