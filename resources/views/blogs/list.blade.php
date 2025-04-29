@extends('layouts.admin')
@section('content')
<div class="container mt-5">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header d-flex justify-content-between align-items-center bg-white">
            <h5 class="mb-0">Tutorial List</h5>
            <a href="{{ url('/admin/blog/create') }}" class="btn btn-success">Add Tutorial</a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count(@$blogs['data']) > 0)
                            @foreach ($blogs['data'] as $blog)
                                <tr>
                                    <td style="max-width: 150px;">
                                        <img src="{{ url('/storage/app') . '/' . $blog['image'] }}"
                                             alt="blog image"
                                             class="img-fluid rounded"
                                             style="max-height: 100px; object-fit: cover;">
                                    </td>
                                    <td class="text-muted align-middle">{{ @$blog['title'] }}</td>
                                    <td class="align-middle">
                                        <a href="{{ url('admin/blog/update/' . $blog['id']) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                                        <a href="{{ url('admin/blog/delete/' . $blog['id']) }}" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3" class="text-center text-muted py-4">No Data Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection