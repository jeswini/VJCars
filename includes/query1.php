<?php
	 include_once 'conn.php';
?> 
   

<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="stylemenu.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <title>Group By</title>

</head>

<body style="background-color:#ADD8E6">
<nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand" target="_blank">
          <strong>VJCARs</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="nofollow" href = "renting.php"
                target="_blank">rent a car</a>
            </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          queries
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="query1.php">query1</a>
          <a class="dropdown-item" href="query2.php">query2</a>
        </div>
        <li class="nav-item">
              <a class="nav-link" rel="nofollow" href = "renting.php"
                target="_blank">logout</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>



<div style="position: relative" , ><p style="position: fixed; bottom: 0; width:100%; text-align: center">Result of query 2</p></div>

<?php  include_once 'conn.php';
$query = "SELECT MODEL_ID, MAKE, MODEL_YEAR, SUM(WEEKLY_PRICE) AS weekly_fares, SUM(DAILY_PRICE) AS daily_fares
            FROM model m
            JOIN car_class c
            ON c.CLASS_TYPE = m.CLASS_TYPE
            group by 1
            HAVING weekly_fares > 600
            ORDER BY daily_fares;";
echo "<b>"."Group by and having Query:"."</b><br>";
print("Print sum of the weekly_fares for types of cars in each model having weeklyfares greater than 600");
print("SELECT MODEL_ID, MAKE, MODEL_YEAR, ADDRESS, SUM(WEEKLY_PRICE) AS weekly_fares, SUM(DAILY_PRICE) AS daily_fares"."<br>".
        "FROM model m"."<br>".
        "JOIN car_class c"."<br>".
        "ON c.CLASS_TYPE = m.CLASS_TYPE"."<br>".
         "group by 1"."<br>".
        "HAVING weeklyfares > 600"."<br>".
         "ORDER BY daily_fares");
         print("<br><br>");
         $result = mysqli_query($conn, $query);
         $num_supp_name = mysqli_num_rows($result);
         echo "<b>"."Query Result:"."</b><br><br>";
         ?>
         <table>
         <tr>
         <th >MODEL_ID &nbsp </th>
         <th align="left">&nbsp MAKE &nbsp </th>
         <th align="left">&nbsp MODEL_YEAR &nbsp </th>
         <th align="left">&nbsp weekly_fares &nbsp </th>
         <th align="left">&nbsp daily_fares &nbsp </th>
         </tr>
         <?php
         
         while ($row = mysqli_fetch_array($result)) {
         
         echo "<tr>";
         echo "<td>  &nbsp &nbsp ".$row[0]."</td>";
         echo "<td > &nbsp ".$row[1]."</td>";
         echo "<td > &nbsp ".$row[2]."</td>";
         echo "<td > &nbsp ".$row[3]."</td>";
         echo "<td > &nbsp ".$row[4]."</td>";
         ?>
         
         <?php
         echo "</tr>";
         }
         ?>
         
          </table>
         </body>
         </html>