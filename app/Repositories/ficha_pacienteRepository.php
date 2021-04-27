<?php

namespace App\Repositories;

use App\Models\ficha_paciente;
use App\Repositories\BaseRepository;

/**
 * Class ficha_pacienteRepository
 * @package App\Repositories
 * @version April 24, 2021, 10:58 pm UTC
*/

class ficha_pacienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'fecha',
        'hora_inicio',
        'doctor',
        'especialidad',
        'diagnostico'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ficha_paciente::class;
    }
}
