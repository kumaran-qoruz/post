<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function index()
    {
        return view('dashboard.tags.index', [

            'tags' => Tag::all(),

        ]);
    }


    public function create()
    {
        return view('dashboard.tags.create');
    }


    public function store(Request $request)
    {

        $tag = Validator::make($request->all(), [

            'name' => 'required|unique:tblname|max:100|min:5'

        ]);

        $Tag = Tag::where("name", "=", $request->input('name'))->first();

        if ($Tag != null) {

            return redirect()->route('tags.index')
            ->with('Message', 'Tag already created!');
        } else {

            $tag = new Tag();
            $tag->name = $request->name;
            $tag->slug = Str::slug($request->name);
            $tag->save();

            return redirect()->route('admin.tags.index')
                ->with('Message', 'Tag succesfully created!');
        }
    }


    public function edit(Tag $tag)
    {

        return view('dashboard.tags.edit', [

            'tag' => $tag,
        ]);
    }


    public function update(Request $request, Tag $tag)
    {

        $Tag = Tag::where("name", "=", $request->input('name'))->first();

        if ($Tag != null) {

            return redirect()->back()
                ->with('Message', 'Tag already same type!');

        } else {

            $tag->name = $request->name;
            $tag->slug = Str::slug($request->name);
            $tag->save();

            return redirect()->route('admin.tags.index')
                ->with('Message', 'Tag succesfully created!');
        }
    }


    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('admin.tags.index')
            ->with('Message', 'Tag successfully deleted!');
    }
}
