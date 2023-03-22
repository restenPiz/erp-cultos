<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class department_member extends Pivot
{
    use HasFactory;

    protected $table='department_members';

    protected $fillable=[
        'id_member',
        'id_department'
    ];
}
