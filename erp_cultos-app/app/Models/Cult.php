<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cult extends Model
{
    use HasFactory;

    protected $table='cults';

    protected $fillable=[
        'Day_of_cult',
        'Hour',
        'Duration',
        'Leader',
        'Preacher',
        'Title',
        'Book',
        'Chapter',
        'Verse',
    ];
}
