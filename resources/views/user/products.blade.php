@extends('layouts.master-user')
@section('links')
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{asset('css/products.css?debug='.mt_rand(0,100000000))}}">
@endsection

@section('content')

{{-- <script>
    var img1 = new Image().src = {{url('/storage/images/products/testBlancPLA.jpg')}}
    var img2 = new Image().src = {{url('/storage/images/products/testBlancPLA.jpg')}}
    var img3 = new Image().src = "../images/pht.gif"
</script> --}}
    
    <h1 class="text-center">Produits</h1>        
    
    {{-- @foreach ($products as $product)
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
    @endforeach --}}
        
    <div id="products">
        <div id="product-card" onmouseover="productHover(this)">
            <div id="product-front">
                <div class="shadow"></div>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSl5xKIfG8IGyVgcfFphO2UgG4cWjLBPFoxew&usqp=CAU" alt="" />
                <div class="image-overlay"></div>
                <a id="view_details" href="{{url('product')}}">détails</a>
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_price">$39</span>
                        <span class="product_name">Cerf</span>    
                        <p>Complétez votre maquette de forêt avec ce nouveau produit</p>                                            
                        
                        <div class="product-options">
                        <strong>TAILLES</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                        <strong>COULEURS</strong>
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
            <div id="product-back">
                <div class="shadow"></div>
                <div id="carousel">
                    <ul>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large.png" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large2.png" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large3.png" alt="" /></li>
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div id="flip-back">
                    <div id="cy"></div>
                    <div id="cx"></div>
                </div>
            </div>	  
        </div>
        <div id="product-card" onmouseover="productHover(this)">
            <div id="product-front">
                <div class="shadow"></div>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSl5xKIfG8IGyVgcfFphO2UgG4cWjLBPFoxew&usqp=CAU" alt="" />
                <div class="image-overlay"></div>
                <a id="view_details" href="{{url('product')}}">détails</a>
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_price">$39</span>
                        <span class="product_name">Cerf</span>    
                        <p>Complétez votre maquette de forêt avec ce nouveau produit</p>                                            
                        
                        <div class="product-options">
                        <strong>TAILLES</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                        <strong>COULEURS</strong>
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
            <div id="product-back">
                <div class="shadow"></div>
                <div id="carousel">
                    <ul>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large.png" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large2.png" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large3.png" alt="" /></li>
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div id="flip-back">
                    <div id="cy"></div>
                    <div id="cx"></div>
                </div>
            </div>	  
        </div>
        <div id="product-card" onmouseover="productHover(this)">
            <div id="product-front">
                <div class="shadow"></div>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSl5xKIfG8IGyVgcfFphO2UgG4cWjLBPFoxew&usqp=CAU" alt="" />
                <div class="image-overlay"></div>
                <a id="view_details" href="{{url('product')}}">détails</a>
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_price">$39</span>
                        <span class="product_name">Cerf</span>    
                        <p>Complétez votre maquette de forêt avec ce nouveau produit</p>                                            
                        
                        <div class="product-options">
                        <strong>TAILLES</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                        <strong>COULEURS</strong>
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
            <div id="product-back">
                <div class="shadow"></div>
                <div id="carousel">
                    <ul>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large.png" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large2.png" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large3.png" alt="" /></li>
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div id="flip-back">
                    <div id="cy"></div>
                    <div id="cx"></div>
                </div>
            </div>	  
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{asset('js/products.js')}}"></script>
@endsection
