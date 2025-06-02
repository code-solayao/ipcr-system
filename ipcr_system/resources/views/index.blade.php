<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPCR System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="px-36 mt-36">
        <form action="{{ route('post.test') }}" method="POST">
            @csrf
            <label for="checkBox">
                <input type="checkbox" name="checkBox" id="checkBox" value="Prepares communication to all relevant stakeholders on the deployment of researches/studies/publications (e.g. LMIRs, TVET Briefs, SETG)" />
                <span class="ml-2 text-gray-700">
                    Prepares communication to all relevant stakeholders on the deployment of researches/
                    studies/ publications (e.g. LMIRs, TVET Briefs, SETG)
                </span>
            </label>
            <div>
                <input type="submit" value="Submit" class="btn btn-primary" />
            </div>
        </form>
    </div>
</body>
</html>