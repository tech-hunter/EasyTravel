<?php

namespace App\Http\Controllers\Frontend\Offer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\State\State;
use App\Models\TicketClass\TicketClass;
use App\Models\RoomCategory\RoomCategory;
use App\Models\Hotel\Hotel;
use App\Models\HotelCost\HotelCost;
use App\Models\Air\Air;
use App\Models\Train\Train;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::all();
        $Categories = TicketClass::all();
        $rooms = RoomCategory::all();

        return view('frontend.offers.tour.index')
            ->withStates($states)
            ->withCategories($Categories)
            ->withRooms($rooms);
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
        //
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

    public function airSelection($from, $to){
        $ticketClasses = Air::with(['roomcategory'])->where('from', $from)->where('to', $to)->get();

        return response()->json($ticketClasses);
    }

    public function trainSelection($from, $to){
        $ticketClasses = Train::where('from', $from)->where('to', $to)->get();

        return response()->json($ticketClasses);
    }
    public function hotelSelection($id){
        $data = HotelCost::where('room_cat_id', $id)->get();

        return response()->json($data);
    }
    public function gethotel($id){
        $data = Hotel::find($id);
        return response()->json($data);
    }
}
