@extends('layouts.admin')

@section('content')



<div class="row">
    <div class="col-md-12">

        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Products
                    <a href="{{ url('admin/products/create')}}" class="btn btn-primary btn-sm text-white float-end">Add Products</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Product Name</th>
                            <th>Selling Price</th>
                            <th>Quantty</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>



                        @forelse ( $products as $products)

                        <tr>
                            <td>{{ $products->id }}</td>
                            <td>{{ $products->category->name }}</td>
                            <td>{{ $products->name }}</td>
                            <td>{{ $products->selling_price }}</td>
                            <td>{{ $products->quantity }}</td>
                            <td>{{ $products->status == '1'? 'Hidden':'Visible' }}</td>
                            <td>
                                <a href="{{ url('admin/products/'.$products->id.'/edit')}}" class="btn btn-sm btn-success">Edit</a>
                                <a href="{{ url('admin/products/'.$products->id.'/delete')}}" onclick="return confirm('Are you sure,you want yo delete this data ?')" class="btn btn-danger">Delete</a>
                            </td>


                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">No. Of Products Available</td>
                        </tr>


                        @endforelse
                    </tbody>
                </table>
                {{-- <div>
                    {{ $products->links() }}
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
