@extends ('layout')

@section('content')

        <div class="row justify-content-center">
            <div class="col-6">
                <form action="/create/todo" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="todo" placeholder="Create New todo">
                </form>
            </div>
        </div>

        <br>

         @foreach ($todos as $todo)
            {{ $todo->todo }}
           <hr>
         @endforeach
@stop
