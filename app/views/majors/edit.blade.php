@extends('layouts.master')

@section('content')
    {{ Form::open(array('route' => array('majors.update', $major->id), 'method' => 'PUT')) }}

    	<p>
    		{{ Form::label('name') }} {{ Form::text('name', $major->name) }}
    	</p>

    	<p>
			{{ Form::label('degree') }}
    		{{ Form::select('degree', array(
    			'Bachelors' => 'Bachelors',
    			'Diplome' => 'Diplome'
    		), $major->degree) }}
    	</p>

    	<p>
    		{{ Form::label('hour price'); }} {{ Form::text('hour_price', $major->hour_price) }}
    	</p>

    	<p>
    		{{ Form::button('Submit', array('type' => 'submit', 'class' => 'btn')) }}
    	</p>

    {{ Form::close() }}
@endsection