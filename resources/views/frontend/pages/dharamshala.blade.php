@extends('layouts.app')

@section('title', 'New Arrivals Product')

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Dharamshala Details</h4>
                <div class="underline mb-4"></div>


            </div>




            <div class="col-md-3">
                <div class="product-card">
                    <div class="product-card-img">
                        <label class="stock bg-danger">New</label>

                        <a href="">
                            <img src="">
                        </a>


                    </div>
                    <div class="product-card-body">
                        <p class="product-brand"></p>
                        <h5 class="product-name">
                            <a href="">

                            </a>
                        </h5>
                        <div>
                            <span class="selling-price"></span>
                            <span class="original-price"></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
