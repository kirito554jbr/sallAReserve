<?php

namespace App\Http\Controllers;

use App\Models\Salles;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Salles::create([
            'name' => $request['name'],
            'numero' => $request['numero'],
            'type' => $request['type'],
            'capacite' => $request['capacite'],
            'user_id' => 31,
            'photo' => $request['photo'],
            'status' => "Available"
        ]);

        return redirect('/Salles')->with('success', 'Item created successfully');
        // $this->show();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function showClient()
    {
        $salles = Salles::all();
        // dd($user);
        return view('Client.Salles', compact('salles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salles  $salles
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $salles = Salles::all();
        // dd($user);
        return view('front.Salles', compact('salles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salles  $salles
     * @return \Illuminate\Http\Response
     */
    public function edit(Salles $salles)
    {
        //
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salles  $salles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $salle = Salles::find($request['id']);
        $salle->update($request->all());
        
        

        // $item->save();
        return redirect('/Salles')->with('success', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salles  $salles
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        // dd();

        $id = $request['id'];
       
       
        // dd($id);
        Salles::find($id)->delete();
        // dd($user);
        // $user->delete();
        // $this->show();        
        return redirect('/Salles')->with('success', 'Item deleted successfully');
    }
}
