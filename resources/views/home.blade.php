<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')



@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators" id="indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">

            <img src="{{asset('images/slider-1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('images/slider-2.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('images/slider-3.jpg')}}" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="flex-container">
    <div class="row">
        <div class="col-sm" id="first-row-icon">
            <span><i style="font-size:25px" class="fas">&#xf1b8;</i></span>
            <span>
                <div class="icon-title1">
                    <h5>Recycling is a Must</h5>
                </div>
            </span>
            <div class="icon-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</p>

                <a href="#" class="l-more">Learn More</a>
            </div>
        </div>
        <div class="vl"></div>

        <div class="col-sm" id="middle-icon">
            <span><i style="font-size:25px" class="fas">&#xf7b9;</i> </span>
            <div class="icon-title1">
                <h5>Radiation</h5>
            </div>
            </span>

            <div class="icon-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</p>

                <a href="#" class="l-more">Learn More</a>
            </div>

        </div>
        <div class="vl"></div>


        <div class="col-sm" id="last-icon">
            <span><i style="font-size:25px" class="fas">&#xf2dc;</i> </span>
            <span>
                <div class="icon-title1">
                    <h5>Eco-System</h5>
                </div>
            </span>

            <div class="icon-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</p>

                <a href="#" class="l-more">Learn More</a>
            </div>
        </div>
        <div class="vl"></div>
    </div>
</div>



<div class="container2">

    <div class="card" id="donate-card">
        <div class="card-body">
            <h3 class="card-title" id="donate-title">Make Donation</h3>
            <p class="donate-sub-tile">Your Monney Can Cure This Earth</p>
            <p class="card-text" id="donate-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="donate-divider" style="background: #facc2e;"></div>

            <button class="donate-button"><a href="#" class="donate-now">DONATE NOW</a></button>
        </div>
    </div>

    <div class="card donate2" id="donate-card">
        <div class="card-body">
            <h3 class="card-title" id="act-now-title">Stop Drilling, Need Action!</h3>
            <p class="donate-sub-tile">Your voice does matter</p>
            <p class="card-text" id="donate-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="donate-divider" style="background: #5dc269"></div>

            <button class="act-now-button"><a href="#" class="act-now">ACT NOW</a></button>
        </div>
    </div>
</div>


@endsection

</body>
</html>


