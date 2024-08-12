@extends('admin.layout.admin')
@section('content')
    <div class="row">
        <h2>Products List</h2>
        <p> Products List Using Laravel Eloquent ORM</p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th><span>name</span></th>
                    <th><span>size</span></th>
                    <th><span>price</span></th>
                    <th><span>description</span></th>
                    <th><span>category</span></th>
                    <th><span>Image</span></th>
                    <th><span>Edit Car</span></th>
                    <th><span>Car details</span></th>
                    <th><span>Delete Car </span></th>



                </tr>
            </thead>

            <tbody>
                @foreach ($procat as $data)
                    <tr>
                        <td class="lalign">{{ $data->name }}</td>
                        <td>{{ $data->size }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->description }}</td>
                        <td>{{ $data->category->name }}</td>
                        <td>{{ $data->image }}</td>
                        <td><a href="edit/{{ $data->id }}">Edit</a></td>
                        <td><a href="show/{{ $data->id }}">Show</a></td>
                        <td><a href="delete/{{ $data->id }}">Delete 🚮</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
