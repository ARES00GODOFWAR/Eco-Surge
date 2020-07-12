<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Eco-Surge') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="script.js">
        $('.carousel').carousel({
            interval: 2000
        })

    </script>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('CSS/app.css') }}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    @yield('checkout-styles')
    @yield('styles')
    @yield('item_page_styles')
    @yield('product_page_styles')
</head>

<body>


    <nav class="navbar navbar-expand-lg" id="navs">
        <a class="EcoU-brand" href="index.html"><img src="{{asset('images/eco_u.png')}}" alt="Logo"
                style="width:180px;" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
            aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('home') }}">Home<span
                            class="sr-only">(current)</span></a>
                </li>
                {{--  <li class="nav-item active">
                    <a class="nav-link" href="Pages.html">Pages</a>
                </li>  --}}
                {{--  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
                </li>  --}}

                {{--  <li class="nav-item active">
                    <a class="nav-link" href="Blog.html">Blog</a>
                </li>  --}}
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('productShow') }}">Shop</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="About.html">About Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
            </ul>
    </nav>


    <section>
        <div class="home_content_container">

            @yield('home_content')
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
        </div>

    </section>

    <section>
        <div>

            @yield('portfolio_content')
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
        </div>

    </section>
    <section>
        <div>

            @yield('content')
        
        </div>

    </section>


    <section>
        <div>

            @yield('checkout-content')
            
        </div>

    </section>

    <footer>
    <div class="footer">
        <ul id="footer-ul">
            <li><a href="#">Stay Connected</a></li>
            <li><a href="#">Something</a></li>
            <li><a href="#">Something</a></li>
            <li><a href="#">Something</a></li>
        </ul>
        <ul>
            <li><p id="copyright-text" >Copyright&nbsp;<i id="copyright-symbol">&copy;&nbsp;</i>2020 UTech Sapna</p></li>
            
        </ul>
    </div>

</footer>

</body>

</html>
