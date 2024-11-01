@extends('Layouts.master')
@section('title', 'Posts Page')
@section('content')
    <div class="container">
        <div class="row align-items-start">
            <span style="text-align: center"><b>RECENT POSTS</b></span><br /><br />
            <a href="posts/add" target="_blank" class="btn btn-sm btn-primary">Add new post ... </a>

            <hr>
            <table class="table table-striped table-hover table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Contact No.</th>
                        <th scope="col">Creator</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->contact_phone_number }}</td>
                            <td>{{ $post->creator->name ?? '' }}</td>
                            <td>
                                <a href="posts/view/{{ $post->id }}" target="_blank" class="btn btn-sm btn-primary"
                                    style="width: 100%; margin-bottom: 2px;">View</a><br />
                                <a href="posts/edit/{{ $post->id }}" target="_blank" class="btn btn-sm btn-success"
                                    style="width: 100%; margin-bottom: 2px;">Edit</a><br />
                                <button class="btn btn-sm btn-danger" style="width: 100%; margin-bottom: 2px;"
                                    onclick="deletePost({{ $post->id }})">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop()
@section('scripts')
    <script>
        function deletePost(id) {
            $.ajax({
                url: `posts/delete/${id}`,
                type: 'GET',
                success: function(res) {
                    if (res) location.reload();
                    else alert('Error...');
                }
            });
        }
    </script>
@stop()
