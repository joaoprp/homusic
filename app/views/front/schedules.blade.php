@extends('layouts.internal')

@section('title')
Schedules | Ho Music Academy
@endsection

@section('content')

	<div class="page-content" style="background:#e2daca">
		<div class="text-center page-header">
			<h3>OUR SCHEDULE</h3>
		</div>

		<div class="container">
			<table class="table schedule-table">
				<thead>
					<tr>
						<td></td>
						@foreach($teachers as $teacher)
							<td>{{$teacher->first_name}} {{substr($teacher->last_name,0,1)}}.</td>
						@endforeach
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="hour">2:00 PM - 3:00PM</td>
						<td>Violin</td>
						<td>Viola</td>
					</tr>
					<tr>
						<td class="hour">2:00 PM - 3:00PM</td>
						<td><a href="#">BOOK NOW</a></td>
						<td>Viola</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>

	

@endsection

@section('css')

	<style type="text/css">
		.hour {
			color:#f05931;
			border-right:1px solid #B9B1A7;
		}

		.schedule-table td, .schedule-table tr {
			border-top: none;
			text-align: center;
		}

		.schedule-table {
			width: 60%;
			margin: auto;
			margin-bottom: 40px;
		}

		.schedule-table thead td {
			color:#f05931;
			font-size: 16px;
			font-family: Rockwell;
		}

		.schedule-table a {
			font-weight: bold;
			color: #F05931;
		}
	</style>
	
@endsection