<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Salles;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showOne(Request $request)
    {
        $salle = Reservation::find($request['id']);

        // $salles = Salles::all();
        // dd($user);
        return view('Reserve.Reservation', compact('salle'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Reservation::create([
            'user_id' => $request['user_id'],
            'salle_id' => $request['salle_id']
        ]);

        return redirect('/SalleClient')->with('success', 'Item created successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showOneReserve(Request $request)
    {
        $id = ['user_id' => $request['user_id']];
        $reservation = Reservation::where('user_id', $id)->get();
        //  dd($test);

        foreach ($reservation as $reserves) {
            Salles::find($reserves->salle_id);
            User::find($reserves->user_id);
        };

        // f

        // $reservation = Reservation::find($request['user_id']);
        // dd($reservation);

        return view('Client.MyReservation', compact('reservation'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {


        $reservation = Reservation::all();

        foreach ($reservation as $reservations) {


            $user = User::find($request['user_id']);
            $salle = Salles::find($request['salle_id']);
        };

        // dd($reservation);
        return view('Reserve.Reservation', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    public function delete(Request $request)
    {
        $id = $request['id'];
        // dd($id);
        Reservation::find($id)->delete();
        // dd($user);
        // $user->delete();
        return redirect('/Reservation')->with('success', 'Item deleted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function deleteClient(Request $request)
    {
        $id = $request['id'];
        // dd($id);
        Reservation::find($id)->delete();
        // dd($user);
        // $user->delete();
        return redirect('/ShowOneReserve')->with('success', 'Item deleted successfully');
    }
}
