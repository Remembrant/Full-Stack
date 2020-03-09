<?php
 require('php.php');

 if(isset($_POST["signin-btn"])){
							$sql= "SELECT * FROM users WHERE stud_num = '" . $_POST["stud_num"]."' AND uPass= '" . $_POST["uPass"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											// $_SESSION["email"]= $_POST["email"];
											// $_SESSION['userstatus']= "yes";
											echo "<script style='color:green;'>alert('You have successfull login !!!');window.location = '../Index.php'</script>";
											

												
										} else {
											echo "<script>alert('Invalid username or password !!!');window.location = '../login.php'</script>";
										}
						$conn->close();
					}
