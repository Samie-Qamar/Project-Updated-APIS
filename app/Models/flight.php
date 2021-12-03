<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class flight extends Model
{
    use  Notifiable;

    protected $table='flights';




   protected $fillable = [
       'FlightName',
       'PersonName',
       'Ticket_NO',
       'Status',
       'From_Destination',
       'To_Destination',
       
   ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    

}
