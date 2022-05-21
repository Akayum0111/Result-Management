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
<html>
<head>
    <title>Messages</title>
<link rel="stylesheet" href="../css/usermessage.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li class="logout"><a href="logout.php">LOGOUT</a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form>
        <h5>Messages of Student</h5>
         <table>
          <tr>
           <th class="thead_h1">Id </th>
           <th class="thead_h1">Roll No </th>
           <th class="thead_h1">Name </th> 
           <th class="thead_h1">Email </th> 
           <th class="thead_h1">Contact No</th>
           <th class="thead_h1">Message </th>
          </tr>
        
<?php
include('../config.php');
  $sql=" select * from user_message";
  $run=mysqli_query($conn,$sql);
  if(mysqli_num_rows($run)>0)
{
     while($row=mysqli_fetch_assoc($run))
     {
        ?>
        <tr>
            <th class="cell_data"> <?php  echo $row['msgid'].'<br>'; ?></th>
            <th class="cell_data"> <?php  echo $row['rollno'].'<br>'; ?></th>
            <th class="cell_data"> <?php  echo $row['name'].'<br>'; ?></th> 
            <th class="cell_data"> <?php  echo $row['email'].'<br>'; ?></th> 
            <th class="cell_data"> <?php  echo $row['phone'].'<br>'; ?></th> 
            <th class="cell_data"> <?php  echo $row['message'].'<br>'; ?></th> 
        </tr>     
        <?php    
        }
   
}
else{
    echo "Connection failed";
}

?>
              </table>
        </form>
      </div>
    </header>
</body>
</html>
