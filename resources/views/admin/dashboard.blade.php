@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 grid margin">

        @if(session('message'))
        <h6 class="alert alert-success">{{ session('message') }},</h6>
        @endif
        <div class="me-md-3 me-xl-5">
            <h2>Dashboard</h2>
            <p class="mb-md-0">Your Analytics Dashoard Template.</p>
            <hr>
        </div>
        {{-- <div class="me-md-3 me-xl-5">
            @if (session('message'))
              <h2>{{ session('message')}},</h2>
            @endif
            <p class="mb-md-0">Your analytics dashboard template.</p>
          </div> --}}

          <div class ="row">
            <div class="col-md-3">
                <div class="card car-body bg-primary text-white mb-3">
                    <label>Total Orders</label>
                    <h1>{{ $totalOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card car-body bg-success text-white mb-3">
                    <label>Today Orders</label>
                    <h1>{{ $todayOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card car-body bg-warning text-white mb-3">
                    <label>This Month Orders</label>
                    <h1>{{ $thisMonthOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card car-body bg-danger text-white mb-3">
                    <label>This Year Orders</label>
                    <h1>{{ $thisYearOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>
            <hr>

            <div class="col-md-3">
                <div class="card car-body bg-primary text-white mb-3">
                    <label>Total Product</label>
                    <h1>{{ $totalProducts }}</h1>
                    <a href="{{ url('admin/products') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-success text-white mb-3">
                    <label>Total Categories</label>
                    <h1>{{ $totalCategories }}</h1>
                    <a href="{{ url('admin/categories') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-warning text-white mb-3">
                    <label>Total Brand</label>
                    <h1>{{ $totalBrand }}</h1>
                    <a href="{{ url('admin/brands') }}" class="text-white">view</a>
                </div>
            </div>
            <hr>
            <div class="col-md-3">
                <div class="card car-body bg-primary text-white mb-3">
                    <label>Total All User</label>
                    <h1>{{ $totalAllUsers }}</h1>
                    <a href="{{ url('admin/users') }}" class="text-white">view</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card car-body bg-success text-white mb-3">
                    <label>Total User</label>
                    <h1>{{ $totalUser }}</h1>
                    <a href="{{ url('admin/users') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-warning text-white mb-3">
                    <label>Total Admin</label>
                    <h1>{{ $totalAdmin }}</h1>
                    <a href="{{ url('admin/users') }}" class="text-white">view</a>
                </div>
            </div>
            <hr>
            <div class="col-md-3">
                <div class="card car-body bg-primary text-white mb-3">
                    <label>Total In Progress Order</label>
                    <h1>{{ $totalInprogres }}</h1>
                    <a href="{{ url('admin/users') }}" class="text-white">view</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card car-body bg-success text-white mb-3">
                    <label>Total In Progress Order Today</label>
                    <h1>{{ $totalInprogrestodayOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-warning text-white mb-3">
                    <label>Total In Progress Order Months</label>
                    <h1>{{ $totalInprogresMonths }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-info text-white mb-3">
                    <label>Total In Progress Order Year</label>
                    <h1>{{ $totalInprogresYearOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <hr>
            <div class="col-md-3">
                <div class="card car-body bg-primary text-white mb-3">
                    <label>Total pending Order</label>
                    <h1>{{ $totalpending }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card car-body bg-success text-white mb-3">
                    <label>Total pending Order Today</label>
                    <h1>{{ $totalpendingtodayOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-warning text-white mb-3">
                    <label>Total pending Order Months</label>
                    <h1>{{ $totalpendingMonths }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-info text-white mb-3">
                    <label>Total pending Order Year</label>
                    <h1>{{ $totalpendingYearOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-primary text-white mb-3">
                    <label>Total outfordelivery Order</label>
                    <h1>{{ $totaloutfordelivery }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card car-body bg-success text-white mb-3">
                    <label>Total outfordelivery Order Today</label>
                    <h1>{{ $totaloutfordeliverytodayOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-warning text-white mb-3">
                    <label>Total outfordelivery Order Months</label>
                    <h1>{{ $totaloutfordeliveryMonths }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-info text-white mb-3">
                    <label>Total outfordelivery Order Year</label>
                    <h1>{{ $totaloutfordeliveryYearOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-primary text-white mb-3">
                    <label>Total completed Order</label>
                    <h1>{{ $totalcompleted }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card car-body bg-success text-white mb-3">
                    <label>Total completed Order Today</label>
                    <h1>{{ $totalcompletedtodayOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-warning text-white mb-3">
                    <label>Total completed Order Months</label>
                    <h1>{{ $totalcompletedMonths }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-info text-white mb-3">
                    <label>Total completed Order Year</label>
                    <h1>{{ $totalcompletedYearOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-primary text-white mb-3">
                    <label>Total cancelled Order</label>
                    <h1>{{ $totalcancelled }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card car-body bg-success text-white mb-3">
                    <label>Total cancelled Order Today</label>
                    <h1>{{ $totalcancelledtodayOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-warning text-white mb-3">
                    <label>Total cancelled Order Months</label>
                    <h1>{{ $totalcancelledMonths }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-info text-white mb-3">
                    <label>Total cancelled Order Year</label>
                    <h1>{{ $totalcancelledYearOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>
            <hr>

            <div class="col-md-3">
                <div class="card car-body bg-primary text-white mb-3">
                    <label>Total Sale</label>
                    <h1>{{ $totalsale }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-success text-white mb-3">
                    <label>Total Sale Today</label>
                    <h1>{{ $totalDaysaleOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card car-body bg-warning text-white mb-3">
                    <label>Total Sale This Month</label>
                    <h1>{{ $totalSaleMonths }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card car-body bg-info text-white mb-3">
                    <label>Total Sale This Year</label>
                    <h1>{{ $totalSaleYear }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>
            <hr>








          </div>

    </div>
</div>



@endsection
