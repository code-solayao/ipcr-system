<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPCR System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="text-center mt-10">
        <h1 class="text-4xl mb-10 font-mono">IPCR System</h1>
        <a href="{{ route('view.po_table') }}" class="btn btn-primary">Task/Job PO Table</a>
        <a href="{{ route('view.sheet') }}" class="btn btn-secondary">IPCR Sheet</a>
    </div>

    <div class="px-36 mt-10">
        <h1 class="text-3xl font-bold mb-5">To do list</h1>

        <form action="/tasks" method="POST">
            @csrf
            <input type="text" name="title" id="title" class="form-input mb-3" placeholder="New task..." required />
            <input type="submit" value="Add" class="btn btn-primary" />
        </form>

        <ul>
            @foreach ($tasks as $task)
                <li>
                    <form action="/tasks/{{ $task->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="submit" class="btn btn-primary" 
                        value={{ $task->is_completed ? "Undo" : "Complete" }} />
                    </form>

                    {{ $task->title }}
                    @if ($task->is_completed)
                        <strong>(Done)</strong>
                    @endif

                    <form action="/tasks/{{ $task->id }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger" />
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>