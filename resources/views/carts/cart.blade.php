@extends('layout.main')
@section('content')
    <div class="row">
        <h2>Cart Items</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th><span>Name</span></th>
                    <th><span>price</span></th>
                    <th><span>qty</span></th>
                    <th><span>size</span></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($cartitems as $data)
                    <tr>
                        <td class="lalign">{{ $data->name }}</td>
                        <td>{{ $data->price }}</td>
                        <td width="50px">
                            <form action="ucart/{{ $data->id }}" method="POST">
                                @csrf
                                @method('put')
                                {{ $data->quantity }}
                                <input type="text" name="qty" value="" placeholder="Enter quantity">
                                <input type="submit" value="Add or reduce qty">
                                <a href="deletecart/{{ $data->id }}"
                                    onclick="return confirm('Are you sure you want to delete?')">Delete</a>

                            </form>
                        </td>
                        <td>{{ $data->attributes->has('size') ? $data->attributes->size : '' }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td> total: {{ Cart::getTotal() }}</td>
                    <td> total Items:{{ Cart::getTotalQuantity() }}</td>

                </tr>
            </tbody>
        </table>
        <a href="{{ route('checkout') }}" class="button">Checkout</a>
    </div>
@endsection
