@extends('layouts.admin')
@section('content')
<div class="container">
	<div class="col-12">
		<div class="card">
			<div class="table-responsive">
				<table
				class="table table-vcenter card-table table-striped">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>

					</tr>
				</thead>
				<tbody>
					@if(count($messages) > 0)
					@foreach ($messages as $ind => $message)
					<tr>
						<td>{{@$message->name}}</td>
                        <td>{{@$message->email}}</td>
                        <td>{{@$message->subject}}</td>
                        <td>{{@$message->message}}</td>
						<td>
							<a href="{{url('/admin/message/delete/'.$message->id)}}" class="btn btn-danger">Delete</a>
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
