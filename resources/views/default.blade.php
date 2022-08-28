<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Livewire Wizard</title>
    @livewireStyles
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <link href="{{ asset('wizard.css') }}" rel="stylesheet" id="bootstrap-css">

</head>

<body>
    <div class="container">

        <div class="card">
            <div class="card-header">
                Laravel Livewire Wizard Form Example - ItSolutionStuff.com
            </div>
            <div class="card-body">
                <livewire:wizard />
            </div>
        </div>

    </div>

</body>
@livewireScripts

</html>
