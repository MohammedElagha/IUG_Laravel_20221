@extends('layouts.mainlayout')


		@section('content')
		
		<div class="row">
			<div class="col-12">

				<form action="{{ URL('room/update/' . $id) }}" method="POST">

					@csrf
					@method('PUT')

					<div class="form-group">
						<label>Building</label>
						<input type="text" name="building" class="form-control" value="{{ $room->building }}">
					</div>
					<div class="form-group">
						<label>Number</label>
						<input type="text" name="number" class="form-control" value="{{ $room->number }}">
					</div>
					<div class="form-group">
						<label>Capacity</label>
						<input type="number" name="capacity" class="form-control" value="{{ $room->capacity }}">
					</div>

					<button type="submit" class="btn btn-primary">Save</button>
				</form>
			</div>
		</div>

		@stop
	