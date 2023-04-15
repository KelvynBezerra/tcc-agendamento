<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Login extends Model
{
    use HasFactory;
    protected $table="login";
    public $timestamps = false;

    public function Paciente(): HasOne
    {
        return $this->HasOne(Paciente::class);
    }

}
