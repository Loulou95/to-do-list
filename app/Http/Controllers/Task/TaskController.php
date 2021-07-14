<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use function Sodium\compare;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('tasks', ["tasks"=>$tasks]);
    }
    public function store(Request $request) {
        Task::create(['name' => $request['name']]);
        return redirect('/');
    }

    public function delete($id) {
        $task = Task::where('id', $id);
        $task->delete();
        return redirect('/');
    }

    public function update() {

    }
}
