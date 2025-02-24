@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/address.css') }}">
@endsection

@section('content')

<div class="address">
    <h2 class="address__header">住所の変更</h2>
    <div class="address__content">
        <form action="" class="address__form">
            <div class="address__inner">
                <label for="" class="address__label">郵便番号</label>
                <input type="text" class="address__input">
            </div>
            <div class="address__inner">
                <label for="" class="address__label">住所</label>
                <input type="text" class="address__input">
            </div>
            <div class="address__inner">
                <label for="" class="address__label">建物名</label>
                <input type="text" class="address__input">
            </div>
            <div class="address__button">
                <button class="address__button-submit">更新する</button>
            </div>
        </form>
    </div>
</div>

@endsection