<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @if(Auth::user()->role->label == "recruteur")
            {{ __('Espace Recruteur') }}
            @else
            {{ __('Espace Candidat') }}
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @if(Auth::user()->role->label == "recruteur")
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(Route::currentRouteName() == "dashboard")
                    <x-pages.recruteur />
                    @elseif(Route::currentRouteName() == "offres.create")
                    <x-pages.offres.create />
                    @endif
                </div>
                @else
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-pages.candidat />
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>