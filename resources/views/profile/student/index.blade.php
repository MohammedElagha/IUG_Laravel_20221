<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	//

</head>
<body>

	<h1>This is grades view</h1>

	<h2 style="background-color: yellow;">Welcome: <?php echo $name; ?></h2>

	<table>
		<tbody>
			<?php
			foreach ($grades as $course => $grade) {
				echo "<tr><td>$course</td><td>$grade</td></tr>";
			}
			?>
		</tbody>
	</table>



	<h2 style="background-color: red;">Welcome: {{ $name }}</h2>

	<table>
		<tbody>
			@foreach ($grades as $course => $grade)
				<tr>
					<td>{{$course}}</td>
					<td>{{$grade}}</td>
					<td>
						@if ($grade >= 60)
							SUCCESS
						@elseif ($grade < 60 && $grade >= 40)
							Failed
						@else
							Wrong
						@endif
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

</body>

///

</html>