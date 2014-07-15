<?php>
// Establish the connection
$con = mysqli_connect ("50.163.101.38:3306","root","w6IEAPQY4KaMl13R5csA","mydb"); //host = host name or IP address.
//Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM ");
echo "<table border='1'>
<tr>
<th>University</th>
<th>Types of Degrees</th>
<th>Types of Majors</th>
<th>Types of Minors</th>
<th>Types of Concentrations</th>
</tr>"

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row[''] . "</td>"; //Here is where we'll get data for University.  Create links
echo "<td>" . $row[''] . "</td>"; //Here is where we'll get data for types of degress.  Create links
echo "<td>" . $row[''] . "</td>"; //Here is where we'll get data for majors. Create links
echo "<td>" . $row[''] . "</td>"; //Here is where we'll get data for minors. Create links
echo "<td>" . $row[''] . "</td>"; //Here is where we'll get data for concentrations. Create links
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>