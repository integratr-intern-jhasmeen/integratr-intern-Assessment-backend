<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productscontroller extends Controller
{

    public function index()
    {
        $product= product::all();

        return response()->json($product,200);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $payload = $this->payload($request);
        $product = product:: create($payload);
        return response()->json($product,200);
    }

    public function show(string $id)
    {
        $product = product:: where ('id',$id)->first();
        return response()->json($product,200);
    }

    public function edit(string $id)
    {

    }
    public function update( Request $request, string $id)
    {
        $payload = $this->payload($request);
        $product = product:: where ('id', $id)-> first();
        $product ->update($payload);
        return response()->json($product,200);
    }

    public function destroy(string $id)
    {
        $product = product:: where('id',$id)->first();
        $product-> delete();
        return response('',200);
    }
    public function payload($request){
        return $this-> validate($request,[
            'productname' => ['required']
        ]);
    }
}
