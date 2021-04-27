<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepacienteRequest;
use App\Http\Requests\UpdatepacienteRequest;
use App\Repositories\pacienteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class pacienteController extends AppBaseController
{
    /** @var  pacienteRepository */
    private $pacienteRepository;

    public function __construct(pacienteRepository $pacienteRepo)
    {
        $this->pacienteRepository = $pacienteRepo;
    }

    /**
     * Display a listing of the paciente.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pacientes = $this->pacienteRepository->all();

        return view('pacientes.index')
            ->with('pacientes', $pacientes);
    }

    /**
     * Show the form for creating a new paciente.
     *
     * @return Response
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created paciente in storage.
     *
     * @param CreatepacienteRequest $request
     *
     * @return Response
     */
    public function store(CreatepacienteRequest $request)
    {
        $input = $request->all();

        $paciente = $this->pacienteRepository->create($input);

        Flash::success('Paciente creado correctamente!');

        return redirect(route('pacientes.index'));
    }

    /**
     * Display the specified paciente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $paciente = $this->pacienteRepository->find($id);

        if (empty($paciente)) {
            Flash::error('Paciente not found');

            return redirect(route('pacientes.index'));
        }

        return view('pacientes.show')->with('paciente', $paciente);
    }

    /**
     * Show the form for editing the specified paciente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paciente = $this->pacienteRepository->find($id);

        if (empty($paciente)) {
            Flash::error('Paciente not found');

            return redirect(route('pacientes.index'));
        }

        return view('pacientes.edit')->with('paciente', $paciente);
    }

    /**
     * Update the specified paciente in storage.
     *
     * @param int $id
     * @param UpdatepacienteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepacienteRequest $request)
    {
        $paciente = $this->pacienteRepository->find($id);

        if (empty($paciente)) {
            Flash::error('Paciente not found');

            return redirect(route('pacientes.index'));
        }

        $paciente = $this->pacienteRepository->update($request->all(), $id);

        Flash::success('Paciente actualizado correctamente!');

        return redirect(route('pacientes.index'));
    }

    /**
     * Remove the specified paciente from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paciente = $this->pacienteRepository->find($id);

        if (empty($paciente)) {
            Flash::error('Paciente not found');

            return redirect(route('pacientes.index'));
        }

        $this->pacienteRepository->delete($id);

        Flash::success('Paciente eliminado exitosamente!');

        return redirect(route('pacientes.index'));
    }
}
