<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Exame extends Model
{
    use HasFactory;
    protected $table = "exames";
    public $timestamps = false;

    public function consultas(): BelongsTo{
        return $this->belongsTo(Consulta::class);
    }
    
}
