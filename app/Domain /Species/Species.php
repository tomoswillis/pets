<?php

namespace App\Domain\Species;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Pets\Pet;

class Species extends Model
{
    protected $table = 'species';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function pets() 
    {
        return $this->hasMany(Pet::class);
    }
    
}