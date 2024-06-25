<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex justify-between">
        <div class="pb-2 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
            </div>
        </div>
        <div>
            <a href={{route("offres.create")}}>
                <button class="bg-blue-600 px-8 py-2 rounded-lg">
                    Ajouter une nouvelle offre
                </button>
            </a>
        </div>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Titre
                </th>
                <th scope="col" class="px-6 py-3">
                    Entreprise
                </th>
                <th scope="col" class="px-6 py-3">
                    Pays
                </th>
                <th scope="col" class="px-6 py-3">
                    Type de contrat
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @if($offres->count() > 0)
            @foreach($offres as $offre)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $offre->intitule }}
                </th>
                <td class="px-6 py-4">
                    {{ $offre->entreprise }}
                </td>
                <td class="px-6 py-4">
                    {{ $offre->pays->nom }}
                </td>
                <td class="px-6 py-4">
                    {{ $offre->type_contrat }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('offres.show', $offre->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Voir</a>
                </td>
            </tr>
            @endforeach
            @else
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td aria-colspan="5" class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white" colspan="5">
                    Aucune offre disponible
                </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>