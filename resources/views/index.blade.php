@extends('v1/layouts/main')


@section('content')

    @include('v1/partials/subBanner')
    <!--  New arrivals Products Slider Block Start  -->
    <section class="pt-70">
        <div class="container">
            <div class="product-listing">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-part mb-30 mb-xs-15">
                            <h2 class="main_title heading"><span>New Arrivals</span></h2>
                        </div>
                    </div>
                </div>
                <div class="pro_cat">
                    <div class="row">
                        <div class="owl-carousel pro-cat-slider ">
                            @foreach ($products as $product)
                                <div class="item">
                                    <div class="product-item mb-30">
                                        <div class="main-label new-label"><span>New</span></div>
                                        <div class="product-image"> <a href="product-page.html"> <img src="assets/images/1.jpg" alt="Stylexpo"> </a>
                                            <div class="product-detail-inner">
                                                <div class="detail-inner-left align-center">
                                                    <ul>
                                                        <li class="pro-cart-icon">
                                                            <form>
                                                                {!! csrf_field() !!}
                                                                <input type="hidden" name="id"  value="{{ $product->_id }}">
                                                                <button title="Add to Cart"><span></span>Add to Cart</button>
                                                            </form>
                                                        </li>
                                                        <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                                        <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item-details">
                                            <div class="product-item-name"> <a href="product-page.html">{{$product->name}}</a> </div>
                                            <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">${{$product->price}}</del> </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  New arrivals Products Slider Block End  -->
@stop
@section('jsCustom')
    <script>
        $(document).ready(function(){
            $('form').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type:   'POST',
                    url:    "{{ URL::to('/addCart')  }}",
                    data:   $('form').serialize(),
                    success: function (res) {
                        if(res.isCheck !== true) {
                            $.magnificPopup.open({items: {src: '#newslater-popup'},type: 'inline'}, 0);
                        }
                    }
                });
            });
        });
    </script>
@stop