@extends('main')

@section('content')
    <div>Total records: {{$totalCount}}</div>
    <div>Clients:</div>
    <ul>
        @foreach($clients as $client)
        <li>{{$client['name']}}
            @foreach($client['project'] as $project)
                <li>{{$project['name']}}</li>
            @endforeach
        </li>
        @endforeach
    </ul>
@endsection

@section('title',trans('app.clients'))
