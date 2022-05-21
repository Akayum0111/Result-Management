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
include("../config.php");
$id=$_GET['ids'];
$sql="DELETE from `marks` where `rollno`='$id'";
$runsql=mysqli_query($conn,$sql);
if($runsql){
        ?>
        <script>alert("Row deleted");
        window.open('allmarks.php','_self');
        </script>
        <?php
    }else{
        ?>
        <script>alert("Row not deleted");
        window.open('allmarks.php', '_self');
        </script>
        <?php

        }
        
?>