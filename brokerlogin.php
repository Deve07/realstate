
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real State</title>
    <link rel="stylesheet" href="login.css">
</head>
<body class="bg">
    <div class="start">
        <fOrm name="form" method="POST" action="brokerverify.php" onsubmit="return isvalid()">
            <h1>Login </h1>
            <input type="email" id="user" name="email" class="txtbox" placeholder="Enter Email ID"/><br/>
              <br/><br/>
            <input type="submit"  class="btn" name="submit"/>
        </fOrm>
    </div>
    <script>
        function isvalid(){
            var user=document.form.user.value;
            var pass=document.form.pass.value;
            if(user.length=="")
            {
                alert("username password should not be empty");
                return false
            }
        }
        else
        {
            if(user.length=="")
            {
                alert("username cannot be empty");
                return false;
            }
            

            

        }

            
        
    </script>
</body>
</html>
