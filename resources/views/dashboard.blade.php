@include('sidebar')
  {{-- Main Content --}}
 <div class="col-md-10 px-4 py-5">
    <!-- Top Navigation Bar -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Bienvenue Admin,Gérez et suivez bien vos chantiers facilement.</h1>
    
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <!-- Project Card -->
        <div class="bg-white rounded-lg shadow p-4">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-gray-500 text-sm">Projets Actifs</p>
                    <h3 class="text-2xl font-bold text-gray-800">12</h3>
                </div>
                <div class="bg-blue-100 rounded-full p-3">
                    <i class="fas fa-folder text-blue-600 text-xl"></i>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex justify-between text-sm">
                    <span class="text-gray-500">Progression</span>
                    <span class="text-gray-700 font-medium">68%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                    <div class="bg-blue-600 h-2 rounded-full" style="width: 68%"></div>
                </div>
            </div>
        </div>

        <!-- Tasks Card -->
        <div class="bg-white rounded-lg shadow p-4">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-gray-500 text-sm">Chefs de Projets </p>
                    <h3 class="text-2xl font-bold text-gray-800">6</h3>
                </div>
                <div class="bg-blue-100 rounded-full p-3">
                    <i class="fas fa-users-cog text-blue-600 text-xl"></i>
                </div>
               
            </div>
            <div class="mt-4">
                <div class="flex justify-between text-sm">
                    <span class="text-gray-500">Projets en charge</span>
                    <span class="text-blue-500 font-medium">12</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                    <div class="bg-blue-600 h-2 rounded-full" style="width: 60%"></div>
                </div>
            </div>
        </div>
        

        <!-- Budget Card -->
        <div class="bg-white rounded-lg shadow p-4">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-gray-500 text-sm">Budget Utilisé</p>
                    <h3 class="text-2xl font-bold text-gray-800">576k FCFA</h3>
                </div>
                <div class="flex items-center gap-2">
                    <i class="text-green-600 text-xl"></i>
                    <span class="font-bold text-green-600">CFA</span>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex justify-between text-sm">
                    <span class="text-gray-500">Budget total</span>
                    <span class="text-gray-700 font-medium">820 FCFA</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                    <div class="bg-purple-600 h-2 rounded-full" style="width: 70%"></div>
                </div>
            </div>
        </div>

        <!-- Team Card -->
        <div class="bg-white rounded-lg shadow p-4">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-gray-500 text-sm">Clients</p>
                    <h3 class="text-2xl font-bold text-gray-800">12</h3>
                </div>
                <div class="bg-purple-100 rounded-full p-3">
                    <i class="fas fa-handshake text-purple-600 text-xl"></i>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex justify-between text-sm">
                    <span class="text-gray-500">Projets en cours</span>
                    <span class="text-gray-700 font-medium">34 projets</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                    <div class="bg-purple-600 h-2 rounded-full" style="width: 75%"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow p-4 mb-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Liste des Projets en Cours</h3>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">+ Ajouter un Projet</button>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase">Nom</th>
                        <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase">Client</th>
                        <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase">Date Début</th>
                        <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase">Date Fin</th>
                        <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
                        <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase">Coût Estimé</th>
                        <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase">Coût Réel</th>
                        <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="py-3 px-4 whitespace-nowrap">Résidence Les Cèdres</td>
                        <td class="py-3 px-4 whitespace-nowrap">Groupe Immobilier Nord</td>
                        <td class="py-3 px-4 whitespace-nowrap">01 Mars 2025</td>
                        <td class="py-3 px-4 whitespace-nowrap">15 Juin 2025</td>
                        <td class="py-3 px-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">En cours</span>
                        </td>
                        <td class="py-3 px-4 whitespace-nowrap">245,000 CFA</td>
                        <td class="py-3 px-4 whitespace-nowrap">-</td>
                        <td class="py-3 px-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-2">
                                <button class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-eye"></i></button>
                                <button class="text-blue-600 hover:text-blue-900"><i class="fas fa-edit"></i></button>
                                <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <!-- Autres projets -->
                </tbody>
            </table>
        </div>
        <div class="flex justify-between items-center mt-4">
            <div class="text-sm text-gray-500">Affichage de X sur Y projets</div>
            <div class="flex space-x-2">
                <button class="px-3 py-1 bg-gray-200 rounded-md text-gray-600 hover:bg-gray-300">Précédent</button>
                <button class="px-3 py-1 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">1</button>
                <button class="px-3 py-1 bg-gray-200 rounded-md text-gray-600 hover:bg-gray-300">2</button>
                <button class="px-3 py-1 bg-gray-200 rounded-md text-gray-600 hover:bg-gray-300">3</button>
                <button class="px-3 py-1 bg-gray-200 rounded-md text-gray-600 hover:bg-gray-300">Suivant</button>
            </div>
        </div>
    </div>
    

    <!-- Tasks and Notifications Row -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Recent Tasks -->
        <div class="bg-white rounded-lg shadow p-4">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Tâches Récentes</h3>
            <div class="space-y-4">
                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                    <div class="flex-shrink-0 mr-3">
                        <div class="bg-blue-100 rounded-full p-2">
                            <i class="fas fa-clipboard-check text-blue-600"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-sm font-medium text-gray-800">Validation des plans d'électricité</h4>
                        <p class="text-xs text-gray-500">Résidence Les Cèdres - Échéance: 05/04/2025</p>
                    </div>
                    <div class="flex-shrink-0">
                        <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">En attente</span>
                    </div>
                </div>
                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                    <div class="flex-shrink-0 mr-3">
                        <div class="bg-green-100 rounded-full p-2">
                            <i class="fas fa-truck text-green-600"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-sm font-medium text-gray-800">Livraison matériaux de construction</h4>
                        <p class="text-xs text-gray-500">Centre Commercial Horizon - Échéance: 10/04/2025</p>
                    </div>
                    <div class="flex-shrink-0">
                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Validé</span>
                    </div>
                </div>
                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                    <div class="flex-shrink-0 mr-3">
                        <div class="bg-red-100 rounded-full p-2">
                            <i class="fas fa-exclamation-circle text-red-600"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-sm font-medium text-gray-800">Inspection de sécurité</h4>
                        <p class="text-xs text-gray-500">Clinique Saint-Joseph - Échéance: 02/04/2025</p>
                    </div>
                    <div class="flex-shrink-0">
                        <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-800">Urgent</span>
                    </div>
                </div>
                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                    <div class="flex-shrink-0 mr-3">
                        <div class="bg-purple-100 rounded-full p-2">
                            <i class="fas fa-users text-purple-600"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-sm font-medium text-gray-800">Réunion avec l'équipe de conception</h4>
                        <p class="text-xs text-gray-500">Projet Tour Eiffel - Échéance: 08/04/2025</p>
                    </div>
                    <div class="flex-shrink-0">
                        <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Planifié</span>
                    </div>
                </div>
            </div>
            <div class="mt-4 text-center">
                <button class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Voir toutes les tâches</button>
            </div>
        </div>

        

</body>
</html>