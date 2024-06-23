<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {
        $slider = Slider::where('status', '0')->get();
        $tredingProducts = Product::where('trending', '1')->latest()->take(15)->get();
        $newArrivalsProducts = Product::latest()->take(15)->get();
        $featuredproducts = Product::where('featuredproducts', '1')->latest()->take(15)->get();
        return view('frontend.index', compact('slider', 'tredingProducts', 'newArrivalsProducts', 'featuredproducts'));
    }

    public function categories()
    {
        $categories = Category::where('status', '0')->get();
        return view('frontend.collections.category.index', compact('categories'));
    }

    public function products($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        if ($category) {
            //  $products = $category->products()->get();
            return view('frontend.collections.products.index', compact('category'));
        } else {
            return redirect()->back();
        }
        // return view('frontend.collections.category.index',compact('categories'));
    }
    public function productView(string $category_slug, string $product_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        if ($category) {
            $product = $category->products()->where('slug', $product_slug)->where('status', '0')->first();
            if ($product) {
                return view('frontend.collections.products.view', compact('product', 'category'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function thankyou()
    {
        return view('frontend.thank-you');
    }

    public function newarrivals()
    {

        $newArrivalsProducts = Product::latest()->take(15)->get();
        return view('frontend.pages.new-arrivals', compact('newArrivalsProducts'));
    }

    public function featuredproducts()
    {

        $featuredproducts = Product::where('featuredproducts', '1')->latest()->get();
        return view('frontend.pages.featured-products', compact('featuredproducts'));
    }

    public function electronics()
    {

        $electronics = Product::where('electronics', '1')->latest()->get();
        return view('frontend.pages.electronics', compact('electronics'));
    }

    public function fashions()
    {

        $fashions = Product::where('fashions', '1')->latest()->get();
        return view('frontend.pages.fashions', compact('fashions'));
    }

    public function accessories()
    {

        $accessories = Product::where('accessories', '1')->latest()->get();
        return view('frontend.pages.accessories', compact('accessories'));
    }

    public function appliances()
    {

        $appliances = Product::where('appliances', '1')->latest()->get();
        return view('frontend.pages.appliances', compact('appliances'));
    }

    public function dharamshala()
    {

        return view('frontend.pages.dharamshala');
    }


    public function searchProducts(Request $request)
    {
        if ($request->search) {
            $searchProducts = Product::where('name', 'LIKE', '%' . $request->search . '%')->latest()->paginate(15);
            return view('frontend.pages.search', compact('searchProducts'));
        } else {
            return redirect()->back()->with('message', 'Empty Search');
        }
    }
}