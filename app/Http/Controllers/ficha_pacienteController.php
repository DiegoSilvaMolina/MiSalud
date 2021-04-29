<?php
namespace App\Http\Controllers;

use App\Http\Requests\Createficha_pacienteRequest;
use App\Http\Requests\Updateficha_pacienteRequest;
use App\Repositories\ficha_pacienteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\paciente;

use Illuminate\Support\Facades\DB;

class ficha_pacienteController extends AppBaseController
{
    /** @var  ficha_pacienteRepository */
    private $fichaPacienteRepository;

    public function __construct(ficha_pacienteRepository $fichaPacienteRepo)
    {
        $this->fichaPacienteRepository = $fichaPacienteRepo;
    }

    /**
     * Display a listing of the ficha_paciente.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fichaPacientes = $this->fichaPacienteRepository->all();
        $pacientes = paciente::all();
        

        //dd($pacientes);
        
        

        return view('ficha_pacientes.index')
            ->with('fichaPacientes', $fichaPacientes)->with('pacientes',$pacientes);
    }

    /**
     * Show the form for creating a new ficha_paciente.
     *
     * @return Response
     */
    public function create()
    {
        return view('ficha_pacientes.create');
    }

    /**
     * Store a newly created ficha_paciente in storage.
     *
     * @param Createficha_pacienteRequest $request
     *
     * @return Response
     */
    public function store(Createficha_pacienteRequest $request)
    {
        $input = $request->all();

        $fichaPacientes = $this->fichaPacienteRepository->create($input);
        $pacientes = paciente::all();
        

        Flash::success('Ficha Paciente guardada exitosamente!');

        return redirect(route('fichaPacientes.index'));


        return view('ficha_pacientes.index')->with('fichaPacientes', $fichaPacientes);
    }

    /**
     * Display the specified ficha_paciente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fichaPaciente = $this->fichaPacienteRepository->find($id);
        $pacientes = paciente::all();
        

        //$sql= 'SELECT P.nombre_paciente AS nombre,fp.fecha, FP.hora_inicio AS hora_inicio,FP.doctor, FP.especialidad,FP.diagnostico FROM ficha_pacientes FP INNER JOIN  pacientes P;';
        //$ficha=DB::select($sql);

        if (empty($fichaPaciente)) {
            Flash::error('Ficha Paciente not found');

            return redirect(route('fichaPacientes.index'));
        }

        return view('ficha_pacientes.show')->with('fichaPaciente', $fichaPaciente)->with('pacientes',$pacientes);
    }

    /**
     * Show the form for editing the specified ficha_paciente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fichaPaciente = $this->fichaPacienteRepository->find($id);

        if (empty($fichaPaciente)) {
            Flash::error('Ficha Paciente not found');

            return redirect(route('fichaPacientes.index'));
        }

        return view('ficha_pacientes.edit')->with('fichaPaciente', $fichaPaciente);
    }

    /**
     * Update the specified ficha_paciente in storage.
     *
     * @param int $id
     * @param Updateficha_pacienteRequest $request
     *
     * @return Response
     */
    public function update($id, Updateficha_pacienteRequest $request)
    {
        $fichaPaciente = $this->fichaPacienteRepository->find($id);

        if (empty($fichaPaciente)) {
            Flash::error('Ficha Paciente not found');

            return redirect(route('fichaPacientes.index'));
        }

        $fichaPaciente = $this->fichaPacienteRepository->update($request->all(), $id);

        Flash::success('Ficha Paciente actualizada correctamente!');

        return redirect(route('fichaPacientes.index'));
    }

    /**
     * Remove the specified ficha_paciente from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fichaPaciente = $this->fichaPacienteRepository->find($id);

        if (empty($fichaPaciente)) {
            Flash::error('Ficha Paciente not found');

            return redirect(route('fichaPacientes.index'));
        }

        $this->fichaPacienteRepository->delete($id);

        Flash::success('Ficha Paciente eliminada exitosamente!');

        return redirect(route('fichaPacientes.index'));
    }
}
