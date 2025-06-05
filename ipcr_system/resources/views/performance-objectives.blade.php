@section('title', 'Performance Objectives - IPCR System')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

@section('main', 'Performance Objectives List')

<x-layout>
    <div class="mb-4 border-2 border-gray-300 rounded-md shadow-md p-8">
        <form action="{{ route('create.task') }}" method="POST">
            @csrf
            <textarea name="description" id="description" rows="3" class="form-input" placeholder="Create a new task..." required>{{ old('title') }}</textarea>
            <input type="submit" value="Add Task" class="btn btn-primary" />
        </form>
    </div>
    <div class="border-2 border-gray-300 rounded-md shadow-md p-8">
        <ul>
            @if (count($tasks) == 0)
                <h1 class="text-gray-500">No available tasks</h1>
            @else
                <form action="{{ route('collect.tasks') }}" method="POST">
                    @csrf
                    @foreach ($tasks as $task)
                        <li>
                            <label for="tasks[]">
                                <input type="checkbox" name="tasks[]" id="tasks[]" value="{{ $task->id }}" />
                                <span class="ml-2 text-gray-700">
                                    {{ $task->description }}
                                </span>
                            </label>
                        </li>
                    @endforeach
                    <div class="mt-5">
                        <input type="submit" value="Submit" class="btn btn-primary" />
                    </div>
                </form>
            @endif
        </ul>
    </div>
</x-layout>