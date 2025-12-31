<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
     public $table='contacts';
    public $timestamps=true;
    use HasFactory;
}
