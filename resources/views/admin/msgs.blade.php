@extends('admin.layout.app')



@section('content')
    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Expandable Table</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($msgs as $msg)
                                <tr data-widget="expandable-table" aria-expanded="false">

                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $msg->name }}</td>
                                    <td>{{ $msg->email }}</td>
                                    <td>{{ $msg->subject }}</td>
                                    <td>{{ $msg->created_at }}</td>

                                    <td>
                                        <form action="{{ url('/admin/messeges/delete') . '/' . $msg->id }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                    </td>

                                </tr>
                                <tr class="expandable-body">
                                    <td colspan="5">
                                        <p>
                                            {{ $msg->content }}
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
