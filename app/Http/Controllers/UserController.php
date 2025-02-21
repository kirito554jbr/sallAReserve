<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Role;

class UserController extends Controller
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
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'role_id' => 2,
            'photo' => "https://image3.photobiz.com/8929/35_20220824195554_6565770_xlarge.jpg"
        ]);

        return redirect('/users')->with('success', 'Item created successfully');
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // dd('test');
        $user = User::all();
        

        foreach ($user as $users) {
            $role = Role::find($request['role_id']);
        };
        // dd($user);
        return view('Admin.DashboardAdmin', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */


    public function showOne(Request $request)
    {
        $users = User::find($request['id']);

        // $users = users::all();
        // dd($user);
        return view('Admin.UpdateUser', compact('users'));
    }


    public function update(Request $request)
    {
        $user = User::find($request['id']);
        $user->update($request->all());



        // $item->save();
        return redirect('/users')->with('success', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        // dd($request['id']);
        $id = $request['id'];
        // dd($id);
        User::find($id)->delete();
        // dd($user);
        // $user->delete();
        return redirect('/users')->with('success', 'Item deleted successfully');
    }




    public function Profile(Request $request)
    {
        // dd($request['user_id']);
        // $id = ['id' => $request['user_id']];
        // $users = User::where('id', $id);

        $users = User::find($request['user_id']);


        // $users = users::all();
        // dd($users);
        return view('Client.Profile', compact('users'));
    }
}
