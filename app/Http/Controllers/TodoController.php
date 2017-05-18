<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Todo;
use App\Model\TodoCollection;

class TodoController extends Controller
{
    public function index()
    {
        $todos = [
            ['title' => 'Attend the design meeting'],
            ['title' => 'Buy some fruits'],
            ['title' => 'Fix the bugs'],
        ];

        foreach ($todos as $todo) {
            $ret = Todo::create([
                'title' => $todo['title']
            ]);
        }

        $todoCollection = new TodoCollection;

        return response()->json($todoCollection->toArray());
    }
}
