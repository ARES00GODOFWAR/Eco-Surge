@extends('layouts.app')

@section('delivery-styles')

<style>
    .row {
        position: absolute;
        margin-top: -55%;
        margin-right: 0%;
        margin-bottom: 15%;
        z-index: 999;
        color: black;
    }

    .delivery-info {
        margin-left: 100px;
    }

    #watermark {
        position: relative;
        width: 100%;
        top: 0px;
        z-index: 1;
        color: white;
        margin-top: 8%;
        margin-bottom: 5%;
    }

    #watermark-img{
        width: 50%;
        opacity: 0.1;
        margin-left: 25%;
    }
    

</style>

@endsection


@section('content')





<div id="watermark">
    <img id="watermark-img" class="rounded-circle" src="{{asset('images/mello roma ppic.jpg')}}" alt="">
    <div class="row">

        <div class="delivery-info">

            <h1>Select a delivery option</h1>
            <p>Is the delivery option you'd like to use displayed below? If so, click the corresponding delivery
                address.
            </p>

            <hr>

            <ul>

                <li><input type="checkbox">&nbsp;&nbsp;<label for="">Delivery to
                        Kingston</label>&nbsp;&nbsp;<span>($850)</span></li>

                <hr>

                <li><label for="">Home delivery</label></li>
                <ul>
                    <li><input type="checkbox">&nbsp;&nbsp;<label for="">Kingston</label>&nbsp;&nbsp;<span>($900)</span>
                    </li>
                    <li><input type="checkbox">&nbsp;&nbsp;<label for="">Portmore</label>&nbsp;&nbsp;<span>($700)</span>
                    </li>

                    <hr>
                </ul>


                <li><label for="">Portmore</label></li>
                <ul>
                    <li><input type="checkbox">&nbsp;&nbsp;<label for="">Greater Portmore
                            Mall</label>&nbsp;&nbsp;<span>($1000)</span></li>
                    <li><input type="checkbox">&nbsp;&nbsp;<label for="">Portmore
                            Mall</label>&nbsp;&nbsp;<span>($1000)</span></li>
                    <li><input type="checkbox">&nbsp;&nbsp;<label for="">Portmore
                            Pines</label>&nbsp;&nbsp;<span>($1000)</span></li>
                    <hr>
                </ul>

                <li><label for="">Spanish Town</label></li>
                <ul>
                    <li><input type="checkbox">&nbsp;&nbsp;<label for="">Oasis
                            Plaza</label>&nbsp;&nbsp;<span>($500)</span>
                    </li>
                    <li><input type="checkbox">&nbsp;&nbsp;<label for="">Angels
                            Plaza</label>&nbsp;&nbsp;<span>($500)</span>
                    </li>
                    <hr>
                </ul>


                <li><input type="checkbox">&nbsp;&nbsp;<label for="">Other
                        Parishes</label>&nbsp;&nbsp;<span>($1000)</span>
                </li>
                <ul>
                    <li><label for="">ZIPmail</label>&nbsp;&nbsp;<span>($350)</span></li>
                    <li><label for="">Knutsford</label>&nbsp;&nbsp;<span>($550)</span></li>
                </ul>
            </ul>




        </div>
    </div>
</div>

@endsection
