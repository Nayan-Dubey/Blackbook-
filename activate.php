<?php
session_start();
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'signup');
if(isset($_GET['token']))
{
    $token=$_GET['token'];
    $updatequery="update registration set status='active' where token='$token'";
    $query=mysqli_query($con,$updatequery);
    if($query)
    {
        ?>
        <script>
        alert('Account verified!')
        
        </script>
        <?php
        header('location:index.php');
    }
    else
    {
        ?>
        <script>
        alert('Account not verified!')
        
        </script>
        <?php
        header('location:index.php');  
    }
}


?>