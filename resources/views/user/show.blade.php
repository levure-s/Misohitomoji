<x-app-layout>
    <div class="info-area">
        <ul>
            <li>{{$user->name}}</li>
        </ul>
    </div>

    <ul class="posts_list">
        @forelse ($user->posts()->latest()->get() as $post)
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
