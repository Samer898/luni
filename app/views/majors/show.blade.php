@extends('layouts.master')

@section('content')
    <h2>{{ $major->name }}</h2>

    <p>
        {{ $major->degree }}
    </p>

    <p>
        Price per hour:  {{ $major->hour_price }}
    </p>

    {{ Form::open(array('route' => array('majors.destroy', $major->id), 'method' => 'DELETE')) }}
        {{ Form::submit('Delete this Major', array('class' => 'btn btn-warning')) }}
    {{ Form::close() }}
@endsection