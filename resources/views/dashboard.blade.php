<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="info-area">
        <ul>
            <li>{{Auth::user()->name}}</li>
        </ul>
    </div>

    <ul class="posts_list">
        @forelse (Auth::user()->posts()->latest()->get() as $post)
            <li>
                <span class="shoku">{{$post->shoku}}</span>
                <span class="kyoku">{{$post->kyoku}}</span>
                <span class="yoku">{{$post->yoku}}</span><br>
                <span class="shiku">{{$post->shiku}}</span>
                <span class="kekku">{{$post->kekku}}</span>
            </li>
        @empty
            <li>空っぽ！</li>
        @endforelse
    </ul>
</x-app-layout>
