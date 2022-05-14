@extends('layouts.app')
@section('content')
    <h1>Admin Page</h1>
    <h2>Welcome {{ Auth::user()->name }}!</h2>
    @endsection

