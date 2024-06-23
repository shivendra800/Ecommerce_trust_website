@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">

         @if (session('message'))
         <h5 class="alert alert-success mb-2">{{ session('message') }}</h5>
        @endif
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


                    <form action="{{ url('admin/products/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

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
                    <!--    <button class="nav-link" id="color-tab" data-bs-toggle="tab" data-bs-target="#color-tab-pane" type="button" role="tab" aria-controls="color-tab-pane" aria-selected="false">Product Color</button>-->
                    <!--</li>-->
                  </ul>
                  <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="mb-3">
                            <label for="category">Category</label>
                            <select name="category_id" id="" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id  == $product->category_id ? 'selected':''}}>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="slug">Product Slug</label>
                            <input type="text" name="slug" value="{{ $product->slug }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="brand">Select Brand</label>
                            <select name="brand" id="" class="form-control">
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->name }}" {{ $brand->id  == $product->brand_id ? 'selected':''}}>
                                        {{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="small_description">Small Description (500 Words)</label>
                            <textarea name="small_description" id="" class="form-control" rows="4" >{{ $product->small_description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea name="description"  id="" class="form-control" rows="4">{{ $product->description }}</textarea>
                        </div>
                        <!--<div class="p-3">-->
                        <!--    <button type="submit" class="btn btn-primary">Submit</button>-->
                        <!--</div>-->
                    </div>

                    <div class="tab-pane fade border p-3" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">
                        <div class="mb-3">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" name="meta_title" value="{{ $product->meta_title }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="meta_keyword">Meta Keyword</label>
                            <textarea name="meta_keyword" id="" class="form-control" rows="4">{{ $product->meta_keyword }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="meta_description">Meta Description</label>
                            <textarea name="meta_description" id="" class="form-control" rows="4">{{ $product->meta_description }}</textarea>
                        </div>
                        <!--<div class="p-3">-->
                        <!--    <button type="submit" class="btn btn-primary">Submit</button>-->
                        <!--</div>-->
                    </div>

                    <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="original_price">Original Price</label>
                                    <input type="text" name="original_price"  value="{{ $product->original_price }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="selling_price">Selling Price</label>
                                    <input type="text" name="selling_price"  value="{{ $product->selling_price }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" name="quantity"   value="{{ $product->quantity }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="trending">Trending</label>
                                    <input type="checkbox" name="trending" {{ $product->trending =='1' ? 'checked':'' }} style="width: 30px; height: 30px;">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="trending">Featured Products</label>
                                    <input type="checkbox" name="featuredproducts" {{ $product->featuredproducts =='1' ? 'checked':'' }} style="width: 30px; height: 30px;">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="status">Status</label>
                                    <input type="checkbox" name="status"  {{ $product->status =='1' ? 'checked':'' }} style="width: 30px; height: 30px;">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="p-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div> --}}
                    </div>
                    <div class="tab-pane fade border p-3" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                        <label for="image">Upload Product Image</label>
                        <input type="file" name="image[]" multiple class="form-control" />

                        <div>

                            @if($product->productImages )
                            <div class="row">
                                @foreach($product->productImages as $image)
                                <div class="col-md-2">
                                    <img src="{{ asset($image->image) }}" style="width: 80px; height:80px;"
                                    class="me-4" alt="Img"/>
                                  <a href="{{ url('admin/product-image/'.$image->id.'/delete') }}" class="d-block">Remove</a>
                                </div>
                                @endforeach
                            </div>

                          @else
                          {{-- <h5>No image  Added</h5> --}}
                          @endif
                        </div>
                    </div>


                    <!--<div class="tab-pane fade border p-3" id="color-tab-pane" role="tabpanel" tabindex="0">-->
                    <!--    <h4>Add Product Color</h4>-->
                    <!--    <label for="image">Select Color</label>-->
                    <!--    <div class="row">-->
                    <!--        @forelse ($colors as $colorItem )-->
                    <!--        <div class="col-md-3">-->
                    <!--            <div class="p-2 border mb-3">-->
                    <!--                Color:    <input type="checkbox" name="colors[{{ $colorItem->id }}]" value="{{ $colorItem->id }}"/>-->
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
                    <!--    <div class="table-responsive">-->
                    <!--        <table class="table table-sm table-bordered">-->
                    <!--            <thead>-->
                    <!--                <tr>-->
                    <!--                    <th>Color Name</th>-->
                    <!--                    <th>Quantity</th>-->
                    <!--                    <th>Deleted</th>-->
                    <!--                </tr>-->
                    <!--            </thead>-->
                    <!--            <tbody>-->

                    <!--                @foreach($product->productColors as $prodColor)-->
                    <!--                    <tr class="prod-color-tr">-->
                    <!--                        @if($prodColor->color)-->
                    <!--                        <td>{{ $prodColor->color->name }}</td>-->
                    <!--                        @else-->
                    <!--                             No Color Avavasil-->
                    <!--                        @endif-->
                    <!--                        <td>-->
                    <!--                            <div class="input-group mb-3" style="width:150px">-->
                    <!--                            <input type="text" value="{{ $prodColor->quantity }}" class="productColorQuantity form-control form-control-sm" />-->
                    <!--                            <button type="button" value="{{ $prodColor->id }}" class="updteProductColorBtn btn btn-primary btn-sm text-white">Update</button>-->
                    <!--                            </div>-->
                    <!--                        </td>-->
                    <!--                        <td>-->
                    <!--                            <button type="button" value="{{ $prodColor->id }}" class="deleteProductColorBtn btn btn-danger btn-sm text-white">Deleted</button>-->
                    <!--                        </td>-->
                    <!--                    </tr>-->
                    <!--                @endforeach-->
                    <!--            </tbody>-->

                    <!--        </table>-->
                    <!--    </div>-->
                    <!--</div>-->


                    </div>
                  </div>
                  <div class="py-2 float-end">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

jddo

@section('scripts')

      <script>

        $(document).ready(function (){

            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

            $(document).on('click','.updteProductColorBtn', function (){

                var product_id = "{{ $product->id }}";
                var prod_color_id = $(this).val();
                var qty = $(this).closest('.prod-color-tr').find('.productColorQuantity').val();
              //  alert(product_id);

                if(qty <=0)
                {
                    alert('Quantity is Required');
                    return false;
                }

                var data = {
                    'product_id' : product_id,
                    'qty' : qty
                };

                $.ajax({
                    type: "POST",
                    url: "/admin/product-color/"+prod_color_id,
                    data: "data",
                    success: function (response) {
                        alert(response.message)
                    }
                });



            });

            $(document).on('click','.deleteProductColorBtn', function (){

                var prod_color_id = $(this).val();
                var thisClick = $(this);

                $.ajax({
                    type: "GET",
                    url: "/admin/product-color/"+prod_color_id+"/delete",
                    success: function (response) {

                       thisClick.closest('.prod-color-tr').remove();
                       alert(response.message)
                    }
                });
            });

        });
      </script>

@endsection
