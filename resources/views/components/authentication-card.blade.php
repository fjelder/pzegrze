<div
  class="relative flex flex-col items-center min-h-screen pt-6 bg-gray-100 bg-center bg-dots-darker sm:justify-center sm:pt-0 dark:bg-gray-900">
  <div>
    {{ $logo }}
  </div>

  <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-2xl dark:bg-gray-800 sm:rounded-lg">
    {{ $slot }}
  </div>
</div>
