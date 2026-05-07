<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDonateRequest;
use App\Http\Requests\UpdateDonateRequest;
use App\Models\Gacha;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Gacha::all();

       // $products = Gacha::query()
         //   ->paginate(25);

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDonateRequest $request)
    {
        $request->validate([
            "name" => "required|string"
        ]);

        Gacha::create(['name' => $request->name]);
        
        return redirect()
            ->route('products.index')
            ->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donate $donate)
    {
        return redirect()->route('products.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donate $donate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDonateRequest $request, Donate $donate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donate $donate)
    {
        //
    }
}
