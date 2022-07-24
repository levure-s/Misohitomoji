<x-app-layout>
    <x-auth-card>
        <x-slot name="logo">
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{route('post.store')}}">
            @csrf

            <div>
                <x-input id="shoku" class="block mt-1 w-full" type="text" name="shoku" :value="old('shoku')" required autofocus />
            </div>
            <div>
                <x-input id="kyoku" class="block mt-1 w-full" type="text" name="kyoku" :value="old('kyoku')" required autofocus />
            </div>
            <div>
                <x-input id="yoku" class="block mt-1 w-full" type="text" name="yoku" :value="old('yoku')" required autofocus />
            </div>
            <div>
                <x-input id="shiku" class="block mt-1 w-full" type="text" name="shiku" :value="old('shiku')" required autofocus />
            </div>
            <div>
                <x-input id="kekku" class="block mt-1 w-full" type="text" name="kekku" :value="old('kekku')" required autofocus />
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
    </x-auth-card>
</x-app-layout>
