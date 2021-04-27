<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class paciente
 * @package App\Models
 * @version April 21, 2021, 10:53 pm UTC
 *
 * @property string $rut_paciente
 * @property string $nombre_paciente
 * @property string $direccion
 * @property string $email
 * @property integer $telefono
 */
class paciente extends Model
{
    use SoftDeletes;

    public $table = 'pacientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'rut_paciente',
        'nombre_paciente',
        'direccion',
        'email',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rut_paciente' => 'string',
        'nombre_paciente' => 'string',
        'direccion' => 'string',
        'email' => 'string',
        'telefono' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rut_paciente' => 'required',
        'nombre_paciente' => 'required',
        'direccion' => 'required',
        'email' => 'email',
        'telefono' => 'required'
    ];

    
}
