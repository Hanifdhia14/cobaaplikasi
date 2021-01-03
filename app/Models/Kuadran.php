<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuadran extends Model
{
    protected $table = 'kuadran11';
    protected $fillable= ['id', 'kuadrna', 'start_date', 'end_date'];
}
