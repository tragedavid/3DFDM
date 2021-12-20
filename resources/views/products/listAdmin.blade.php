@extends('master')

@section('content')

    <a class="d-block text-center text-white bg-info alert alert-primary" href="{{url('/acp/product/create')}}">Ajouter un produit</a>

    
@foreach ($products as $product)
<div>
    {{$product->filaments}}
    <form class="alert alert-warning d-flex justify-content-center align-items-center" action="{{url('/acp/filament/edit/'.$product->id)}}" method="post">
        @csrf
        
        <div class="card float-left m-2" style="width: 18rem;">
            <div class="card-body">
            <h3 class="card-title">{{$product->family}}</h1>
            </div>
            <img class="card-img-top" id="myimage" src="{{url('/images/'.$product->slug . $product->filament->type . $product->filament->color . ".jpeg" )}}" alt="Card image cap">
            <div class="card-body">
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="{{$product->name}}">
                <textarea type="text" class="form-control" name="description" aria-describedby="emailHelp" placeholder="{{$product->description}}"></textarea>
                <select name="filament">

                </select>
                {{-- <select name="Color:" onchange="document.getElementById('myimage').src = this.value;">
                    <option value="{{url('/products/images/test/Blanc/PLA')}}">Blanc - PLA</option>
                    <option value="{{url('/products/images/test/Rouge/PLA')}}">Rouge - PLA</option>
                </select>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$product->layer_height}}</li>
                    <li class="list-group-item">{{$product->filament->color}}</li>
                    <li class="list-group-item">{{$product->filament->type}}</li>
                </ul> --}}
            </div>
                <div class="card-body">
                <a class="btn btn-warning" href="{{url('/acp/product/update/'.$product->slug)}}" role="button">Mettre à jour</a>
            </div>
        </div>
    </form>
    <form class="d-flex justify-content-center" action="/acp/product/delete/{id}" method="post">
        @csrf
        @method('delte')
        <button class="btn btn-danger" type="submit">SUPPRIMER CE PRODUIT</button>
    </form>
</div>
@endforeach

@endsection