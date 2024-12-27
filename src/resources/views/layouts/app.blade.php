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
        <input type="text" class="search" name="name" value="{{ old('name') }}" placeholder="なにをお探しですか？">
        <div class="button">
            @if (Auth::check())
            <form action="/logout" class="logout__form" method="post">
                @csrf
                <button class="logout__button">ログアウト</button>
            </form>
            <button class="mypage__button">マイページ</button>
            <button class="purchase__button">出品</button>
            @else
            <button class="login__button">ログイン</button>
            @endif
        </div>
    </div>

    <main>
        @yield('content')
    </main>

</body>

</html>