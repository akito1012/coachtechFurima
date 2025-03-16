@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}" >
@endsection

@section('content')

<div class="purchase">
    <form action="/purchase/{item_id}" method="post" class="purchase__form">
        @csrf
        <div class="purchase__left">
            <div class="purchase-item">
                <div class="purchase-item__left">
                    <input type="text" class="purchase-item__img" value="{{ $items->img }}">
                </div>
                <div class="purchase-item__right">
                    <input type="text" class="purchase-item__name" value="{{ $items->name }}">
                    <input type="text" class="purchase-item__price" value="{{ $items->price }}">
                </div>
            </div>
            <div class="purchase-payment">
                <h4 class="payment__header">支払方法</h4>
                <select name="payment" id="" class="payment__select">
                    <option value="">選択してください</option>
                    <option value="{{ 'コンビニ払い' }}">コンビニ払い</option>
                    <option value="{{ 'カード払い' }}">カード払い</option>
                </select>
            </div>
            <div class="error">
                    @error('payment')
                    {{ $message }}
                    @enderror
                </div>
            <div class="purchase__sipping-address">
                <h4 class="sipping-address__header">配送先</h4>
                <a href="/purchase/address/{{$items->id}}">変更する</a>
                <input type="text" class="sipping-address__input" value="{{ $profiles->post_code }}">
                <input type="text" class="sipping-address__input" value="{{ $profiles->address }}">
                <input type="text" class="sipping-address__input" value="{{ $profiles->building }}">
            </div>
        </div>
        <div class="purchase__right">
            <table class="payment__table">
                <tr class="payment__table-row">
                    <th class="payment__table-header">商品代金</th>
                    <td class="payment__table-description">
                        <input type="text" class="item-place__input" value="{{ $items->price }}">
                    </td>
                </tr>
                <tr class="payment__table-row">
                    <th class="payment__table-header">支払方法</th>
                    <td class="payment__table-description">
                        <input type="text" class="item-price__input" name="" value="支払方法">
                    </td>
                </tr>
            </table>
            <div class="payment__button">
                <input type="hidden" name="profile_id" value="{{ Auth::id() }}">
                <input type="text" name="item_id" value="{{ $items->id }}">
                <button class="payment__button-submit">購入する</button>
            </div>
        </div>
    </form>
</div>

@endsection
