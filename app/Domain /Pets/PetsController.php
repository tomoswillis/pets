<?php

namespace App\Domain\Pets; 

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PetsController extends Controller
{

    protected $service; 
    
    public function __construct()
    {
        // parent::__construct();
        $this->service = app(PetsService::class); 
    }

    public function index()
    {
        $pets = $this->service->getAllPets();

        $model = [
            'pets' => $pets->map(function ($pet) {
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
            
        return response()->redirectTo(route('pets.index'));
 
    }

    public function destroy(Request $request)
    {
        // $request->pet->Delete();

        Mail::to(auth()->user()->email)
          ->send(new PetDeletedEmail($request->pet));

        return redirect()->route('pets.index');
    }

    public function edit(Request $request)
    {
        return view('app/pets/edit')
            ->with('pet', $request->pet);
    }


    public function update(Request $request)
    {
        $request->pet->name = $request->input('name');
        $request->pet->age = $request->input('age');

        $request->pet->save();

        return redirect()->route('pets.index'); 
    }
}