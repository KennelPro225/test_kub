<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;

    public function users ()
    {
        return $this->hasMany(User::class);
    }

    protected $guarded = [];

    public function offre()
    {
        return $this->hasMany(Offre::class);
    }
}
