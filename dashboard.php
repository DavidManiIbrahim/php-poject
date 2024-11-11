<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="./dashboard.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Add jQuery -->
  <style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }

  body {
    display: flex;
    height: 100vh;
    overflow-y: auto;
    background-color: #f0f0f5;
    /* width: 100vw; */
  }

  /* Sidebar */
  .sidebar {
    /* border: 1px solid red; */
    max-width: 400px;
    background-color: #d8b4f1;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  .sidebar a {
    text-decoration: none;
    color: #000;
    font-weight: bold;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    font-size: 15px;
  }



  .sidebar a:hover {
    color: #4e2a8e;
  }


.container{
  /* border: 1px solid; */
  overflow-y: scroll;
  width: 100%;
}

table {
  /* overflow-y: scroll; */
  /* border: 1px solid green; */
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  width: 40%;
  height: 5vh;
  /* padding: 10px; */
}

.title{
  width: 300px;
}

tr{
  /* border: 1px solid; */
  height: 5vh;
}

tr:nth-child(even) {
  background-color: #e3c6f6;
}

.head{
    text-align: center;
    color: #4e2a8e;
}

.txt1{
    margin-top: 5px;
}

button{
    cursor: pointer;
    float: right;
    border-radius: 5px;
    padding: 5px;
    border: none;
    /* background-color: paleturquoise; */
}
</style>
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <a href="./admin.php" class="logout"> <img src="./src/assets/logout.png" alt=""> Logout</a>
  </div>




</body>
</html>


<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Dashboard</title>
</head>

<body>
<div class="container">

  <table>
    <tr>
      <!-- <th>ID</th> -->
        <th class="title">TITLE</th>
        <th>Suggestion</th>
        
    </tr>
    <?php


$query = "SELECT * FROM suggestions";
$result = mysqli_query( $conn, $query);
echo '<tr>';
while($row=mysqli_fetch_array($result)){
?>
<!-- <td><?php echo $row['id']?></td> -->
<td><?php echo $row['title']?></td>
<td><?php echo $row['suggestion'];?></td>

</tr>

<?php
}
?>
</table>    
</div>
</body>
</html>