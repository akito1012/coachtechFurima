@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')

<div class="profile">
    <h2 class="profile__title">プロフィール設定</h2>
    <div class="profile__content">
        <form action="/mypage/profile" class="profile__form" method="post" >
            @if(isset($profiles))
            @method('PATCH')
            @endif
            @csrf
                <div class="profile__img">
                    @if(isset($profiles))
                    <img src="" alt="画像">
                    <input type="text" class="profile__img-button" name="profile_img" value="{{ $profiles->profile_img }}">画像を選択する</input>
                    @else
                    <img src="" alt="画像">
                    <input type="text" class="profile__img-button" name="profile_img" value="プロフィール画像">画像を選択する</input>
                    @endif
                </div>
                <div class="profile__item">
                        <label for="name" class="item__label">ユーザー名</label>
                        <input id="name" type="text" class="item__input" name="name" value="{{ Auth::user()->name }}">
                </div>
                <div class="error">
                    @error('name')
                    {{ $messages }}
                    @enderror
                </div>
                <div class="profile__item">
                    @if(isset($profiles))
                    <label for="post_code" class="item__label">郵便番号</label>
                    <input id="post_code" type="text" class="item__input" name="post_code" value="{{ $profiles->post_code }}">
                    @else
                    <label for="post_code" class="item__label">郵便番号</label>
                    <input id="post_code" type="text" class="item__input" name="post_code" value="{{ old('post_code') }}">
                    @endif
                </div>
                <div class="error">
                    @error('post_code')
                    {{ $messages }}
                    @enderror
                </div>
                <div class="profile__item">
                    @if(isset($profiles))
                    <label for="address" class="item__label">住所</label>
                    <input id="address" type="text" class="item__input" name="address" value="{{ $profiles->address }}">
                    @else
                    <label for="address" class="item__label">住所</label>
                    <input id="address" type="text" class="item__input" name="address" value="{{ old('address') }}">
                    @endif
                </div>
                <div class="error">
                    @error('address')
                    {{ $messages }}
                    @enderror
                </div>
                <div class="profile__item">
                    @if(isset($profiles))
                    <label for="building" class="item__label">建物名</label>
                    <input id="building" type="text" class="item__input" name="building" value="{{ $profiles->building }}">
                    @else
                    <label for="building" class="item__label">建物名</label>
                    <input id="building" type="text" class="item__input" name="building" value="{{ old('building') }}">
                    @endif
                </div>
                <div class="error">
                    @error('building')
                    {{ $messages }}
                    @enderror
                </div>
                <div class="profile__button">
                    <button class="profile__button-submit" type="submit" name="register_update" >更新する</button>
                </div>
        </form>
    </div>
</div>

@endsection
