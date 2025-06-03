@section('title', 'IPCR System - Sheet')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

@section('main', 'IPCR Sheet')

<x-layout>
    <p>
        <b>Submitted: </b>
        @if (empty($tasks))
            Walang laman
        @else
            {{ $tasks }}
        @endif
    </p>
</x-layout>