@extends('layouts.app')



@section('styles')

<style>
    .container {
        margin-top: 100px;
    }

    .page-header {
        margin-top: 150px;
        text-align: center;
        border: 0px;
    }


    /* #01a850 */
    body {
        /* background-image: linear-gradient(to left top, #eda20c, #c0a900, #92ac0d, #60ab32, #01a850); */
        background-image: linear-gradient(to right top, #000000, #381c1f, #6c322e, #9f4f32, #ca742d, #cc881e, #c89d0c, #bfb200, #9ab013, #75ab28, #4ca53a, #049e4b);
        }

</style>

@endsection

@section('portfolio_content')



<div class="page-header">
    <h1 id="timeline">TIMELINE</h1>
</div>


<div class="container">
    <ul class="timeline">
        <li>
            <div id="timeline-badge"  class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
            <div id="timeline-panel" onmouseover="mouseover1()" onmouseout="mouseout1()" class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Hellshire Beach Cleanup</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> January 23, 2018</small></p>
                </div>
                <div class="timeline-body">
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis
                        porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros
                        vermeio, in elementis mé pra quem é amistosis quis leo.
                        Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci
                        latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p><br>
                    <p><img src="{{asset('images/beachcleanup.jpg')}}" class="d-block w-100" alt="..."></p>
                </div>
            </div>
        </li>
        <li class="timeline-inverted">
            <div id="timeline-badge2"class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
            <div class="timeline-panel" onmouseover="mouseover2()" onmouseout="mouseout2()">
                <div class="timeline-heading">
                    <h4 class="timeline-title">National Heros Park Restoration</h4>
                </div>
                <div class="timeline-body">
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis
                        porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros
                        vermeio, in elementis mé pra quem é amistosis quis leo.
                        Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci
                        latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                    <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé,
                        cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a,
                        posuere ut mi. Ut scelerisque neque et turpis posuere
                        pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo.
                        Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit
                        auctor. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
                </div>
            </div>
        </li>
        <li>
            <div id="timeline-badge3"class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
            <div class="timeline-panel" onmouseover="mouseover3()" onmouseout="mouseout3()">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis
                        porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros
                        vermeio, in elementis mé pra quem é amistosis quis leo.
                        Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci
                        latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                </div>
            </div>
        </li>
        <li class="timeline-inverted">
            <div class="timeline-panel" onmouseover="mouseover3()" onmouseout="mouseout3()">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis
                        porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros
                        vermeio, in elementis mé pra quem é amistosis quis leo.
                        Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci
                        latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                </div>
            </div>
        </li>
        <li>
            <div id="timeline-badge4" class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
            <div class="timeline-panel" onmouseover="mouseover4()" onmouseout="mouseout4()">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis
                        porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros
                        vermeio, in elementis mé pra quem é amistosis quis leo.
                        Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci
                        latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                    <hr>
                
                </div>
            </div>
        </li>
        <li>
            <div class="timeline-panel" onmouseover="mouseover4()" onmouseout="mouseout4()">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis
                        porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros
                        vermeio, in elementis mé pra quem é amistosis quis leo.
                        Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci
                        latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                </div>
            </div>
        </li>
        <li class="timeline-inverted">
            <div id="timeline-badge5" class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
            <div class="timeline-panel" onmouseover="mouseover5()" onmouseout="mouseout5()">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis
                        porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros
                        vermeio, in elementis mé pra quem é amistosis quis leo.
                        Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci
                        latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                </div>
            </div>
        </li>
    </ul>
</div>



@endsection
