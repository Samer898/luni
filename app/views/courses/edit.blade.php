@extends('layouts.master')

@section('content')
    {{ Form::open(array('route' => array('courses.update', $course->id), 'method' => 'PUT')) }}

        	<p>
        		{{ Form::label('num') }} {{ Form::text('num', $course->num) }}
        	</p>

        	<p>
                {{ Form::label('section') }} {{ Form::text('section', $course->section) }}
            </p>

        	<p>
                {{ Form::label('name') }} {{ Form::text('name', $course->name) }}
            </p>

            <p>
                {{ Form::label('hours') }} {{ Form::text('hours', $course->hours) }}
            </p>

            <p>
                {{ Form::label('start_time') }} {{ Form::text('start_time', $course->start_time) }}
            </p>

            <p>
                {{ Form::label('end_time') }} {{ Form::text('end_time', $course->end_time) }}
            </p>
             
        	<p>
        		{{ Form::label('days'); }} {{ Form::input('text', 'days', $course->days) }}
        	</p>

            <p>
                {{ Form::label('prereq'); }} {{ Form::input('text', 'prereq', $course->prereq) }}
            </p>

            <p>
                {{ Form::label('room'); }} {{ Form::input('text', 'room', $course->room) }}
            </p>


            <p>
                {{ Form::label('type') }}
                {{ Form::select('type', array(
                    'uni_mand' => 'uni mandatory',
                    'uni_opt' => 'uni optional',
                    'col_mand' => 'col mandatory',
                    'col_opt' => 'col optional'
                ), $course->type) }}
            </p>

        	<p>
        		{{ Form::submit('Submit') }}
        	</p>

    {{ Form::close() }}
@endsection