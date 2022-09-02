<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $this->data['categories'] = Category::all();
        return view('categories.categories', $this->data);
    }

    public function create()
    {
        $this->data['mode'] = 'Create category';

       return view('categories.create_edit', $this->data);
    }


    public function store(Request $request)
    {
        $request->validate(['title' => 'required|',]);
        $data = $request->all();
        Category::create($data);
        $this->data['categories'] = Category::all();
        return view('categories.categories', $this->data);
    }

    public function show(Category $category)
    {
        //
    }


    public function edit(Category $category)
    {
       
        $this->data['mode']             = 'Edit category';
        $this->data['category']         = $category;
        
        return view('categories.create_edit', $this->data);

    }


    public function update(Request $request, Category $category)
    {
        $request->validate(['title' => 'required|']);
        $data= Category::find($category->id);
        $data->title = $request->title;
        $data->save();
        return $this->index();
    }

    public function destroy(Category $category)
    {
        Category::findOrFail($category->id)->delete();
        return $this->index();
    }
}
