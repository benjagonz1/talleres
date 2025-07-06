<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    public function inscripcion() {
        return $this->belongsTo(inscripcion::class);
    }
}
