<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\passenger;
use Validator;

class PassengerController extends Controller
{
    public function Passengers()
    {
        $data=passenger::all();
        return view('Front-End.passenger')->with('data',$data);
    }


    public function create_passengers(Request $request)
    {
        $pass= new passenger();
        $pass->passenger_name=$request->input('passenger_name');
        $pass->passenger_nic=$request->input('passenger_nic');
        $pass->contact_no=$request->input('contact_no');
        $pass->status=$request->input('status');
        $pass->Departure_time=$request->input('Departure_time');
        $pass->arival_time=$request->input('arival_time');
        $pass->passenger_date=$request->input('passenger_date');
        $pass->save();
        
        if($pass->save())
        {
            $request->session()->flash('msg','Passenger Data Submitted');
            return redirect('passenger-info');
        }
        else
        {
            $request->session()->flash('msg','Passenger Data Not Submitted');
        }


        
    }

    
}
