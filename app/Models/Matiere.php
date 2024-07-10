<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Matiere extends Model
{
    use HasFactory;

    protected string $nom;
    protected string $code;
    protected string $horaire;

    public function professeur() : BelongsTo
    {
        return $this->belongsTo(Professeur::class);
    }
}
