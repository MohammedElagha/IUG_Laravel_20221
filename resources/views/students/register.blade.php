@extends('layouts.mainlayout')


		@section('content')
		
		<h1>Hi welcome {{ $student->name }}</h1>

		<div class="row">
			<div class="col-12">
				<table class="table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Credit</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($student->registered_courses as $registered_course)
							<tr>
								<td>{{ $regisered_course->course->name }}</td>
								<td>{{ $regisered_course->course->credit }}</td>
								<td></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

		@stop
	