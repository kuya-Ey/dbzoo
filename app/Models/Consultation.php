<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $table = 'consultations';
    protected $fillable = ["date" , "time" , "full_name" , "pet_name" , "contact_number",];
    public $timestamps = false;
}
