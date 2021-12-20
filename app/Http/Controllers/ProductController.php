<?php

namespace App\Http\Controllers;

use App\Family;
use App\Filament;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Products_filament;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Stringable;

class ProductController extends Controller
{
    public function create() {
        $filaments = Filament::all();
        $families = Family::all();
        return view('products.create')
        ->withFilaments($filaments)
        ->withFamilies($families)
        ;
    }

    public function insert(ProductRequest $request) {
        $data = $request->all();
        // dd($data);
        $filament = Filament::find($data["filament_id"]);
        $suffixe = "";
        $data['slug'] = preg_replace("/[+]/", "plus", $data['name']);
        do{
            $data['slug']=Str::slug($data['name'],'-') . ($suffixe == '' ? "" : "-") . $suffixe;
            $exist = Product::where('slug', $data['slug'])->first();
            if($exist != null) {
                if ($suffixe == "") {
                    $suffixe = 2;
                } else {
                    $suffixe++;
                }
            }
        } while($exist != null); 

        if ($request->image != null) {
            $image = $data['slug'] . $filament->type . $filament->color . '.' . $request->image->extension();
            $request->file('image')->move(public_path('images'), $image);
        }
        $product = Product::create($data);
        //set connection table products_filaments
        $product_filament['filament_id'] = $data['filament_id'];
        $product_filament['product_id'] = $product->id;
        Products_filament::create($product_filament);


        return redirect('/acp/products');
    }

    public function list() {
        $products = Product::all();
        foreach ($products as $product) {
            $matches = explode(".", $product->image);
            $product->extension = $matches[1];
        }
        return view('products.list')
        ->withProducts($products)
        ;
    }

    public function listAdmin() {
        // $filaments = Products_filament::all();
        $products = Product::all();
        return view('products.listAdmin')
        ->withProducts($products)
        ;
    }
}
