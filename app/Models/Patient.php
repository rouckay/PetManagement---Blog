<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function Owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function treatment()
    {
        return $this->hasMany(Treatment::class);
    }
}
