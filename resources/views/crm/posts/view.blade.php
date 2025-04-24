@extends('Layouts.master')
@section('title', 'View Post')
@section('content')
    <div class="container">
        <p><b> View Post # {{ $post->id }}</b></p>
        <div class="row">
            <label class="form-label">Title:</label>
            <input type="text" class="form-control" value="{{ $post->title }}" readonly>
        </div>
        <div class="row">
            <label class="form-label">Contact No:</label>
            <input type="text" class="form-control" value="{{ $post->contact_phone_number }}" readonly>
        </div>
        <div class="row">
            <label class="form-label">Description:</label>
            <textarea class="form-control" readonly>{{ $post->description }}</textarea>
        </div>
    </div>
@stop()

@section('scripts')
    <script></script>
@stop()
