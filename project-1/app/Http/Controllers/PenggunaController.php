<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = DB::table('user')->get();
        return view('pengguna/index', ['pengguna' => $pengguna]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pengguna/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role_id' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $pengguna = new User;
        $pengguna->name = $request->name;
        $pengguna->role_id = $request->role_id;
        $pengguna->username = $request->username;
        $pengguna->email = $request->email;
        $pengguna->password = $request->password;

        $pengguna->save();

        return redirect('/pengguna')->with('status', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   App\Models\User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $pengguna)
    {
        return view('/pengguna/edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $pengguna)
    {
        $request->validate([
            'name' => 'required',
            'role_id' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::where('id', $pengguna->id)
            ->update([
                'name' => $request->name,
                'role_id' => $request->role_id,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password
            ]);
        return redirect('/pengguna')->with('status', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $pengguna)
    {
        User::destroy($pengguna->id);
        return redirect('/pengguna')->with('status', 'Data Deleted');
    }
}
