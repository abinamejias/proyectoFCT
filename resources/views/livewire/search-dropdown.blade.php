<div x-data="{ isOpen: true }" @click.away="isOpen = false">
<input
        wire:model.debounce.500ms="search"
        type="text"
        class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1" placeholder="Buscar"
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

        <div>
                <ul>
                        <li>
                            <a href="#" class="block hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150">
                            {{ $search }}
                            </a>
                        </li>
        </div>
</div>