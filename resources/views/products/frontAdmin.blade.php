@extends('master')

@section('content')
    
    @foreach ($products as $product)

    <div class="card text-center float-left" style="width: 18rem;">
        <div class="card-body col text-center">
            <h3 class="card-title">{{$product->name}}</h3><br>
            <h4 class="card-subtitle mb-2 text-muted">Description : </h4>
            {{-- <h6> Type du filament {{$product->filaments()}}</h6> --}}
            <h5>{{$product->description}}</h5><br>
            <h5>{{$product->price}} €</h5>
            {{-- @foreach ($product->filaments as $filament)
                {{$filament->name}}
            @endforeach --}}
            <div class="row">
                <a href="{{url('/acp/product/edit/'.$product->id)}}" class="card-link col text-center btn btn-primary">Modifier le produit</a>
            </div>
        </div>
    </div>


@endforeach
@endsection