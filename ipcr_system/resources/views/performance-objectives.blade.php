@section('title', 'IPCR System - Performance Objectives')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

@section('main', 'Performance Objectives Table')

<x-layout>
    <div class="mt-5">
        <form action="{{ route('submit.tasks') }}" method="POST">
            @csrf
            <label for="checkBox">
                <input type="checkbox" name="checkBox" id="checkBox" value="Prepares communication to all relevant stakeholders on the deployment of researches/studies/publications (e.g. LMIRs, TVET Briefs, SETG)" />
                <span class="ml-2 text-gray-700">
                    Prepares communication to all relevant stakeholders on the deployment of researches/
                    studies/ publications (e.g. LMIRs, TVET Briefs, SETG)
                </span>
            </label>
            <div class="mt-5">
                <input type="submit" value="Submit" class="btn btn-primary" />
            </div>
        </form>
    </div>
</x-layout>