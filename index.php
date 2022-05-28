<html>
  <head>
    <title>PHP Form</title>
  </head>
  <body>
<?php
  $name="";
  $email="";
  $gender="";
  $comment="";
  $website="";

  if($_SERVER["REQUEST_METHOD"]=="POST"){
	  $name=$_POST["name"];
	  $email=$_POST["email"];
	  $gender=$_POST["gender"];
	  $comment=$_POST["comment"];
	  $website=$_POST["website"];
  }

?>
    
    <form action="<?php echo
$_SERVER["PHP_SELF"]; ?>" method="post">
  <label for="fname">Name:</label><br>
  <input type="text" id="name" name="name" ><br>
  <label for="email">E-mail:</label><br>
  <input type="text" id="email" name="email" ><br>
  <label for="website">Website:</label><br>
  <input type="text" id="website" name="website" ><br>
  <label for="comment">Comment:</label><br>
  <input type="text" id="comment" name="comment" ><br>
   <label for="gender">Gender:</label><br>
  <input type="radio" id="html" name="gender" value="female">
<label for="html">Female</label>
  <input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
  <input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label><br>
  <input type="submit" value="Submit">
</form> 

<?php
	echo"<h2>Your input:</h2>";
	echo $name;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $website;
	echo "<br>";
	echo $comment;
	echo "<br>";
	echo $gender;

?>
  </body>
</html>