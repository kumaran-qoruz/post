<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    public function index(Category $category)
    {

        return view('dashboard.categories.index', [

            'categories'    => Category::all(),

        ]);
    }


    public function create(Category $category)
    {
        return view('dashboard.categories.create', [

            'categories'  => Category::all(),
        ]);
    }


    public function store(Request $request)
    {
        $category = Validator::make($request->all(), [

            'name' => 'required|unique:tblname|max:100|min:5'
        ]);

        $Category = Category::where("name", "=", $request->input('name'))->first();

        if ($Category != null) {

            return redirect()->route('admin.categories.index')
                ->with('Message', 'Category already created!');
        } else {
            $category               = new Category;
            $category->name         = $request->name;
            $category->parent_id    = $request->parent_id;
            $category->slug         = Str::slug($request->name);
            $category->save();

            return redirect()->route('admin.categories.index')
                ->with('Message', 'Category succesfully created!');
        }
    }


    public function edit(Category $category)
    {

        return view('dashboard.categories.edit', [

            'category' => $category,
        ]);
    }


    public function update(Request $request, Category $category)
    {

        $Category = Category::where("name", "=", $request->input('name'))->first();

        if ($Category != null) {

            return redirect()->back()
                ->with('Message', 'Category already same type there');
        }
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->save();

        return redirect()->route('admin.categories.index')
            ->with('Message', 'Category succesfully updated!');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')
            ->with('Message', 'Category succesfully  deleted');
    }
}
