@extends('admin.layout.app')



@section('content')
    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Expandable Table</h3>
                    <span style="float:right;"><a href="{{ route('products.create') }}">Create New Product</a></span>
                </div>
                <!-- ./card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($products as $product)
                                <tr data-widget="expandable-table" aria-expanded="false">

                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td><img src="{{ asset('storage') . '/' . $product->img }}" alt=""
                                            onerror="this.src='{{ asset('my') . '/' . $product->img }}'"></td>
                                    <td>{{ $product->created_at }}</td>

                                    <td>
                                        <form action="{{ route('products.destroy', $product) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                    </td>

                                </tr>
                                <tr class="expandable-body">
                                    <td colspan="5">
                                        <p>
                                            {{ $product->desc }}
                                        </p>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
@endsection
