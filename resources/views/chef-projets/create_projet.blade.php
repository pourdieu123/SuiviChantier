<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Chef de Projet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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

                        <li class="p-2 hover:bg-indigo-700 rounded"><i class="fas fa-chart-bar mr-2"></i> Rapports</li>
                        <li class="p-2 hover:bg-indigo-700 rounded"><i class="fas fa-calendar-check mr-2"></i> Contrôles</li>
                        <li class="p-2 hover:bg-indigo-700 rounded"><i class="fas fa-bell mr-2"></i> Notifications</li><br><br><br><br>
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
            
            <!-- Contenu principal -->
            <div class="col-md-10 p-6">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card shadow">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0">Création d'un Nouveau Projet</h4>
                            </div>
                            <div class="card-body">
                                <form id="createProjetForm" action="/projets" method="POST">
                                    <!-- Champ caché pour CSRF Token (Laravel) -->
                                    <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}">
                                    
                                    <div class="mb-3">
                                        <label for="nom" class="form-label">Nom du projet <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="nom" name="nom" required>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="date_debut" class="form-label">Date de début <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="date_debut" name="date_debut" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="date_fin" class="form-label">Date de fin prévue<span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="date_fin" name="date_fin">
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="statut" class="form-label">Statut <span class="text-danger">*</span></label>
                                            <select class="form-select" id="statut" name="statut" required>
                                                <option value="">-- Sélectionner un statut --</option>
                                                <option value="planifie">Planifié</option>
                                                <option value="en_cours">En cours</option>
                                                <option value="en_pause">En pause</option>
                                                <option value="termine">Terminé</option>
                                                <option value="annule">Annulé</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="priorite" class="form-label">Clients<span class="text-danger">*</span></label>
                                            <select class="form-select" id="priorite" name="priorite">
                                                <option value="">-- Client1 --</option>
                                             
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="statut" class="form-label">Coût estimé (CFA) <span class="text-danger">*</span></label>
                                            <input type="number" step="20000" class="form-control w-full rounded-md" id="cout_estime" name="cout_estime" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="statut" class="form-label">Coût réel (CFA) <span class="text-danger">*</span></label>
                                            <input type="number" step="20000" class="form-control w-full rounded-md" id="cout_estime" name="cout_estime" required>
                                        </div>
                                    </div>
                                    
                                    
                                
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-secondary" onclick="window.location.href='/projets'">Annuler</button>
                                        <button type="submit" class="btn btn-primary">Créer le projet</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="px-6 py-4">
                    <a href="/">
                    <button onclick="window.history.back()" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left">
                            <line x1="19" y1="12" x2="5" y2="12"/>
                            <polyline points="12 19 5 12 12 5"/>
                        </svg>
                        Retour
                  
                    </button>
                    
                </a>
                </div>
            </div>
            </div>
           
        </div>
    </div> 
   
</body>
</html>