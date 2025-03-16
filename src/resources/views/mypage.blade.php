@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')

<div class="mypage">
    <div class="profile-user">
        <form action="/mypage" method="get" class="profile__form">
            @csrf
            <input type="text" class="profile-img" value="{{ $profiles->profile_img }}">
            <input type="text" class="profile-name" value="{{ Auth::user()->name }}">
            <a href="/mypage/profile" class="profile-update__button">プロフィールを編集</a>
        </form>
    </div>
    <div class="mypage__inner">
        <form action="/mypage" method="get" class="mypage__form">
            <div class="mypage__inner-button">
                <button class="mypage-listing__button" type="submit" name="tab" value="sell">出品した商品</button>
                <button class="mypage-purchase__button" type="submit" name="tab" value="buy">購入した商品</button>
            </div>
        </form>
        <form action="/mypage" method="get" class="mypage__form">
            <div class="mypage__item">
                @if($tab == 'buy')
                    @foreach($profiles->items as $item)
                        <a href="/item/{{$item->id}}" class="item__page">
                            <img src="" alt="商品画像" class="item__img">
                            <input type="text" class="item__input" name="name" value="{{ $item->name }}">
                            <input type="hidden" class="id__submit" name="id" value="{{ $item->id }}">
                        </a>
                    @endforeach
                @else
                    @foreach($items as $item)
                        <a href="/item/{{$item->id}}" class="item__page">
                            <img src="" alt="商品画像" class="item__img" width="100" height="100">
                            <input type="text" class="item__input" name="name" value="{{ $item->name }}">
                            <input type="hidden" class="id__submit" name="id" value="{{ $item->id }}">
                        </a>
                    @endforeach
                @endif
            </div>
        </form>
    </div>
</div>

@endsection