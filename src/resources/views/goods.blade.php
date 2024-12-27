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
    <div class="goods__item"></div>
</div>

@endsection