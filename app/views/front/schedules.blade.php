@extends('layouts.internal')

@section('title')
Schedules | H&O Music Academy
@endsection

@section('content')

<?php $weekdays = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'] ?>

	<div class="page-content" style="background:#e2daca">
		<div class="text-center page-header">
			<h3>OUR SCHEDULE</h3>
		</div>

		<div class="container">
			<ul class="weekdays fa-icon-calendar nav nav-tabs">
				<li class="active"><a href="#Monday" aria-controls="Monday" role="tab" data-toggle="tab">Mon</a></li>
				<li><a href="#Tuesday" aria-controls="Tuesday" role="tab" data-toggle="tab">Tue</a></li>
				<li><a href="#Wednesday" aria-controls="Wednesday" role="tab" data-toggle="tab">Wed</a></li>
				<li><a href="#Thursday" aria-controls="Thursday" role="tab" data-toggle="tab">Thu</a></li>
				<li><a href="#Friday" aria-controls="Friday" role="tab" data-toggle="tab">Fri</a></li>
				<li><a href="#Saturday" aria-controls="Saturday" role="tab" data-toggle="tab">Sat</a></li>
				<li><a href="#Sunday" aria-controls="Sunday" role="tab" data-toggle="tab">Sun</a></li>
			</ul>

			<div class="btn-group filter">
				<button class="button btn-xs dropdown-toggle pull-left" type="button" data-toggle="dropdown" aria-expanded="false"> Filter by Class <span class="caret"></span>
				</button>
					<ul class="dropdown-menu" role="menu">
						<li class="first" val="piano">Piano</li>
						<li val="guitar">Guitar</li>
						<li val="bass">Bass</li>
						<li class="last" val="drums">Drums</li>
					</ul>
			</div>

			<div style="clear:both;margin-bottom:20px;"></div>

			<div class="tab-content">
			@foreach($weekdays as $weekday)
				<div role="tabpanel" class="tab-pane {{ $weekday == 'Monday' ? 'active' : '' }}" id="{{ $weekday }}">
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
					<?php 
						$interval = DateInterval::createFromDateString('1 hour');
						$period = new DatePeriod(new DateTime('08:00:00'),$interval,new DateTime('21:00:00'));
						$line = "";
						foreach ($period as $hour) {
							$line .= "<tr><td class='hour'>".$hour->format('H:i')."</td>";
							foreach ($teachers as $teacher) {
								$line .= "<td>";
								foreach ($schedules as $schedule) {
									if ($teacher['id'] == $schedule['teacher_id'] && $weekday == $schedule['weekday']) {
										if ($hour->format('H:i:s') >= $schedule['hour_start'] && $hour->format('H:i:s') <= $schedule['hour_finish']) {
											$line .= "<div>".$schedule['instruments']."</div>";
										}
									}
								}
								$line .= "</td>";
							}
							$line .= "</tr>";
						}
						echo $line;
					?>
				</tbody>
			</table>
			</div>
			@endforeach
			</div>
			
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
			width: 140px;
		}

		.schedule-table {
			width: 100%;
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

@section('script')
	<script type="text/javascript">
		$('.filter .dropdown-menu li').on('click',function(){
			$.each($('.filter .dropdown-menu li'),function(){
				$(this).removeClass('active');
			});
			$(this).addClass('active');
			var self = $(this);
			
			$.each($('.schedule-table div'),function(content){
				if ($(this).html().indexOf(self.attr('val')) > -1) {
					$(this).show();
				} else {
					$(this).hide();
				}
				
			});
		});
	</script>
@endsection