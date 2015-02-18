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
			<ul class="weekdays fa fa-calendar nav nav-tabs">
				<li weekday=0><a href="#Monday" aria-controls="Monday" role="tab" data-toggle="tab">Mon</a></li>
				<li weekday=1><a href="#Tuesday" aria-controls="Tuesday" role="tab" data-toggle="tab">Tue</a></li>
				<li weekday=2><a href="#Wednesday" aria-controls="Wednesday" role="tab" data-toggle="tab">Wed</a></li>
				<li weekday=3><a href="#Thursday" aria-controls="Thursday" role="tab" data-toggle="tab">Thu</a></li>
				<li weekday=4><a href="#Friday" aria-controls="Friday" role="tab" data-toggle="tab">Fri</a></li>
				<li weekday=5><a href="#Saturday" aria-controls="Saturday" role="tab" data-toggle="tab">Sat</a></li>
				<li weekday=6><a href="#Sunday" aria-controls="Sunday" role="tab" data-toggle="tab">Sun</a></li>
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
				<div role="tabpanel" class="tab-pane {{ $weekday == date('l') ? 'active' : '' }}" id="{{ $weekday }}">
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
											$book = true;
											foreach ($reservations as $reservation) {
												if ($reservation['name'] == $teacher['id'] && $reservation['time'] == $hour->format('H:i:s') && date('l',strtotime($reservation['reserved'])) == $weekday) {
													$line .= "<div>".$schedule['instruments']."</div>";
													$book = false;
												}
											}

											if ($book) {
												if (date('N') < date('N',strtotime($weekday))) {
													$timestamp = strtotime('next '.$weekday, strtotime('yesterday'));
													$line .= "<div>".$schedule['instruments']."</div><a href='/book/".$teacher['id']."/".$hour->format('His')."/".$timestamp."'>BOOK NOW!</a>";
												} else {
													$line .= "<div>".$schedule['instruments']."</div>";
												}
											}
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
			color:#ed5a3a;
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
			color:#ed5a3a;
			font-size: 16px;
			font-family: Rockwell;
		}

		.schedule-table a {
			font-weight: bold;
			color: #ed5a3a;
		}
	</style>
	
@endsection

@section('script')
	<script type="text/javascript">
		var d = new Date();

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

		$('.weekdays').find('li[weekday='+((d.getDay() + 6) % 7)+']').addClass('active');
	</script>
@endsection