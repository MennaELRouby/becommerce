@extends('admin.layout.admin')
@section('content')
    <div class="row">
        <h2>Add Product</h2>
        <form action="{{ route('createproduct') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group text-left">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group text-left">
                <label for="size">Size:</label>
                <input type="text" class="form-control" id="size" placeholder="Enter size" name="size">
            </div>
            <div class="form-group text-left">
                <label for="price">price:</label>
                <input type="text" class="form-control" id="price" placeholder="Enter size" name="price">
            </div>
            <div class="form-group text-left">
                <label for="description">Description:</label>
                <textarea class="form-control" rows="5" id="description" name="description"></textarea>
            </div>
            <div class="form-group text-left">
                <label for="category_id">Category:</label>
                <select id="category" name="category_id">
                    <option value="">Select Category</option>
                    @foreach ($cat as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group text-left">
                <label for="image"> Upload Image </label>
                <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
            </div>

            <button type="submit" class="btn btn-default">Create New Product</button>

        </form>
    </div>
@endsection


</html>
