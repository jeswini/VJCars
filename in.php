<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rentacar</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #303641;
            background-image: url(/images/mercedes.webp);
        }
    </style>
</head>
<body>

    <div class="container">
            <div class="row justify-content-md-right">
                <div class="col-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">USER SIGNUP FORM</h5>
                        <p class="card-text">
                            please sign-up here!
                        </p>
                                    <form action="includes\signup.php" method="POST" alignment = "left">
                                        <input type="text" name="custid" placeholder="ID"> 
                                        <br>
                                        <input type="text" name="first" placeholder="Firstname">
                                        <br> 
                                        <input type="text" name="last" placeholder="lastname"> 
                                        <br>
                                        <input type="text" name="full" placeholder="fullname"> 
                                        <br>
                                        <input type="text" name="email" placeholder="email-address">
                                        <br> 
                                        <input type="text" name="h_num" placeholder="Housenumber"> 
                                        <br>
                                        <input type="text" name="street" placeholder="Street_Name"> 
                                        <br>
                                        <input type="text" name="city" placeholder="City"> 
                                        <br>
                                        <input type="text" name="State" placeholder="State"> 
                                        <br>
                                        <input type="text" name="Zipcode" placeholder="Zipocode"> 
                                        <br>
                                        <input type="text" name="username" placeholder="enter your username"> 
                                        <br>
                                        <input type="text" name="pwd" placeholder="password"> 
                                        <br>
                                        <button type="submit" name="submit">Sign up</button>
                                        <label>already a user? </label>
                                        <a href="/includes/loginactual.php"> login </a>
                                    </form>
                    </div>
                </div>
                </div>
                </div>
                </div>
                

       
</body>
</html>