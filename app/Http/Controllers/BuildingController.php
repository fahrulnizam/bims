<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Building;
use App\Building_Group;
use App\State;

class BuildingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        //$data = compact('buildings');

        return view('buildings.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request);

        $building = new Building;

        $building->building_id = $request->building_id;
        $building->service_number = $request->service_number;
        $building->building_group = $request->building_group;
        $building->name = $request->building_name;
        $building->description = $request->description;
        $building->status = $request->status;
        $building->state = $request->state;

        $building->save();

        return redirect(route('dashboard'))->with('success', 'New building added!');
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
        $building = Building::find($id);

        $data = compact('building');

        //dd($building);

        return view('buildings.edit', $data);
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

        //dd($request);

        $building = Building::find($id);

        // $building->building_id = $request->building_id;
        // $building->service_number = $request->service_number;
        $building->building_group = $request->building_group;
        $building->name = $request->building_name;
        $building->description = $request->description;
        $building->status = $request->status;
        $building->state = $request->state;

        $building->save();

        return redirect(route('dashboard'))->with('success', 'Building updated!');
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
