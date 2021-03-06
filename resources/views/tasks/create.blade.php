@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    <div class="row">
        <div clas="col-6">
            {!! Form::model($task,  ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('status','スタッツ:') !!}
                    {!! Form::text('status',null,['class' => 'from-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content','タスク:') !!}
                    {!! Form::text('content',null,['class' => 'from-control']) !!}
                </div>
                
                {!!Form::submit('登録',['class' =>'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@endsection