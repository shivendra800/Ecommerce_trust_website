@extends('layouts.admin')

@section('title', 'User List')

@section('content')

<div class="row">
    <div class="col-md-12">

        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Users
                    <a href="{{ url('admin/users/create')}}" class="btn btn-primary btn-sm text-white float-end">Add Users</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>



                        @forelse ( $users as $user)

                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->role_as == '0')
                                <label class="badge btn-primary">User</label>
                                @elseif($user->role_as == '1')
                                <label class="badge btn-success">Admin</label>
                                @else
                                <label class="badge btn-danger">non</label>
                            </td>
                          @endif
                            <td>
                                <a href="{{ url('admin/users/'.$user->id.'/edit')}}" class="btn btn-sm btn-success">Edit</a>
                                <a href="{{ url('admin/users/'.$user->id.'/delete')}}" onclick="return confirm('Are you sure,you want yo delete this data ?')" class="btn btn-danger">Delete</a>
                            </td>


                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">No User Available</td>
                        </tr>


                        @endforelse
                    </tbody>
                </table>
                {{-- <div>
                    {{ $user->links() }}
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
