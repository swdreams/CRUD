<?php 

   $servername = '127.0.0.1';
   $username = 'root';
   $passwd = '';
   $dbname = 'basiccrud';
   
   //connect to database
   $conn = new mysqli($servername, $username, $passwd, $dbname);

   //submit button
   if(isset($_POST['btnSubmit'])){

      //echo 'subtmit button pressed';
      $fname = $_POST['input_Fname'];
      $lname = $_POST['input_Lname'];
      $gender = $_POST['input_Gender'];
      $address = $_POST['input_Address'];

      $sql = "INSERT INTO tb_user (first_name, last_name, gender, place) VALUES ('$fname','$lname','$gender','$address')";
      $conn->query($sql);
      

      /*if($conn->query($sql) === TRUE){
         echo "New record has been added";
      }*/
   }
?>