<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="d-flex mb-3">
            <input>
            <select class="ms-3">
            </select>
            <button class="btn btn-success ms-2 add-words">Add words</button>
        </div>

        <table class="table table-success table-striped">
            <thead>

            </thead>
            <tbody class="array-name">

            </tbody>
        </table>

        <button class="btn btn-success generated-sentence">Generated sentence</button>
        <div class="container mt-5 mb-5">
            <p id="new-sentence"></p>
        </div>
    </body>
</html>
