<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view("admin.menus.index" , compact("menus"));
    }

    
    public function create()
    {
        $categories = Category::all();
        return view('admin.menus.create',compact('categories'));
    }

    
    public function store(MenuStoreRequest $request)
    {
    

        $image = $request->file("image")->store('public/menus');
        Menu::create([
            "name" => $request->name,
            "description" => $request->description,
            "image" => $image,
            'price'=>$request->price
        ]);

        return to_route('admin.menus.index');

       

    
        
    }

   
    public function show($id)
    {
        //
    }

    
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
}
