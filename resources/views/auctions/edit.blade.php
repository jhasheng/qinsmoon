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

    {!! Form::model($auction, ['route' => ['auctions.update', $auction->aid], 'method' => 'PATCH']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('min_point', 'Point min.') !!}
        {!! Form::text('min_point', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('max_point', 'Point max.') !!}
        {!! Form::text('max_point', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('step_point', 'Point step') !!}
        {!! Form::text('step_point', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        <div class="checkbox">
            <label for="status">
                {!! Form::checkbox('status', 1, null, []) !!} Enable
            </label>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('start_at', 'Start Time') !!}
        {!! Form::date('start_at', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('end_at', 'End Time') !!}
        {!! Form::date('end_at', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@stop