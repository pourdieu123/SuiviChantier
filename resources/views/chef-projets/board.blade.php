<!DOCTYPE html>
   <html lang="fr">
   
   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Gestion de Chantier</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
     <script src="https://cdn.tailwindcss.com"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="/src/styles.css">
    <script>
    document.addEventListener("DOMContentLoaded", function() {
      const texte = "Bienvenue sur votre tableau de bord, Chef de Projet !";
      let i = 0;
      const element = document.getElementById("texte-defilant");

      function ecrireTexte() {
        if (i < texte.length) {
          element.textContent += texte.charAt(i);
          i++;
          setTimeout(ecrireTexte, 100);
        }
      }

      ecrireTexte();
    });
  </script>
   </head>
   
   <body>
     <div class="d-flex h-screen">
       <!-- Barre latérale -->
       <div class="w-64 bg-blue-900 text-white p-6">
         <div class="flex items-center gap-3 mb-8">
           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="lucide lucide-building-2">
             <path d="M6 22V4c0-.27 0-.55.07-.82a1.988 1.988 0 0 1 1.11-1.11C7.45 2 7.73 2 8 2h8c.27 0 .55 0 .82.07a1.988 1.988 0 0 1 1.11 1.11C18 3.45 18 3.73 18 4v18" />
             <path d="M2 14v6c0 .27 0 .55.07.82a1.988 1.988 0 0 0 1.11 1.11C3.45 22 3.73 22 4 22h16" />
             <path d="M14 8h.01" />
             <path d="M14 12h.01" />
             <path d="M14 16h.01" />
             <path d="M10 8h.01" />
             <path d="M10 12h.01" />
             <path d="M10 16h.01" />
           </svg>
           <h1 class="text-xl font-bold">AVESIG</h1>
         </div>
   
         <nav class="space-y-2">
           <button class="flex items-center gap-3 w-full p-3 rounded-lg hover:bg-blue-800 transition-colors">
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
               class="lucide lucide-building-2">
               <path
                 d="M6 22V4c0-.27 0-.55.07-.82a1.988 1.988 0 0 1 1.11-1.11C7.45 2 7.73 2 8 2h8c.27 0 .55 0 .82.07a1.988 1.988 0 0 1 1.11 1.11C18 3.45 18 3.73 18 4v18" />
               <path d="M2 14v6c0 .27 0 .55.07.82a1.988 1.988 0 0 0 1.11 1.11C3.45 22 3.73 22 4 22h16" />
               <path d="M14 8h.01" />
               <path d="M14 12h.01" />
               <path d="M14 16h.01" />
               <path d="M10 8h.01" />
               <path d="M10 12h.01" />
               <path d="M10 16h.01" />
             </svg>
             <span>Projets</span>
           </button>
           <button class="flex items-center gap-3 w-full p-3 rounded-lg hover:bg-blue-800 transition-colors">
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users">
               <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
               <circle cx="9" cy="7" r="4" />
               <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
               <path d="M16 3.13a4 4 0 0 1 0 7.75" />
             </svg>
             <span>Équipes</span>
           </button>
           <button class="flex items-center gap-3 w-full p-3 rounded-lg hover:bg-blue-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="lucide lucide-clipboard-check">
             <path d="M8 4H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-2" />
             <path d="M8 2h8v4H8z" />
             <path d="m9 14 2 2 4-4" />
            </svg>
            <span>Contrôles</span>
           </button>
           <button class="flex items-center gap-3 w-full p-3 rounded-lg hover:bg-blue-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="lucide lucide-file-text">
             <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
             <polyline points="14 2 14 8 20 8" />
             <line x1="16" x2="8" y1="13" y2="13" />
             <line x1="16" x2="8" y1="17" y2="17" />
             <line x1="10" x2="8" y1="9" y2="9" />
            </svg>
            <span>Rapports</span>
        
        
           <button class="flex items-center gap-3 w-full p-3 rounded-lg hover:bg-blue-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="lucide lucide-bell">
             <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
             <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
            </svg>
            <span>Notifications</span>
           </button>
          
           <button class="flex items-center gap-3 w-full p-3 rounded-lg hover:bg-blue-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="lucide lucide-settings">
             <path
              d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
             <circle cx="12" cy="12" r="3" />
            </svg>
            <span>Paramètres</span>
           </button> <br><br>
          
           <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
             class="w-full bg-blue-600 hover:bg-red-700 text-white py-2 px-4 rounded flex items-center gap-2">
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-log-out">
              <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
              <polyline points="16 17 21 12 16 7" />
              <line x1="21" y1="12" x2="9" y2="12" />
             </svg>
             Déconnexion
            </button>
           </form>
         </nav>
       </div>
   
       <!-- Contenu principal à côté de la barre latérale -->
       <div class="flex-1 p-4">
        <h1 id="texte-defilant" class="text-center  mb-4"></h1>
   
         <div class="row mb-4">
           <div class="col-md-6">
             <div class="card shadow-sm">
               <div class="card-header bg-primary text-white">
                 Espace Projet
               </div>
               <div class="card-body">
                 <p class="card-text">Bienvenue dans l'espace de gestion de vos projets de construction. Ici, vous pouvez consulter et suivre l'avancement de tous les projets sur lesquels vous travaillez.</p>
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createProjectModal">
                   Nouveau Projet
                 </button>
               </div>
             </div>
           </div>
   
           <div class="col-md-6">
             <div class="card shadow-sm">
               <div class="card-header bg-success text-white">
                  Équipe
               </div>
               <div class="card-body">
                 <p class="card-text">Formez une nouvelle équipe pour vos projets.</p>
                 <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createTeamModal">
                   Nouvelle Équipe
                 </button>
               </div>
             </div>
           </div>
         </div>
   
         <!-- Sélection des Projets par Statut -->
         <div class="mb-4">
           <h2>Voir les Projets</h2>
           <select class="form-select" id="projectFilter" onchange="filterProjects()">
             <option value="all">Tous les projets</option>
             <option value="ongoing">En cours</option>
             <option value="completed">Terminés</option>
           </select>
         </div>
   
         <!-- Liste des projets -->
         <tbody>
         <div class="container mt-5">
            <h2 class="text-center text-3xl font-bold mb-4">Liste des Projets</h2>
            
            <table class="table table-striped table-hover shadow-lg rounded-lg border-collapse w-full">
              <thead class="bg-gray-100">
                <tr>
                  <th class="px-4 py-2 text-sm font-medium text-gray-700">Nom du Projet</th>
                  <th class="px-4 py-2 text-sm font-medium text-gray-700">Équipe Assignée</th>
                  <th class="px-4 py-2 text-sm font-medium text-gray-700">Statut</th>
                  <th class="px-4 py-2 text-sm font-medium text-gray-700">Actions</th>
                </tr>
              </thead>
              <tbody id="projectTableBody">
                <!-- Exemple de Projet -->
                <tr class="bg-green-100 hover:bg-green-200 transition duration-300">
                  <td class="px-4 py-2 text-center">Rénovation Appartement Paris</td>
                  <td class="px-4 py-2 text-center">Équipe Alpha</td>
                  <td class="px-4 py-2 text-center">
                    <span class="bg-yellow-500 text-white px-2 py-1 rounded text-xs">En cours</span>
                  </td>
                  <td class="px-4 py-2 text-center">
                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#projectDetailsModal" onclick="showDetails('Rénovation Appartement Paris', 'Équipe Alpha', 'En cours', 'Description du projet de rénovation')">Détails</button>
                  </td>
                </tr>
                <tr class="bg-red-100 hover:bg-red-200 transition duration-300">
                  <td class="px-4 py-2 text-center">Construction Maison Bordeaux</td>
                  <td class="px-4 py-2 text-center">Équipe Beta</td>
                  <td class="px-4 py-2 text-center">
                    <span class="bg-green-500 text-white px-2 py-1 rounded text-xs">Terminé</span>
                  </td>
                  <td class="px-4 py-2 text-center">
                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#projectDetailsModal" onclick="showDetails('Construction Maison Bordeaux', 'Équipe Beta', 'Terminé', 'Description du projet de construction')">Détails</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        
          <!-- Modal pour afficher les détails du projet -->
          <div class="modal fade" id="projectDetailsModal" tabindex="-1" aria-labelledby="projectDetailsModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-info text-white">
                  <h5 class="modal-title" id="projectDetailsModalLabel">Détails du Projet</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p id="projectName"></p>
                  <p id="projectTeam"></p>
                  <p id="projectStatus"></p>
                  <p id="projectDescription"></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
              </div>
            </div>
          </div>
          </tbody>        
         </table>
   
       </div>
     </div>
   
     <script>
       function filterProjects() {
         const status = document.getElementById('projectFilter').value;
         const projects = document.querySelectorAll('#projectTableBody tr');
         projects.forEach(project => {
           if (status === 'all') {
             project.style.display = '';
           } else {
             project.style.display = project.classList.contains(status) ? '' : 'none';
           }
         });
       }
   
       function showDetails(name, team, status, description) {
         alert(`Nom du Projet: ${name}\nÉquipe: ${team}\nStatut: ${status}\nDescription: ${description}`);
       }
     </script>
   </body>
   
   </html>
   