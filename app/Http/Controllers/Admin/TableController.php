<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableStoreRequest;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return to_route('admin.tables.index');
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
