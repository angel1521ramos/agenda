<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'paciente',
        'edad',
        'telefono',
        'escolaridad',
        'horario',
        'observaciones'
    ];
    public function user()
    {
    	return $this->belongsTo(User::class);
    	//un doctor tiene una o muchas citas
    }
}
