@extends('layouts.master-user')
@section('links')
    <link rel="stylesheet" href="{{asset('css/product.css?debug='.mt_rand(0,100000000))}}">
@endsection

@section('content')
    
{{-- <div id="product">
    <div id="gallery">

    </div>
    <img src="https://images.mobileshop.eu/1646209760/product-large/xiaomi-poco-x4-pro-5g-dual-sim-128gb-6gb-ram-black.jpg" alt="">
    <div id="infos">
        <h2>Cube éducatif</h2>
        <span id="price">3.33 €</span>
        <div id="colors">
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
        </div>
        <button id="add">Ajouter au panier</button>
    </div>
</div> --}}

<div id="container">	
	
    <!-- Start	Product details -->
        <div class="product-details">
            
            <!-- 	Product Name -->
        <h1>SUPER PRODUIT</h1>
    <!-- 		<span class="hint new">New</span> -->
    <!-- 		<span class="hint free-shipping">Free Shipping</span> -->
    <!-- 		the Product rating -->
        <span class="hint-star star">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        </span>
            
        
    <!-- The most important information about the product -->
            <p class="information">" Suspendisse posuere tempor ligula, at tincidunt ligula. Aliquam nec erat vitae ex blandit vulputate. Quisque magna sapien, maximus eget nulla facilisis, convallis tempor velit. Donec id nunc nulla. Etiam et risus lorem. Nunc id luctus felis. "</p>
    
            
            
    <!-- 		Control -->
    <div class="control">
        
    <!-- Start Button buying -->
        <button class="btn">
    <!-- 		the Price -->
         <span class="price">480 €</span>
    <!-- 		shopping cart icon-->
       <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
    <!-- 		Buy Now / ADD to Cart-->
       <span class="buy">Acheter</span>
     </button>
        <!-- End Button buying -->
        
    </div>
                
    </div>
        
    <!-- 	End	Product details   -->
        
        
        
    <!-- 	Start product image & Information -->
        
    <div class="product-image">
        
        <img src="{{asset('images/space2.jpg')}}" alt="Omar Dsoky">
        
    <!-- 	product Information-->
    <div class="info">
        <h2>The Description</h2>
        <ul>
            <li><strong>Dimensions: </strong>40*50*120</li>
            <li><strong>Matériaux: </strong>PLA</li>
        </ul>
    </div>
    </div>
    <!--  End product image  -->
    
    
    </div>
    
    
    

@endsection