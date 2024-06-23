@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Products
                    <a href="{{ url('admin/products')}}" class="btn btn-primary btn-sm text-white float-end">BACK</a>
                </h3>
            </div>
            <div class="card-body">

                @if($errors->any())
                <div>
                    @foreach ($errors as $error)
                    <div>{{ $error }}</div>
                    @endforeach
                </div>
                @endif


         {{-- This is for showing required error of all filed is requried to fill --}}
        @if($errors->any())
        <div class="alert alert-warning">
            @foreach ($errors->all() as $error )
            <div>{{ $error }}</div>

            @endforeach
        </div>
        @endif

                <form action="{{ url('admin/products')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seotag-tab" data-bs-toggle="tab" data-bs-target="#seotag-tab-pane" type="button" role="tab" aria-controls="seotag-tab-pane" aria-selected="false">SEO Tabs</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane" aria-selected="false">Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="false">Product Image</button>
                        </li>
                        <!--<li class="nav-item" role="presentation">-->
                        <!--    <button class="nav-link" id="color-tab" data-bs-toggle="tab" data-bs-target="#color-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="false">Product Color</button>-->
                        <!--</li>-->
                    </ul>
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="mb-3">
                                <label for="category">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name">Product Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="slug">Product Slug</label>
                                <input type="text" name="slug" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="brand">Select Brand</label>
                                <select name="brand" id="" class="form-control">
                                    @foreach ($brands as $brand)
                                    <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="small_description">Small Description (500 Words)</label>
                                <textarea name="small_description" id="" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" id="" class="form-control" rows="4"></textarea>
                            </div>
                            <!--<div class="p-3">-->
                            <!--    <button type="submit" class="btn btn-primary">Submit</button>-->
                            <!--</div>-->
                        </div>

                        <div class="tab-pane fade border p-3" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">
                            <div class="mb-3">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="meta_keyword">Meta Keyword</label>
                                <textarea name="meta_keyword" id="" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" id="" class="form-control" rows="4"></textarea>
                            </div>

                        </div>

                        <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="original_price">Original Price</label>
                                        <input type="text" name="original_price" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="selling_price">Selling Price</label>
                                        <input type="text" name="selling_price" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="quantity">Quantity</label>
                                        <input type="text" name="quantity" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="trending">Trending</label>
                                        <input type="checkbox" name="trending" style="width: 30px; height: 30px;"> Checked=Trending, UnChecked= Not Trending
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="featuredproducts">Hotels</label>
                                        <input type="checkbox" name="featuredproducts" style="width: 30px; height: 30px;">  Checked= Active Hotels, UnChecked= Inactive  Hotels
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="status">Status</label>
                                        <input type="checkbox" name="status" style="width: 30px; height: 30px;"> Checked=Hidden, UnChecked= Visible
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="p-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div> --}}
                        </div>
                        <!--<div class="tab-pane fade border p-3" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">-->
                        <!--    <label for="image">Upload Product Image</label>-->
                        <!--    <input type="file" name="image[]" multiple class="form-control" />-->
                        <!--    {{-- <div class="p-3">-->
                        <!--        <button type="submit" class="btn btn-primary">Submit</button>-->
                        <!--    </div> --}}-->
                        <!--</div>-->
                        <!--<div class="tab-pane fade border p-3" id="color-tab-pane" role="tabpanel" aria-labelledby="color-tab" tabindex="0">-->
                        <!--    <label for="image">Select Color</label>-->
                        <!--    <div class="row">-->
                        <!--        @forelse ($colors as $colorItem )-->
                        <!--        <div class="col-md-3">-->
                        <!--            <div class="p-2 border mb-3">-->
                        <!--                Color:    <input type="checkbox" name="colors[{{ $colorItem->id }}]"  value="{{ $colorItem->id }}"/>-->
                        <!--                {{ $colorItem->name }}-->
                        <!--                <br />-->

                        <!--                Quantity: <input type="number" name="colorquantity[{{ $colorItem->id }}]" style="width:70px; border:1px solid height:70px">-->
                        <!--            </div>-->


                        <!--        </div>-->
                        <!--        @empty-->
                        <!--            <div class="col-md-12">-->
                        <!--                <h1>No Color Found</h1>-->
                        <!--            </div>-->
                        <!--        @endforelse-->

                        <!--    </div>-->

                        <!--</div>-->
                      </div>
            </div>
            <div class="py-2 float-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
