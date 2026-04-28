<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Prospect extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'boat_type', 'boat_length', 'services', 'message'
    ];

    // 1. Cast automatique pour le JSON (services)
    protected $casts = [
        'services' => 'array',
    ];

    // 2. FONCTIONS DE CHIFFREMENT (Encrypt/Decrypt Simple)

    // Quand on enregistre en base, on chiffre email et phone
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = Crypt::encrypt($value);
    }

    public function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = Crypt::encrypt($value);
    }

    // Quand on récupère de la base, on déchiffre automatiquement
    public function getEmailAttribute($value)
    {
        try {
            return Crypt::decrypt($value);
        } catch (\Exception $e) {
            return $value; // Fallback si pas chiffré
        }
    }

    public function getPhoneAttribute($value)
    {
        try {
            return Crypt::decrypt($value);
        } catch (\Exception $e) {
            return $value;
        }
    }
}
