@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/goods.css') }}">
@endsection

@section('content')

<div class="goods">
    <div class="goods__header">
        <div class="goods__button">
            <button class="button__list">オススメ</button>
            <button class="button__mylist">マイリスト</button>
        </div>
    </div>
    <div class="goods__item">
        <form action="/" method="get" class="item__form">
            @csrf
            @foreach($items as $item)
            <a href="/item/{{$item->id}}" class="item__page">
                <img src="" alt="商品画像" class="item__img">
                <input type="text" class="item__input" name="name" value="{{ $item->name }}">
                <input type="hidden" class="id__submit" name="id" value="{{ $item->id }}">
            </a>
            @endforeach
        </form>
    </div>
</div>

@endsection