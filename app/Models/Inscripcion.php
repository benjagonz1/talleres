<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    public function Taller() {
        return $this->belongsTo(Taller::class);
    }
}
