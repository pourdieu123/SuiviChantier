<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Liste des utilisateurs avec leurs rôles respectifs
                $users = [
                    [
                        'name' => 'avesig',
                        'email' => 'avesig@gmail.com',
                        'password'=> bcrypt('avesig123'),
                        'role' => 'Admin'
                    ],
                    [
                        'name' => 'Bob',
                        'email' => 'bob@gmail.com',
                        'password'=> bcrypt('bob123'),
                        'role' => ' Chef de Projet'
                    ],
                    [
                        'name' => 'Charlie',
                        'email' => 'charlie@gmail.com',
                        'password'=> bcrypt('charlie123'),
                        'role' => 'Client'
                    ],
                    [
                        'name' => 'Ernesto',
                        'email' => 'ernesto@gmail.com',
                        'password'=> bcrypt('ernesto123'),
                        'role' => 'Controleur'
                    ]
                ];
        
                foreach ($users as $userData) {
                    // Créez l'utilisateur avec un mot de passe par défaut
                    $user = User::firstOrCreate(
                      
                        [ 
                            
                            'name' => $userData['name'],
                            'email' => $userData['email'],
                            'password' => Hash::make('azerty') // Mot de passe par défaut
                        ]
                        );}
                        $role = Role::firstOrCreate(
                          [
                            'name' => $userData['role']
                          ]
                        );
                  $user->assignRole($role);
    }
}
