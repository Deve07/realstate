<?php
  include("connection.php");
  if(isset($_POST['register']))
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
                $query= "insert into broker (name,contact,email,exp,addr,comm,status) values('$name','$contact','$email','$exp','$addr','$comm','$status')";
                $data=mysqli_query($conn,$query);
                if($data)
                {
                    echo "<h1 align='center'>data inserted</h1>";
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
            <h1 >Add Broker</h1>
            <label>Name</label>
            <input type="text" id="user" name="name" class="txtbox" required/><br/>
            <label>Contact </label>
            <input type="tel" id="pass" name="contact"class="txtbox" required/>,<br/>
            <label>Email</label>
            <input type="email" id="pass" name="email" class="txtbox" required/>,<br/>
            <label>Experiences</label>
            <input type="number" id="pass" name="exp"class="txtbox" required/>,<br/>
            <label>Select Propeties</label>
            <?php
                   $qy=mysqli_query($conn,"select * from property");
                   $count=mysqli_num_rows($qy);
            ?>
            <select name="addr" class="txtbox" required id="">
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
            <input type="number" id="pass" name="comm"class="txtbox" required />,<br/>
            <label>Status</label>
            <select name="status" class="txtbox" id="" style="color:black;">
                    <option value="not selected">Select</option>
                    <option value="active">Active</option>
                    <option value="inactive">INActive</option>
                </select>
              <br/><br/>
            <input type="submit" class="btn" name="register"/ >
            <a href="welcome.php" style="text-decoration: none;"><input type="button" value="back" class="btn"/></a>
        </fOrm>
    </div>
   

            
        

</body>
</html>