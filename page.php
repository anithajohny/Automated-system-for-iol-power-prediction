<?php

$K=$_REQUEST['K'];
$AL=$_REQUEST['AL'];

$K2=$_REQUEST['K2'];
$SRK_II=$_REQUEST['SRK_II'];
$SRK_II_ACONST=$_REQUEST['SRK_II_ACONST'];




$K=$POST['K'];
$AL=$_POST['AL'];
$K2=$POST['K2'];
$SRK_II=$POST['SRK_II'];
$SRK_II_ACONST=$POST['SRK_II_ACONST'];
$data=$AL.",".$K.",".$K2.",".$SRK_II.",".$SRK_II_ACONST;


$file="file.csv";



file_put_contents($file, $data.PHP_EOL, FILE_APPEND);
print "<h1 align=center>Thank you for submitting Details</h1>";
 

?>
<html>
<head>
<title>ThankYou Page</title>   
</head>
<body>
<h1> <a href="sample.html">GO BACK</a> </h1>    
    
</body>
</html>
