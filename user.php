<?php

$con= new mysqli("localhost","root","","ks_database");
if($con->connect_error)
{
    echo $con->connect_error;
    exit;
}


if(isset($_REQUEST["submit"]))
{
    $name= $_REQUEST["n"];
    $email= $_REQUEST["email"];
    $contact= $_REQUEST["contact"];
    
   $exe= $con->query("insert into user(name,email,contact) values('$name','$email','$contact')");
   
   if($exe)
   {
       echo "Data inserted Successfully";
   }
   else
   {
       echo "Something went wrong";
   }
    
}



?>



<html>
    <head>
        <title>Form Example</title>
    </head>
    <body>
        <form method="post">
        <table border="1" align="center" cellpadding="10" cellspacing="0">
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" id="n" name="n">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" id="email" name="email">
                </td>
            </tr>
            <tr>
                <td>Contact</td>
                <td>
                    <input type="text" id="contact" name="contact">
                </td>
            </tr>
            <tr>
               
                <td align="center" colspan="2">
                    <input type="submit" id="submit" name="submit" value="Submit">
                </td>
            </tr>
        </table>
            </form>
    </body>
</html>