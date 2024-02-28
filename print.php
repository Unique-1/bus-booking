<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
Print and present this details upon boarding the bus<br><br>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content" style="width: 400px;">
<strong>Ticket Reservation Details</strong><br><br>
<?php

include('db.php');
$id=$_GET['id'];
$setnum=$_GET['setnum'];
$busnum=$_GET['busnum'];
$result = mysqli_query($conn, "SELECT * FROM customer WHERE transactionum='$id'");
while($row = mysqli_fetch_array($result))
	{
		echo 'Transaction Number:&nbsp&nbsp '.$row['transactionum'].'<br>';
		echo 'Name:&nbsp&nbsp '.$row['fname'].' '.$row['lname'].'<br>';
		echo 'Address:&nbsp&nbsp '.$row['address'].'<br>';
		echo 'Contact:&nbsp&nbsp '.$row['contact'].'<br>';
		echo "Payable:&nbsp&nbsp".$row['payable']."<br>";
		$get = getbusname($busnum, "route", $conn);
		echo "Route: &nbsp&nbsp ".$get['route']."<br>";
		echo "Type: &nbsp&nbsp ".$get['type']."<br>";
		
		echo 'SeatNo:&nbsp&nbsp '.$row['setnumber'].'<br>';
	}
 function getbusname($id, $table, $conn){
 	$query=mysqli_query($conn, "SELECT * FROM $table WHERE id='$id'");
 	return mysqli_fetch_array($query);
 }

?>
</div>
<a href="index.php">Home</a>