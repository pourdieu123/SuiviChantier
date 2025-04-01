<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Chef de Projet</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
</head>
<body class="bg-gray-100">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 bg-indigo-800 min-h-screen p-0">
                <div class="p-4">
                    <h2 class="text-white text-xl font-bold mb-6"></h2>
                    <ul class="text-white space-y-2">
                       <li class="p-2 bg-indigo-900 rounded">
                           <i class="fas fa-hard-hat mr-2"></i> 7ELITE
                       </li>
                        <li class="p-2 hover:bg-indigo-700 rounded"><i class="fas fa-folder-open mr-2"></i> Projets</li>
                        <li class="p-2 hover:bg-indigo-700 rounded"><i class="fas fa-chart-bar mr-2"></i> Rapports</li>
                        <li class="p-2 hover:bg-indigo-700 rounded"><i class="fas fa-calendar-check mr-2"></i> Contrôles</li>
                        <li class="p-2 hover:bg-indigo-700 rounded"><i class="fas fa-bell mr-2"></i> Notifications</li><br><br><br><br><br><br>
                        <li class="p-2 hover:bg-indigo-700 rounded"><i class="fas fa-cogs mr-2"></i> Paramètres</li>
                        <form method="POST" action="{{ route('logout') }}">
                           @csrf
                               <button type="submit" class="w-full text-left p-2 hover:bg-indigo-700 rounded text-white">
                               <i class="fas fa-sign-out-alt mr-2"></i> Déconnexion
                           </button>
                       </form>
                     </ul>
                </div>
            </div>
            <!-- Main Content -->
            <div class="col-md-10 p-4">
                <!-- Header -->
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Soyzez la bienvenue Chef Projet</h1>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                           
                    
                        </div>
                       
                    </div>
                </div>
                
                <!-- Stats Cards -->
                <div class="row g-3 mb-4">
                    <div class="col-md-3">
                        <div class="bg-white p-4 rounded-lg shadow">
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Progression</p>
                                    <h3 class="text-2xl font-bold text-gray-800">68%</h3>
                                </div>
                                <div class="h-12 w-12 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                                    <i class="fas fa-chart-pie text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4 bg-gray-200 rounded-full h-2.5">
                                <div class="bg-green-500 h-2.5 rounded-full" style="width: 68%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="bg-white p-4 rounded-lg shadow">
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Budget</p>
                                    <h3 class="text-2xl font-bold text-gray-800">42.5K€</h3>
                                </div>
                                <div class="h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-500">
                                    <i class="fas fa-euro-sign text-xl"></i>
                                </div>
                            </div>
                            <p class="text-sm text-gray-500 mt-4">Budget total: <span class="text-green-500">50K€ (85%)</span></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="bg-white p-4 rounded-lg shadow">
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Tâches</p>
                                    <h3 class="text-2xl font-bold text-gray-800">24/35</h3>
                                </div>
                                <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-500">
                                    <i class="fas fa-tasks text-xl"></i>
                                </div>
                            </div>
                            <div class="flex mt-4 text-sm">
                                <span class="text-green-500 mr-4"><i class="fas fa-check-circle mr-1"></i> 24 complétées</span>
                                <span class="text-yellow-500"><i class="fas fa-clock mr-1"></i> 11 en attente</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="bg-white p-4 rounded-lg shadow">
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Jours restants</p>
                                    <h3 class="text-2xl font-bold text-gray-800">14</h3>
                                </div>
                                <div class="h-12 w-12 rounded-full bg-red-100 flex items-center justify-center text-red-500">
                                    <i class="fas fa-calendar text-xl"></i>
                                </div>
                            </div>
                            <p class="text-sm text-red-500 mt-4"><i class="fas fa-exclamation-circle mr-1"></i> Livraison finale: 14/04/2025</p>
                        </div>
                    </div>
                </div>
                @include('chef-projets.liste_projet')
                
                
                <!-- Risk and Issues -->
                <div class="row g-3 mt-6">
                    <div class="col-md-12">
                        <div class="bg-white p-4 rounded-lg shadow">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-lg font-bold text-gray-800">Risques et Problèmes</h2>
                                <a href="#" class="text-indigo-600 text-sm">Ajouter un risque</a>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                        <tr>
                                            <th class="px-3 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                                            <th class="px-3 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase">Type</th>
                                            <th class="px-3 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase">Impact</th>
                                            <th class="px-3 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase">Probabilité</th>
                                            <th class="px-3 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
                                            <th class="px-3 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm text-gray-800">Retard dans l'intégration de l'API de paiement</td>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm">
                                                <span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">Problème</span>
                                            </td>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm">
                                                <span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">Élevé</span>
                                            </td>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm">
                                                <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Moyen</span>
                                            </td>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm">
                                                <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">En cours</span>
                                            </td>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm text-blue-600">
                                                <a href="#">Détails</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm text-gray-800">Performance du site sur mobile</td>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm">
                                                <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Risque</span>
                                            </td>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm">
                                                <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Moyen</span>
                                            </td>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm">
                                                <span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">Élevé</span>
                                            </td>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm">
                                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Mitigé</span>
                                            </td>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm text-blue-600">
                                                <a href="#">Détails</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm text-gray-800">Disponibilité des serveurs pour le déploiement</td>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm">
                                                <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Risque</span>
                                            </td>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm">
                                                <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Moyen</span>
                                            </td>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm">
                                                <span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">Élevé</span>
                                            </td>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm">
                                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Mitigé</span>
                                            </td>
                                            <td class="px-3 py-2 whitespace-nowrap text-sm text-blue-600">
                                                <a href="#">Détails</a>
                                            </td>
                                          
</body>
</html>
   