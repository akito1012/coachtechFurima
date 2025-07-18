@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

<div class="login__page">
    <div class="title">
        <h2 class="login__header">ログイン</h2>
    </div>
    <form action="/login" class="login__form" method="post">
        @csrf
        <div class="login__item">
            <label for="user" class="item__label">ユーザー名/メールアドレス</label>
            <input type="text" class="item__input" id="user" name="email" value="{{ old('email') }}">
        </div>
        <div class="error">
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <div class="login__item">
            <label for="password" class="item__label">パスワード</label>
            <input type="text" class="item__input" id="password" name="password" />
        </div>
        <div class="error">
            @error('password')
            {{ $message }}
            @enderror
        </div>
        <div class="button">
            <button class="login__button">ログインする</button>
        </div>
    </form>
    <div class="register">
        <a href="/register" class="register__link">会員登録はこちら</a>
    </div>
</div>

@endsection