@section('title', 'IPCR System - Sheet')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

@section('main', 'IPCR Sheet')

<x-layout>
    <ul>
        @forelse ($tasks as $task)
            <li>{{ $task }}</li>
        @empty
            <li>No task selected.</li>
        @endforelse
    </ul>
</x-layout>