@extends('layouts.app')

@section('title', 'Order List')

@section('content')

<div class="py-3 py-md-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif
                <div class="shadow bg-white p-3">
                <h4 class="mb-4">MY Order</h4>
                <hr>
                <div class="table-responsive">
                    <table class=" table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>Order Id</th>
                            <th>Tracking No</th>
                            <th>Username</th>
                            <th>Payment Mode</th>
                            <th>Order Date</th>
                            <th>Status Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                          <tbody>
                            @forelse ($orders as $orderItem )
                            <tr>
                               <td>{{ $orderItem->id   }}</td>
                            <td>{{ $orderItem->tracking_no   }}</td>
                            <td>{{ $orderItem->fullname   }}</td>
                            <td>{{ $orderItem->payment_mode   }}</td>
                            <td>{{ $orderItem->created_at   }}</td>
                            <td>{{ $orderItem->status_message   }}</td>
                            <td>
                            <a href="{{ url('orders/'.$orderItem->id) }}" class="btn btn-primary btn-sm">View</a>
                            @if($orderItem->status_message == 'in progress')
                            <a href="{{ url('orders/cancleOrder/'.$orderItem->id) }}" class="btn btn-danger btn-sm">Cancle Order</a>
                            @endif
                        </td>

                        </tr>
                            @empty
                            <tr>
                                <td colspan="7">No Orders Available</td>
                            </tr>

                            @endforelse
                          </tbody>

                    </table>
                      <div>
                        {{ $orders->links() }}
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
