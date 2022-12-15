@extends('admin.layout.app')


@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        {{--  --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{--  --}}
        @if (session('about_info'))
            <div class="alert alert-success">
                {{ session('about_info') }}
            </div>
        @endif
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ url('admin/about/update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Page Title</label>
                    <input type="text" name="title" value="{{ $about->title }}" class="form-control" id="title"
                        placeholder="Enter page title">
                </div>

                <div class="form-group">
                    <!-- textarea -->
                    <div class="form-group">
                        <label>Textarea</label>
                        <textarea name="text" class="form-control" rows="5"placeholder="Enter ...">{{ $about->text }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
