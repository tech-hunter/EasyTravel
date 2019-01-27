<?php

namespace App\Http\Controllers\Admin\Package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Hotel\Hotel;
use App\Models\State\State;

class HotelController extends Controller
{
    private $hotel;
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->hotel = new Hotel();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = $this->hotel->all();
        $states = State::all();
        return view('admin.packages.hotels.index')
                ->withHotels($hotels)
                ->withStates($states);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.packages.hotels.create');
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
            'name' => 'required|string',
            ));
        $hotel = new Hotel();

        $hotel->name = $request->name;
        $hotel->state_id = $request->state_id;
        $hotel->save();

        return redirect()->route('admin.hotel.index');
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
        $hotel = $this->hotel->find($id);
        $states = State::all();

        return view('admin.packages.hotels.edit')
                ->withHotel($hotel)
                ->withStates($states);
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
            'name' => 'required|string',
            ));

        $hotel = $this->hotel->find($id);

        $hotel->name = $request->name;
        $hotel->state_id = $request->state_id;

        $hotel->save();

        return redirect()->route('admin.hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = $this->hotel->find($id);
        $hotel->delete();

        return redirect()->back();
    }
}
