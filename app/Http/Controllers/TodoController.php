<?php

namespace App\Http\Controllers;

use stdClass;
use App\Model\Todo;
use Illuminate\Http\Request;
use App\Model\TodoCollection;

class TodoController extends Controller
{
    public function index()
    {
        $todos = new TodoCollection;

        return view('index', compact('todos'));
    }

    public function create()
    {
        $todo = new stdClass;
        $todo->title = '';
        $todo->done = false;

        return view('form', compact('todo'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['done'] = array_pull($data, 'done', false);

        Todo::create($data);

        return redirect(route('todo.index'));
    }

    public function edit($id)
    {
        $todo = Todo::findByPrimaryKey($id);

        return view('form', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::findByPrimaryKey($id);
        $data = $request->all();
        $data['done'] = array_pull($data, 'done', false);
        $todo->update($data);

        return redirect(route('todo.index'));
    }

    public function destroy($id)
    {
        $todo = Todo::findByPrimaryKey($id);
        $todo->delete();

        return redirect(route('todo.index'));
    }
}
