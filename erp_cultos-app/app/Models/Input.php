<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    use HasFactory;

    protected $table='inputs';

    protected $fillable=[
        'Offert_value','Input_type','Description','Id_user','Day','Offert_value_confirmation'
    ];

    //Inicio dos metodos que fazem a captura dos dados
    public function users()
    {
        return $this->belongsTo(User::class,'Id_user');
    }

    public function outputs()
    {
        return $this->hasMany(Output::class,'Id_input');    
    }
}
