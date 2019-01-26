<?php

namespace App\Http\Controllers\Admin\Package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Train;
use App\Models\State;

class TrainController extends Controller
{
    private $train;
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->train = new Train();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trains = $this->train->all();
        return view('admin.packages.trains.index')->withTrains($trains);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.packages.trains.create');
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
            'cost' => 'required|inetger',
            ));
        
        $train = new train();
        $train->from = $request->from;
        $train->to = $request->to;
        $train->tclass_id = $request->tclass_id;
        $train->save();

        return redirect()->route('admin.train.index');
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
        $train = $this->train->find($id);

        return view('admin.train.edit')->withTrain($train);
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
            'state' => 'required|string',
            'cost' => 'required|integer',
            ));
        
        $train = $this->train->find($id);
        $train->from = $request->from;
        $train->to = $request->to;
        $train->tclass_id = $request->tclass_id;
        $train->save();

        return redirect()->route('admin.train.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $train = $this->train->find($id);
        $train->delete();

        return redirect()->route('admin.train.index');
    }
}
