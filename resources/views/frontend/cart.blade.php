@extends('layouts.site')
@section('title', 'Giỏ hàng')
@section('header')
    <link rel="stylesheet" href="Contact.css">
@endsection

@section('content')
    <div class="container">
        <h1>Giỏ hàng của tôi</h1>
        <form action="{{ route('site.cart.update')}}" method="POST">
            @csrf
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:90px">Hinh</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $totalMoney = 0;
                @endphp
                @foreach ($list_cart as $row_cart)
                    <tr>
                        <td>
                            <img class="img-fluid" src="{{ asset('images/products' . $row_cart['image']) }}"
                                alt="{{ $row_cart['image'] }}">
                        </td>
                        <td>{{ $row_cart['name'] }}</td>
                        {{-- <td>{{ $row_cart['qty'] }}</td> --}}
                        <td>
                            <input  style="width:60px" min="1" max="10"
                                name="qty[{{ $row_cart['id'] }}]" value="{{ $row_cart['qty'] }} ">
                        </td>
                        <td>{{ number_format($row_cart['price']) }}</td>
                        <td>{{ number_format($row_cart['price'] * $row_cart['qty']) }}</td>
                        <td class="text-center">
                            <a href="{{ route('site.cart.delete',['id'=>$row_cart['id']]) }}" class="btn btn-danger btn-sm">
                                X
                            </a>
                        </td>
                    </tr>
                    @php
                        $totalMoney +=$row_cart['price']*$row_cart['qty'];
                    @endphp
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4">
                        <a class="btn btn-success px-3" href="{{route('site.home')}}">Mua thêm</a>
                        <button type="submit" class="btn btn-primary px-3">Cập nhật</button>
                        <a class="btn btn-info px-3" href="">Thanh toán</a>
                    </th>
                    <th colspan="3" class="text-end">
                        <strong>Tổng tiền: {{ number_format($totalMoney)}}</strong>
                    </th>
                </tr>
            </tfoot>
        </table>
    </form>
    </div>
@endsection
