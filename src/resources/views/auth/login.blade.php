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
            <input type="text" class="item__input" id="user" name="user" value="{{ old('user') }}">
        </div>
        <div class="error">error</div>
        <div class="login__item">
            <label for="password" class="item__label">パスワード</label>
            <input type="text" class="item__input" id="password" name="password" />
        </div>
        <div class="error">error</div>
        <div class="button">
            <button class="login__button">ログインする</button>
        </div>
    </form>
    <div class="register">
        <a href="" class="register__link">会員登録はこちら</a>
    </div>
</div>

@endsection