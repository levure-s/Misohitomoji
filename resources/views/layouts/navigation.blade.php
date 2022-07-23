<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-4 sm:px-6 lg:px-8 header">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <h1 class="title">みそひともじ</h1>
                    </a>
                </div>

                <!-- Navigation Links -->
                {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div> --}}
            </div>



            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="create"></div>

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium focus:outline-none transition duration-150 ease-in-out text_white">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md  focus:outline-none transition duration-150 ease-in-out text_white">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>

    <div class="modal_back">
        <div class="modal">
            <div class="close_btn"></div>
            <form method="POST" action="{{route('post.store',Auth::user()->id)}}">
                @csrf

                <div>
                    <x-input id="shoku" class="block mt-1 w-full" type="text" name="shoku" :value="old('shoku')" required autofocus maxlength="5"/>
                </div>
                <div>
                    <x-input id="kyoku" class="block mt-1 w-full" type="text" name="kyoku" :value="old('kyoku')" autofocus maxlength="7"/>
                </div>
                <div>
                    <x-input id="yoku" class="block mt-1 w-full" type="text" name="yoku" :value="old('yoku')" autofocus maxlength="5"/>
                </div>
                <div>
                    <x-input id="shiku" class="block mt-1 w-full" type="text" name="shiku" :value="old('shiku')" autofocus maxlength="7"/>
                </div>
                <div>
                    <x-input id="kekku" class="block mt-1 w-full" type="text" name="kekku" :value="old('kekku')" autofocus maxlength="7"/>
                </div>

                <div class="flex items-center justify-end mt-4">
                    {{-- @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('推敲する') }}
                        </a>
                    @endif --}}

                    <x-button class="ml-3 btn">
                        {{ __('奉納') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(function(){
            $('.create').click(function(){
                if(!$('.modal_back').hasClass('active')){
                    $('.modal_back').addClass('active')
                }
            })
            $('.close_btn').click(function(){
                if($('.modal_back').hasClass('active')){
                    $('.modal_back').removeClass('active')
                }
            })
        })
    </script>
</nav>
