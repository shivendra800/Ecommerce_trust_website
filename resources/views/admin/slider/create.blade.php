@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Slider
                    <a href="{{ url('admin/sliders')}}" class="btn btn-primary btn-sm text-white float-end">BACK</a>
                </h3>
            </div>
            <div class="card-body">

                @if($errors->any())
                    <div>
                        @foreach ($errors as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ url('admin/sliders/create')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="md-3">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="md-3">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="md-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="md-3">
                        <label>Status</label> <br/>
                        <input type="checkbox" name="status" style="width:30px;height:30px" />
                        Checked=Hidden,UnChecked=Visible
                    </div>

                    <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
