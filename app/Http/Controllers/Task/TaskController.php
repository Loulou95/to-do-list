<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    public function store(Request $request) {
        Task::create(['name' => $request['name']]);
        Log::info($request);
    }

    public function delete($id) {
        $staff = Task::where('id', $id);
        $staff->delete();
    }

    public function tasks(){
        $task = Task::all();
        return  json_encode(
            [
                'tasks' => $task
            ]
        );
    }

    public function update() {

    }
}
