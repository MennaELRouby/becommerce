@extends('admin.layout.admin')
@section('content')
    <div class="row">
        <h2>Payment Proccess</h2>
        <form action="{{ route('payment.store') }}" method="post" enctype="multipart/form-data" id="payment-form">
            @csrf
            <div class="form-group text-left">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" data-stripe="email">
            </div>
            <div class="form-group text-left">
                <label for="card Number">Card Number</label>
                <input type="text" class="form-control" id="cardnum" placeholder="Enter card Number"
                    data-stripe="cardnum">
            </div>
            <div class="form-group text-left">
                <label for="expiration">Expiration</label>
                <span>Expiration (MM/YY)</span>
                <input type="text" size="2" data-stripe="exp_month">
                <span> / </span>
                <input type="text" size="2" data-stripe="exp_year">
            </div>
            <div class="form-group text-left">
                <label for="cvc">CVC:</label>
                <input type="text" class="form-control" id="cvc" placeholder="Enter cvc" data-stripe="cvc">
            </div>


            <button type="submit" class="btn btn-default">Proceed to Payment</button>

        </form>
    </div>
@endsection


</html>
