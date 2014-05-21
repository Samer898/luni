@extends('layouts.master')

@section('content')
    {{ Form::open(array('action' => 'CoursesController@store')) }}

        	<p>
        		{{ Form::label('num') }} {{ Form::text('num') }}
        	</p>

        	<p>
                {{ Form::label('section') }} {{ Form::text('section') }}
            </p>

        	<p>
                {{ Form::label('name') }} {{ Form::text('name') }}
            </p>

            <p>
                {{ Form::label('hours') }} {{ Form::text('hours') }}
            </p>

            <p>
                {{ Form::label('start_time') }} {{ Form::text('start_time') }}
            </p>

            <p>
                {{ Form::label('end_time') }} {{ Form::text('end_time') }}
            </p>
             
        	<p>
        		{{ Form::label('days'); }} {{ Form::input('text', 'days') }}
        	</p>

            <p>
                {{ Form::label('prereq'); }} {{ Form::input('text', 'prereq') }}
            </p>

            <p>
                {{ Form::label('room'); }} {{ Form::input('text', 'room') }}
            </p>


            <p>
                {{ Form::label('type') }}
                {{ Form::select('type', array(
                    'uni_mand' => 'uni mandatory',
                    'uni_opt' => 'uni optional',
                    'col_mand' => 'col mandatory',
                    'col_opt' => 'col optional'
                )) }}
            </p>

        	<p>
        		{{ Form::submit('Submit') }}
        	</p>

    {{ Form::close() }}
@endsection