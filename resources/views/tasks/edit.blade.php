@extends('layouts.app')

@section('content')
    <h1 class='mt-4'>編集ページ</h1>
    <div class='mt-4 row'>
        <div class='col-8'>
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class='form-group'>
                    {!! Form::label('content', 'やること:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control'] )!!}
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::Input('text', 'status', null, ['class' => 'form-control'] )!!}
                </div>
                {!! Form::submit('編集する', ['class' => 'btn btn-primary mt-3']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    
    
@endsection