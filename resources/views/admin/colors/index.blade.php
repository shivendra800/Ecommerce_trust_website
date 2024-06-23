@extends('layouts.admin')

@section('content')



<div class="row">
    <div class="col-md-12">

        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Color List
                    <a href="{{ url('admin/colors/create')}}" class="btn btn-primary btn-sm text-white float-end">Add Color</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Color Name</th>
                            <th>Color Code</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        @forelse ( $colors as $colors)

                        <tr>
                            <td>{{ $colors->id }}</td>
                            <td>{{ $colors->name }}</td>
                            <td>{{ $colors->code }}</td>

                            <td>{{ $colors->status == '1'? 'Hidden':'Visible' }}</td>
                            <td>
                                {{-- <a href="{{ url('admin/colors/'.$colors->id.'/edit')}}" class="btn btn-sm btn-success">Edit</a> --}}
                                <a href="{{ url('admin/colors/'.$colors->id.'/delete')}}" onclick="return confirm('Are you sure,you want yo delete this data ?')" class="btn btn-danger">Delete</a>
                            </td>


                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">No. Of Products Available</td>
                        </tr>


                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
