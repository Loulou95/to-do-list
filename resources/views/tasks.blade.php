<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLP To-Do</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<div class="main-content">
    <div class="mlp-logo" id="app">
        <img src="/assets/logo.png">
        <div class="content">
            <v-task></v-task>
            <div class="content-right">
                <div class="task-list">
                    <div class="task-title">
                        <p><span class="task-span">#</span>Task</p>
                    </div>
                        @if (isset($tasks))
                            @foreach($tasks as $task)
                                <div class="">
                                    <div class="task-item">
                                        @if($task->status === 1)
                                            <p class="complete">
                                                {{$task->name}}
                                            </p>
                                        @else
                                            <p class="">{{$task->name}}</p>
                                        @endif
                                        <div class="task-action">
                                            <div class="">
                                                <form action="/update-task/{{ $task->id }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="complete-icon">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="">
                                                <form action="/delete-task/{{ $task->id }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="delete-icon">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        <div class="copyright">
            <p>Copyright © 2020All Rights Reserved</p>
        </div>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
</div>

</body>
</html>
