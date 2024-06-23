@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">

@if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
@endif

        <div class="card">
            <div class="card-header">
                <h3>Slider
                    <a href="{{ url('admin/sliders/create')}}" class="btn btn-primary btn-sm text-white float-end">Add Slider</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $sliders as $slider)

                        <tr>
                            <td>{{ $slider->id }}</td>
                            <td>{{ $slider->title }}</td>
                            <td>{{ $slider->description }}</td>
                            <td>
                                <img src="{{asset("$slider->image")  }}" style="width:70px;height:70px" alt="Slider">

                            </td>

                            <td>{{ $slider->status == '1'? 'Hidden':'Visible' }}</td>
                            <td>
                                <!--<a href="{{ url('admin/sliders/'.$slider->id.'/edit')}}" class="btn btn-sm btn-success">Edit</a>-->
                                <a href="{{ url('admin/sliders/'.$slider->id.'/delete')}}"
                                    onclick="return confirm('Are you sure,you want yo delete this data ?')"
                                 class="btn btn-danger" >Delete</a>
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



