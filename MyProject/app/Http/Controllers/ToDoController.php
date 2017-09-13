<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoController extends Controller
{

    function GetToDo(){

        $todoList = [
            [ "todo" => "To Do 1", "completed" => false ], 
            [ "todo" => "To Do 2", "completed" => true ], 
            [ "todo" => "To Do 3", "completed" => false ], 
            [ "todo" => "To Do 4", "completed" => true ], 
        ];

        return view('todo', [ "data" => $todoList] );
    }

    function AddToDo(){
        $todoList = [
            [ "todo" => "To Do 1", "completed" => false ], 
            [ "todo" => "To Do 2", "completed" => true ], 
            [ "todo" => "To Do 3", "completed" => false ], 
            [ "todo" => "To Do 4", "completed" => true ],
            [ "todo" => "New To Do", "completed" => false ],
        ];

        return view('todo', [ "data" => $todoList] );
    }

}
