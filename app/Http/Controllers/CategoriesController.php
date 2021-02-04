<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {
        return view('categories.index')->with('categories', Category::all());
    }

    public function new()
    {
        return view('categories.new');
    }

    public function create()
    {
        $this->validate(request(), [
            'name' => 'required'
        ]);
        $data = request()->all();
        $cat = new Category;
        $cat->name = $data['name'];
        $cat->save();
        session()->flash('success', 'Category created successfully.');
        return redirect('/categories');
    }

    public function edit(Category $category)
    {
        return view('categories.edit')->with('category', $category);
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $data = $request->all();
        $category->name = $data['name'];
        $category->save();
        session()->flash('success', 'Category created successfully.');
        return redirect('/categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('success', 'Category deleted successfully.');
        return redirect("/categories");
    }
}
