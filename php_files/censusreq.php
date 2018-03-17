<html>
<body>
  <?php
$name=$_REQUEST["name1"];
$gen=$_REQUEST["gender"] ;
$dob=$_REQUEST["dob"] ;
$martialstatus=$_REQUEST["ms"] ;
$fname=$_REQUEST["fname"] ;
$mname=$_REQUEST["mname"] ;
$sname=$_REQUEST["sname"] ;
$childnum=$_REQUEST["cnum"] ;
$c1name=$_REQUEST["c1name"] ;
$c2name=$_REQUEST["c2name"] ;
$dstay=$_REQUEST["duration"] ;
$paddrs=$_REQUEST["paddr"] ;
$edtnqual=$_REQUEST["eduqual"];
$octpn=$_REQUEST["occpn"] ;
$inationality=$_REQUEST["nationality"] ;
$hod=$_REQUEST["rship"] ;
echo "<h1> CENSUS REPORT</h1>";

echo "Name:$name<br/>";
echo "Gender:$gen<br/>";
echo "Date Of Birth:$dob<br/>";
echo "Martail Status:$martialstatus<br/>";
echo "Father's Name:$fname<br/>";
echo "Mother's Name:$mname<br/>";
echo "Spouse Name:$sname<br/>";
echo "Number of Children:$chilnum<br/>";
echo "Name of First child:$c1name<br/>";
echo "Name of Second child:$c2name<br/>";
echo "Duration of stay at the present address:$dstay<br/>";
echo "Permanent Address:$paddrs<br/>";
echo "Education Qualification:$edtnqual<br/>";
echo "Occupation:$octpn<br/>";
echo "Nationaliy as Declared:$inationality<br/>";
echo "Relationship to the Head of the family:$hod";


?>
</body>
</html
