<div>
    {{-- <div class="py-3 py-md-5 bg-light"> --}}
    
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border" wire:ignore>
                        @if ($product->productImages)

                        {{-- <img src="{{ asset($product->productImages[0]->image) }}" class="w-100" alt="Img"> --}}
                        <div class="exzoom" id="exzoom">
                            <!-- Images -->
                            <div class="exzoom_img_box">
                              <ul class='exzoom_img_ul'>
                                @foreach ($product->productImages as $itemImage)
                                <li><img src="{{ asset($itemImage->image) }}"/></li>
                                @endforeach

                              </ul>
                            </div>
                            <div class="exzoom_nav"></div>
                            <p class="exzoom_btn">
                                <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                                <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                            </p>
                          </div>
                        @else
                            NO Image Avaviable
                        @endif

                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                           {{ $product->name }}

                        </h4>
                        <hr>
                        <p class="product-path">
                            Home / {{ $product->category->name }}/  {{ $product->name }}
                        </p>
                        <div>
                            <span class="selling-price">Rs{{ $product->selling_price }}</span>
                            <span class="original-price">Rs{{ $product->original_price }}</span>
                        </div>
                        <div>
                            @if($product->productColors->count() >0)
                            @if($product->productColors)
                               @foreach ($product->productColors as  $colorItem )
                               {{-- <input type="radio" name="colorSection" value="{{ $colorItem->id }}" />{{ $colorItem->color->name }} --}}
                              <label class="colorSectionLabel" style="background-color:  {{ $colorItem->color->code }}"
                                wire:click="colorSelected({{ $colorItem->id }})"
                                > {{ $colorItem->color->name }}
                            </label>
                               @endforeach
                               @endif
                               <div>


                               @if ($this->productColorSelctedQuantity == 'OutOfStock')
                               <label class="btn-sm py-1 nt-2 text-white bg-danger">Out Of Stock</label>
                               @elseif($this->productColorSelctedQuantity > 0)
                               <label class="btn-sm py-1 nt-2 text-white bg-success">In Stock</label>
                               @endif
                               @else
                            </div>
                            @if($product->quantity>0)
                            <label class="btn-sm py-1 nt-2 text-white bg-success">In Stock</label>
                            @else
                            <label class="btn-sm py-1 nt-2 text-white bg-danger">Out Of Stock</label>
                            @endif
                            @endif

                        </div>
                        <div class="mt-2">
                            <div class="input-group">
                                <span class="btn btn1 btn-secondary" wire:click="decrementQuantity"><i class="fa fa-minus"></i></span>
                                <input type="text" wire:model="quantityCount" value="{{ $this->quantityCount }}"  readonly class="input-quantity text-center" />
                                <span class="btn btn1 btn-secondary" wire:click="incrementQuantity"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="button" wire:click="addToCart({{ $product->id }})" class="btn btn1 btn-warning">
                             <i class="fa fa-shopping-cart"></i> Add To Cart</button>


                            <button type="button" wire:click="addToWishList({{ $product->id  }})" class="btn btn1 btn-info">
                                <span wire:loading.remove wire:target="addToWishList">
                                    <i class="fa fa-heart"></i> Add To Wishlist
                                </span>
                                <span wire:loading wire:target="addToWishList">Adding...</span>
                           </button>

                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0">Small Description</h5>
                            <p>
                                {{ $product->small_description  }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="py-3 py-md-5 bg-white">
            <div class="container">
                <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4>Description</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                {{   $product->description  }}
                        </div>
                    </div>
                </div>
            </div>
            </div>
         </div>
        <div class="py-3 py-md-5 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <h3>Related
                            @if($category){{ $category->name }} @endif
                             Products</h3>
                        <div class="underline"></div>
                    </div>
                    <hr>

                    <div class="col-md-12">
                        @if ($category)
                        <div class="owl-carousel owl-theme four-carousel">
                    @foreach ($category->relatedproducts->take(20) as $relatedProductItem )
                    <div class="item mb-3">
                        <div class="product-card">
                            <div class="product-card-img">
                                @if($relatedProductItem->productImages->count() > 0)
                                <a href="{{ url('/collections/'.$relatedProductItem->category->slug.'/'.$relatedProductItem->slug) }}">
                                    <img src="{{ asset($relatedProductItem->productImages[0]->image) }}" alt="{{ $relatedProductItem->name }}">
                                </a>
                                @endif

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand">{{ $relatedProductItem->brand }}</p>
                                <h5 class="product-name">
                                    <a href="{{ url('/collections/'.$relatedProductItem->category->slug.'/'.$relatedProductItem->slug) }}">
                                        {{ $relatedProductItem->name }}
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price">Rs{{ $relatedProductItem->selling_price }}</span>
                                    <span class="original-price">Rs{{ $relatedProductItem->original_price }}</span>
                                </div>
                                {{-- <div class="mt-2">
                                    <a href="" class="btn btn1">Add To Cart</a>
                                    <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                                    <a href="" class="btn btn1"> View </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                        @endforeach
                        </div>
                        @else
                        <div class=" p-2">
                            <h4>No Related Product Available</h4>
                        </div>
                        @endif
                    </div>

                </div>
            </div>
         </div>

         <div class="py-3 py-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <h3>Related
                            @if($product){{ $product->brand }} @endif
                             Products</h3>
                        <div class="underline"></div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        @if ($category)
                        <div class="owl-carousel owl-theme four-carousel">
                            @foreach ($category->relatedproducts->take(20) as $relatedProductItem )
                            @if($relatedProductItem->brand == "$product->brand")

                            <div class="item  mb-3">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        @if($relatedProductItem->productImages->count() > 0)
                                        <a href="{{ url('/collections/'.$relatedProductItem->category->slug.'/'.$relatedProductItem->slug) }}">
                                            <img src="{{ asset($relatedProductItem->productImages[0]->image) }}" alt="{{ $relatedProductItem->name }}">
                                        </a>
                                        @endif

                                    </div>
                                    <div class="product-card-body">
                                        <p class="product-brand">{{ $relatedProductItem->brand }}</p>
                                        <h5 class="product-name">
                                            <a href="{{ url('/collections/'.$relatedProductItem->category->slug.'/'.$relatedProductItem->slug) }}">
                                                {{ $relatedProductItem->name }}
                                            </a>
                                        </h5>
                                        <div>
                                            <span class="selling-price">Rs{{ $relatedProductItem->selling_price }}</span>
                                            <span class="original-price">Rs{{ $relatedProductItem->original_price }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                  @endif
                                 @endforeach
                            @else
                            <div class=" p-2">
                                <h4>No Related Product Available</h4>
                            </div>
                            @endif


                        </div>

                    </div>

                </div>
            </div>
         </div>
</div>


@push('scripts')

<script>
    $(function(){

$("#exzoom").exzoom({

  // thumbnail nav options
  "navWidth": 60,
  "navHeight": 60,
  "navItemNum": 5,
  "navItemMargin": 7,
  "navBorder": 1,

  // autoplay
  "autoPlay": true,

  // autoplay interval in milliseconds
  "autoPlayTimeout": 2000

});

});

$('.four-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>





@endpush


