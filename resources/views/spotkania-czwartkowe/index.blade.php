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

      <x-card title="Przygotowanie salki przed spotkaniem">
        <x-slot name="icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-10 h-10">
            <defs>
              <style>
              .cls-1 {
                fill: #201602
              }

              </style>
            </defs>
            <g id="Layer_2" data-name="Layer 2">
              <g id="layer_1-2" data-name="layer 1">
                <path class="cls-1"
                  d="M17 11c-2.76 0-5-2.69-5-6a4.68 4.68 0 0 1 5-5 4.68 4.68 0 0 1 5 5c0 3.31-2.24 6-5 6zm0-9a2.72 2.72 0 0 0-3 3c0 2.21 1.35 4 3 4s3-1.79 3-4a2.72 2.72 0 0 0-3-3z" />
                <path class="cls-1" d="M9 23H7v-8.42a5 5 0 0 1 4.45-5L16.89 9l.22 2-5.44.61a3 3 0 0 0-2.67 3z" />
                <path class="cls-1"
                  d="M11 15h2v7h-2zM21 15h2v6h-2zM31 11c-2.76 0-5-2.69-5-6a4.68 4.68 0 0 1 5-5 4.68 4.68 0 0 1 5 5c0 3.31-2.24 6-5 6zm0-9a2.72 2.72 0 0 0-3 3c0 2.21 1.35 4 3 4s3-1.79 3-4a2.72 2.72 0 0 0-3-3z" />
                <path class="cls-1" d="M23 21h-2v-6.42a5 5 0 0 1 4.45-5L30.89 9l.22 2-5.44.61a3 3 0 0 0-2.67 3z" />
                <path class="cls-1"
                  d="M25 15h2v6h-2zM41 23h-2v-8.42a3 3 0 0 0-2.67-3L30.89 11l.22-2 5.44.6a5 5 0 0 1 4.45 5z" />
                <path class="cls-1" d="M35 15h2v7h-2z" />
                <path class="cls-1"
                  d="M24 36c-11.63 0-24-2.8-24-8s12.37-8 24-8 24 2.8 24 8-12.37 8-24 8zm0-14c-13.63 0-22 3.49-22 6s8.37 6 22 6 22-3.49 22-6-8.37-6-22-6z" />
                <path class="cls-1"
                  d="M24 48c-6.26 0-13-1.46-13-4.65v-9.26h2v9.26c0 .79 3.74 2.65 11 2.65s11-1.86 11-2.65v-9.26h2v9.26C37 46.54 30.26 48 24 48z" />
              </g>
            </g>
          </svg>
        </x-slot>
        Reszta
      </x-card>

      <!-- sprzątanie -->
      <x-card title="Przygotowanie salki przed spotkaniem">
        <x-slot name="icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
            <path
              d="M46 46h-1V20a3.45 3.45 0 0 0 3-3.45c0-2.36-1.89-3.14-4-4.52V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v2.86L26.73.81a5 5 0 0 0-5.46 0L1.59 13.64A3.52 3.52 0 0 0 3 20.06V46H2a1 1 0 0 0 0 2h44a1 1 0 0 0 0-2zM38 5h4v5.77l-4-2.61zM2 16.59c0-1.17-.84-.27 20.36-14.1a3 3 0 0 1 3.28 0l19.67 12.83a1.51 1.51 0 0 1-1.65 2.53L24.55 5.39c-.8-.52.38-1-20.21 12.46A1.51 1.51 0 0 1 2 16.59zM15 36h-2V19a1 1 0 0 1 1.71-.69c.42.4.29-.72.29 17.69zm2 2a1 1 0 0 1 1 1v1h-8v-1a1 1 0 0 1 1-1zm-7.82 8 .67-4h8.3l.67 4zM38 31a1 1 0 1 1-.14 2H32v-2zm-8 5h-3v-6h3zm-5-3h-3a1 1 0 0 1 0-2h3zm-.29 13a1 1 0 0 1-1-.92L22.94 35H25v2a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-2h4.78L36 45.08a1 1 0 0 1-1 .92zm13.11 0c.22-.6.11.14 1-11.12A3 3 0 0 0 38 29h-6.28c-.76-1.3-2-1-4.72-1a2 2 0 0 0-1.72 1H22a3 3 0 0 0-1.08 5.79l.8 10.44c.08 1 .62.77-.87.77-1-6.1-.85-4.44-.85-7a3 3 0 0 0-3-3V19a3 3 0 0 0-6 0v17a3 3 0 0 0-3 3c0 2.56.17.9-.85 7H5c0-29.17-.19-26.07.43-26.47L24 7.42l18.57 12.11c.61.4.43-2.73.43 26.47z"
              data-name="Cleaning home" />
          </svg>
        </x-slot>
        Reszta
      </x-card>

    </div>
  </div>


</x-static-layout>
