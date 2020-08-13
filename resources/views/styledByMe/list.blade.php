@extends('layout.master')
@section('content')
    <div class="colorlib-shop">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                    <h2><span>New Arrival</span></h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="product-entry">
                        <div class="product-img" style="background-image: url({{asset('images/item-5.jpg')}});">
                            <p class="tag"><span class="new">New</span></p>
                            <div class="cart">
                                <p>
                                    <span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i></a></span>
                                    <span><a href="#"><i class="icon-heart3"></i></a></span>
                                    <span><a href="#"><i class="icon-bar-chart"></i></a></span>
                                </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="#">Floral Dress</a></h3>
                            <p class="price"><span>$300.00</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="colorlib-shop">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                    <h2><span>Our Products</span></h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="product-entry">
                        <div class="product-img" style="background-image: url({{asset('images/item-9.jpg')}});">
                            <p class="tag"><span class="sale">Sale</span></p>
                            <div class="cart">
                                <p>
                                    <span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i></a></span>
                                    <span><a href="#"><i class="icon-heart3"></i></a></span>
                                    <span><a href="#"><i class="icon-bar-chart"></i></a></span>
                                </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="#">Floral Dress</a></h3>
                            <p class="price"><span>$199.00</span> <span class="sale">$300.00</span> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
