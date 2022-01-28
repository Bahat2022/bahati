  <style type="text/css">
  	header{
  		font-size: xx-large;
  		text-transform: capitalize;
  		text-align: center;
  	}
  	table{
  		text-transform: capitalize;
  		font-size: xx-large;
  		font-family: Times New Roman;
  		margin-left:20%;
  		text-align: center;
  	}
  	h2{
  		text-align: right;
  		margin-right: 14%;
  	}
  </style>
  <body>
  <header>lab log sheet</header>
  <h2><a href="view.php">view</a></h2>
  <form method="POST" action="mahuzurio.php">
  	<table>
  		<tr>
  			<td><label for="username">student name</label></td>
  			<td><input type="text" name="username" id="username" required=""></td>
  		</tr>

  		<tr>
  			<td><label for="reg _no">reg no</label></td>
  			<td><input type="text" name="reg_no" id="reg_no" required=""></td>
  		</tr>

  		<tr>
  			<td><label for="course">course</label></td>
  			<td><input type="text" name="course" id="course" required=""></td>
  		</tr>

  		<tr>
  			<td><label for="semester">semester</label></td>
  			<td><input type="text" name="semester" id="semester" required=""></td>
  		</tr>
  		
  		<tr>
  			<td><label for="comp_no">comp no</label></td>
  			<td><input type="text" name="comp_no" id="comp_no" required=""></td>
  		</tr>

  		<tr>
  			<td><label for="date">date</label></td>
  			<td><input type="date" name="date" id="date" required=""></td>
  		</tr>
  		<tr>
  			<td><label for="time_in">time in</label></td>
  			<td><input type="time" name="time_in" id="time_in" required=""></td>
  		</tr>

  		<tr>
  			<td><label for="time_out">time out</label></td>
  			<td><input type="time" name="time_out" id="time_out" required=""></td>
  		</tr>
  	</table>
  	<div class="container" align="center">
  	<input type="submit" name="submit" value="send">
  </form>
</body>

<?php
include("conn.php");
//get data from form//
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$reg_no=$_POST['reg_no'];
	$course=$_POST['course'];
	$semester=$_POST['semester'];
	$comp_no=$_POST['comp_no'];
	$date=$_POST['date'];
	$time_in=$_POST['time_in'];
	$time_out=$_POST['time_out'];

	//insert data into database//
	$query="INSERT INTO log_sheet(username,reg_no,course,semester,comp_no,time_in,time_out,date)VALUES('$username','$reg_no','$course','$semester','$comp_no','$time_in','$time_out','$date')";
	mysqli_query($con,$query);
}
?>