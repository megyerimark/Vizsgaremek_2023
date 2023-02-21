<?php

namespace App\Http\Controllers\Admin;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservation.index', compact("reservations"));
    }

  
    public function create()
    {
        $tables = Table::where('status', TableStatus::Elérhető)->get();
        return view('admin.reservation.create',compact('tables'));
    }

   
    public function store(ReservationStoreRequest $request)
    {
        
        $table = Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number){
            return back()->with('warning', 'Nincs elérhető asztal ennyi vendég számára ');
        }

        $request_date = Carbon::parse($request->res_date);
        foreach($table->reservations as $res){
            if($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')){
                return back()->with('warning', 'Válassz másik asztalt vagy dátumot! '); // nem működik az üzenet
            }

        }
        Reservation::create($request->validated());
        return to_route('admin.reservation.index');
    }

    public function show($id)
    {
        //
    }

   
    public function edit(Reservation $reservation)
    {
        $tables = Table::where("status", TableStatus::Elérhető)->get();
        return view("admin.reservation.edit", compact("reservation","tables"));
    }

   
   
 public function update(ReservationStoreRequest $request, Reservation $reservation)
    {
        $table = Table::findOrFail($request->table_id);
        if ($request->guest_number > $table->guest_number) {
            return back()->with('warning', 'Please choose the table base on guests.');
        }
        $request_date = Carbon::parse($request->res_date);
        $reservations = $table->reservation()->where('id', '!=', $reservation->id)->get();
        foreach ($reservations as $res) {
            if ($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('warning', 'Erre a dátumra már valaki befoglalt.');
            }
        }

        $reservation->update($request->validated());
        return to_route('admin.reservation.index')->with('success', 'Foglalás sikeresen frissítve.');
    }
    

    
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return to_route('admin.reservation.index')->with('danger', 'Foglalás sikeresen  törölve');
    }
}
