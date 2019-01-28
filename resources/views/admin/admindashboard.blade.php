@extends('template')

@section('pagetitle', 'Dashboard')

@section('admin_body')

<div class='container mt-5'>
	<div class="row">
		<div class="card col-4">
			<div class="card-body">
				<h3 class="card-title">Books</h3>
				<h4 class="card-text">200</h4>
			</div>
		</div>

		<div class="card col-4">
			<div class="card-body">
				<h3 class="card-title">Reviews</h3>
				<h4 class="card-text">2,000</h4>
			</div>
		</div>

		<div class="card col-4">
			<div class="card-body">
				<h3 class="card-title">Users</h3>
				<h4 class="card-text">300</h4>
			</div>
		</div>
	</div>

	<!-- FORM FOR ADDING BOOKS -->
	<div class="row mt-5">
		<div class="col-2"></div>
		<div class="col-6 border p-3">

		@if($errors->any())
			<ul class='list-unstyled'>
            	@foreach ($errors->all() as $error)
                <li>
                	<div class="alert alert-danger">{{ $error }}</div>
                </li>
            	@endforeach
        	</ul>
		@endif

		<h2>Add Book</h2>
			<form method='POST' action='/addbook' enctype='multipart/form-data'>
				{{ csrf_field() }}
				<!-- title, summary, image_cover, category -->
				<div class="form-group">
					<label>Title</label>
					<input type='text' name='title' id='title' class='form-control rounded-0'>
				</div>

				<div class="form-group">
					<label>Summary</label>
					<textarea name='summary' id='summary' class='form-control rounded-0'></textarea>
				</div>

				<div class="form-group">
					<label>Image</label>
					<input type='file' name='image_cover' id='image_cover' class='form-control rounded-0'>
				</div>

				<div class="form-group rounded-0">
					<label>Category</label>
					<select name='category' class='form-control rounded-0'>
					@foreach($categories as $category)
						<option value='{{$category->id}}'>{{$category->name}}</option>
					@endforeach
					</select>

				</div>

				<div class="form-group rounded-0 mt-5">
					<button type='submit' class='btn btn-primary form-control'>SAVE</button>
				</div>
			</form>
		</div>
		<div class="col-2"></div>
	</div>
</div>
@endsection