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

        <!-- Sidebar -->
        <div class="w-64 bg-blue-900 text-white p-6">
            <div class="flex items-center gap-3 mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building-2"><path d="M6 22V4c0-.27 0-.55.07-.82a1.988 1.988 0 0 1 1.11-1.11C7.45 2 7.73 2 8 2h8c.27 0 .55 0 .82.07a1.988 1.988 0 0 1 1.11 1.11C18 3.45 18 3.73 18 4v18"/><path d="M2 14v6c0 .27 0 .55.07.82a1.988 1.988 0 0 0 1.11 1.11C3.45 22 3.73 22 4 22h16"/><path d="M14 8h.01"/><path d="M14 12h.01"/><path d="M14 16h.01"/><path d="M10 8h.01"/><path d="M10 12h.01"/><path d="M10 16h.01"/></svg>
                <h1 class="text-xl font-bold">7ELITE </h1>
            </div>
            
            <nav class="space-y-2">
                <button class="flex items-center gap-3 w-full p-3 rounded-lg hover:bg-blue-800 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building-2"><path d="M6 22V4c0-.27 0-.55.07-.82a1.988 1.988 0 0 1 1.11-1.11C7.45 2 7.73 2 8 2h8c.27 0 .55 0 .82.07a1.988 1.988 0 0 1 1.11 1.11C18 3.45 18 3.73 18 4v18"/><path d="M2 14v6c0 .27 0 .55.07.82a1.988 1.988 0 0 0 1.11 1.11C3.45 22 3.73 22 4 22h16"/><path d="M14 8h.01"/><path d="M14 12h.01"/><path d="M14 16h.01"/><path d="M10 8h.01"/><path d="M10 12h.01"/><path d="M10 16h.01"/></svg>
                    <span>Projets</span>
                </button>
                <button class="flex items-center gap-3 w-full p-3 rounded-lg hover:bg-blue-800 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    <span>Clients</span>
                </button>
                <button class="flex items-center gap-3 w-full p-3 rounded-lg hover:bg-blue-800 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-check"><path d="M8 4H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-2"/><path d="M8 2h8v4H8z"/><path d="m9 14 2 2 4-4"/></svg>
                    <span>Contrôles</span>
                </button>
                <button class="flex items-center gap-3 w-full p-3 rounded-lg hover:bg-blue-800 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" x2="8" y1="13" y2="13"/>
                        <line x1="16" x2="8" y1="17" y2="17"/>
                        <line x1="10" x2="8" y1="9" y2="9"/>
                    </svg>
                    <span>Rapports</span>
                </button>
                
                
                <button class="flex items-center gap-3 w-full p-3 rounded-lg hover:bg-blue-800 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
                    <span>Notifications</span>
                </button>
                <button class="flex items-center gap-3 w-full p-3 rounded-lg hover:bg-blue-800 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>
                    <span>Paramètres</span>
                </button>
            </nav>
          <br><br>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full bg-blue-600 hover:bg-red-700 text-white py-2 px-4 rounded flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                    <polyline points="16 17 21 12 16 7"/>
                    <line x1="21" y1="12" x2="9" y2="12"/>
                </svg>
                Déconnexion
            </button>
        </form>
  
        </div>

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
                       
                        <a href="/listecp" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Voir la liste des Chefs de Projet</a>
                    </div>
                </form>
               
            </div>
        </div><br><br>
        <form method="POST" action="{{ route('dashboard') }}">
            @csrf
        <div class="px-6 py-4">
            <button onclick="window.history.back()" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left">
                    <line x1="19" y1="12" x2="5" y2="12"/>
                    <polyline points="12 19 5 12 12 5"/>
                </svg>
                Retour
            </button>
        </div>
    </form>
        

    </body>
  </html>
