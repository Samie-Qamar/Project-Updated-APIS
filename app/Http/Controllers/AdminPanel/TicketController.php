<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ticket;
use DB;
class TicketController extends Controller
{
    public function Ticket_info()
    {
        $data=ticket::all();
        return view('Front-End.Ticket')->with('data',$data);
    }



    public function create_Ticket(Request $request)
    {
        $tc= new ticket();
        $tc->Name=$request->input('Name');
        $tc->FlightName=$request->input('FlightName');
        $tc->Ticket_No=$request->input('Ticket_No');
        $tc->status=$request->input('status');
        $tc->Flight_Amount=$request->input('Flight_Amount');
        $tc->save();
        if($tc->save())
        {
            $request->session()->flash('msg','Ticket Data Submitted');
            return redirect('Ticket-info');
        }
        else
        {
            $request->session()->flash('msg','Ticket Data Not Submitted'); 
        }

    }

    
}
