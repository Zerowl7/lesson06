<?php

namespace App\Http\Controllers\Admin;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResStoreRequest;
use Illuminate\Http\Request;
use App\Models\ReservationModel;
use App\Models\TableModel;
use Illuminate\Support\Carbon;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = ReservationModel::all();
        return view('admin.reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tables = TableModel::where('status', TableStatus::AVAILABLE)->get();
        return view('admin.reservation.create', compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResStoreRequest $request)
    {
        $table = TableModel::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number)
            return back()->with('warning', 'Please choose the table base on guests');

            // $request_date = Carbon::parse($request->res_date);
            // foreach ($table->reservations as $res){
            //    if($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')){
            //         return back()->with('warning', 'This table is reserved in this date');
            //     }
            // }
            
        ReservationModel::create($request->validated());
        return redirect()->route('admin.reservations.index')->with('success', 'Reservation created successfuly');
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
    public function edit(ReservationModel $reservation)
    {
        $tables = TableModel::all();
        return view('admin.reservation.edit', compact('reservation', 'tables'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ResStoreRequest $request, ReservationModel $reservation)
    {
        $reservation->update($request->validated());

        return redirect()->route('admin.reservations.index')->with('success', 'Reservation updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReservationModel $reservation)
    {
        $reservation->delete();
        return redirect()->route('admin.reservations.index')->with('danger', 'Reservation deleted successfuly');
    }
}
