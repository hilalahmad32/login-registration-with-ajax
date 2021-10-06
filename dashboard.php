
<?php 
session_start();

if(!isset($_SESSION["id"])){
    header("location:login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Dashboard</h1>
        <hr>
        <div id="data"></div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
<script src="js/app.js"></script>

</body>

</html>