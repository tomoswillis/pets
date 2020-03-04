<?php

namespace App\Domain\Pets;

class PetsService {

    public function getAllPets()
    {
        return Pet::all();
    }
    
    public function getCurrentUserPetByPetId($id)
    {
        return auth()->user()->pets()->where('id', $id)->first();
    }

}