<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="container">
            <div class="row justify-content-md-top">
                <div class="col-40">
            <div class="card ">
                <div class="card-body">
                    <h5 class="card-title">USER LOGIN FORM</h5>
                    <p class="card-text">
                        please login here!
                        </p>
                    <form action="includes\login.php" method="POST">  
                        <div class="container">   
                            <label>Username : </label>   
                            <input type="text" placeholder="Enter Username" name="username" required> 
                            <br> 
                            <label>Password : </label>   
                            <input type="password" placeholder="Enter Password" name="pwd" required>  
                            <br>
                            <button type="submit">Login</button>   
                            <br>
                            <input type="checkbox" checked="checked"> Remember me   
                            <br>
                            <button type="button" class="cancelbtn"> Cancel</button>  
                            <br> 
                            Forgot <a href="#"> password? </a>   
                        </div>   
                    </form> 
                </div>   
            </div>
            </div>
            </div>
            </div>
</body>
</html>
<?php
    include_once 'conn.php';
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    $namepwdverify = "select * from CUSTOMER where username = '$username' && password = '$password'";
    $result = mysqli_query($conn, $namepwdverify);
    $num = mysqli_num_rows($result);
    if($num == 1)
    {
        header("Location: ./home.php?login=sussess!");
    }
?>
