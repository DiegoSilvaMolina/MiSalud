<?php

namespace App\Providers;
use App\Models\Paciente;
//use App\Models\Role;
use Spatie\Permission\Models\Role;
use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['ficha_pacientes.fields'], function ($view) {
            $pacienteItems = Paciente::pluck('nombre_paciente','id')->toArray();
            $view->with('pacienteItems', $pacienteItems);
        });
        View::composer(['ficha_pacientes.fields'], function ($view) {
            $pacienteItems = Paciente::pluck('nombre_paciente','nombre_paciente')->toArray();
            $view->with('pacienteItems', $pacienteItems);
        });
        View::composer(['ficha_pacientes.fields'], function ($view) {
            $pacienteItems = Paciente::pluck('nombre_paciente','nombre_paciente')->toArray();
            $view->with('pacienteItems', $pacienteItems);
        });
        View::composer(['ficha_pacientes.fields'], function ($view) {
            $pacienteItems = Paciente::pluck('nombre_paciente','id')->toArray();
            $view->with('pacienteItems', $pacienteItems);
        });
        View::composer(['users.fields'], function ($view) {
            $roleItems = Role::pluck('name','name')->toArray();
            $view->with('roleItems', $roleItems);
        });
        View::composer(['usuarios.fields'], function ($view) {
            $roleItems = Role::pluck('name','name')->toArray();
            $view->with('roleItems', $roleItems);
        });
        //
    }
}