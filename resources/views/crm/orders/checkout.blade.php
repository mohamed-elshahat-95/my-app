@extends('Layouts.master')
@section('title', 'Checkout Result')
@section('content')
    <div class="container">
        <h1>Payment Result</h1>
        <p>{{ $result }}</p>
    </div>
@stop()
