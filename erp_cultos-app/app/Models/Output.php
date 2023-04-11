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
        'Description',
        'Day'
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'Id_user');
    }

    public function inputs()
    {
        return $this->belongsTo(Input::class,'Id_input');
    }
}
