@extends('layouts.mainlayout')


		@section('content')

		<div class="row">
			<div class="col-12">
				@foreach ($errors->all() as $message)
					<div class="alert alert-danger">{{ $message }}</div>
				@endforeach
			</div>
		</div>
		
		<div class="row">
			<div class="col-12">

				<form action="{{ URL('room/store') }}" method="POST" enctype="multipart/form-data">

					@csrf

					<div class="form-group">
						<label>Building</label>
						<input type="text" name="building" class="form-control">
					</div>
					<div class="form-group">
						<label>Number</label>
						<input type="text" name="number" class="form-control">
					</div>
					<div class="form-group">
						<label>Capacity</label>
						<input type="number" name="capacity" class="form-control">
					</div>
					<div class="form-group">
						<label>Supervisor</label>
						<select name="supervisor_id" class="form-control">
							@foreach ($supervisors as $supervisor)
								<opption value="{{ $supervisor->id }}">{{ $supervisor->name }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label>Image</label>
						<input type="file" name="image" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary">Save</button>
				</form>
			</div>
		</div>

		@stop
	