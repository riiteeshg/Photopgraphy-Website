<?php
session_start();
 if (!isset($_SESSION["user"])){
	//header("location: login.php");
	$_SESSION["user"] = "Visitor";
	//exit;
	}  
if($_POST['abandon']==True){
	session_unset();
	header("location: login.php");
	exit;
} 
?>
<!DOCTYPE html>
<html lang = "en">
  <head>
    <link rel = "stylesheet" href = "homeStyle.css">
    <title> Ritesh Photography </title>
  </head>
  <body>
    <h1 id = "homeTitle"> RITESH PHOTOGRAPHY (<?php echo "Welcome, "; 
	echo $_SESSION["user"];
	?>)</h1>
    <div id = "tabArea">
      <a href = "#aboutLink"> <button class = "tabs"> About </a>
      <button class = "tabs"> <a href = "collage.html"> Collage </a> </button>
      <a href = "#contactLink"> <button class = "tabs"> Contact </a>
	  <form method="post">
               <input type="hidden" name="abandon" value="true">
               <label> </label>
               <button class = "tabs" type="submit">Logout</button>
         </form>
    </div>
    <br/>
    <div id = "coverImages">
      <span id = "categoryCover">
      <a href = "#portrait"> <img class = "hi" src="img1.jpg"> </a>
      <a href = "#landscape"> <img class = "hi" src="img2.heic"> </a>
      </span>
    </div>

    <h2 class = "category" id = "portrait"> PORTRAITS </h2>
    <h3 class = "category"> CATEGORY 1 </h3>
    <img class = "categoryIMG" src="img10.jpg">
    <h3 class = "category"> CATEGORY 2 </h3>
    <img class = "categoryIMG" src="img6.jpg">

    <h2 class = "category" id = "landscape"> LANDSCAPES </h2>
    <h3 class = "category"> CATEGORY 1 </h3>
    <img class = "categoryIMG" src="img5.jpg">
    <h3 class = "category"> CATEGORY 2 </h3>
    <img class = "categoryIMG" src="img9.jpg">

    <div id = "aboutArea">
      <h2 id = "aboutLink"> ABOUT </h2>
      <p>
        My name is Ritesh! I have been taking photos for 5 + years. 
        I've taken several photography classes in high school, 
        where we worked with Film cameras and developing film to working 
        with digital cameras in a studio setting. I have no bounds when 
        it comes to what kind of photos I shoot. In this website, 
        you will be able to see the variety of my photography.
      </p>
    </div>

    <div id = "contactArea">
      <h2 id = "contactLink"> CONTACT </h2>
      <form action = "">
        <div id = "contactLeft">
          <label> Name: <input type: = "text"> </input> </label>
          <br/>
          <label> Email: <input type: = "text"> </input> </label>
        </div>
        <div id = "contactRight">
          <label id = "description"> Description: <textarea rows = "4" cols = "50"> </textarea> </label>
        </div>
        <div id = "contactSubmit">
          <label> <input type = "submit" value = "Submit Form"> </input> </label>
        </div>
    </form>
    </div>
  </body>
</html>
