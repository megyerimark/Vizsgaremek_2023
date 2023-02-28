<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableStoreRequest;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TableController extends Controller
{
    
    public function index()
    {
        $tables = Table::all();
        return view('admin.tables.index', compact("tables"));
    }

    
    public function create()
    {
        return view('admin.tables.create');
    }

   
    public function store(TableStoreRequest $request)
    {
    
        
    


        Table::create([
            'name'=>$request->name,
            'guest_number'=>$request->guest_number,
            'location'=>$request->location,
            'status'=>$request->status,

        ]);
        return to_route('admin.tables.index')->with('success', 'Asztal sikeresen tárolva');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit(Table $table)
    {
        return view('admin.tables.edit',compact("table"))->with('info', 'Asztal sikeresen módosítva');
    }

    
    public function update( TableStoreRequest $request, Table $table)
    {
        $table->update($request->validated());

        return to_route('admin.tables.index');
        
    }

    public function destroy(Table $table)
    {
        $table->reservation()->delete();
        $table->delete();
        return to_route('admin.tables.index')->with('danger', 'Asztal sikeresen törölve');
    }
   
    
}
