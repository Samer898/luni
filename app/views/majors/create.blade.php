@extends('layouts.master')

@section('content')
    {{ Form::open(array('action' => 'MajorsController@store')) }}

    	<p>
    		{{ Form::label('name') }} {{ Form::text('name') }}
    	</p>

    	<p>
			{{ Form::label('degree') }}
    		{{ Form::select('degree', array(
    			'Bachelors' => 'Bachelors',
    			'Diplome' => 'Diplome'
    		)) }}
    	</p>

    	<p>
    		{{ Form::label('hour price'); }} {{ Form::input('text', 'hour_price') }}
    	</p>

    	<p>
    		{{ Form::submit('Submit') }}
    	</p>

    {{ Form::close() }}
@endsection