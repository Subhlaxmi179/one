 <?php
$conn = mysqli_connect("localhost","root","","user");
$email = $_POST["mail"];
$res=mysqli_query($conn,"SELECT * FROM users WHERE email ='$email' ");

 ?>
