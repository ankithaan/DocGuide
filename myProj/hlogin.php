<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"kyp");
if($db)
{
//echo "connected succesfully";
}
else{
echo "not connected";
}
?>

<?php
session_start();

if (isset($_POST['login_user']))
{
//mysqli_connect('localhost','root','') or die(mysqli_error());
     
     $username=$_POST['username'];
     $password=$_POST['password'];
if($username!=''&&$password!='')
 {
   $query=mysqli_query($conn,"select * from users where username='".$username."' and password='".$password."'") or die(mysqli_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['username']=$username;
    header('location:webProj.php');
   }
   else
   {
    echo "Entered username and password is incorect";
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:;
  margin-left:75%;
}

.topnav a {
  float: left;
  color:black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color:pink;
  color: black;
}

.a1{
position:absolute;
margin-top:5%;
margin-left:37%;
}

mark{
background:white;
}

mark1{
background:snow;
}
fieldset{
    background-color:white;
    filter:alpha(opacity=10); /* IE */
    -moz-opacity:0.9; /* Mozilla */
    opacity:1.0;
}
.hi{
max-width: 450px;
padding: 10px 10px;
    background:pink;
margin: 5px auto;
padding: 10px;
background:snow;
border-radius: 30px;
font-family:  Georgia, Times New Roman, sans-serif;
margin-left:60%;
margin-top:5%;
}

.hi h1
{
text-shadow: 2px 2px red;
}

.hi fieldset{
border: none;
}
.hi legend {
font-size: 1.5em;
margin-bottom: 8px;
}

.hi button{
position: relative;
display: block;
padding:8px 5px 2px 5px;
color: black;
margin: 0 auto;
background: snow;
font-size: 18px;
text-align: center;
font-style: normal;
width: 50%;
border: 1px solid black;
border-width: 2px 2px 5px;
margin-bottom: 10px;
}

.hi button:hover
{
background:lavender;
}

.wed {
  display: block;
  width: 20%;
  height: auto;
  margin-left:10%;
  margin-top:20%;
}
.open-button {
  background-color:purple;
  color:white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 1.0;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
  margin-right:72%;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 5px solid pink;
  z-index: 9;
  margin-right:72%;
}

/* Add styles to the form container */
.form-container {
  max-width: 310px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.plan
{
color:black;
margin-left:12%;
margin-top:1%;
font-family:"Tangerine", serif;
font-size:110%;
}




</style>
<title>LOGIN</title>
<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

</head>

<center>

<body id="body-color"  style="background:url(wa11.jpg); background-repeat:no-repeat;background-size:100% 100%">

<div id="Register" class="topnav"><a href="#">
<a href="webProj.php"><b>Home</b><i class="fas fa-gift"></i></a>
<a href="hsign.php"><b>Sign-up</b><i class="fas fa-id-badge"></i></a>


<!--<div id="Register" class="topnav"><a href="#">

<a href="c7.php"><b>Home</b></a>
<a href="c6.php"><b>About</b></a>
<a href="c10.php"><b>Sign-up</b></a>
<a href="c3.php"><b>Login</b></a>
<a href="a1.php"><b>Contact Us</b></a>-->
</div>

<div class="hi">
<form action="" method="post">
  <div id="login">
  <fieldset>
<legend><h1>LOGIN</h1></legend><br/><br/><br/>
<div class="input-group">
  		<label></label>
  		<input type="text" name="username" placeholder="Enter Your Username" >
  	</div>
  	<div class="input-group">
  		<label></label>
  		<input type="password" name="password" placeholder="Enter Your Password" >
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="hsign.php">Sign up</a>
  	</p>



</fieldset>
</div>
  </form>
</div>
</center>


<div class="plan">
<h1><p>DOCTOR'S GUIDE</p></h1>
<h1><p></p></h1>
<h1><p></p></h1>

</div>
<button class="open-button" onclick="openForm()"><b>Comments</b></button>

<div class="form-popup" id="myForm">

  <form action="" class="form-container" method="post"> 
<!--<label for="name"><b>Name</b></label>-->
    <td><input type="text" placeholder="Enter name" name="name" required></td>

    <!--<label for="email"><b>Email</b></label>-->
    <td><input type="text" placeholder="Enter Email" name="email" required></td>

    <!--<label for="cn"><b>Contact</b></label>-->
    <td><input type="text" placeholder="Enter contact" name="cn" required></td>

<!--<label for="address"><b>Address</b></label>-->
    <td><input type="text" placeholder="Enter address" name="address" required></td>

    <td><textarea id="subject" name="subject" placeholder="Write a message" style="height:120px"></textarea></td>

    <button type="submit" class="btn" name="send">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
 
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>



</body>
</html>





