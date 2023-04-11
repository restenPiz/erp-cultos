<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    use HasFactory;

    protected $table='outputs';

    protected $fillable=[
        'Value',
        'Id_user',
        'Id_input',
        'Description'
    ];
}
