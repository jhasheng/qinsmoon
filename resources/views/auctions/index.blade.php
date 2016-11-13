@extends('layouts.app')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Point min.</th>
            <th>Point max.</th>
            <th>Point step</th>
            <th>Status</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th colspan="2"><a href="{{ route('auctions.create') }}" class="btn btn-primary btn-block">Create</a></th>
        </tr>
        </thead>
        <tbody>
        @foreach($auctions as $auction)
            <tr>
                <td>{{ $auction->aid }}</td>
                <td>{{ $auction->name }}</td>
                <td>{{ $auction->min_point }}</td>
                <td>{{ $auction->max_point }}</td>
                <td>{{ $auction->step_point }}</td>
                <td>{{ $auction->status }}</td>
                <td>{{ $auction->start_at }}</td>
                <td>{{ $auction->end_at }}</td>
                <td width="80"><a class="btn btn-xs btn-primary" href="{{ route('auctions.edit', $auction->aid) }}">Edit</a></td>
                <td width="80">{!! Form::open(['route' => ['auctions.destroy', $auction->aid], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-xs btn-danger', 'onclick' => 'return confirm("Are you sure?");']) !!}
                    {!!  Form::close() !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $auctions->render() !!}

@stop