<?php 

   $servername = '127.0.0.1';
   $username = 'root';
   $passwd = '';
   $dbname = 'basiccrud';
  /* $id ='';
   $fname = '';
   $lname = '';
   $gender = '';
   $location = '';
   $update = 'Update';*/

   
   //connect to database
   $conn = new mysqli($servername, $username, $passwd, $dbname);

   //submit button
   if(isset($_POST['btnSubmit'])){
      $fname = $_POST['inputFname'];
      $lname = $_POST['inputLname'];
      $gender = $_POST['inputGender'];
      $address = $_POST['inputAddress'];

      $sql = "INSERT INTO tb_user (first_name, last_name, gender, place) VALUES ('$fname', '$lname', '$gender', '$address')";
   }else{
      if($conn->error)
         echo 'failed to add';
   }
/*
   //edit button
   if(isset($_GET['btnEdit'])){
      $id = $_GET['id'];
      $sql = "SELECT * FROM tb_user WHERE id=$id";
      $result = $conn->query($sql);
      $row = $result->fetch_object();
      $fname = $row->first_name;
      $lname = $row->last_name;
      $gender = $row->gender;
      $location = $row->place;

   } else {
      
   }*/
?>