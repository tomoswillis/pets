<?php

namespace App\Domain\Locations;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Location extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_name', 
        'country_code',
    ];

    public function users() 
    {
        return $this->hasMany(User::class);
    }
    
}