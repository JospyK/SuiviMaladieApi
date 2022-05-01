<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Traitement extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'traitements';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nom',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function maladies()
    {
        return $this->belongsToMany(ListeMaladie::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
