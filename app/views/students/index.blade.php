@extends('layouts.master')

@section('content')

    <table class="table">

        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Major</th>
                <th>Uni ID</th>
                <th>National ID</th>
                <th>Date Of Birth</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->first_name }}</td>
            <td>{{ $student->last_name }}</td>
            <td>{{ $student->major_id }}</td>
            <td>{{ $student->uni_id }}</td>
            <td>{{ $student->nati_id }}</td>
            <td>{{ $student->date_of_birth }}</td>
            <td>{{ link_to_route('students.edit', 'Edit', $parameters = array('id'=> $student->id), $attributes = array()); }}</td>
            <td>{{ link_to_route('students.destroy', 'Delete', $parameters = array('id'=> $student->id), $attributes = array('class'=>'text-error')); }}</td>
        </tr>
    @endforeach
        </tbody>
    <table>

    <p>
        {{ link_to_route('students.create', '+ Add new Student', array(), array('class' => 'btn btn-success')) }}
    </p>
@endsection