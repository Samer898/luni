@extends('layouts.master')

@section('content')

    <table class="table">

        <thead>
            <tr>
                <th>Semester #</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($semesters as $semester)
        <tr>
            <td>{{ $semester->semester }}</td>
            <td>{{ $semester->year }}</td>
            <td>{{ link_to_route('semesters.edit', 'Edit', $parameters = array('id'=> $semester->id), $attributes = array()); }}</td>
            <td>{{ link_to_route('semesters.destroy', 'Delete', $parameters = array('id'=> $semester->id), $attributes = array('class'=>'text-error')); }}</td>
        </tr>
    @endforeach
        </tbody>
    <table>

    <p>
        {{ link_to_route('semesters.create', '+ Add new Semester', array(), array('class' => 'btn btn-success')) }}
    </p>

@endsection