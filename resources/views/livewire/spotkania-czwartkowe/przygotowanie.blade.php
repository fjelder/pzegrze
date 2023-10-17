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
  <x-slot name="description">
    Przygotowanie salki można rozpocząć od godziny 17:30. W razie zamknięcia łącznika klucze dostępne będą u Pana
    Kościelnego.
  </x-slot>
  <h2 class="mt-6 mb-4 font-semibold text-gray-900 underline text-md">Zapisz się!</h2>

  <div class="mb-6">
    <label for="name" class="mflabel">Imię i nazwisko</label>
    <input type="text" id="name" wire:model="fullName" class="mfinput" autocomplete="name">
    <div class="mfinput-error">@error('fullName') {{ $message }} @enderror</div>
  </div>


  <button wire:click="save" class="col-span-2 mr-3 mfbutton">Zapisz</button>
  <div wire:loading>
    Zapisuję...
  </div>

  @if (session('status'))
  <div>
    <div class="flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6 mr-2 text-red-500">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
      </svg>
      {{ session('status') }}
    </div>
  </div>
  @endif

  @if(count($person))
  <div>
    <h2 class="mt-6 mb-4 font-semibold text-gray-900 underline text-md">Już się zgłosili:</h2>
  </div>
  @foreach($person as $x)
  <div class="flex items-center leading-relaxed text-gray-500" x-data="{visible: false}" :id="$id('checkbox')">
    <input id="{{$x->id}}" type="checkbox" value="{{$x->id}}"
      class="w-4 h-4 mr-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 focus:ring-2"
      x-id="['delete-checkbox']" x-model="visible">
    {{$loop->iteration}}.
    {{$x->fullName }}
    <button class="mx-4 text-sm text-gray-400 hover:text-red-400" x-show="visible" wire:click="delete({{$x->id}})">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
      </svg>
    </button>
  </div>
  @endforeach

  <p class="mt-4 text-xs text-gray-500">Zaznacz, żeby usunać.</p>
  @else

  <div>
    <h2 class="mt-6 mb-4 font-semibold text-gray-900 underline text-md">Nikt się jeszcze nie zgłosił. Bądź
      pierwszy!
    </h2>
  </div>

  @endif
</x-card>
