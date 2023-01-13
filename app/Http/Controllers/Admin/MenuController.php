<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Storage;

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
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
        ],[
            "name.required"=>"Töltsd ki a név mezőt",
            "description.required"=>"Töltsd ki a megjegyzés mezőt",
            "price.required"=>"Töltsd ki az ár  mezőt",
        ]);
        print_r('store');
    

        $image = $request->file("image")->store('public/menus');
       $menu = Menu::create([
            "name" => $request->name,
            "description" => $request->description,
            "image" => $image,
            'price'=>$request->price
        ]);
        if($request->has('categories')){
            $menu->categories()->attach($request->categories);

        }

        return to_route('admin.menus.index');

       

    
        
    }

   
    public function show($id)
    {
        
    }

    
    public function edit(Menu $menu)
    {
        $categories = Category::all();
        return view('admin.menus.edit', compact('menu','categories'));
    }

  
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
        ],[
            "name.required"=>"Töltsd ki a név mezőt",
            "description.required"=>"Töltsd ki a megjegyzés mezőt",
            "price.required"=>"Töltsd ki az ár  mezőt",
        ]);
        print_r('update');
        $image = $menu->image;
        if($request->hasFile('image')){
          
        Storage::delete($menu->image);
            $image = $request->file("image")->store('public/menus');
        }
        $menu->update([
            "name"=> $request->name,
            "description"=> $request->description,
            "image"=>$image,
            'price'=>$request->price
        ]);

        if($request->has('categories')){
            $menu->categories()->sync($request->categories);
        }
        return to_route('admin.menus.index');
    }

    public function destroy(Menu $menu)
    {
        Storage::delete($menu->image);
        $menu->delete();
        return to_route('admin.menus.index');

    }
}
