
<html>
<head>
	<title>WELCOME TO ADMINISTRATION</title>
	      
		  	  <script type="text/javascript">
         <!--
            function getConfirmation(){
               var retVal = confirm("Delete the student record?");
               if( retVal == true ){
                 //document.write ("User wants to continue!");
				  //echo<a href="deletestudent.php?student_id=' . $row['student_id'] . '"></a>;
				 $.get("deletestudent.php")
				  //var x = new XMLHttpRequest();
   // x.open("GET","deletestudent.php",true);
    //x.send();
                  return true;
               }
               else{
                  document.write ("User does not want to continue!");
                  return false;
               }
            }
         //-->
      </script>

</head>
<body>
<div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>working</b></div>
<?php
/* 
	ADMIN.PHP
	Displays all data from 'administration' table
*/
	 include('config.php');
	 session_start();
	 
	// get results from database
	$result = mysql_query("SELECT * FROM sms.administration") 
		or die(mysql_error());  
	
	// display data in table
	echo "<p><b>View All</b>";
	
	echo "<table border='1' cellpadding='10'>";
	echo "<tr> <th>ID</th> <th>Name</th> <th>Gender</th><th>Date of Admission</th><th>Date of Birth</th><th>Roll No</th><th>Age</th><th>Temporary Address</th> <th></th> <th></th></tr>";

	// loop through results of database query, displaying them in the table
	while($row = mysql_fetch_array( $result )) {
		
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . $row['student_id'] . '</td>';
		echo '<td>' . $row['Name'] . '</td>';
		echo '<td>' . $row['gender'] . '</td>';
		echo '<td>' . $row['date_of_admission'] . '</td>';
		echo '<td>' . $row['DOBad'] . '</td>';
		echo '<td>' . $row['student_roll'] . '</td>';
		echo '<td>' . $row['age'] . '</td>';
		echo '<td>' . $row['temp_address'] . '</td>';
		//echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';
		echo '<td><a href="deletestudent.php?student_id=' . $row['student_id'] . '">Delete</a></td>';
		//echo '<td><a href="#?student_id=' . $row['student_id'] . '" onclick="getConfirmation()">Delete</button></a></td>';
		echo "</tr>"; 
	} 

	// close table>
	echo "</table>";
	  
	  
?>
<p><a href="newreg.php">Add a new record</a></p>

</body>
</html>	
	

