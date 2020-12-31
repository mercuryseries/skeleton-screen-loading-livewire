<div wire:init="loadCardData" class="w-full bg-white border border-gray-300 shadow rounded-md p-4 max-w-sm w-full lg:mx-auto">
  @isset($data)
    <div class="flex space-x-4">
      <img src="{{ $data['avatarUrl'] }}" class="rounded-full h-12 w-12" alt="{{ $data['name'] }}'s Avatar">
      <div>
        <h2 class="text-xl font-semibold">{{ $data['name'] }}</h2>
        <p class="text-sm">{{ $data['bio'] }}</p>
      </div>
    </div>
  @else
  <div class="animate-pulse flex space-x-4">
    <div class="rounded-full bg-gray-400 h-12 w-12"></div>
    <div class="flex-1 space-y-4 py-1">
      <div class="h-4 bg-gray-400 rounded w-3/4"></div>
      <div class="space-y-2">
        <div class="h-4 bg-gray-400 rounded"></div>
        <div class="h-4 bg-gray-400 rounded w-5/6"></div>
      </div>
    </div>
  </div>
  @endif
</div>
