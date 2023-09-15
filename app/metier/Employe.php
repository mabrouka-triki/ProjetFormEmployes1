<?php

namespace App\metier;

use App\Exceptions\MonException;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employe extends Model
{
    // On déclare la table Employe
    protected $table = 'Employe';
    public $timestamps = false;
    protected $fillable = [
        'civilite',
        'prenom',
        'nom',
        'pwd',
        'profil',
        'interet',
        'message',
    ];


}
