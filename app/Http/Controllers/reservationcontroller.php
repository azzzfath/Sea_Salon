<?php


namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;


class reservationcontroller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'phonenumber' => 'required',
            'service' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);
        
        
        reservation::create($request->except(['_token']));

        return redirect('/');
    }
}
