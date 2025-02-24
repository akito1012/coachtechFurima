@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')

<div class="mypage">
    <div class="profile-user">
        <form action="" class="profile__form">
            @csrf
            <input type="text" class="profile-img" value="プロフィール画像">
            <input type="text" class="profile-name" value="ユーザー名">
        </form>
        <form action="/mypage/profile" class="profile-update__form">
            @csrf
            <button class="profile-update__button">プロフィールを編集</button>
        </form>
    </div>
    <div class="mypage__inner">
        <form action="" class="mypage__form">
            <div class="mypage__inner-button">
                <button class="mypage-listing__button">出品した商品</button>
                <button class="mypage-purchase__button">購入した商品</button>
            </div>
        </form>
    </div>
</div>

@endsection