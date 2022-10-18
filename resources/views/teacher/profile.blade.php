@extends('layouts.mainlayout')


		@section('content')
		<div class="row">
			<div class="col-12">Welcome {{ $emp_name }}</div>
		</div>

		<div class="row">
			<div class="col-12">
				<p>Name: {{ $emp_name }}</p>
				<p>Salary: {{ $salary }}</p>
			</div>
		</div>
		@stop
	