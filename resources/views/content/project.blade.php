@extends('main')

@section('content')
    <div>Total records: {{$totalCount}}</div>
    <div>Project:</div>
    <table style="border: solid px black">
        @foreach($projects as $project)
            {{$project['name']}}
           {{$project['client']['name']}}}
          {{  sizeOf($project['connection']) }}

        @endforeach

    </table>

@endsection

@section('title', trans('app.project'))
