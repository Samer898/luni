@extends('layouts.master')

@section('content')
    <h2>{{ $course->name }}</h2>

    <p> Course number: {{ $course->num }} </p>

    <p> Course section: {{ $course->section }} </p>

    <p> Course room: {{ $course->room }} </p>

    <p> Course type: {{ $course->type }} </p>

    <p> Course hours: {{ $course->hours }} </p>

    <p>Course days: {{ $course->days }}</p>

    <p> Time from: {{ $course->start_time }} <i>to</i> {{ $course->end_time }} </p>
    
    <p>Course prereq: {{ $course->prereq }}</p>

    {{ Form::open(array('route' => array('courses.destroy', $course->id), 'method' => 'DELETE')) }}
        {{ Form::submit('Delete this Course', array('class' => 'btn btn-warning')) }}
    {{ Form::close() }}
@endsection