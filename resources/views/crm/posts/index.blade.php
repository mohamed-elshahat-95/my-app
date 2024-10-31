@extends('Layouts.master')
@section('title', 'Posts Page')
@section('content')
    <div class="container">
        <div class="row align-items-start">
            <h4><small>RECENT POSTS</small></h4>
            <hr>
            @foreach ($posts as $post)
                <div class="col-4">
                    <div style="padding: 10px">
                        <h3>{{ $post->title }}</h3>
                        <h5><span class="glyphicon glyphicon-time"></span> Post by {{ $post->creator->name }},
                            {{ $post->created_at }}.</h5>
                        <p>{{ $post->description }}</p>
                        <h5>Leave a Comment:</h5>
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" required></textarea>
                            </div>
                            <br />
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop()
@section('scripts')
    <script src=""></script>
@stop()
