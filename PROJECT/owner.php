<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Owner Login</title>
  <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
  <link rel="stylesheet" href="owner.css">

</head>
<body>
    
    <div class="full-page">
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href= "index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="#">Owner</a></li>
                    <li><a href="tenant.php">Tenant</a></li>
                    <li><a href= "about.php"><i class="fa fa-user"></i>About Us</a></li>
                    <li><a href= "contact.php"><i class="fa fa-phone"></i>Contact</a></li>
                    
                </ul>
            </nav>
        </div>

    <div class='login-page1'>
        <div class="form-box1">
            <div class='button-box1'>
                <div id='btn1'></div>
                <button type='button1'onclick='login1()'class='toggle-btn1'>LogIn</button>
                <button type='button1'onclick='signup1()'class='toggle-btn1'>SignUp</button>
            </div>
            <form id='login1' class='input-group-login1'>
                <input type='text' class='input-field1'placeholder='User Id'required>
                <input type='password' class='input-field1'placeholder='Password'required>
                <input type='checkbox' class='check-box1'><span>Remember Password</span>
                <button type='submit' class='submit-btn1'>LogIn</button>
            </form>
            <form id='signup1' class='input-group-signup1' action="owner.php" method="post">

                <input id="fname" name="fname" type='text' class='input-field1'placeholder='First Name'required>
                <input id="lname" name="lname" type='text' class='input-field1'placeholder='Last Name'required>
                <input id="email" name="email" type='email' class='input-field1'placeholder='Email Id'required>
                <input id="date" name="date" type='date' class='input-field1'placeholder='Date of Birth'required>
                <input id="g" name="g" type='text' class='input-field1'placeholder='Gender'required>
                <input id="nid" name="nid" type='text' class='input-field1'placeholder='National Id'required>
                <input id="password1" name="password1"  type='password' class='input-field1'placeholder='Enter Password'required>
                <input id="password2" name="password2"  type='password' class='input-field1'placeholder='Confirm Password'required>
                <input id="agree" name="agree" type='checkbox' class='check-box1'><span>I agree to the terms and conditions</span>
                 <input type="hidden" id="frm" name="frm" value=2>
                <button type='submit' class='submit-btn1'>SignUp</button>
            </form>
        </div>

        <script>
            var x=document.getElementById('login1');
            var y=document.getElementById('signup1');
            var z=document.getElementById('btn1'); 
            function signup1(){
                x.style.left='-400px';
                y.style.left='50px';
                z.style.left='110px';
            }
            function login1(){
                x.style.left='50px';
                y.style.left='450px';
                z.style.left='0px';
            }
        </script>
        <script>
            var modal=document.getElementById('login-form1');
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

         $sql2 = "SELECT EmailID FROM owner WHERE EmailID ='$email'";
         $result1=mysqli_query($conn,$sql2);

         if (mysqli_num_rows($result1) == 0) {

         

         
           $sql =  "INSERT INTO owner(FirstName,LastName,EmailID,BOD,Gender,National_id,PASS) VALUES('$fname','$lname','$email','$date','$g ','$nid','$password')";
  
           $result = mysqli_query($conn, $sql);

           $sql3 = "SELECT EmailID FROM owner WHERE EmailID ='$email'";
           $result2=mysqli_query($conn,$sql3); 

                if (mysqli_num_rows($result2) == 1) {
                      session_start();
                      while($row = mysqli_fetch_assoc($result2)){
                         $_SESSION['owner']= $row['EmailID'];
                         header("location:welcome-owner.php");
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




