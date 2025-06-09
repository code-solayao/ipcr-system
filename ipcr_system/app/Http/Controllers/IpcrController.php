<?php

namespace App\Http\Controllers;

use App\Models\PerformanceTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function view_sheet() 
    {
        $tasks = session('tasks', []);

        return view('ipcr-sheet', compact('tasks'));
    }

    public function select_tasks(Request $request) 
    {
        $tasks = $request->input('tasks', []);
        
        $username = Auth::user();

        $username->performance_tasks()->attach($tasks ?? []);

        session(['tasks' => $tasks]);

        return redirect()->route('view.sheet');
        // return view('ipcr-sheet', compact('tasks'));
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
