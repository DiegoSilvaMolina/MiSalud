<?php

namespace App\Repositories;

use App\Models\ficha_paciente;
use App\Repositories\BaseRepository;

/**
 * Class ficha_pacienteRepository
 * @package App\Repositories
 * @version April 28, 2021, 5:13 am UTC
*/

class ficha_pacienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fk_paciente',
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
