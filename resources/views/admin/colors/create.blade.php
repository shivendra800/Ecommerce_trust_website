@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Color
                    <a href="{{ url('admin/colors')}}" class="btn btn-primary btn-sm text-white float-end">BACK</a>
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

                <form action="{{ url('admin/colors')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Color Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Color Code</label>
                        <input type="text" name="code" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Status</label> <br/>
                        <input type="checkbox" name="status" style="width:50px; height:50px;" /> Checked=Hidden, UnChecked= Visible
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
