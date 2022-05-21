
<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}           
				
?>
<?php

include('../config.php');
if(isset($_POST['submit']))
{

    $rollno=$_POST['rollno'];
    $maths=$_POST['maths'];
    $dd=$_POST['dd'];
    $os=$_POST['os'];
    $dbms=$_POST['dbms'];
    $lab=$_POST['lab'];
    
    
    $sql="INSERT INTO marks VALUES ('$rollno','$maths','$dd','$os','$dbms','$lab')";
    
    $run=mysqli_query($conn,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Marks Inserted Succesfully');
        window.open('addstudent.php', '_self');
        </script>
        <?php
    }
    else{
        ?>
        <script>
        alert('Marks not Inserted');
        window.open('addstudent.php', '_self');
        </script>
        <?php
    }
}
?>