@extends('master')

@section('content')

    <a class="d-block text-center text-white bg-info alert alert-primary" href="{{url('/acp/filament/create')}}">Ajouter un filament</a>

    
@foreach ($filaments as $filament)
<form class="alert alert-danger d-flex justify-content-center align-items-center" action="{{url('/acp/filament/delete/'.$filament->id)}}" method="post">
    @csrf
    @method('delete')
    {{$filament->type}} {{$filament->color}}
    <button class="btn btn-danger" type="submit">SUPPRIMER CE FILAMENT</button>
</form>
@endforeach

@endsection