@extends('admin.layout.admin')
@section('content')
    <div class="row">
        <div class="x_content">
            <br />
            <form action="{{ route('addcategory') }}" method="POST" "demo-form2" data-parsley-validate
                class="form-horizontal form-label-left">
                @csrf
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="add-category">Add Category <span
                            class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="add-category" required="required" class="form-control " name="name">
                    </div>
                </div>

                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </div>

            </form>
            <div class="item form-group">
                @if (!empty($cat))
                    @foreach ($cat as $cat)
                        <a class="btn btn-success" href="{{ route('showcategory', $cat->id) }}">{{ $cat->name }}</a>
                    @endforeach
                @endif
            </div>

        </div>
    </div>

    @if (!empty($product))
        <div class="row">
            <h2> Categories List</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th><span>products list</span></th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($product as $data)
                        <tr>
                            <td class="lalign">{{ $data->name }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td> No Products listed for this category</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @endif
@endsection
