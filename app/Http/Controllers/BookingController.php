<?php

namespace App\Http\Controllers;

use App\Mail\BookingMail;
use App\Models\Airline;
use App\Models\Country;
use App\Models\Hotel;
use App\Models\Tariff;
use App\Models\TypeUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Haruncpi\LaravelIdGenerator\IdGenerator;
class BookingController extends Controller
{
    public function vehicles(Request $request)
    {
        $hoteles = Hotel::all();

        if ($request->services == "1")  {
            $search_destino = Hotel::where('hotel', $request->destino)
        ->orWhere('hotel', 'like', '%' . $request->destino . '%')->first();
        }elseif ($request->services == "2") {
            $search_destino = Hotel::where('hotel', $request->origen)
            ->orWhere('hotel', 'like', '%' . $request->origen . '%')->first();
        }else{
            $search_destino = Hotel::where('hotel', $request->destino)
            ->orWhere('hotel', 'like', '%' . $request->destino . '%')->first();
        }


        $list_services = [
            1 => 'Aeropuerto a Hotel',
            2 => 'Hotel a Aeropuerto',
            3 => 'Hotel a Hotel',
            4 => 'Aeropuerto a Hotel a Aeropuerto'
        ];

        foreach ($list_services as $list_service) {
            $service = array($list_services[$request->services]);
        }
       // $tariff = DB::table('tariff_hotels')->where('id_zona', $search_destino->zona)->get();
        $tariff = Tariff::with(['type_unit', 'type_trip'])->where('id_zona', $search_destino->zona)->get();

        $service = $service[0];
        $origen = $request->origen;
        $destino = $request->destino;
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
            'hoteles',
            'tariff'
        ));
    }

    public function complete(Request $request)
    {
        //$unit = TypeUnit::where('id', $request->unit)->get();
        $unit = $request->unit;
        $service = $request->service;
        $origen = $request->origen;
        $destino = $request->destino;
        $date = $request->date;
        $pickup = $request->pickup;
        $passengers = $request->passengers;
        $retorno = $request->retorno;
        $date_comeback = $request->date_comeback;
        $time_comeback = $request->time_comeback;
        $type_unit = $request->type_unit;
        $type_trip = $request->type_trip;
        $price = $request->price;

        $data['countries'] = Country::get(["name","id"]);

        return view('booking', $data, compact(
                'unit',
            'service',
            'origen',
            'destino',
            'date',
            'pickup',
            'passengers',
            'retorno',
            'date_comeback',
            'time_comeback',
            'type_trip',
            'type_unit',
            'price',
            'data'
        ));
    }

    public function payment(Request $request)
    {
        //return $request->all();ç

        $id = IdGenerator::generate(['table' => 'invoices', 'length' => 6, 'prefix' =>'BOOk-']);

        $todo = new Todo();
        $todo->id = $id;
        $todo->title = $request->get('title');
        $todo->save();

        $msg = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'country' => $request->country,
            'state' => $request->state,

        ];
        Mail::to($request->email)->send(new BookingMail($msg));
        return response()->json(['data' => 'Su reservación se ha realizado correctamente'], 201);
    }
}
