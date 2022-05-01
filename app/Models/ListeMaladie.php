<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListeMaladie extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const CATEGORIE_SELECT = [
        'A' => 'A',
        'B' => 'B',
    ];

    public $table = 'liste_maladies';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nom',
        'description',
        'categorie',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function maladieSymptomes()
    {
        return $this->belongsToMany(Symptome::class);
    }

    public function maladieTraitements()
    {
        return $this->belongsToMany(Traitement::class);
    }

    public function maladieListeExamen()
    {
        return $this->belongsToMany(ListeExaman::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
