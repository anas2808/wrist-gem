<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminmodel extends Model
{
    
    public $table='product';
    public $timestamps=false;
    use HasFactory;
}

