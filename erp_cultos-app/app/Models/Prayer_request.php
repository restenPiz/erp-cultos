<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prayer_request extends Model
{
    use HasFactory;

    protected $table='prayer_requests';

    protected $fillable=[
        'Id_user','Description','Date','Hour'
    ];

    //Inicio da parte de chaves estrangeiras
    public function users()
    {
        return $this->belongsTo(User::class,'Id_user');
    }
}