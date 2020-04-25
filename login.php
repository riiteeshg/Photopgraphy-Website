
<?php
$password = "guest";

if (isset($_COOKIE['Upassword'])) {
   if ($_COOKIE['Upassword'] == $password) {
?>

    <!-- LOGGED IN CONTENT HERE -->

<?php
		echo "Good Cookie.";
		echo "Username: ";
		echo $_COOKIE['RPpassword'];
		echo "Password: ";
		echo $_COOKIE['RPuser'];
   } else {
      echo "Bad Cookie.";
      exit;
   }
} 

if (isset($_GET['p']) && $_GET['p'] == "login") {
   if (strlen($_POST['user'])<1) {
      echo "Sorry, that username is too short.";
      exit;
   } else if ($_POST['password'] != $password) {
      echo "Sorry, that password does not match. Look at the hint dummy";
      exit;
   } else if (strlen($_POST['user'])>0 && $_POST['password'] == $password) {
	  session_start();
      setcookie('RPuser', $_POST['user']);//cookie
	  setcookie('RPpassword', $_POST['password']);//cookie
	  $_SESSION['user']= $_POST['user'];
      header("location: home.php");
	  exit;
   } else {
      echo "Sorry, you could not be logged in at this time.";
   }
}
?>
<html>
   <head>
      <title>Login</title>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="pageContainer centerText">
         <h2>Login</h2>
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" method="post" class="formLayout">
            <div class="formGroup">
               <label>Username:</label>
               <input type="text" name="user" id="user" 
                      class="formElement" 
                      placeholder="User name" 
                      required autofocus /><br>
            </div>   
				
            
            <div class="formGroup">
               <label>Password:</label>
               <input type="password" name="password" id="password" class="formElement" 
                      placeholder="password"
                      title="password" required /><br>
               <label></label>(hint: password is 'guest')<br>
               <label></label>
             <span class="alert">&nbsp;
                           </span>           
            </div>

            <div class="formGroup">
               <label> </label>
               <input type="hidden" name="postback" value="true">
               <button type="submit">Login</button>
            </div>

            <div class="vertGap55 centerText">
                 <a href="home.php">Login as visitor.</a>
            </div>
         </form>     

      </div>
   </body>
</html>
