<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hakakses extends Model
{
    protected $table = "hakak";

    public function hakakses()
    {
        return $this->hasOne('app/Employee');
    }
}
