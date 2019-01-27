<?php

namespace App\Http\Controllers\Admin\Package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Air\Air;
use App\Models\State\State;;
use App\Models\TicketClass\TicketClass;

class AirController extends Controller
{
    private $air;
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->air = new Air();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airs = $this->air->all();
        return view('admin.packages.airs.index')
                ->withAirs($airs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::all();
        $ticketClasses = TicketClass::all();
        return view('admin.packages.airs.create')
                ->withStates($states)
                ->withTicketClasses($ticketClasses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'cost' => 'required|integer',
        ));
        
        $air = new Air();
        $air->from = $request->from;
        $air->to = $request->to;
        $air->tclass_id = $request->tclass_id;
        $air->cost = $request->cost;
        $air->save();

        return redirect()->route('admin.air.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $air = $this->air->find($id);
        $states = State::all();
        $ticketClasses = TicketClass::all();
        return view('admin.packages.airs.edit')
                ->withAir($air)
                ->withStates($states)
                ->withTicketClasses($ticketClasses);
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
        $this->validate($request,array(
            'cost' => 'required|integer',
            ));
        
        $air = $this->air->find($id);
        $air->from = $request->from;
        $air->to = $request->to;
        $air->tclass_id = $request->tclass_id;
        $air->cost = $request->cost;
        $air->save();

        return redirect()->route('admin.air.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $air = $this->air->find($id);
        $air->delete();

        return redirect()->route('admin.air.index');
    }
}
