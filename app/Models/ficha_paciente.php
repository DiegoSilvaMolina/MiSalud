<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\paciente;

/**
 * Class ficha_paciente
 * @package App\Models
 * @version April 28, 2021, 5:13 am UTC
 *
 * @property integer $fk_paciente
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
        'fk_paciente',
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
        'fk_paciente' => 'integer',
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
        'fk_paciente' => 'required',
        'fecha' => 'required',
        'hora_inicio' => 'required',
        'doctor' => 'required',
        'especialidad' => 'required',
        'diagnostico' => 'required'
    ];

    
}
