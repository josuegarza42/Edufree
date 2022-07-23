<nav class="bg-[#F7CB2C]" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">

            <!-- Mobile menu button-->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            F7CB2C
                <button x-on:click="open=true" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-[#122052] focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <!-- logo-->
                <a href="/" class="flex-shrink-0 flex items-center text-lg text-white">
                     <img class="block lg:hidden h-8 w-auto rounded-md mr-3"
                        src="https://i.ibb.co/qnJLzhv/1.png" alt="Edufree"> 

 

                    <img class="hidden lg:block h-8 w-auto rounded-md mr-3"
                        src="https://i.ibb.co/qnJLzhv/1.png" alt="Edufree"> Edufree
                </a>
                <!-- menu lg-->
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">

                        @foreach ($categories as $category)
                            <a href="{{ route('posts.category', $category) }}"
                                class="text-white hover:bg-emerald-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ $category->name }}</a>
                        @endforeach

                    </div>
                </div>
            </div>
            <!-- boton notificacion/perfil-->
            @auth
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                    <!-- Profile dropdown -->
                    <div class="ml-3 relative" x-data="{ open: false }">
                        <div>
                            <button x-on:click="open = true" type="button"
                                class="bg-emerald-600 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-emerald-600 focus:ring-white"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                            </button>
                        </div>

                        <div x-show="open" x-on:click.away="open = false"
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-emerald-600 ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->

                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-emerald-600"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Tu perfil</a>

                            @can('admin.home')
                                <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-emerald-600"
                                    role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>
                            @endcan

                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-emerald-600"
                                    role="menuitem" tabindex="-1" id="user-menu-item-2"
                                    onclick="event.preventDefault(); this.closest('form').submit();">Cerrar sesión</a>
                            </form>

                        </div>
                    </div>
                </div>
            @else
                <div>
                    <a href="{{ route('login') }}"
                        class="text-white hover:bg-emerald-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
                    <a href="{{ route('register') }}"
                        class="text-white hover:bg-emerald-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Registrate</a>
                </div>

            @endauth

        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open=false">
        <div class="px-2 pt-2 pb-3 space-y-1">

            @foreach ($categories as $category)
                <a href="{{ route('posts.category', $category) }}"
                    class="text-white hover:bg-emerald-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">{{ $category->name }}</a>
            @endforeach

        </div>
    </div>
</nav>
