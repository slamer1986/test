@extends('layouts.app')

@section('content')
    {{ Form::open() }}
    {{ Form::text('name') }}
    {{ Form::textarea('bio') }}
    {{ Form::selectYear('dob', date('Y') - 80, date('Y')) }}
    {{ Form::close() }}
@endsection
