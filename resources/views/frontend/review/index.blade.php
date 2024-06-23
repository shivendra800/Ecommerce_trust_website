@extends('layouts.app')

@section('title', 'Review')

@section('content')

<div>
    <div class="container" style="padding: 30px 0;">
          <div class="row">
            <div class="col-md-12">
                <div id="review_form_wrapper">
                <div id="review_form">
                    <div id="respond" class="comment-respond">
                        <div class="table-responsive">
                            <table class=" table table-bordered table-striped">
                                <thead>
                                    <tr>
                                    <th>Image</th>
                                    <th>Product</th>


                                </tr>
                                </thead>
                                  <tbody>

                                @foreach($order->orderItems as $orderItem)
                                <tr>
                                    <td width=10%>
                                        @if($orderItem->product->productImages)
                                        <img src="{{ asset($orderItem->product->productImages[0]->image) }}"
                                        style="width: 50px; height: 50px" alt="">
                                        @else
                                        <img src=""
                                        style="width: 50px; height: 50px" alt="">
                                        @endif


                                    </td>
                                    <td>
                                        {{ $orderItem->product->name }}
                                        @if($orderItem->productColor)
                                        <br/>
                                        @if($orderItem->productColor->color)
                                        <span>with color:{{ $orderItem->productColor->color->name }}</span>
                                        @endif
                                        @endif
                                    </td>


                                </tr>


                                @endforeach

                                  </tbody>

                            </table>

                            </div>
                        </div>
                        <form action="#" method="POST" id="commentform" class="comment-form" novalidate="">
                            <p class="comment-notes">
                                <span id="email-notes">Your email</span>
                            </p>
                            <div class="comment-form-rating">
                                <span>Your rating</span>
                                <p class="stars">
                                    <label for="rating-1"></label>
                                    <input type="radio-1" id="rating-1" name="rating" value="1">
                                    <label for="rating-2"></label>
                                    <input type="radio-2" id="rating-2" name="rating" value="2">
                                    <label for="rating-3"></label>
                                    <input type="radio-3" id="rating-3" name="rating" value="3">
                                    <label for="rating-4"></label>
                                    <input type="radio-4" id="rating-4" name="rating" value="4">
                                    <label for="rating-5"></label>
                                    <input type="radio-5" id="rating-5" name="rating" value="5"  checked="checked">
                                </p>
                            </div>
                            <p class="comment-form-author">
                                <label for="author">Name<span class="required">*</span></label>
                                <input id="author" name="author" type="text" value="">
                            </p>
                            <p class="comment-form-email">
                                <label for="email">Email<span class="required">*</span></label>
                                <input id="email" name="email" type="text" value="">
                            </p>
                            <p class="comment-form-comment">
                                <label for="comment">Your Review<span class="required">*</span></label>
                                <textarea id="comment" name="comment" cols="45" rows="8"></textarea>
                            </p>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                            </p>
                        </form>
                    </div>
                </div>
                </div>
            </div>
          </div>
    </div>
</div>


@endsection
