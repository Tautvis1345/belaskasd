<?php

namespace App\Http\Controllers;

use Illuminate\Database\Events\ModelsPruned;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Products extends Controller
{
    //
}


public function index(){
     return view('product', ['product' => ModelsProducts::find($id)]);
}

public function create(Request $request){
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required'
    ]);

 $product = ModelsProducts::create([
    'name' => $request->name,
    'description' => $request->description,
    'price' => $request->price,
    'user_id' => Auth::id()
 ]);
 
 $product->save();
 return redirect('/');
}


   

public function update(Request $request, $id){
   $request->validate([
       'name' => 'required',
       'description' => 'required',
       'price' => 'required'
   ]);

$product = ModelsProducts::find($id);
  
$product->name = $request->name;
$product->description = $request->description;
$product->price = $request->price;

$product->save();

return redirect('/');

}

public function delete($id){

    $product = ModelsProducts::find($id);
    $product->delete();

    return redirect('/');
}


