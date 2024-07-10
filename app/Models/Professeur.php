<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Professeur extends Model
{
    use HasFactory;
    protected string $nom;
    protected string $prenom;
    protected string $email;
    protected string $phone;
    protected string $adresse;
    protected bool $disponibilite;


    public function matiere() : HasMany
    {
        return $this->hasMany(Matiere::class);
    }

}
