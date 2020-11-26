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

        $room = Habitaciones::find($appointment->room_id)->value('domicilio');

        \Mail::send('emails.appointment',
             array(
                 'name' => $user->name,
                 'email' => $user->email,
                 'phone' => $user->phone,
                 'room' => $room
             ), function($message) use ($user)
               {
                  $message->from('studycuci@gmail.com');
                  $message->subject('Nueva cita creada');
                  $message->to($user->email);
               }
        );

        return redirect('habitaciones')->with('success', 'Se ha registrado su cita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Appointments::find($id);
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
    public function update(Request $request, $id)
    {
        $app = Appointments::find($id);

        $user = User::find($app->user_id);
        $room = Habitaciones::find($app->room_id)->value('domicilio');

        if($app->status != $request->status) {
            $app->status = $request->status;
            $app->comments = $request->comment;

            \Mail::send('emails.appointment-update',
             array(
                 'name' => $user->name,
                 'email' => $user->email,
                 'phone' => $user->phone,
                 'status' => $app->status,
                 'room' => $room
             ), function($message) use ($user)
               {
                  $message->from('studycuci@gmail.com');
                  $message->subject('Actualización de cita');
                  $message->to($user->email);
               }
            );

            $app->save();
            
            return redirect('appointments')->with('success', 'Se ha actualizado su cita');
        } else {
            $app->comments = $request->comment;
            $app->save();

            return redirect('appointments')->with('success', 'Se ha actualizado su cita pero sin cambio de estatus');
        }
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
