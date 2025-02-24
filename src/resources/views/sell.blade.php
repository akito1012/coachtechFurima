@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')

<div class="sell">
    <h2 class="sell__header">商品の出品</h2>
    <div class="sell__content">
        <form  action="/sell" class="sell__form" method="post">
            @csrf
            <div class="sell__img">
            <label for="" class="item__label">商品画像</label>
            <input type="text" class="input__img" name="img" value="商品画像が入ります">
            </div>
            <div class="sell__detail">
                <h3 class="sell__header-detail">商品の詳細</h3>
                <div class="sell__category">
                    <label for="" class="item__label">カテゴリー</label>
                    @foreach($categories as $category)
                    <label for="{{ $category['category'] }}">{{ $category['category'] }}</label>
                    <input id="{{ $category['category'] }}" type="checkbox" class="input__category" name="category_id" value="{{ $category['id'] }}" />
                    @endforeach
                </div>
                <div class="sell__condition">
                    <label class="item__label">商品の状態</label>
                    <select name="condition_id" id="" class="condition__select">
                        <option value="">選択してください</option>
                        @foreach($conditions as $condition)
                        <option value="{{ $condition['id'] }}">{{ $condition['condition'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="sell__describe">
                <h3 class="sell__header-describe">商品名と説明</h3>
                <label for="" class="item__label">商品名</label>
                <input type="text" class="item__input" name="name" value="{{ old('name') }}">
                <label for="" class="item__label">ブランド</label>
                <input type="text" class="item__input" name="bland" value="{{ old('bland') }}">
                <label for="" class="item__label">商品の説明</label>
                <input type="text" class="item__input" name="explanation" value="{{ old('explanation') }}">
                <label for="" class="item__label">販売価格</label>
                <input type="text" class="item__input" name="price" value="{{ old('price') }}">
            </div>
            <div class="sell__button">
                <button class="sell__button-submit" type="submit">出品する</button>
            </div>
        </form>
    </div>
</div>

@endsection
