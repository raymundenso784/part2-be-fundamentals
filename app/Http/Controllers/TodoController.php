<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        // SELECT * FROM todos;
        // return Todo::all();
        return response()->json(['data' => Todo::get()]);
    }

    public function show(){
        // SELECT * FROM todos WHERE id = 2;
        return Todo::where('id', 2)->first();
    }

    public function store(Request $request) {
        return Todo::create(['task' => $request->get('task')]);
    }

    public function sampleStore() {
        // INSERT INTO ('task')
        // VALUES ('New Task');

        // $todo = new Todo;
        // $todo->task = 'New Task';
        // $todo->save();
        // return $todo;

        return Todo::create(['task' => 'New Task']);
    }

    public function update() {
        // UPDATE SET 'task' = 'Updated Task'
        // FROM todos WHERE id = 2
        $todo = Todo::where('id',2)->first();
        $todo->update(['task' => 'Updated Task']);

        return Todo::where('id',2)->first();
    }

    public function destroy(Request $request){
        $id = $request->id;
        Todo::where('id',$id)->delete();

        return response()->json(['message' => 'Sucess']);
    }

    public function sampleDestroy(){
        // DELETE FROM todos WHERE id = 1
        Todo::where('id',1)->delete();

        $todo = Todo::where('id', 1)->first();

        if(is_null($todo)) {
            echo 'Deleted';
        }
    }
}
