<?php
  try
{
//open the database
$db = new PDO('sqlite:host.db');


$npeople = $_POST["npeople"];
$address = $_POST["address"];
$sdate = $_POST["sdate"];
$ntime = $_POST["ntime"];

//Insert record  

$db->exec("INSERT INTO events (npeople, address, sdate, ntime) VALUES ('$npeople', '$address', '$sdate', '$ntime');");

//now output the data to a simple html table...
 print "<table border=1>";
 print "<tr><td>npeople</td><td>address</td><td>sdate</td><td>ntime</td></tr>";
$result = $db->query('SELECT * FROM events');
foreach($result as $row)
{
  print "<tr><td>".$row['npeople']."</td>";
  print "<td>".$row['address']."</td>";
  print "<td>".$row['sdate']."</td>";
  print "<td>".$row['ntime']."</td>";
}
print "</table>";

$db = NULL;
}
catch(PDOException $e)
{
print 'Exception : ' .$e->getMessage();
}

?>