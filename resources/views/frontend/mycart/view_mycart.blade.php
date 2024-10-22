@extends('frontend.master')
@section('home')
    <!-- ================================
            START BREADCRUMB AREA
        ================================= -->
    <section class="breadcrumb-area section-padding img-bg-2">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                <div class="section-heading">
                    <h2 class="section__title text-white">Shopping Cart</h2>
                </div>
                <ul
                    class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                    <li><a href="index.html">Home</a></li>
                    <li>Pages</li>
                    <li>Shopping Cart</li>
                </ul>
            </div><!-- end breadcrumb-content -->
        </div><!-- end container -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
            END BREADCRUMB AREA
        ================================= -->

    <!-- ================================
               START CONTACT AREA
        ================================= -->
    <section class="cart-area section-padding">
        <div class="container">
            <div class="table-responsive">
                <table class="table generic-table">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Course Details</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="cartPage">
                        @foreach ($carts as $item)
                        <td>
                            <div class="media media-card border-bottom border-bottom-gray pb-3 mb-3">
                                <a href="{{ url('course/details/' . $item->id . '/' . $item->options->slug) }}" class="media-img">
                                    <img src="{{ asset($item->options->image) }}" alt="Cart image">
                                </a>
                                <div class="media-body">
                                    <h5 class="fs-15 pb-2"><a
                                            href="{{ url('course/details/' . $item->id . '/' . $item->options->slug) }}">{{ $item->name }}
                                        </a></h5>
                                    <p class="text-black font-weight-semi-bold lh-18">${{ $item->price }} </p>
                                </div>
                            </div><!-- end media -->
                        </td>
                        @endforeach



                    </tbody>
                </table>
                <div class="d-flex flex-wrap align-items-center justify-content-between pt-4">

                    @if (Session::has('coupon'))
                    @else
                        {{-- {{ json_encode(Session::get('coupon'), JSON_PRETTY_PRINT) }} --}}

                        <form action="#">
                            <div class="input-group mb-2" id="couponField">
                                <input class="form-control form--control pl-3" type="text" id="coupon_name"
                                    placeholder="Coupon code">
                                <div class="input-group-append">

                                    <a type="submit" onclick="applyCoupon()" class="btn theme-btn">Apply Code</a>
                                </div>
                            </div>
                        </form>
                    @endif



                </div>
            </div>
            <div class="col-lg-4 ml-auto">
                <div class="bg-gray p-4 rounded-rounded mt-40px" id="couponCalField">


                </div>
                <a href="{{ route('checkout') }}" class="btn theme-btn w-100">Checkout <i
                        class="la la-arrow-right icon ml-1"></i></a>
            </div>
        </div><!-- end container -->
    </section>
    <!-- ================================
               END CONTACT AREA
        ================================= -->
@endsection
