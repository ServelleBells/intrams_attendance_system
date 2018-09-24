<center>
	<br>
<form action="{{ $action }}" method="POST">
							{{ csrf_field() }}
							<label>New Activity</label><br/>
							<label>Name:</label><br/>
							<input type="text" name="name" value="{{$activities->name}}"/>
							<br><br>							
							<button type="submit"><a href="{{ route('activities.id.show', array('id'=>$activities->id)) }}">Show</a</button>
							<br/>
						</form>

</center>						