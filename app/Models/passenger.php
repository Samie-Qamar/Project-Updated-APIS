<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;

class passenger extends Model
{
    use   Notifiable;

    protected $table='passengers';


    protected $fillable = [
        'passenger_name',
        'passenger_nic',
        'contact_no',
        'status',
        'Departure_time',
        'arival_time',
        'passenger_date',
        
    ];
 
     protected $hidden = [
         'created_at',
         'updated_at',
     ];
    
}
