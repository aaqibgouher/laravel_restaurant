<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESTAURANT</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        table {
            counter-reset: tableCount;     
        }
        .counterCell:before {              
            content: counter(tableCount); 
            counter-increment: tableCount; 
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        @yield('content')
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>