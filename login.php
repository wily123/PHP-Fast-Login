<?php 
ob_start();



// SET THE PASSWORD
$password= "admin";
$error= "Password incorrect";
$newLocation = "./example.php";  // ridirect page after exit;



// DONT CHANGE
session_start();
$errMsg = false;


// RIDIRECT PAGE AFTER EXITING
if (isset($_GET['exit'])){
	session_destroy();
	header('Location: '.$newLocation);
	}

	
	
// CHECK IF IS SET SESSION AND POST
if(!$_SESSION['pasi'] || $_SESSION['pasi']!= $password ){ 
        
		session_destroy();	
		
		if(isset($_POST['pasi'])){
			$errMsg = true;
			$_SESSION['pasi']=$_POST['pasi'];
			} 
		
		if($_SESSION['pasi']!= $password){
			echo "
			<style>
			body{ text-aling:center; margin:30px auto; background:#606060; }
			.errorLogin{ color:#f33; margin:10px; font-size: 17pt; background:rgba(128,128,128, .7); border-radius: 4px; padding:2px 20px;display:inline-block}
			.login input { font-size: 17pt; border: 1px solid #FFF; display: inline-block; border-radius: 4px; 
			margin: 4px; padding: 10px; color: #FFF; background: none repeat scroll 0% 0% #0C94D4;}
			</style>
			<title>Login</title>
			<body><center>
			<form action=''  class='login' method='post'>";
			if($errMsg){ echo "<span class='errorLogin'>".$error."</span><br />";}
			echo "<input type='password' id='pasi' placeholder='Password' name='pasi' value=''><input  width='auto' type='submit' value='Login'>
			</form></center></body>";
			exit();	
			} 
	
}



// EXIT BUTTON
// You can remove this or put it to the page like example.php
echo '<a href="?exit">Exit</a>';
?>




