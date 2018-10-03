@extends('layouts.app')

@section('content')

<center>
	<br><br>
					<form action = "{{ route('activities.create') }}" method = "POST">
						<label>Activity</label><br/><br/>
							<label>Name:</label><br/>							
							<br><br>			
							<label>Periods:</label>	<br/><br/>
						<table border="1">
							<tr>
							   <td>am_time_in_start:8:00am</td>
							</tr>

							<tr>
							   <td>am_time_in_end:8:30am</td>
							</tr>

							<tr>
							   <td>am_time_out_start:12:00pm</td>
							</tr>

							<tr>
							   <td>am_time_out_end:12:30pm</td>
							</tr>
						</table>
					</form>							
						</center>
@endsection
