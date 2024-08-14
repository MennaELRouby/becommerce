@extends('admin.layout.admin')
@section('content')
    <div class="row">
        <h2>Checkout</h2>
        <form action="{{ route('checkout.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group text-left">
                <label for="address">ِAddress Line:</label>
                <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
            </div>
            <div class="form-group text-left">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
            </div>
            <div class="form-group text-left">
                <label for="state">State:</label>
                <input type="text" class="form-control" id="state" placeholder="Enter State" name="state">
            </div>
            <div class="form-group text-left">
                <label for="zip">ZIP:</label>
                <input type="text" class="form-control" id="zip" placeholder="Enter ZIP" name="zip">
            </div>

            <div class="form-group text-left">
                <label for="country"> Country </label>
                <input type="text" class="form-control" id="country" name="country" value="">
            </div>

            <div class="form-group text-left">
                <label for="phone"> Phone Number </label>
                <input type="text" class="form-control" id="phone" name="phone" value="">
            </div>

            <button type="submit" class="btn btn-default">Proceed to Payment</button>

        </form>
    </div>
@endsection


</html>
