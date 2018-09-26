
@extends('layouts.app')

@section('content')

<center>
	<br>
<form action="{{route('activities.store')}}" method="post">
							{{ csrf_field() }}
							<label>New Activity</label><br/>
							<label>Name:</label><br/>
							<input type="text" name="name" value=""/>
							<br><br>							
							<button type="submit">Create</button>
							<br/>
						</form>

</center>						

@endsection