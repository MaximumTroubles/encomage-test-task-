@extends('layouts.app')

@section('content')
    {!! Form::open( ['url' => '/admin/users/', 'file' => true ,'method' => 'POST']) !!}
        @include('admin.users._form')
    {!! Form::close() !!}
@endsection
