<?php

#Attempt to open mysql dbase named homework3 on the localhost using root as user name and no password
$link = mysqli_connect("localhost", "root", "", "homework3");
 
#if the link to the homework3 dbase fails, print "Error: Could not connect. " and show the error given from mysqli 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
#add row into demo dbase for Month, Day, and Year using the values December, Friday, and 1999 and assign $sql to insert command
$sql = "INSERT INTO homework (Month, Day, Year) VALUES ('December', 'Friday', '1999')";

#if add record is successful print "Records added successfully." otherwise print "Error: Unable to execute $sql." and show mysql error.
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}

#close link to demo dbase
mysqli_close($link);
?>
