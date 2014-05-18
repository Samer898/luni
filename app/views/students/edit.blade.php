@extends('layouts.master')

@section('content')
    {{ Form::open(array('action' => 'StudentsController@store')) }}

        <div class="control-group">
            {{ Form::label('first_name', 'First Name') }}
            <div class="controls">
                {{ Form::text('first_name', null, array('class' => 'form-control')) }}
            </div>
        </div>

        <div class="control-group">
            {{ Form::label('last_name', 'Last Name') }}
            <div class="controls">
                {{ Form::text('last_name', null, array('class' => 'form-control')) }}
            </div>
        </div>

        <div class="control-group">
            {{ Form::label('major_id', 'Major') }}
            <div class="controls">
                <select name="major_id" id="major_id">
                    @foreach ($majors as $maj)
                        <option value="{{ $maj->id }}">{{ $maj->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="control-group">
            {{ Form::label('uni_id', 'Uni ID') }}
            <div class="controls">
                {{ Form::text('uni_id', null, array('class' => 'form-control')) }}
            </div>
        </div>

        <div class="control-group">
            {{ Form::label('nati_id', 'National ID') }}
            <div class="controls">
                {{ Form::text('nati_id', null, array('class' => 'form-control')) }}
            </div>
        </div>

        <div class="control-group">
            {{ Form::label('date_of_birth', 'Date of birth (yyyy-mm-dd)') }}
            <div class="controls">
                {{ Form::text('date_of_birth', null, array('class' => 'form-control')) }}
            </div>
        </div>


    	<p>
    		{{ Form::button('Submit', array('type' => 'submit', 'class' => 'btn')) }}
    	</p>

    {{ Form::close() }}
@endsection