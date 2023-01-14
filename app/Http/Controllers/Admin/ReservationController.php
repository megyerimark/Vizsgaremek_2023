<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Table;

class ReservationController extends Controller
{
    
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservation.index', compact("reservations"));
    }

  
    public function create()
    {
        $tables = Table::all();
        return view('admin.reservation.create',compact('tables'));
    }

   
    public function store(ReservationStoreRequest $request)
    {
        Reservation::create($request->validated());

        return to_route('admin.reservation.index');
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
