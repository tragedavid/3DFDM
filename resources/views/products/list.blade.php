@extends('master')

@section('content')

<script>
    var img1 = new Image().src = {{url('/storage/images/products/testBlancPLA.jpg')}}
    var img2 = new Image().src = {{url('/storage/images/products/testBlancPLA.jpg')}}
    var img3 = new Image().src = "../images/pht.gif"
    </script>
    
    <h1 class="text-center">Produits</h1>    
    <a class="btn btn-primary btn-lg active btn-block" role="button" aria-pressed="true" href="{{url('/acp/product/create')}}">Ajouter un produit</a> <br>
    
    
    @foreach ($products as $product)
        {{-- @foreach ($table as $product) --}}
            {{-- {{dd($product->slug)}} --}}
        <div class="card float-left m-2" style="width: 18rem;">
            <div class="card-body">
            <h3 class="card-title">{{$product->family}}</h1>
            </div>
            <img class="card-img-top" id="myimage" src="{{url('/images/'.$product->slug . $product->filament->type . $product->filament->color . '.' . $product->extension )}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
            </div>
            <select name="Color:" onchange="document.getElementById('myimage').src = this.value;">
                <option value="{{url('/products/images/test/Blanc/PLA')}}">Blanc - PLA</option>
                <option value="{{url('/products/images/test/Rouge/PLA')}}">Rouge - PLA</option>
            </select>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$product->layer_height}}</li>
                <li class="list-group-item">{{$product->filament->color}}</li>
                <li class="list-group-item">{{$product->filament->type}}</li>
            </ul>
            <div class="card-body">
                <a class="btn btn-warning" href="{{url('/acp/product/edit/'.$product->slug)}}" role="button">Modifier</a>
            </div>
        </div>
        {{-- @endforeach --}}
        
    
    
    @endforeach

@endsection

