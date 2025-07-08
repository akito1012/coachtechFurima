@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')

<div class="item">
    <form action="/item/{item_id}" method="post"class="item__form">
        @csrf
        <div class="item__left">
            <div class="item__img">
                <img src="{{ asset($items->img) }}" alt="商品画像" class="item__img-input" width="200" height="200">
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
                    <a href="/purchase/{{$items->id}}" class="purchase__link">購入手続きへ</a>
                </div>
                <div class="item__counts">
                    <button type="submit" name="like">
                        <img src="{{ asset('image/like.png') }}" alt="いいね" class="like_img" width="30" height="30">
                    </button>
                    <input type="text" class="count__like" value="{{ $like_count }}">
                    <img src="{{ asset('image/comment.png') }}" alt="コメント" class="comment_img" width="20" height="20">
                    <input type="text" class="count__comment" value="{{ $comment_count }}">
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
                    <input type="text" class="comment__count-input" value="{{ $comment_count }}">
                </div>
                <div class="item-comment__addition-everyone">
                    @if(@isset($comments))
                        @foreach($comments as $comment)
                            <input type="text" value="{{ $comment['profile_img'] }}">
                            <input type="text" class="item-comment__user-name" value="{{ $comment['name'] }}">
                            <input type="text" class="item-comment__everyone-comment" value="{{ $comment['comment'] }}">
                        @endforeach
                        {{ $comments->links() }}
                    @else
                    <p>コメントがまだありません</p>
                    @endif
                </div>
                <div class="item__comment-addition">
                    <label for="" class="label__comment-addition">商品へのコメント</label>
                    <textarea name="comment" id="" class="textarea__comment-addition"></textarea>
                    <input type="hidden" name="item_id" value="{{ $items->id }}">
                </div>
                <div class="error">
                    @error('comment')
                    {{ $message }}
                    @enderror
                </div>
                <div class="send__button">
                    <button class="send__button-submit" type="submit" name="comment_submit">コメントを送信する</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection