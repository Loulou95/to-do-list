<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLP To-Do</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
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
                    <p><span class="task-span">#</span>Task</p>
                    @if (isset($tasks))
                        @foreach($tasks as $task)
                            <div class="">
                                <div class="task-item">
                                    <p>{{$task->name}}</p>
                                    <div class="task-action">
                                        <div class="">
                                            <form action="/delete-task/{{ $task->id }}" method="POST">
                                                {{ csrf_field() }}
                                                <button type="submit">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                        <div class="">
                                            <form action="/tasks/{{ $task->id }}" method="POST">
                                                {{ csrf_field() }}
                                                <button type="submit">
                                                    Update
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
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
</div>

</body>
</html>
