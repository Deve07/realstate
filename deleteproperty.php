<?php
include("connection.php");
$id=$_GET['id'];
$query="delete from property where ID='$id';";
$data=mysqli_query($conn,$query);
if($data)
{
    ?>
    echo "<script>alert('Record Deleted')</script>";
                    ?>
                    <meta http-equiv = "refresh" 
                    content = "0; url =http://localhost/realstate/propertydetails.php " />
                    <?php
}
else{
    echo "not deleted";
}

?>