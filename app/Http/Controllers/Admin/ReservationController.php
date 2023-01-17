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
        foreach($table->reservation as $res){
            if($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')){
                return back()->with('warning', 'Válassz másik asztalt vagy dátumot! ');
            }

        }
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
