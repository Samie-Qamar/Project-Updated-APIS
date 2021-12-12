<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\flight;
use validator;

class FlightController extends Controller
{
    public function Flight_info()
    {
        $data=flight::all();
        return view('Front-End.flight')->with('data',$data);
    }



    public function create_flight(Request $request)
    {
        $fly= new flight();
        $fly->FlightName=$request->input('FlightName');
        $fly->PersonName=$request->input('PersonName');
        $fly->Ticket_NO=$request->input('Ticket_NO');
        $fly->Status=$request->input('Status');
        $fly->From_Destination=$request->input('From_Destination');
        $fly->To_Destination=$request->input('To_Destination');
        $fly->Flight_timings=$request->input('Flight_timings');
        $fly->Arrival_timings=$request->input('Arrival_timings');
        $fly->save();
        if($fly->save())
        {
            $request->session()->flash('msg','Flight Data Submitted');
            return redirect('flight-info');
        }
        else
        {
            $request->session()->flash('msg','Flight Data Not Submitted');
        }



    }

    
}
