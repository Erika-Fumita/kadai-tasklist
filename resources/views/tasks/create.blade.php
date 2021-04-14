@extends('layouts.app')

@section('content')

    <h1 class='mt-4'>To Do 作成</h1>
    <div class='mt-4 row'>
        <div class='col-8'>
             {!! Form::model($task, ['route' => 'tasks.store']) !!}
            <div class='form-group'>
                {!! Form::label('content', 'やること:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
                {!! Form::submit('投稿') !!}
            {!! Form::close() !!}
        </div>
    </div>


@endsection