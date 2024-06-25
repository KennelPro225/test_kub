<form class="max-w-sm mx-auto" method="post" action={{route("offres.store")}}>
    @csrf()
    <div class="mb-5">
        <label for="intitule" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intitulé</label>
        <input type="text" name="intitule" id="intitule" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Intitulé" />
        <x-input-error :messages="$errors->get('intitule')" class="mt-2" />
    </div>
    <div class="mb-5">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
        <textarea id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description" required></textarea>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>
    <div class="mb-5">
        <label for="date_fin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de fin</label>
        <input type="date" id="date_fin" name="date_fin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        <x-input-error :messages="$errors->get('date_fin')" class="mt-2" />
    </div>
    <div class="mb-5">
        <label for="ville" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ville</label>
        <input type="text" id="ville" name="ville" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ville" required />
        <x-input-error :messages="$errors->get('ville')" class="mt-2" />
    </div>
    <div class="mb-5">
        <x-pays />
    </div>
    <div class="mb-5">
        <label for="type_contrat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type de contrat</label>
        <select id="type_contrat" name="type_contrat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="">Sélectionner un type de contrat</option>
            <option value="CDI">CDI</option>
            <option value="CDD">CDD</option>
            <option value="Stage">Stage</option>
            <option value="Alternance">Alternance</option>
            <option value="Freelance">Freelance</option>
        </select>
        <x-input-error :messages="$errors->get('type_contrat')" class="mt-2" />
    </div>
    <div class="mb-5">
        <label for="salaire" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salaire</label>
        <input type="text" id="salaire" name="salaire" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Salaire" />
        <x-input-error :messages="$errors->get('salaire')" class="mt-2" />
    </div>
    <div class="mb-5">
        <label for="entreprise" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Entreprise</label>
        <input type="text" id="entreprise" name="entreprise" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Entreprise" />
        <x-input-error :messages="$errors->get('entreprise')" class="mt-2" />
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>