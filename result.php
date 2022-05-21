
<?php
include('config.php');
if(isset($_POST['submit']))
{

	
	

	$rollno=$_POST['rollno'];
	$sql=" SELECT * FROM `student_data` WHERE `rollno`='$rollno'";
  $sql2="SELECT * FROM `marks` WHERE `rollno`='$rollno'";
  $run=mysqli_query($conn,$sql);
  $run2=mysqli_query($conn,$sql2);
   $row2=mysqli_num_rows($run2);
   $data2=mysqli_fetch_assoc($run2);
   echo $data['name'];
       
    if(mysqli_num_rows($run)>0)
    {
      $data=mysqli_fetch_assoc($run);
  ?>

  <html>
  <head>
    <title>Result</title>
  <link rel="stylesheet" href="css/result.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

  </head>
  <body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php"><b>HOME</b></a></li>
                <li><a href="admin/aboutus.php"><b>ABOUT</b></a></li>
                <li><a href="admin/contactus.php"><b>CONTACT</b></a></li>
                <li><a href="login.php"><b>ADMIN LOGIN</b></a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="post" action="result.php">
          <table class="table">
              <tr>
              <th>Name :</th>
                <td><?php echo $data['name'] ?></td>
    </tr>
    <tr> 
              <th>Father's Name :</th>
              <td><?php echo $data['fname']; ?></td>
              </tr>
              <tr>
              <th>Roll No :</th>
              <td><?php echo $data['rollno']; ?></td>
              </tr>
              <tr>
              <th>Course :</th>
              <td><?php echo $data['course']; ?></td>
    </tr>
    <tr>
              <th>Semester:</th>
              <td><?php echo $data['semester']; ?></td>
              </tr> 
          </table>
          <table class="table2">
              <tr>
               <th>Suject Title</th><th>Max.Marks</th><th>Pass Marks</th><th>Marks Obtained</th>
              </tr>
              <tr>
                  
              <th>Maths</th>
              <th>100</th>
              <th>30</th>
                <th><?php echo $data2['maths']; ?></th> 
              </tr>
              <tr>  
              <th>Digital Design</th>
              <th>100</th>
              <th>30</th>
                <th><?php echo $data2['dd']; ?></th>
              </tr>
              <tr>
              <th>Operating System</th>
              <th>100</th>
              <th>30</th>
                  <th><?php echo $data2['os']; ?></th>
              </tr>
              <tr>
              <th>DBMS</th>
              <th>100</th>
              <th>30</th>
                  <th><?php echo $data2['dbms']; ?></th>
              </tr>
              <tr>
              <th>Lab</th>
              <th>100</th>
              <th>30</th>
                  <th><?php echo $data2['lab']; ?></th>
              </tr>
    </table>
    <table class="table3">
              <tr>
                  <th>Total</th>
                  <th>
                   <?php echo 500?>
                  </th>
                  <th>
                  <?php echo 150 ?>
                  </th>
                  
                  <th><span><?php echo $all=$data2['maths']+$data2['dd']+$data2['os']+$data2['dbms']+$data2['lab'] ?></span></th>    
              </tr>    
             
          </table>
             <h3>You Are <span><?php 
                        if($data2['maths']<30 OR $data2['dd']<30 OR $data2['os']<30 OR $data2['dbms']<30 OR $data2['lab']<30) 
                        {
                            echo "Fail";
                        }
                       else
                       {
                           echo"Pass";
                       }
                      ?></span>
            <table class="table4">
              <tr>
                <td > <a href="download.php?id=<?php  echo $data['rollno'];?>"><p> Download<p></a></td>  
              </tr>
            </table>
       </form>
      </div>
    </header>
    
  </body>
  </html>
  <?php
    }
    else
  {
  ?>
  <script>
  alert('Record Not found');
    window.open('index.php','_self');
  </script>
  <?php
  }
  }
?>
