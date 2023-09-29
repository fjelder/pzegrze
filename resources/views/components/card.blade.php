@props(['icon' => '', 'title' => 'Default title', 'description' => '...'])
<div
  class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 mfcard">
  <div class="w-full">
    <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full icon">

      {{$icon}}

    </div>

    <h2 class="mt-6 text-xl font-semibold text-gray-900">{{$title}}</h2>

    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
      {{$description}}
    </p>

    {{$slot}}
  </div>



</div>
