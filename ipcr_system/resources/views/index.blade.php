@section('title', 'IPCR System - Sheet')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

@section('main', 'IPCR Sheet')

<x-layout>
    <a href="{{ route('view.po_table') }}" class="btn btn-primary">Task/Job PO Table</a>
    <a href="{{ route('view.sheet') }}" class="btn btn-secondary">IPCR Sheet</a>
</x-layout>