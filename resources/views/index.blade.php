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
<body>
<div class="container mt-5">
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

    <div class="row">
        <div class="col-3">
            <button class="btn btn-success generated-sentence">Generated sentence</button>
        </div>

        <div class="col-3">
            <form action="{{route('download')}}" method="POST">
                @csrf
                <textarea style="display: none" id="txtarea" name="txtarea"></textarea>
                <button class="btn btn-success">Download sentence</button>
            </form>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <p id="new-sentence"></p>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
