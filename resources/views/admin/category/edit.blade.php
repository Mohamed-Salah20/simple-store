@extends('admin.layout.app')

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('categories.update', $category) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName1">Category Name</label>
                    <input type="name" name="name" value="{{ $category->name }}" class="form-control"
                        id="exampleInputName1" placeholder="Enter category name">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
