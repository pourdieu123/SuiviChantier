

  
       
        @include('sidebar')
        <!-- Main Content -->
    
        <div class="flex-1 overflow-auto">
            <div class="p-8">
            <div class="flex justify-between items-center mb-8">
                    <h1 class="text-2xl font-bold text-gray-800">"Bienvenue, Admin ! Gérez et suivez vos chantiers facilement."</h1>
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-500 cursor-pointer"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
                            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center">
                                3
                            </span>
                        </div>
                        <img
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="Profile"
                            class="w-10 h-10 rounded-full"
                        />
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Stats Cards -->
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M6 22V4c0-.27 0-.55.07-.82a1.988 1.988 0 0 1 1.11-1.11C7.45 2 7.73 2 8 2h8c.27 0 .55 0 .82.07a1.988 1.988 0 0 1 1.11 1.11C18 3.45 18 3.73 18 4v18"/><path d="M2 14v6c0 .27 0 .55.07.82a1.988 1.988 0 0 0 1.11 1.11C3.45 22 3.73 22 4 22h16"/><path d="M14 8h.01"/><path d="M14 12h.01"/><path d="M14 16h.01"/><path d="M10 8h.01"/><path d="M10 12h.01"/><path d="M10 16h.01"/></svg>
                        </div>
                        <h3 class="text-gray-500 text-sm">Projets</h3>
                        <p class="text-2xl font-bold text-gray-800">12</p>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <h3 class="text-gray-500 text-sm">Clients</h3>
                        <p class="text-2xl font-bold text-gray-800">28</p>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="w-12 h-12 bg-indigo-500 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M2 18a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v2z"/><path d="M10 10V5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5"/><path d="M4 15v-3a6 6 0 0 1 6-6h0"/><path d="M14 6h0a6 6 0 0 1 6 6v3"/></svg>
                        </div>
                        <h3 class="text-gray-500 text-sm">Chefs de Projet</h3>
                        <p class="text-2xl font-bold text-gray-800">6</p>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </div>
                        <h3 class="text-gray-500 text-sm">Contrôles Validés</h3>
                        <p class="text-2xl font-bold text-gray-800">45</p>
                    </div>
                </div>

                <!-- Recent Projects -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <h2 class="text-xl font-bold text-gray-800 mb-6">Chantiers Récents</h2>
                        <div class="space-y-6">
                            <div class="border-b pb-4">
                                <div class="flex justify-between items-center mb-2">
                                    <h3 class="font-medium text-gray-800">Résidence Les Oliviers</h3>
                                    <span class="text-sm text-gray-500">En cours</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>

                            <div class="border-b pb-4">
                                <div class="flex justify-between items-center mb-2">
                                    <h3 class="font-medium text-gray-800">Centre Commercial Nord</h3>
                                    <span class="text-sm text-gray-500">En attente</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 30%"></div>
                                </div>
                            </div>

                            <div class="border-b pb-4 last:border-0 last:pb-0">
                                <div class="flex justify-between items-center mb-2">
                                    <h3 class="font-medium text-gray-800">École Municipale</h3>
                                    <span class="text-sm text-gray-500">Validation</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chefs de Projet -->
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <h2 class="text-xl font-bold text-gray-800 mb-6">Chefs de Projet</h2>
                        <div class="space-y-4">
                            <div class="flex items-center gap-4 pb-4 border-b">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Chef de projet" class="w-12 h-12 rounded-full" />
                                <div>
                                    <h3 class="font-medium text-gray-800">Thomas Martin</h3>
                                    <p class="text-sm text-gray-500">3 projets en cours</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 pb-4 border-b">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Chef de projet" class="w-12 h-12 rounded-full" />
                                <div>
                                    <h3 class="font-medium text-gray-800">Sophie Bernard</h3>
                                    <p class="text-sm text-gray-500">4 projets en cours</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Chef de projet" class="w-12 h-12 rounded-full" />
                                <div>
                                    <h3 class="font-medium text-gray-800">Pierre Dubois</h3>
                                    <p class="text-sm text-gray-500">2 projets en cours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
   
</body>
</html>