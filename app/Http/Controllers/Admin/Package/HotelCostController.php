<?php

namespace App\Http\Controllers\Admin\Package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\HotelCost\HotelCost;
use App\Models\Hotel\Hotel;
use App\Models\RoomCategory\RoomCategory;

class HotelCostController extends Controller
{
    private $hotelcost;
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->hotelcost = new HotelCost();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costs = $this->hotelcost->all();

        return view('admin.packages.hotelcosts.index')
                ->withCosts($costs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = Hotel::all();
        $rooms = RoomCategory::all();

        return view('admin.packages.hotelcosts.create')
                ->withHotels($hotels)
                ->withRooms($rooms);
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
            'cost' => 'required|string',
            ));
        
        $cost = new HotelCost();

        $cost->hotel_id = $request->hotel_id;
        $cost->room_cat_id = $request->room_cat_id;
        $cost->cost = $request->cost;

        $cost->save();

        return redirect()->route('admin.hotelcost.index');
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
        $cost = $this->hotelcost->find($id);
        $hotels = Hotel::all();
        $rooms = RoomCategory::all();

        return view('admin.packages.hotelcosts.edit')
                ->withCost($cost)
                ->withHotels($hotels)
                ->withRooms($rooms);
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
            'cost' => 'required|string',
            ));
        
        $cost = HotelCost::find($id);

        $cost->hotel_id = $request->hotel_id;
        $cost->room_cat_id = $request->room_cat_id;
        $cost->cost = $request->cost;

        $cost->save();

        return redirect()->route('admin.hotelcost.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cost = $this->hotelcost->find($id);

        $cost->delete();

        return redirect()->back();
    }
}
