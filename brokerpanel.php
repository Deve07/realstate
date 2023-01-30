<?php
  include("connection.php");


  if(isset($_POST['register']))
  {
    $Name=$_POST['name'];
    $Contact=$_POST['contact'];
    $Email=$_POST['email'];
    $Experiences=$_POST['experiences'];
    $Status=$_POST['status'];
    $Properties=$_POST['property'];
    $Commision=$_POST['commision'];

    $query= "insert into broker values('$Name','$Contact','$Email','$Experiences','$Status','$Properties','$Commision')";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        echo "data inserted";
    }
    else
    {
        echo "failde";
    }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brokerpanel</title>
    <link rel="stylesheet" href="brokerpanel.css">
  
</head>
<body>
    <div class="container"> 
        <from action="" method="POST">
        <div class="title">
            Broker panel
        </div>
        <div class="form">
            <div class="input_feilds">
                <label for="">Name</label>
                <input type="text" class="input" name="name">
            </div>
            <div class="input_feilds">
                <label for="">Contact</label>
                <input type="text" class="input" name="contact">
            </div>
            <div class="input_feilds">
                <label for="">Email</label>
                <input type="text" class="input" name="email">
            </div>
            <div class="input_feilds">
                <label for="">Experiences</label>
                <input type="text" class="input" name="experiences">
            </div>
            <div class="input_feilds">
                <label for="">Property Details</label>
                <input type="text" class="input" name="property">
            </div>
            <div class="input_feilds">
                <label for="">Commision</label>
                <input type="text" class="input" name="commision">
            </div><div class="input_feilds">
                <label for="">Status</label>
                <select name="status" id="">
                    <option value="not selected">Select</option>
                    <option value="active">Active</option>
                    <option value="inactive">INActive</option>
                </select>
            </div>
            <div class="input_feild">
            <input type="submit" class="btn" name="submit"/>
            </div>

      </div>
</form>
    </div>
    
    
</body>
</html>