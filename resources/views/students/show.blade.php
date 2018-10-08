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

th{
    background-color: #4CAF50;
    color: white;
}
th, tr{
	background-color:lightgreen;
}
</style>
</head>
<body>
<center>
	<br><br>
					<form action = "{{ route('students.create') }}" method = "POST">
						<label> Student Id: {{ $students->student_id  }} </label><br/>
						<label> First Name: {{ $students->first_name  }} </label><br/>
					    <label> Last Name:  {{ $students->last_name  }}</label><br/>
					    <label> Course:     {{ $students->course  }}</label><br/>
					    <label> Year Level: {{ $students->year_level  }}</label><br/>
					</form>

							<br><br>			
							<br>
						<table border="0">
							<tr>
								<td>Total Fines: </td>                
								<td>Activities no attendance:  </td>
                            </tr>

                            <tr>
                            	<td> 1000 </td>
                            	<td>  </td>
                            </tr>
                        </table>

                        <br/><br/>

                            <table border="0">
                            	
                            <tr>
								<td>Activity </td>
								<td>time_in_am </td>
								<td>time_out_am </td>
								<td>time_in_pm </td>
								<td>time_out_pm </td>
                            </tr>
                        
                        

                            <tr>
                            	<td> Day 1</td>
                            	<td> 8:00 </td>
                            	<td> 12:00 </td>
                            	<td> 1:30 </td>
                            	<td> 3:48 </td>
                            </tr>
                        
                            </table>								
						</center>
					</body>
					</html>
@endsection
