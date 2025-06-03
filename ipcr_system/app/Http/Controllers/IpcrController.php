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
        return view('performance-objectives');
    }

    public function view_sheet() {
        return view('ipcr-sheet');
    }

    public function submit_tasks(Request $request) 
    {
        $tasks = $request->input('checkBox');
        return view('ipcr-sheet', compact('tasks'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            'title' => 'required'
        ]);
        PerformanceTask::create($request->only('title'));

        return redirect()->back();
    }

    public function update(Request $request, PerformanceTask $task) 
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
