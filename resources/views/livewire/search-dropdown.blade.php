<div x-data="{ isOpen: true }" @click.away="isOpen = false">
<input
        wire:model.debounce.500ms="search"
        type="text"
        class="custom-select bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1" placeholder="Buscar"
        x-ref="search"
        @keydown.window="
            if (event.keyCode === 191) {
                event.preventDefault();
                $refs.search.focus();
            }
        "
        @focus="isOpen = true"
        @keydown="isOpen = true"
        @keydown.escape.window="isOpen = false"
        @keydown.shift.tab="isOpen = false"
>
@if (strlen($search) >= 2)
        <div
            class="z-50 absolute bg-gray-800 text-sm rounded w-64 mt-4"
            x-show.transition.opacity="isOpen"
        >
            @if ($searchResults->count() > 0)

        <div>
                @foreach ($searchResults as $result)
                <div style="margin-top:10px; z-index:1">
                    <a href="{{ route('music.show',['album' => $result['name'],'artist' => $result['artist']] ) }}" class="block hover:bg-gray-700 px-3 py-3">
                    <img style="width:50px;" src="{{ $result['image'][0]['#text'] }}" class="card-img-top" alt="..."> {{ $result['name'] }}
                    </a>
                </div>
                @endforeach
        </div>
        @else
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif
        </div>
    @endif

</div>