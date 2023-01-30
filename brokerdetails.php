
<html>
    <head>
        <style>
            body{
                background-image: url("img/lol.jpg");
                background-size: cover;
            }    
            table
            {
                
                font-size: 24px;
            }
            .update,.delete{
              margin-left:18px;
              background-color: #00FFFF;
              border-radius: 9px;
              color:black;
              font-size:19px;
              font-weight:bold;
              text-decoration:none;
              border:0;
              height:30px;
              width:80px;
              cursor: pointer;
              align:center;
            }
            .delete{
              margin-left:10px;
              background-color:#ffd700;
             

            }
        </style>
    </head>
</html>    
<?php
include("connection.php");

 

 
  $qy= "SELECT * FROM broker;";
  $data= mysqli_query($conn, $qy);
  $total= mysqli_num_rows($data);
  

  


  if($total!=0)
  {
    ?>
    <h2 align="center">Broker Details</h2>
    <table border="1" cellspacing="5" width="75%" align="center">
        <tr>
            <th width="4%">ID</th>
            <th width="12%" >Name</th>
            <th width="8%">Contact</th>
            <th width="12%">Email</th>
            <th width="3%" >Experiences</th>
            <th width="15%">Properties Address</Address></th>
            <th width="4%">Commision</th>
            <th width="7%">Status</th>
            <th width="14%">Edit/Delete</th>
        </tr>
       
   


   <?php
    
    while($row= mysqli_fetch_assoc($data))
    {
        echo  "<tr>
                <td>".$row['ID']."</td>
                <td>".$row['name']."</td>
                <td>".$row['contact']."</td>
                <td>".$row['email']."</td>
                <td>".$row['exp']."</td>
                <td>".$row['addr']."</td>
                <td>".$row['comm']."</td>
                <td>".$row['status']."</td>
                <td><a href='updatebroker.php?id=$row[ID]'><input type='submit' value='Edit' class='update'/></a>
                <a href='deletebroker.php?id=$row[ID]'><input type='submit' value='Delete' class='delete' onclick='return check()'/></a></td>
                
                
             </tr>
             ";

           //  $row['Name']." ".." ".$row['Email']." ".$row['Experiences']." ".$row['Properties']." ".$row['Commision']." ".$row['Status']."<br>"

    }
    //echo  "Table has record";
  }
  else
  {
    echo "no record found";
  }


?>
</table> 
<html>
  <head>
  <style>
    .btnn{
      margin-left:40%;
      margin-top:20px;
      width: 300px;
    height: 40px;
    border-radius: 10px;
    background-color: transpaernt;
    }
  </style>
  </head>
  <body>
    
  
<a href="display.php"><input type="button" value="Back" class="btnn"/></a>
  
</body>
</html>
<script>
  function check()
  {
    return confirm('Are you sure you want to delete this record');
  }
  </script>


