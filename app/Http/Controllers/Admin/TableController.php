<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableStoreRequest;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    
        if( $request->isMethod( "post" )) {
 
            $request->validate([
                "name" => "required|min:4|max:20",
             
            ], [
                "name.required" => "Név mező kötelező"
               
            ]);
        }
        print_r( $request->all() );


        Table::create()->validated([
            'name'=>$request->name->required,
            'guest_number'=>$request->guest_number->require,
            'location'=>$request->location,
            'status'=>$request->status,

        ],[
            "name.required"=>"töltsd ki"
        ]);
        return to_route('admin.tables.index');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit(Table $table)
    {
        return view('admin.tables.edit',compact("table"));
    }

    
    public function update( TableStoreRequest $request, Table $table)
    {
        $table->update($request->validated());

        return to_route('admin.tables.index');
        
    }

    public function destroy($id)
    {
        //
    }
    public function messages() {
 
        return [
            "name.required" => "A név mező kitöltése kötelező!",
            "guest_number.required" => "Az email mező kitöltése kötelező!",
            "status.required" => "A telefon mező kitöltése kötelező!",
            "location.required" => "A telefon mező kitöltése kötelező!",
            
        ];
    }
}
