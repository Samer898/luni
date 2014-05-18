@extends('layouts.master')

@section('content')

    <table class="table">

        <thead>
            <tr>
                <th>Name</th>
                <th>Degree</th>
                <th>Price per Hour</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($majors as $maj)
        <tr>
            <td>{{ $maj->name }}</td>
            <td>{{ $maj->degree }}</td>
            <td>{{ $maj->hour_price }} JOD</td>
            <td>{{ link_to_route('majors.edit', 'Edit', $parameters = array('id'=> $maj->id), $attributes = array()); }}</td>
            <td>{{ link_to_route('majors.destroy', 'Delete', $parameters = array('id'=> $maj->id), $attributes = array('class'=>'text-error')); }}</td>
        </tr>
    @endforeach
        </tbody>
    <table>

    <p>
        {{ link_to_route('majors.create', '+ Add new Major', array(), array('class' => 'btn btn-success')) }}
    </p>
@endsection