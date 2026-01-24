@extends('admin.base_template')

@section('content')
<section>
    <table class='table'>
        <tr>
            <th>#</th>
            <th>Email</th>
            <th>Статус</th>
            <th>Стоимость заказа</th>
            <th>Кол-во товара</th>
            <th>Адресс доставки</th>
            <th>Примечание к заказу</th>
        </tr>
        @foreach ($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->email}}</td>
            <td>{{$order->getStatus()}}</td>
            <td style="text-align: right">{{$order->sum_price}} руб.</td>
            <td style="text-align: right">{{$order->count_products}} шт.</td>
            <td>{{$order->address}}</td>
            <td>{{$order->other}}</td>
        </tr>
        @endforeach
    </table>
    {{ $orders->links('vendor.pagination.bootstrap-5') }}
</section>
@endsection
