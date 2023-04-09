<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    use HasFactory;

    protected $table='inputs';

    protected $fillable=[
        'Offert_value','Input_type','Description','Id_user',
    ];
}
