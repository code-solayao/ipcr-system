@section('title', 'Performance Objectives - IPCR System')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

@section('main', 'Performance Objectives List')

<x-layout>
    <div class="mb-4 p-8 w-auto border-2 rounded-md shadow-md bg-white border-gray-300 text-black dark:bg-gray-700 dark:border-gray-600">
        <form action="{{ route('create.task') }}" method="POST">
            @csrf
            <textarea name="description" id="description" rows="3" class="form-input bg-white" placeholder="Create a new task..." required>{{ old('title') }}</textarea>
            <input type="submit" value="Add Task" class="btn btn-primary" />
        </form>
    </div>
    <ul class="w-auto font-medium border rounded-md bg-white border-gray-200 text-gray-700 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
            @if (count($tasks) == 0)
                <div class="p-5">
                    <h1>No available tasks</h1>
                </div>
            @else
                <div class="p-5">
                    <h1>Tasks / Jobs</h1>
                </div>
                <form action="{{ route('select.tasks') }}" method="POST">
                    @csrf
                    @foreach ($tasks as $task)
                        <li class="w-full border-b rounded-t-lg border-gray-200 dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <label class="py-3 ms-2">
                                    <input type="checkbox" name="tasks[]" id="tasks[]" value="{{ $task->id }}" class="w-4 h-4" />
                                    <span class="ml-2">
                                        {{ $task->description }}
                                    </span>
                                </label>

                            </div>
                        </li>
                    @endforeach
                    <div class="mt-5">
                        <input type="submit" value="Submit" class="btn btn-primary mx-5 mb-5" />
                    </div>
                </form>
            @endif
        </ul>
</x-layout>