<x-card title="Ciasto, ciastka, coś na stół" id="ciasto">
  <x-slot name="icon">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
      <g data-name="47-Cookie">
        <path
          d="M30.15 8.53a1 1 0 0 0-.89-.53H26V6a1 1 0 0 0-1-1h-2V2.26a1 1 0 0 0-.6-.92A16 16 0 1 0 32 16a16 16 0 0 0-1.85-7.47zM16 30a14 14 0 1 1 5-27.07V5a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h2.65A13.81 13.81 0 0 1 30 16a14 14 0 0 1-14 14z" />
        <path
          d="M14 9a3 3 0 1 0-3 3 3 3 0 0 0 3-3zm-3 1a1 1 0 1 1 1-1 1 1 0 0 1-1 1zM15 20a3 3 0 1 0 3 3 3 3 0 0 0-3-3zm0 4a1 1 0 1 1 1-1 1 1 0 0 1-1 1z" />
        <circle cx="25" cy="19" r="2" />
        <circle cx="7" cy="18" r="2" />
        <path d="M19 10a4 4 0 1 0 4 4 4 4 0 0 0-4-4zm0 6a2 2 0 1 1 2-2 2 2 0 0 1-2 2z" />
      </g>
    </svg>
  </x-slot>

  <h2 class="mt-6 mb-4 text-md font-semibold text-gray-900 underline">Zapisz się!</h2>

  <div class="grid gap-6 mb-6 md:grid-cols-2 w-full">
    <div>
      <label for="name" class="mflabel">Imię i nazwisko</label>
      <input type="text" id="name" wire:model="fullName" class="mfinput" autocomplete="name">
      <div class="mfinput-error">@error('fullName') {{ $message }} @enderror</div>
    </div>
    <div>
      <label for="bring" class="mflabel">Przyniosę</label>
      <input type="text" id="bring" wire:model="bring" class="mfinput">
      <div class="mfinput-error">@error('bring') {{ $message }} @enderror</div>
    </div>
  </div>
  <button wire:click="save" class="col-span-2 mfbutton mr-3">Zapisz</button>
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
    <h2 class="mt-6 text-md font-semibold text-gray-900 underline mb-4">Już się zgłosili</h2>
  </div>
  @foreach($person as $x)
  <div class="text-gray-500 leading-relaxed flex items-center" x-data="{visible: false}" :id="$id('checkbox')">
    <input id="{{$x->id}}" type="checkbox" value="{{$x->id}}"
      class="mr-4 w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
      x-id="['delete-checkbox']" x-model="visible">
    {{$loop->iteration}}.
    {{$x->fullName }} -
    {{$x->bring}}
    <button class="text-sm text-gray-400 hover:text-red-400 mx-4" x-show="visible" wire:click="delete({{$x->id}})">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
      </svg>
    </button>
  </div>
  @endforeach

  <p class="text-xs text-gray-500 mt-4">Zaznacz, żeby usunać.</p>
  @else

  <div>
    <h2 class="mt-6 mb-4 text-md font-semibold text-gray-900 underline">Nikt się jeszcze nie zgłosił. Bądź
      pierwszy!
    </h2>
  </div>

  @endif


</x-card>
