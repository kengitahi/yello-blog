<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div class="flex items-center">
            @if ($search)
            <h3 class="text-xl font-semibold text-gray-900">Search results for: {{$search}}</h3>
            @endif
        </div>
        <div class="flex items-center space-x-4 font-light ">
            <button class="{{ $sort == 'desc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500'}} py-4"
                wire:click='setSort("desc")'>
                {{ $sort == 'desc' ? "Latest Posts" : "Show Latest Posts" }}
            </button>
            <button class="{{ $sort == 'asc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500'}} py-4"
                wire:click='setSort("asc")'>
                {{ $sort == 'asc' ? "Oldest Posts" : "Show Oldest Posts" }}
            </button>
        </div>
    </div>
    @if ($this->posts->count() > 0)
    <div class="py-4">
        @foreach ($this->posts as $post)
        <x-posts.post-item :post='$post' />
        @endforeach
    </div>
    <div class="my-3">
        {{ $this->posts->onEachSide(1)->links() }}
    </div>
    @else
    <div class="py-4">
        <div class=" flex flex-col">
            <p class="pb-4">Sorry, there are no search results for "{{$search}}". Try another search below</p>
            @include('posts.partials.search-box')
        </div>

        <div class="py-4 gap-6 flex flex-col">
            <hr />
            <h3 class="text-lg font-semibold text-gray-900">You can also...</h3>
            <div class="flex gap-6 items-center border-b border-gray-100">
                <x-link-button href="{{ route('home') }}">Go Back Home</x-link-button>
                <x-link-button href="{{ route('posts.index') }}">Go to The Blog</x-link-button>
            </div>

        </div>

    </div>
    @endif

</div>