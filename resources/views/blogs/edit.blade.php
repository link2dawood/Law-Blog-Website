@extends('layouts.admin')
@section('content')
<div class="container">
	<div class="page-header">
		<ul class="breadcrumbs mb-3">
			<li class="separator">
				<i class="icon-arrow-right"></i>
			</li>
			<li class="nav-item">
				<a href="{{url('blogs')}}">Blogs</a>
			</li>
			<li class="separator">
				<i class="icon-arrow-right"></i>
			</li>
		</ul>
	</div>
	<form action="{{url('admin/blog/update', $row->id)}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Blog Create</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="form-group">
									<input type="hidden" name="id" value="{{$row->id}}">
									<label for="title">Title</label>
									<input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required value="{{$row->title}}">
								</div>
								<div class="form-group">
									<label for="image">Image</label>
									<input type="file" class="form-control" id="image" value="" name="image" placeholder="Enter Title" required value="{{$row->image}}">
								</div>
								<div class="form-group">
									<label for="password">Description</label>
									<textarea id="editor" name="description" required>{{$row->description}}</textarea>
								</div>

							</div>

						</div>
					</div>
					<div class="card-action">
						<button type="submit" class="btn btn-success">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://cdn.ckeditor.com/4.14.0/full-all/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/monokai-sublime.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>

<script>
	var editor = CKEDITOR.replace('editor', {
		height: 300,
		extraPlugins: 'mentions,codesnippet',
		toolbar: [
			{ name: 'document', items: ['Source'] },
			{ name: 'basicstyles', items: ['Bold', 'Italic'] },
			{ name: 'paragraph', items: ['BulletedList', 'NumberedList'] },
			{ name: 'insert', items: ['Image', 'CodeSnippet'] }
			],
        filebrowserUploadUrl: '/upload_image', // Endpoint for image uploads
        filebrowserUploadMethod: 'form',

        mentions: [
        {
        	feed: dataFeed,
        	itemTemplate:
        	'<li data-id="{id}">' +
        	'<strong class="username">{username}</strong>' +
        	'<span class="fullname">{fullname}</span>' +
        	'</li>',
        	outputTemplate:
        	'<a href="mailto:{username}@example.com">@{username}</a><span>&nbsp;</span>',
        	minChars: 0
        }
        ],
        codeSnippet_theme: 'monokai_sublime'
    });

    // Mention data feed function
	var users = [
		{ id: 1, fullname: "John Doe", username: "johndoe" },
		{ id: 2, fullname: "Jane Smith", username: "janesmith" },
		];

	function dataFeed(opts, callback) {
		var matchProperty = 'username',
		data = users.filter(function (item) {
			return item[matchProperty].indexOf(opts.query.toLowerCase()) === 0;
		});
		callback(data);
	}
</script>
@endsection