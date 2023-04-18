<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportActivity extends Model
{
    use HasFactory;

    protected $table='report_activities';

    protected $fillable=[
        'Title',
        'Hour',
        'Day',
        'Id_user',
    ];

    //Inicio dos metodos que fazem a captura dos dados
    public function users()
    {
        return $this->belongsTo(User::class,'Id_user');
    }
}
