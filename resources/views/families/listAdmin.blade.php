@extends('master')

@section('content')

    <a class="d-block text-center text-white bg-info alert alert-primary" href="{{url('/acp/family/create')}}">Ajouter une famille de produits</a>

    
@foreach ($families as $family)
<div class="d-flex flex-column alert alert-warning w-25 no-wrap">
    <form class="d-flex justify-content-center align-items-center" action="{{url('/acp/family/update/'.$family->id)}}" method="post">
        @csrf
        
        <div class="card float-left m-2" style="width: 18rem;">
            <div class="card-body">
            <h1 class="card-title">titre</h1>
            </div>
            <img class="card-img-top" id="myimage" src="{{url('/images/families/' . $family->image  )}}" alt="Card image cap">
            <div class="card-body">
                <input type="text" class="form-control" name="name" value="{{$family->name}}">
                <textarea type="text" class="form-control" name="description">{{$family->description}}</textarea>
            </div>
                <div class="card-body">
                <button type="submit" class="btn btn-warning" role="button">Mettre à jour</button>
            </div>
        </div>
    </form>
    <form class="" action="{{url('/acp/family/delete/'. $family->id)}}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-danger" type="submit">SUPPRIMER CETTE FAMILLE</button>
    </form>
</div>
@endforeach

@endsection