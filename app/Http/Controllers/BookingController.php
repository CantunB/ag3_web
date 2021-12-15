<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Hotel;
use App\Models\Tariff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function car_booking(Request $request)
    {
        $airlines = Airline::groupBy('airline')->get();
        $hoteles = Hotel::all();

        $search_destino = Hotel::where('hotel', $request->destino)
        ->orWhere('hotel', 'like', '%' . $request->destino . '%')->first();

        $tariff = DB::table('tariff_hotels')->where('id_zona', $search_destino->zona)->get();
        $tariff = Tariff::where('id_zona', $search_destino->zona)->get();

        $service = $request->service;
        $origen = $request->origen;
        $destino = $request->origen;
        $date = $request->date;
        $pickup = $request->pickup;
        $passengers = $request->passengers;
        $retorno = $request->retorno;
        $date_comeback = $request->date_comeback;
        $time_comeback = $request->time_comeback;

        return view('reservation', compact(
            'service',
            'origen',
            'destino',
            'date',
            'pickup',
            'passengers',
            'retorno',
            'date_comeback',
            'time_comeback',
            'airlines',
            'hoteles',
            'tariff'
        ));
    }
}
