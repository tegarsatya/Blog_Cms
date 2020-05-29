@extends ('layout')

@section('content')
        <br><br><br>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="{{route('todo.save', ['id'=> $todo->id]) }}" method="post">
                    {{ csrf_field() }}
                    <input type="text" class="form-contro input-lg" name="todo" value="{{ $todo->todo }}" placeholder="Create New todo">
                </form>
            </div>
        </div>
@stop
