@extends('layouts.master')

@section('content')

    <table class="table">

        <thead>
            <tr>
                <th>Number</th>
                <th>Section</th>
                <th>Name</th>
                <th>Hours</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Course Days</th>
                <th>Prerequisites</th>
                <th>Room</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($courses as $course)
        <tr>
            <td>{{ $course->num }}</td>
            <td>{{ $course->section }}</td>
            <td>{{ $course->name }}</td>
            <td>{{ $course->hours }}</td>
            <td>{{ $course->start_time }}</td>
            <td>{{ $course->end_time }}</td>
            <td>{{ $course->prereq }}</td>
            <td>{{ $course->room }}</td>
            <td>{{ $course->type }}</td>

            <td>{{ link_to_route('courses.edit', 'Edit', $parameters = array('id'=> $course->id), $attributes = array()); }}</td>
            <td>{{ link_to_route('courses.destroy', 'Delete', $parameters = array('id'=> $course->id), $attributes = array('class'=>'text-error')); }}</td>
        </tr>
    @endforeach
        </tbody>
    <table>

    <p>
        {{ link_to_route('courses.create', '+ Add new Course', array(), array('class' => 'btn btn-success')) }}
    </p>
@endsection