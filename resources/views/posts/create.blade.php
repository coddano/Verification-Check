<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Enregistrement') }}
      </h2>
    </x-slot>
  
  
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding:30px">
  
          
  
          
          <form method="POST" action="{{ route('posts.store') }}">
            @csrf
  
            <div class="block mt-4">
              <x-input-label for="matrimoniale" class="flex items-center">
                <x-text-input type="checkbox" id="monsieur" name="monsieur" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Monsieur') }}</span>
              </x-input-label>
              <x-input-label for="matrimoniale" class="flex items-center">
                <x-text-input type="checkbox" id="madame" name="madame" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Madame') }}</span>
              </x-input-label>
            </div>
            <br>
  
            <div>
              <x-input-label for="name" value="{{ __('Nom') }}" />
              <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
            </div>
  
            <div class="mt-4">
              <x-input-label for="prenom" value="{{ __('Prénom(s)') }}" />
              <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" required
                autocomplete="current-prenom" />
            </div>
  
            <div class="mt-4">
              <x-input-label for="age" value="{{ __('Âge') }}" />
              <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" required
                autocomplete="current-age" />
            </div>
  
            <div class="mt-4">
              <x-input-label for="email" value="{{ __('Email') }}" />
              <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" required
                autocomplete="current-email" />
            </div>
  
            <div class="flex items-center justify-end mt-4">
  
              <x-primary-button class="ml-4" type="submit">
                {{ __('Soumettre') }}
              </x-primary-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </x-app-layout>