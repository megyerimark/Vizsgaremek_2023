<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index' , compact('categories'));
    }

    
    public function create()
    {
        return view("admin.categories.create");
    }

   
    public function store(CategoryStoreRequest $request)
    {
        $image = $request->file("image")->store('public/categories');

        Category::create([
            "name" => $request->name,
            "description" => $request->description,
            "image" => $image
        ]);
        return to_route('admin.categories.index')->with('success', 'Kategória sikeresen létrehozva');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    
    public function update(Request $request,Category $category)
    {
        $image = $category->image;
        if($request->hasFile('image')){
           Storage::delete($category->image);
        Storage::delete($category->image);
            $image = $request->file("image")->store('public/categories');
        }
        $category->update([
            "name"=> $request->name,
            "description"=> $request->description,
            "image"=>$image
        ]);
        return to_route('admin.categories.index')->with('success', 'Kategória sikeresen frissítve');
    }

    
    public function destroy(Category $category)
    
    {
    
        Storage::delete($category->image);
        $category->delete();

        return to_route('admin.categories.index')->with('danger','success', 'Kategória sikeresen törölve');
    }
}
