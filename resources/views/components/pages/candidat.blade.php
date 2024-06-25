<div class="grid grid-cols-2 gap-4">
    @if($offres->count() > 0)
    @foreach($offres as $offre)

    <div class="w-full m-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$offre->intitule}}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$offre->description}}</p>
            <ul class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <li><strong>Date de fin:</strong> {{$offre->date_fin}}</li>
                <li><strong>Ville:</strong> {{$offre->ville}}</li>
                <li><strong>Pays:</strong> {{$offre->pays->nom}}</li>
                <li><strong>Type de contrat:</strong> {{$offre->type_contrat}}</li>
                <li><strong>Salaire:</strong> {{$offre->salaire}}</li>
                <li><strong>Entreprise:</strong> {{$offre->entreprise}}</li>
            </ul>
            <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Postuler
                <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 00-2 0v3H7a1 1 0 000 2h2v3a1 1 0 002 0v-3h2a1 1 0 000-2h-2V7z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>


    @endforeach
    @else
    <div>
        <p>Aucune offre disponible</p>
    </div>
    @endif
</div>