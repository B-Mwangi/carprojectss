@extends('layout')
@section('title', "Home")
@section('content')
    {{ auth()-> user()->name}}
@endsection
