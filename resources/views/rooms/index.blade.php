@extends('layouts.mainlayout')


		@section('content')
		
		<div class="row">
			<div class="col-12">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>Building</th>
							<th>Number</th>
							<th>Capacity</th>
							<th>EDIT</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($rooms as $room)
							<tr>
								<td>{{ $room->building }}</td>
								<td>{{ $room->number }}</td>
								<td>{{ $room->capacity }}</td>
								<td><a href="{{ URL('room/edit/'.$room->id) }}">Edit</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

		@stop
	