<?php

namespace App\Repositories;

use App\Models\paciente;
use App\Repositories\BaseRepository;

/**
 * Class pacienteRepository
 * @package App\Repositories
 * @version April 21, 2021, 10:53 pm UTC
*/

class pacienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rut_paciente',
        'nombre_paciente',
        'direccion',
        'email',
        'telefono'
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
        return paciente::class;
    }
}
