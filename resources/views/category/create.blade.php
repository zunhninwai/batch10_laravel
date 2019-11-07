@extends('template')
@section('content')
<div class="container m-5">
<div class="row">
	<div class="col-lg-8">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

		<form method="post" action="{{route('category.store')}}" >
		
			@csrf
		<div class="form-group">
			<label>Name:</label>
			<input type="text" name="name" class="form-control ">
			
		</div>
		
				<div class="form-group">
			<input type="submit" name="btnsubmit" class="btn btn-primary" value="Save">
			</div>
		</div>
	</form>
	</div>
</div>
</div>

@endsection