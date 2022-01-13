<?php
$servername="localhost";
$username="root";
$password="";
$database="local";

$conn=mysqli_connect($servername,$usernamr,$password,$database);
if(!$conn)
die("<script>alert('connection failed')</script">)

?>
//config.php
//hello.php use to start seesion
<?php
session_start()
if(isset($_SESSION['username'])){
  header("location:index.php")  
}

<body>
    <?php
    echo "<h1>welcome".$_SESSION['username']."</h1>"?>
    <a href="logout.php">logout</a>

</body>

?>