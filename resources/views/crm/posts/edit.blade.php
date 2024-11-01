@extends('Layouts.master')
@section('title', 'Edit Post')
@section('content')
    <div class="container">
        <p><b> Edit Post # {{ $post->id }}</b></p>
        <form class="row g-3" method="POST" action="/posts/update/{{ $post->id }}">
            @csrf
            <div class="col-md-6">
                <label class="form-label">Title:</label>
                <input type="text" class="form-control" placeholder="Enter Title" name="title" value="{{ $post->title }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Contact No:</label>
                <input type="text" class="form-control" placeholder="Enter Contact No." name="contact_phone_number" value="{{ $post->contact_phone_number }}">
            </div>
            <div class="col-12">
                <label class="form-label">Description:</label>
                <textarea class="form-control" placeholder="Enter Description" name="description">{{ $post->description }}</textarea>
            </div>
            <div class="col-12" style="text-align: center">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
@stop()
@section('scripts')
    <script></script>
@stop()
