<x-card title="Sprzątanie salki po spotkaniu">
  <x-slot name="icon">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
      <path
        d="M46 46h-1V20a3.45 3.45 0 0 0 3-3.45c0-2.36-1.89-3.14-4-4.52V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v2.86L26.73.81a5 5 0 0 0-5.46 0L1.59 13.64A3.52 3.52 0 0 0 3 20.06V46H2a1 1 0 0 0 0 2h44a1 1 0 0 0 0-2zM38 5h4v5.77l-4-2.61zM2 16.59c0-1.17-.84-.27 20.36-14.1a3 3 0 0 1 3.28 0l19.67 12.83a1.51 1.51 0 0 1-1.65 2.53L24.55 5.39c-.8-.52.38-1-20.21 12.46A1.51 1.51 0 0 1 2 16.59zM15 36h-2V19a1 1 0 0 1 1.71-.69c.42.4.29-.72.29 17.69zm2 2a1 1 0 0 1 1 1v1h-8v-1a1 1 0 0 1 1-1zm-7.82 8 .67-4h8.3l.67 4zM38 31a1 1 0 1 1-.14 2H32v-2zm-8 5h-3v-6h3zm-5-3h-3a1 1 0 0 1 0-2h3zm-.29 13a1 1 0 0 1-1-.92L22.94 35H25v2a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-2h4.78L36 45.08a1 1 0 0 1-1 .92zm13.11 0c.22-.6.11.14 1-11.12A3 3 0 0 0 38 29h-6.28c-.76-1.3-2-1-4.72-1a2 2 0 0 0-1.72 1H22a3 3 0 0 0-1.08 5.79l.8 10.44c.08 1 .62.77-.87.77-1-6.1-.85-4.44-.85-7a3 3 0 0 0-3-3V19a3 3 0 0 0-6 0v17a3 3 0 0 0-3 3c0 2.56.17.9-.85 7H5c0-29.17-.19-26.07.43-26.47L24 7.42l18.57 12.11c.61.4.43-2.73.43 26.47z"
        data-name="Cleaning home" />
    </svg>
  </x-slot>
  <x-slot name="description">
    Przygotowanie salki można rozpocząć od godziny 17:00. W razie zamknięcia łącznika klucze dostępne będą u Pana
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
    <h2 class="mt-6 mb-4 font-semibold text-gray-900 underline text-md">Już się zgłosili</h2>
  </div>
  @foreach($person as $x)
  <div class="flex items-center leading-relaxed text-gray-500" x-data="{visible: false}" :id="$id('checkbox')">
    <input id="{{$x->id}}" type="checkbox" value="{{$x->id}}"
      class="w-4 h-4 mr-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
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
