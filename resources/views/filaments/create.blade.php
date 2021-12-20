@extends('master')

@section('content')
    
    <form action="{{ url('/acp/filament/insert') }}" method="post">

    @csrf


    <div class="form-group">
        <label for="exampleFormControlSelect1">Couleur du filament</label>
        <select class="form-control" id="exampleFormControlSelect1" name="color">
            <option value="Blanc">Blanc</option>
            <option value="Noir">Noir</option>
            <option value="Bleu">Bleu</option>
            <option value="Argent">Argent</option>
            <option value="Rouge">Rouge</option>
            <option value="Orange">Orange</option>
            <option value="Rose">Rose</option>
            <option value="Transparent">Transparent</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Type de filament</label>
        <select class="form-control" id="exampleFormControlSelect1" name="type">
            <option value="PLA">PLA</option>
            <option value="PLA & Silk">PLA - Silk</option>
            <option value="PLA & Translucide">PLA - Translucide</option>
            <option value="ABS">ABS</option>
            <option value="Filaflex">Filaflex</option>
        </select>
    </div>

    </div>

    <div class="row">
        <div class="col text-center">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </div>

  </form>
  
@endsection