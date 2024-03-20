<?php
    include_once 'conn.php';
    $username = $_POST['username'];
    $R_cust_id = "SELECT Customer_id from CUSTOMER where username = '$username'";
    $Result = mysqli_query($conn, $R_cust_id);
    
    if (mysqli_num_rows($Result) > 0) 
    {
        // output data of each row
            while($row = mysqli_fetch_assoc($Result)){
                $R_customer_id =  $row["Customer_id"];
            }
    }
    $Rent_timestamp_out = '';
    $Rent_timestamp_in = '';
    $R_class_type =  '';
    $R_location_id = '';
    $Rent_timestamp_out = $_POST['from'];
    $Rent_timestamp_in = $_POST['to'];
    if($_POST['carmodeltype']) {
        $R_class_type =  $_POST['carmodeltype'];
    }
    if($_POST['carlocation']) {
        $R_location_id = (int)$_POST['carlocation'];
    }
    $R_customer_id = (int)$R_customer_id;
//    echo $Rent_timestamp_out.$Rent_timestamp_in.$R_class_type.$R_location_id.$R_customer_id;
    $sql = "INSERT INTO reservation (R_location_id,R_customer_id,R_CLASS_TYPE, Rent_timestamp_in, Rent_timestamp_out)
            VALUES ('$R_location_id', '$R_customer_id', '$R_class_type', '$Rent_timestamp_in', '$Rent_timestamp_out');";
    if (mysqli_query($conn, $sql)) {
        header("Location:  ./reservation.php?data=sussess!");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
////
    