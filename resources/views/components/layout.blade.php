<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>{{$title}}</title>
        <link rel="stylesheet" href="{{url('css/doctor.css')}}">
        <link rel="stylesheet" href="{{url('css/style.css')}}">
    </head>
    <body>
        <header>
            {{-- <a href="{{route('user.login')}}"> --}}
                <h1 class="title">みそひともじ</h1>
            {{-- </a> --}}

            <ul class="menu">
                {{-- <li>{{$user->name}}</li> --}}
                <li>
                    <a href="{{route('login')}}">ろぐいん</a>
                </li>
                <li>
                    <a href="{{route('register')}}">しんき</a>
                </li>
            </ul>
        </header>
        <main>
            <section>
                <div class="container">
                    {{$slot}}
                </div>
            </section>
        </main>
        <footer>
            <p>Misohitomoji@D1a2a</p>
        </footer>
    </body>
</html>
