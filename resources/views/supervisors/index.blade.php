@extends('layouts.mainlayout')


		@section('content')
		
		<div class="row">
			<div class="col-12">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Rooms</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($supervisors as $supervisor)
							<tr>
								<td>{{ $supervisor->name ?? null }}</td>
								<td>
									@foreach ($supervisor->rooms as $room)
										{{ $room->building }}{{ $room->number }} - {{ $room->sector->name }}<br>
									@endforeach
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

		@stop
	