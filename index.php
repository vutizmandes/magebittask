<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script>
function validateForm() {
  var x = document.forms["myForm"]["mail"].value;
  var checkBox = document.getElementById("myCheck");
  var atpos = x.indexOf("@");
  var dotpos = x.lastIndexOf(".");
  var restricted = x.slice(dotpos);
  
  if (x == ""){
    document.getElementById("error").innerHTML ="*Email address is       required";
    return false;
  }
  else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
    document.getElementById("error").innerHTML = "Not a valid e-mail address";
    return false;
  } 
  else if(restricted == ".co"){
    document.getElementById("error").innerHTML = "We are not accepting subscriptions from Colombia emails";
    return false;
  }
  else if(checkBox.checked == false){
    document.getElementById("error").innerHTML = "You must accept the terms and conditions";
    return false;
  }
  
  
}
</script>

<style>
body {
  font-family: Arial;
  color: black;
  background-color: #F2F5FA;
}

@media only screen and (max-width: 1200px){
  body {
    
  }
  .split {
    height:100%;
	width:300px;
  }
  .left {
    
	width:300px;
	
  }
  .right{
    background-color: red;
	width: 0px;
	display:none;
  }
  #logo-text {
    display:none;
	color:#F2F5FA;
  }
  #header {
    
  }
  #container {
    width:500px;
	
    background-color:#F2F5FA;
	/* background-image: url("img/image_summer.png"); */
  }
  #container-inner {
  
  
  }
}

.split {
  height: 1080px;
  width: 60%;
  position: fixed;
  z-index: -1;  /* was 1 */
  top: 0;
  overflow-x: hidden;
  padding-top: 0px;
}

.left {
  left: 0;
  width: 680px;
  /* background-color: #111; */
}

.right {
  right: 0;
  background-color: red;
  background-image: url("img/image_summer.png");
  background-repeat: no-repeat;
  background-size: contain;
  
}

.centered {
 /* position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;   */
}



.centered img { /*
  width: 150px;
  border-radius: 50%; */
}
 
#logo {
  padding-top:80px;
  padding-left:100px;
  display: inline-block;
}
#logo-text {
  margin-left:7px;
  font-size: 18px;
  font-family: Helvetica;
  display: inline-block;
}
#links-top {
  margin-left: 20px;
  font-size: 18px;
  font-family: Helvetica;
  display: inline-block;
}
#links-top a {
  color:#ccc;
  text-decoration: none;
  margin-left: 5px;
}
#subscribe {
  padding-top:100px;
  padding-left:140px;
}
#subscribe p {
  color:#6A707B;
}
input[type=text] {
  margin-top: -60px;
  margin-left: 100px;
  
  display: inline-block;
  width: 55%;
  height: 80px;
  border: 1px solid #F2F5FA;
  border-left: 4px solid #4066A5;
  padding-left: 10px;
}

input[type=text]:hover {
  
  margin-left: 100px;
  
  display: inline-block;
  width: 55%;
  height: 80px;
  border: 1px solid #4066A5;
  border-left: 4px solid #4066A5;
}

input[type=text]:focus {
  
  margin-left: 100px;
  top: 579px;
  display: inline-block;
  width: 55%;
  height: 50px;
  border: 1px solid #4066A5;
  border-left: 4px solid #4066A5;
}

input[type=submit] {
  width: 60px;
  height: 48px;
  border: 1px solid #F2F5FA;
  display: inline-block;
 /* margin-left: 100%;  */
  
  background-image:url("img/ic_arrow.png");
  background-repeat: no-repeat;
  background-position: center;
}


input[type=submit]:hover {
  width: 50px;
  height: 48px;
  border: 1px solid #4066A5;
  display: inline-block;
 /* margin-left: 100%; */
  background-image:url("img/ic_arrow_hover.png");
  background-repeat: no-repeat;
  background-position: center;
}

/*
#checkbox {
  width:20px;
  height: 20px;
  background-color: blue;
  margin-left:40px;
  margin-top: 40px;
}
*/
input[type=checkbox], .checkbox {
  
  padding-left:140px;
  margin-top: 20px;

  
}
.checkbox a, .checkbox a:hover {
  color: black;
  font-weight: bold;
}
form {
   
}

hr {
  color: #6A707B;
  width: 40%;
  margin-top: 60px;
  padding-right: 30%; 
}

#social {
  
  height: 46px;
  margin: auto;
  width: 50%;
}
#fb {
  display: inline-block;
  height: 46px;
  width:46px;
  background-image:url("img/Facebook.png");
  background-repeat: no-repeat;
  background-position: center;
}
#fb:hover {
  display: inline-block;
  height: 46px;
  width:46px;
  background-image:url("img/Facebook-hover.png");
  background-repeat: no-repeat;
  background-position: center;
}
#fb a, #fb a:hover {
  display:block;
  height: 46px;
  width:46px;
}

#insta {
  display: inline-block;
  height: 46px;
  width:46px;
  background-image:url("img/Instagram.png");
  background-repeat: no-repeat;
  background-position: center;
}
#insta:hover {
  display: inline-block;
  height: 46px;
  width:46px;
  background-image:url("img/Instagram-hover.png");
  background-repeat: no-repeat;
  background-position: center;
}
#insta a, #insta a:hover {
  display:block;
  height: 46px;
  width:46px;
}

#twit {
  display: inline-block;
  height: 46px;
  width:46px;
  background-image:url("img/Twitter.png");
  background-repeat: no-repeat;
  background-position: center;
}
#twit:hover {
  display: inline-block;
  height: 46px;
  width:46px;
  background-image:url("img/Twitter-hover.png");
  background-repeat: no-repeat;
  background-position: center;
}
#twit a, #twit a:hover {
  display:block;
  height: 46px;
  width:46px;
}

#youtube {
  display: inline-block;
  height: 46px;
  width:46px;
  background-image:url("img/Youtube.png");
  background-repeat: no-repeat;
  background-position: center;
}
#youtube:hover {
  display: inline-block;
  height: 46px;
  width:46px;
  background-image:url("img/Youtube-hover.png");
  background-repeat: no-repeat;
  background-position: center;
}
#youtube a, #youtube a:hover {
  display:block;
  height: 46px;
  width:46px;
}
#error {
  padding-left:100px;
  color:red;
}
#error-php {
  padding-left:100px;
  color:red;
}

</style>
</head>
<body>
<?php
  require "admin/connect.php";
  // define variable emailErr
$emailErr = "*";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $today = date("Y-m-d H:i:s");
  $email = test_input($_POST["mail"]);  //email that user entered
  $parts = explode('@', $email);
  $domain = $parts[1];  // domain part of e-mail
  $restricted = substr($email,-3);  // last 3 symbols of email for .co domain check
  
  if (empty($_POST["mail"])) {
    $emailErr = "Email address is required";
  }// else if {
    
    // check if e-mail address is well-formed
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Not a valid e-mail address";
    } 
	//check if checkbox checked state
	else if (!isset($_POST['subscribe'])){
	  $emailErr = "You must accept the terms and conditions";
	  }
	// if domain is Columbian
	else if ($restricted == ".co"){
	  $emailErr = "We are not accepting subscriptions from Colombia emails";
	}
	//if not any of reasons to decline subscription
	else {
		$sql = "INSERT INTO persons (email, time_added, domain) VALUES ('$email', '$today', '$domain')";
        if($mysqli->query($sql) === true){
          // echo "Records inserted successfully.";
        } else{
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
        }
 
      // Close connection
      $mysqli->close();
		$emailErr = "Congratulations! You have successfully subscribed!";
	}
  
    // echo $email;
   
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
?>
<div class="split left">
 <div id="header">
  <div id="logo">
    <img src="img/Union.png">
	<div id="logo-text">pineapple.</div>
	<div id="links-top">
	  <a href="#">About</a>
	  <a href="#">How it works</a>
	  <a href="#">Contact</a>
	</div>
  </div>
  </div> <!-- div header end -->
  <div id="container">
  <div id="container-inner">
  <div id="subscribe">
  
    <h2>Subscribe to newsletter</h2>
	<p>Subscribe to our newsletter and get 10% discount on<br>
	pineapple glasses</p>
  </div>
  
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="myForm" onsubmit="return validateForm();" method="post">
      <div style=" display: inline-block; width:100%; heigth:48px; ">
	  
	  <input type="text" placeholder="Type your email address here..." name="mail" >
	  
	  <input type="submit" name="submit" value="">
	  ​<div id="error"></div>
	  ​<div id="error-php"><?php echo $emailErr;?></div>
	  </div>
	  <div class="checkbox">
	    <label>
        <input type="checkbox" checked="checked" name="subscribe" id="myCheck"> I agree to <a href="#">terms of service</a>
        </label>
	  </div>
    
   </form>
    <hr>
	<div id="social">
	  <div id="fb"><a href="https://facebook.com"></a></div>
	  <div id="insta"><a href="https://instagram.com"></a></div>
	  <div id="twit"><a href="https://twitter.com"></a></div>
	  <div id="youtube"><a href="https://youtube.com"></a></div>
	</div>
	</div>
	</div>  <!-- div container end -->
</div>

<div class="split right">
  <div >
    
  </div>
</div>
     
</body>
</html> 
