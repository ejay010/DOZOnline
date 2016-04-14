@extends('layout')
@section('content')
        <div class="container">
            <div class="content">
                <div class="title">Add new Candidate</div>
                <hr>
                {!! Form::open(['route' => 'saveCandidate']) !!}
                {!! Form::label('fname', 'First Name: ') !!}
                {!! Form::text('fname', null, ['class' => 'form-control', 'required']) !!}
                {!! Form::label('lname', 'Last Name: ') !!}
                {!! Form::text('lname', null, ['class' => 'form-control', 'required']) !!}
                {!! Form::label('home', 'Home Number: ') !!}
                {!! Form::text('home', null, ['class' => 'form-control']) !!}
                {!! Form::label('cell', 'Cell Number: ') !!}
                {!! Form::text('cell', null, ['class' => 'form-control', 'required']) !!}
                {!! Form::label('email', 'Email: ') !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                {!! Form::label('address', 'Address: ') !!}
                {!! Form::text('address', null, ['class' => 'form-control', 'required']) !!}
                {!! Form::label('dob', 'Date of birth: ') !!}
                {!! Form::date('dob', null, ['class' => 'form-control', 'required']) !!}
                {!! Form::label('twiterId', 'Twitter ID: ') !!}
                {!! Form::text('twiterId', null, ['class' => 'form-control']) !!}
                {!! Form::label('facebookID', 'Facebook ID: ') !!}
                {!! Form::text('facebookID', null, ['class' => 'form-control']) !!}
                {!! Form::label('anniversary', 'Anniversary: ') !!}
                {!! Form::date('anniversary', null, ['class' => 'form-control']) !!}
                {!! Form::label('notes', 'Notes: ') !!}
                {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
                <hr/>
                {!! Form::submit('Save', ['class' => 'btn btn-primary col-lg-12']) !!}
                {!! Form::close() !!}
            </div>
        </div>
@stop
