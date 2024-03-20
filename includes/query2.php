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
          <a class="dropdown-item" href="#">query1</a>
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



<div style="position: relative" , ><p style="position: fixed; bottom: 0; width:100%; text-align: center">Result of query 1</p></div>

<?php  include_once 'conn.php';
$query = "select Licence_state, sum(updated_reading) 
          as updated_read from rental_agreement 
          GROUP BY 1";

echo "<b>"."Group by Query:"."</b><br>";
print("\n");
print("Print sum of updated reading of cars  in each city."."<br>");
print($query);
print("<br><br>");

echo "<b>"."Query Result:"."</b><br><br>";
$result = mysqli_query($conn, $query);
$num_supp_name = mysqli_num_rows($result);
?>
<table>
<tr>
<th >&nbsp STATE &nbsp </th>
<th align="left">&nbsp UPDATED_READ &nbsp </th>
</tr>
<?php

while ($row = mysqli_fetch_array($result)) {

echo "<tr>";
echo "<td>  &nbsp &nbsp ".$row[0]."</td>";
echo "<td > &nbsp ".$row[1]."</td>";
?>

<?php
echo "</tr>";
}
?>

 </table>
</body>
</html>



