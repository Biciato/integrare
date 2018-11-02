<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::create($request->input());
        $client->products()->attach($request->all());

        return response()->json($client->products(), 201);
    }
}
