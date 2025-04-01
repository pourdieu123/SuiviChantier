<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suivi Chantier</title>
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
                       <a href="{{ route('chef-projets.create') }}"> <li class="p-2 hover:bg-indigo-700 rounded"><i class="fas fa-users-cog mr-2"></i> ChefProjets</li> </a>
                        <li class="p-2 hover:bg-indigo-700 rounded"><i class="fas fa-user-tie mr-2"></i> Clients</li>
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