<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidtransController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('midtrans');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $production = "Mid-server-JDvJ00GrRkB5R1GFqiiLSgBx";
        $sandbox = "SB-Mid-server-SpyWrZyYySNz7U4Fz3ipD9qz";

        \Midtrans\Config::$serverKey = $sandbox;
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $request->totalPrice,
            ),
            'payment_type' => 'gopay',
        );

        $response = \Midtrans\CoreApi::charge($params);
        return redirect($response->actions[1]->url);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
