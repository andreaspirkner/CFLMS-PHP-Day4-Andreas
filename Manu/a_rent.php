<?php 

require_once 'dbconnect.php';

if ($_POST) {
   $id = $_POST['id'];

//update statement with minus 1:

   $sql = "UPDATE cars SET availability = availability-1 WHERE id = '$id'" ;
   if($conn->query($sql) === TRUE) {
       
       echo  "<p>Successfully Updated</p>";
       echo  "<p>Congratulations: the car with ID =". $id . " is yours!</p>";
       echo "<a href='rent.php?car_id=" .$id."'><button type='button'>Back</button></a>";

       echo  "<a href='home.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $conn->error;
   }

   $conn->close();

}

?>
