@include('sidebar')
        <div class="flex-1 p-8">
            <center style="font-size: 40px"> Liste des Chefs de Projets</center>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <a href="{{ route('chef-projets.create') }}" class="btn btn-success">Ajouter un Chef de Projet</a>
                        </div>
                        
                         @if (session('success'))
                         <div class="alert alert-success mt-3">
                           {{ session('success') }}
                            </div>
                          @endif

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Identifiant</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                        @foreach($chefsDeProjets as $chefProjet)
                                            <tr>
                                                <td>{{ $chefProjet->id }}</td>
                                                <td>{{ $chefProjet->nom }}</td>
                                                <td>{{ $chefProjet->email }}</td>
                                                <td>
                                                    <form action="{{ route('chef-projets.destroy', $chefProjet->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            
                            </table>
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
        </form>
        </div>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  
    
</body>
</html>