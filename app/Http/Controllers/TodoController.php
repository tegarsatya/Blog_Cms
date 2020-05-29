<?php

namespace App\Http\Controllers;
use App\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index ()
    {
        $todos = Todo::all();
        return view('todo')->with('todos', $todos);
    }

    public function store(Request $request)
    {
        $todo = new Todo;
        $todo->todo = $request->todo;
        $todo->save();
        return redirect()->back();
    }
}
