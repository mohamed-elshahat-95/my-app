@extends('Layouts.master')
@section('title', 'Add Post')
@section('content')
    <div class="container">
        <p><b> Add New Post </b></p>
        <!-- Display validation errors -->
        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="row g-3" method="POST" action="/posts/create">
            @csrf
            <div class="col-md-6">
                <label class="form-label">Title:</label>
                <input type="text" class="form-control" placeholder="Enter Title" name="title">
                <!-- Display error for name -->
                @error('title')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Contact No:</label>
                <input type="text" class="form-control" placeholder="Enter Contact No." name="contact_phone_number">
            </div>
            <div class="col-12">
                <label class="form-label">Description:</label>
                <textarea class="form-control" placeholder="Enter Description" name="description"></textarea>
            </div>
            <div class="col-12" style="text-align: center">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
@stop()
@section('scripts')
    <script></script>
@stop()
