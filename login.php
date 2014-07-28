<?php 
ob_start();

// SET THE PASSWORD
$password= "admin";



// DONT CHANGE
session_start();


// EXIT 
if (isset($_GET['exit'])){
session_destroy();
header('Location: ./');
}


// CHECK IF IS SET SESSION AND POST

if (!isset($_SESSION['pasi'])){
if(isset($_POST['pasi'])){
$_SESSION['pasi']=$_POST['pasi'];
} else{
echo "
<style>
body{
text-aling:center;
margin:30px auto;
background:#444;
}
.login input {
font-size:17pt;
border:1px solid #5f5;
display:inline-block;
border-radius:4px;
margin:4px;
padding:10px;
}
</style>
<title>Login</title>
<body><center>
<form action=''  class='login' method='post'><input type='password' id='pasi' placeholder='Password' name='pasi' value=''><input  width='auto' type='submit' value='Login'>
</form></center></body>";
exit();
}}
if ($_SESSION['pasi']!= $password){
session_destroy();
header('Location: ');
}

// EXIT BUTTON
// You can remove this or put it to the page like example.php
echo '<a href="?exit">EXIT</a>';
?>




