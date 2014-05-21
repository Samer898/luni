@extends('layouts.master')

@section('content')
    {{ Form::open(array('route' => array('semesters.update', $semester->id), 'method' => 'PUT')) }}

    	<p>
    		{{ Form::label('semester') }} {{ Form::text('semester', $semester->semester) }}
    	</p>

    	<p>
			{{ Form::label('year') }} {{ Form::text('year', $semester->year) }}
    	</p>

    	<p>
    		{{ Form::button('Submit', array('type' => 'submit', 'class' => 'btn')) }}
    	</p>

    {{ Form::close() }}
@endsection