@extends('layouts.front_layouts.front_layout')

@section('header_section')
    <style>
        .checked {
            color: orange;
        }
    </style>
@endsection

@section('slider')
    <div class="block-slideshow__body">
        <div class="owl-carousel">
            <a class="block-slideshow__slide" href="#">
                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('images/slides/slide-13.jpg')"></div>
                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('images/slides/slide-13.jpg')"></div>
                <div class="block-slideshow__slide-content text-white">
                    <div class="block-slideshow__slide-title">Big choice of
                        <br>Plumbing products</div>
                    <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        <br>Etiam pharetra laoreet dui quis molestie.</div>
                    <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Shop Now</span></div>
                </div>
            </a>
            <a class="block-slideshow__slide" href="#">
                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('images/slides/slide-12.jpg')"></div>
                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('images/slides/slide-12.jpg')"></div>
                <div class="block-slideshow__slide-content text-dark">
                    <div class="block-slideshow__slide-title">Screwdrivers
                        <br>Professional Tools</div>
                    <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        <br>Etiam pharetra laoreet dui quis molestie.</div>
                    <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Shop Now</span></div>
                </div>
            </a>
            <a class="block-slideshow__slide" href="#">
                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('images/slides/slide-11.jpg')"></div>
                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('images/slides/slide-11.jpg')"></div>
                <div class="block-slideshow__slide-content text-white">
                    <div class="block-slideshow__slide-title">One more
                        <br>Unique header</div>
                    <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        <br>Etiam pharetra laoreet dui quis molestie.</div>
                    <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Shop Now</span></div>
                </div>
            </a>
        </div>
    </div>
@endsection

@section('block_feature')
    <div class="container">
        <div class="block-features__list">
            <div class="block-features__item">
                <div class="block-features__icon">
                    <svg width="48px" height="48px">
                        <use xlink:href="images/sprite.svg#fi-free-delivery-48"></use>
                    </svg>
                </div>
                <div class="block-features__content">
                    <div class="block-features__title">Free Shipping</div>
                    <div class="block-features__subtitle">For orders from $50</div>
                </div>
            </div>
            <div class="block-features__divider"></div>
            <div class="block-features__item">
                <div class="block-features__icon">
                    <svg width="48px" height="48px">
                        <use xlink:href="images/sprite.svg#fi-24-hours-48"></use>
                    </svg>
                </div>
                <div class="block-features__content">
                    <div class="block-features__title">Support 24/7</div>
                    <div class="block-features__subtitle">Call us anytime</div>
                </div>
            </div>
            <div class="block-features__divider"></div>
            <div class="block-features__item">
                <div class="block-features__icon">
                    <svg width="48px" height="48px">
                        <use xlink:href="images/sprite.svg#fi-payment-security-48"></use>
                    </svg>
                </div>
                <div class="block-features__content">
                    <div class="block-features__title">100% Safety</div>
                    <div class="block-features__subtitle">Only secure payments</div>
                </div>
            </div>
            <div class="block-features__divider"></div>
            <div class="block-features__item">
                <div class="block-features__icon">
                    <svg width="48px" height="48px">
                        <use xlink:href="images/sprite.svg#fi-tag-48"></use>
                    </svg>
                </div>
                <div class="block-features__content">
                    <div class="block-features__title">Hot Offers</div>
                    <div class="block-features__subtitle">Discounts up to 90%</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- .block-features / end -->

    <div class="container mydiv">
        <h3 class="text-center text-dark feature-product" style="text-decoration-color: orange">Featured Foods</h3>
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4" >
                <!-- bbb_deals -->
                <div class="bbb_deals">
                    <div class="bbb_deals_title text-center">{{ $product->name }}</div>
                    <div class="bbb_deals_slider_container">
                        <div class=" bbb_deals_item">
                            <div class="bbb_deals_image"><a href="{{ url('/single/product/'.$product->id) }}"><img src="{{ asset('admin/product/'.$product->image) }}" alt=""></a></div>
                            <div class="bbb_deals_content">
                                <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                    <div class="bbb_deals_item_category">Category: {{ $product->ProductCategory->name }}</div>
                                    @if($product->productDiscount->amount != 0)
                                    <div class="bbb_deals_item_price_a ml-auto"><strike>৳{{ $product->price }}</strike></div>
                                    @endif
                                </div>
                                <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                    <div class="bbb_deals_item_name"><a style="font-size: 18px" href="{{ url('/single/product/'.$product->id) }}" >Details</a></div>
                                    <div class="bbb_deals_item_price ml-auto"><b>৳</b>{{ number_format($product->price - $product->productDiscount->amount, 2) }}</div>
                                </div>
                                <div class="available">
                                    <div class="available_line d-flex flex-row justify-content-start">
                                        <div class="available_title">Available: <span>{{ $product->quantity }}</span></div>
                                        <div class="sold_stars ml-auto"></div>
                                    </div>
                                    <div class="available_bar"><span style="width:17%"></span></div>
                                </div>
                                <div class="pt-3">
                                    <form action="{{ route('cart') }}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$product->id}}" name="product_id">
                                        <input type="hidden" value="1" name="product_qty">
                                        <button class="btn btn-primary btn-block">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- .block-product-columns -->
    <div class="block block-product-columns d-lg-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="text-center pb-3" style="text-decoration: underline; text-decoration-color: orange">Top Rated Food</h4>
                    <div class="col-md-12 pt-3">
                        <div class="row">
                            <div class="col-md-4">
                                <a href=""><img src="{{asset('/admin/product/w.jpg')}}" height="100%" width="100%" alt=""></a>
                            </div>
                            <div class="col-md-8 pt-2">
                                <p>Lorem ipsum dolor sit amet.</p>
                                <span class="fa fa-star checked" style="color: orange"></span>
                                <span class="fa fa-star checked" style="color: orange"></span>
                                <span class="fa fa-star checked" style="color: orange"></span>
                                <span class="fa fa-star checked" style="color: orange"></span>
                                <span class="fa fa-star checked" style="color: orange"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="border-left: 3px solid orange">
                    <h4 class="text-center pb-3" style="text-decoration: underline; text-decoration-color: orange">Special Offers</h4>
                    @foreach($special_offers as $special_offer)
                        {{ $special_offer }}
{{--                        <div class="col-md-12 pt-3">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <a href="{{ url('/single/product/'.$special_offer->id) }}"><img src="{{asset('/admin/product/'.$special_offer->image)}}" height="100%" width="100%" alt=""></a>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-8 pt-2">--}}
{{--                                    <p style="line-height: 1">{{ $special_offer->name }}</p>--}}
{{--                                    @if($special_offer->productDiscount->amount != 0)--}}
{{--                                        <p style="line-height: 1">Regular Price: <strike style="color: red">৳{{ $special_offer->price }}</strike></p>--}}
{{--                                        <p style="line-height: 0">Discount Price: ৳{{ number_format($special_offer->price - $special_offer->productDiscount->amount, 2) }}</p>--}}
{{--                                    @else--}}
{{--                                        <p style="line-height: 1">Price: ৳{{ $special_offer->price }} </p>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    @endforeach
                </div>
                <div class="col-md-4" style="border-left: 3px solid orange">
                    <h4 class="text-center pb-3" style="text-decoration: underline; text-decoration-color: orange">Best Selling Food</h4>
                    @foreach($bsfs as $bsf)
                    <div class="col-md-12 pt-3">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{ url('/single/product/'.$bsf->id) }}"><img src="{{asset('/admin/product/'.$bsf->image)}}" height="100%" width="100%" alt=""></a>
                            </div>
                            <div class="col-md-8 pt-2">
                                <p style="line-height: 1">{{ $bsf->name }}</p>
                                @if($bsf->productDiscount->amount != 0)
                                    <p style="line-height: 1">Regular Price: <strike style="color: red">৳{{ $bsf->price }}</strike></p>
                                    <p style="line-height: 0">Discount Price: ৳{{ number_format($bsf->price - $bsf->productDiscount->amount, 2) }}</p>
                                @else
                                    <p style="line-height: 1">Price: ৳{{ $bsf->price }} </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- .block-product-columns / end -->
@endsection

@section('footer_section')
@endsection
