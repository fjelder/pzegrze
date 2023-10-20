<x-guest-layout>
  <x-authentication-card>
    <x-slot name="logo">
      <x-authentication-card-logo />
    </x-slot>

    <x-validation-errors class="mb-4" />

    @if (session('status'))
    <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
      {{ session('status') }}
    </div>
    @endif

    <h3 class="mb-5 text-lg font-medium text-gray-900 dark:text-white">Wybierz konto, na które chcesz się zalogować:
    </h3>
    <ul class="grid w-full gap-6 md:grid-cols-1">
      <li>
        <input type="radio" id="react-option" value="" class="hidden peer" required="" name="login">
        <label for="react-option"
          class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
          <div class="block">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"
              class="mb-2 w-10 h-10 text-sky-500 fill-sky-500">
              <path
                d="M46 28.08V24a1 1 0 0 0-1-1h-9a1 1 0 0 0-1 1v4h-6v-4a1 1 0 0 0-1-1h-1V12a5 5 0 0 1 10 0v1.5a3.5 3.5 0 0 0 7 0V12a12 12 0 0 0-24 0v11h-1a1 1 0 0 0-1 1v4.08A7.005 7.005 0 0 0 12 35v22a7.008 7.008 0 0 0 7 7h26a7.008 7.008 0 0 0 7-7V35a7.005 7.005 0 0 0-6-6.92zM37 25h7v3h-7zM22 12a10 10 0 0 1 20 0v1.5a1.5 1.5 0 0 1-3 0V12a7 7 0 0 0-14 0v11h-3zm-2 13h7v3h-7zm30 32a5.006 5.006 0 0 1-5 5H19a5.006 5.006 0 0 1-5-5V35a5.006 5.006 0 0 1 5-5h26a5.006 5.006 0 0 1 5 5z" />
              <path
                d="M32 36a6.007 6.007 0 0 0-6 6 5.922 5.922 0 0 0 1.495 3.948l-1.481 8.887A1 1 0 0 0 27 56h10a1 1 0 0 0 .986-1.165l-1.481-8.887A5.922 5.922 0 0 0 38 42a6.007 6.007 0 0 0-6-6zm2.45 9.782L35.82 54h-7.64l1.37-8.218a1 1 0 0 0-.297-.89A3.958 3.958 0 0 1 28 42a4 4 0 0 1 8 0 3.958 3.958 0 0 1-1.252 2.892 1 1 0 0 0-.298.89z" />
            </svg>
            <div class="w-full text-lg font-semibold">Konto ogólnodostępne</div>
            <div class="w-full text-sm"></div>
          </div>
        </label>
      </li>
      <li>
        <input type="radio" id="flowbite-option" value="" class="hidden peer" name="login">
        <label for="flowbite-option"
          class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
          <div class="block">
            <svg class="mb-2 text-green-400 w-7 h-7" fill="currentColor" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path
                d="M356.9 64.3H280l-56 88.6-48-88.6H0L224 448 448 64.3h-91.1zm-301.2 32h53.8L224 294.5 338.4 96.3h53.8L224 384.5 55.7 96.3z" />
            </svg>
            <div class="w-full text-lg font-semibold">Ministranci / Rodzice ministrantów </div>
            <div class="w-full text-sm"></div>
          </div>
        </label>
      </li>
      <li>
        <input type="radio" id="angular-option" value="" class="hidden peer" name="login">
        <label for="angular-option"
          class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
          <div class="block">
            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 2048 2048"
              class="mb-2 text-red-600 w-10 h-10 fill-red-500"
              style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;fill-rule:evenodd;clip-rule:evenodd">
              <g id="Layer_x0020_1">
                <g id="_337034264">
                  <path id="_337034576"
                    d="M1430.7 1228.39c56.217 0 107.118 22.792 143.962 59.635 36.843 36.843 59.634 87.744 59.634 143.962 0 56.217-22.79 107.118-59.634 143.961-36.844 36.845-87.745 59.635-143.962 59.635-56.217 0-107.118-22.79-143.961-59.635-36.844-36.843-59.635-87.744-59.635-143.96 0-56.22 22.79-107.12 59.635-143.963 36.843-36.843 87.744-59.635 143.961-59.635z" />
                  <path id="_337034192"
                    d="m1533.79 259.873-.006-.058 30.878-3.429c34.35-3.817 65.42 21.038 69.234 55.39.544 4.912.382 2.479.382 7.058v1081.33c0 34.613-28.08 62.694-62.694 62.694-34.613 0-62.694-28.08-62.694-62.694V388.684l-685.712 76.19v1115.53c0 34.615-28.08 62.694-62.694 62.694-34.613 0-62.694-28.08-62.694-62.694V408.814c0-32.915 25.44-58.884 57.661-62.464l778.34-86.482z" />
                  <path id="_337034120"
                    d="M618.439 1382.53c56.531 0 107.717 22.918 144.767 59.968 37.05 37.05 59.968 88.236 59.968 144.767 0 56.531-22.918 107.717-59.968 144.767-37.05 37.049-88.236 59.967-144.767 59.967-56.531 0-107.717-22.918-144.767-59.967-37.049-37.05-59.968-88.235-59.968-144.767 0-56.53 22.92-107.717 59.968-144.767 37.05-37.05 88.235-59.968 144.767-59.968z" />
                </g>
              </g>
              <path style="fill:none" d="M0 0h2048v2048H0z" />
            </svg>
            <div class="w-full text-lg font-semibold">Scholka dziecięca</div>
            <div class="w-full text-sm"></div>
          </div>
        </label>
      </li>
    </ul>


    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div>
        <x-label for="email" value="{{ __('Email') }}" />
        <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus
          autocomplete="username" />
      </div>

      <div class="mt-4">
        <x-label for="password" value="{{ __('Password') }}" />
        <x-input id="password" class="block w-full mt-1" type="password" name="password" required
          autocomplete="current-password" />
      </div>

      <div class="block mt-4">
        <label for="remember_me" class="flex items-center">
          <x-checkbox id="remember_me" name="remember" />
          <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
        </label>
      </div>

      <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
        <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
          href="{{ route('password.request') }}">
          {{ __('Forgot your password?') }}
        </a>
        @endif

        <x-button class="ml-4">
          {{ __('Log in') }}
        </x-button>
      </div>
    </form>
  </x-authentication-card>
</x-guest-layout>
