<x-guest-layout>
    <div>
        <div >
            <h2 class="text-xl font-semibold text-center text-white mb-4">Connexion</h2>

            @if ($errors->any())
                <p class="mb-4 text-sm text-red-500">{{ $errors->first() }}</p>
            @endif

            @if (session('error'))
                <p class="mb-4 text-sm text-red-500">{{ session('error') }}</p>
            @endif

            <form method="POST" action="{{ route('chef-projet.login') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                    <input id="email" type="email" name="email" required
                        class="w-full px-3 py-2 mt-1 border border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-300">Mot de passe</label>
                    <input id="password" type="password" name="password" required
                        class="w-full px-3 py-2 mt-1 border border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>
                
                <div class="text-right" style="color:aliceblue;">
                    <a href="#" class="text-sm text-blue-400 hover:underline">Mot de passe oublié ?</a>
                </div>

                <button type="submit"
                class="w-full bg-blue-700 text-white py-2 rounded-md hover:bg-blue-800 transition">
                Se connecter
            </button>
            </form>
        </div>
    </div>
</x-guest-layout>
