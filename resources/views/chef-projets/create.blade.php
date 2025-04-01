<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Gestion de Chantier</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/src/styles.css">
</head>
<style>
    sup{
        color: red;
    }
</style>
<body class="bg-gray-100">

    <div class="flex h-screen bg-gray-50">
    @include('sidebar')
        <!-- Main Content -->
        <div class="flex-1 p-8">
            <h2 class="text-2xl font-semibold mb-6">Créer votre Chef de Projet</h2>
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
         
                @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            
            @if (session('error'))
                <div class="bg-red-500 text-white p-4 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif
            
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <form  action="{{ route('chef-projets.store') }}" method="POST">
                   @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nom">Nom<sup>*</sup> </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom" type="text" placeholder="Nom du chef de projet" name="nom" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="prenom">Email<sup>*</sup> </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email du chef de projet" name="email" required>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline btn btn-success" type="submit">
                            Créer
                        </button>
                       
                        <a href="/chef-projets" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Voir la liste des Chefs de Projet</a>
                    </div>
                </form>
               
            </div>
        </div><br><br>
    
         
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
        

        

    </body>
  </html>
