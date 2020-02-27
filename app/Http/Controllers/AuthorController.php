<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    //displays a form to create a new author
    public function create()
    {
        $author = new Author;
        $author->name = 'Some author';
        //  /resources/views/admin/author/edit.blade.php
        return view('admin.author.edit', compact('author'));
    }

    //inserts a new author into the DB
    public function store(Request $request)
    {
        // create a new object Author
        $author = new Author;
        // fill in the new object from the request
        // $request = request(); // another wat of getting the Request object
        $author->name = $request->input('name');
        // store the filled object into the DB
        $author->save();
        // redirect somewhere
        return redirect('author/'.$author->id.'/edit');
    }

    // to display form to edit an existing author record
    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('admin.author.edit', compact('author'));
    }

    // updates existing record in the DB
    public function update(Request $request, $id)
    {
        // finds the existing object Author
        $author = Author::findOrFail($id);
        // $request = request(); // another wat of getting the Request object
        $author->name = $request->input('name');
        // store the filled object into the DB
        $author->save();
        // redirect somewhere
        return redirect('author/'.$author->id.'/edit');
    }
}
