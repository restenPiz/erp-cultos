<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member_department extends Model
{
    use HasFactory;

    protected $table='member_departments';

    protected $fillable=[
        'Id_user',
        'Id_department'
    ];

    //Inicio da parte de relacionamento com as outras tabelas
    public function department() {
        return $this->belongsTo(Department::class,'Id_department');
    }
    public function users() {
        return $this->belongsTo(User::class,'Id_user');
    }
}
//Fim do model intermedidario entre membros e departamentos