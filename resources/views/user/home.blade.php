@extends('layouts.master-user')

@section('scripts')
<script src="{{asset('js/progress.js')}}"></script>
@endsection

@section('content')

<h1>Un problème ? Optez pour la solution imprimée </h1>

<div id="main-video">
    <span class="cube">
        <h3 class="progress-text"> <span>0</span> %</h3>
        <div class="glowing-cube">
            <div class="glowing-cube-top"></div>
            <div>
                <span style="--i:0;"></span>
                <span style="--i:1;"></span>
                <span style="--i:2;"></span>
                <span style="--i:3;"></span>
            </div>
        </div>
    </span>
    <video autoplay muted loop>
        <source src={{asset('videos/eolienne-de-fou.mp4')}} type="video/mp4" >
    </video>
    <span class="cube">
        <h3 class="progress-text"><span>0</span> %</h3>
        <div class="glowing-cube">
            <div class="glowing-cube-top"></div>
            <div>
                <span style="--i:0;"></span>
                <span style="--i:1;"></span>
                <span style="--i:2;"></span>
                <span style="--i:3;"></span>
            </div>
        </div>
    </span>
</div>

<div id="produits-phares">
    {{-- @foreach ($bestProducts as $bestProduct)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endforeach --}}
</div>

<script>
    
</script>

@endsection