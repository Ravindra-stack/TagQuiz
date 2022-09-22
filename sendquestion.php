<?php
$idno=$_POST['id'];
$questions=$_POST['question'];
$options1=$_POST['option1'];
$options2=$_POST['option2'];
$options3=$_POST['option3'];
$options4=$_POST['option4'];
$correctans=$_POST['correctoption'];

$connection=mysqli_connect("localhost","root","12345","sol_tech");
$conn="INSERT into ques values(0,'{$questions}','{$options1}','{$options2}','{$options3}','{$options4}','{$correctans}')";
$res=mysqli_query($connection,$conn);
if($res)
{
   echo 1;
}
else{
    echo 2;
}

?>
