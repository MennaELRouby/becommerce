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
                        <td>{{ $data->description }}</td>
                        <td>{{ $data->attributes->has('size') ? $data->attributes->size : '' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
