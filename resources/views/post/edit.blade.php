@extends('template')
@section('content')


<div class="container m-5">
	<h1>Post Edit Form</h1>
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<div class="row">
		 

		<form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>Title</label>

				<input type="text" name="title" class="form-control" value="{{$post->title}}">
			</div>

			<div class="form-group">
				<label>Content</label>
				<textarea class="form-control" name="content" >{{$post->content}}</textarea> 
			</div>

			<div class="form-group">
				<label>Photo:</label><span class="text-danger">[supportedfile types:jpeg,png]</span>
				<input type="file" name="photo" class="form-control">
				<img src="{{asset($post->image)}}" class="img-fluid">
			<input type="hidden" name="oldphoto" value="{{$post->image}}">
			</div>

			<div class="form-group">
				<label>Categories:</label>
				<select name="category" class="form-control">
					<option value=""> Choose Category</option>
					@foreach($categories as $row)
					<option value="{{$row->id}}">{{$row->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<input type="submit" value="Update" name="btnsubmit" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>


@endsection