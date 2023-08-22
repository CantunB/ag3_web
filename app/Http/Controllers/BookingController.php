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
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    private $director;
    private $ccEmails;
    private $owner;

    public function __constructor(){
        $this->director = 'ag3mexico@gmail.com';
        $this->ccEmails = ['operadoresag3@gmail.com', 'joagi2000@yahoo.com.mx'];
        $this->owner = 'cantunberna@gmail.com';
    }

    public function vehicles(Request $request)
    {
        $hoteles = Hotel::all();

        //Lista de servicios que son aceptados al realizar la busqueda
        $list_services = [
            1 => __('Aeropuerto a Hotel'),
            2 => __('Hotel a Aeropuerto'),
            3 =>  __('Hotel a Hotel'),
            4 =>  __('Aeropuerto a Hotel a Aeropuerto'),
            5 => __('Traslado')
        ];
        //Se obtiene el nombre del servicio d e acuerdo a la opcion enviada y la lista de servicios disponibles
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
        $tariff = Tariff::with(['type_unit', 'type_trip'])->where('id_zona', $search_destino->id_zona)->get();


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
        $price_mx = $request->price_mx;
        $divisa = $request->divisa;
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
            'price_mx',
            'price',
            'divisa',
            'data',
            'airlines'
        ));
    }

    public function payment(Request $request)
    {
        $booking = Booking::create($request->all());
        /* NOTE En caso de requerir pickup por zona es necesario realizar la busqueda del destino */
        // if ($request->type_service == "Hotel a Aeropuerto")  { //Aeropuerto a Hotel (Origen - Destino)
        //     $obtain_zone = Hotel::where('hotel', $request->origin)
        // ->orWhere('hotel', 'like', '%' . $request->origin . '%')->first();
        // }
        // return $obtain_zone->zona;

        /* SECTION[pickup] Generacion de pickup */
        $pickup_formateado = $booking->pickup($request->type_service, $booking->time_departure);

        /*  SECTION[pdf] Se crea el pdf  */
        $voucher_pdf = PDF::loadView('pdf.voucher', compact('booking','pickup_formateado'));
        $path = public_path('booking');
        $fileName =  $booking->slug . '.' . 'pdf' ;
        $voucher_pdf->save($path . '/' . $fileName);

        /** STUB Envio de correo electronico a cliente*/
        $mail_client = Mail::to($request->email)->queue(new BookingMail($booking, $pickup_formateado));
        $lang_es = App::setLocale('es');
        /*  STUB[mailowners] - Envio de correo en modo produccion */
        $ccEmails = ['operadoresag3@gmail.com', 'joagi2000@yahoo.com.mx'];

        Mail::to('ag3mexico@gmail.com')
                    ->cc($ccEmails)
                    ->bcc('cantunberna@gmail.com')
                    ->queue(new BookingMail($booking, $pickup_formateado));
        /* STUB[mailtest] Envio de correo para pruebas */
        // $mail_test = Mail::to($this->owner)->queue(new BookingMail($booking, $pickup_formateado));
        return response()->json(['data' => $booking], 201);
    }

    public function voucher(Request $request)
    {
        $slug = $request->slug;
        $booking = Booking::with(['TypeUnit','Country','State'])->where('slug',$slug)->first();
        $fileName =  $booking->slug . '.' . 'pdf' ;
        $pdf = public_path('booking/'.$fileName);
        return response()->download($pdf);
    }

    public function quotes(Request $request)
    {
        $quotes = Quote::create($request->all());
        /*  STUB[mailowners] - Envio de correo en modo produccion */
        $mail_owners = Mail::to($this->director)
                        ->cc($this->ccEmails)
                        ->bcc($this->owner)
                        ->send(new QuoteMail($quotes));
        /* STUB[mailtest] Envio de correo para pruebas */
        // $mail_test = Mail::to($this->owner)->queue(new BookingMail($booking, $pickup_formateado));
        return response()->json(['data' => $quotes], 201);
        //return redirect()->route('index', App::getLocale());
    }


    public function createPDF() {
        return  $pdf = PDF::loadView('emails.pdf')->stream('archivo.pdf');
    }

    public function createEmail() {
        Mail::to('cantunberna@gmail.com')->send(new ExampleMail());
    }

    /**VITANNI pagina anillos
     *
     */
}
