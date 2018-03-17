<html>
<body>
  <?php
$name=$_POST["name1"];
$gen=$_POST["gender"] ;
$dob=$_POST["dob"] ;
$martialstatus=$_POST["ms"] ;
$fname=$_POST["fname"] ;
$mname=$_POST["mname"] ;
$sname=$_POST["sname"] ;
$childnum=$_POST["cnum"] ;
$c1name=$_POST["c1name"] ;
$c2name=$_POST["c2name"] ;
$dstay=$_POST["duration"] ;
$paddrs=$_POST["paddr"] ;
$edtnqual=$_POST["eduqual"];
$octpn=$_POST["occpn"] ;
$inationality=$_POST["nationality"] ;
$hod=$_POST["rship"] ;
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
