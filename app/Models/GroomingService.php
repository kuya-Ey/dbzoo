<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroomingService extends Model
{
    use HasFactory;

    protected $table = 'grooming_services';
    protected $fillable = ["full_name" , "address" , "contact_number" , "date" , "time" , "remarks"];
    public $timestamps = false;
}
