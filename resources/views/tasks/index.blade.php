@extends('layouts.app')

@section('content')

    <h2>To Do Lists</h2>
    
    @if (count($tasks)>0)
        <table class='table'>
            <thead class='table-light'>
                <tr>
                    <th>id</th>
                    <th>to do</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <!--<td>{{$task->id}}</td>-->
                        <td>{!! link_to_route('tasks.show', $task->id, $task->id, [] ) !!}</td>
                        <td>{{$task->content}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('tasks.create', '新規作成', [], ['class' => 'btn btn-primary']) !!}
    {{--{!! link_to_route('tasks.destroy', '削除', [], ['class' => 'btn btn-danger']) !!} --}}

@endsection