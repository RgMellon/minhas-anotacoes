<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NotesController extends Controller
{
    public function index() {
        $notes = Note::all();
        return view('notes', compact('notes'));
    }

    public function store(Request $request)
    {
        Note::create($request->all());
        return redirect()->back();
    }

    public function all()
    {
        Note::all();
    }
}
