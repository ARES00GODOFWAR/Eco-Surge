@extends('layouts.app')


@section('product_page_styles')
<style>
    @import url('https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700');


      .container{
         margin-top: 150px ;
        
         
      }
      .row{
        margin-left: 0px;
        margin-right: 0px;
        margin-bottom: 60px ;
      }
    .product-grid3 {
        font-family: Roboto, sans-serif;
        text-align: center;
        position: relative;
        z-index: 1;
        margin-top: 50px;
    }

    .product-grid3:before {
        content: "";
        height: 81%;
        width: 100%;
        background: #fff;
        border: 1px solid rgba(0, 0, 0, .1);
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        transition: all .5s ease 0s
    }

    .product-grid3:hover:before {
        opacity: 1;
        height: 100%
    }

    .product-grid3 .product-image3 {
        position: relative
    }

    .product-grid3 .product-image3 a {
        display: block
    }

    .product-grid3 .product-image3 img {
        width: 100%;
        height: auto
    }

    .product-grid3 .pic-1 {
        opacity: 1;
        transition: all .5s ease-out 0s
    }

    .product-grid3:hover .pic-1 {
        opacity: 0
    }

    .product-grid3 .pic-2 {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        transition: all .5s ease-out 0s
    }

    .product-grid3:hover .pic-2 {
        opacity: 1
    }

    .product-grid3 .social {
        width: 120px;
        padding: 0;
        margin: 0 auto;
        list-style: none;
        opacity: 0;
        position: absolute;
        right: 0;
        left: 0;
        bottom: -23px;
        transform: scale(0);
        transition: all .3s ease 0s
    }

    .product-grid3:hover .social {
        opacity: 1;
        transform: scale(1)
    }

    .product-grid3:hover .product-discount-label,
    .product-grid3:hover .product-new-label,
    .product-grid3:hover .title {
        opacity: 0
    }

    .product-grid3 .social li {
        display: inline-block
    }

    .product-grid3 .social li a {
        color: #e67e22;
        background: #fff;
        font-size: 18px;
        line-height: 50px;
        width: 50px;
        height: 50px;
        border: 1px solid rgba(0, 0, 0, .1);
        border-radius: 50%;
        margin: 0 2px;
        display: block;
        transition: all .3s ease 0s
    }

    .product-grid3 .social li a:hover {
        background: #e67e22;
        color: #fff
    }

    .product-grid3 .product-discount-label,
    .product-grid3 .product-new-label {
        background-color: #e67e22;
        color: #fff;
        font-size: 17px;
        padding: 2px 10px;
        position: absolute;
        right: 10px;
        top: 10px;
        transition: all .3s
    }

    .product-grid3 .product-content {
        z-index: -1;
        padding: 15px;
        text-align: left
    }

    .product-grid3 .title {
        font-size: 14px;
        text-transform: capitalize;
        margin: 0 0 7px;
        transition: all .3s ease 0s
    }

    .product-grid3 .title a {
        color: #414141
    }

    .product-grid3 .price {
        color: #000;
        font-size: 16px;
        letter-spacing: 1px;
        font-weight: 600;
        margin-right: 2px;
        display: inline-block
    }

    .product-grid3 .price span {
        color: #909090;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 0;
        text-decoration: line-through;
        text-align: left;
        display: inline-block;
        margin-top: -2px
    }

    .product-grid3 .rating {
        padding: 0;
        margin: -22px 0 0;
        list-style: none;
        text-align: right;
        display: block
    }

    .product-grid3 .rating li {
        color: #ffd200;
        font-size: 13px;
        display: inline-block
    }

    .product-grid3 .rating li.disable {
        color: #dcdcdc
    }

    @media only screen and (max-width:1200px) {
        .product-grid3 .rating {
            margin: 0
        }
    }

    @media only screen and (max-width:990px) {
        .product-grid3 {
            margin-bottom: 30px
        }

        .product-grid3 .rating {
            margin: -22px 0 0
        }
    }

    @media only screen and (max-width:359px) {
        .product-grid3 .rating {
            margin: 0
        }
    }

    .btn{
        width: 300px;
        margin-top: 100px;
    }
    #menu{
        width: 300px;
    }

    h1{
        margin-top: 40px;
        text-align: center;
        text-transform: uppercase;
    }
    .container{
        margin: 0px
    }

</style>

@endsection

@section('content')

@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif


<div class="container"></div>
        <h1 class="h1">Our Latest Products</h1>
        <div class="col-md-3 col-sm-6">

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown_coins" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Filter
            </button>
            <div id="menu" class="dropdown-menu" aria-labelledby="dropdown_coins">
                <form class="px-4 py-2">
                    <input type="search" class="form-control"n id="searchCoin" placeholder="Search" autofocus="autofocus">
                </form>
                <div id="menuItems"></div>
                <div id="empty" class="dropdown-header">No coins found</div>
            </div>
        </div>
    </div>

    <div class="row">

        @foreach($products as $product)
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="{{asset('images/EYOU leak proof caps.jpg')}}">
                        <img class="pic-2" src="{{asset('images/EYOU leak proof caps 1.jpg')}}">
                    </a>
                    <ul class="social">
                        <li><a href="{{route ('checkout.checkout')}}"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$product->name}}</a></h3>
                    <div class="price">
                        {{$product->ProductPrice}}
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                        <li class="fa fa-star disable"></li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
