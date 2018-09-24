<center>
	<br><br>
					<form action = "{{ route('crushes.create') }}" method = "POST">
							<label>Frist Name: {{$crush->first_name}}</label><br/>
							<label>Last Name: {{$crush->last_name}}</label><br/>				
							<label>FB Profile Link: <a href="{{ $crush->fb_profile_link }}">{{$crush->fb_profile_link}}</a></label><br/>
							<label>Contact Number: {{$crush->contact_number}}</label>
							<br><br>
							<h3>Qualities:</h3>
							<button type="submit"><a href="{{ route('crushes.id.add', array('id'=>$crush->id)) }}">ADD QUALITY</a></button>
					</form>
							<table border="1">
								<tbody>
									@foreach($crush->qualities as $quality)
									<tr>
										<td>{{$quality->name}}</td>
										<td><a href="{{ route('crushes.id.qualities.qid.delete', array('id'=>$crush->id,'qid'=>$quality->id)) }}">Delete</a></td>
									</tr>
									@endforeach
								</tbody>
							</table>
							<br/><br/>
							<a href="{{route('crushes.index')}}">Return to Table Page</a></center>
