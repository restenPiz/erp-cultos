<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table='activities';

    protected $fillable=[
        'Title',
        'Hour',
        'Day',
        'Id_user',
        'Group',
    ];

    //Inicio dos metodos que fazem a captura dos dados
    public function users()
    {
        return $this->hasMany(User::class);
    }
    
    public function name($id)
    {
        return User::find($id)->name;
    }
    //Inicio do metodo que retorna a chave estrangeira do departamento
    public function department()
    {
        return $this->belongsTo(Department::class,'Group');
    }
}
