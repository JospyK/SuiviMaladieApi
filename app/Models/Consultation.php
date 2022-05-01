<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'consultations';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'description',
        'patient_id',
        'medecin_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function consultationOrdonnances()
    {
        return $this->hasMany(Ordonnance::class, 'consultation_id', 'id');
    }

    public function consultationExamen()
    {
        return $this->hasMany(Examan::class, 'consultation_id', 'id');
    }

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }

    public function medecin()
    {
        return $this->belongsTo(User::class, 'medecin_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
