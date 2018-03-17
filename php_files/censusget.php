<html>
<body>
  <?php
$name=$_GET["name1"];
$gen=$_GET["gender"] ;
$dob=$_GET["dob"] ;
$martialstatus=$_GET["ms"] ;
$fname=$_GET["fname"] ;
$mname=$_GET["mname"] ;
$sname=$_GET["sname"] ;
$childnum=$_GET["cnum"] ;
$c1name=$_GET["c1name"] ;
$c2name=$_GET["c2name"] ;
$dstay=$_GET["duration"] ;
$paddrs=$_GET["paddr"] ;
$octpn=$_GET["occpn"] ;
$inationality=$_GET["nationality"] ;
$hod=$_GET["rship"] ;

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
