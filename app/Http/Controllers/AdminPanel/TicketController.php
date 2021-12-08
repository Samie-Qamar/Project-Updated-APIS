<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function Ticket_info()
    {
        return view('Front-End.Ticket');
    }
}
