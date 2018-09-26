<form action="{{$action}}" method="POST">
	{{ csrf_field() }}

	<label>New Activity</label></br>
	<label>Name</br>
		<inpt type="text" name="name" value={{$activities->name}}"/>
		</br>
		<button type="submit">{{$submit_text}}</button>
</form>