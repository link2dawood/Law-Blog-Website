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
					<tr>
						<td >Maryjo Lebarree</td>
						<td class="text-muted" >
							Civil Engineer, Product Management
						</td>
						<td>
							<a href="#">Edit</a> | 
							<a href="#">Delete</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>


@endsection