<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoachtechFurima</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>

<body>
    <div class="header">
        <img src="{{ asset('image/coachtech_logo.svg') }}" alt="coachtech" class="coachtech">
        <form action="/" method="post">
            @csrf
            <input type="text" class="search" name="search" value="{{ old('search') }}" placeholder="なにをお探しですか？">
        </form>
        <div class="button">
            @if (Auth::check())
            <form action="/logout" class="logout__form" method="post">
                @csrf
                <button class="logout__button">ログアウト</button>
            </form>
            @else
            <form action="/login" class="login__form" method="get">
                @csrf
                <button class="login__button">ログイン</button>
            </form>
            @endif
            <a href="/mypage">
                <button class="mypage__button">マイページ</button>
            </a>
            <a href="/sell">
                <button class="purchase__button">出品</button>
            </a>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

</body>

</html>