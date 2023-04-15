<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Paciente extends Model
{
    use HasFactory;
    protected $table="paciente";
    public $timestamps = false;

    public function Consultas(): HasMany
    {
        return $this->hasMany(Consulta::class);
    }

    public function Medico(): HasOneThrough
    {
        return $this->hasOneThrough(Medico::class, Consulta::class);
    }

    public function Login():HasOne
    {
        return $this->HasOne(Login::class);
    }

}

    
