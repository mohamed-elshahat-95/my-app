@extends('Layouts.master')
@section('title', 'Posts Page')
@section('content')
    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        <b>Filter By...</b>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form class="row g-3" method="GET" action="/posts">
                            <div class="col-sm-3">
                                <label class="form-label">Title:</label>
                                <input type="text" class="form-control" placeholder="Enter Title" name="title"
                                    value="{{ request('title') }}">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Contact No:</label>
                                <input type="text" class="form-control" placeholder="Enter Contact No."
                                    name="contact_phone_number" value="{{ request('contact_phone_number') }}">
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label">Description:</label>
                                <input type="text" class="form-control" placeholder="Enter Description"
                                    name="description" value="{{ request('description') }}">
                            </div>
                            <div class="col-sm-2" style="text-align: center;padding-top: 30px;">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">Search...</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="row align-items-start">
            <p style="text-align: center"><b>POSTS ({{ count($posts) }})</b></p><br /><br />
            <a href="posts/add" target="_blank" class="btn btn-sm btn-primary">Add new post ... </a>

            <hr>
            <table class="table table-striped table-hover table-bordered border-primary" id="myTable">
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
                    @if (count($posts) > 0)
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
                    @else
                        <tr>
                            <td colspan="6" style="text-align: center;font-weight:bold;color:darkred">
                                No Posts Found!
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop()
@section('scripts')
    <script>
        let table = new DataTable('#myTable', {
            responsive: true
        });

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
