
@extends('layouts.app')
@section('title', Auth::user()->name .' - Dashboard' )


@section('content')
    <h1>Welcome to Dashboard!!</h1>
@endsection
