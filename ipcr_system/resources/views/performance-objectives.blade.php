@section('title', 'Performance Objectives - IPCR System')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

@section('main', 'Performance Objectives List')

<x-layout>
    <div class="mb-4 border-2 border-gray-300 rounded-md shadow-md p-8">
        <form action="/tasks" method="POST">
            @csrf
            <textarea name="title" id="title" rows="3" class="form-input" placeholder="Create a new task..." required>{{ old('title') }}</textarea>
            <input type="submit" value="Add Task" class="btn btn-primary" />
        </form>
    </div>
    <div class="border-2 border-gray-300 rounded-md shadow-md p-8">
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <form action="{{ route('collect.tasks') }}" method="POST">
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
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>