@extends('layouts.app')

@section('content')

    <div class='text-center mt-4'>
        <h1>Log in</h1>
    </div>

    <div class='row'>
        <div class='col-sm-6 offset-sm-3'>
            {!! Form::open(['route' => 'login.post']) !!}
               
                <div class='form-group'>
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', old('email') , ['class' => 'form-control']) !!}
                </div>
                <div class='form-group'>
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password',['class' => 'form-control']) !!}
                </div>
               
                {!! Form::submit('Login', ['class' => 'btn btn-primary btn-block']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>

    

@endsection