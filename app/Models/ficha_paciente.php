<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ficha_paciente
 * @package App\Models
 * @version April 24, 2021, 10:58 pm UTC
 *
 * @property string $nombre
 * @property string $fecha
 * @property time $hora_inicio
 * @property string $doctor
 * @property string $especialidad
 * @property string $diagnostico
 */
class ficha_paciente extends Model
{
    use SoftDeletes;

    public $table = 'ficha_pacientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'fecha',
        'hora_inicio',
        'doctor',
        'especialidad',
        'diagnostico'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'fecha' => 'date',
        'doctor' => 'string',
        'especialidad' => 'string',
        'diagnostico' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'fecha' => 'required',
        'hora_inicio' => 'required',
        'doctor' => 'required',
        'especialidad' => 'required',
        'diagnostico' => 'required'
    ];

    
}
