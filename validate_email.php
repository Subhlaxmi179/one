 <?php
$conn = mysqli_connect("localhost","root","","user");
$email = $_POST["mail"];
$res=mysqli_query($conn,"SELECT * FROM users WHERE email ='$email' ");
$count = mysqli_num_rows($res);
if($count > 0){
  echo "y";
}
else{
  echo "n";
}

 ?>
