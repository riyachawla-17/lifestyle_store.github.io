<?php
   require("common.php");
   $email = mysqli_real_escape_string($con,$_POST["email"]);
   $password = md5(mysqli_real_escape_string($con,$_POST["password"]));
   $hashed_password = md5($password);

   $query = mysqli_query($con,"SELECT id , email FROM users WHERE email = '$email' AND password = '$password'") or die("query failed");
   $total_rows = mysqli_num_rows($query);

   if($total_rows == 0)
   {
      echo "Invalid Credentials";
   }

   else
   {
       $row = mysqli_fetch_array($query);
       $_SESSION['email_id'] = $email;
       $_SESSION["id"] = $row["id"];
       header('location:products.php');
   } 

?>
