@extends('layouts.master')

@section('content')

    <h2> {{ $semester->semester }} - {{ $semester->year }} </h2>


    {{ Form::open(array('route' => array('semesters.destroy', $semester->id), 'method' => 'DELETE')) }}
        {{ Form::submit('Delete this Semester', array('class' => 'btn btn-warning')) }}
    {{ Form::close() }}

@endsection