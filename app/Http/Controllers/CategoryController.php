<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;
use App\HTTP\Resources\CategoryResource;

class CategoryController extends Controller
{
    public function __construct()
    { 
        $this->middleware('JWT', ['except' => ['index', 'show']]);
    }
    
    public function index()
    {
        return CategoryResource::collection(category::latest()->get());
    }  

    public function store(Request $request)
    { 
        $category = new Category;
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->save();
        return response('Created', 201);
    }
    
    public function show(Category $category)
    {
        return new CategoryResource($category);
    } 
    
    public function update(Request $request, Category $category)
    {
        $category->update([
            'name' => $request->name,
            'slug' => str_slug($request->name)
        ]);

        return response('Updated', 202);
    }
    
    public function destroy(Category $category)
    {
        $category->delete();
        return response(null, 204);
    }
}
