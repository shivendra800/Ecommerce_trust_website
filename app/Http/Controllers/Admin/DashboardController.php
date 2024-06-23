<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Orderitem;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;



class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $totalBrand = Brand::count();

        $totalAllUsers = User::count();
        $totalUser = User::where('role_as','0')->count();
        $totalAdmin = User::where('role_as','1')->count();

        $todayDate = Carbon::now()->format('Y-m-d');
        $thisMonth = Carbon::now()->format('m');
        $thisYear = Carbon::now()->format('Y');

        $totalOrder = Order::count();
        $todayOrder = Order::whereDate('created_at',$todayDate)->count();
        $thisMonthOrder = Order::whereMonth('created_at',$thisMonth)->count();
        $thisYearOrder = Order::whereYear('created_at', $thisYear)->count();

        $totalInprogres = Order::where('status_message','in progress')->count();
        $totalInprogrestodayOrder = Order::where('status_message','in progress')->whereDate('created_at',$todayDate)->count();
        $totalInprogresMonths = Order::where('status_message','in progress')->whereMonth('created_at',$thisMonth)->count();
        $totalInprogresYearOrder = Order::whereYear('created_at', $thisYear)->where('status_message','in progress')->count();

        $totalpending = Order::where('status_message','pending')->count();
        $totalpendingtodayOrder = Order::where('status_message','pending')->whereDate('created_at',$todayDate)->count();
        $totalpendingMonths = Order::where('status_message','pending')->whereMonth('created_at',$thisMonth)->count();
        $totalpendingYearOrder = Order::whereYear('created_at', $thisYear)->where('status_message','pending')->count();

        $totaloutfordelivery = Order::where('status_message','out-for-delivery')->count();
        $totaloutfordeliverytodayOrder = Order::where('status_message','out-for-delivery')->whereDate('created_at',$todayDate)->count();
        $totaloutfordeliveryMonths = Order::where('status_message','out-for-delivery')->whereMonth('created_at',$thisMonth)->count();
        $totaloutfordeliveryYearOrder = Order::whereYear('created_at', $thisYear)->where('status_message','out-for-delivery')->count();

        $totalcancelled = Order::where('status_message','cancelled')->count();
        $totalcancelledtodayOrder = Order::where('status_message','cancelled')->whereDate('created_at',$todayDate)->count();
        $totalcancelledMonths = Order::where('status_message','cancelled')->whereMonth('created_at',$thisMonth)->count();
        $totalcancelledYearOrder = Order::whereYear('created_at', $thisYear)->where('status_message','cancelled')->count();

        $totalcompleted = Order::where('status_message','completed')->count();
        $totalcompletedtodayOrder = Order::where('status_message','completed')->whereDate('created_at',$todayDate)->count();
        $totalcompletedMonths = Order::where('status_message','completed')->whereMonth('created_at',$thisMonth)->count();
        $totalcompletedYearOrder = Order::whereYear('created_at', $thisYear)->where('status_message','completed')->count();

        $totalsale = Orderitem::sum('price');
        $totalDaysaleOrder = Orderitem::whereDate('created_at',$todayDate)->sum('price');
        $totalSaleMonths = Orderitem::whereMonth('created_at',$thisMonth)->sum('price');
        $totalSaleYear = Orderitem::whereYear('created_at', $thisYear)->sum('price');
        return view('admin.dashboard',compact('totalProducts','totalCategories','totalBrand',
                                              'totalAllUsers','totalUser','totalAdmin','todayDate',
                                               'thisMonth','thisYear','totalOrder' ,'todayOrder',
                                               'thisMonthOrder','thisYearOrder','totalInprogres',
                                               'totalInprogrestodayOrder','totalInprogresMonths',
                                               'totalInprogresYearOrder',
                                               'totalpending',
                                               'totalpendingtodayOrder','totalpendingMonths',
                                               'totalpendingYearOrder',
                                               'totaloutfordelivery',
                                               'totaloutfordeliverytodayOrder','totaloutfordeliveryMonths',
                                               'totaloutfordeliveryYearOrder',
                                               'totalcancelled',
                                               'totalcancelledtodayOrder','totalcancelledMonths',
                                               'totalcancelledYearOrder',

                                               'totalcompleted',
                                               'totalcompletedtodayOrder','totalcompletedMonths',
                                               'totalcompletedYearOrder',
                                               'totalsale','totalDaysaleOrder','totalSaleMonths',
                                               'totalSaleYear'
                                              ));
    }
}
