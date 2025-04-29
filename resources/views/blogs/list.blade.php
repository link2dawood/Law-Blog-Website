@extends('layouts.admin')
@section('content')
<div class="container">
	<div class="col-12">
		<div class="card">
			<div class="table-responsive">
				<a href="{{url('/admin/blog/create')}}" class="btn btn-success justify-content-right" type="button">Add Blog</a>
				<table
				class="table table-vcenter card-table table-striped">
				<thead>
					<tr>
						<th>Image</th>
						<th>Title</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@if(count(@$blogs['data']) > 0)
					@foreach ($blogs['data'] as $ind => $blog)
					<tr>
						<td ><img src="{{url('/storage/app').'/'.$blog['image']}}" alt="blog image" style="width:60%;height:100px;"></td>
						<td class="text-muted" >
							{{@$blog['title']}}
						</td>
						<td><a href="{{url('admin/blog/update/'.$blog['id'])}}" class="btn btn-warning">Edit</a>
							<a href="{{url('admin/blog/delete/'.$blog['id'])}}" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					@endforeach
					@else
					<tr>
						<td colspan="100%">No Data Found</td>
					</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>


@endsection