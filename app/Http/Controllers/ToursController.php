<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class ToursController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('layouts.tours.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list_tours = [
            1 => ['tour' =>  'Laguna de Siete Colores - Bacalar', 'price' => '1650'],
            2 => ['tour' => 'Chichen Itza, Yucatan', 'price' => '1200'],
            3 => ['tour' => 'Palenque, Chiapas', 'price' => '2650'],
            4 => ['tour' => 'Calakmul, Campeche', 'price' => '1950'],
            5 => ['tour' => 'Ek Balam - Las Colorado', 'price' => '1650'],
            6 => ['tour' => 'Coba - 3 Cenotes', 'price' => '1150']
        ];

        foreach ($list_tours as $tours) {
            $tours = array($list_tours[$id]);
            $tours = Arr::flatten($tours);
        }
        //return $tours;
        $data['countries'] = Country::get(["name","id"]);

        return view('booking_tours', $data, compact('tours'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
