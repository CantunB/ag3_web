<?php

namespace App\Http\Controllers;

use App\Mail\BookingMail;
use App\Models\Airline;
use App\Models\Booking;
use App\Models\Country;
use App\Models\Hotel;
use App\Models\Tariff;
use App\Models\TypeUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Barryvdh\DomPDF\Facade as PDF;

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
            4 => 'Aeropuerto a Hotel a Aeropuerto',
            5 => 'Traslados'
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

        $airlines = Airline::groupBy('airline')->get();


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
            'data',
            'airlines'
        ));
    }

    public function payment(Request $request)
    {
        //return $request->all();

        $id = IdGenerator::generate(['table' => 'bookings', 'length' => 8, 'prefix' =>'BOOK-']);

        $booking = new Booking();
        $booking->id = $id;
        $booking->name = $request->name;
        $booking->paterno = $request->paterno;
        $booking->materno = $request->materno;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->country_id = $request->country_id;
        $booking->state_id = $request->state_id;
        $booking->type_service = $request->type_service;
        $booking->origin = $request->origin;
        $booking->destiny = $request->destiny;
        $booking->passengers = $request->passengers;
        $booking->airline_arrival = $request->a_arrival;
        $booking->flight_number_arrival = $request->fn_arrival;
        $booking->date_arrival = $request->d_arrival;
        $booking->time_arrival = $request->t_arrival;
        $booking->comments_arrival = $request->c_arrival;
        $booking->round_service = $request->round_service;
        $booking->airline_departure = $request->a_departure;
        $booking->flight_number_departure = $request->fn_departure;
        $booking->date_departure = $request->d_departure;
        $booking->time_departure = $request->t_departure;
        $booking->comments_departure = $request->c_departure;
        $booking->request_unit = $request->request_unit;
        $booking->price = $request->price;
        $booking->type_payment = $request->type_payment;
        $booking->transaction_id = $request->transaction_id;
        $booking->status_payment = $request->status_payment;
        $booking->status_booking = $request->status_booking;
        $booking->save();
        return response()->json(['data' => $booking], 201);
    }

    public function voucher(Request $request)
    {
        $id = $request->id;
        $booking = Booking::findOrFail($id);
        $voucher_pdf = PDF::loadView('pdf.voucher', compact('booking'))->setPaper('a4');
        $path = public_path('booking');
        $fileName =  $booking->id . '.' . 'pdf' ;
        $voucher_pdf->save($path . '/' . $fileName);
        return $voucher_pdf->download($fileName);
        //return response()->download($voucher_pdf);

    }
}
