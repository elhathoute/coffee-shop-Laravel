<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function reservation(Request $request){
       $reservation= $request->validate([
            'day' => 'required',
            'hour' => 'required',
            'full_name' => 'required',
            'phone'=>'required',
            'personne'=>'required'
        ]);
     Reservation::create($reservation);
     sleep(2);
     return redirect()->route('welcome');
    }
}
