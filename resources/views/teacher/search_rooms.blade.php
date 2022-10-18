@extends('layouts.mainlayout')


		@section('content')
		<div class="row">
			<div class="col-12">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>Building</th>
							<th>Capacity</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($rooms as $room)
							<tr>
								<td>{{ $room['number'] }}</td>
								<td>{{ $room['building'] }}</td>
								<td>{{ $room['capacity'] }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		@stop
	