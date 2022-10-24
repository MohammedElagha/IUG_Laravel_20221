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
							<th>Supervisor</th>
							<th>EDIT</th>
							<th>DELETE</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($rooms as $room)
							<tr>
								<td>{{ $room->building }}</td>
								<td>{{ $room->number }}</td>
								<td>{{ $room->capacity }}</td>
								<td>{{ $room->supervisor->name }}</td>
								<td><a href="{{ URL('room/edit/'.$room->id) }}">Edit</a></td>
								<td>
									@if ($room->deleted_at)
										<form action="{{ URL('room/restore/'.$room->id) }}" method="POST">
											@csrf
											<button type="submit" class="btn btn-success">Restore</button>
										</form>
									@else
										<form action="{{ URL('room/delete/'.$room->id) }}" method="POST">
											@csrf
											<button type="submit" class="btn btn-danger">Remove</button>
										</form>
									@endif
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

		@stop
	