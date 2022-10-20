<html>
<head>
<title>Exercise 1 - Midterm</title>
<body align=center>
<h1>

<?php
$grade = 90;

	if ($grade >= 70)
	{
		echo "$grade: PASSED";
	}
	else if ($grade >= 60)
	{
		echo "$grade: REMEDIAL";
	}
	else
	{
		echo "$grade: FAILED";
	}
echo "<br>";
$grades = "69";
switch ($grades)
{
	case "90";
	{
		echo "$grades: PASSED";
		break;
	}
	case "69";
	{
		echo "$grades: REMEDIAL";
		break;
	}
	case "59";
	{
		echo "$grades: FAILED";
		break;
	}
	default;
	{
		echo "No Grade";
	}
}			
echo"<br>";
$studentgrade = 59;
	echo $studentgrade <= 60? "$studentgrade: FAILED" :"$studentgrade: PASSED";
?>
</h1>
</body>

</head>

</html>