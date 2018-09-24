<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sign-up</title>
		<style>
			html, body {
                background-color: #fff;
                color: #636b6f;
                font-weight: 100;
                margin: 0;
            }
			a{
				text-decoration: none;
				color: blue;
			}
			.wrapper{
				margin: 0 auto;
				width: 40%;
				clear: both;
				font-family: century gothic;
			}
			.content{
				height: auto;
				background-color: white;
				margin-top: 4%;
				width: 90%;
				padding: 5%;
				border: 1px solid black;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			}
			input[type=text]{
				width: 93%;
				padding: 10px 15px;
				margin-top: 1%;
				color: black;
				display: inline-block;
				font-family: century gothic;
				border: 1px solid #ccc;
				border-radius: 4px;
				background: rgb(255, 255, 255); /* Fallback for older browsers without RGBA-support */
			    background: rgba(255, 255, 255, 0.8);
			}
			button{
				width: 100%;
				background-color: #335fa1;
				color: white;
				border: 1px solid #ccc;
				font-family: century gothic;
				padding: 10px 15px;
				border-radius: 4px;
				cursor: pointer;
			}
			button:hover {
				background-color: #3a6ab2;
				color: white;
			}
			.alert{
				background-color: #f2dede;
				height: auto;
				border: 1px solid red;
				margin-bottom: 4%;
				padding: 2%;
				width: 96%;
				color: #a94442;
				font-family: century gothic;
			}
			</style>
	</head>
	<body>
		<div class="wrapper">
			<div class="content">
				<center>
					<h1><span style="color:#335fa1;">Sign Up</span> </h1>
				</center>
						<form>


							<label>Student ID:</label><br/>
							<input type="text" name="student_id"/>
							<br/><br/>
							<label>Last Name:</label><br/>
							<input type="text" name="last_name"/>
							<br/><br/>
							<label>First Name:</label><br/>
							<input type="text" name="first_name" />
							<br/><br/>
							<label>Course:</label><br/>
							<input type="text" name="course"/>
							<br/><br/>
							<label>Year Level:</label><br/>
							<input type="text" name="year_level"/>
							<br/><br/>
							<button type="submit">submit</button>
						</form>
			</div>
			<br/><br/>
				
		</div>
	</body>
</html>
