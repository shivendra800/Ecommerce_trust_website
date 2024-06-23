@extends('layouts.admin')

@section('title', 'Edit ')

@section('content')

<div class="row">
    <div class="col-md-12">

        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        {{-- This is for showing required error of all filed is requried to fill --}}
        @if($errors->any())
        <div class="alert alert-warning">
            @foreach ($errors->all() as $error )
            <div>{{ $error }}</div>

            @endforeach
        </div>
        @endif


        <div class="card">
            <div class="card-header">
                <h3>Edit Users
                    <a href="{{ url('admin/users')}}" class="btn btn-danger btn-sm text-white float-end">Back</a>
                </h3>
            </div>
            <div class="card-body">

                <form action="{{ url('admin/users/'.$user->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Mobile No</label>
                            <input type="text" name="mobile_no" value="{{ $user->mobile_no }}" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Select Role</label>
                            <select name="role_as" class="form-control">
                                <option value="">Select Role</option>
                                <option value="0" {{ $user->role_as == '0' ? 'selected':'' }}>User</option>
                                <option value="1" {{ $user->role_as == '1' ? 'selected':'' }}>Admin</option>
                                <option value="2" {{ $user->role_as == '2' ? 'selected':'' }}>Seller</option>
                            </select>
                        </div>
                        <div class="col-md-12 text-end">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection
