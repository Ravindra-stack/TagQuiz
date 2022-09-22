<?php
$nextbtn=$_POST['next'];
$connection=mysqli_connect("localhost",'root','12345','sol_tech');
$conn="SELECT * from ques where id={$nextbtn}";
$connect_qry=mysqli_query($connection,$conn);
$result="";
if($connect_qry)
{
    if(mysqli_num_rows($connect_qry)>0)
    {
        while($rows=mysqli_fetch_assoc($connect_qry))
        {
          $result.="<div class='show_questions'>
                 <p class='question'><b>Question No:{$rows['id']}</b></p>
                 <p class='question'><b>Multiple Choice(Select 1 out of 4 options, for the question below)</b></p>
                 <p class='question'><b>{$rows['question']}</b></p>
                 </div>
      <div>
          <ul type='none'>
              <li class='options'><input type='radio' name='one'/><b><p class='opt'>{$rows['option_1']}</p></b></li>   
              <li class='options'><input type='radio' name='one'/><b><p class='opt'>{$rows['option_2']}</p></b></li>   
              <li class='options'><input type='radio' name='one'/><b><p class='opt'>{$rows['option_3']}</p></b></li>   
              <li class='options'><input type='radio' name='one'/><b><p class='opt'>{$rows['option_4']}</p></b></li>   
          </ul>
      </div>"; 
        }
        echo $result;
    }
        
}

?>