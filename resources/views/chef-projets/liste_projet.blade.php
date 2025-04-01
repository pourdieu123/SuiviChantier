<div class="bg-white rounded-lg shadow p-4 mb-6">
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold text-gray-800">Liste des Projets en Cours</h3>
        <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700"> Ajouter un Projet</button>
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
