@extends('layouts.app')

@section('content')

    @if(Auth::check())

        @include('tasks.tasks')
    @else

        <div class='mt-4'>
            <div class='jumbotron text-center'>
                <h1 class='mb-4'>Task List</h1>
                {!! Form::open(['route' => 'login', 'method' => 'get']) !!}
                    {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
                <p>or {!! link_to_route('signup.get', 'Signup') !!} </p>
            </div>
        </div>
        
        @endif
    

@endsection