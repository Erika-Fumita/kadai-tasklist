@extends('layouts.app')

@section('content')

    <h1 class='mt-4'>詳細ページ</h1>
    <table class='mt-4 table table-bordered'>
        <tr>
            <th style='width:30%'>id</th>
            <td style='width:70%'>{{$task->id}}</td>
        </tr>
         <tr>
            <th>やること</th>
            <td>{{$task->content}}</td>
        </tr>
         
    </table>
    
    {!! link_to_route('tasks.edit', '編集', $task->id, ['class'=>'btn btn-primary'])    !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
    {!! link_to_route('tasks.index', '一覧に戻る', null, ['class'=>'btn btn-light'])    !!}
    

@endsection