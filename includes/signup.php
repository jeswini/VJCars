<?php
    include_once 'conn.php';

    $customer_id = $_POST['custid'];
    $First_Name = $_POST['first'];
    $Last_Name = $_POST['last'];
    $Full_name = $_POST['full'];
    $Email = $_POST['email'];
    $H_Number = $_POST['h_num'];
    $Street_Name = $_POST['street'];
    $City = $_POST['city'];
    $State = $_POST['State'];
    $Zipcode = $_POST['Zipcode'];
    $username = $_POST['username'];
    $password = $_POST['pwd'];

    $nameverify = "select * from CUSTOMER where customer_id = $customer_id AND username = '$username'";

    $result = mysqli_query($conn, $nameverify);
    $num = mysqli_num_rows($result);

    if($num == 1)
     {

        echo "username already taken";
     }
    else
    {
         $sql = "INSERT INTO CUSTOMER(Customer_id,First_Name,Last_Name,Full_name,Email,H_Number,Street_Name,City,State,Zipcode,username,password) 
                VALUES ($customer_id,'$First_Name','$Last_Name','$Full_name','$Email',$H_Number,'$Street_Name','$City','$State',$Zipcode,'$username','$password');";
         mysqli_query($conn, $sql);
     }
    
    header("Location: home.php?signup=sussess!");

