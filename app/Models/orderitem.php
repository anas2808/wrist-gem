<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderitem extends Model
{
     public $table='orderitems';
    public $timestamps=true;
    use HasFactory;
}
