
<!DOCTYPE html>
<html>
<head>
	<title>messages</title>
	<style type="text/css">
			body {
    background:url("images/img.png") ;
    font: smaller Arial, Helvetica, sans-serif;
    line-height: 1.3em;
    color: #f6e8d2;
}

		
		#dis{
			background:url("images/img.png") ;
	width: 70%;
	height: auto;
	max-width:100%;
	border-radius:20px;
	border:5px solid yellow;
	background-color:black;
	padding:20px;
	margin:auto;
	color:white;
	overflow:scroll;
		}
	</style>

</head>
<body>
<div id="dis">
	<?php
		/*include'db.php';
		$query="SELECT * FROM message order by id ASC";
		$run=mysqli_query($conn,$query);
		while ($row=mysqli_fetch_array($run)) {
				$name=$row['name'];
				$email=$row['email'];
				$phone_no=$row['phone_no'];
				$message=$row['message'];
				echo "name:&nbsp&nbsp".$name."<br>";
				echo "email:&nbsp&nbsp".$email."<br>";
				echo "phone No:&nbsp&nbsp".$phone_no."<br>";
				echo "message:&nbsp&nbsp".$message."<br>"."<br>";
		}
*/
	// the above code is the same with the belolw code

							include('db.php');
							$result = mysqli_query($conn, "SELECT * FROM message order by 1 ASC");
							while($row = mysqli_fetch_array($result))
								{
									echo 'name:'.$row['name']."<br>";
									echo "email:&nbsp&nbsp".$row['email']."<br>";
									echo "phone No:&nbsp&nbsp".$row['phone_no']."<br>";
									echo "message:&nbsp&nbsp".$row['message']."<br><br>";


									
								}
	  
	?>
</div>
</body>
</html>