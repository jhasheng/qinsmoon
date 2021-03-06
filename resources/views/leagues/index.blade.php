@extends('layouts.app')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>League Name</th>
            <th>League Level</th>
            <th>Server Name</th>
            <th>Server No.</th>
            <th colspan="2"><a href="{{ URL::route('leagues.create') }}" class="btn btn-primary btn-block">Create</a></th>
        </tr>
        </thead>
        <tbody>
        @foreach($leagues as $league)
            <tr>
                <td>{{ $league->uniqid }}</td>
                <td>{{ $league->name }}</td>
                <td>{{ $league->level }}</td>
                <td>{{ $league->server_name }}</td>
                <td>{{ $league->server_no }}</td>
                <td width="80"><a class="btn btn-xs btn-primary" href="{{ route('leagues.edit', $league->lid) }}">Edit</a></td>
                <td width="80">{!! Form::open(['route' => ['leagues.destroy', $league->lid], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-xs btn-danger', 'onclick' => 'return confirm("Are you sure?");']) !!}
                    {!!  Form::close() !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $leagues->render() !!}

@stop