<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    @extends('admin.layout.includes.header')

    <div class="container">
        <h2>Add Product</h2>
        <form action="{{ route('addproduct') }}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="size">Price:</label>
                <input type="number" class="form-control" id="size" placeholder="Enter size" name="size">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" rows="5" id="description"></textarea>
            </div>
            <div class="form-group">
                <label for="category_id">Category:</label>
                <select id="category" name="category_id">
                    <option value=""></option>
                </select>
            </div>

            <div class="form-group">
                <label for="image"> Upload Image </label>
                <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
            </div>

            <button type="submit" class="btn btn-default">Create New Product</button>

        </form>
    </div>

</body>

</html>
