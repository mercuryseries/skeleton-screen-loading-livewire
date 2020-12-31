<div wire:init="loadPostData" class="shadow-sm rounded-lg w-full lg:w-2/4 overflow-hidden">
    @isset($post)
    <div>
        <div class="h-72">
            <img src="{{ $post['posterUrl'] }}" alt="{{ $post['posterDescription'] }}" class="object-cover w-full h-full">
        </div>
        <div class="bg-white p-6">
            <h3 class="mb-2 text-xl font-semibold">
                {{ $post['title'] }}
            </h3>
            <p class="mb-8 text-gray-600">
                {{ $post['content'] }}
            </p>
            <div class="flex items-center">
                <div class="rounded-full overflow-hidden h-12 w-12">
                    <img src="{{ $post['authorAvatarUrl'] }}" alt="{{ $post['authorName'] }}">
                </div>
                <div class="flex flex-col ml-2">
                    <strong>{{ $post['authorName'] }}</strong>
                    <small class="text-gray-500">{{ $post['publishedAt'] }}</small>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="animate-pulse">
        <div class="h-72 w-full bg-gray-400 rounded-t"></div>
        <div class="bg-white p-6">
            <div class="mb-4 flex-1 space-y-4 py-1">
              <div class="h-4 bg-gray-400 rounded w-3/4"></div>
              <div class="space-y-2">
                <div class="h-4 bg-gray-400 rounded"></div>
                <div class="h-4 bg-gray-400 rounded w-5/6"></div>
              </div>
            </div>
            <div class="flex items-center">
                <div class="rounded-full bg-gray-400 h-12 w-12"></div>
                <div class="ml-2 flex-1 space-y-4 py-1">
                  <div class="space-y-2">
                    <div class="h-4 bg-gray-400 rounded"></div>
                    <div class="h-4 bg-gray-400 rounded w-5/6"></div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    @endisset
</div>
