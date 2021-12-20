<?php

namespace App\Http\Controllers;

use App\Family;
use App\Http\Requests\FamilyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class FamilyController extends Controller
{
    public function listAdmin() {
        $families = Family::get();
        return view('families.listAdmin')
        ->withFamilies($families)
        ;
    }

    public function create() {
        return view('families.create');
    }

    public function insert(FamilyRequest $request) {
        $data = $request->all();
        // dd($data);
        $suffixe = "";
        $data['slug'] = preg_replace("/[+]/", "plus", $data['name']);
        do{
            $data['slug']=Str::slug($data['name'],'-') . ($suffixe == '' ? "" : "-") . $suffixe;
            $exist = Family::where('slug', $data['slug'])->first();
            if($exist != null) {
                if ($suffixe == "") {
                    $suffixe = 2;
                } else {
                    $suffixe++;
                }
            }
        } while($exist != null); 

        $family = Family::create($data);
        $id = $family->id;
        $new = Family::find($id);
        $idString = strval($id);
        // dd($idString);
        $new->image = $idString . '-' . $data['slug'] . '.' . $request->image->extension();
        $new->save();
        
        if ($request->image != null) {
            $image = $idString . '-' . $data['slug'] . '.' . $request->image->extension();
            $request->file('image')->move(public_path('images/families'), $image);
            // dd($family->image);
        }

        return redirect('/acp/families/admin');
    }

    public function update($id, FamilyRequest $request) {
        $family = Family::find($id);
        $family->name = $request->input('name');
        $family->description = $request->input('description');
        $family->save();
        return redirect(url('/acp/families/admin'));
    }

    public function delete($id) {
        File::delete(app_path("images/families/8-ezfeteg.png"));

        if($old = Family::find($id)->image) {
            

        }

        Family::destroy($id);
        return redirect(url('/acp/families/admin'));
    }
}
