<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected string $nom;
    protected string $prenom;
    protected string $email;
    protected string $phone;
    protected string $adresse;
    protected string $date_naissance;
}
