@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 55%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
th, tr{
	background-color:lightgreen;
}
</style>
</head>
<body>

<form action = "{{ route('students.create') }}" method = "POST">
	<center>
						<table border="0">
							<tr>
						<td>Student Id  </td>                                  
						<td> First Name </td>
					   	<td>Last Name</td>					  
					  	<td>Course</td>			
					    <td> Year Level</td>
					    	</tr>
					    	<tr>
					    		<td>0112 </td>
					    		<td>  Krish </td>
					    		<td>  Ednalgan</td>
					    		<td> BSIT </td>
					    		<td> 4 </td>
					    	</tr>
					    	</table>
</center>
</form>

</body>
</html>





@endsection