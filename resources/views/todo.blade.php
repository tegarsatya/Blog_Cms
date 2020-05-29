@extends ('layout')

@section('content')
        <br><br><br>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="/create/todo" method="post">
                    {{ csrf_field() }}
                    <input type="text" class="form-contro input-lg" name="todo" placeholder="Create New todo">
                </form>
            </div>
        </div>
        <br>

        @foreach ($todos as $todo)
            {{ $todo->todo }} <a href="{{route('todo.delete', ['id'=> $todo->id])  }}" class="btn btn-danger">Del</a>
            <a href="{{route('todo.update', ['id'=> $todo->id])  }}" class="btn btn-dark">update</a>

        @if (!$todo->completed)
            <a href="{{route('task.completed', ['id'=> $todo->id])  }}" class="btn btn-dark">Mark A Done</a>
        @else
                <span class="text-success">Task In done</span>
        @endif
            <hr>

        @endforeach
@stop
