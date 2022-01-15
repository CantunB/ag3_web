<?php

namespace App\Http\Controllers;

use App\Mail\BookingMail;
use App\Mail\ExampleMail;
use App\Mail\QuoteMail;
use App\Models\Airline;
use App\Models\Booking;
use App\Models\Country;
use App\Models\Hotel;
use App\Models\Quote;
use App\Models\Tariff;
use App\Models\TypeTrip;
use App\Models\TypeUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;

class BookingController extends Controller
{
    public function vehicles(Request $request)
    {
        $hoteles = Hotel::all();

        //Lista de servicios que son aceptados al realizar la busqueda
        $list_services = [
            1 => 'Aeropuerto a Hotel',
            2 => 'Hotel a Aeropuerto',
            3 => 'Hotel a Hotel',
            4 => 'Aeropuerto a Hotel a Aeropuerto',
            5 => 'Traslados'
        ];
        //Se obtiene el nombre del servicio de acuerdo a la opcion enviada y la lista de servicios disponibles
        foreach ($list_services as $list_service) {
            $service = array($list_services[$request->services]);
        }
        /** Se obtiene las opciones de tarifas de acuerdo al origen   */
        if ($request->services == "1")  { //Aeropuerto a Hotel (Origen - Destino)
            $search_destino = Hotel::where('hotel', $request->destino)
        ->orWhere('hotel', 'like', '%' . $request->destino . '%')->first();
        }elseif ($request->services == "2") { //Hotel a Aeropuerto (Origen - Destino)
            $search_destino = Hotel::where('hotel', $request->origen)
            ->orWhere('hotel', 'like', '%' . $request->origen . '%')->first();
        }elseif ($request->services == 3) {
            $booking = collect([
                'service' => $service = $service[0],
                'origen' => $request->origen,
                'destino' => $request->destino,
                'date' => $request->date,
                'pickup' => $request->pickup,
                'passengers' => $request->passengers,
            ]);

            $data['countries'] = Country::get(["name","id"]);

            return view('quotes',$data,  compact('booking'));
        }elseif ($request->services == 5){ //Busqueda Manual (Origen - Destino)
            $booking = collect([
                'service' => $service = $service[0],
                'origen' => $request->origen,
                'destino' => $request->destino,
                'date' => $request->date,
                'pickup' => $request->pickup,
                'passengers' => $request->passengers,
            ]);

            $data['countries'] = Country::get(["name","id"]);

            return view('quotes',$data,  compact('booking'));
        }
        else{
            $search_destino = Hotel::where('hotel', $request->destino) //Busqueda por defecto
            ->orWhere('hotel', 'like', '%' . $request->destino . '%')->first();
        }
        /** Se obtiene las tarifas disponibles  de acuerdo a la zona obtenia anteriormente con el destino  */
       // $tariff = DB::table('tariff_hotels')->where('id_zona', $search_destino->zona)->get();
        $tariff = Tariff::with(['type_unit', 'type_trip'])->where('id_zona', $search_destino->zona)->get();


        $booking = collect([
            'service' => $service = $service[0],
            'origen' => $request->origen,
            'destino' => $request->destino,
            'date' => $request->date,
            'pickup' => $request->pickup,
            'passengers' => $request->passengers,
            'retorno' => $request->retorno,
            'date_comeback' => $request->date_comeback,
            'time_comeback' => $request->time_comeback,
        ]);

        return view('reservation', compact(
                'booking',
                'hoteles',
                'tariff'
        ));
    }

    public function complete(Request $request)
    {
        //return $request->all();

        //$unit = TypeUnit::where('id', $request->unit)->get();
        $service = $request->service;
        $origen = $request->origen;
        $destino = $request->destino;
        $date = $request->date;
        $pickup = $request->pickup;
        $passengers = $request->passengers;
        $retorno = $request->retorno;
        $date_comeback = $request->date_comeback;
        $time_comeback = $request->time_comeback;
        $type_unit = TypeUnit::findOrFail($request->type_unit);
        $type_trip = TypeTrip::findOrFail($request->type_trip);
        $price = $request->price;

        $data['countries'] = Country::get(["name","id"]);

        $airlines = Airline::groupBy('airline')->get();


        return view('booking', $data, compact(
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

       // return $booking;
        /** SECTION Envio de correo electronico */
        Mail::to($request->email)->queue(new BookingMail($booking));
        return response()->json(['data' => $booking], 201);
    }

    public function voucher(Request $request)
    {
        $id = $request->id;
        $booking = Booking::with(['TypeUnit','Country','State'])->findOrFail($id);
        $voucher_pdf = PDF::loadView('pdf.voucher', compact('booking'));
        $path = public_path('booking');
        $fileName =  $booking->id . '.' . 'pdf' ;
        $voucher_pdf->save($path . '/' . $fileName);
        //return $voucher_pdf->download($voucher_pdf);
        $pdf = public_path('booking/'.$fileName);

        return response()->download($pdf);
    }

    public function quotes(Request $request)
    {
        // $request->all();
        $quotes = Quote::create($request->all());
        //return $quotes;
        Mail::to('cantunberna@gmail.com')->send(new QuoteMail($quotes));
        return redirect()->route('index', App::getLocale());
    }


    public function createPDF() {
        return  $pdf = PDF::loadView('emails.pdf')->stream('archivo.pdf');
    }

    public function createEmail() {
        Mail::to('cantunberna@gmail.com')->send(new ExampleMail());
    }

}
