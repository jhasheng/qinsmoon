@extends('layouts.app')

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['route' => 'leagues.store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('uniqid', 'League I.D.') !!}
        {!! Form::text('uniqid', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('server_name', 'Server name') !!}
        {!! Form::text('server_name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('level', 'League level') !!}
        {!! Form::text('level', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('platform', 'Server platform') !!}
        {!! Form::text('platform', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('server_no', 'Server number') !!}
        {!! Form::text('server_no', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
        {{ csrf_field() }}
    </div>

    {!! Form::close() !!}
@stop