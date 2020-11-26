
<!DOCTYPE html>
<html>
    <title>StoreCollection</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
 
}

* {
  box-sizing: border-box;
}
.bg {
 
  background-image: url("Rit3.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


/* Add styles to the form container */
.container {
  position: absolute;
  left: 38%;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }

</style>

</head>
<body class="bg">
  <h1 class="glow"><b><font face="Arial"color="white">Store Collection</font></b></h1>
    <form action="validation.php" class="container reg-center" method="post">
    <h1>Login</h1>
    <br>
    <label for="email"><b>UserName</b></label>
    <input type="text" placeholder="Enter UserName" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn" name="Login">Login</button><br><br>
   <button type="submit" class="btn" name="Register"><a href="r2.php">Register</a></button>
    </form>
</body>
</html>

