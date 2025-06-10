@section('title', 'IPCR System - Sheet')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

@section('main', 'IPCR Sheet')

<x-layout>
    <div class="dark:text-white text-lg mb-4">
        <b><u>{{ Auth::user()->name }}, POSITION, DIVISION, OFFICE,</u></b> 
        commits to deliver and agree to be rated on the attainment of the following targets in accordance with the indicated 
        measures for the period <b>Month to Month YEAR.</b>
    </div>
    <div class="mb-4 dark:text-white">
        <ul>
            @forelse (Auth::user()->performance_tasks as $task)
                <li>{{ $task->description }}</li>
            @empty
                <li>No task selected.</li>
            @endforelse
        </ul>
    </div>
</x-layout>