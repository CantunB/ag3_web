<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Hotel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //$airlines = DB::table('airlines')->groupBy('airline');
        $airlines = Airline::groupBy('airline')->get();
        $hoteles = Hotel::all();
        //$hoteles = DB::table('hotels')->first();
        return view('layouts.master', compact('airlines','hoteles'));
        // if (view()->exists($request->path())) {

        //     return view($request->path());
        // }
        // return abort(404);
    }
}


