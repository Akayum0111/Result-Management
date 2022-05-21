
<?php
require('pdf/vendor/autoload.php');
include('config.php');
$ids=$_GET['id'];

	$sql=" SELECT * FROM `student_data` WHERE `rollno`='$ids'";
  $sql2="SELECT * FROM `marks` WHERE `rollno`='$ids'";
  $run=mysqli_query($conn,$sql);
  $run2=mysqli_query($conn,$sql2);
   $row2=mysqli_num_rows($run2);
   $data2=mysqli_fetch_assoc($run2);

       
    if(mysqli_num_rows($run)>0)
    {
      $row=mysqli_fetch_assoc($run);
      $all=$data2['maths']+$data2['dd']+$data2['os']+$data2['dbms']+$data2['lab'];
        $html="<table>";
            $html.="<tr><th>Rollno:</th><td>$row[rollno]</td></tr>
            <tr><th>Name:</th><td>$row[name]</td></tr>
            <tr><th>Fname:</th><td>$row[fname]</td></tr>
            <tr><th>Course:</th><td>$row[course]</td></tr>
            <tr><th>Semester:</th><td>$row[semester]</td></tr>";
             
        $html.="</table>";
        $html.="<table style='border:1px ridge;width:100%;'>";
        $html.="<tr><th>Suject Title</th><th>Max.Marks</th><th>Pass Marks</th><th>Marks Obtained</th></tr>
        <tr><th>Maths</th><th>100</th><th>30</th><th>$data2[maths]</th> </tr>
        <tr> <th>Digital Design</th><th>100</th><th>30</th><th>$data2[dd]</th></tr>
        <tr><th>Operating System</th><th>100</th><th>30</th><th>$data2[os]</th></tr>
        <tr><th>DBMS</th><th>100</th><th>30</th><th>$data2[dbms]</th></tr>
        <tr><th>Lab</th><th>100</th><th>30</th><th>$data2[lab]</th></tr>";

        $html.="</table>";
        $html.="<table style='border:1px;width:100%;'>
              <tr ><th>Total</th><th>500</th><th>150</th><th><span>$all</span></th></tr>";  
        $html.="</table>";
        
       $html.="<h3>You Are</h3>";if($data2['maths']<30 OR $data2['dd']<30 OR $data2['os']<30 OR $data2['dbms']<30 OR $data2['lab']<30) 
        {
            echo $html.="<span>Fail";
        }
       else
       {
           echo $html.="Pass </span>";
       }
      

    }
    

  $mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file=time().'.pdf';
$mpdf->Output($file,'I');
?>
