<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPCR System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="text-5xl px-96 mb-56">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos dolore voluptatum, est autem asperiores deleniti officia excepturi libero eius debitis adipisci 
        ullam doloremque eligendi fuga cum ratione optio beatae reprehenderit.
    </h1>
    <form action="#" method="POST" class="text-center">
        @csrf
        <label for="checkBox">
            <input type="checkbox" name="checkBox" id="checkBox" />
            <span class="ml-2 text-gray-700">
                Prepares communication to all relevant stakeholders on the deployment of researches/
                studies/ publications (e.g. LMIRs, TVET Briefs, SETG)
            </span>
        </label>
    </form>
</body>
</html>