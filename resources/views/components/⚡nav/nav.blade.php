<header class="bg-dark/60 absolute h-14 lg:h-22.75 flex items-center top-0 left-0 w-full z-10" x-data="{ open: false }">
    <nav class="flex wrapper justify-between tracking-[1.2px] gap-2 items-center uppercase">
        <a href="{{ route('home') }}" class="font-serif text-xl xl:text-3xl tracking-[-1.6px]" wire:navigate>AF<span
                class="ml-1">’</span>s Beauty</a>
        <ul class="flex-1 gap-8 justify-center text-white/70 font-semibold hidden xl:flex">
            <li><a href="{{ route('home') }}" class="menu-item" wire:navigate>Home</a></li>
            <li><a href="{{ route('gallery') }}" class="menu-item" wire:navigate>Gallery</a></li>
            <li><a href="{{ route('home') }}#about" class="menu-item">About</a></li>
            <li><a href="{{ route('home') }}#contact" class="menu-item">Contact</a></li>
        </ul>
        <a href="https://www.facebook.com/ahzalea0777" class="nav-btn btn-animation hidden xl:block">Book
            Now</a>
        {{-- Mobile Menu --}}
        <button @click="open = !open" type="button" class="m-2 xl:hidden grid place-items-center cursor-pointer">
            {{-- hamburger --}}
            <svg class="col-start-1 row-start-1" x-transition:enter="transition transform duration-700"
                x-transition:enter-start="-rotate-90 opacity-0" x-transition:leave="transition transform duration-100"
                x-transition:leave-end="rotate-90 opacity-0" xmlns="http://www.w3.org/2000/svg" height="24px"
                viewBox="0 -960 960 960" width="24px" x-show="!open" fill="#e5e2e1">
                <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
            </svg>
            {{-- close --}}
            <svg class="col-start-1 row-start-1" x-transition:enter="transition transform duration-700"
                x-transition:enter-start="rotate-90 opacity-0" x-transition:leave="transition transform duration-100"
                x-transition:leave-end="-rotate-90 opacity-0" xmlns="http://www.w3.org/2000/svg" height="24px"
                viewBox="0 -960 960 960" width="24px" fill="#e5e2e1" x-show="open">
                <path
                    d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
            </svg>
        </button>
    </nav>
    <nav class='absolute tracking-[1.2px] flex flex-col items-center uppercase gap-4 w-full bg-dark/60 top-full xl:hidden'
        x-show="open" x-collapse.duration.1000ms>
        <ul class="flex flex-col items-center gap-4 mt-4 text-white/70">
            <li><a href="{{ route('home') }}" class="menu-item" wire:navigate>Home</a></li>
            <li><a href="{{ route('gallery') }}" class="menu-item" wire:navigate>Gallery</a></li>
            <li><a href="{{ route('home') }}#about" class="menu-item">About</a></li>
            <li><a href="{{ route('home') }}#contact" class="menu-item">Contact</a></li>
        </ul>
        <a href="#" class="nav-btn px-8 py-2 mb-4 btn-animation">Book
            Now</a>
    </nav>
</header>
