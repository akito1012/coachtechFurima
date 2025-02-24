@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}" >
@endsection

@section('content')

<div class="purchase">
    <form action="" class="purchase__form">
        <div class="purchase__left">
            <div class="purchase-item">
                <div class="purchase-item__left">
                    <input type="text" class="purchase-item__img" value="商品画像">
                </div>
                <div class="purchase-item__right">
                    <input type="text" class="purchase-item__name" value="商品名">
                    <input type="text" class="purchase-item__price" value="商品価格">
                </div>
            </div>
            <div class="purchase-payment">
                <h4 class="payment__header">支払方法</h4>
                <select name="" id="" class="payment__select">
                    <option value="">選択してください</option>
                </select>
            </div>
            <div class="purchase__sipping-address">
                <h4 class="sipping-address__header">配送先</h4>
                <input type="text" class="sipping-address__input" value="ここに住所が入ります">
            </div>
        </div>
        <div class="purchase__right">
            <table class="payment__table">
                <tr class="payment__table-row">
                    <th class="payment__table-header">商品代金</th>
                    <td class="payment__table-description">
                        <input type="text" class="item-place__input" value="金額">
                    </td>
                </tr>
                <tr class="payment__table-row">
                    <th class="payment__table-header">支払方法</th>
                    <td class="payment__table-description">
                        <input type="text" class="item-price__input" value="支払い方法">
                    </td>
                </tr>
            </table>
            <div class="payment__button">
                <button class="payment__button-submit">購入する</button>
            </div>
        </div>
    </form>
</div>

@endsection
