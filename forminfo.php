<html>
<head>
<title>Form Info Contact Details</title>
</head>
<body>
<form action="form.html">
<?php
//Create a form details

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$comments=$_REQUEST['comments'];

//create the gender variable

if(isset($_REQUEST['gender']))
  {
  $gender=$_REQUEST['gender'];
  }
  else
  {
  $gender=NULL;
  }
//print the submit information

echo "<p><b>Thanking you$name<br>for the follwing comment:<br><tt>$comments</tt></p>\n<p> We will reply to you at <i>$email</i></b></p>\n";

echo "<p><b> AGE 0-20 </b></p>";

if($gender=='m' || 'f')
{
echo "<p><b> Good Day $name </b></p>";
}
else if($gender=='t')
{
echo "<p><b> Goo Day Sir/Madam </b></p>";
}
else
{
echo "<p><b> You Forgot Gender <b></p>";
}
?>
</form>
</body>
</html>

