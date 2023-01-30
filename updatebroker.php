<?php
include("connection.php");

$id=$_GET['id'];
$qy= "SELECT * FROM broker where ID='$id';";
  $data= mysqli_query($conn, $qy);
  $total= mysqli_num_rows($data);
  $row= mysqli_fetch_assoc($data);
  

?>
<?php
  
  if(isset($_POST['update']))
  {
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $exp=$_POST['exp'];
    $addr=$_POST['addr'];
    $comm=$_POST['comm'];
    $status=$_POST['status'];
    if($name!="" && $contact!="" && $email!="" && $exp!="" && $addr!="" && $comm!="" && $status!="")
    {
               
                $query="update broker set name='$name', contact='$contact', 
                email='$email', exp='$exp', addr='$addr', 
                comm='$comm',status='$status' where ID='$id' ";
                $data=mysqli_query($conn,$query);

                if($data)
                {
                    echo "<script>alert('Record Updated')</script>";
                    ?>
                    <meta http-equiv = "refresh" 
                    content = "0; url =http://localhost/realstate/brokerdetails.php " />
                    <?php

                }
                else
                {
                    echo "failde";
                }
    }
    else
        {
            echo '<script>
            alert("please fill all the field")</script>';
        }

   
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real State</title>
    <link rel="stylesheet" href="panel.css">
</head>
<body class="bg">
    <div class="start">
        <fOrm name="form" method="POST" >
            <h1 >Update Details</h1>
            <label>Name</label>
            <input type="text" id="user" value="<?php echo $row['name'];?>" name="name" class="txtbox" required/><br/>
            <label>Contact </label>
            <input type="tel" id="pass" value="<?php echo $row['contact'];?>"  name="contact"class="txtbox" required/>,<br/>
            <label>Email</label>
            <input type="email" id="pass" value="<?php echo $row['email'];?>"  name="email" class="txtbox" required/>,<br/>
            <label>Experiences</label>
            <input type="number" id="pass" value="<?php echo $row['exp'];?>"  name="exp"class="txtbox" required/>,<br/>
            <label>Selected Property</label>
            <input type="text" id="pass" value="<?php echo $row['addr'];?>"  name="addr"class="txtbox" required />,<br/>
            <label>Change Property</label>
            <?php
                   $qy=mysqli_query($conn,"select * from property");
                   $count=mysqli_num_rows($qy);
            ?>
           
            <select name="addr" class="txtbox"  id="">
                <option value="">Select anyone</option>
            <?php
            for($i=1;$i<=$count;$i++)
            {
                $res=mysqli_fetch_array($qy);
            
            ?>
            <option value="<?php echo $res["address"]?>"><?php echo $res["address"]?></option>
            <?php
            }
            ?>
            </select><br/>
            
            <label>Commission (%)</label>
            <input type="number" id="pass" value="<?php echo $row['comm'];?>"  name="comm"class="txtbox" required />,<br/>
            <label>Status</label>
            <select name="status"  class="txtbox" id="" style="color:black;">
                    <option value="not selected">Select</option>
                    <option value="active"
                    <?php
                    if($row['status'] =='active')
                    {
                        echo "selected";
                    }
                    ?>
                    >Active</option>
                    <option value="inactive"
                    <?php
                    if($row['status'] =='inactive')
                    {
                        echo "selected";
                    }
                    ?>>INActive</option>
                </select>
                
              <br/><br/>
            <input type="submit"  value="Update" class="btn" name="update"/ >
            <a href="brokerdetails.php"><input type="button" value="back" class="btn"/></a>
        </fOrm>
    </div>
   

            
        

</body>
</html>