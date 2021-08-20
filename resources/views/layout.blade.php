<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-08-18 00:19:31
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-08-20 20:37:24
 */
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <div>
            <!-- A grey horizontal navbar that becomes vertical on small screens -->
            <nav class="navbar navbar-expand-sm bg-dark">
                <!-- Brand -->
                <a class="navbar-brand" href="{{ route('index') }}">Task App</a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Home</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('task.create') }}">New Task</a>
                </li>
                </ul>

            </nav>
        </div>
    </div>

    <div class="container p-5">
        @yield('main-content')
    </div>
</body>
</html>
