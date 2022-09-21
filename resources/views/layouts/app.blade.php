<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @livewireStyles
    <style>
        .btn-primary{
            border-color: #312E81;
            background-color:#5B21B6; 
        }
        .btn-primary:hover{
            background-color:#4338CA; 
        }
    </style>
</head>

<body>

    {{ $slot }}


    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    @livewireScripts
</body>

</html>
