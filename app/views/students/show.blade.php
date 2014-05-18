@extends('layouts.master')

@section('content')
    <h2>{{ $student->first_name }} {{ $student->last_name }} <small>uni ID: {{ $student->uni_id }} | national ID: {{ $student->nati_id }}</small></h2>

    <p>
        {{ $student->date_of_birth }}
    </p>

    {{ Form::open(array('route' => array('students.destroy', $student->id), 'method' => 'DELETE')) }}
        {{ Form::submit('Delete this Student', array('class' => 'btn btn-warning')) }}
    {{ Form::close() }}
@endsection