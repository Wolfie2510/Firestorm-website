<?php
$host= ""; //leave this as is because its your local host on the 000webhost
$username= ""; // this is the name you get after you create a database on 000webhost
$password= ""; // your password you used when making the site
$dbname= ""; // also shows after you make the database

$conn=mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) 
    echo"Connection could not be found...".mysqli_connect_error();
else
   echo"Successfully connected...";

//this section is used to check if a table is working and responsding
$query="select*from user";
$result=mysqli_query($conn, $query);
echo"<br>";
echo"<table border='1' cellspacing='0'>";
echo "<tr><td>firstName</td><td>lastName</td><td>email</td><td>phoneNr<td>";
foreach($result as $row)
{
    echo"<tr>";
    echo "<td>" . $row["firstName"] . "</td> <td>" . $row["lastName"] . "</td> <td>" . $row["email"] . "</td> <td>" . $row["phoneNr"] . "</td>";
    echo"</tr>";
}
echo "</table";
?>