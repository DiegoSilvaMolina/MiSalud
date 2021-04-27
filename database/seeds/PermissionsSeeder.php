<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //rol de admin
        $permissions_array=[];
        //permisos de pacientes
        array_push($permissions_array, Permission::create(['name' => 'create_pacientes']));
        array_push($permissions_array, Permission::create(['name' => 'edit_pacientes']));
        array_push($permissions_array, Permission::create(['name' => 'delete_pacientes']));
        //permisos de users
        array_push($permissions_array, Permission::create(['name' => 'create_users']));
        array_push($permissions_array, Permission::create(['name' => 'edit_users']));
        array_push($permissions_array, Permission::create(['name' => 'delete_users']));
        array_push($permissions_array, Permission::create(['name' => 'view_users']));
        //permisos de ficha paciente
        array_push($permissions_array, Permission::create(['name' => 'create_ficha_pacientes']));
        array_push($permissions_array, Permission::create(['name' => 'edit_ficha_pacientes']));
        array_push($permissions_array, Permission::create(['name' => 'delete_ficha_pacientes']));

        //poner en variable viewPaciente para nuevo rol(paciente)
        $viewPacientesPermission = Permission::create(['name' => 'view_pacientes']);
        $viewFichaPacientesPermission = Permission::create(['name' => 'view_ficha_pacientes']);
        array_push($permissions_array, $viewPacientesPermission, $viewFichaPacientesPermission); //aca se añade los permisos de array y el permiso de view_pacientes
        $superAdminRole = Role::create(['name' => 'super_admin']);
        $superAdminRole->syncPermissions($permissions_array);
        //rol de paciente
        $viewPacientesRole = Role::create(['name' => 'view_pacientes']);
        $viewPacientesRole->givePermissionTo($viewPacientesPermission, $viewFichaPacientesPermission);
        
        $userSuperAdmin= User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@admin.com',
            'password' => Hash::make('superadmin'),
        ]);
        $userSuperAdmin->assignRole('super_admin');

        $userViewPacientes= User::create([
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => Hash::make('testtest'),
        ]);
        $userViewPacientes->assignRole('view_pacientes');

    }
}
