<?php
 
// Include config file
require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

   
   $username=$_POST["name"];
   $password=$_POST["password"];
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
          if (mysqli_query($link, $sql)) {
               echo "New record created successfully";
               echo "done";
               die;
            } else {
               echo "Error: " . $sql . "" . mysqli_error($link);
               die;
            }
            $link->close();
       
   
        // Close statement
        mysqli_stmt_close($stmt);
    
    
    // Close connection
    mysqli_close($link);
}
?>
 
