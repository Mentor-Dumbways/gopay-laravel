<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use function PHPUnit\Framework\isEmpty;

class CekOngkirController extends Controller
{
    public function home(Request $request)
    {
        if ($request->cost == null) {
            $cost = null;
        } else {
            $cost = $request->cost;
        }

        $cities = Http::withHeaders([
            'key' => 'e06de7ce97a72276ffa92be52628f1bd'
        ])->get('https://api.rajaongkir.com/starter/city');

        $data = $cities['rajaongkir']['results'];

        return view('rajaongkir', compact('data', 'cost'));
    }

    public function cost(Request $request)
    {
        $asal = $request->asal;
        $tujuan = $request->tujuan;
        $weight = $request->weight;
        $courier = $request->courier;

        $cost = Http::withHeaders([
            'key' => 'e06de7ce97a72276ffa92be52628f1bd'
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin' => $asal,
            'destination' => $tujuan,
            'weight' => $weight,
            'courier' => $courier,
        ]);

        return redirect()->route('home', ['cost' => $cost['rajaongkir']['results'][0]['costs']]);
    }
}
