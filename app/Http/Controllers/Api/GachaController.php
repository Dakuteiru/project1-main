<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gacha;
use Illuminate\Http\Request;
use Validator;

class GachaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
      /*  Validator::make($request->all(), 
        [
        "gacha"=> "required|exists:gachas,id"
        ],
        [
        "gacha"=> "need exist game"
        ])->validate();*/

        $products = Gacha::query()
            ->paginate(25);

        return response()->json($products);
            
    }
    public function get(Gacha $gacha)
    {
        return $gacha;
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
