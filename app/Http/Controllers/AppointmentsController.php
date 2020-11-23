<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Habitaciones;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Appointments::all();
        $appointments = array();
        foreach($data as $row) {
            $username = User::where("id",$row->user_id)->value('name');
            $room = Habitaciones::find($row->room_id);

            $date_row = array(
                "id" => $row->id,
                "username" => $username,
                "address" => $room->domicilio,
                "room_contact" => $room->contacto,
                "phone" => $row->phone,
                "status" => $row->status
            );

            array_push($appointments, $date_row);
        }
        //dd($appointments);
        return view('dashboard', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find($request->user_id);
        $appointment = New Appointments;
        $appointment->user_id = $request->user_id;
        $appointment->room_id = $request->room_id;
        $appointment->phone = $request->phone;
        $appointment->comments = $request->comment;
        
        // If user has new phone number
        if($user->phone != $request->phone){
            $user->phone = $request->phone;
            $user->save();
        }

        // store the appointment
        $appointment->save();

        return redirect('habitaciones')->with('success', 'Se ha registrado su cita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function show(Appointments $appointments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointments $appointments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointments $appointments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointments $appointments)
    {
        //
    }
}
