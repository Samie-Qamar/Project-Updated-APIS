<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Models\flight;
use Validator;

class flightsController extends Controller
{
    public $successStatus = 200;

    public function createflight(Request $request){
        $validator = Validator::make($request->all(), [ 
            'FlightName' => 'required', 
            'PersonName'=> 'required', 
            'Ticket_NO'=> 'required', 
            'Status' => 'required', 
            'From_Destination'=>'required',
            'To_Destination'=>'required',
            'Flight_timings'=>'required',
            'Arrival_timings'=>'required',
        
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }


        $input=new flight();
        $input->FlightName=$request->input('FlightName');
        $input->PersonName=$request->input('PersonName');
        $input->Ticket_NO=$request->input('Ticket_NO');
        $input->Status=$request->input('Status');
        $input->From_Destination=$request->input('From_Destination');
        $input->To_Destination=$request->input('To_Destination');
        $input->Flight_timings=$request->input('Flight_timings');
        $input->Arrival_timings=$request->input('Arrival_timings');
        $input->save();

        if($input->save())
        {
            return response()->json(['success'=>$input], $this-> successStatus);
        }
        else{
            return response()->json(['error'=>'Data Not Saved'], 401);
        }
        
    }
    
    public function showpassenger(){
        $input= flight::all();
        if($input){
        return response()->json(['Record Found'=>$input], $this-> successStatus);
        }
        else{
            return response()->json(['error'=>'Passenger List Not Found'], 401);
        }
    }



    public function showflightsbyid($id)
    {
       $input=flight::find($id);
       if($input)
       {
        return response()->json(['FlightRecord Found'=>$input], $this-> successStatus);
       }
       else{
        return response()->json(['error'=>'Not Found'], 401);
       }
    }

    public function updateflightsbyid(Request $request, $id)
    {
        $input=flight::find($id);
        $input->FlightName=$request->input('FlightName');
        $input->PersonName=$request->input('PersonName');
        $input->Ticket_NO=$request->input('Ticket_NO');
        $input->Status=$request->input('Status');
        $input->From_Destination=$request->input('From_Destination');
        $input->To_Destination=$request->input('To_Destination');
        $input->Flight_timings=$request->input('Flight_timings');
        $input->Arrival_timings=$request->input('Arrival_timings');
        $input->save();
        if($input)
        {
            return response()->json(['Flights Record Updated'=>$input], $this-> successStatus);
        }
        else{
            return response()->json(['error'=>'Data Not Edit'], 401);
        }


  }

  public function flightdeletebyid(Request $request ,$id)
  {

    $input=flight::find($id);
    $input->delete();
    if($input)
    {
        return response()->json(['Flights Record Deleted Succesfully'=>$input], $this-> successStatus);
    }
    else{
        return response()->json(['Error'=>$input], $this-> successStatus);
    }

  }


    
}
