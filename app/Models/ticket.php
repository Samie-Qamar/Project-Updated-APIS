<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;

class ticket extends Model
{
    use Notifiable;


    protected $table='tickets_tables';


    protected $fillable = [
        'Name',
        'FlightName',
        'Ticket_No',
        'status',
        'Flight_Amount',
       
        
    ];
 
     protected $hidden = [
         'created_at',
         'updated_at',
     ];

}
