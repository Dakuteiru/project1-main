<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDonateRequest;
use App\Http\Requests\UpdateDonateRequest;
use App\Models\Donate;
use App\Models\Gacha;

class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $donates = Donate::all();

       // $products = Gacha::query()
         //   ->paginate(25);

        return view('donates.index', compact('donates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Gacha::all();
        return view('donates.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDonateRequest $request)
    {
         $request->validate([
            "name" => "required|string",
            "gacha_id" => "required|exist:gachas,id"    
        ]);

        Donate::create([
            'name' => $request->name, 
            'gacha_id' =>$request->gacha_id
        ]);
        
        return redirect()
            ->route('donates.index')
            ->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donate $donate)
    {
        //
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
