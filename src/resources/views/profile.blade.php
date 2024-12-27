@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')

<div class="profile">
    <h2 class="profile__title">プロフィール設定</h2>
    <div class="profile__content">
        <form action="" class="profile__form">
            <div class="profile__img">
                <img src="" alt="画像">
                <button class="profile__img-button">画像を選択する</button>
            </div>
            <div class="profile__item">
                <label for="name" class="item__label">ユーザー名</label>
                <input id="name" type="text" class="item__input" name="name" value="{{ old('name') }}">
            </div>
            <div class="error">error</div>
            <div class="profile__item">
                <label for="post-code" class="item__label">郵便番号</label>
                <input id="post-code" type="text" class="item__input" name="post-code" value="{{ old('post-code') }}">
            </div>
            <div class="error">error</div>
            <div class="profile__item">
                <label for="address" class="item__label">住所</label>
                <input id="address" type="text" class="item__input" name="address" value="{{ old('address') }}">
            </div>
            <div class="error">error</div>
            <div class="profile__item">
                <label for="building" class="item__label">建物名</label>
                <input id="building" type="text" class="item__input" name="building" value="{{ old('building') }}">
            </div>
            <div class="error">error</div>
            <div class="profile__button">
                <button class="profile__button-submit">更新する</button>
            </div>
        </form>
    </div>
</div>

@endsection
