@extends('master')

@section('content')

<script>
    var img1 = new Image().src = {{url('/storage/images/products/testBlancPLA.jpg')}}
    var img2 = new Image().src = {{url('/storage/images/products/testBlancPLA.jpg')}}
    var img3 = new Image().src = "../images/pht.gif"
    </script>
    
    <h1 class="text-center">Profitez de nos Produits</h1>    
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
        
        <div id="product-card">
            <div id="product-front">
                <div class="shadow"></div>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
                <div class="image_overlay"></div>
                <div id="view_details">View details</div>
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_price">$39</span>
                        <span class="product_name">Adidas Originals</span>    
                        <p>Men's running shirt</p>                                            
                        
                        <div class="product-options">
                        <strong>SIZES</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                        <strong>COLORS</strong>
                        <div class="colors">
                            <div class="c-blue"><span></span></div>
                            <div class="c-red"><span></span></div>
                            <div class="c-white"><span></span></div>
                            <div class="c-green"><span></span></div>
                        </div>
                    </div>                       
                    </div>                         
                </div>
            </div>
        </div>
    
    @endforeach

@endsection

