<?php
  
  include("connection.php");
  if(isset($_POST['submit']))
  {
  $username=$_POST['email'];
  $sql="select * from broker where email='$username' and status='active' ";
  $result= mysqli_query($conn,$sql);
  $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count=mysqli_num_rows($result);
        if($count==1)
        {
          header("Location:brokerloginafterdetails.php?id=$row[email]");
        }
        else{
          echo '<script>
              window.location.href="index.php";
              alert("login failed: You are not active broker");
              </script>';
        }
  }

    
?>