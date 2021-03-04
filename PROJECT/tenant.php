<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Tenant Login</title>
  <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
  <link rel="stylesheet" href="tenant.css">
</head>
<body>
    
    <div class="full-page">
        <div class="navbar">
            
            <nav>
                <ul>
                    <li><a href= "index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="owner.php">Owner</a></li>
                    <li><a href="#">Tenant</a></li>
                    <li><a href= "about.php"><i class="fa fa-user"></i>About Us</a></li>
                    <li><a href= "contact.php"><i class="fa fa-phone"></i>Contact</a></li>
                    
                </ul>
            </nav>
        </div>
        
        <div class='login-page2'>
            <div class="form-box2">
                <div class='button-box2'>
                    <div id='btn2'></div>
                    <button type='button2'onclick='login2()'class='toggle-btn2'>LogIn</button>
                    <button type='button2'onclick='signup2()'class='toggle-btn2'>SignUp</button>
                </div>
                <form id='login2' class='input-group-login2'>
                    <input type='text' class='input-field2'placeholder='User Id'required>
                    <input type='password' class='input-field2'placeholder='Password'required>
                    <input type='checkbox' class='check-box2'><span>Remember Password</span>
                    <button type='submit' class='submit-btn2'>LogIn</button>
                </form>
                <form id='signup2' class='input-group-signup2' action="tenant.php" method="post">
                    <input id="fname" name="fname" type='text' class='input-field2'placeholder='First Name'required>
                    <input id="lname" name="lname" type='text' class='input-field2'placeholder='Last Name'required>
                    <input id="email" name="email" type='email' class='input-field2'placeholder='Email Id'required>
                    <input id="date" name="date" type='date' class='input-field2'placeholder='Date of Birth'required>
                    <input id="g" name="g" type='text' class='input-field2'placeholder='Gender'required>
                    <input id="nid" name="nid" type='text' class='input-field2'placeholder='National Id'required>
                    <input id="password1" name="password1"  type='password' class='input-field2'placeholder='Enter Password'required>
                    <input id="password2" name="password2" type='password' class='input-field2'placeholder='Confirm Password'required>
                    <input type='checkbox' class='check-box2'><span>I agree to the terms and conditions</span>
                     <input type="hidden" id="frm" name="frm" value=2>
                    <button type='submit' class='submit-btn2'>SignUp</button>
                </form>
            </div>
        </div>

        <script>
            var x=document.getElementById('login2');
            var y=document.getElementById('signup2');
            var z=document.getElementById('btn2'); 
            function signup2(){
                x.style.left='-400px';
                y.style.left='50px';
                z.style.left='110px';
            }
            function login2(){
                x.style.left='50px';
                y.style.left='450px';
                z.style.left='0px';
    
                
            }
        </script>
        <script>
            var modal=document.getElementById('login-form2');
            window.onclick=function(event){
                if(event.target==modal){
                    modal.style.display="visible";
                }
            }
        </script>
    
    </div>

   
</body>

</html>



<?php

$conn= mysqli_connect('localhost','root','','myproject');



    if(!$conn){
        echo 'Connection Eror '.mysqli_connect_error();
     }
    else{

        echo "connected";
    }


    if( ($_SERVER["REQUEST_METHOD"] == "POST") && ($_POST["frm"]==2)){
        echo $_POST["password1"];
      if ($_POST["password1"]==$_POST["password2"])  {
         $fname =  test_input($_POST["fname"]);
         $lname =  test_input($_POST["lname"]);
         $email =  test_input($_POST["email"]);
         $date =  test_input($_POST["date"]);
         $g =  test_input($_POST["g"]);
         $nid =  test_input($_POST["nid"]);
         $password = $_POST["password1"];

         $sql2 = "SELECT EmailID FROM persons WHERE EmailID ='$email'";
         $result1=mysqli_query($conn,$sql2);

         if (mysqli_num_rows($result1) == 0) {

         

         
           $sql =  "INSERT INTO persons(FirstName,LastName,EmailID,BOD,Gender,National_id,PASS) VALUES('$fname','$lname','$email','$date','$g ','$nid','$password')";
  
           $result = mysqli_query($conn, $sql);

           $sql3 = "SELECT EmailID FROM persons WHERE EmailID ='$email'";
           $result2=mysqli_query($conn,$sql3); 

                if (mysqli_num_rows($result2) == 1) {
                      session_start();
                      while($row = mysqli_fetch_assoc($result2)){
                         $_SESSION['persons']= $row['EmailID'];
                         header("location:welcome-persons.php");
                         exit();




                      }
        
                  }
        
         }
         else{
            echo "Email already Used";
         } 
     }
   }
         
         
 
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
  
?>