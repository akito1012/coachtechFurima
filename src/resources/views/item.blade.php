@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')

<div class="item">
    <form action="/item/{item_id}" method="get"class="item__form">
        @csrf
        <div class="item__left">
            <div class="item__img">
                <input type="text" class="item__img-input" value="商品画像">
            </div>
        </div>
        <div class="item__right">
            <div class="item__inner">
                <div class="item__detail">
                    <input type="text" class="item__name-input" name="name" value="{{ $items->name }}">
                    <input type="text" class="item__brand-input" name="brand" value="{{ $items->brand }}">
                    <input type="text" class="item__price-input"  name="price" value="{{ $items->price }}">
                </div>
                <div class="item-button__sell">
                    <button class="item-button__sell-submit">購入手続きへ</button>
                </div>
                <div class="item__counts">
                    <input type="text" class="count__like" value="いいね数">
                    <input type="text" class="count__comment" value="コメント数">
                </div>
                <div class="item__explanation">
                    <h3 class="item__explanation-header">商品説明</h3>
                    <textarea name="" id="" class="item__explanation-textarea">{{ $items->explanation }}</textarea>
                </div>
                <div class="item__information">
                    <h3 class="item__information-header">商品情報</h3>
                    @foreach($items->categories as $category)
                    <input type="text" class="item__category"  name="category" value="{{ $category->category }}">
                    @endforeach
                    <input type="text" class="item__condition"  name="condition" value="{{ $condition->condition }}">
                    <label for="" class="comment__count-label">コメント</label>
                    <input type="text" class="comment__count-input" value="（カウント数）">
                </div>
                <div class="item-comment__addition-everyone">
                    <input type="text" class="item-comment__user-name" value="admin">
                    <input type="text" class="item-comment__everyone-comment" value="ここにコメントが入ります">
                </div>
                <div class="item__comment-addition">
                    <label for="" class="label__comment-addition">商品へのコメント</label>
                    <textarea name="" id="" class="textarea__comment-addition"></textarea>
                </div>
                <div class="send__button">
                    <button class="send__button-submit">コメントを送信する</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection