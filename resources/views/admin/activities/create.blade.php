
@extends('layouts.app')

@section('content')

<center>
	<br>
<form action="" method="POST">
							{{ csrf_field() }}
							<label>New Activity</label><br/>
							<label>Name:</label><br/>
							<input type="text" name="name" value=""/>
							<br><br>							
							<button type="submit"><a href="">Create</a</button>
							<br/>
						</form>

</center>						

@endsection