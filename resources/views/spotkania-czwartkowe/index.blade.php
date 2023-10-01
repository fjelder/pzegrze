<x-static-layout>


  <nav class="flex my-16" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
      <li class="inline-flex items-center">
        <a href="{{route('home')}}"
          class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-red-600 dark:text-gray-400 dark:hover:text-white">
          <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
              d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
          </svg>
          Home
        </a>
      </li>

      <li aria-current="page">
        <div class="flex items-center">
          <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 9 4-4-4-4" />
          </svg>
          <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Spotkania
            pierwszoczwartkowe</span>
        </div>
      </li>
    </ol>
  </nav>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
    <div class="flex flex-col space-y-6">

      <!-- aktualności -->
      <x-card title="Aktualności, szczegóły">
        <x-slot name="icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-10 h-10">
            <path
              d="M25 2H7a3 3 0 0 0-3 3v1a1 1 0 0 0 2 0V5a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-2a1 1 0 0 0 0 2h2a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zM19 20h-.64a7.74 7.74 0 0 0-6.18 3.09L10 26v-3a3 3 0 0 0-3-3 1 1 0 0 1-1-1v-9a1 1 0 0 0-2 0v9a3 3 0 0 0 3 3 1 1 0 0 1 1 1v6a1 1 0 0 0 .68.95A1.19 1.19 0 0 0 9 30a1 1 0 0 0 .8-.4l4-5.31A5.77 5.77 0 0 1 18.36 22H19a1 1 0 0 0 0-2z" />
            <path d="M15 17a1 1 0 0 0 2 0v-7a1 1 0 0 0-2 0zM16 8a1 1 0 0 0 0-2 1 1 0 1 0 0 2z" />
          </svg>
        </x-slot>
        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
          Najbliższe spotkanie odbędzie się <strong>5 października o godzinie 18:00</strong>
        </p>
      </x-card>

      <!-- ciasto -->
      @livewire('spotkania-czwartkowe.ciasto')


    </div>

    <div class="flex flex-col space-y-6">
      <!-- przygotowanie -->
      @livewire('spotkania-czwartkowe.przygotowanie')


      <!-- sprzątanie -->
      @livewire('spotkania-czwartkowe.sprzatanie')

    </div>
  </div>


</x-static-layout>
