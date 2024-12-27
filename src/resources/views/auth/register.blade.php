@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')

<div class="register">
    <h2 class="register__header">会員登録</h2>
    <div class="register__content">
        <form action="/register" class="register__form" method="post">
            @csrf
            <div class="register__item">
                <label for="name" class="item__label">ユーザー名</label>
                <input id="name" type="text" class="item__input" name="name" value="{{ old('name') }}">
            </div>
            <div class="error">error</div>
            <div class="register__item">
                <label for="email" class="item__label">メールアドレス</label>
                <input id="email"type="text" class="item__input" name="email" value="{{ old('email') }}">
            </div>
            <div class="error">error</div>
            <div class="register__item">
                <label for="password" class="item__label">パスワード</label>
                <input id="password" type="text" class="item__input" name="password" />
            </div>
            <div class="error">error</div>
            <div class="register__item">
                <label for="password_confirmation" class="item__label">確認用パスワード</label>
                <input id="password_confirmation" type="text" class="item__input" name="password_confirmation" />
            </div>
            <div class="error">error</div>
            <div class="register__button">
                <button class="register__button-submit">登録する</button>
            </div>
        </form>
        <div class="login">
            <a href="" class="login__link">ログインはこちら</a>
        </div>
    </div>
</div>

@endsection
