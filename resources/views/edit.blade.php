@extends('layout')

@section('content')
	<div class="row">
		<div class= "col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Edit Student</h2>
			</div>
			<div class="pull-right"></div>
		</div>
	</div>

	

	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
		</div>
	@endif

		<div class ="row">
			<form action= "{{ route('student.update',$student->id)}}" method= "POST">
				
		@csrf
			<div class="col-sm-4">

					<div class="left">
				<strong>ID Number</strong>
				<input class="form-control" name="idnumber" value="{{$student->idnumber}}" placeholder="IDNumber"></textarea>
			</div>

				<div class="left">
					<strong>Name</strong>
					<input type="text" name="name" class="form-control" value="{{$student->name}}" placeholder="Name">
				</div>

			<div class="left">
				<strong>Phone</strong>
				<input class="form-control" name="phone" value="{{$student->phone}}" placeholder="Phone"></textarea>
			</div>
			
			<div class="left">
				<strong>Address</strong>
				<input class="form-control" name="address" value="{{$student->address}}" placeholder="Address"></textarea>
			</div>

			<br>

		<div class="left">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>
</div>


@endsection