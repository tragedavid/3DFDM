<?php

namespace App\Http\Controllers;

use App\Filament;
use App\Http\Requests\FilamentRequest;
use Illuminate\Http\Request;

class FilamentController extends Controller
{
    public function create() {
        return view('filaments.create');
    }

    public function insert(FilamentRequest $request) {
        $data = $request->all();
        Filament::create($data);
        return redirect(url('/acp/filaments/admin'));
    }

    public function list() {
        $filaments = Filament::all();
        return view('filaments.list')
        ->withFilaments($filaments)
        ;
    }

    public function listAdmin() {
        $filaments = Filament::all();
        return view('filaments.listAdmin')
        ->withFilaments($filaments)
        ;
    }

    public function delete($id) {
        Filament::destroy($id);
        return redirect(url('/acp/filaments/admin'));
    }
}
