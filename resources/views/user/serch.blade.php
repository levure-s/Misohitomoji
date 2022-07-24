<x-app-layout>
    <form method="post" action="{{route('serch.result')}}">
        @csrf

        <div class="serch-area">
            <x-input id="keyword" class="block mt-1 w-full" type="text" name="keyword" :value="old('keyword')" required autofocus />
            <x-button class="ml-3 btn">
                {{ __('検索') }}
            </x-button>
        </div>


        @isset($users)
            <div class="result-area">
                <ul>
                    @forelse ($users as $user)
                        <li>
                            <a href="{{route('user.show',$user)}}">
                                <span>{{$user->name}}</span>
                            </a>
                        </li>
                    @empty
                        <li>いないよ</li>
                    @endforelse
                </ul>
            </div>
        @endisset
    </form>
</x-app-layout>
