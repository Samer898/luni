@extends('layouts.master')

@section('content')

{{ Form::open(array('action' => 'SemestersController@store')) }}

    <p>{{ Form::label('semester') }} {{ Form::text('semester') }} </p>

    <p>{{ Form::label('year') }} {{ Form::text('year') }}</p>

    <p> {{ Form::submit('Submit') }} </p>


{{ Form::close() }}

@endsection