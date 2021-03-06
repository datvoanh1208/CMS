@extends('v1/layouts/main')


@section('content')

    <!-- CONTAIN START -->
    <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cart-item-table commun-table">
                        <div class="table-responsive">
                            <table class="table cartTable">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($Carts as $cart)
                                    <tr id="{{ $cart->rowId }}" >
                                        <td>
                                            <a href="product-page.html">
                                                <div class="product-image">
                                                    <img alt="Stylexpo" src="assets/images/1.jpg">
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="product-title">
                                                <a href="product-page.html">{{ $cart->name }}</a>
                                            </div>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <div class="base-price price-box">
                                                        <span class="price">${{ $cart->price }}</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="input-box select-dropdown">
                                                <fieldset>
                                                    <select data-id="{{ $cart->id }}"  data-rowid="{{ $cart->rowId }}" class="quantity_cart option-drop" name="quantity_cart">
                                                        @php
                                                            $output = '';
                                                            for( $i=0; $i<count($qty); $i++ ) {
                                                                $output .= '<option '
                                                                . ( $cart->qty == $qty[$i] ? 'selected="selected"' : '' ) . '>'
                                                                . $qty[$i]
                                                                . '</option>';
                                                            }
                                                            echo $output;
                                                        @endphp
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="removeCart" data-id="{{ $cart->id }}" data-rowid="{{ $cart->rowId }}"><i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                <tr>
                                    <p>No product !</p>
                                </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="mtb-30">
                <div class="row">
                    <div class="col-md-6 mb-xs-40">
                        <div class="estimate">
                            <div class="heading-part mb-20">
                                <h3 class="sub-heading">Estimate shipping and tax</h3>
                            </div>
                            <form class="full">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-box select-dropdown mb-20">
                                            <fieldset>
                                                <select id="country_id" class="option-drop">
                                                    <option selected="" value="">Select Country</option>
                                                    <option value="1">India</option>
                                                    <option value="2">China</option>
                                                    <option value="3">Pakistan</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-box select-dropdown mb-20">
                                            <fieldset>
                                                <select id="state_id" class="option-drop">
                                                    <option selected="" value="1">Select State/Province</option>
                                                    <option value="2">---</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-box select-dropdown mb-20">
                                            <fieldset>
                                                <select id="city_id" class="option-drop">
                                                    <option selected="" value="1">Select City</option>
                                                    <option value="2">---</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cart-total-table commun-table">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th colspan="2">Cart Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><b>Amount Payable</b></td>
                                        <td>
                                            <div class="price-box">
                                                <span class="price totalPrice"><b >${{ $totalPrice }}</b></span>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="mt-30">
                <div class="row">
                    <div class="col-12">
                        <div class="right-side float-none-xs">
                            <a href="checkout.html" class="btn btn-color">Proceed to checkout
                                <span><i class="fa fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- CONTAINER END -->

@stop
@section('jsCustom')
    <script>
        $(document).ready(function(){
            $('.removeCart').on('click', function (e) {
                e.preventDefault();
                $.ajax({
                    type:   'POST',
                    url:    "{{ URL::to('/removeCart') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {rowId: $(this).data('rowid'), id:$(this).data('id')},
                    beforeSend: function() { $('.se-pre-con').show(); },
                    complete: function() { $('.se-pre-con').hide(); },
                    success: function (res) {
                        if(res.isCheck !== true) {
                            //$.magnificPopup.open({items: {src: '#newslater-popup'},type: 'inline'}, 0);
                        }

                        $('#'+res.rowId).remove();
                        $('.totalPrice').html('<b>$00.00</b>');
                    }
                });

            });
            $(".quantity_cart").on('selectmenuchange', function (e) {
                e.preventDefault();
                $.ajax({
                    type:   'POST',
                    url:    "{{ URL::to('/updateCart') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {rowId:$(this).data('rowid'), qty:$(this).val()},
                    beforeSend: function() { $('.se-pre-con').show(); },
                    complete: function() { $('.se-pre-con').hide(); },
                    success: function (res) {

                        if(res.isCheck !== true) {
                            //$.magnificPopup.open({items: {src: '#newslater-popup'},type: 'inline'}, 0);
                        }

                        $('.totalPrice').html('<b>$'+res.total+'</b>');
                       console.log(res.total);
                    }
                });

            });
        });

    </script>
@stop