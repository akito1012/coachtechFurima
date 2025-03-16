@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/address.css') }}">
@endsection

@section('content')

<div class="address">
    <h2 class="address__header">住所の変更</h2>
    <div class="address__content">
        <form action="/purchase/address/{item_id}" method="post" class="address__form">
            @csrf
            @method('PATCH')
            <div class="address__inner">
                <label for="" class="address__label">郵便番号</label>
                <input type="text" class="address__input" name="post_code" value="{{ $profiles->post_code }}">
            </div>
            <div class="error">
                @error('post_code')
                {{ $message }}
                @enderror
            </div>
            <div class="address__inner">
                <label for="" class="address__label">住所</label>
                <input type="text" class="address__input" name="address" value="{{ $profiles->address }}">
            </div>
            <div class="error">
                @error('address')
                {{ $message }}
                @enderror
            </div>
            <div class="address__inner">
                <label for="" class="address__label">建物名</label>
                <input type="text" class="address__input" name="building" value="{{ $profiles->building }}">
            </div>
            <div class="error">
                @error('building')
                {{ $message }}
                @enderror
            </div>
            <div class="address__button">
                <input type="hidden" name="item_id" value="{{ $items->id }}">
                <button class="address__button-submit">更新する</button>
            </div>
        </form>
    </div>
</div>

@endsection