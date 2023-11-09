<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetBoarding extends Model
{
    use HasFactory;

    protected $table = 'pet_boardings';
    protected $fillable = ["full_name", "pet_name" , "contact_number", "started_at", "ended_at", "remarks"];
    public $timestamps = false;
}
