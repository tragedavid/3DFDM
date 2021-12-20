@extends('master')

@section('content')

    <form action="{{ url('/acp/family/insert') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="exampleFormControlInput1">Nom de la famille de produits</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ old('name') }}" required>
        @error('name')
            {{ $message }}
        @enderror
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Description de la famille de produits</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="description" value="{{ old('description') }}" required>
        @error('name')
            {{ $message }}
        @enderror
    </div>

    <div class="flex flex-col p-1 w-full">
        <label for="" class="text-xs">Photo</label>
        <input type="file" name="image"
               class="p-2 border border-gray-300 rounded" placeholder="Illustration de la famille de produits">
        @error('image')<div class="text-red-600">{{$message}}</div>@enderror
    </div>

    <div class="row">
        <div class="col text-center">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </div>

    </form>

@endsection