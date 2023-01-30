<?php
include("connection.php");

$id=$_GET['id'];
$qy= "SELECT * FROM property where ID='$id';";
  $data= mysqli_query($conn, $qy);
  $total= mysqli_num_rows($data);
  $row= mysqli_fetch_assoc($data);
  

?>
<?php
  
  if(isset($_POST['update']))
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
               
                $query="update property set ownername='$ownername', ocontact='$ocontact', 
                address='$address', city='$city', zipcode='$zipcode', 
                kindofproperty='$kindofproperty',area='$area' ,totalvaluation='$totalvalution', propertystatus='$propertystatus' where ID='$id' ";
                $data=mysqli_query($conn,$query);

                if($data)
                {
                    echo "<script>alert('Record Updated')</script>";
                    ?>
                    <meta http-equiv = "refresh" 
                    content = "0; url =http://localhost/realstate/propertydetails.php" />
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
            <label>Owner Name</label>
            <input type="text" id="user" value="<?php echo $row['ownername'];?>" name="ownername" class="txtbox" placeholder="" required/><br/>
            <label>Contact </label>
            <input type="tel" id="pass" value="<?php echo $row['ocontact'];?>"name="ocontact"class="txtbox" required /><br/>
            <label>Address</label>
            <input type="text" id="pass" value="<?php echo $row['address'];?>" name="address" class="txtbox"  required/><br/>
            <label>City</label>
            <input type="text" id="pass" value="<?php echo $row['city'];?>" name="city"class="txtbox" required /><br/>
            <label>Zip Code</label>
            <input type="text" id="pass" value="<?php echo $row['zipcode'];?>" name="zipcode"class="txtbox" required /><br/>
            <label>Kind Of Property </label>
            <input type="text" id="pass" value="<?php echo $row['kindofproperty'];?>"  name="kindofproperty" class="txtbox" required/><br/>
            <label>Area</label>
            <input type="number" id="pass" value="<?php echo $row['area'];?>" name="area"class="txtbox" placeholder="in sqft" required /><br/>
            <label>Total Valuation</label>
            <input type="number" id="pass" value="<?php echo $row['totalvaluation'];?>" name="totalvalution" class="txtbox" required/><br/>

            <label>Property Status </label>
           
                <select name="propertystatus"  class="txtbox" id="" style="color:black;">
                    <option value="not selected">Select</option>
                    <option value="active"
                    <?php
                    if($row['propertystatus'] =='active')
                    {
                        echo "selected";
                    }
                    ?>
                    >Active</option>
                    <option value="inactive"
                    <?php
                    if($row['propertystatus'] =='inactive')
                    {
                        echo "selected";
                    }
                    ?>>INActive</option>
                </select>
                
              <br/><br/>
            <input type="submit"  value="Update" class="btn" name="update"/ >
            <a href="propertydetails.php"><input type="button" value="back" class="btn"/></a>
        </fOrm>
    </div>
   

            
        

</body>
</html>