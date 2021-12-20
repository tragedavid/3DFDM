@extends('master')

@section('content')

    <form action="{{ url('/acp/product/insert') }}" method="post" enctype="multipart/form-data">

    @csrf

    <div class="form-group">
        <label for="exampleFormControlSelect1">Famille de produits</label>
        <select class="form-control" id="exampleFormControlSelect1" name="family">
            @foreach ($families as $family)
                <option value="{{$family->id}}">{{$family->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Type du filament</label>
        <select class="form-control" id="exampleFormControlSelect1" name="filament_id">
            @foreach ($filaments as $filament)
                <option value="{{$filament->id}}">{{$filament->color}} |  {{$filament->type}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Nom du produit</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ old('name') }}" required>
        @error('name')
            {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Description du produit</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="description" value="{{ old('description') }}" required>
        @error('description')
            {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Épaisseur du filament</label>
        <select class="form-control" id="exampleFormControlSelect1" name="layer_height">
            <option value="0.12">0.12 : qualité extrême</option>
            <option value="0.16">0.16</option>
            <option value="0.20">0.20</option>
            <option value="0.28">0.28</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Prix du produit</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="price" value="{{ old('price') }}" required>
        @error('price')
            {{ $message }}
        @enderror
    </div>

    <div class="flex flex-col p-1 w-full">
        <label for="" class="text-xs">Photo <span class="text-red">*</span></label>
        <input type="file" name="image"
               class="p-2 border border-gray-300 rounded" placeholder="Illustration du produit">
        @error('image')<div class="text-red-600">{{$message}}</div>@enderror
    </div>

    <div class="row">
        <div class="col text-center">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </div>

  </form>

@endsection