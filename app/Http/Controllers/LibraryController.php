<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $libraries = Library::all();
        return view('libraries.index', compact('libraries'));
    }

    public function create()
    {
        return view('libraries.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'Reader'=>'required',
            'Bookname'=>'required',
            'Book_no'=>'required',
            'Days_allowed'=>'required',

        ]);

        Library::create($request->all());

        return redirect()->route('libraries.index')
          ->with('success','Book added Successfully');
    }

    public function show(Library $library)
    {
        return view('libraries.show',compact('library'));
    }

    public function edit(Library $library)
    {
        return view('libraries.edit',compact('library'));
    }

    public function update(Request $request, Library $library)
    {
        $request->validate([


        ]);

        $library->update($request->all());

        return redirect()->route('libraries.index')
          ->with('success','Book Updated Successfully');
    }

    public function destroy(Library $library)
    {
        $library->delete();

        return redirect()->route('libraries.index')
          ->with('success','Book Deleted Successfully');
    }
}
