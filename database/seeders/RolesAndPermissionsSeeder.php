<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
    
            // Liste des rôles
            $roles = ['Admin', 'Chef de Projet', 'Client', 'Contrôleur'];

            // Création des rôles s'ils n'existent pas
            foreach ($roles as $role) {
                Role::firstOrCreate(['name' => $role]);
            }

            // Liste des permissions et leurs rôles
            $permissions = [
                ['name' => 'create_chef_projet', 'role' => 'Admin'],
                ['name' => 'delete_projet', 'role' => 'Admin'],
                ['name' => 'create_client', 'role' => 'Admin'],
                ['name' => 'update_client', 'role' => 'Admin'],
                ['name' => 'delete_client', 'role' => 'Admin'],
                ['name' => 'create_fiche_controle', 'role' => 'Chef de Projet'],
                ['name' => 'write_rapport', 'role' => 'Chef de Projet'],
                ['name' => 'reject_fiche_controle', 'role' => 'Chef de Projet'],
                ['name' => 'validate_rapport', 'role' => 'Chef de Projet'],
                ['name' => 'create_projet', 'role' => 'Chef de Projet'],
                ['name' => 'create_controleur', 'role' => 'Chef de Projet'],
                ['name' => 'update_projet', 'role' => 'Chef de Projet'],
                ['name' => 'delete_projet', 'role' => 'Chef de Projet'],
                ['name' => 'create_equipe', 'role' => 'Chef de Projet'],
                ['name' => 'update_equipe', 'role' => 'Chef de Projet'],
                ['name' => 'delete_equipe', 'role' => 'Chef de Projet'],
                ['name' => 'view_rapport', 'role' => 'Client','Admin'],
                ['name' => 'view_fiche_controle', 'role' => 'Controleur','Chef de Projet'],
                // Ajoutez d'autres permissions ici
            ];

            // Création des permissions et assignation aux rôles
            foreach ($permissions as $perm) {
                $permission = Permission::firstOrCreate(['name' => $perm['name']]);

                // Vérifie si le rôle existe avant d’assigner la permission
                $role = Role::where('name', $perm['role'])->first();
                if ($role) {
                    // Synchronise les permissions pour gérer les modifications
                    $role->syncPermissions($role->permissions->pluck('name')->merge([$perm['name']]));
                }
            }
        
    }
}

// public function run()
// {
//     // Création des rôles
//     $adminRole = Role::create(['name' => 'admin']);
//     $chefProjetRole = Role::create(['name' => 'chef_projet']);
//     $clientRole = Role::create(['name' => 'client']);
//     $controleurRole = Role::create(['name' => 'controleur']);

//     // Création des permissions
//     $viewTachePermission = Permission::create(['name' => 'view_tache']);
//     $createTachePermission = Permission::create(['name' => 'create_tache']);
//     $updateTachePermission = Permission::create(['name' => 'update_tache']);
//     $deleteTachePermission = Permission::create(['name' => 'delete_tache']);
//     $assignProjectPermission = Permission::create(['name' => 'assign_project']);
//     $manageUsersPermission = Permission::create(['name' => 'manage_users']);
    
//     // Assigner les permissions aux rôles
//     $adminRole->givePermissionTo([
//         $viewTachePermission,
//         $createTachePermission,
//         $updateTachePermission,
//         $deleteTachePermission,
//         $assignProjectPermission,
//         $manageUsersPermission
//     ]);

//     $chefProjetRole->givePermissionTo([
//         $viewTachePermission,
//         $createTachePermission,
//         $updateTachePermission,
//         $assignProjectPermission
//     ]);

//     $clientRole->givePermissionTo([
//         $viewTachePermission,
//         $createTachePermission
//     ]);

//     $controleurRole->givePermissionTo([
//         $viewTachePermission,
//         $updateTachePermission
//     ]);

//     // Assigner les rôles aux utilisateurs
//     $admin = User::where('email', 'admin@domain.com')->first();
//     $admin->assignRole('admin');

//     $chefProjet = User::where('email', 'chef_projet@domain.com')->first();
//     $chefProjet->assignRole('chef_projet');

//     $client = User::where('email', 'client@domain.com')->first();
//     $client->assignRole('client');

//     $controleur = User::where('email', 'controleur@domain.com')->first();
//     $controleur->assignRole('controleur');
// }

