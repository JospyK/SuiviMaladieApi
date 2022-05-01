<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListeExaman extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'liste_examen';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nom',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function examenUsers()
    {
        return $this->belongsToMany(User::class);
    }

    public function maladies()
    {
        return $this->belongsToMany(ListeMaladie::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
