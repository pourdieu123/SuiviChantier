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
    
        <div class="d-flex">
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
        <div class="container py-4">
            <h1 class="mb-4 text-center " style="font-size:25px">Attribution d'Équipe au Projet</h1>
            
            <!-- Informations du projet -->
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Informations du Projet</h4>
                </div>
                <div class="card-body">
                    <div class="mb-2"><strong>Nom du projet:</strong> <span id="projetNom"></span></div>
                    <div class="mb-2"><strong>Date de début:</strong> <span id="projetDateDebut"></span></div>
                    <div class="mb-2"><strong>Date de fin prévue:</strong> <span id="projetDateFin"></span></div>
                    <div class="mb-2"><strong>Statut:</strong> <span id="projetStatut"></span></div>
                    <div><strong>Description:</strong> <span id="projetDescription"></span></div>
                </div>
            </div>
            
            <!-- Formulaire d'attribution d'équipe -->
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h1 class="mb-0">Attribuer une Équipe</h1>
                </div>
                <div class="card-body">
                    <form id="attributionForm" action="/projets/{id}/attribution-equipe" method="POST">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}">
                        <input type="hidden" name="projet_id" id="projet_id">
                        
                        <!-- Sélection d'équipe existante -->
                        <div class="mb-4">
                            <label for="equipe_id" class="form-label">Sélectionnez une équipe existante</label>
                            <select class="form-select" id="equipe_id" name="equipe_id">
                                <option value="">-- Choisir une équipe --</option>
                            </select>
                        </div>
                        
                        <div class="text-center mb-3">
                            <h5>OU</h5>
                        </div>
                        
                        <h5 class="border-bottom pb-2 mb-3">Créer une nouvelle équipe</h5>
                        
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom de la nouvelle équipe</label>
                            <input type="text" class="form-control" id="nom" name="nom">
                        </div>
                        
                        <div class="mb-4">
                            <label for="id_chef_projets" class="form-label">Chef de projet</label>
                            <select class="form-select" id="id_chef_projets" name="id_chef_projets">
                                <option value="">Sélectionnez un chef de projet</option>
                            </select>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" onclick="window.location.href='/projets'">Retour</button>
                            <button type="submit" class="btn btn-primary">Attribuer au Projet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
