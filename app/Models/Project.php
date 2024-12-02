<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Spécifier les champs qui peuvent être assignés en masse
    protected $fillable = ['nom', 'valeur_poids'];

    // Si la table porte un autre nom que le pluriel de 'Project', tu peux l'indiquer :
    // protected $table = 'projects';
}
