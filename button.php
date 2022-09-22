<?php
$connection=mysqli_connect("localhost",'root','12345','sol_tech');
$conn="SELECT * from ques";
$connect_qry=mysqli_query($connection,$conn);
$result="<table>";
$result.="<tr>";
$i=0;
if($connect_qry)
{
    if(mysqli_num_rows($connect_qry)>0)
    {
       while($rows=mysqli_fetch_assoc($connect_qry))
       {
          if($i%5==0)
          {
              $result.="</tr><tr>";
              $result.="<td><button class='btns' data-idd={$rows['id']}>{$rows['id']}</button></td>";
              $i=$i+1;
          }
          else
          {
           $result.="<td><button class='btns' data-idd={$rows['id']}>{$rows['id']}</button></td>";
           $i=$i+1;
          }
       }
       $result.="</table>";
       echo $result;
    }
}

?>