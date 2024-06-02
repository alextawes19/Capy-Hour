<!DOCTYPE html>
  <html>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <title> Login </title>
      
    </head>

    <body class="background-color: teal darken-2" class="border">
      <center><h1 style="font-family: arial black"> Capy Hour </h1></center>

      <div class="container">
        <center><h3>Login</h3></center>

        <!--Login Form-->
        <form action="login.php" method="post">

        <label for="username" style="font-family: arial black">Username: </label>
        <input type="text" name="uname" id="username" placeholder="enter username" style="text-align:center"><br>

        <label for="password_" style="font-family: arial black">Password: </label>
        <input type="text" name="pword" id="password_" placeholder="enter password" style="text-align:center"><br>

        <center><input type="submit" value ="Login" class="btn green accent-4"></center>
        </form>
        <!--End Registration Form-->

        <a href="index.php" class="waves-effect waves-light btn"><i class="material-icons right">edit</i>Register</a>

      </div>
  </html>