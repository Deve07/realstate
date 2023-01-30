<?php
  include("connection.php");


  if(isset($_POST['register']))
  {
        $ownername=$_POST['ownername'];
        $ocontact=$_POST['ocontact'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $zipcode=$_POST['zipcode'];
        $kindofproperty=$_POST['kindofproperty'];
        $area=$_POST['area'];
        $totalvalution=$_POST['totalvalution'];
        $propertystatus=$_POST['propertystatus'];
        

        if($ownername!="" && $ocontact!="" && $address!="" && $city!="" && $zipcode!="" && $kindofproperty!="" && $totalvalution!="" && $propertystatus!="")
        {
                    $query= "insert into property (ownername,ocontact,address,city,zipcode,kindofproperty,area,totalvaluation,propertystatus) values('$ownername','$ocontact','$address','$city','$zipcode','$kindofproperty','$area','$totalvalution','$propertystatus')";
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
            <h1 >Add Property</h1>
            <label>Owner Name</label>
            <input type="text" id="user" name="ownername" class="txtbox" placeholder="" required/><br/>
            <label>Contact </label>
            <input type="tel" id="pass" name="ocontact"class="txtbox" required /><br/>
            <label>Address</label>
            <input type="text" id="pass" name="address" class="txtbox"  required/><br/>
            <label>City</label>
            <input type="text" id="pass" name="city"class="txtbox" required /><br/>
            <label>Zip Code</label>
            <input type="text" id="pass" name="zipcode"class="txtbox" required /><br/>
            <label>Kind Of Property </label>
            <input type="text" id="pass" name="kindofproperty" class="txtbox" required/><br/>
            <label>Area</label>
            <input type="number" id="pass" name="area"class="txtbox" placeholder="in sqft" required /><br/>
            <label>Total Valuation</label>
            <input type="number" id="pass" name="totalvalution" class="txtbox" required/><br/>

            <label>Property Status </label>
            <select name="propertystatus" class="txtbox" id="">
                    <option value="not selected">Select</option>
                    <option value="active">Active</option>
                    <option value="inactive">INActive</option>
                </select>
              <br/><br/>
            <input type="submit" class="btn" name="register"/>
            <a href="welcome.php"><input type="button" value="back" class="btn"/></a>
        </fOrm>
    </div>
   

            
        

</body>
</html>
