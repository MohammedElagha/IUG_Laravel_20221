@extends('layouts.mainlayout')


		@section('content')
		
		<div class="row">
			<div class="col-12">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>Image</th>
							<th>Building</th>
							<th>Number</th>
							<th>Capacity</th>
							<th>Supervisor</th>
							<th>Sector</th>
							<th>EDIT</th>
							<th>DELETE</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($rooms as $room)
							<tr>
								<td><img src="{{ $room->image_url }}" width="150px"></td>
								<td>{{ $room->building }}</td>
								<td>{{ $room->number }}</td>
								<td>{{ $room->capacity }}</td>
								<td>{{ $room->supervisor->name ?? null }}</td>
								<td>{{ $room->sector->name ?? null }}</td>
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

		<div class="row">
			<div class="col-12">
				{{ $rooms->links() }}
			</div>
		</div>

		@stop
	