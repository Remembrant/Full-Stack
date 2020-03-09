<?php
require ('php.php');

if(isset($_POST['signup-btn'])){

  $uPass = $_POST["uPass"];
  $cPass = $_POST["cPass"];
  if ($uPass==$cPass) {



         $sql1 = "SELECT * FROM users WHERE stud_num ='".$_POST["stud_num"]."' ";
                  $result = $conn->query($sql1);
                  if ($result->num_rows > 0) {
                      echo "<script>alert('Sorry, user already exist!');window.location='../register.php'</script>";
                      
                 }
                  else{
                    $sql = "INSERT INTO users (id,stud_num,name,phone,email,uPass) VALUES ('" . $_POST["id"] . "','" . $_POST["stud_num"] . "','" . $_POST["name"] . "','" . $_POST["phone"] . "','" . $_POST["email"] . "','" . $_POST["uPass"] . "' )";

                    if ($conn->query($sql) === TRUE)
                    {

                        echo "<script>alert('User registered successfull!!! ');window.location='../login.php'</script>";
                       
                    }
                    else
                    {
                        echo "<script>alert('There was an Error');window.location='../register.php'<script>" . $sql . "<br>" . $conn->error;

                    }


                  }
            }
            else
            {
              echo "<script>alert('Please confirm your password again!!!');window.location='../register.php'</script>";
            }
            $conn->close();
        }
