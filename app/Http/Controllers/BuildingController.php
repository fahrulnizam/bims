<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Building;
use App\Building_Group;
use App\State;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Building::get();

        $data = compact('buildings');

        return view('buildings.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $building = new Building;

        $user->name = $request->name;
        $user->ic_no = $request->ic_no;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;

        $user->mobile_no = $request->handphone;
        //$user->address = NULL;
        $user->jawatan = $request->jawatan;

        $user->role_id = $request->user_level;

        $user->no_ahli = $request->no_ahli;

        $user->alamat = $request->alamat;

        $user->negeri_id = $request->negeri;
        $user->parlimen_id = $request->parlimen;
        $user->dun_id = $request->dun;
        $user->dm_id = $request->dm;

        // created by
        $user->created = Auth::user()->ic_no;

        // if ($request->user_level == 3)
        //     $role_data_id = $request->negeri;
        // elseif ($request->user_level == 4) 
        //     $role_data_id = $request->parlimen;
        // elseif ($request->user_level == 5) 
        //     $role_data_id = $request->dun;
        // elseif ($request->user_level == 6) 
        //     $role_data_id = $request->dm;
        // else 
        //     $role_data_id = 0; 

        //$user->role_data_id = $role_data_id;

        $user->save();

        $user->permissions()->sync($request->permissions);

        return redirect(route('users.index'))->with('success', 'New user created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $building = Building::select('*')->where('id', $id)->get();

        $building = Building::find($id);

        $data = compact('building');

        //dd($building);

        return view('buildings.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
