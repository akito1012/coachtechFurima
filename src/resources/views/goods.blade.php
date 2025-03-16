@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/goods.css') }}">
@endsection

@section('content')

<div class="goods">
    <div class="goods__header">
        <div class="goods__button">
            <form action="/" method="get">
                <button class="button__list" type="submit" name="tab" value="">オススメ</button>
                <button class="button__mylist" type="submit" name="tab" value="mylist">マイリスト</button>
            </form>
        </div>
    </div>
    <div class="goods__item">
        <form class="goods__form"action="/" method="post" class="item__form">
            @csrf
            @if($tab == 'mylist')
            @foreach($users->items as $item)
            <a href="/item/{{$item->id}}" class="item__page">
                <img src="" alt="商品画像" class="item__img">
                <input class="item_name-input"type="text"  name="name" value="{{ $item->name }}">
                <input type="hidden" class="id__submit" name="id" value="{{ $item->id }}">
            </a>
            @endforeach
            @else
            @foreach($items as $item)
            <a href="/item/{{$item->id}}" class="item__page">
                <img src="{{ asset('storage/item_img/{$item->img}') }}" alt="商品画像" class="item__img" width="100" height="100">
                <input class="item__name-input"type="text"  name="name" value="{{ $item->name }}">
                <input type="hidden" class="id__submit" name="id" value="{{ $item->id }}">
            </a>
            @endforeach
            @endif
        </form>
    </div>
</div>

@endsection