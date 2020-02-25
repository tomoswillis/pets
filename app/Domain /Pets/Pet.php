<?php

namespace App\Domain\Pets;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Species\Species;
use App\User;

class Pet extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'species_id',
        'name',
        'sex',
        'age',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    
    public function species() 
    {
        return $this->belongsTo(Species::class);
    }
}