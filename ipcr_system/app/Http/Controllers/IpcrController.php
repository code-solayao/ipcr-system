<?php

namespace App\Http\Controllers;

use App\Models\PerformanceTask;
use Illuminate\Http\Request;

class IpcrController extends Controller
{
    public function index() {
        $tasks = PerformanceTask::all();
        return view('index', compact('tasks'));
    }

    public function view_po_table() {
        $tasks = PerformanceTask::all();
        return view('performance-objectives', compact('tasks'));
    }

    public function view_sheet() {
        return view('ipcr-sheet');
    }

    public function collect_tasks(Request $request) 
    {
        $validated = $request->validate([
            'tasks' => 'nullable|array',
            'tasks.*' => 'exists:tasks,id',
        ]);

        return view('ipcr-sheet', compact('tasks'));
    }

    public function create(Request $request) 
    {
        $request->validate([
            'description' => 'required'
        ]);
        PerformanceTask::create($request->only('description'));

        return redirect()->back();
    }

    public function update(PerformanceTask $task, Request $request) 
    {
        $task->update([
            'is_completed' => !$task->is_completed
        ]);

        return redirect()->back();
    }

    public function destroy(PerformanceTask $task) {
        $task->delete();
        return redirect()->back();
    }
}
