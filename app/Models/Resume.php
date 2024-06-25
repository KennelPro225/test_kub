<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($candidature) {
            // Vérifier si le matricule est déjà généré pour éviter des mises à jour infinies
            if (empty($candidature->numero_candidature)) {
                $candidature->numero_candidature = self::generateMatricule($candidature->id);
                $candidature->save();
            }
        });
    }

    // Fonction pour générer un matricule basé sur l'ID
    private static function generateMatricule($id)
    {
        return 'CAND-' . str_pad($id, "8", '0', STR_PAD_LEFT);
    }
}
